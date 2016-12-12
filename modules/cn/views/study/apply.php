
    <link rel="stylesheet" href="/cn/css/abroadProject.css"/>


<div class="project-topImg">
    <img src="/cn/images/project_headImg.png" alt="头部图片"/>
</div>
<div class="project-nav">
    <span class="nav-one">留学申请</span>
    <a href="#edingburgh" class="nav-four">选校</a>
    <a href="#amanuensis" class="nav-five">文书</a>
    <a href="#interview" class="nav-four">面试</a>
    <a href="#visa" class="nav-five">签证</a>
</div>
<div class="commonTitle padd02" id="edingburgh">
    <h4>选校</h4>
    <b>400-600-1123</b>
</div>
<div class="commonContent">
    <?php
        $data = \app\modules\cn\models\Content::getContent(['category' => "$countryId,$degreeId,154",'fields' => "starPersonality,place,abstract,enName,keywords",'pageSize' =>10])
    ?>
    <div class="content-left">
        <div class="le-top">
            <div class="back03">
                <span class="circleMT02">在线咨询</span>
            </div>
            <div class="leT-right speML">
                <h4><?php echo isset($data[0])?$data[0]['name']:""?></h4>
                <div>
                    <span>
                        <?php echo isset($data[0])?$data[0]['enName']:''?>
                    所属地区：<?php echo isset($data[0])?$data[0]['place']:''?>
                    知名校友：<?php echo isset($data[0])?$data[0]['starPersonality']:''?>
                    </span>
                </div>
                <p>
                    <?php echo isset($data['0'])?$data[0]['abstract']:''?>
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
                        <li><a href="/word-details/<?php echo $v['id']?>/154.html"><?php echo $v['name']?></a></li>
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
                        <li><a href="/word-details/<?php echo $v['id']?>/154.html"><?php echo $v['name']?></a></li>
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
                        <li><a href="/word-details/<?php echo $v['id']?>/154.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="content-right">
        <div class="bannerRight">
            <div class="bannerRhd hd">
                <ul>
                    <li><a href="/case.html#admission">名校录取</a></li>
                    <li><a href="/case.html#admission">高分榜单</a></li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="bannerRbd bd">
                <ul>
                    <li>
                        <div class="labaTiao">
                            <img src="/cn/images/index_bannerLaBa.png" alt="小喇叭图标"/>
                            <b>新鲜出炉：</b>
                            <span>申友2016名校录取榜</span>
                        </div>
                        <div class="showMessage">
                            <div class="showMbd mOne">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "$countryId,$degreeId,104,207",'pageSize' => 10]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><i class="fa fa-angle-left"></i><a
                                                href="/picture-details/<?php echo $v['id'] ?>/103.html"><?php echo $v['name'] ?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".showMessage").slide({mainCell:".mOne ul",effect:"topMarquee",autoPlay:true,vis:7,interTime:50});

                        </script>
                        <div class="schoolImg">
                            <img src="/cn/images/index_school01.png" alt="名校图标1"/>
                            <img src="/cn/images/index_school02.png" alt="名校图标2"/>
                            <img src="/cn/images/index_school03.png" alt="名校图标3"/>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="labaTiao">
                            <img src="/cn/images/index_bannerLaBa.png" alt="小喇叭图标"/>
                            <b>新鲜出炉：</b>
                            <span>申友2015高分榜单</span>
                        </div>
                        <div class="showMessage">
                            <div class="showMbd mTwo">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "$countryId,$degreeId,104,206",'pageSize' => 10]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><i class="fa fa-angle-left"></i><a href="/picture-details/<?php echo $v['id'] ?>/104.html"><?php echo $v['name']?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".showMessage").slide({mainCell:".mTwo ul",effect:"topMarquee",autoPlay:true,vis:7,interTime:50});

                        </script>
                        <img src="/cn/images/index_topScore.jpg" alt="高分榜单" width="100%"/>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".bannerRight").slide({trigger:'mouseover'});
        </script>
    </div>
    <div style="clear: both"></div>
</div>
<div class="commonTitle padd02" id="amanuensis">
    <h4>文书</h4>
    <b>400-600-1123</b>
</div>
<div class="commonContent">
    <?php
    $data = \app\modules\cn\models\Content::getContent(['category' => "$countryId,$degreeId,127",'fields' => "abstract,keywords",'pageSize' =>10])
    ?>
    <div class="content-left">
        <div class="le-top">
            <div class="back03">
                <span class="circleMT02">在线咨询</span>
            </div>
            <div class="leT-right speML">
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
                        <li><a href="/word-details/<?php echo $v['id']?>/127.html"><?php echo $v['name']?></a></li>
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
                        <li><a href="/word-details/<?php echo $v['id']?>/127.html"><?php echo $v['name']?></a></li>
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
                        <li><a href="/word-details/<?php echo $v['id']?>/127.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="content-right">
        <?php
        $studyInSpeech = \app\modules\cn\models\Content::getContent(['fields' => 'abstract,smallPhoto','category' => "$countryId,$degreeId,102,178",'pageSize' => 8,'order' => "c.viewCount DESC"]);
        $trainingSpeech = \app\modules\cn\models\Content::getContent(['fields' => 'abstract,smallPhoto','category' => "$countryId,$degreeId,102,177",'pageSize' => 8,'order' => "c.viewCount DESC"]);
        ?>
        <div class="speech speAboradT">
            <div class="speechHd hd">
                <ul>
                    <li>留学感言</li>
                    <li>培训感言</li>
                </ul>
            </div>
            <div class="speechBd">
                <ul>
                    <?php
                    if (isset($studyInSpeech[0])) {
                        ?>
                        <li>
                            <div class="speechBd-left">
                                <img src="<?php echo $studyInSpeech[0]['smallPhoto'] ?>" alt="介绍图"/>
                            </div>
                            <div class="speechBd-right">
                                <span>"<?php echo $studyInSpeech[0]['title'] ?>"</span>

                                <!--<p>
                                    <?php //echo $studyInSpeech[0]['abstract'] ?>
                                </p>-->
                            </div>
                            <div style="clear: both"></div>
                            <div>
                                <ul>
                                    <?php
                                    foreach ($studyInSpeech as $k => $v) {
                                        if ($k == 0) {
                                            continue;
                                        }
                                        ?>
                                        <li><img src="/cn/images/quesAnswer_dianIcon.png" alt="点图标"/><a
                                                href="/word-details/<?php echo $v['id'] ?>/<?php echo $v['catId'] ?>.html"><?php echo $v['title'] ?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    if (isset($trainingSpeech[0])) {
                        ?>
                        <li>
                            <div class="speechBd-left">
                                <img src="<?php echo $trainingSpeech[0]['smallPhoto'] ?>" alt="介绍图"/>
                            </div>
                            <div class="speechBd-right">
                                <span>"<?php echo $trainingSpeech[0]['title'] ?>"</span>

                                <!--<p>
                                    <?php //echo $trainingSpeech[0]['abstract'] ?>
                                </p>-->
                            </div>
                            <div style="clear: both"></div>
                            <div>
                                <ul>
                                    <?php
                                    foreach ($trainingSpeech as $k => $v) {
                                        if ($k == 0) {
                                            continue;
                                        }
                                        ?>
                                        <li><img src="/cn/images/quesAnswer_dianIcon.png" alt="点图标"/><a
                                                href=""><?php echo $v['title'] ?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".speech").slide({mainCell:".speechBd",trigger:"mouseover"});
        </script>
    </div>
    <div style="clear: both"></div>
</div>
<div class="commonTitle padd02" id="interview">
    <h4>面试</h4>
    <b>400-600-1123</b>
</div>
<div class="commonContent">
    <?php
    $data = \app\modules\cn\models\Content::getContent(['category' => "$countryId,$degreeId,128",'fields' => "abstract,keywords",'pageSize' =>10])
    ?>
    <div class="content-left">
        <div class="le-top">
            <div class="back03">
                <span class="circleMT02">在线咨询</span>
            </div>
            <div class="leT-right speML">
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
                        <li><a href="/word-details/<?php echo $v['id']?>/128.html"><?php echo $v['name']?></a></li>
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
                        <li><a href="/word-details/<?php echo $v['id']?>/128.html"><?php echo $v['name']?></a></li>
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
                        <li><a href="/word-details/<?php echo $v['id']?>/128.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="content-right">
        <div class="dissRight conR-eiji">
            <div class="newActive newActive-erji">
                <b>最新活动</b>
            </div>
            <?php
            $re = \app\modules\cn\models\Content::getActive();
            $activity = $re['activity'];
            $activityDate = $re['activityDate'];
            ?>
            <div class="calendar">
                <div class="calendarHd calendarHd-erji">
                    <ul>
                        <li><?php echo date('Y年m月')?></li>
                    </ul>
                    <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                    <a href="javascript:;" class="next"><i class="fa fa-caret-right "></i></a>
                </div>
                <div style="clear: both"></div>
                <div class="calendarBd">
                    <?php
                    $week = date("N",strtotime(date("Y-m-01")));
                    ?>
                    <ul class="calUl01">
                        <li>
                            <ul>
                                <li>Sun.</li>
                                <li>Mon.</li>
                                <li>Tues.</li>
                                <li>Wed.</li>
                                <li>Thur.</li>
                                <li>Fri.</li>
                                <li>Sat.</li>
                                <?php
                                for($a=1;$a<=$week;$a++) {
                                    ?>
                                    <li></li>
                                <?php
                                }
                                ?>
                                <?php
                                $StartMonth   = date("Y-m-01"); //开始日期
                                $EndMonth     = date("Y-m-d",strtotime("$StartMonth +1 month -1 day")); //结束日期
                                $ToStartMonth = strtotime( $StartMonth ); //转换一下
                                $ToEndMonth   = strtotime( $EndMonth ); //一样转换一下
                                $i            = false; //开始标示
                                while( $ToStartMonth < $ToEndMonth ) {
                                    $NewMonth = !$i ? date('Y-m-d', strtotime('+0 Month', $ToStartMonth)) : date('Y-m-d', strtotime('+1 day', $ToStartMonth));
                                    $ToStartMonth = strtotime($NewMonth);
                                    $i = true;
                                    ?>
                                    <li>
                                        <?php
                                        if (in_array($NewMonth, $activityDate)){
                                            ?>
                                            <a href="/public-class/<?php echo $activity[$NewMonth]['id']?>.html" class="on on-erji"><?php echo date("d", strtotime($NewMonth)) ?></a>

                                            <div class="classOn classOn-erji">
                                                <?php echo $activity[$NewMonth]['name']?>
                                            </div>
                                        <?php
                                        }else {
                                            ?>
                                            <?php echo date("d", strtotime($NewMonth)) ?>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                    <?php
                    $StartMonth   = date("Y-m-01");
                    $week = date("N",strtotime(date("Y-m-01",strtotime("$StartMonth +1 month"))));
                    ?>
                    <ul class="calUl02">
                        <li>
                            <ul>
                                <li>Sun.</li>
                                <li>Mon.</li>
                                <li>Tues.</li>
                                <li>Wed.</li>
                                <li>Thur.</li>
                                <li>Fri.</li>
                                <li>Sat.</li>
                                <?php
                                for($a=1;$a<=$week;$a++) {
                                    ?>
                                    <li></li>
                                <?php
                                }
                                ?>
                                <?php
                                $StartMonth   = date("Y-m-01",strtotime("$StartMonth +1 month")); //开始日期
                                $EndMonth     = date("Y-m-d",strtotime("$StartMonth +1 month -1 day")); //结束日期
                                $ToStartMonth = strtotime( $StartMonth ); //转换一下
                                $ToEndMonth   = strtotime( $EndMonth ); //一样转换一下
                                $i            = false; //开始标示
                                while( $ToStartMonth < $ToEndMonth ) {
                                    $NewMonth = !$i ? date('Y-m-d', strtotime('+0 Month', $ToStartMonth)) : date('Y-m-d', strtotime('+1 day', $ToStartMonth));
                                    $ToStartMonth = strtotime($NewMonth);
                                    $i = true;
                                    ?>
                                    <li>
                                        <?php
                                        if (in_array($NewMonth, $activityDate)){
                                            ?>
                                            <a href="/public-class/<?php echo $activity[$NewMonth]['id']?>.html" class="on on-erji"><?php echo date("d", strtotime($NewMonth)) ?></a>

                                            <div class="classOn classOn-erji">
                                                <?php echo $activity[$NewMonth]['name']?>
                                            </div>
                                        <?php
                                        }else {
                                            ?>
                                            <?php echo date("d", strtotime($NewMonth)) ?>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".calendar").slide({titleCell:".calendarHd ul",mainCell:".calendarBd",trigger:"click",autoPage:"autoPage"});
            </script>
        </div>
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
<div class="commonTitle padd02" id="visa">
    <h4>签证</h4>
    <b>400-600-1123</b>
</div>
<div class="commonContent">
    <?php
    $data = \app\modules\cn\models\Content::getContent(['category' => "$countryId,$degreeId,129",'fields' => "abstract,keywords",'pageSize' =>16])
    ?>
    <div class="content-left">
        <div class="le-top">
            <div class="back03">
                <span class="circleMT02">在线咨询</span>
            </div>
            <div class="leT-right speML">
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
                        <li><a href="/word-details/<?php echo $v['id']?>/127.html"><?php echo $v['name']?></a></li>
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
                        <li><a href="/word-details/<?php echo $v['id']?>/129.html"><?php echo $v['name']?></a></li>
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
                        <li><a href="/word-details/<?php echo $v['id']?>/129.html"><?php echo $v['name']?></a></li>
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
<script type="text/javascript">
    moth(".calUl02",".calendarHd ul li",'<?php echo date("Y年m月")?>','<?php $firstday=date("Y-m"); echo date("Y年m月",strtotime("$firstday +1 month"))?>');
    moth(".evecalUl02",".everyCahd ul li",'<?php echo date("Y年m月")?>','<?php $firstday=date("Y-m"); echo date("Y年m月",strtotime("$firstday +1 month"))?>');
</script>