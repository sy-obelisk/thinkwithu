
    <link rel="stylesheet" href="/cn/css/undergraduate.css"/>

    <script type="text/javascript" src="/cn/js/studyAbroad.js"></script>

<div class="graduateNav">
    <div class="graN-left leftDiffb01">
        <div>本科留学</div>
    </div>
    <div class="graN-right rightDiff01">
        <ul>
            <li><a href="#USA">美国本科留学</a></li>
            <li><a href="#UK">英国本科留学</a></li>
            <li><a href="#HK">香港本科留学</a></li>
            <li><a href="#TA">澳洲本科留学</a></li>
            <li><a href="#other">其他本科留学</a></li>
        </ul>
    </div>
</div>
<div class="graduateBan gradu01">
    <div class="advantage">
        <div class="advanLeft">
            <div class="leftBanner01">
                <div class="bannerLhd hd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => '135,178,190','pageSize' => 3]);
                        foreach($data as $v) {
                            ?>
                            <li></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="bannerLbd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => '135,178,190','pageSize' => 3]);
                        foreach($data as $v) {
                            ?>
                            <li><a href="#"><img src="<?php echo $v['image']?>" alt="banner图"></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".leftBanner01").slide({mainCell:".bannerLbd ul",trigger:"click",autoPlay:"autoPlay",effect:"leftLoop"});
            </script>
            <div class="dissertation newMT02">
                <div class="title">
                    <span><a href="/thinku-news.html">申友专题</a></span>
                </div>
                <div class="details">
                    <div class="det-left">
                        <a href="/word-details/243/105,118.html"><img src="/cn/images/studyA_kevinLogo.jpg" alt="图片"></a>
                    </div>
                    <div class="det-right">
                        <h4><a href="/word-details/243/105,118.html">雷哥GMAT在线学习平台重磅发布！</a></h4>
                    </div>
                </div>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '118,105','pageSize' => 4]);
                    foreach($data as $k=>$v) {
                        ?>
                        <li><img src="/cn/images/quesAnswer_dianIcon.png" alt="点图标">
                            <a href="/word-details/<?php echo $v['id']?>/178,105,118.html">
                                <?php echo $k+1?>.<?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

        </div>
        <div class="advanCenter newMT">
            <div class="centerBanner">
                <div class="adChd hd">
                    <ul>
                        <li><a href="/list/118.html">动态</a></li>
                        <li><a href="javascript:void(0);">排名</a></li>
                        <li><a href="javascript:void(0);">专业</a></li>

                    </ul>
                </div>
                <div style="clear: both"></div>
                <div class="adCbd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => '135,118','pageSize' => 5]);
                        foreach($data as $k=>$v) {
                            ?>
                            <li><a href="/word-details/<?php echo $v['id']?>/135,118.html"><?php echo $v['name']?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => '135,175','pageSize' => 5]);
                        foreach($data as $k=>$v) {
                            ?>
                            <li><a href="/word-details/<?php echo $v['id']?>/135,175.html"><?php echo $v['name']?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => '135,143','pageSize' => 5]);
                        foreach($data as $k=>$v) {
                            ?>
                            <li><a href="/word-details/<?php echo $v['id']?>/135,143.html"><?php echo $v['name']?></a></li>
                        <?php
                        }
                        ?>
                    </ul>

                </div>
            </div>
            <script type="text/javascript">
                jQuery(".centerBanner").slide({mainCell:".adCbd",trigger:"mouseover"});
            </script>

            <div class="centerBanner02 speMT">
                <div class="adChd hd">
                    <ul>
                        <li><a href="/public-class.html">留学公开课</a></li>
                    </ul>
                </div>
                <div style="clear: both"></div>
                <div class="adCbd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => '178,107','pageSize' => 5]);
                        foreach($data as $k=>$v) {
                            ?>
                            <li><a href="/word-details/<?php echo $v['id']?>/107.html"><?php echo $v['name']?></a></li>
                        <?php
                        }
                        ?>
                    </ul>

                </div>
            </div>
        </div>

        <div class="advanRight">
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
                                <img src="/cn/images/graduate_bannerLaBa.png" alt="小喇叭图标"/>
                                <b>新鲜出炉：</b>
                                <span>申友2016名校录取榜</span>
                            </div>
                            <div class="showMessage">
                                <div class="showMbd mOne">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => '207,104','pageSize' => 10]);
                                        foreach($data as $k=>$v) {
                                            ?>
                                            <li><i class="fa fa-angle-left"></i><a href="/picture-details/<?php echo $v['id']?>/104.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery(".showMessage").slide({mainCell:".mOne ul",effect:"topMarquee",autoPlay:true,vis:10,interTime:50});

                            </script>
                            <div class="schoolImg">
                                <a href="#"><img src="/cn/images/index_school01.png" alt="名校图标1"/></a>
                                <a href="#"> <img src="/cn/images/index_school02.png" alt="名校图标2"/></a>
                                <a href="#"><img src="/cn/images/index_school03.png" alt="名校图标3"/></a>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <div class="labaTiao">
                                <img src="/cn/images/graduate_bannerLaBa.png" alt="小喇叭图标"/>
                                <b>新鲜出炉：</b>
                                <span>申友2015高分榜单</span>
                            </div>
                            <div class="showMessage">
                                <div class="showMbd mTwo">
                                    <ul>
                                        <?php
                                        $data = \app\modules\cn\models\Content::getContent(['category' => '206,104','pageSize' => 10]);
                                        foreach($data as $k=>$v) {
                                            ?>
                                            <li><i class="fa fa-angle-left"></i><a href="/picture-details/<?php echo $v['id']?>/104.html"><?php echo $v['name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <script type="text/javascript">
                                jQuery(".showMessage").slide({mainCell:".mTwo ul",effect:"topMarquee",autoPlay:true,vis:10,interTime:50});

                            </script>
                            <a href="#"> <img src="/cn/images/index_topScore.jpg" alt="高分榜单" width="100%" height="59"/></a>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".bannerRight").slide({trigger:'mouseover'});
            </script>
            <div style="clear: both"></div>
            <div class="assessBtn">
                <a href="/evaluation.html" class="diffBac02">
                    <div><span><img src="/cn/images/graduate_btnImg01.png" alt="图标"/>立即评估</span></div>
                </a>
                <a href="/question.html" class="diffBac02">
                    <div><span><img src="/cn/images/graduate_btnImg02.png" alt="图标"/>留学问答</span></div>
                </a>
            </div>
        </div>

    </div>
</div>
<div id="USA" class="essence speColor01">
    <ul>
        <?php
        $data = \app\modules\cn\models\Content::getContent(['category' => '112','pageSize' => 4]);
        foreach($data as $v) {
            ?>
            <li>
                <div>
                   <a href="/word-details/<?php echo $v['id']?>/112.html">
                    <img src="<?php echo $v['image']?>" alt="人人图标"/>
                    <b><?php echo $v['name']?></b>
                   </a>
                </div>
                <h4> <a href="/word-details/<?php echo $v['id']?>/112.html"><?php echo $v['title']?></a></h4>
            </li>
        <?php
        }
        ?>
        <li>
            <div>
                <a href="/individual.html">
                    <img src="/cn/images/graduate_person05.png" alt="人人图标"/>
                    <b>单项服务</b>
                </a>
            </div>
            <h4> <a href="/individual.html">单项服务</a></h4>
        </li>
        <li>
            <div>
                <a href="/Undergraduate/assistance.html">
                <img src="/cn/images/graduate_person06.png" alt="人人图标"/>
               <b>本科申请方案</b> </a>
            </div>
            <h4> <a href="/Undergraduate/assistance.html">本科申请方案 </a></h4>
        </li>

    </ul>
</div>
<div class="graduateComT">
    <h1>本科留学 ● 美国</h1>
</div>
<div id="UK" class="fourSort divBack01">
    <ul>
        <li>
            <img src="/cn/images/graduate_four01.png" alt="图片"/>
            <div>
                <h4>院校</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '225,88,135','pageSize' => 5]);
                    foreach($data as $k=>$v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/225.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <img src="/cn/images/graduate_four02.png" alt="图片"/>
            <div>
                <h4>文书</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '127,88,135','pageSize' => 5]);
                    foreach($data as $k=>$v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/88,127.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <img src="/cn/images/graduate_four03.png" alt="图片"/>
            <div>
                <h4>面试</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '128,88,135','pageSize' => 5]);
                    foreach($data as $k=>$v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/88,128.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <img src="/cn/images/graduate_four01.png" alt="图片"/>
            <div>
                <h4>签证</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '129,88,135','pageSize' => 5]);
                    foreach($data as $k=>$v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/88,129.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div  class="graduateComT">
    <h1>本科留学 ● 英国</h1>
</div>
<div class="otherSort">
    <ul>
        <li>
            <img src="/cn/images/graduate_otherF01.png" alt="图标"/>
            <h4>院校</h4>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '225,89,135','pageSize' => 5]);
                foreach($data as $k=>$v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/225.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li>
            <img src="/cn/images/graduate_otherF02.png" alt="图标"/>
            <h4>文书</h4>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '127,89,135','pageSize' => 5]);
                foreach($data as $k=>$v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/89,127.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li>
            <img src="/cn/images/graduate_otherF03.png" alt="图标"/>
            <h4>面试</h4>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '128,89,135','pageSize' => 5]);
                foreach($data as $k=>$v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/89,128.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li>
            <img src="/cn/images/graduate_otherF04.png" alt="图标"/>
            <h4>签证</h4>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '129,89,135','pageSize' => 5]);
                foreach($data as $k=>$v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/89,129.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
    </ul>
</div>

<div id="HK" class="interCutAd">
    <div class="applyFor">
        <input type="button" value="立即查询"/>
    </div>
</div>
<div class="graduateComT">
    <h1>本科留学 ● 香港</h1>
</div>
<div id="TA" class="fourSort divBack01">
    <ul>
        <li>
            <img src="/cn/images/graduate_four01.png" alt="图片"/>
            <div>
                <h4>院校</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '225,90,135','pageSize' => 5]);
                    foreach($data as $k=>$v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/225.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <img src="/cn/images/graduate_four02.png" alt="图片"/>
            <div>
                <h4>文书</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '127,90,135','pageSize' => 5]);
                    foreach($data as $k=>$v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/90,127.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <img src="/cn/images/graduate_four03.png" alt="图片"/>
            <div>
                <h4>面试</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '128,90,135','pageSize' => 5]);
                    foreach($data as $k=>$v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/90,128.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <img src="/cn/images/graduate_four01.png" alt="图片"/>
            <div>
                <h4>签证</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '129,90,135','pageSize' => 5]);
                    foreach($data as $k=>$v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/90,129.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div class="graduateComT">
    <h1>本科留学 ● 澳洲</h1>
</div>
<div class="otherSort">
    <ul>
        <li>
            <img src="/cn/images/graduate_otherF01.png" alt="图标"/>
            <h4>院校</h4>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '225,91,135','pageSize' => 5]);
                foreach($data as $k=>$v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/225.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li>
            <img src="/cn/images/graduate_otherF02.png" alt="图标"/>
            <h4>文书</h4>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '127,91,135','pageSize' => 5]);
                foreach($data as $k=>$v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/91,127.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li>
            <img src="/cn/images/graduate_otherF03.png" alt="图标"/>
            <h4>移民</h4>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '159,91,135','pageSize' => 5]);
                foreach($data as $k=>$v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/91,128.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li>
            <img src="/cn/images/graduate_otherF04.png" alt="图标"/>
            <h4>签证</h4>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '129,91,135','pageSize' => 5]);
                foreach($data as $k=>$v) {
                    ?>
                    <li><a href="/word-details/<?php echo $v['id']?>/91,129.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
    </ul>
</div>
<div id="other" class="newMTun otherCutAd">
    <div class="eliteSchool">
        <span class="floatF">机构：</span>
        <!--自定义下拉框-->
        <div class="default defa02">
            <img src="/cn/images/index_coutryIcon.jpg" alt="国家小图"/>
            <span id="organization"></span>
            <div class="clickBac clickBac02" onclick="selectInfo(this)"></div>
            <!--文字-->
            <div class="secFont secFont02">
                <?php
                $i=0;
                $data = \app\modules\cn\models\Category::getCategory(179);
                foreach($data as $v) {
                    ?>
                    <li><?php echo $v['name']?></li>
                <?php
                }
                ?>
            </div>
        </div>

        <span class="floatF">国家：</span>
        <!--自定义下拉框-->
        <div class="default defa02">
            <img src="/cn/images/index_subjectIcon.png" alt="专业小图"/>
            <span id="country"></span>
            <div class="clickBac clickBac02" onclick="selectInfo(this)"></div>
            <!--文字-->
            <div class="secFont secFont02">
                <?php
                $i=0;
                $data = \app\modules\cn\models\Category::getCategory(87);
                foreach($data as $v) {
                    ?>
                    <li><?php echo $v['name']?></li>
                <?php
                }
                ?>
            </div>
        </div>

        <span class="floatF">年份：</span>
        <!--自定义下拉框-->
        <div class="default defa02">
            <img src="/cn/images/index_rankIcon.jpg" alt="排名小图"/>
            <span id="year"></span>
            <div class="clickBac clickBac02" onclick="selectInfo(this)"></div>
            <!--文字-->
            <div class="secFont secFont02">
                <ul>
                    <?php
                    $i=0;
                    $data = \app\modules\cn\models\Category::getCategory(186);
                    foreach($data as $v) {
                        ?>
                        <li><?php echo $v['name']?></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>

        <span class="floatF">专业：</span>
        <!--自定义下拉框-->
        <div class="default defa02">
            <img src="/cn/images/index_moneyIcon.png" alt="奖学金小图"/>
            <span id="major"></span>
            <div class="clickBac clickBac02" onclick="selectInfo(this)"></div>
            <!--文字-->
            <div class="secFont secFont02">
                <ul>
                    <?php
                    $i=0;
                    $data = \app\modules\cn\models\Category::getCategory(143);
                    foreach($data as $k => $v) {
                        if($k+1>4){
                            break;
                        }
                        ?>
                        <li><?php echo $v['name']?></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!--立即搜索-->
        <script type="text/javascript">
            function goRank(){
                var country = $("#country").html();
                var organization = $("#organization").html();
                var major = $("#major").html();
                var year = $("#year").html();
                $.post('/cn/api/rank-info',{country:country,organization:organization,major:major,year:year},function(re){
                    var url = "/ranking"
                    var param = "";
                    if(re.organization != ""){
                        param += "/"+re.organization;
                    }else{
                        param += "/179";
                    }
                    if(re.country != ""){
                        param += "/"+re.country;
                    }else{
                        param += "/87";
                    }
                    if(re.major != ""){
                        param += "/"+re.major;
                    }else{
                        param += "/143";
                    }
                    if(re.year != ""){
                        param += "/"+re.year;
                    }else{
                        param += "/186";
                    }
                    location.href = url+param+'.html';
                },'json')
            }
        </script>
<!--        <input type="button" onclick="goRank()" class="comeonSearch" value="立即搜索"/>-->
        <a href="/schools.html"><input type="button" class="comeonSearch" value="立即搜索"/></a>
    </div>
</div>
<div id="other" class="graduateComT">
    <h1>本科留学 ● 其他国家</h1>
</div>
<div class="otherCityShow twoStyle">
    <ul>
        <li>
            <b></b>
            <div class="circle">
                <a href="#">
                    <img src="/cn/images/otherCountry_city01.png" alt="国家图标"/>
                    <div>新加坡</div>
                </a>
            </div>
            <div class="haveUL">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "135,93","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/93.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <b></b>
            <div class="circle">
                <a href="#">
                <img src="/cn/images/otherCountry_city02.png" alt="国家图标"/>
                <div>北欧</div>
                 </a>
            </div>
            <div class="haveUL">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "135,94","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/94.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <b></b>
            <div class="circle">
                <a href="#">
                <img src="/cn/images/otherCountry_city03.png" alt="国家图标"/>
                <div>德法</div>
                 </a>
            </div>
            <div class="haveUL">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "135,95","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/95.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <b></b>
            <div class="circle">
                <a href="#">
                <img src="/cn/images/otherCountry_city04.png" alt="国家图标"/>
                <div>加拿大</div>
                </a>
            </div>
            <div class="haveUL">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "135,96","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/96.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
        <li>
            <b></b>
            <div class="circle">
                <a href="#">
                <img src="/cn/images/otherCountry_city05.png" alt="国家图标"/>
                <div>新西兰</div>
                </a>
            </div>
            <div class="haveUL">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "135,97","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/97.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </li>
    </ul>
</div>
<div class="starCounselor">
    <!--标题-->
    <div class="startTitle-big title-back02">
        <h4>明星顾问</h4>
    </div>
    <!--右上角的字-->
        <span class="posXY-font">申友教育拥有国内专业的留学服务团队
            &nbsp;&nbsp;&nbsp;&nbsp;
            追求前沿录取结果</span>
    <div class="teaBanner tea01">
        <div class="teacerBd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract,smallPhoto,job,description','category' => "140"]);
                foreach($data as $k => $v) {
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
<!--    <p class="haveBGtitle haveMarl theOther001">海<br/>外<span class="xuanzFont">mentor</span></p>-->
<!--    <div class="teaBanner tea02">-->
<!--        <div class="teacerBd">-->
<!--            <ul>-->
<!--                --><?php
//                $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract,smallPhoto,job,description','category' => "140"]);
//                foreach($data as $k => $v) {
//                    ?>
<!--                    <li>-->
<!--                        <a href="#">-->
<!--                            <div class="leftTeacher">-->
<!--                                <img src="--><?php //echo $v['image']?><!--" alt="老师图片"/>-->
<!--                                <!--遮罩层-->
<!--                                <div class="teacherZZC">-->
<!--                                    <h5>--><?php //echo $v['name']?><!--</h5>-->
<!--                                    <p>-->
<!--                                        --><?php //echo $v['abstract']?>
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="bottomName otherRN01">-->
<!--                                <h4>--><?php //echo $v['name']?><!--</h4>-->
<!--                                <span>--><?php //echo $v['job']?><!--</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!---->
<!--                    </li>-->
<!--                --><?php
//                }
//                ?>
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--    <script type="text/javascript">-->
<!--        jQuery(".tea02").slide({mainCell:".teacerBd ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:10});-->
<!---->
<!--    </script>-->
</div>
