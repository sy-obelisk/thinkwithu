<?php

/**
 * 导数据 API
 * Created by PhpStorm.
 * User: sjeam
 */
 namespace app\modules\cn\controllers;
 //use app\modules\cn\models\HistoryRecord;
 use app\modules\content\models\Category;
 use yii;
 use app\libs\ThinkUApiControl;
 use app\modules\cn\models\Content;
 use app\modules\cn\models\SchoolTest;
 use app\modules\cn\models\Collect;
 use app\modules\cn\models\Report;
 use app\modules\cn\models\Practices;
 use app\modules\cn\models\ExtendData;
 use app\modules\cn\models\ContentExtend;
 use app\modules\cn\models\CategoryContent;
 use app\modules\cn\models\ProbabilityTest;
 use app\modules\cn\models\UserBackground;
 use app\modules\cn\models\Login;
 use app\libs\Sms;
 use app\libs\Method;
 use app\libs\Schools;
 use app\libs\VerificationCode;
 header('Access-Control-Allow-Origin: *');
 header('Access-Control-Allow-Headers: X-Requested-With');
// header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
class ApiexcelController extends ThinkUApiControl
{
    // function init (){
    //     parent::init();
    //     include_once($_SERVER['DOCUMENT_ROOT'].'/../libs/ucenter/ucenter.php');
    // }

    public $enableCsrfValidation = false;


    // 数据导入
    public function actionIndex(){
      Yii::$app->db->createCommand('select * from db.tableName')->queryAll();
      Yii::$app->db1->createCommand('select * from db1.tableName')->queryAll();
        var_dump(1111);die;
    }

     /**
     * 留学  出国数据导入 申友
     * @return string
     * @ sjeam
     */
    public function actionApply(){
        $order = 'ORDER BY sort ASC';
        $dataType = Yii::$app->request->get('data-type','arr');
        $country = Yii::$app->request->get('country','');
        $aim = Yii::$app->request->get('aim','');
        $category = Yii::$app->request->get('category','');
        $page = Yii::$app->request->get('page',1);
        $price = Yii::$app->request->get('price','');
        $buyNum = Yii::$app->request->get('buyNum','');
        $time = Yii::$app->request->get('time','');
        if($price){
            if($price == 1){
                $order = ' ORDER BY CAST(price as SIGNED) DESC';
            }else{
                $order = ' ORDER BY CAST(price as SIGNED) ASC';
            }
        }
        if($buyNum){
            if($buyNum == 1){
                $order = ' ORDER BY CAST(buyNum as SIGNED) DESC';
            }else{
                $order = ' ORDER BY CAST(buyNum as SIGNED) ASC';
            }
        }

        if($time){
            if($time == 1){
                $order = ' ORDER BY createTime DESC';
            }else{
                $order = ' ORDER BY createTime ASC';
            }
        }
        $model = new Content();
        $data = $model->listSearch($category,$country,$aim,$order,$page);
        $date =$data['data'];
        // var_dump($date);die;
        $contetnid='';
        // 留学父类id
        $catId=270;  
        $num=0;
        foreach ($date as $v) {
          // 第一步 ： 勾选 副分类
          $contetnid =$v['id'];
          $contentpid='';
          $contents = Yii::$app->db1->createCommand("select * from `x2_category_content` where contentId ='$contetnid' order by id desc")->queryAll();
          $contentids= array_column($contents,'catId');
          // 修改分类
          // 查询分类自然排序 --新旧关联分类
          // $dateva1=  Yii::$app->db1->createCommand("SELECT id,name from {{%category}} where pid=150  AND isShow = 1 order by sort DESC,createTime asc" )->queryAll();
          // 留学子分类
          $array1 = array(314,315,335,151,152,421,428,463,470,472,220,223,224);
          // 国家子分类
          $array2 = array(176,157,177,178,158,179,232);
          // 留学目标子分类
          $array3 = array(160,161);
          // 父分类
          $array4 = array(150,156,159);
      
          // 新表的分类 
          $dateva1=  Yii::$app->db->createCommand("SELECT id,name from {{%category}} where pid=270 order by id asc")->queryAll();
          $dateva2=  Yii::$app->db->createCommand("SELECT id,name from {{%category}} where pid=286 order by id asc")->queryAll();
          $dateva3=  Yii::$app->db->createCommand("SELECT id,name from {{%category}} where pid=294 order by id asc")->queryAll();
          $dateva4=  array(270,286,294);
          // var_dump($contetnid);die;
          // $contetnid=4758;
          // 第二步 ：添加父级内容
          $parent =  $model->getClass(['fields' => 'answer,speak,article,listeningFile,duration,originalPrice,description,price','where' =>"c.id=$contetnid",'countallone'=>1])[0];
          // 字符替换
          $parent['description'] =str_replace("雷哥网","申友", $parent['description']);
          $parent['description'] =str_replace("服务咨询","", $parent['description']);
          $parent['description'] =str_replace("微信咨询：thinku920","", $parent['description']);
          $parent['description'] =str_replace("QQ咨询：2745992993","", $parent['description']);
          $str ='files/attach/images/20181130/1543570721167116.png';
          $parent['description']=$model->deletestr($parent['description'],$str);
          $parent['description']=addslashes($parent['description']);
          $parentid =$parent['id'];
          // print_r($parent['description']);
          // var_dump($parent);die;
          $sql = "INSERT INTO `x2_content`(`pid`,`catId`,`name`,`title`,`image`,`createTime`,`sort`,`userId`,`viewCount`) VALUES ('0','$catId','".$parent['name']."','".$parent['title']."','" . $parent['image'] . "','" . $parent['createTime'] . "','" . $parent['sort'] . "','" . $parent['userId'] . "','" . $parent['viewCount'] . "')";
          $res = Yii::$app->db->createCommand($sql)->execute();//这里执行的是插入数据库操作
          $content = Yii::$app->db->createCommand("select id from `x2_content` order by id desc limit 1 ")->queryOne()['id'];

          Yii::$app->db->createCommand("UPDATE `x2_content` SET `sort`=$content WHERE id=$content ")->execute();
          // 添加副分类，内容
          foreach($contentids as $value){
            // var_dump($value);
                 if( in_array($value,$array1)){ $ky =array_search($value, $array1);  $catids = $dateva1[$ky]['id'];   } 
            else if( in_array($value,$array2)){ $ky =array_search($value, $array2);  $catids = $dateva2[$ky]['id'];   }  
            else if( in_array($value,$array3)){ $ky =array_search($value, $array3);  $catids = $dateva3[$ky]['id'];   } 
            else if( in_array($value,$array4)){ $ky =array_search($value, $array4);  $catids = $dateva4[$ky];         }  
            // 写入category_content  副分类 表
            $sql = Yii::$app->db->createCommand("INSERT INTO `x2_category_content`(`contentId`,`catId`) VALUES ('" . $content . "',$catids)")->execute();
            // var_dump($catids);
            // var_dump($content);die;
          }
          $leidou = Yii::$app->db->createCommand("select id from `x2_category_extend` where catId='$catId' and title='leidou' order by id desc limit 1 ")->queryOne()['id'];
          $evaluate = Yii::$app->db->createCommand("select id from `x2_category_extend` where catId='$catId' and title='evaluate' order by id desc limit 1 ")->queryOne()['id'];
          $viewcount = Yii::$app->db->createCommand("select id from `x2_category_extend` where catId='$catId' and title='viewcount' order by id desc limit 1 ")->queryOne()['id'];          
          $describe = Yii::$app->db->createCommand("select id from `x2_category_extend` where catId='$catId' and title='describe' order by id desc limit 1 ")->queryOne()['id'];
          $buy = Yii::$app->db->createCommand("select id from `x2_category_extend` where catId='$catId' and title='buy' order by id desc limit 1 ")->queryOne()['id'];
          $introduce	 = Yii::$app->db->createCommand("select id from `x2_category_extend` where catId='$catId' and title='introduce	' order by id desc limit 1 ")->queryOne()['id'];
          $times  =  Yii::$app->db->createCommand("select id from `x2_category_extend` where catId='$catId' and title='times' order by id desc limit 1 ")->queryOne()['id'];
          $price = Yii::$app->db->createCommand("select id from `x2_category_extend` where catId='$catId' and title='price' order by id desc limit 1 ")->queryOne()['id'];
          $nowprice = Yii::$app->db->createCommand("select id from `x2_category_extend` where catId='$catId' and title='nowprice' order by id desc limit 1 ")->queryOne()['id'];
          
          // 写入字符 数据
          $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$leidou."','" . $content . "','送雷豆','leidou','0','1','" . $time . "','".$parent['listeningFile']."','451fb82a6dd6bd8639311e5b26d79657')")->execute();
          $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$evaluate."','" . $content . "','累计评价','evaluate','0','1','" . $time . "','".$parent['article']."','d29f0bd8c4309cfdf0c40d0e54bc0b66')")->execute();
          $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$viewcount."','" . $content . "','浏览量','viewcount','0','1','" . $time . "','".$parent['viewCount']."','87ec188a4ea8ce90abc77ca2b3061171')")->execute();
          
          // 简介内容 --- 长文本编辑器
          if (strlen( $parent['answer']) > 255) {
            $sql = Yii::$app->db->createCommand('INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ("'.$describe.'","' . $content .'","商品介绍","describe","4","1","' . $time . '","","91fc27502ef167f30de0f39a5ea0f630")')->execute();
            $id = Yii::$app->db->createCommand("select id from `x2_content_extend` order by id desc limit 1 ")->queryOne()['id'];
            $sql = Yii::$app->db->createCommand('INSERT INTO `x2_extend_data`(`extendId`,`value`) VALUES ("' . $id . '","'.$parent['answer'].'")')->execute();
          } else {
            $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$describe."','" . $content . "','简介','describe','4','1','" . $time . "','".$parent['answer']."','91fc27502ef167f30de0f39a5ea0f630')")->execute();
          }   
          $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$buy."','" . $content . "','购买人数','buy','0','1','" . $time . "','".$parent['speak']."','e1eb000dde15e05fa0dfaa8c4b9d2504')")->execute();
          // 介绍内容 --- 长文本编辑器
          if (strlen( $parent['description']) > 255) {
            $sql = Yii::$app->db->createCommand('INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ("'.$introduce.'","' . $content .'","商品介绍","introduce","1","1","' . $time . '","","c82350e59d02eb8ce6dfab5d9c5a1215")')->execute();
            $id = Yii::$app->db->createCommand("select id from `x2_content_extend` order by id desc limit 1 ")->queryOne()['id'];
            $sql = Yii::$app->db->createCommand('INSERT INTO `x2_extend_data`(`extendId`,`value`) VALUES ("' . $id . '","'.$parent['description'].'")')->execute();
          } else {
            $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$introduce."','" . $content . "','商品介绍','introduce','1','1','" . $time . "','".$parent['description']."','c82350e59d02eb8ce6dfab5d9c5a1215')")->execute();            
          }
          $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$times."','" . $content . "','课程时长','times','0','1','" . $time . "','".$parent['duration']."','6d18833806f505bb06b5083adc72b1b3')")->execute();
          $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$price."','" . $content . "','原价','price','0','1','" . $time . "','".$parent['originalPrice']."','a05db4d7754035fb0768492b7720eef6')")->execute();
          $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$nowprice."','" . $content . "','价格','nowprice','0','1','" . $time . "','".$parent['price']."','49897faf354586f492e46e475a1edc20')")->execute();
          
          // $datelist = $model->getClass(['fields' => 'description,answer,alternatives,article,listeningFile,duration,problemComplement,sencenter,giveup','where' =>"c.pid=$content", 'category' =>"150",'countallone'=> 1]); 


          // 第三步 ：存入子类---内容
          // 查询父级--新
          $datelist = $model->getContent(['fields' => 'giveup','where' =>"c.id=$content",'category' => "270",'countall'=> 1]);
          // 查询子集--原
          $dateson = $model->getClass(['fields' => 'answer,speak,article,listeningFile,duration,originalPrice,description,price','where' =>"c.pid=$parentid",'countallone'=> 1])[0];
          if(!empty($dateson)){
        foreach ($datelist as $v) {
          // 单选--句子完成分类 catid
          $contentpid =$v['id'];
          // $v[5]=addslashes($v[5]);
          // $sql = "INSERT INTO `x2_content`(`pid`,`name`,`title`,`image`,`createTime`,`catId`,`userId`) VALUES ('".$contentpid."','".$v[1]."','','','" . $time . "',$catId,'1')";
          $sql = "INSERT INTO `x2_content`(`pid`,`catId`,`name`,`title`,`image`,`createTime`,`sort`,`userId`,`viewCount`) VALUES ('$contentpid','$catId','".$dateson['name']."','".$dateson['title']."','" . $dateson['image'] . "','" . $dateson['createTime'] . "','" . $dateson['sort'] . "','" . $parent['userId'] . "','" . $parent['viewCount'] . "')";
          Yii::$app->db->createCommand($sql)->execute();//这里执行的是插入数据库操作  
          $contentson = Yii::$app->db->createCommand("select id from `x2_content` order by id desc limit 1 ")->queryOne()['id'];
          $a = Yii::$app->db->createCommand("UPDATE `x2_content` SET `sort`=$contentson WHERE id=$contentson ")->execute();
          $sql = Yii::$app->db->createCommand("INSERT INTO `x2_category_content`(`contentId`,`catId`) VALUES ('" . $contentson . "',$catId)")->execute();
            // 写入字符 数据
            $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$leidou."','" . $contentson . "','送雷豆','leidou','0','1','" . $time . "','".$dateson['listeningFile']."','451fb82a6dd6bd8639311e5b26d79657')")->execute();
            $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$evaluate."','" . $contentson . "','累计评价','evaluate','0','1','" . $time . "','".$dateson['article']."','d29f0bd8c4309cfdf0c40d0e54bc0b66')")->execute();
            $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$viewcount."','" . $contentson . "','浏览量','viewcount','0','1','" . $time . "','".$dateson['viewCount']."','87ec188a4ea8ce90abc77ca2b3061171')")->execute();
            // 简介内容 --- 长文本编辑器
            // if (strlen( $parent['answer']) > 255) {
            //   $sql = Yii::$app->db->createCommand('INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ("'.$describe.'","' . $contentson .'","商品介绍","describe","4","1","' . $time . '","","91fc27502ef167f30de0f39a5ea0f630")')->execute();
            //   $id = Yii::$app->db->createCommand("select id from `x2_content_extend` order by id desc limit 1 ")->queryOne()['id'];
            //   $sql = Yii::$app->db->createCommand('INSERT INTO `x2_extend_data`(`extendId`,`value`) VALUES ("' . $id . '","'.$dateson['answer'].'")')->execute();
            // } else {
            //   $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$describe."','" . $contentson . "','简介','describe','4','1','" . $time . "','".$dateson['answer']."','91fc27502ef167f30de0f39a5ea0f630')")->execute();
            // }   
            // $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$buy."','" . $contentson . "','购买人数','buy','0','1','" . $time . "','".$dateson['speak']."','e1eb000dde15e05fa0dfaa8c4b9d2504')")->execute();
            // 介绍内容 --- 长文本编辑器
            // if (strlen( $parent['description']) > 255) {
            //   $sql = Yii::$app->db->createCommand('INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ("'.$introduce.'","' . $contentson .'","商品介绍","introduce","1","1","' . $time . '","","c82350e59d02eb8ce6dfab5d9c5a1215")')->execute();
            //   $id = Yii::$app->db->createCommand("select id from `x2_content_extend` order by id desc limit 1 ")->queryOne()['id'];
            //   $sql = Yii::$app->db->createCommand('INSERT INTO `x2_extend_data`(`extendId`,`value`) VALUES ("' . $id . '","'.$dateson['description'].'")')->execute();
            // } else {
            //   $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$introduce."','" . $contentson . "','商品介绍','introduce','1','1','" . $time . "','".$dateson['description']."','c82350e59d02eb8ce6dfab5d9c5a1215')")->execute();            
            // }
            // $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$times."','" . $contentson . "','课程时长','times','0','1','" . $time . "','".$dateson['duration']."','6d18833806f505bb06b5083adc72b1b3')")->execute();
            // $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$price."','" . $contentson . "','原价','price','0','1','" . $time . "','".$dateson['originalPrice']."','a05db4d7754035fb0768492b7720eef6')")->execute();
            $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_extend`(`catExtendId`,`contentId`,`name`,`title`,`type`,`userId`,`createTime`,`value`,`code`) VALUES ('".$nowprice."','" . $contentson . "','价格','nowprice','0','1','" . $time . "','".$dateson['price']."','49897faf354586f492e46e475a1edc20')")->execute();
            
            // 留学原分类 category  --content
            $gloube1 = array(302,303,320,175,222,231);
            // 申友 category  --content
            $nowgloube1=  Yii::$app->db->createCommand("SELECT id,name from {{%category}} where pid=297 order by id asc")->queryAll();
            // var_dump($nowgloube1);
            // 第四步 ：添加标签组
            $tagid=$dateson['id'];
            // 查找子类的分组
            $tagclube = Yii::$app->db1->createCommand("select * from `x2_content_tag` where contentId ='$tagid' order by id desc")->queryOne();
            // var_dump($tagclube);
            // 查询组标签 -- 原--主分类
            if( in_array($tagclube['tagCatId'],$gloube1)){ $ky =array_search($tagclube['tagCatId'], $gloube1);   $globeid = $nowgloube1[$ky]['id']; 
                $tagcatid= $tagclube['tagCatId'];
                $gloube2 = Yii::$app->db1->createCommand("select * from `x2_content` where catId ='$tagcatid' order by id asc")->queryAll();    
                $nowgloube2 = Yii::$app->db->createCommand("select * from `x2_content` where catId ='$globeid' order by id desc")->queryAll(); 
                $gloube2= array_column($gloube2,'id');
                if( in_array($tagclube['tagContentId'],$gloube2)){ $ky =array_search($tagclube['tagContentId'], $gloube2);  $tagcontentid = $nowgloube2[$ky]['id'];  }  
            }  
            // 写入组标签--新
            $sql = Yii::$app->db->createCommand("INSERT INTO `x2_content_tag`(`contentId`,`tagCatId`,`tagContentId`,`createTime`,`showd`) VALUES ('$contentson','".$globeid."','".$tagcontentid."','".$tagclube['createTime']."','".$tagclube['showd']."')")->execute();            
            // var_dump($tagclube);die;
          }
      }
      $num++;
      var_dump("<pre>完成第'$num'条...<pre>");
    }
      var_dump('<pre>恭喜你，数据全部写入完成!!!<pre>');
        // $this->title = '雷哥网，出国留学_美国留学_留学考试_GMAT课程_托福课程_小申商城出国留学互助社区';
        // $this->keywords = '雷哥网，托福,toefl,出国留学,GMAT,雅思,留学文书,选校,网申,实习';
        // $this->description = '雷哥网，成立于2012年，提供大数据驱动下的国际教育O＋O服务。雷哥网通过PC、WAP和APP等互联网平台和工具，通过院校库、案例库和录取条件库等建立选校模型，为客户的留学申请精准定位，提供个性化留学选校与申请服务，并以雷哥网学习中心提供留学与出国英语辅导线下服务，二者相辅相成。';
        // $this->type = 1;
        // return $this->exitData($data,$dataType,"apply",2);
    }



  // //模考 删除 题库--查看列表
  // public function actionDeletemokao(){
  //   $catId = Yii::$app->request->post('catid');
  //   $model = new Content();
  //   $vlist = $model->getClass(['fields' =>'','where' =>"c.pid=0", 'category' =>$catId]);
  //   die(json_encode($vlist));
  //   // var_dump($vlist);die;
  // }

  // //模考  指定id 单个删除
  // public function actionDeleteid(){
  //   $id = Yii::$app->request->post('id');
  //   $result = Content::deleteAll(['pid'=>$id]);
  //   $test = Content::find()->where(['id'=>$id])->one(); 
  //   if($test->delete()){
  //   // if($test){ 
  //     $re['code']= 1;
  //     $re['message']= '删除成功！';
  //   }else{
  //     $re['code']= 0;
  //     $re['message']= '删除失败！';
  //   }
  //   die(json_encode($re));
  //   // var_dump($vlist);die;
  // }


  // //模考 通过catid 全部删除
  // public function actionDeletecatid(){
  //   $model =new Content();
  //   $catId = Yii::$app->request->post('catid');
  //   $vlist = $model->getClass(['fields' =>'','where' =>"c.pid=0", 'category' =>$catId]);
  //   $allid= array_column($vlist,'id');
  //   if(!empty($allid)){
  //     foreach($allid as $id){
  //       $result = Content::deleteAll(['pid'=>$id]);
  //       $test = Content::find()->where(['id'=>$id])->one(); 
  //       $test->delete();
  //     }
  //     $re['code']= 1;
  //     $re['message']= '删除成功！';
  //   }else{
  //     $re['code']= 0;
  //     $re['message']= '删除失败！';
  //   }
  //   die(json_encode($re));
  // }



}

