
    <link rel="stylesheet" href="/cn/css/abroadProject.css"/>


<div class="project-topImg">
    <img src="/cn/images/project_headImg02.png" alt="头部图片"/>
</div>
<div class="project-nav">
    <span class="nav-one">留学提升</span>
    <a href="#match" class="nav-two">比赛</a>
    <a href="#internship" class="nav-three">实习</a>
    <a href="#summer" class="nav-two">summer school</a>
</div>
<div id="match" class="commonTitle padd02">
    <h4>比赛</h4>
    <b>400-600-1123</b>
</div>
<div class="ascensionContent">
    <div class="ascension-left">
        <div class="ascenTop">
            <img src="/cn/images/project_fontImg01.png" alt="文字图"/>
            <h3>— 比赛 —</h3>
        </div>
        <div class="fourBtn speSmall">
            <ul>
                <li class="liBG01">
                    <a href="/evaluation.html">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon01.png" alt="小图标"/>
                        <span>留学评估</span>
                    </a>
                </li>
                <li class="liBG02">
                    <a href="http://gmat.viplgw.cn/practise/index.html" target="_blank">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon02.png" alt="小图标"/>
                        <span>GMAT测试</span>
                    </a>
                </li>
                <li class="liBG03">
                    <a href="#">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon03.png" alt="小图标"/>
                        <span>留学社区</span>
                    </a>
                </li>
                <li class="liBG04">
                    <a href="/question.html">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon04.png" alt="小图标"/>
                        <span>留学问答</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="ascension-right comML">
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => "$countryId,$degreeId,130",'pageSize' => 6]);
                foreach($data as $v) {
                    ?>
                    <li>
                        <h4><?php echo $v['name']?></h4>

                        <p><?php echo $v['abstract']?></p>
                        <a href="/word-details/<?php echo $v['id']?>/165,130.html">查看更多</a>
                    </li>
                <?php
                }
            ?>
        </ul>
    </div>
</div>
<div id="internship" class="commonTitle padd02">
    <h4>实习</h4>
    <b>400-600-1123</b>
</div>
<div class="ascensionContent">
    <div class="ascension-right">
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => "$countryId,$degreeId,131",'pageSize' => 6]);
            foreach($data as $v) {
                ?>
                <li>
                    <h4><?php echo $v['name']?></h4>

                    <p><?php echo $v['abstract']?></p>
                    <a href="/word-details/<?php echo $v['id']?>/165,132.html">查看更多</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="ascension-left comML">
        <div class="ascenTop">
            <img src="/cn/images/project_fontImg02.png" alt="文字图"/>
            <h3>— 实习 —</h3>
        </div>
        <div class="fourBtn speSmall">
            <ul>
                <li class="liBG01">
                    <a href="/evaluation.html">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon01.png" alt="小图标"/>
                        <span>留学评估</span>
                    </a>
                </li>
                <li class="liBG02">
                    <a href="http://gmat.viplgw.cn/practise/index.html" target="_blank">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon02.png" alt="小图标"/>
                        <span>GMAT测试</span>
                    </a>
                </li>
                <li class="liBG03">
                    <a href="#">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon03.png" alt="小图标"/>
                        <span>留学社区</span>
                    </a>
                </li>
                <li class="liBG04">
                    <a href="/question.html">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon04.png" alt="小图标"/>
                        <span>留学问答</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="summer" class="commonTitle padd03">
    <h4>summer<br>school</h4>
    <b>400-600-1123</b>
</div>
<div class="ascensionContent">
    <div class="ascension-left">
        <div class="ascenTop">
            <img src="/cn/images/project_fontImg03.png" alt="文字图"/>
            <h3>— summer school —</h3>
        </div>
        <div class="fourBtn speSmall">
            <ul>
                <li class="liBG01">
                    <a href="/evaluation.html">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon01.png" alt="小图标"/>
                        <span>留学评估</span>
                    </a>
                </li>
                <li class="liBG02">
                    <a href="http://gmat.viplgw.cn/practise/index.html" target="_blank">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon02.png" alt="小图标"/>
                        <span>GMAT测试</span>
                    </a>
                </li>
                <li class="liBG03">
                    <a href="#">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon03.png" alt="小图标"/>
                        <span>留学社区</span>
                    </a>
                </li>
                <li class="liBG04">
                    <a href="/question.html">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon04.png" alt="小图标"/>
                        <span>留学问答</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="ascension-right comML">
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => "$countryId,$degreeId,132",'pageSize' => 6]);
            foreach($data as $v) {
                ?>
                <li>
                    <h4><?php echo $v['name']?></h4>

                    <p><?php echo $v['abstract']?></p>
                    <a href="/word-details/<?php echo $v['id']?>/165,132.html">查看更多</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>
