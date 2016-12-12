
    <link rel="stylesheet" href="/cn/css/abroadProject.css"/>


<div class="project-topImg">
    <img src="/cn/images/project_headImg.png" alt="头部图片"/>
</div>
<div class="project-nav">
    <a href="javascript:void(0);" class="nav-one">留学规划</a>
    <a href="#hotProject" class="nav-two">热门专业</a>
    <a href="#schoolPM" class="nav-three">学校排名</a>
    <a href="#researchReport" class="nav-two">研究报告</a>
</div>
<div class="commonTitle padd01" id="hotProject">
    <h4>热门<br>专业</h4>
    <b>400-600-1123</b>
</div>
<div class="commonContent">
    <?php
    $data = \app\modules\cn\models\Content::getContent(['category' => "$countryId,$degreeId,143",'fields' => "abstract,keywords",'pageSize' =>10])
    ?>
    <div class="content-left">
        <div class="le-top">
            <div class="leT-left back01">
                <b>留学方案</b> <br/>
                <span>在线咨询</span>
            </div>
            <div class="leT-right">
                <h4><?php echo isset($data[0])?$data[0]['name']:''?></h4>
                <p><?php echo isset($data[0])?$data[0]['abstract']:''?></p>
                <span><?php echo isset($data[0])?$data[0]['keywords']:''?></span>
            </div>
        </div>
        <div class="le-boUl">
            <ul>
                <?php
                foreach($data as $k => $v) {
                    if($k>0 && $k<4){
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/178,143.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
            <ul>
                <?php
                foreach($data as $k => $v) {
                    if($k>3 && $k<7){
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/178,143.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
            <ul>
                <?php
                foreach($data as $k => $v) {
                    if($k>6 && $k<10){
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/178,143.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="content-right">
        <img src="/cn/images/project_guangk.png" alt="右边图片"/>
        <div class="fourBtn">
            <ul>
                <li class="liBG01">
                    <a href="/evaluation.html">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon01.png" alt="小图标"/>
                        <span>留学评估</span>
                    </a>
                </li>
                <li class="liBG02">
                    <a href="http://www.gmatonline.cn/practise/index.html" target="_blank">
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
    <div style="clear: both"></div>
</div>
<div class="commonTitle padd01" id="schoolPM">
    <h4>学校<br>排名</h4>
    <b>400-600-1123</b>
</div>
<div class="commonContent">
    <?php
    $data = \app\modules\cn\models\Content::getContent(['category' => "$countryId,$degreeId,175",'pageSize' => 10]);
    $first = isset($data[0])?\app\modules\cn\models\Content::getAllCatName($data[0]['id']):[];
    ?>
    <div class="content-left">
        <div class="le-top">
            <div class="leT-left back02">
                <span class="circleMT">咨询</span>
            </div>
            <div class="leT-right">
                <h4><?php echo $data[0]['name']?></h4>
                <div>
                    <span>
                        <ul>
                            <li>
                                发布机构：<?php echo $first['organization']?>
                            </li>
                            <li>
                                国家：<?php echo $first['country']?>
                            </li>
                            <li>
                                年份：<?php echo $first['year']?>
                            </li>
                            <li>
                                阶段：<?php echo $first['degree']?>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
        <div class="le-boUl">
            <ul>
                <?php
                foreach($data as $k => $v) {
                    if($k>0 && $k<4){
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/175.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
            <ul>
                <?php
                foreach($data as $k => $v) {
                    if($k>3 && $k<7){
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/175.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
            <ul>
                <?php
                foreach($data as $k => $v) {
                    if($k>6 && $k<10){
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/175.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="content-right">
        <img src="/cn/images/project_guangk.png" alt="右边图片"/>
        <div class="fourBtn">
            <ul>
                <li class="liBG01">
                    <a href="/evaluation.html">
                        <b></b>
                        <img src="/cn/images/quesAnswer_smallIcon01.png" alt="小图标"/>
                        <span>留学评估</span>
                    </a>
                </li>
                <li class="liBG02">
                    <a href="http://www.gmatonline.cn/practise/index.html" target="_blank">
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
    <div style="clear: both"></div>
</div>
<div class="commonTitle padd01" id="researchReport">
    <h4>研究<br>报告</h4>
    <b>400-600-1123</b>
</div>
<div class="commonContent">
    <?php
    $data = \app\modules\cn\models\Content::getContent(['category' => "$countryId,$degreeId,125",'fields' => "abstract,keywords",'pageSize' =>16])
    ?>
    <div class="content-left">
        <div class="le-top">
            <div class="leT-left back01">
                <span class="circleMT02">查看更多</span>
            </div>
            <div class="leT-right">
                <h4><?php echo isset($data[0])?$data[0]['name']:''?></h4>
                <p>
                    <?php echo isset($data[0])?$data[0]['abstract']:''?>
                </p>
                <span>关键词：<?php echo isset($data[0])?$data[0]['keywords']:''?></span>
            </div>
        </div>
        <div class="le-boUl">
            <ul>
                <?php
                foreach($data as $k => $v) {
                    if($k>0 && $k<4){
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/178,125.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
            <ul>
                <?php
                foreach($data as $k => $v) {
                    if($k>3 && $k<7){
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/178,125.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
            <ul>
                <?php
                foreach($data as $k => $v) {
                    if($k>6 && $k<10){
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/178,125.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="content-right speR">
        <div class="speR-top">
            <img src="/cn/images/project_youGYQ.png" alt="感兴趣话题"/>
            <b>您可能感兴趣的话题</b> <br>
            <span>You may be interested in the topic</span>
        </div>
        <div class="speR-bottom">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "178,118",'pageSize' => 8]);
                foreach($data as $v) {
                    ?>
                    <li><span>●</span><a href="/word-details/<?php echo $v['id']?>/178,118.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div style="clear: both"></div>
</div>
