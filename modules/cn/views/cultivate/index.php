
    <link rel="stylesheet" href="/cn/css/cultivate.css"/>


    <script type="text/javascript" src="/cn/js/studyAbroad.js"></script>

<!-----------------------------培训导航------------------------------>
<div class="curltivateNav">
    <ul>
        <div class="purpleBG">
            <b>培训首页</b>
        </div>
        <li>
            <a href="/gmatsheet.html">
                <img src="/cn/images/cultivate_icon01.png" alt="GMAT培训" width="29"/><span>GMAT培训</span>
            </a>
        </li>
        <li>
            <a href="/toefl/assistance.html">
                <img src="/cn/images/cultivate_icon02.png" alt="托福培训" width="29"/><span>托福培训</span>
            </a>
        </li>
        <li>
            <a href="/training-other.html">
                <img src="/cn/images/cultivate_icon03.png" alt="其他培训" width="29"/><span>其他培训</span>
            </a>
        </li>
    </ul>
</div>
<!-----------------------------培训导航end------------------------------>
<div class="cultivateTop">
    <div class="cult-left">
        <div class="leftBanner">
            <div class="lbcuHd hd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','category' => "237,190",'pageSize'=>10]);
                    foreach($data as $v) {
                        ?>
                        <li></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="lbcuBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','category' => "237,190",'pageSize'=>10]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="<?php echo $v['url']?>"><img src="<?php echo $v['image']?>" alt="banner图"/></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".leftBanner").slide({mainCell:".lbcuBd ul",autoPlay:true,effect:"leftLoop"});
        </script>
        <!--推荐课程-->
        <div class="lessonSuggestions">
            <h3>推荐课程</h3>
            <div class="lessonBanner">
                <div class="lessonBd">
                    <img src="/cn/images/cultivate_labaIcon.png" alt="喇叭图标"/>
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => "105,118","pageSize" => 5]);
                        foreach($data as $v) {
                            ?>
                            <li><a href="/word-details/<?php echo $v['id']?>/105,118.html"><?php echo $v['name']?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".lessonBanner").slide({mainCell:".lessonBd ul",autoPlay:true,effect:"leftLoop",vis:2});
            </script>
            <div style="clear: both"></div>
        </div>
        <!--精品课程-->
        <div class="excellentCourse">
            <h4>精品课程</h4>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','category' => "160,190","pageSize" => 4]);
                foreach($data as $v) {
                ?>
                <li>
                    <div>
                        <a href="<?php echo $v['url']?>">
                        <img src="<?php echo $v['image']?>" alt="图片"/>
                        </a>
                    </div>
                    <span><a href="<?php echo $v['url']?>"><?php echo $v['name']?> </a></span>
                    <a href="<?php echo $v['url']?>">查看详情</a>
                </li>
                <?php
                }
                ?>
            </ul>
            <!--<div class="excellent-left">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "160,177","pageSize" => 4]);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <div class="excellImgL">
                                <img src="<?php echo $v['image']?>" alt="图片"/>
                            </div>
                            <div class="excellR">
                                <b>精品课程</b>
                                <h5><?php echo $v['name']?></h5>
                            </div>
                            <div style="clear: both"></div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>-->
            <!--<div class="excellent-right">
                <h3>开班查询</h3>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "164","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <img src="/cn/images/quesAnswer_dianIcon.png" alt="icon"/>
                            <a href="/word-details/<?php echo $v['id']?>/164.html"><?php echo $v['name']?></a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>-->
        </div>
    </div>
    <div class="cult-center">
        <div class="centerBanner">
            <div class="adChd hd">
                <ul>
                    <li><a href="/list/118.html">考讯</a></li>
                    <li><a href="/public-class.html">公开课</a></li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="adCbd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "109,118","pageSize" => 7]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/109,118.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "177,107","pageSize" => 7]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/public-class/<?php echo $v['id']?>.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".centerBanner").slide({mainCell:".adCbd",trigger:"mouseover"});
        </script>
        <!--快速通道-->
        <div class="hyperchannel">
            <h3>快速通道</h3>
            <ul>
                <li>
                    <a href="http://www.gmatonline.cn/practise/" target="_blank">
                        <span class="haveW">
                            <img src="/cn/images/cultivate_btnIcon01.png" alt="第一个图标"/>
                        </span>
                        <img src="/cn/images/cultivate_btnIcon06.png" alt="第二个图标"/>
                        <span class="mlTitle">GMAT快速做题</span>
                    </a>
                </li>
                <li>
                    <a href="http://www.gmatonline.cn/exam/" target="_blank">
                          <span class="haveW">
                            <img src="/cn/images/cultivate_btnIcon02.png" alt="第一个图标"/>
                        </span>
                        <img src="/cn/images/cultivate_btnIcon06.png" alt="第二个图标"/>
                        <span class="mlTitle">GMAT在线模考</span>
                    </a>
                </li>
                <li>
                    <a href="http://www.gmatonline.cn/test/" target="_blank">
                          <span class="haveW">
                            <img src="/cn/images/cultivate_btnIcon03.png" alt="第一个图标"/>
                        </span>
                        <img src="/cn/images/cultivate_btnIcon06.png" alt="第二个图标"/>
                        <span class="mlTitle">GMAT在线测评</span>
                    </a>
                </li>
                <li>
                    <a href="http://www.toeflonline.cn/listen/practise.html" target="_blank">
                          <span class="haveW">
                            <img src="/cn/images/cultivate_btnIcon04.png" alt="第一个图标"/>
                        </span>
                        <img src="/cn/images/cultivate_btnIcon06.png" alt="第二个图标"/>
                        <span class="mlTitle">托福听力训练</span>
                    </a>
                </li>
                <li>
                    <a href="http://www.toeflonline.cn/tpoExam.html" target="_blank">
                          <span class="haveW">
                            <img src="/cn/images/cultivate_btnIcon05.png" alt="第一个图标"/>
                        </span>
                        <img src="/cn/images/cultivate_btnIcon06.png" alt="第二个图标"/>
                        <span class="mlTitle">TPO模考</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <div class="cult-right">
        <div class="highScore">
            <div class="highHd hd">
                <ul>
                    <li><a href="/case.html#admission">GMAT高分榜单</a></li>
                    <li><a href="/case.html#admission">托福高分榜单</a></li>

                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="highBd">
                <ul>
                    <li>
                        <div class="highS-out">
                            <div class="highS-outBd">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "104","pageSize" => 15]);
//                                    var_dump($data);exit;
                                    foreach($data as $v) {
                                        ?>
                                        <li><img src="/cn/images/cultivate_jiangbei.png" alt="奖杯图标"/>
                                            <a href="/word-details/<?php echo $v['id']?>/104.html"><?php echo $v['name']?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".highS-out").slide({mainCell:".highS-outBd ul",autoPlay:true,effect:"topMarquee",interTime:50,vis:7});
                        </script>
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="highS-out02">
                            <div class="highS-outBd02">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "104,116","pageSize" => 15]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><img src="/cn/images/cultivate_jiangbei.png" alt="奖杯图标"/>
                                            <a href="/word-details/<?php echo $v['id']?>/104.html"><?php echo $v['name']?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".highS-out02").slide({mainCell:".highS-outBd02 ul",autoPlay:true,effect:"topMarquee",interTime:50,vis:7});
                        </script>
                    </li>

                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".highScore").slide({mainCell:".highBd",trigger:"mouseover"});
        </script>
        <div class="dissRight cultML">
            <div class="newActive">
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
    </div>
</div>
<div class="advert">
    <a href="#"><img src="/cn/images/cultivate_advate.png" alt="广告图片"/></a>
</div>
<!--GMAT备考-->
<div id="GMAT" class="commonTitle commonTitleBG01">
    <h1>GMAT备考</h1>
    <div>
        <b>GMAT/托福一站式学习平台全国高分基地</b>
        <span><img src="/cn/images/cultvate_whitePhone.png" alt="白色电话" width="20"/> 400-600-1123</span>
        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线测试</a>
    </div>
</div>
<div class="commonContent">
    <!--录取榜部分-->
    <div class="admissionList">
        <div class="admissLeft">
            <div class="albannerHd hd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "177,115,190",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="albannerBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields'=> "url",'category' => "177,115,190",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="<?php echo $v['url']?>"><img src="<?php echo $v['image']?>" alt="banner图"/></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".admissLeft").slide({mainCell:".albannerBd ul",autoPlay:true,effect:"leftLoop"});
        </script>
        <div class="admissRight">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "118,115","pageSize" => 7]);
                foreach($data as $v) {
                    ?>
                    <li><span>●</span><a href="/word-details/<?php echo $v['id']?>/115,118.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <!--培训产品部分-->
    <div class="trainingProduct">
        <div class="trainPleft">
            <div class="trainPTitle">
                <p><a href="/gmatsheet.html" target="_blank">培训产品</a></p>
            </div>
            <div class="trainProduct cultTrain">
                <ul>
                    <li>
                        <div class="productLeft"><a href="/gmat/assistance/basic-course.html">基础课程</a></div>
                        <div class="productRight">
                            <div class="rightHd hd">
                                <a href="javascript:void(0);" class="prev"><i class="fa fa-caret-left"></i></a>
                                <a href="javascript:void(0);" class="next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="rightBd bd01">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "161,115","pageSize" => 1]);
                                    foreach($data as $v) {
                                    ?>
                                    <li><a href="/picture-details/<?php echo $v['id']?>/161.html"><?php echo $v['name']?> </a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".productRight").slide({mainCell:".bd01 ul",trigger:"click"});
                        </script>
                    </li>

                    <li>
                        <div class="productLeft"><a href="/gmat/assistance/advanced-course.html">高分课程</a></div>
                        <div class="productRight">
                            <div class="rightHd hd">
                                <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                                <a href="javascript:;" class="next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="rightBd bd02">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "162,115","pageSize" => 4]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><a href="/picture-details/<?php echo $v['id']?>/162.html"><?php echo $v['name']?> </a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".productRight").slide({mainCell:".bd02 ul",trigger:"click"});
                        </script>
                    </li>

                    <li>
                        <div class="productLeft"><a href="/gmat/assistance/intensive-training-course.html">强化课程</a></div>
                        <div class="productRight">
                            <div class="rightHd hd">
                                <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                                <a href="javascript:;" class="next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="rightBd bd03">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "163,115","pageSize" => 8]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><a href="/picture-details/<?php echo $v['id']?>/163.html"><?php echo $v['name']?> </a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".productRight").slide({mainCell:".bd03 ul",trigger:"click"});
                        </script>
                    </li>

                    <li>
                        <div class="productLeft"><a href="/assistance/course-inquiry.html">开班查询</a></div>
                        <div class="productRight">
                            <div class="rightHd hd">
                                <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                                <a href="javascript:;" class="next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="rightBd bd04">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "164,115","pageSize" => 3]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><a href="/picture-details/<?php echo $v['id']?>/164.html"><?php echo $v['name']?> </a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".productRight").slide({mainCell:".bd04 ul",trigger:"click"});
                        </script>
                    </li>

                </ul>
            </div>
        </div>
        <div class="trainPright">
            <div class="trainPTitle">
                <p><a href="/question.html">GMAT问答</a></p>
            </div>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "121,115","pageSize" => 4]);
                foreach($data as $v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/115,121.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
            <a target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">立即提问</a>
        </div>
    </div>
    <!--备考资料部分-->
    <div class="ueberTestdaf">
        <div class="ueberHd hd">
            <h4><a href="/duidance.html">备考资料</a></h4>
            <ul>
                <li><a href="/duidance.html">数学</a></li>
                <li><a href="/duidance.html">语法</a></li>
                <li><a href="/duidance.html">逻辑</a></li>
                <li><a href="/duidance.html">阅读</a></li>
                <li><a href="/duidance.html">作文</a></li>
                <li><a href="/duidance.html">IR</a></li>
            </ul>
        </div>
        <div class="ueberBd">
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square01">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "166,115,196","pageSize" => 5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/115,166.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square01">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "166,115,197","pageSize" => 5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/115,116.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square01">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "166,115,198","pageSize" => 5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/115,166.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square01">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "166,115,199","pageSize" => 5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/115,166.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square01">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "166,115,200","pageSize" => 5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/115,166.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square01">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "166,115,201","pageSize" => 5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/115,166.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".ueberTestdaf").slide({mainCell:".ueberBd",trigger:"mouseover"});
    </script>
    <!--客户感言部分-->
    <div class="CustomerFeedback">
        <div class="customer-left">
            <a href="/case.html#allCase">
            <img src="/cn/images/cultivate_customer02.png" alt="客户感言图片"/>
            </a>
        </div>
        <div class="customer-right">
            <?php
            $data = \app\modules\cn\models\Content::getContent(['category' => "115,102","pageSize" => 7]);
            foreach($data as $v) {
                ?>
                <p><span>●</span><a href="/picture-details/<?php echo $v['id']?>/102.html"><?php echo $v['title']?></a></p>
            <?php
            }
            ?>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>
<!--智能测评-->
<div class="intelligentTest">
    <div class="ceping intell">
        <h1>GMATONLINE智能测评</h1>
        <span>选择最适合你的题目难度</span>
        <ul>
            <li>
                <a href="http://www.gmatonline.cn/practise/cepingtishi&kzid=66&cptime=45" target="_blank">
                    <div class="circleWhite">
                        <span></span>
                        <img src="/cn/images/quesAnswer_cepingIcon01.png" alt="图标"/>
                    </div>
                    <p>
                        未考过GMAT <br>
                        无IBT/IELTS成绩
                    </p>
                </a>
            </li>
            <li>
                <a href="http://www.gmatonline.cn/practise/cepingtishi&kzid=67&cptime=45" target="_blank">
                    <div class="circleWhite">
                        <span></span>
                        <img src="/cn/images/quesAnswer_cepingIcon02.png" alt="图标"/>
                    </div>
                    <p>
                        未考过GMAT <br>
                        有IBT/IELTS成绩
                    </p>
                </a>
            </li>
            <li>
                <a href="http://www.gmatonline.cn/practise/cepingtishi&kzid=68&cptime=50" target="_blank">
                    <div class="circleWhite">
                        <span></span>
                        <img src="/cn/images/quesAnswer_cepingIcon03.png" alt="图标" style="width: 41px"/>
                    </div>
                    <p>
                        考过GMAT <br>
                        600以下
                    </p>
                </a>
            </li>
            <li>
                <a href="http://www.gmatonline.cn/practise/cepingtishi&kzid=69&cptime=55" target="_blank">
                    <div class="circleWhite">
                        <span></span>
                        <img src="/cn/images/quesAnswer_cepingIcon04.png" alt="图标"/>
                    </div>
                    <p>
                        考过GMAT <br>
                        650以下
                    </p>
                </a>
            </li>
            <li>
                <a href="http://www.gmatonline.cn/practise/cepingtishi&kzid=70&cptime=55" target="_blank">
                    <div class="circleWhite">
                        <span></span>
                        <img src="/cn/images/quesAnswer_cepingIcon05.png" alt="图标" style="width: 54px"/>
                    </div>
                    <p>
                        考过GMAT <br>
                        700以下
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <img src="/cn/images/studentsCase_onlinePG02.png" alt="在线评估图标"  class="onlineImg"/>
    <div class="onlinePG onlineSpe">

        <div class="userInfo">
            <ul>
                <li>
                    <label>
                        <span>*</span>
                        <b>姓名：</b>
                    </label>
                    <div>
                        <input class="onlineName" type="text"/>
                    </div>
                </li>
                <?php
                $extendData = \app\modules\cn\models\CategoryExtend::find()->where("catId=226 AND belong='content'")->orderBy('id ASC')->all();
                    foreach($extendData as $v) {
                        ?>
                        <li>
                            <label>
                                <span>*</span>
                                <b><?php echo $v['name']?>：</b>
                            </label>
                            <?php if($v['type'] == 0){?>
                                <div>
                                    <input type="text" name=""/>
                                </div>
                            <?php } elseif($v['type'] == 5) {
                            $typeValue = explode(",",$v['typeValue']);
                            ?>
                            <div class="infoRight">
                                <div class="default defa04">
                                    <span class="onlineValue">请选择</span>
                                    <div class="clickBac clickBac03" onclick="selectInfo(this)"></div>
                                    <!--文字-->
                                    <div class="secFont secFont04">
                                        <ul>
                                            <?php foreach($typeValue as $val) { ?>
                                                <li><?php echo $val?></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both"></div>
                            <?php
                            }
                            ?>
                        </li>
                    <?php
                    }
                ?>
                <li>
                    <label>
                        <span>*</span>
                        <b>验证码：</b>
                    </label>
                    <div class="diffWidth">
                        <input name="code" type="text"/>
                        <input onclick="onlineCode(this)" type="button" value="获取验证码"/>
                    </div>
                </li>
                <li>
                    <div class="submitBtn">
                        <div onclick="onlineSub(this)">提交</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        function onlineCode(_this){
            var phone = $(_this).closest('li').prev().find('input').val();
            $.post('/cn/api/phone-code',{type:3,phoneNum:phone},function(re){
                alert(re.message);
            },"json")
        }

        function onlineSub(_this){
            var phone = $(_this).closest('li').prev().prev().find('input').val();
            var email = $(_this).closest('li').prev().prev().prev().find('input').val();
            var name = $('.onlineName').val();
            var code = $(_this).closest('li').prev().find('input').val();
            var _class = $(_this).closest('li').prev().prev().prev().prev().find('.onlineValue').html();
            if(phone == ''){
                alert('留下您的联系方式');
                return false;
            }
            if(code == ''){
                alert('请输入验证码');
                return false;
            }
            if(_class == '请选择'){
                alert('请选择课程');
                return false;
            }
            if(name == ''){
                alert('请输入您的姓名');
                return false;
            }
            if(email == ''){
                alert('请输入你的联系邮箱');
                return false;
            }
            $.post('/cn/api/online-words',{class:_class,name:name,email:email,phone:phone,code:code},function(re){
                alert(re.message);
                window.location.reload()
            },"json")
        }
    </script>
</div>
<!--GMAT名师-->
<div class="famousTeacher">
    <div class="starCounselor noBorder">
        <!--标题-->
        <div class="startTitle-big title-back02">
            <h4>GMAT名师</h4>
        </div>
        <!--右上角的字-->
        <span class="posXY-font">申友教育拥有国内专业的留学服务团队
            &nbsp;&nbsp;&nbsp;&nbsp;
            追求前沿录取结果</span>
        <div class="teaBanner tea01">
            <div class="teacerBd teaSpe01">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'job,abstract','category' => "139",'pageSize'=>7]);
                    foreach($data as $v) {
                        ?>
                    <li>
                        <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html">
                            <div class="leftTeacher">
                                <img src="<?php echo $v['image']?>" alt="老师图片"/>
                                <!--遮罩层-->
                                <div class="teacherZZC">
                                    <h5><?php echo $v['name']?></h5>
                                    <p>
                                        <?php echo $v['abstract']?>
                                    </p>
                                </div>
                            </div>

                            <div class="bottomName otherRN01">
                                <h4><?php echo $v['name']?></h4>
                                <span><?php echo $v['job']?></span>
                            </div>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".tea01").slide({mainCell:".teacerBd ul",autoPlay:true,effect:"leftMarquee",vis:6,interTime:10});
        </script>
    </div>
</div>
<!--托福备考-->
<div id="TOEFL" class="commonTitle commonTitleBG02">
    <h1>托福备考</h1>
    <div>
        <b>GMAT/托福一站式学习平台全国高分基地</b>
        <span><img src="/cn/images/cultvate_whitePhone.png" alt="白色电话" width="20"/> 400-600-1123</span>
        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" style="color: #7690c8" target="_blank">在线测试</a>
    </div>
</div>
<div class="commonContent">
    <!--录取榜部分-->
    <div class="admissionList admissSpe02">
        <div class="admissLeft">
            <div class="albannerHd hd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "116,190",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="albannerBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields'=> "url",'category' => "116,190",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="<?php echo $v['url']?>"><img src="<?php echo $v['image']?>" alt="banner图"/></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".admissSpe02").slide({mainCell:".albannerBd ul",autoPlay:true,effect:"leftLoop"});
        </script>
        <div class="admissRight">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "116,118",'pageSize'=>7]);
                foreach($data as $v) {
                    ?>
                    <li><span>●</span><a href="/word-details/<?php echo $v['id']?>/116,118.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <!--培训产品部分-->
    <div class="trainingProduct">
        <div class="trainPleft">
            <div class="trainPTitle trainPT01">
                <p><a href="/toefl/assistance.html" target="_blank">培训产品</a></p>
            </div>
            <div class="trainProduct cultTrain">
                <ul>
                    <li>
                        <div class="productLeft bluePro"><a href="javascript:;">强化班</a></div>
                        <div class="productRight bluejQ">
                            <div class="rightHd hd">
                                <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                                <a href="javascript:;" class="next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="rightBd bd01">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "116,163"]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><a href="/picture-details/<?php echo $v['id']?>/161.html"><?php echo $v['name']?> </a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".bluejQ").slide({mainCell:".bd01 ul",trigger:"click"});
                        </script>
                    </li>
                    <li>
                        <div class="productLeft bluePro"><a href="javascript:;">模块班</a></div>
                        <div class="productRight bluejQ02">
                            <div class="rightHd hd">
                                <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                                <a href="javascript:;" class="next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="rightBd bd02">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "116,233"]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><a href="/picture-details/<?php echo $v['id']?>/233.html"><?php echo $v['name']?> </a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".bluejQ02").slide({mainCell:".bd02 ul",trigger:"click"});
                        </script>
                    </li>
                    <li>
                        <div class="productLeft bluePro"><a href="javascript:;">VIP一对一</a></div>
                        <div class="productRight bluejQ03">
                            <div class="rightHd hd">
                                <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                                <a href="javascript:;" class="next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="rightBd bd03">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "116,234"]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><a href="/picture-details/<?php echo $v['id']?>/234.html"><?php echo $v['name']?> </a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".bluejQ03").slide({mainCell:".bd03 ul",trigger:"click"});
                        </script>
                    </li>
                    <li>
                        <div class="productLeft bluePro"><a href="javascript:;">增值服务班</a></div>
                        <div class="productRight bluejQ04">
                            <div class="rightHd hd">
                                <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                                <a href="javascript:;" class="next"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <div class="rightBd bd04">
                                <ul>
                                    <?php
                                    $data = \app\modules\cn\models\Content::getContent(['category' => "116,235"]);
                                    foreach($data as $v) {
                                        ?>
                                        <li><a href="/picture-details/<?php echo $v['id']?>/235.html"><?php echo $v['name']?> </a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery(".bluejQ04").slide({mainCell:".bd04 ul",trigger:"click"});
                        </script>
                    </li>
                </ul>
            </div>
        </div>
        <div class="trainPright spe02a">
            <div class="trainPTitle trainPT01">
                <p><a href="/question.html">托福问答</a></p>
            </div>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "116,121",'pageSize'=>4]);
                foreach($data as $v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/116,121.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
            <a target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">立即提问</a>
        </div>
    </div>
    <!--备考资料部分-->
    <div class="ueberTestdaf ueberCom02">
        <div class="ueberHd hd spe01">
            <h4><a href="#">备考资料</a></h4>
            <ul>
                <li><a href="javascript:;" >听</a></li>
                <li><a href="javascript:;">说</a></li>
                <li><a href="javascript:;">读</a></li>
                <li><a href="javascript:;">写</a></li>
            </ul>
        </div>
        <div class="ueberBd">
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square02">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>

                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,166,229",'pageSize'=>5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/116,166.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square02">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,166,230",'pageSize'=>5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/116,166.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square02">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,166,231",'pageSize'=>5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/116,166.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square02">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "116,166,232",'pageSize'=>5]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/116,166.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".ueberCom02").slide({mainCell:".ueberBd",trigger:"mouseover"});
    </script>
    <!--客户感言部分-->
    <div class="CustomerFeedback">
        <div class="customer-left">
            <img src="/cn/images/cultivate_customer02.png" alt="客户感言图片"/>
        </div>
        <div class="customer-right">
            <?php
            $data = \app\modules\cn\models\Content::getContent(['category' => "116,102",'pageSize'=>7]);
            foreach($data as $v) {
                ?>
                <p><span>●</span><a href="/picture-details/<?php echo $v['id']?>/102.html"><?php echo $v['title']?></a></p>
            <?php
            }
            ?>
        </div>
    </div>
    <div style="clear: both"></div>
</div>
<!--GMAT名师-->
<div class="famousTeacher">
    <div class="starCounselor noBorder">
        <!--标题-->
        <div class="startTitle-big title-back03">
            <h4>托福名师</h4>
        </div>
        <!--右上角的字-->
        <span class="posXY-font">申友教育拥有国内专业的留学服务团队
            &nbsp;&nbsp;&nbsp;&nbsp;
            追求前沿录取结果</span>
        <div class="teaBanner tea01">
            <div class="teacerBd teaSpe01">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'job,abstract','category' => "141",'pageSize'=>7]);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html">
                                <div class="leftTeacher">
                                    <img src="<?php echo $v['image']?>" alt="老师图片"/>
                                    <!--遮罩层-->
                                    <div class="teacherZZC">
                                        <h5><?php echo $v['name']?></h5>
                                        <p>
                                            <?php echo $v['abstract']?>
                                        </p>
                                    </div>
                                </div>

                                <div class="bottomName otherRN02">
                                    <h4><?php echo $v['name']?></h4>
                                    <span><?php echo $v['job']?></span>
                                </div>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".tea01").slide({mainCell:".teacerBd ul",autoPlay:true,effect:"leftMarquee",vis:6,interTime:10});
        </script>
    </div>
</div>
<!--其他培训-->
<div id="other" class="commonTitle commonTitleBG03 sepcial03">
    <h1>其他培训</h1>
    <div>
        <b>GMAT/托福一站式学习平台全国高分基地</b>
        <span><img src="/cn/images/cultvate_whitePhone.png" alt="白色电话" width="20"/> 400-600-1123</span>
        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线测试</a>
    </div>
</div>
<div class="commonContent">
    <!--录取榜部分-->
    <div class="admissionList admissSpe03">
        <div class="admissLeft">
            <div class="albannerHd hd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "168,190",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="albannerBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields'=> "url",'category' => "168,190",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="<?php echo $v['url']?>"><img src="<?php echo $v['image']?>" alt="banner图"/></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".admissSpe03").slide({mainCell:".albannerBd ul",autoPlay:true,effect:"leftLoop"});
        </script>
        <div class="admissRight">
            <ul>

                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "168,118",'pageSize'=>7]);
                foreach($data as $v) {
                    ?>
                    <li><span>●</span><a href="/word-details/<?php echo $v['id']?>/168,118.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <!--备考资料部分-->
    <div class="ueberTestdaf ueberCom03">
        <div class="ueberHd hd spe02">
            <h4><a href="javascript:;">备考资料</a></h4>
            <ul>
                <li><a href="/list/170.html">ACT</a></li>
                <li><a href="/list/171.html">GRE</a></li>
                <li><a href="/list/172.html">IELTS</a></li>
                <li><a href="/list/173.html">SAT</a></li>
            </ul>
        </div>
        <div class="ueberBd">
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square03">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "166,170"]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/166,170.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square03">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "166,171"]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/166,171.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square03">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "166,172"]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/166,172.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="ueberBd-left">
                        <img src="/cn/images/cultivate_apply.png" alt="图片"/>
                        <div>敲定留学清单选校选专业？</div>
                    </div>
                    <div class="ueberBd-right square03">
<!--                        <h4>敲定留学清单选校专业？</h4>-->
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['category' => "173"]);
                            foreach($data as $v) {
                                ?>
                                <li><a href="/word-details/<?php echo $v['id']?>/173.html"><?php echo $v['name']?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".ueberCom03").slide({mainCell:".ueberBd",trigger:"mouseover"});
    </script>
    <div style="clear: both"></div>
</div>

<div class="advertisement">
    <a href="#">
        <img src="/cn/images/studyA_schoolApply.png" alt="广告图标"/>
    </a>
</div>

<script type="text/javascript">
    moth(".calUl02",".calendarHd ul li",'<?php echo date("Y年m月")?>','<?php $firstday=date("Y-m"); echo date("Y年m月",strtotime("$firstday +1 month"))?>');
    moth(".evecalUl02",".everyCahd ul li",'<?php echo date("Y年m月")?>','<?php $firstday=date("Y-m"); echo date("Y年m月",strtotime("$firstday +1 month"))?>');
</script>