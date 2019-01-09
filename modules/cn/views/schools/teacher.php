<link rel="stylesheet" href="/cn/schools/css/teacher.css">

<section class="teacherCover">
    <!--banner-->
    <div class="teacher_banner">
        <img src="/cn/schools/images/ranking.png" alt="">
    </div>
    <div class="teacherContent">
        <!--最新消息-->
        <div class="messageNew">
            <div class="messageLeft"><i class="iconfont">&#xe627;</i><span>最新消息</span></div>
            <div class="messageRight">
                <div class="bd">
                    <ul class="bdlist">
                        <?php
                        foreach($teacher['barrage'] as $k=>$v) {
                            ?>
                            <li><p><?php echo $v['dateTime'];?> 已为申友网会员<?php echo isset($v['nickname'])?$v['nickname']:$v['userName'] ?>同学安排<?php
                                if($k==0){
                                    echo "美国";
                                } elseif($k==1){
                                    echo "英国";
                                } elseif($k==2){
                                    echo "美国";
                                } elseif($k==3){
                                    echo "香港";
                                } elseif($k==4){
                                    echo "加拿大";
                                } elseif($k==5){
                                    echo "澳洲";
                                } elseif($k==6){
                                    echo "韩国";
                                } elseif($k==7){
                                    echo "日本";
                                } elseif($k==8){
                                    echo "新加坡";
                                } else{
                                    echo "中国";
                                }
                                ?>留学顾问</p></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            jQuery(".messageRight").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",interTime:50,trigger:"click",vis:2});
        </script>
        <!--老师详情-->
        <div class="teacherTitle">
            <ul class="rightTitleContent">
                <a class="year">申请国家:</a>
                <!--当前这个加上类名 on-->
                <a href="/counselor-teachers/0/1.html" class="<?php if(\Yii::$app->request->get('country')==0) echo 'on'?>">全部</a>
                <a href="/counselor-teachers/246/1.html" class="<?php if(\Yii::$app->request->get('country')==246) echo 'on'?>">美国</a>
                <a href="/counselor-teachers/254/1.html" class="<?php if(\Yii::$app->request->get('country')==254) echo 'on'?>">英国</a>
                <a href="/counselor-teachers/252/1.html" class="<?php if(\Yii::$app->request->get('country')==252) echo 'on'?>">澳洲</a>
                <a href="/counselor-teachers/249/1.html" class="<?php if(\Yii::$app->request->get('country')==249) echo 'on'?>">香港</a>
                <a href="/counselor-teachers/250/1.html" class="<?php if(\Yii::$app->request->get('country')==250) echo 'on'?>">新加坡</a>
                <a href="/counselor-teachers/253/1.html" class="<?php if(\Yii::$app->request->get('country')==253) echo 'on'?>">加拿大</a>
                <a href="/counselor-teachers/251/1.html" class="<?php if(\Yii::$app->request->get('country')==251) echo 'on'?>">欧洲</a>
                <a href="/counselor-teachers/247/1.html" class="<?php if(\Yii::$app->request->get('country')==247) echo 'on'?>">韩国</a>
                <a href="/counselor-teachers/248/1.html" class="<?php if(\Yii::$app->request->get('country')==248) echo 'on'?>">日本</a>
                <a href="/counselor-teachers/255/1.html" class="<?php if(\Yii::$app->request->get('country')==255) echo 'on'?>">中国</a>
            </ul>
        </div>
        <div class="tea_content">
            <!--左边-->
            <div class="tea_details">
                <ul>
                    <!--循环li-->
                    <?php foreach ($teacher['data']['data'] as $v) { ?>
                        <li>
                            <a href="/counselor-detail/<?php echo $v['id']?>.html" style="display: block">
                                <!--老师图片 名字-->
                                <div class="tea_img">
                                    <div>
                                        <img src="http://www.smartapply.cn<?php echo $v['image'] ?>" alt="文服老师">
                                    </div>
                                    <p><?php echo $v['name'] ?></p>
                                </div>
                                <!--个人简介-->
                                <div class="personal">
                                    <p class="Introduction"><span>个人简介</span> <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" class="reservation">预约咨询</a></p>
                                    <p class="practicing"><?php echo $v['source'] ?> <?php echo $v['buyNum'] ?>
                                        从业<?php echo $v['age'] ?>年</p>
                                    <div class="personalWords"><?php echo strip_tags($v['answer']) ?></div>
                                    <div class="impression">
                                        <div>
                                            <p><?php echo $v['students'] ?>份</p>
                                            <p>获取录取通知书</p>
                                        </div>
                                        <div>
                                            <p><?php echo $v['successRate'] ?>%</p>
                                            <p>留学申请成功率</p>
                                        </div>
                                        <div>
                                            <p><?php echo $v['impression'] ?>分</p>
                                            <p>学生印象分</p>
                                        </div>
                                    </div>
                                </div>
                                <!--清除浮动的 不管-->
                                <div style="clear: both"></div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <!--分页-->
                <div class="page pagetop">
                    <ul id="page_s">
                        <?php
                        $page=\Yii::$app->request->get('page',1);
                        for($i=1;$i<$teacher['data']['totalPage']+1;$i++){
                            ?>
                            <a class="<?php echo $page==$i?'on':'iPage'?>" href="/counselor-teachers/<?php echo \Yii::$app->request->get('country')?>/<?php echo $i?>.html"><?php echo $i?></a>
                        <?php }?>
                        <!--                        <a class="iPage"  href="">2</a>-->
                    </ul>
                </div>
            </div>
            <!--右边-->
            <div class="rankListLeft">
                <div class="succesCase">热门顾问排行</div>
                <div class="caseContent bd">
                    <ul>
                        <!--循环li-->
                        <?php
                        $data = file_get_contents("http://www.smartapply.cn/cn/consultant/1.html?data-type=json");
                        $data = json_decode($data, true);
                        foreach ($data['data']['data'] as $v) { ?>
                            <li>
                                <div class="caseImg">
                                    <img src="http://www.smartapply.cn<?php echo $v['image'] ?>" alt="">
                                </div>
                                <div class="caseName">
                                    <p><?php echo $v['name'] ?></p>
                                    <div><?php echo $v['source'] ?></div>
                                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">咨询</a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
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
                <div class="advertising_1"></div>
                <!--广告2-->
                <div class="advertising_2"></div>
                <!--二维码-->
                <div class="qrCode"></div>
                <p class="qrCodeP">靠谱学习资源,文书资源咨询</p>
            </div>
        </div>
    </div>
</section>