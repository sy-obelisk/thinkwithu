<script type="text/javascript" src="/cn/js/index.js"></script>
<link rel="stylesheet" href="/cn/css/index.css"/>
<!-----------------------------导航end------------------------------>
<div class="banner">
    <div class="bannerLeft">
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','where' => "c.id=1010",'pageSize' => 1]);
        ?>
        <a href="<?php echo isset($data[0])?$data[0]['url']:''?>"><img src="<?php echo isset($data[0])?$data[0]['image']:''?>" alt="公开课"/></a>
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','where' => "c.id=1011",'pageSize' => 1]);
        ?>
        <a href="<?php echo isset($data[0])?$data[0]['url']:''?>"><img src="<?php echo isset($data[0])?$data[0]['image']:''?>" alt="案例库"/></a>
    </div>
    <div class="bannerCenter">
        <div class="bannerHd hd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','category' => "190,223",'pageSize' => 5]);
                foreach($data as $v) {
                    ?>
                    <li></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="bannerBd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','category' => "190,223",'pageSize' => 5]);
                foreach($data as $v) {
                    ?>
                    <li><a href="<?php echo $v['url']?>" target="_blank"><img
                                src="<?php echo $v['image']?>"/></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(".bannerCenter").slide({mainCell:".bannerBd ul",autoPlay:true,effect:'leftLoop',trigger:'click'});
    </script>

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
                        <b>新鲜出炉:</b>
                        <span>申友留学2016录取榜</span>
                    </div>
                    <div class="showMessage">
                        <div class="showMbd mOne">
                            <ul>
                                <?php
                                $data = \app\modules\cn\models\Content::getContent(['category' => "104,207",'pageSize' => 10]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><i class="fa fa-angle-left"></i><a
                                                href="/picture-details/<?php echo $v['id'] ?>/index,104.html"><?php echo $v['name'] ?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(".showMessage").slide({mainCell:".mOne ul",effect:"topMarquee",autoPlay:true,vis:6,interTime:50});

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
                        <span>申友留学2016高分榜单</span>
                    </div>
                    <div class="showMessage">
                        <div class="showMbd mTwo">
                            <ul>
                                <?php
                                $data = \app\modules\cn\models\Content::getContent(['category' => "104,206",'pageSize' => 10]);
                                foreach($data as $v) {
                                    ?>
                                    <li><i class="fa fa-angle-left"></i><a href="/picture-details/<?php echo $v['id'] ?>/index,104.html"><?php echo $v['name']?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(".showMessage").slide({mainCell:".mTwo ul",effect:"topMarquee",autoPlay:true,vis:6,interTime:50});

                    </script>
                    <img src="/cn/images/index_topScore.jpg" alt="高分榜单" width="231"/>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".bannerRight").slide({trigger:'mouseover'});
    </script>
</div>
<!--出国留学公用样式标题-->
<div class="newTitle-c">
    <div class="left-title">出国留学</div>
    <!--中间文字部分-->
    <div class="linkDiv">
        <ul>
            <li><a href="/case.html">申请经验分享</a></li>
            <li><a href="/Postgraduate/assistance.html">硕士申请方案</a></li>
            <li><a href="/public-class.html">热门讲座</a></li>
        </ul>
    </div>
    <div class="phoneF">
        <img src="/cn/images/indexNav_font02.png" alt="电话文字图片"/>
    </div>
    <div class="search">
        <input type="text" value="热门搜索美国留学" onfocus="this.value=''" onblur="shiqu(this)">
        <input type="button"/>
    </div>
</div>
<!--出国留学下边部分-->
<div class="studyAbroad">
    <div class="studyLeft">
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','where' => "c.id=1020",'pageSize' => 1]);
        ?>
        <a href="<?php echo isset($data[0])?$data[0]['url']:''?>"><img src="<?php echo isset($data[0])?$data[0]['image']:''?>" alt="2014-2015录取榜大图片" class="leftImg"/></a>
        <div class="PermitScheme">
<!--            <div class="studyTitle">-->
<!--                <p><a href="/study-aboard/assistance.html">留学产品</a></p>-->
<!--            </div>-->
            <div class="PermitHd hd">
                <div class="other-studyTitle">
                    <a href="/study-aboard/assistance.html" target="_blank">
                        <b>留学<br/>产品</b>
                    </a>
                </div>
                <ul>
                    <li>
                        <img src="/cn/images/index_productIcon.png" alt="箭头图标"/>
                        <a href="/Postgraduate/assistance.html" target="_blank">硕士方案</a>
                    </li>
                    <li><a href="/Undergraduate/assistance.html" target="_blank">本科方案</a></li>
                </ul>
            </div>
            <div class="PermitBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "113",'pageSize' => 4]);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <div class="leftPurple"><img src="/cn/images/index_winIcon.png" alt="奖杯图标"/></div>
                            <a href="/picture-details/<?php echo $v['id'] ?>/index,113.html"><?php echo $v['title']."--".$v['name']?></a>
                            <div style="clear: both"></div>
                        </li>
                    <?php
                    }
                    ?>

                    <li>
                        <div class="leftPurple"><img src="/cn/images/index_winIcon.png" alt="奖杯图标"/></div>
                        <div class="threeScroll scroll01">
                            <div class="scrollHd hd">
                                <span class="sPrev"><i class="fa fa-caret-left"></i></span>
                                <span class="sNext"><i class="fa fa-caret-right"></i></span>
                            </div>
                            <div class="scrollBd">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "113",'page'=>2,'pageSize' => 4]);
                                    foreach($data as $v) {
                                        ?>
                                        <li>
                                            <div class="leftPurple"></div>
                                            <a href="/picture-details/<?php echo $v['id'] ?>/index,113.html"><?php echo $v['name']?></a>
                                            <div style="clear: both"></div>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".scroll01").slide({mainCell:".scrollBd ul",prevCell:".sPrev",nextCell:".sNext",pnLoop:false});
                        </script>
                        <div style="clear: both"></div>
                    </li>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "112",'pageSize' => 4]);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <div class="leftPurple"><img src="/cn/images/index_winIcon.png" alt="奖杯图标"/></div>
                            <a href="/picture-details/id=<?php echo $v['id'] ?>/category=index,112.html"><?php echo $v['title']."--".$v['name']?></a>
                            <div style="clear: both"></div>
                        </li>
                    <?php
                    }
                    ?>
                    <li>
                        <div class="leftPurple"><img src="/cn/images/index_winIcon.png" alt="奖杯图标"/></div>
                        <div class="threeScroll scroll02">
                            <div class="scrollHd hd">
                                <span class="sPrev"><i class="fa fa-caret-left"></i></span>
                                <span class="sNext"><i class="fa fa-caret-right"></i></span>
                            </div>
                            <div class="scrollBd">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "112",'page'=>2,'pageSize' => 4]);
                                    foreach($data as $v) {
                                        ?>
                                        <li>
                                            <div class="leftPurple"></div>
                                            <a href="/picture-details/<?php echo $v['id'] ?>/index,112.html"><?php echo $v['name']?></a>
                                            <div style="clear: both"></div>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".scroll02").slide({mainCell:".scrollBd ul",prevCell:".sPrev",nextCell:".sNext",pnLoop:false});
                        </script>
                        <div style="clear: both"></div>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".PermitScheme").slide({mainCell:".PermitBd",trigger:"mouseover"});
        </script>
        <div class="service">
            <div class="serviceLeft height02"><span></span><b><a href="javascript:void(0)">单项服务</a></b></div>
            <div class="serviceRight padd">
                <div class="paddBd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => "110"]);
                        foreach($data as $v) {
                            ?>
                            <li><i class="fa fa-angle-left"></i><a href="/picture-details/<?php echo $v['id'] ?>/index,110.html"><?php echo $v['name']?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".padd").slide({mainCell:".paddBd ul",autoPlay:true,effect:"topMarquee",vis:5,interTime:50});
            </script>
        </div>
        <div style="clear: both"></div>
        <div class="service">
            <div class="serviceLeft height"><span></span><b><a href="/MBA-PHD.html" target="_blank">MBA/<br/>PHD</a></b></div>
            <div class="serviceRight">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "111"]);
                    foreach($data as $v) {
                        ?>
                        <li><i class="fa fa-angle-left"></i><a href="/picture-details/<?php echo $v['id'] ?>/index,111.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <div style="clear: both;"></div>

        <div class="starBC height">
            <div class="other-title">
                <ul>
                    <li><span></span><img src="/cn/images/cultivate_btnIcon01.png" alt="图标"/></li>
                    <li>
                        <img src="/cn/images/index_productIcon02.png" alt="图标"/>
                        <a href="/teachers.html#teacher">留学顾问</a>
                    </li>
                </ul>
                <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=meiguoliuxue" class="onlineBtn" target="_blank">在线咨询</a>
            </div>
            <div class="newStar">
                <div class="newHd hd">
                    <a href="javascript:void(0);" class="prev"><i class="fa fa-caret-left"></i></a>
                    <a href="javascript:void(0);" class="next"><i class="fa fa-caret-right"></i></a>
                </div>
                <div class="newBd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'job,abstract,smallPhoto','category' => "140"]);
                        foreach($data as $v) {
                        ?>
                        <li>
                            <div class="newImg">
                                <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html">
                                    <img src="<?php echo $v['smallPhoto']?>" alt="老师照片"></a>
                            </div>
                            <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html"><?php echo $v['name']?></a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".newStar").slide({mainCell:".newBd ul",trigger:"click",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50});
            </script>

        </div>
        <!-----------------------院校搜索---------------------------->
        <div class="universities">
            <div class="univer-top">
                <img src="/cn/images/index_acamey.png" alt="标题图"/>
                <b><a href="/schools.html">院校搜索</a></b>
                <span>国内专业的留学院校库</span>
            </div>
            <div class="univer-cont">
                <ul>
                    <li>
                        <div class="univer-mask"></div>
                        <div class="leftIcon">
                            <img src="/cn/images/index_acameyIco01.png" alt="图标"/>
                        </div>
                        <div class="rightSelect">
                            <h4>国家</h4>
                            <!--下拉-->
                            <div class="univer-select" onclick="selectCounty(this)">
                                <span>美国</span>
                                <div class="rightS-bg"></div>
                                <div class="sec-Con">
                                    <ul>
                                        <li>英国</li>
                                        <li>美国</li>
                                        <li>德国</li>
                                        <li>法国</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                    </li>
                    <li>
                        <div class="univer-mask"></div>
                        <div class="leftIcon">
                            <img src="/cn/images/index_acameyIco02.png" alt="图标"/>
                        </div>
                        <div class="rightSelect">
                            <h4>排名</h4>
                            <!--下拉-->
                            <div class="univer-select" onclick="selectCounty(this)">
                                <span>50</span>
                                <div class="rightS-bg"></div>
                                <div class="sec-Con">
                                    <ul>
                                        <li>50</li>
                                        <li>60</li>
                                        <li>70</li>
                                        <li>80</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                    </li>
                    <li>
                        <div class="univer-mask"></div>
                        <div class="leftIcon">
                            <img src="/cn/images/index_acameyIco03.png" alt="图标"/>
                        </div>
                        <div class="rightSelect">
                            <h4>学位</h4>
                            <!--下拉-->
                            <div class="univer-select" onclick="selectCounty(this)">
                                <span>本科</span>
                                <div class="rightS-bg"></div>
                                <div class="sec-Con">
                                    <ul>
                                        <li>本科</li>
                                        <li>硕士</li>
                                        <li>博士</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                    </li>
                    <li>
                        <div class="univer-mask"></div>
                        <div class="leftIcon">
                            <img src="/cn/images/index_acameyIco04.png" alt="图标"/>
                        </div>
                        <div class="rightSelect">
                            <h4>专业</h4>
                            <!--下拉-->
                            <div class="univer-select" onclick="selectCounty(this)">
                                <span>会计</span>
                                <div class="rightS-bg"></div>
                                <div class="sec-Con">
                                    <ul>
                                        <li>会计</li>
                                        <li>金融</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="clear: both"></div>
                    </li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="univer-bot">
                <a href="/schools.html">
                    立即搜索
                    <img src="/cn/images/index_acameyJ.png" alt="箭头图标">
                </a>
            </div>
        </div>

    </div>
    <div class="studyRight">
        <div class="studyTop stuTop01">
            <div class="topHd hd hdSpecial">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Category::getCategory(87);
                    foreach($data as $k=>$v) {
                        ?>
                        <li>
                            <a href="/<?php echo $v['shortName']?>.html">
                                <span class="stu-triangle borderTop0<?php echo $k+1?>"></span>
                                <div class="botBack">
                                    <img src="<?php echo $v['image']?>" alt="<?php echo $v['name']?>"/>
                                </div>
                                <div class="topFont">
                                    <h3><?php echo $v['name']?></h3>
                                    <span>硕士 | 本科 | 博士</span>
                                </div>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="topBd bd">
                <ul>
                    <li>
                        <div class="topBd_left">
                            <ul>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple01.png" alt="紫色圆背景"/>
                                        <span>动态</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "88,118","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,88,118.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/88,118.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple02.png" alt="紫色圆背景"/>
                                        <span>文书</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "88,127","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,88,127.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/88,127.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple03.png" alt="紫色圆背景"/>
                                        <span>面试</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "88,128","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,88,128.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/88,128.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple04.png" alt="紫色圆背景"/>
                                        <span>签证</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "88,129","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,88,129.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/88,129.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abroadSchool，score,abstract','category' => "88,102","pageSize" => 1]);
                        ?>
                        <?php
                        if(isset($data[0])) {
                            ?>
                            <div class="topBd_right">
                                <div class="studeBackTop">
                                    <h4 class="rightTitle">学子案例</h4>
                                    <div class="studeBack-left">
                                        <img src="<?php echo $data[0]['smallPhoto']?>" alt="学子案例头像">
                                    </div>
                                    <div class="studeBack-right">
                                        <h4><?php echo $data[0]['name']?></h4>
                                      <span><?php echo $data[0]['title']?></span>
                                        <ul>
                                            <li><?php echo $data[0]['score']?>:<?php echo $data[0]['abroadSchool']?></li>
                                        </ul>
                                    </div>
                                    <div style="clear: both"></div>
                                    <p class="luanFont">
                                        <span><?php echo $data[0]['abstract']?></span>
                                        <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=GMATpeixun" class="readAll rightPos01" target="_blank">在线咨询</a>
                                        <a href="/word-details/<?php echo $data[0]['id']?>/index,88,102.html" class="readAll rightPos02">阅读原文</a>
                                    </p>
                                </div>
                                <div class="newAdd-school topSchool">
                                    <h4 class="rightTitle"><a href="/case.html#admission">名校案例 <span>more</span></a></h4>
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "104,207",'pageSize'=>3]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><img src="<?php echo $v['image']?>" alt="名校案例"/></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div style="clear: both"></div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="topBd_left">
                            <ul>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple01.png" alt="紫色圆背景"/>
                                        <span>动态</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "89,118","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,89,118.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/89,118.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple02.png" alt="紫色圆背景"/>
                                        <span>文书</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "89,127","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,89,127.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/89,127.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple03.png" alt="紫色圆背景"/>
                                        <span>面试</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "89,128","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,89,128.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/89,128.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple04.png" alt="紫色圆背景"/>
                                        <span>签证</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "89,129","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,89,129.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/89,129.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abroadSchool，score,abstract','category' => "89,102","pageSize" => 1]);
                        ?>
                        <?php
                        if(isset($data[0])) {
                            ?>
                            <div class="topBd_right">
                                <div class="studeBackTop">
                                    <h4 class="rightTitle">学子案例</h4>
                                    <div class="studeBack-left">
                                        <img src="<?php echo $data[0]['smallPhoto']?>" alt="学子案例头像">
                                    </div>
                                    <div class="studeBack-right">
                                        <h4><?php echo $data[0]['name']?></h4>
                                        <span><?php echo $data[0]['title']?></span>
                                        <ul>
                                            <li><?php echo $data[0]['score']?>:<?php echo $data[0]['abroadSchool']?></li>
                                        </ul>
                                    </div>
                                    <div style="clear: both"></div>
                                    <p class="luanFont">
                                        <span><?php echo $data[0]['abstract']?></span>
                                        <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=GMATpeixun" class="readAll rightPos01" target="_blank">在线咨询</a>
                                        <a href="/word-details/<?php echo $data[0]['id']?>/index,89,102.html" class="readAll rightPos02">阅读原文</a>
                                    </p>
                                </div>
                                <div class="newAdd-school topSchool">
                                    <h4 class="rightTitle"><a href="/case.html#admission">名校案例 <span>more</span></a></h4>
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "104,207",'pageSize'=>3]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><img src="<?php echo $v['image']?>" alt="名校案例"/></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div style="clear: both"></div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="topBd_left">
                            <ul>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple01.png" alt="紫色圆背景"/>
                                        <span>动态</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "90,118","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,90,118.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/90,118.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple02.png" alt="紫色圆背景"/>
                                        <span>院校</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "90,225","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,90,225.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/90,225.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple02.png" alt="紫色圆背景"/>
                                        <span>文书</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "90,127","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,90,127.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/89,127.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple03.png" alt="紫色圆背景"/>
                                        <span>面试</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "90,128","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,90,128.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/89,128.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abroadSchool，score,abstract','category' => "90,102","pageSize" => 1]);
                        ?>
                        <?php
                        if(isset($data[0])) {
                            ?>
                            <div class="topBd_right">
                                <div class="studeBackTop">
                                    <h4 class="rightTitle">学子案例</h4>
                                    <div class="studeBack-left">
                                        <img src="<?php echo $data[0]['smallPhoto']?>" alt="学子案例头像">
                                    </div>
                                    <div class="studeBack-right">
                                        <h4><?php echo $data[0]['name']?></h4>
                                        <span><?php echo $data[0]['title']?></span>
                                        <ul>
                                            <li><?php echo $data[0]['score']?>:<?php echo $data[0]['abroadSchool']?></li>
                                        </ul>
                                    </div>
                                    <div style="clear: both"></div>
                                    <p class="luanFont">
                                        <span><?php echo $data[0]['abstract']?></span>
                                        <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=GMATpeixun" class="readAll rightPos01" target="_blank">在线咨询</a>
                                        <a href="/word-details/<?php echo $data[0]['id']?>/index,90,102.html" class="readAll rightPos02">阅读原文</a>
                                    </p>
                                </div>

                                <div class="newAdd-school topSchool">
                                    <h4 class="rightTitle"><a href="/case.html#admission">名校案例 <span>more</span></a></h4>
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "104,207",'pageSize'=>3]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><img src="<?php echo $v['image']?>" alt="名校案例"/></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div style="clear: both"></div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="topBd_left">
                            <ul>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple01.png" alt="紫色圆背景"/>
                                        <span>动态</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "91,118","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,91,118.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/91,118.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple02.png" alt="紫色圆背景"/>
                                        <span>院校</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "91,225","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,91,225.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/91,225.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple03.png" alt="紫色圆背景"/>
                                        <span>签证</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "91,129","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,91,129.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/91,129.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple04.png" alt="紫色圆背景"/>
                                        <span>移民</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "91,159","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,91,159.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/91,159.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abroadSchool，score,abstract','category' => "91,102","pageSize" => 1]);
                        ?>
                        <?php
                        if(isset($data[0])) {
                            ?>
                            <div class="topBd_right">
                                <div class="studeBackTop">
                                    <h4 class="rightTitle">学子案例</h4>
                                    <div class="studeBack-left">
                                        <img src="<?php echo $data[0]['smallPhoto']?>" alt="学子案例头像">
                                    </div>
                                    <div class="studeBack-right">
                                        <h4><?php echo $data[0]['name']?></h4>
                                        <span><?php echo $data[0]['title']?></span>
                                        <ul>
                                            <li><?php echo $data[0]['score']?>:<?php echo $data[0]['abroadSchool']?></li>
                                        </ul>
                                    </div>
                                    <div style="clear: both"></div>
                                    <p class="luanFont">
                                        <span><?php echo $data[0]['abstract']?></span>
                                        <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=GMATpeixun" class="readAll rightPos01" target="_blank">在线咨询</a>
                                        <a href="/word-details/<?php echo $data[0]['id']?>/index,91,102.html" class="readAll rightPos02">阅读原文</a>
                                    </p>
                                </div>

                                <div class="newAdd-school topSchool">
                                    <h4 class="rightTitle"><a href="/case.html#admission">名校案例 <span>more</span></a></h4>
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "104,207",'pageSize'=>3]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><img src="<?php echo $v['image']?>" alt="名校案例"/></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div style="clear: both"></div>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="topBd_left">
                            <ul>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple01.png" alt="紫色圆背景"/>
                                        <span>新加坡</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "93","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,93.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/93.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple02.png" alt="紫色圆背景"/>
                                        <span>加拿大</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "96","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,96.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/96.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple03.png" alt="紫色圆背景"/>
                                        <span>新西兰</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "97","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,97.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/97.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple03.png" alt="紫色圆背景"/>
                                        <span>法国</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "95","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,95.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/95.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <!--<li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple04.png" alt="紫色圆背景"/>
                                        <span>北欧</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "94","pageSize" => 3]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,94"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/94">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>-->
                            </ul>
                        </div>

                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abroadSchool，score,abstract','category' => "92,102","pageSize" => 1]);
                        ?>
                        <?php
                        if(isset($data[0])) {
                            ?>
                            <div class="topBd_right">
                                <div class="studeBackTop">
                                    <h4 class="rightTitle">学子案例</h4>
                                    <div class="studeBack-left">
                                        <img src="<?php echo $data[0]['smallPhoto']?>" alt="学子案例头像">
                                    </div>
                                    <div class="studeBack-right">
                                        <h4><?php echo $data[0]['name']?></h4>
                                        <span><?php echo $data[0]['title']?></span>
                                        <ul>
                                            <li><?php echo $data[0]['score']?>:<?php echo $data[0]['abroadSchool']?></li>
                                        </ul>
                                    </div>
                                    <div style="clear: both"></div>
                                    <p class="luanFont">
                                        <span><?php echo $data[0]['abstract']?></span>
                                        <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=GMATpeixun" class="readAll rightPos01" target="_blank">在线咨询</a>
                                        <a href="/word-details/<?php echo $data[0]['id']?>/index,92,102.html" class="readAll rightPos02">阅读原文</a>
                                    </p>
                                </div>

                               <div class="newAdd-school topSchool">
                                    <h4 class="rightTitle"><a href="/case.html#admission">名校案例 <span>more</span></a></h4>
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "104,207",'pageSize'=>3]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><img src="<?php echo $v['image']?>" alt="名校案例"/></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div style="clear: both"></div>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".stuTop01").slide({trigger:"mouseover"});
        </script>
        <div style="clear: both"></div>
        <div class="studyBot">
            <ul>
                <li>
                    <div class="titleCenter">
                        <img src="/cn/images/index_yanjiu01.png" alt="介绍图">
                        <h2><a href="/list/178,125.html">研究报告</a></h2>
                    </div>
                    <ol>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => "125,178","pageSize" => 5]);
                        foreach($data as $v) {
                            ?>
                            <li><a href="/word-details/<?php echo $v['id']?>/index,178,125.html"><?php echo $v['name']?></a></li>
                        <?php
                        }
                        ?>
                    </ol>
                    <a href="/list/178,125.html" class="more">查看更多 <i class="fa fa-caret-right"></i></a>
                </li>
                <li class="liMarginL02">
                    <div class="titleCenter">
                        <img src="/cn/images/index_yanjiu02.png" alt="介绍图">
                        <h2><a href="/question.html">问答</a></h2>
                    </div>
                    <ol>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => "121,178","pageSize" => 5]);
                        foreach($data as $v) {
                            ?>
                            <li><a href="/word-details/<?php echo $v['id']?>/index,178,121.html"><?php echo $v['name']?></a></li>
                        <?php
                        }
                        ?>
                    </ol>
                    <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=meiguoliuxue" class="more" target="_blank">立即提问  <i class="fa fa-caret-right"></i></a>
                </li>
                <li>
                    <div class="titleCenter">
                        <img src="/cn/images/index_yanjiu03.png" alt="介绍图">
                        <h2><a href="/public-class.html">公开课</a></h2>
                    </div>
                    <ol>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => "107,178","pageSize" => 5]);
                        foreach($data as $k => $v) {
                            ?>
                            <li><a href="/public-class/<?php echo $v['id']?>.html"><img src="/cn/images/index_erjiIcon.png" alt="耳机小图标"/> <?php echo $k+1?>.<?php echo $v['name']?></a></li>
                        <?php
                        }
                        ?>
                    </ol>
                    <a href="/public-class.html" class="more">收听更多 <i class="fa fa-caret-right"></i></a>
                </li>
            </ul>
            <div style="clear: both"></div>
        </div>
    </div>
    <div style="clear: both"></div>
</div>
<!--中间广告图片-->
<div class="advertisement">
    <a href="/schools.html" target="_blank"> <img src="/cn/images/index_guanggao01.jpg" alt="广告图"/></a>
</div>
<!--出国考试公用样式标题-->
<div class="newTitle-c">
    <div class="left-title">出国考试</div>
    <!--中间文字部分-->
    <div class="linkDiv">
        <ul>
            <li><a href="/public-class.html">GT公开课</a></li>
            <li><a href="/materials.html">申友教材</a></li>
            <li><a href="/case.html#allCase">高分感言</a></li>
        </ul>
    </div>
    <div class="phoneF">
        <img src="/cn/images/indexNav_font02.png" alt="电话文字图片"/>
    </div>
    <div class="search">
        <input type="text" value="热门搜索美国留学" onfocus="this.value=''" onblur="shiqu(this)">
        <input type="button"/>
    </div>
</div>
<!--出国考试下边部分-->
<div class="examination">
    <div class="studyLeft">
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','where' => "c.id=1021",'pageSize' => 1]);
        ?>
        <a href="<?php echo isset($data[0])?$data[0]['url']:''?>"><img src="<?php echo isset($data[0])?$data[0]['image']:''?>" alt="智能测评图片" class="leftImg"/></a>
<!--        培训产品-->
        <div class="perTrain">
            <div class="perTrainHd">
                <div class="other-studyTitle">
                    <a href="javascript:void(0);">
                        <b>培训<br/>产品</b>
                    </a>
                </div>
                <ul>
                    <li> <img src="/cn/images/index_productIcon.png" alt="箭头图标"/><a href="/gmatsheet.html">GMAT</a></li>
                    <li><a href="/toefl/assistance.html">托福</a></li>
                </ul>
            </div>
            <div class="perTrainBd">
                <ul>
                    <li>
                        <ul>
                            <li>
                                <div class="productLeft"><a href="/gmatsheet.html">基础课程</a></div>
                                <div class="productRight cultivate01">
                                    <div class="rightHd hd">
                                        <a href="javascript:void(0);" class="prevs prevS01"><i class="fa fa-caret-left"></i></a>
                                        <a href="javascript:void(0);" class="nexts nextS01"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="rightBd bd01">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "115,161"]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/picture-details/<?php echo $v['id']?>/index,161,115.html" class="haveBG"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                                <script type="text/javascript">
                                    jQuery(".cultivate01").slide({mainCell:".bd01 ul",trigger:"click",prevCell:".prevS01",nextCell:".nextS01"});
                                </script>
                            </li>
                            <li>
                                <div class="productLeft"><a href="/gmatsheet.html">高分课程</a></div>
                                <div class="productRight cultivate02">
                                    <div class="rightHd hd">
                                        <a href="javascript:void(0);" class="prevs prevS02"><i class="fa fa-caret-left"></i></a>
                                        <a href="javascript:void(0);" class="nexts prevS02"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="rightBd bd02">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "115,162"]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/picture-details/<?php echo $v['id']?>/index,109,162,115.html" class="haveBG"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                                <script type="text/javascript">
                                    jQuery(".cultivate02").slide({mainCell:".bd02 ul",trigger:"click",prevCell:".prevS02",nextCell:".nextS02"});
                                </script>
                            </li>
                            <li>
                                <div class="productLeft"><a href="/gmatsheet.html">强化课程</a></div>
                                <div class="productRight cultivate03">
                                    <div class="rightHd hd">
                                        <a href="javascript:void(0);" class="prevs prevS03"><i class="fa fa-caret-left"></i></a>
                                        <a href="javascript:void(0);" class="nexts prevS03"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="rightBd bd03">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "115,163"]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/picture-details/<?php echo $v['id']?>/index,109,163,115.html" class="haveBG"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                                <script type="text/javascript">
                                    jQuery(".cultivate03").slide({mainCell:".bd03 ul",trigger:"click",prevCell:".prevS03",nextCell:".nextS03"});
                                </script>
                            </li>
                            <li>
                                <div class="productLeft"><a href="/gmatsheet.html">开班查询</a></div>
                                <div class="productRight cultivate04">
                                    <div class="rightHd hd">
                                        <a href="javascript:void(0);" class="prevs prevS04"><i class="fa fa-caret-left"></i></a>
                                        <a href="javascript:void(0);" class="nexts prevS04"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="rightBd bd04">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "115,164"]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/picture-details/<?php echo $v['id']?>/index,164,115.html" class="haveBG02"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                                <script type="text/javascript">
                                    jQuery(".cultivate04").slide({mainCell:".bd04 ul",trigger:"click",prevCell:".prevS04",nextCell:".nextS04"});
                                </script>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul>
                    <li>
                        <ul>
                            <li>
                                <div class="productLeft"><a href="/toefl/assistance.html">强化班</a></div>
                                <div class="productRight cultivate05">
                                    <div class="rightHd hd">
                                        <a href="javascript:void(0);" class="prevs prevS01"><i class="fa fa-caret-left"></i></a>
                                        <a href="javascript:void(0);" class="nexts nextS01"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="rightBd bd01">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,163"]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/picture-details/<?php echo $v['id']?>/161.html" class="haveBG"><?php echo $v['name']?> </a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                                <script type="text/javascript">
                                    jQuery(".cultivate05").slide({mainCell:".bd01 ul",trigger:"click",prevCell:".prevS01",nextCell:".nextS01"});
                                </script>
                            </li>
                            <li>
                                <div class="productLeft"><a href="/toefl/assistance.html">模块班</a></div>
                                <div class="productRight cultivate06">
                                    <div class="rightHd hd">
                                        <a href="javascript:void(0);" class="prevs prevS02"><i class="fa fa-caret-left"></i></a>
                                        <a href="javascript:void(0);" class="nexts prevS02"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="rightBd bd02">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,233"]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/picture-details/<?php echo $v['id']?>/233.html" class="haveBG"><?php echo $v['name']?> </a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                                <script type="text/javascript">
                                    jQuery(".cultivate06").slide({mainCell:".bd02 ul",trigger:"click",prevCell:".prevS02",nextCell:".nextS02"});
                                </script>
                            </li>
                            <li>
                                <div class="productLeft"><a href="/toefl/assistance.html">VIP一对一</a></div>
                                <div class="productRight cultivate07">
                                    <div class="rightHd hd">
                                        <a href="javascript:void(0);" class="prevs prevS03"><i class="fa fa-caret-left"></i></a>
                                        <a href="javascript:void(0);" class="nexts prevS03"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="rightBd bd03">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,234"]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/picture-details/<?php echo $v['id']?>/234.html" class="haveBG"><?php echo $v['name']?> </a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                                <script type="text/javascript">
                                    jQuery(".cultivate07").slide({mainCell:".bd03 ul",trigger:"click",prevCell:".prevS03",nextCell:".nextS03"});
                                </script>
                            </li>
                            <li>
                                <div class="productLeft"><a href="/toefl/assistance.html">增值服务班</a></div>
                                <div class="productRight cultivate08">
                                    <div class="rightHd hd">
                                        <a href="javascript:void(0);" class="prevs prevS04"><i class="fa fa-caret-left"></i></a>
                                        <a href="javascript:void(0);" class="nexts prevS04"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                    <div class="rightBd bd04">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,235"]);
                                            foreach($data as $v) {
                                                ?>
                                                <li><a href="/picture-details/<?php echo $v['id']?>/235.html" class="haveBG"><?php echo $v['name']?> </a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div style="clear: both"></div>
                                <script type="text/javascript">
                                    jQuery(".cultivate08").slide({mainCell:".bd04 ul",trigger:"click",prevCell:".prevS04",nextCell:".nextS04"});
                                </script>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".perTrain").slide({titCell:".perTrainHd>ul>li",mainCell:".perTrainBd",trigger:"mouseover"});
        </script>

        <div class="starBC height02">
            <div class="other-title">
                <ul>
                    <li><span></span><img src="/cn/images/cultivate_btnIcon01.png" alt="图标"/></li>
                    <li>
                        <img src="/cn/images/index_productIcon02.png" alt="图标"/>
                        <a href="/teacher.html#teacher">明星教师</a>
                    </li>
                </ul>
                <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=meiguoliuxue" class="onlineBtn" target="_blank">在线咨询</a>
            </div>

            <div class="starBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract，smallPhoto,job,description','category' => "139"]);
                    foreach($data as $k => $v) {
                        ?>
                        <?php if(($k+1)%2 != 0) { ?>
                            <li>
                                <div class="starI wh02 floatL">
                                    <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html"><img src="<?php echo $v['smallPhoto']?>" alt="<?php echo $v['name']?>头像"></a>
                                </div>
                                <div class="starTitle mt02 floatL">
                                    <h4><a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html"><?php echo $v['name']?> <br><?php echo $v['job']?></a></h4>
                                </div>
                                <div style="clear: both"></div>
                                <div class="starInfo">
                                    <span><?php echo $v['abstract']?></span>
                                </div>
                            </li>
                        <?php
                        }else {
                            ?>
                            <li>
                                <div class="starI wh02 floatR">
                                    <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html"><img src="<?php echo $v['smallPhoto']?>" alt="<?php echo $v['name']?>头像"></a>
                                </div>
                                <div class="starTitle mt02 floatR">
                                    <h4><a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html"><?php echo $v['name']?> <br><?php echo $v['job']?></a></h4>
                                </div>
                                <div style="clear: both"></div>
                                <div class="starInfo">
                                    <span><?php echo $v['abstract']?></span>
                                </div>
                            </li>
                        <?php
                        }
                            ?>
                    <?php
                    }
                    ?>

                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".height02").slide({mainCell:".starBd ul",autoPlay:true,effect:"topMarquee",vis:2,interTime:50});
        </script>
<!--        app入口-->
        <div class="appUpload">
            <ul>
                <li>
                    <a href="/gmat/app.html">
                        <h4>GMAT APP下载 <br/>专属你的题库</h4>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>托福 APP下载 <br/>免费体验TPO模考</h4>
                        <img src="/cn/images/index_toeflApp.png" alt="二维码图片"/>
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <div class="studyRight">
        <div class="studyTop stuTop02">
            <div class="topHd hd hdSpecial02">
                <ul>
                    <li>
                        <a href="#">
                            <div class="twoSback01 conmonStyle">
                                <div class="fontDiv">
                                    <!--三角形-->
                                    <b></b>
                                    <h1>GMAT</h1>
                                    <span>了解更多</span>
                                </div>
                                <!--遮罩层-->
                                <div class="zzc-font"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="twoSback02 conmonStyle">
                                <div class="fontDiv">
                                    <!--三角形-->
                                    <b></b>
                                    <h1>TOEFL</h1>
                                    <span>了解更多</span>
                                </div>
                                <!--遮罩层-->
                                <div class="zzc-font"></div>
                            </div></a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="twoSback03 conmonStyle">
                                <div class="fontDiv">
                                    <!--三角形-->
                                    <b></b>
                                    <h1>其他</h1>
                                    <span>了解更多</span>
                                </div>
                                <!--遮罩层-->
                                <div class="zzc-font"></div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="topBd bd">
                <ul>
                    <li>
                        <div class="topBd_left">
                            <ul>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple01.png" alt="紫色圆背景"/>
                                        <span>考试<br/>动态</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "115,118",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,115,118.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/115,118.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple02.png" alt="紫色圆背景"/>
                                        <span>提分<br/>技巧</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "115,165",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,115,165.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/115,165.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple03.png" alt="紫色圆背景"/>
                                        <span>研究<br/>报告</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "115,125",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,115,125.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/115,125.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">

                                            <img src="/cn/images/index_purple04.png" alt="紫色圆背景"/>
                                            <span> <a href="/problem.html#toggle">机经<br/>下载 </a></span>

                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "115,250",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/problem.html#toggle"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/problem.html#toggle">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abroadSchool，score,abstract','category' => "115,102","pageSize" => 1]);
                        ?>
                        <?php
                        if(isset($data[0])) {
                            ?>
                            <div class="topBd_right">
                                <div class="studeBackTop">
                                    <h4 class="rightTitle">高分心得</h4>
                                    <div class="studeBack-left">
                                        <img src="<?php echo $data[0]['smallPhoto']?>" alt="高分心得头像">
                                    </div>
                                    <div class="studeBack-right">
                                        <h4><?php echo $data[0]['name']?></h4>
                                      <span><?php echo $data[0]['title']?></span>
                                        <ul>
                                            <li><?php echo $data[0]['score']?>
                                                : <?php echo $data[0]['abroadSchool']?></li>
                                        </ul>
                                    </div>
                                    <div style="clear: both"></div>
                                    <p class="luanFont">
                                        <span><?php echo $data[0]['abstract']?></span>
                                        <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=GMATpeixun" class="readAll rightPos01" target="_blank">在线咨询</a>
                                        <a href="/word-details/<?php echo $data[0]['id']?>/index,115,102.html" class="readAll rightPos02">阅读原文</a>
                                    </p>
                                </div>

                                <div class="newAdd-school topScore">
                                    <h4 class="rightTitle"><a href="javascript:void(0);">高分案例 <span>more</span></a></h4>
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'category' => '104,206','pageSize' => 2]);
                                        $total = $data['total'];
                                        $count = $data['count'];
                                        unset($data['count']);
                                        unset($data['total']);
                                        unset($data['pageStr']);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/picture-details/<?php echo $v['id']?>/104.html"><img src="<?php echo $v['image']?>" alt="ͼƬ"></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="topBd_left">
                            <ul>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple01.png" alt="紫色圆背景"/>
                                        <span>动态</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,118",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,116,118.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/116,118.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple02.png" alt="紫色圆背景"/>
                                        <span>提分<br>技巧</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,165",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,116,165.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/116,165.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple03.png" alt="紫色圆背景"/>
                                        <span>研究<br>报告</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,125",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,116,125.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/116,125.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple04.png" alt="紫色圆背景"/>
                                        <span><a href="/problem.html">每日<br>一题</a></span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,249",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/problem.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/problem.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abroadSchool，score,abstract','category' => "116,102","pageSize" => 1]);
                        ?>
                        <?php
                        if(isset($data[0])) {
                            ?>
                            <div class="topBd_right">
                                <div class="studeBackTop">
                                    <h4 class="rightTitle">高分心得</h4>
                                    <div class="studeBack-left">
                                        <img src="<?php echo $data[0]['smallPhoto']?>" alt="高分心得头像">
                                    </div>
                                    <div class="studeBack-right">
                                        <h4><?php echo $data[0]['name']?></h4>
                                        <span><?php echo $data[0]['title']?></span>
                                        <ul>
                                            <li><?php echo $data[0]['score']?>
                                                : <?php echo $data[0]['abroadSchool']?></li>
                                        </ul>
                                    </div>
                                    <div style="clear:both;"></div>
                                    <p class="luanFont">
                                        <span><?php echo $data[0]['abstract']?></span>
                                        <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=GMATpeixun" class="readAll rightPos01" target="_blank">在线咨询</a>
                                        <a href="/word-details/<?php echo $data[0]['id']?>/index,116,102.html" class="readAll rightPos02">阅读原文</a>

                                    </p>
                                </div>

                                <div class="newAdd-school topScore">
                                    <h4 class="rightTitle"><a href="javascript:void(0);">高分案例 <span>more</span></a></h4>
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'category' => '104,206','pageSize' => 2]);
                                        $total = $data['total'];
                                        $count = $data['count'];
                                        unset($data['count']);
                                        unset($data['total']);
                                        unset($data['pageStr']);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/picture-details/<?php echo $v['id']?>/104.html"><img src="<?php echo $v['image']?>" alt="ͼƬ"></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="topBd_left">
                            <ul>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple01.png" alt="紫色圆背景"/>
                                        <span>SAT</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "168,173",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,168,173.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/168,173.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple01.png" alt="紫色圆背景"/>
                                        <span>IELTS</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "168,172",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,168,172.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/168,172.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple02.png" alt="紫色圆背景"/>
                                        <span>GRE</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "168,171",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,168,171.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/168,171.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="left_purple">
                                        <img src="/cn/images/index_purple03.png" alt="紫色圆背景"/>
                                        <span>ACT</span>
                                    </div>
                                    <div class="right_font">
                                        <ul>
                                            <?php
                                            $data = \app\modules\cn\models\Content::getContent(['category' => "168,170",'pageSize' => 3]);
                                            foreach($data as $k => $v) {
                                                ?>
                                                <li><a href="/word-details/<?php echo $v['id']?>/index,168,170.html"><?php echo $v['name']?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                        <a href="/list/168,170.html">more <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abroadSchool，score,abstract','category' => "168,102","pageSize" => 1]);
                        ?>
                        <?php
                        if(isset($data[0])) {
                            ?>
                            <div class="topBd_right">
                                <div class="studeBackTop">
                                    <h4 class="rightTitle">高分心得</h4>
                                    <div class="studeBack-left">
                                        <img src="<?php echo $data[0]['smallPhoto']?>" alt="高分心得头像">
                                    </div>
                                    <div class="studeBack-right">
                                        <h4><?php echo $data[0]['name']?></h4>
                                        <span><?php echo $data[0]['title']?></span>
                                        <ul>
                                            <li><?php echo $data[0]['score']?>
                                                : <?php echo $data[0]['abroadSchool']?></li>
                                        </ul>
                                    </div>
                                    <div style="clear: both"></div>
                                    <p class="luanFont">
                                        <span><?php echo $data[0]['abstract']?></span>
                                        <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=GMATpeixun" class="readAll rightPos01" target="_blank">在线咨询</a>
                                        <a href="/word-details/<?php echo $data[0]['id']?>/index,168,102.html" class="readAll rightPos02">阅读原文</a>

                                    </p>
                                </div>

                                <div class="newAdd-school topScore">
                                    <h4 class="rightTitle"><a href="javascript:void(0);">高分案例 <span>more</span></a></h4>
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'category' => '104,206','pageSize' => 2]);
                                        $total = $data['total'];
                                        $count = $data['count'];
                                        unset($data['count']);
                                        unset($data['total']);
                                        unset($data['pageStr']);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/picture-details/<?php echo $v['id']?>/104.html"><img src="<?php echo $v['image']?>" alt="ͼƬ"></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </li>
                </ul>

            </div>
        </div>
        <script type="text/javascript">
            jQuery(".stuTop02").slide({trigger:"mouseover"});
        </script>
        <div style="clear: both"></div>
        <div class="studyBot02">
            <ul>
                <li>
                    <div class="diffGmat">
                        <a href="http://gmat.viplgw.cn/test/index.html"><img src="/cn/images/index_gmatBG01.png" alt="智能测评"/></a>
                        <a href="http://gmat.viplgw.cn/practise/index.html"><img src="/cn/images/index_gmatBG.png" alt="在线做题"/></a>
                    </div>
                </li>
                <li>
                    <div class="titleCenter otherW">
                        <img src="/cn/images/index_yanjiu02.png" alt="介绍图">
                        <h2><a href="/question.html">问答</a></h2>
                    </div>
                    <div class="otherShow">
<!--                        <a href="/question.html"><img src="/cn/images/index_answerTitle01.png" alt="标题图"/></a>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "121,177",'pageSize' => 5]);
                            foreach($data as $k => $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/index,177,121.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <a href="http://chat.looyuoms.com/chat/chat/p.do?c=20001277&f=10057560&g=10060013&refer=meiguoliuxue" class="aBtn" target="_blank">立即提问 <i class="fa fa-caret-right"></i></a>
                    </div>
                </li>
                <li>
                    <div class="titleCenter otherW">
                        <img src="/cn/images/index_yanjiu03.png" alt="介绍图">
                        <h2><a href="/public-class.html">公开课</a></h2>
                    </div>
                    <div class="otherShow">
<!--                        <a href="/public-class.html"><img src="/cn/images/index_answerTitle02.png" alt="标题图"/></a>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "107,177",'pageSize' => 5]);
                            foreach($data as $k => $v) {
                                ?>
                                <li><a href="/public-class/<?php echo $v['id']?>.html"><img src="/cn/images/index_erjiIcon.png" alt="耳机小图标"/> <?php echo $k+1?>.<?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <a href="/public-class.html" class="aBtn">收听更多 <i class="fa fa-caret-right"></i></a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <div style="clear: both"></div>
</div>
<!--中间广告图片-->
<div class="advertisement">
    <?php
    $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','where' => "c.id=1091",'pageSize' => 1]);
    ?>
    <a href="<?php echo $data[0]['url']?>"> <img src="<?php echo $data[0]['image']?>" alt="广告图2"/></a>
</div>
<!--留学百科公用样式标题-->
<div class="newTitle-c">
    <div class="left-title">留学百科</div>
    <div class="phoneF">
        <img src="/cn/images/indexNav_font02.png" alt="电话文字图片"/>
    </div>
    <div class="search">
        <input type="text" value="热门搜索美国留学" onfocus="this.value=''" onblur="shiqu(this)">
        <input type="button"/>
    </div>
</div>
<!--留学百科下面的内容-->
<div class="baikeAbroad" id="baike">
    <div class="abroadLeft">
        <div class="abroadHd hd">
            <ul>
                <li><a href="/thinku-news.html">申友专题</a></li>
                <li><a href="javascript:void(0);">热帖排行榜</a></li>
            </ul>
        </div>
        <div style="clear: both"></div>
        <div class="abroadBd bd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'hot','category' => "105,118",'pageSize' => 7]);
                foreach($data as $k => $v) {
                    ?>
                    <li>
                        <a href="/word-details/<?php echo $v['id']?>/index,105,118.html">
                            <p title="<?php echo $v['name']?>">
                                <i class="fa fa-angle-left"></i> <?php echo $v['name']?><?php echo  $v['hot'] == 0?'':'<img src="/cn/images/index_hotRed.png" alt="hot小图标"/>'?>
                            </p>
                        </a>
                        <span><?php /*echo  $v['userId']*/?>&nbsp;&nbsp;&nbsp;&nbsp;发布于<?php echo date("Y-m-d",strtotime($v['createTime']))?>&nbsp;&nbsp;&nbsp;&nbsp;查看:<?php echo  $v['viewCount']?></span>
                    </li>
                <?php
                }
                ?>
            </ul>
            <ul>
                <li>
                    <img src="/cn/images/index_retiePHB.jpg" alt="热帖排行榜图片" width="100%" height="310"/>
                </li>
<!--                --><?php
//                $data = \app\modules\cn\models\Content::getContent(['fields' => 'hot','category' => "105,174",'pageSize' => 7,'order' => 'hot DESC']);
//                foreach($data as $k => $v) {
//                    ?>
<!--                    <li>-->
<!--                        <a href="/word-details/--><?php //echo $v['id']?><!--/index,105,174"><p>--><?php //echo $v['name']?><!----><?php //echo  $v['hot'] == 0?'':'<img src="/cn/images/index_hotRed.png" alt="hot小图标"/>'?><!--</p></a>-->
<!--                        <span>--><?php //echo  $v['userId']?><!--&nbsp;&nbsp;&nbsp;&nbsp;发布于--><?php //echo date("Y-m-d",strtotime($v['createTime']))?><!--&nbsp;&nbsp;&nbsp;&nbsp;查看:0</span>-->
<!--                    </li>-->
<!--                --><?php
//                }
//                ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".abroadLeft").slide({trigger:"mouseover"});
    </script>
    <div class="abroadCenter">
        <h3 class="bigTitle topL"><a href="#">热门板块</a></h3>
        <ul>
            <li>
                <div class="centerL"><img src="/cn/images/index_guoqi01.png" alt="美国留学"/></div>
                <div class="centerR">
                    <a href="#"><h4>美国留学</h4></a>
                    <ol>
                        <li>帖子总数：251</li>
                        <li>今日新帖：2</li>
                    </ol>

                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="centerL"><img src="/cn/images/index_guoqi02.png" alt="英国留学"/></div>
                <div class="centerR">
                    <a href="#"><h4>英国留学</h4></a>
                    <ol>
                        <li>帖子总数：150</li>
                        <li>今日新帖：3</li>
                    </ol>

                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="centerL"><img src="/cn/images/index_guoqi03.png" alt="香港留学"/></div>
                <div class="centerR">
                    <a href="#"><h4>香港留学</h4></a>
                    <ol>
                        <li>帖子总数：198</li>
                        <li>今日新帖：5</li>
                    </ol>

                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="centerL"><img src="/cn/images/index_guoqi04.png" alt="GMAT专区"/></div>
                <div class="centerR">
                    <a href="#"><h4>GMAT专区</h4></a>
                    <ol>
                        <li>帖子总数：284</li>
                        <li>今日新帖：10</li>
                    </ol>

                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="centerL"><img src="/cn/images/index_guoqi05.png" alt="托福专区"/></div>
                <div class="centerR">
                    <a href="#"><h4>托福专区</h4></a>
                    <ol>
                        <li>帖子总数：302</li>
                        <li>今日新帖：6</li>
                    </ol>

                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="centerL"><img src="/cn/images/index_guoqi06.png" alt="海外学习与就业"/></div>
                <div class="centerR">
                    <a href="#"><h4>海外学习与就业</h4></a>
                    <ol>
                        <li>帖子总数：298</li>
                        <li>今日新帖：15</li>
                    </ol>

                </div>
                <div style="clear: both"></div>
            </li>
        </ul>
        <a href="/surprise.html" class="jinru">进入论坛频道 <i class="fa fa-caret-right"></i></a>
    </div>
    <div class="abroadRight">
        <h3 class="bigTitle"><a href="/teachers/interviews.html">名师文档</a></h3>
        <div class="teacherJY">
            <div class="slideTeaFont">
                <div class="slideTeaHd hd">
                    <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                    <a href="javascript:;" class="next"><i class="fa fa-caret-right"></i></a>
                </div>
                <div class="slideTeaBd bd">
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => "142"]);
                    foreach($data as $k => $v) {
                        ?>
                        <ul>
                            <li>
                                <div class="teaHeadImg">
                                    <h1><?php echo $v['name']?></h1>
                                    <div>
                                        <img src="<?php echo $v['image']?>" alt="名师头像"/>
                                    </div>
                                </div>
                                <div class="teaInfo">
                                    <h5><?php echo $v['title']?></h5>
                                    <?php echo $v['abstract']?>
                                    <a href="/word-details/<?php echo $v['id']?>/index,142.html">more <i class="fa fa-caret-right"></i></a>
                                </div>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".slideTeaFont").slide({trigger:"click"});
            </script>
        </div>

    </div>
    <div style="clear: both"></div>
    <div class="abroadBottom">
        <div class="abBottomLC">
            <div class="abBottomL"><a href="/materials.html">申<br>友<br>教<br>材</a></div>
            <div class="abBottomC">
                <div class="abBbd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => "108"]);
                        foreach($data as $k => $v) {
                            ?>
                            <li><a href="/materials.html"><span></span><img src="<?php echo $v['image']?>" alt="教材"></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".abBottomC").slide({mainCell:".abBbd ul",autoPlay:"autoPlay",effect:"leftLoop",vis:6,mouseOverStop:false});
            </script>
        </div>
        <div class="abBottomR"><a href="javascript:void(0);"><img src="/cn/images/index_qunawei.png" alt="申友权威认证"/></a></div>
        <div style="clear: both"></div>
    </div>
</div>

