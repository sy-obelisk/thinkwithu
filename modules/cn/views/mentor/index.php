
    <link rel="stylesheet" href="/cn/css/mentor.css"/>

    <script type="text/javascript" src="/cn/js/mentor.js"></script>

<div style="clear: both"></div>
<div class="mentor-banner">
    <h1>申友海外顾问团队</h1>
    <div class="high-end">高端留学，助力传奇</div>
</div>
<!--mentor介绍-->
<div class="mentorInfo">
    <div class="info-top">
        <h4>Mentor介绍</h4>
        <ul>
            <li>各个国家各个名校都留下了我们的脚印斯坦福、哈佛、MIT、耶鲁等众多常春藤名校</li>
            <li>作为年轻一代的心灵导师及留学规划师，我们不断求索，不断勉励</li>
            <li>致力于帮助年轻的下一代开拓眼界、培养国际视野、启发创新思维、学会独立思考，领略国外留学多元文化</li>
        </ul>
    </div>

    <div class="info-center">
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'speaker,job','category' => "246",'pageSize'=>6]);
            foreach($data as $v) {
            ?>
            <li>
                <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html" target="_blank">
                    <img src="<?php echo $v['image']?>" alt="名师照片">
                </a>
                <!--遮罩层-->
                <div class="infoMask"></div>
                <!--左边介绍-->
                <div class="information">
                    <h5> <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html" target="_blank"><?php echo $v['name']?></a></h5>
                    <p> <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html" target="_blank"><?php echo $v['job']?></a></p>
                    <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html" target="_blank">查看详情</a>
                </div>
            </li>

            <?php
            }
            ?>
        </ul>
    </div>
    <div class="info-bottom">
        <ul>
            <li>
                <div class="oneWidth oneBG">
                    <a href="#">
                        <img src="/cn/images/mentor_icon01.png" alt="图标"/>
                        <h2>留学规划</h2>
                    </a>
                </div>
            </li>
            <li>
                <div class="oneWidth twoBG">
                    <a href="#">
                        <img src="/cn/images/mentor_icon02.png" alt="图标"/>
                        <h2>背景指导</h2>
                    </a>
                </div>
            </li>
            <li>
                <div class="twoWidth oneBG">
                    <a href="#">
                        <img src="/cn/images/mentor_icon03.png" alt="图标"/>
                        <h2>就业分析</h2>
                    </a>
                </div>
            </li>
            <li>
                <div class="twoWidth twoBG">
                    <a href="#">
                        <img src="/cn/images/mentor_icon04.png" alt="图标"/>
                        <h2>选校抉择</h2>
                    </a>
                </div>
            </li>
            <li>
                <div class="twoWidth threeBG">
                    <a href="#">
                        <img src="/cn/images/mentor_icon05.png" alt="图标"/>
                        <h2>文书创作</h2>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--常春藤留学计划-->
<div class="hedera">
    <div class="in-hedera">
        <h4>常春藤留学计划</h4>
        <div class="heder-center">
            <ul>
                <li>
                    <div class="default-he">
                        <img src="/cn/images/mentor_default.png" alt="图片">
                        <div class="de-in">留学计划</div>
                    </div>
                    <div class="mouseOver">
                        <h2>留学计划</h2>
                        <div class="mouCont">
                            在申友留学“非中介”名校申请服务模式下，ABCD类留学产品，针对不同阶段客户，
                            规划背景提升、出国考试准备，申请材料制作，帮助办理申请手续，追踪申请进度，"套磁"与面试辅导，出国前辅导等。
                        </div>
                        <a href="http://www.thinkwithu.com/study-aboard/assistance.html">立即查看</a>
                    </div>
                </li>
                <li>
                    <div class="default-he">
                        <img src="/cn/images/mentor_default.png" alt="图片">
                        <div class="de-in">游学计划</div>
                    </div>
                    <div class="mouseOver">
                        <h2>游学计划</h2>
                        <div class="mouCont">
                            申友留学为申请者提供内部游学、实习、summer school资源，
                            我们帮助学生提升国际化背景同时感受国外的文化，体验国外一流大学的校园生活，有机会获得名校教授的推荐信。
                        </div>
                        <a href="http://test.thinkwithu.com/practice.html">我要报名</a>
                    </div>
                </li>
                <li>
                    <div class="default-he">
                        <img src="/cn/images/mentor_default.png" alt="图片">
                        <div class="de-in">公开课</div>
                    </div>
                    <div class="mouseOver">
                        <h2>公开课</h2>
                        <div class="mouCont">
                            申友精品留学/GMAT/托福等公开课。海外mentor直播讲解留学申请，
                            分享留学经历。内部名师教授出国考试课程重点难点，免费辅导申请者们如何提高成绩。
                        </div>
                        <a href="http://www.thinkwithu.com/public-class.html">立即查看</a>
                    </div>
                </li>

            </ul>
        </div>
<!--        <div class="heder-bot">-->
<!--            <div class="hederBd">-->
<!--                <ul>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <img src="/cn/images/mentor_default.png" alt="图片">-->
<!--                            <p>哈佛大学</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <img src="/cn/images/mentor_default.png" alt="图片">-->
<!--                            <p>哈佛大学</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <img src="/cn/images/mentor_default.png" alt="图片">-->
<!--                            <p>哈佛大学</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <img src="/cn/images/mentor_default.png" alt="图片">-->
<!--                            <p>哈佛大学</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <img src="/cn/images/mentor_default.png" alt="图片">-->
<!--                            <p>哈佛大学</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <img src="/cn/images/mentor_default.png" alt="图片">-->
<!--                            <p>哈佛大学</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <img src="/cn/images/mentor_default.png" alt="图片">-->
<!--                            <p>哈佛大学</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <img src="/cn/images/mentor_default.png" alt="图片">-->
<!--                            <p>哈佛大学</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <script type="text/javascript">-->
<!--            jQuery(".heder-bot").slide({mainCell:".hederBd ul",autoPlay:true,vis:7,effect:"leftMarquee",interTime:10});-->
<!--        </script>-->
    </div>
</div>


<!--联系方式-->
<!--单页尾部固定部分-->
<div class="addShenYou">
    <span>加入申友，你离名校就差一步 &nbsp;| </span>
    <img src="/cn/images/mentor_phoneFont.png" alt="电话文字">
    <a href="#">点击咨询</a>
</div>
