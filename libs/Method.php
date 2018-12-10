<?php
namespace app\libs;
use yii;
use yii\data\Pagination;
use app\modules\cn\models\SchoolTest;

class Method
{
    /**
     * 分页函数
     * @param array $config 分页配置
     * @return array 分页
     * @Obelisk
     */
    public static function getPagedRows($config=[])
    {
        $pages=new Pagination(['totalCount' => $config['count']]);
        if(isset($config['pageSize']))
        {
            $pages->setPageSize($config['pageSize'],true);
        }
        return $pages;
    }
    /**
     * 生成32位字符串
     * @return string
     * @Obelisk
     */
    public static function guid()
    {
        mt_srand((double)microtime() * 10000);
        $charid = strtolower(md5(uniqid(rand(), true)));
        $uuid = substr($charid, 0, 8) . substr($charid, 8, 4) . substr($charid, 12, 4) . substr($charid, 16, 4) . substr($charid, 20, 12);
        return $uuid;
    }

    /**
     * @param string $html html内容
     * @param string $tags 保留标签
     * @return string
     */
    public static function getextbyhtml($html = '', $tags = '')
    {
        if (!empty($html)) {
            $res = preg_replace('/&nbsp;/', ' ', trim(strip_tags(htmlspecialchars_decode($html), $tags)));
            $res = trim(preg_replace('/<(p|P)>\W+<\/(p|P)>/', '', $res));
        } else {
            $res = false;
        }
        return $res;
    }

    /**
     * post请求
     * @param $url
     * @param string $post_data
     * @param int $timeout
     * @return mixed
     * @Obelisk
     */
    public static  function post($url, $post_data = '', $timeout = 5){//curl

        $ch = curl_init();

        curl_setopt ($ch, CURLOPT_URL, $url);

        curl_setopt ($ch, CURLOPT_POST, 1);

        if($post_data != ''){

            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

        }

        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

        curl_setopt($ch, CURLOPT_HEADER, false);

        $file_contents = curl_exec($ch);

        curl_close($ch);

        return $file_contents;

    }

    public static function score($res){
        $gpa = $res['gpa'];
        $gmat = $res['gmat'];
        $toefl = $res['toefl'];
        $school = $res['schoolGrade'];
        $work = $res['most'];
        $advantage = 0;
        $defect = 0;
        if($gpa>10){
            $num1 = SchoolTest::find()->where("gpa<$gpa AND gpa>10")->count();
            $sign = round($gpa/100*4, 1);
            $num2 = SchoolTest::find()->where("gpa<$sign")->count();
            $num = $num1+$num2;
            $gpa = $sign;
        }else{
            $num1 = SchoolTest::find()->where("gpa<$gpa")->count();
            $sign = ceil($gpa/4*100);
            $num2 = SchoolTest::find()->where("gpa<$sign and gpa>10")->count();
            $num = $num1+$num2;
        }
        if($gpa>=3.5){
            $gpa = [
                'score' => $gpa,
                'num' => $num+2330,
                'type' => 1,
                'name' => 'GPA'
            ];
            $advantage+=1;
        }elseif($gpa>=3.0){
            $gpa1 = "GPA $gpa";
            $gpa = null;
        }else{
            $gpa = [
                'score' => $gpa,
                'num' => $num+117,
                'type' => 0,
                'name' => 'GPA'
            ];
            $defect+=1;
        }

        if(!empty($gmat)){
            if($gmat<360){
                $num = SchoolTest::find()->where("gmat<$gmat")->count();
                if($gmat>=325){
                    $gmat = [
                        'score' => $gmat,
                        'num' => $num+2330,
                        'type' => 1,
                        'name' => 'GRE'
                    ];
                    $advantage+=1;
                }elseif($gmat>=310){
                    $gmat1 = "GRE $gmat";
                    $gmat = null;
                }else{
                    $gmat = [
                        'score' => $gmat,
                        'num' => $num+117,
                        'type' => 0,
                        'name' => 'GRE'
                    ];
                    $defect+=1;
                }
            }else{
                $num = SchoolTest::find()->where("gmat<$gmat AND gmat>360")->count();
                if($gmat>=720){
                    $gmat = [
                        'score' => $gmat,
                        'num' => $num+2330,
                        'type' => 1,
                        'name' => 'GMAT'
                    ];
                    $advantage+=1;
                }elseif($gmat>=650){
                    $gmat1 = "GMAT $gmat";
                    $gmat = null;
                }else{
                    $gmat = [
                        'score' => $gmat,
                        'num' => $num+117,
                        'type' => 0,
                        'name' => 'GMAT'
                    ];
                    $defect+=1;
                }
            }
        }else{
            $gmat =null;
        }

        if($toefl<15){
            $num = SchoolTest::find()->where("toefl<$toefl")->count();
            if($toefl>=7){
                $toefl = [
                    'score' => $toefl,
                    'num' => $num+2330,
                    'type' => 1,
                    'name' => '雅思'
                ];
                $advantage+=1;
            }elseif($toefl>=6){
                $toefl1 = "IELTS $toefl";
                $toefl = null;
            }else{
                $toefl = [
                    'score' => $toefl,
                    'num' => $num+117,
                    'type' => 0,
                    'name' => '雅思'
                ];
                $defect+=1;
            }
        }else{
            $num = SchoolTest::find()->where("toefl<$toefl AND toefl>15")->count();
            if($toefl>=110){
                $toefl = [
                    'score' => $toefl,
                    'num' => $num+2330,
                    'type' => 1,
                    'name' => '托福'
                ];
                $advantage+=1;
            }elseif($toefl>=95){
                $toefl1 = "TOEFL $toefl";
                $toefl = null;
            }else{
                $toefl = [
                    'score' => $toefl,
                    'num' => $num+117,
                    'type' => 0,
                    'name' => '托福'
                ];
                $defect+=1;
            }
        }

        $num = SchoolTest::find()->where("schoolGrade>$school")->count();
        if($school <=2){
            $school = [
                'name' => '就读院校',
                'score' => $res['attendSchool'],
                'num' => $num+2330,
                'type' => 1
            ];
            $advantage+=1;
        }elseif($school<=3){
            $school1 = "211 院校";
            $school = null;
        }else{
            $school = [
                'name' => '就读院校',
                'score' => $res['attendSchool'],
                'num' => $num+117,
                'type' => 0
            ];
            $defect+=1;
        }
        if($work == 6){
            $work = null;
            $work1 = "没有 工作经验";
        }else{
            $num = SchoolTest::find()->where("most>$work")->count();
            switch($work){
                case 1:$workName = '四大/500强';break;
                case 2:$workName = '四大/500强';break;
                case 3:$workName = '外企';break;
                case 4:$workName = '国企';break;
                case 5:$workName = '私企';break;
            }
            if($work <=2){
                $work = [
                    'name' => '工作经验',
                    'score' => $workName,
                    'num' => $num+2330,
                    'type' => 1
                ];
                $advantage+=1;
            }elseif($work<=4){
                $work1 = "$workName 工作经验";
                $work = null;
            }else{
                $work = [
                    'name' => '工作经验',
                    'score' => $workName,
                    'num' => $num+117,
                    'type' => 0
                ];
                $defect+=1;
            }
        }
        $data = array();
        if(!$gpa && !$gmat && !$toefl && !$school &&! $work){
            $data['advantage'] = [$gpa1,$gmat1,$toefl1,$school1,$work1];
        }
        if($gpa){
            $data['gpa'] = $gpa;
        }
        if($gmat){
            $data['gmat'] = $gmat;
        }
        if($toefl){
            $data['toefl'] = $toefl;
        }
        if($school){
            $data['school'] = $school;
        }
        if($work){
            $data['work'] = $work;
        }
        $data['advantage']=$advantage;
        $data['defect']=$defect;
        return $data;
    }
}