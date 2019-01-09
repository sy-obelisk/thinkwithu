<link rel="stylesheet" href="/cn/schools/css/rankinList.css">

<section class="rankListCover">
    <!--左边-->
    <div class="rankListLeft">
        <div class="leftTitle">排名类型</div>
        <ul class="listContent">
            <!--循环li 当前这个加上类名 listOn   推荐的加上类名 recommend -->
            <?php foreach($class['classes'] as $k=>$v){?>
            <li class="<?php echo $k==0?'recommend':''; if(Yii::$app->request->get('classId',296)==$v['id'])echo ' listOn';?>">
                <a href="/schools-ranking/<?php echo $v['id']?>/<?php echo Yii::$app->request->get('yearId',427)?>/1.html"> <?php echo $v['name']?></a>
            </li>
            <?php }?>
        </ul>
        <div class="succesCase">成功案例</div>
        <div class="caseContent bd">
            <ul>
                <?php foreach($case as $v){?>
                    <li><b>•</b><a href="/case/<?php echo $v['id']?>.html"><?php echo $v['title']!=false?$v['title']:$v['name']?></a></li>
               <?php }?>
            </ul>
        </div>
        <script>
            jQuery(".rankListLeft").slide({mainCell:".bd ul",autoPage:true,effect:"topLoop",autoPlay:true,vis:8});
        </script>
        <div class="rightCenter">
            <div>
                <a href="/background-test.html" target="_blank">
                    <img src="/cn/schools/images/background.png" alt="">
                    <p>背景测评</p>
                </a>
            </div>
            <div>
                <a href="/choice-test.html" target="_blank">
                    <img src="/cn/schools/images/choose-school.png" alt="">
                    <p>选校测评</p>
                </a>
            </div>
            <div>
                <a href="/percentages-test.html" target="_blank">
                    <img src="/cn/schools/images/admission.png" alt="">
                    <p>录取几率</p>
                </a>
            </div>
        </div>
        <!--广告1-->
        <div class="advertising_1">
<!--            <p>热门留学方案,看前辈们是怎么成功拿到offer!</p>-->
        </div>
        <!--广告2-->
        <div class="advertising_2">
<!--            <p>如何利用文书包装自己？<br>-->
<!--                文书导师在线解答-->
<!--            </p>-->
        </div>
        <!--二维码-->
        <div class="qrCode">

        </div>
        <p class="qrCodeP">靠谱学习资源,文书资源咨询</p>
    </div>
    <!--右边-->
    <div class="rankListRight">
        <!--年份-->
        <div class="rightTitle">
           <ul class="rightTitleContent">
               <a class="year">年份:</a>
               <!--当前这个加上类名 on-->
               <?php foreach($data['years'] as $v){?>
               <a href="/schools-ranking/<?php echo \Yii::$app->request->get('classId',296)?>/<?php echo $v['id']?>/1.html" class="<?php echo $v['id']==\Yii::$app->request->get('yearId',427)?'on':'';?>">
                   <?php if($v['id']==428){?><img src="/cn/schools/images/new.png" alt="" class="new"><?php }?><?php echo $v['name']?></a>
               <?php }?>
           </ul>
        </div>
        <div class="schoolContent">
            <ul>
                <!--循环li-->
                <?php foreach($data['data']['data'] as $k=>$v){?>
                    <li>
                        <div class="ContentLeft"><?php echo $v['ranking']?></div>
                        <div class="ContentCenter">
                            <a href=""><p><?php echo $v['chineseName']?></p></a>
                            <p><?php echo $v['englishName']?></p>
                            <p>查看人数 : <b><?php echo rand(3000,20000)?></b></p>
                        </div>
                        <div class="ContentRight">
                            <a href="/percentages-test.html"><i class="iconfont ">&#xe61a;</i><span>录取几率</span></a>
                            <a href=""><i class="iconfont ">&#xe666;</i><span><span>推荐导师</span></a>
                            <a href="/case.html"><i class="iconfont ">&#xe60b;</i><span>热门案例</span></a>
                        </div>
                    </li>
                <?php }?>
            </ul>
            <!--分页-->
            <div class="page pagetop">
                <ul id="page_s">
                    <!--当前的加上on-->
                    <?php $n=ceil($data['data']['count']/15);
                    for($i=1;$i<=$n;$i++){?>
                        <a href="/schools-ranking/<?php echo \Yii::$app->request->get('classId',296)?>/<?php echo \Yii::$app->request->get('yearId',427)?>/<?php echo $i?>.html" class="<?php if($i==\Yii::$app->request->get('page',1)){echo 'on';}else{echo 'iPage';}?>"><?php echo $i?></a>
                    <?php }?>
<!--                    <a href="" class="on">1</a>-->
<!--                    <a href="" class="iPage">2</a>-->
                </ul>
            </div>
        </div>
    </div>
</section>