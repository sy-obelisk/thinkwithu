
    <link rel="stylesheet" href="/cn/css/otherCountries.css"/>

    <script type="text/javascript" src="/cn/js/index.js"></script>


<!-----------------------------头部end------------------------------>
<div class="abroadNav">
    <div class="abNavHd">
        <p class="bac02"></p>
        <ul>
            <div class="purpleBG">
                <b>留学</b>
            </div>
            <li <?php echo $id == 88?'class="on"':''?>>
                <a href="USA.html" >
                    <img src="/cn/images/index_America.png" alt="美国留学" width="24px"/>
                    <span>美国留学</span>
                </a>
            </li>
            <li <?php echo $id ==89?'class="on"':''?>>
                <a href="UK.html" >
                    <img src="/cn/images/index_Britain.png" alt="英国留学" width="24px"/>
                    <span>英国留学</span>
                </a>
            </li>
            <li <?php echo $id ==90?'class="on"':''?>>
                <a href="HK.html">
                    <img src="/cn/images/index_Hongkong.png" alt="香港留学" width="24px"/>
                    <span>香港留学</span>
                </a>
            </li>
            <li <?php echo $id ==91?'class="on"':''?>>
                <a href="AUS.html">
                    <img src="/cn/images/index_Australia.png" alt="澳洲留学" width="24px"/>
                    <span>澳洲留学</span>
                </a>
            </li>
            <li <?php echo $id ==92?'class="on"':''?>>
                <a href="/COUNTRY.html">
                    <img src="/cn/images/index_Othercountry.png" alt="其他留学" width="24px"/>
                    <span>其他留学</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="banner">
    <div class="bannerLeft">
        <img src="/cn/images/index_bannerLeft01.png" alt="GMAT五大课程特色"/>
        <img src="/cn/images/index_bannerLeft02.png" alt="2014-2015录取榜"/>
    </div>
    <div class="bannerCenter">
        <div class="bannerHd hd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '190,92','pageSize' => '5']);
                foreach($data as $v){
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
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'url','category' => '190,92','pageSize' => '5']);
                foreach($data as $v){
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
                <li>名校录取</li>
                <li>高分榜单</li>
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
                                $data = \app\modules\cn\models\Content::getContent(['category' => "92,104,207",'pageSize' => 10]);
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
                        <span>申友2015名校录取榜</span>
                    </div>
                    <div class="showMessage">
                        <div class="showMbd mTwo">
                            <ul>
                                <?php
                                $data = \app\modules\cn\models\Content::getContent(['category' => "92,104,206",'pageSize' => 10]);
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
                        jQuery(".showMessage").slide({mainCell:".mTwo ul",effect:"topMarquee",autoPlay:true,vis:7,interTime:50});

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

<div  class="otherAbroad">
    <div class="titleDiv">
        <img src="/cn/images/otherCountry_title.png" alt="标题图"/>
    </div>
    <div id="other" class="otherBanner">
        <div class="otherHd hd">
            <ul>
                <li <?php echo $c == 93?'class="on"':''?>>
                    <img src="/cn/images/otherCountry_city01.png" alt="国家国旗图标"/>
                    <div>新加坡</div>
                </li>
                <li <?php echo $c == 94?'class="on"':''?>>
                    <img src="/cn/images/otherCountry_city02.png" alt="国家国旗图标"/>
                    <div>北欧</div>
                </li>
                <li <?php echo $c == 95?'class="on"':''?>>
                    <img src="/cn/images/otherCountry_city03.png" alt="国家国旗图标"/>
                    <div>法国</div>
                </li>
                <li <?php echo $c == 96?'class="on"':''?>>
                    <img src="/cn/images/otherCountry_city04.png" alt="国家国旗图标"/>
                    <div>加拿大</div>
                </li>
                <li <?php echo $c == 97?'class="on"':''?>>
                    <img src="/cn/images/otherCountry_city05.png" alt="国家国旗图标"/>
                    <div>新西兰</div>
                </li>
            </ul>
        </div>
        <div style="clear: both"></div>
        <div class="otherBd">
            <ul <?php echo $c == 93?'style="display:block"':'style="display:none"'?>>
                <li>
                    <span class="trigon01"></span>
                    <div class="otherBd-left">
                        <ul>
                            <li>
                                <div class="otherBdL-left"><h4>热门资讯</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "93,118","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/88,118.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>研究报告</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "93,125","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/index,93,125.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>留学问答</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "93,121","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/index,93,121.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="otherBd-right">
                        <ul>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG01.png" alt="背景图"/>
                                <a href="/Postgraduate/assistance.html">硕士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG02.png" alt="背景图"/>
                                <a href="/Undergraduate/assistance.html">本科申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG03.png" alt="背景图"/>
                                <a href="/Doctor/assistance.html">博士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG04.png" alt="背景图"/>
                                <a href="/MBA-PHD.html">MBA/PHD</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG05.png" alt="背景图"/>
                                <a href="/study-aboard/service/introduction.html">申友留学服务优势</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG06.png" alt="背景图"/>
                                <a href="/individual.html">单项服务加油站</a>
                            </li>
                        </ul>
                    </div>
                    <div style="clear: both"></div>
                </li>
            </ul>
            <ul <?php echo $c == 94?'style="display:block"':'style="display:none"'?>>
                <li>
                    <span class="trigon02"></span>
                    <div class="otherBd-left">
                        <ul>
                            <li>
                                <div class="otherBdL-left"><h4>热门资讯</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "94,118","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/94,118.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>研究报告</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "94,125","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/index,94,125.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>留学问答</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "94,121","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/index,94,121.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="otherBd-right">
                                                <ul>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG01.png" alt="背景图"/>
                                <a href="/Postgraduate/assistance.html">硕士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG02.png" alt="背景图"/>
                                <a href="/Undergraduate/assistance.html">本科申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG03.png" alt="背景图"/>
                                <a href="/Doctor/assistance.html">博士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG04.png" alt="背景图"/>
                                <a href="/MBA-PHD.html">MBA/PHD</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG05.png" alt="背景图"/>
                                <a href="/study-aboard/service/introduction.html">申友留学服务优势</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG06.png" alt="背景图"/>
                                <a href="/individual.html">单项服务加油站</a>
                            </li>
                        </ul>
                    </div>
                    <div style="clear: both"></div>
                </li>
            </ul>
            <ul <?php echo $c == 95?'style="display:block"':'style="display:none"'?>>
                <li>
                    <span class="trigon03"></span>
                    <div class="otherBd-left">
                        <ul>
                            <li>
                                <div class="otherBdL-left"><h4>热门资讯</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "95,118","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/95,118.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>研究报告</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "95,125","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/index,95,125.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>留学问答</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "95,121","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/index,95,121.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="otherBd-right">
                                                <ul>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG01.png" alt="背景图"/>
                                <a href="/Postgraduate/assistance.html">硕士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG02.png" alt="背景图"/>
                                <a href="/Undergraduate/assistance.html">本科申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG03.png" alt="背景图"/>
                                <a href="/Doctor/assistance.html">博士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG04.png" alt="背景图"/>
                                <a href="/MBA-PHD.html">MBA/PHD</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG05.png" alt="背景图"/>
                                <a href="/study-aboard/service/introduction.html">申友留学服务优势</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG06.png" alt="背景图"/>
                                <a href="/individual.html">单项服务加油站</a>
                            </li>
                        </ul>
                    </div>
                    <div style="clear: both"></div>
                </li>
            </ul>
            <ul <?php echo $c == 96?'style="display:block"':'style="display:none"'?>>
                <li>
                    <span class="trigon04"></span>
                    <div class="otherBd-left">
                        <ul>
                            <li>
                                <div class="otherBdL-left"><h4>热门资讯</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "96,118","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/96,118.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>研究报告</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "96,125","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/index,96,125.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>留学问答</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "96,121","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/index,96,121.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="otherBd-right">
                                                <ul>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG01.png" alt="背景图"/>
                                <a href="/Postgraduate/assistance.html">硕士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG02.png" alt="背景图"/>
                                <a href="/Undergraduate/assistance.html">本科申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG03.png" alt="背景图"/>
                                <a href="/Doctor/assistance.html">博士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG04.png" alt="背景图"/>
                                <a href="/MBA-PHD.html">MBA/PHD</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG05.png" alt="背景图"/>
                                <a href="/study-aboard/service/introduction.html">申友留学服务优势</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG06.png" alt="背景图"/>
                                <a href="/individual.html">单项服务加油站</a>
                            </li>
                        </ul>
                    </div>
                    <div style="clear: both"></div>
                </li>
            </ul>
            <ul <?php echo $c == 97?'style="display:block"':'style="display:none"'?>>
                <li>
                    <span class="trigon05"></span>
                    <div class="otherBd-left">
                        <ul>
                            <li>
                                <div class="otherBdL-left"><h4>热门资讯</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "97,118","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/97,118.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>研究报告</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "97,125","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/97,125.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <li>
                                <div class="otherBdL-left"><h4>留学问答</h4></div>
                                <div class="otherBdL-right">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => "97,121","pageSize" => 6]);
                                        foreach($data as $v) {
                                            ?>
                                            <li><a href="/word-details/<?php echo $v['id']?>/97,121.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="otherBd-right">
                                                <ul>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG01.png" alt="背景图"/>
                                <a href="/Postgraduate/assistance.html">硕士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG02.png" alt="背景图"/>
                                <a href="/Undergraduate/assistance.html">本科申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG03.png" alt="背景图"/>
                                <a href="/Doctor/assistance.html">博士申请方案</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG04.png" alt="背景图"/>
                                <a href="/MBA-PHD.html">MBA/PHD</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG05.png" alt="背景图"/>
                                <a href="/study-aboard/service/introduction.html">申友留学服务优势</a>
                            </li>
                            <li>
                                <img src="/cn/images/otherCountry_rightBG06.png" alt="背景图"/>
                                <a href="/individual.html">单项服务加油站</a>
                            </li>
                        </ul>
                    </div>
                    <div style="clear: both"></div>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".otherBanner").slide({mainCell:".otherBd",trigger:"mouseover"});
    </script>
</div>
