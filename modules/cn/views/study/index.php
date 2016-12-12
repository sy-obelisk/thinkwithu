
    <link rel="stylesheet" href="/cn/css/studyAbroad.css"/>

    <script type="text/javascript" src="/cn/js/studyAbroad.js"></script>

<div class="abroadNav">
    <div class="abNavHd hd">
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
    <div class="abNavBd bd">
        <?php
        $data = \app\modules\cn\models\Category::getCategory(87);
        foreach($data as $v) {
            ?>
        <ul>
            <li>
                <div class="navBdLeft">
                        <img src="<?php echo $v['image']?>" alt="地图"/>
                        <b><?php echo $v['shortName']?></b>
                </div>
                <div class="navBdRight">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Category::getCategory(134);
                        foreach($data as $val) {
                            ?>
                            <li>
                                <a href="/<?php echo $v['shortName']?>.html#<?php echo $val['enName']?>">

                                    <?php echo $v['name']?><?php echo $val['name']?>留学</a></li>
                        <?php
                        }
                        ?>
                        <li class="notBG"><b>专注高端名校留学申请</b></li>
                    </ul>
                </div>
                <div style="clear: both"></div>
            </li>
        </ul>
        <?php
        }
        ?>
    </div>
</div>
<script type="text/javascript">
    jQuery(".abroadNav").slide({trigger:"mouseover"});
</script>
<!-----------------------------留学导航end------------------------------>
<div class="advantage">
    <div class="advanLeft">
        <div class="leftBanner01">
            <div class="bannerLhd hd">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="bannerLbd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,190,178",'pageSize'=>3]);
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

        <div class="hotRecommend">
            <span>热门推荐：</span>
            <img src="/cn/images/studyA_hotcom.png" alt="热门推荐图标"/>
            <div class="hotBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,107","pageSize" => 3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/<?php echo $id?>.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".hotRecommend").slide({mainCell:".hotBd ul",autoPlay:"autoPlay",effect:"leftLoop",vis:3,scroll:1});
        </script>
        <div class="dissertation newMT02">
            <div class="title">
                <span><a href="/thinku-news.html">申友专题</a></span>
            </div>
            <div class="details">
                <div class="det-left">
                    <img src="/cn/images/studyA_kevinLogo.jpg" alt="图片">
                </div>
                <div class="det-right">
                    <h4><a href="http://www.gmatonline.cn/" target="_blank">雷哥GMAT在线学习平台重磅发布！</a></h4>
                </div>
            </div>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "105,118","pageSize" => 4]);
                foreach($data as $v) {
                ?>
                <li><img src="/cn/images/quesAnswer_dianIcon.png" alt="点图标">
                    <a href="/word-details/<?php echo $v['id']?>/105,118.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>

    </div>
    <div class="advanCenter">
        <div class="centerBanner">
            <div class="adChd hd">
                <ul>
                    <li><a href="/list/<?php echo $id?>,118.html">动态</a></li>
                    <li><a href="">排名</a></li>
                    <li><a href="">专业</a></li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="adCbd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,118","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/<?php echo $id?>,118.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,175","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/<?php echo $id?>,175.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,143","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/<?php echo $id?>,143.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".centerBanner").slide({mainCell:".adCbd",trigger:"mouseover"});
        </script>

        <div class="centerBanner02">
            <div class="adChd hd">
                <ul>
                    <li class="on"><a href="/public-class.html">留学公开课</a></li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="adCbd speGrey">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,107","pageSize" => 6]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/<?php echo $id?>,107.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="advanRight">
        <div class="admission">
            <img src="/cn/images/studyA_admissions01.png" alt="名校录取图一" class="adm01"/>
            <img src="/cn/images/studyA_admissions02.png" alt="名校录取图二" class="adm02"/>

            <h3><a href="/case.html#admission">名校录取榜</a></h3>

            <div class="missSchool">
                <div class="adminBd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' =>'major,abroadSchool' ,'category' => "104,207",'pageSize' => 20]);
                        foreach($data as $v) {
                            ?>
                            <li>
                                <div class="admissionS">
                                    <span><i class="fa fa-angle-left"></i><?php echo $v['name']?></span>
                                </div>
<!--                                <div class="admiSubject">-->
<!--                                    <span>--><?php //echo $v['abroadSchool']?><!--</span>-->
<!--                                </div>-->
<!--                                <div class="admiSubject">-->
<!--                                    <span>--><?php //echo $v['major']?><!--</span>-->
<!--                                </div>-->
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <div style="clear: both"></div>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".missSchool").slide({mainCell:".adminBd ul",autoPlay:true,effect:"topMarquee",vis:13,interTime:50});
            </script>
        </div>
        <div class="evaluate">
            <input onclick="goAssess()" type="button" value="立即评估" class="evaOne"/>
            <script type="text/javascript">
                function goAssess(){
                    window.location.href="/evaluation.html";
                }
            </script>
        </div>
        <div class="evaluate">
            <input onclick="goQuestion()" type="button" value="留学问答" class="evaThree"/>
            <script type="text/javascript">
                function goQuestion(){
                    window.location.href="/question.html";
                }
            </script>
        </div>
        <div class="evaluate">
            <input onclick="goAssess()" type="button" value="在线咨询" class="evaFour"/>
            <script type="text/javascript">
                function goAssess(){
                    window.location.href="#";
                }
            </script>
        </div>
        <div class="evaluate">
            <input onclick="goQuestion()" type="button" value="留学百科" class="evaTwo"/>
            <script type="text/javascript">
                function goQuestion(){
                    window.location.href="#";
                }
            </script>
        </div>
    </div>
</div>
<div style="clear: both;margin-bottom: 17px;"></div>
<div class="eliteSchool">
    <span class="floatF">机构：</span>
    <!--自定义下拉框-->
    <div class="default defa02">
        <img src="/cn/images/index_coutryIcon.jpg" alt="国家小图"/>
        <span id="organization"></span>
        <div class="clickBac clickBac02" onclick="selectInfo(this)"></div>
        <!--文字-->
        <div class="secFont secFont02">
            <ul>
                <?php
                $i=0;
                $data = \app\modules\cn\models\Category::getCategory(179);
                foreach($data as $v) {
                    ?>
                    <li><?php echo $v['name']?></li>
                <?php
                }
                ?>
            </ul>
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
            <ul>
                <?php
                $i=0;
                $data = \app\modules\cn\models\Category::getCategory(87);
                foreach($data as $v) {
                    ?>
                    <li><?php echo $v['name']?></li>
                <?php
                }
                ?>
            </ul>
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
                var url = "/cn/index/ranking?"
                var param = "";
                if(re.major != ""){
                    param += "&major="+re.major;
                }
                if(re.country != ""){
                    param += "&country="+re.country;
                }
                if(re.organization != ""){
                    param += "&organization="+re.organization;
                }
                if(re.year != ""){
                    param += "&year="+re.year;
                }
                param = param.substr(1);
                location.href = url+param;
            },'json')
        }
    </script>
    <!--        <input type="button" onclick="goRank()" class="comeonSearch" value="立即搜索"/>-->
    <a href="/schools.html"><input type="button" class="comeonSearch" value="立即搜索"/></a>
</div>

<div class="commonTitle titleBG01" id="master">
    <div class="titleB titleBpadd01">
        <b><?php echo $caName?>硕士留学</b>
        <span>MASTER STUDY</span>
    </div>
    <div class="titleB02 mt01">
        <b class="b01">"非中介"透明服务专注名校申请</b>
        <img src="/cn/images/studyA_blackPhone.png" alt="黑色电话小图标">
        <b class="b02">400-600-1123</b>
        <input onclick="goAssess()" type="button" value="立即留学评估" class="inputBg01"/>
        <script type="text/javascript">
            function goAssess(){
                window.location.href="/evaluation.html";
            }
        </script>
    </div>
</div>
<div class="commonAbroad">
    <div class="commonMasterL">
        <div class="commerBanner">
            <div class="comHd hd">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="comBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,190",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="#"><img src="<?php echo $v['image']?>" alt="banner图"/></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".commerBanner").slide({mainCell:".comBd ul",autoPlay:true,effect:"leftLoop"});
        </script>
        <div class="commonList listSpecial01">
<!--            <h3><a href="/strategies/--><?php //echo $enName?><!---master.html" >留学规划</a></h3>-->
            <h3><a href="javascript:void(0);" >留学规划</a></h3>
            <div class="listHd hd back01">
                <ul>
                    <li><a href="/major.html">热门专业</a></li>
                    <li><a href="">学校排名</a></li>
                    <li><a href="">研究报告</a> </li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="listBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,143",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/143.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,175",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/175.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,125",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/125.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".listSpecial01").slide({mainCell:".listBd",trigger:"mouseover"});
        </script>

        <div class="commonList listSpecial02">
<!--            <h3><a href="/application/--><?php //echo $enName?><!---master.html" >留学申请</a></h3>-->
            <h3><a href="javascript:void(0);" >留学申请</a></h3>
            <div class="listHd hd back01">
                <ul>
                    <li><a href="#">选校</a></li>
                    <li><a href="#">文书</a></li>
                    <li><a href="#">面试</a></li>
                    <li><a href="#">签证</a></li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="listBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,154",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/154.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,127",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/127.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,128",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/128.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,129",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/129.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".listSpecial02").slide({mainCell:".listBd",trigger:"mouseover"});
        </script>
    </div>
    <div class="commonMasterC">
        <div class="usually">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "$id,118,136",'pageSize'=>5]);
                foreach($data as $v) {
                    ?>
                    <li>● <a href="/word-details/<?php echo $v['id']?>/118.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>

            </ul>
        </div>
        <div class="commonList listSpecial03">
<!--            <h3><a href="/promotion/--><?php //echo $enName?><!---master.html" >留学提升</a></h3>-->
            <h3><a href="javascript:void(0);" >留学提升</a></h3>
            <div class="listHd hd back01">
                <ul>
                    <li>比赛</li>
                    <li>实习</li>
                    <li>summer school</li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="listBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,130",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/130.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,131",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/131.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,132",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/132.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".listSpecial03").slide({mainCell:".listBd",trigger:"mouseover"});
        </script>
        <div class="commonList02">
            <h3>硕士问答 <input type="button" value="立即提问" class="background01"/></h3>
            <div>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,136,121",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/121.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

        </div>
    </div>
    <div class="commonMasterR">
        <h3 class="h3border01"><a href="/Postgraduate/assistance.html">硕士留学产品 <span>more</span></a></h3>
        <div class="abroadProduct">
            <?php
            $data = \app\modules\cn\models\Content::getContent(['category' => "$id,113",'pageSize'=>7]);
            foreach($data as $k => $v) {
                ?>
            <a href="/picture-details/<?php echo $v['id']?>/13.html">
                <div class="product0<?php echo $k+1?>" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                    <span><?php echo $v['name']?></span>
                    <!--遮罩层-->
                    <div class="productZZC"></div>
                </div>
                </a>
            <?php
            }
            ?>
        </div>
        <h3 class="h3border01"><a href="/case.html#allCase">学员感言 <span>more</span></a></h3>
        <div class="studentGY">

            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => "$id,102,136",'pageSize' => 1]);
            foreach($data as $v) {
                ?>
                <div class="stuLeft">
                    <img src="<?php echo $v['image']?>" alt="学员感言"/>
                </div>
                <div class="stuRight">
                    <h4><?php echo $v['name']?>:<?php echo $v['title']?>！</h4>
                    <p>
                        <?php echo $v['abstract']?>
                    </p>
                    <b><a href="/word-details/<?php echo $v['id']?>/102.html"><i class="fa fa-caret-right"></i> 阅读原文</a></b>
                </div>
            <?php
            }
            ?>
        </div>
        <h3 class="h3border01"><a href="/case.html#admission">名校案例 <span>more</span></a></h3>
        <div class="schoolAL">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "$id,104,207,136",'pageSize'=>4]);
                foreach($data as $v) {
                    ?>
                    <li><img src="<?php echo $v['image']?>" alt="名校案例"/></li>
                <?php
                }
                ?>
            </ul>
        </div>

    </div>
    <div style="clear: both"></div>
</div>

<div class="starCounselor">
    <!--标题-->
    <div class="startTitle-big title-back01">
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
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'job,abstract','category' => "140"]);
                foreach($data as $v) {
                    ?>
                    <li>
                        <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html">
                            <div class="leftTeacher">
                                <img src="<?php echo $v['image']?>" alt="老师图片"/>
                                <!--遮罩层-->
<!--                                <div class="teacherZZC">-->
<!--                                    <h5>--><?php //echo $v['name']?><!--</h5>-->
<!--                                    <p>-->
<!--                                        --><?php //echo $v['abstract']?>
<!--                                    </p>-->
<!--                                </div>-->
                            </div>

                            <div class="bottomName">
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

<div class="commonTitle titleBG02" id="course">
    <div class="titleB titleBpadd02">
        <b><?php echo $caName?>本科留学</b>
        <span>UNDERGRADUATE STUDY</span>
    </div>
    <div class="titleB02 mt02">
        <b class="b01">"非中介"透明服务专注名校申请</b>
        <img src="/cn/images/studyA_blackPhone02.png" alt="黑色电话小图标">
        <b class="b02">400-600-1123</b>
        <input onclick="goAssess()" type="button" value="立即留学评估" class="inputBg02"/>
        <script type="text/javascript">
            function goAssess(){
                window.location.href="/evaluation.html";
            }
        </script>
    </div>
</div>
<div class="commonAbroad">
    <div class="commonMasterL">
        <div class="commerBanner">
            <div class="comHd hd">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="comBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,190",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="#"><img src="<?php echo $v['image']?>" alt="banner图"/></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".commerBanner").slide({mainCell:".comBd ul",autoPlay:true,effect:"leftLoop"});
        </script>
        <div class="commonList listSpecial05">
<!--            <h3><a href="/strategies/--><?php //echo $enName?><!---course.html" >留学规划</a></h3>-->
            <h3><a href="javascript:void(0);" >留学规划</a></h3>
            <div class="listHd hd back02">
                <ul>
                    <li><a href="/major.html">热门专业</a></li>
                    <li><a href="">学校排名</a></li>
                    <li><a href="">研究报告</a> </li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="listBd">
                <ul>

                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,143",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/143.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,175",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/175.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,125",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/125.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".listSpecial05").slide({mainCell:".listBd",trigger:"mouseover"});
        </script>

        <div class="commonList listSpecial06">
<!--            <h3><a href="/application/--><?php //echo $enName?><!---course.html" >留学申请</a></h3>-->
            <h3><a href="javascript:void(0);" >留学申请</a></h3>
            <div class="listHd hd back02">
                <ul>
                    <li>选校</li>
                    <li>文书</li>
                    <li>面试</li>
                    <li>签证</li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="listBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,154",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/154.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,127",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/127.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,128",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/128.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,129",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/129.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".listSpecial06").slide({mainCell:".listBd",trigger:"mouseover"});
        </script>
    </div>
    <div class="commonMasterC">
        <div class="usually">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "$id,118,135",'pageSize'=>5]);
                foreach($data as $v) {
                    ?>
                    <li>● <a href="/word-details/<?php echo $v['id']?>/118.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="commonList listSpecial07">
<!--            <h3><a href="/promotion/--><?php //echo $enName?><!---course.html">留学提升</a></h3>-->
            <h3><a href="javascript:void(0);">留学提升</a></h3>
            <div class="listHd hd back02">
                <ul>
                    <li>比赛</li>
                    <li>实习</li>
                    <li>summer school</li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="listBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,130",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/130.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,131",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/131.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,135,132",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/132.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".listSpecial07").slide({mainCell:".listBd",trigger:"mouseover"});
        </script>
        <div class="commonList02">
            <h3>
                <a href="/question.html">本科问答</a>
                <input type="button" value="立即提问" class="background02"/>
            </h3>
            <div>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,121,135",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/121.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

        </div>
    </div>
    <div class="commonMasterR">
        <h3 class="h3border02"><a href="/Undergraduate/assistance.html">本科留学产品 <span>more</span></a></h3>
        <div class="abroadProduct">
            <?php
            $data = \app\modules\cn\models\Content::getContent(['category' => "$id,112",'pageSize'=>7]);
            foreach($data as $k=>$v) {
                ?>
                <a href="/picture-details/<?php echo $v['id']?>/112.html">
                    <div class="product0<?php echo $k+1?>" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                        <span><?php echo $v['name']?></span>
                        <!--遮罩层-->
                        <div class="productZZC"></div>
                    </div>
                </a>
            <?php
            }
            ?>
        </div>
        <h3 class="h3border02"><a href="/case.html#allCase">学员感言 <span>more</span></a></h3>
        <div class="studentGY">
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => "$id,102,135",'pageSize'=>1 ]);
            foreach($data as $v) {
                ?>
                <div class="stuLeft">
                    <img src="<?php echo $v['image']?>" alt="学员感言"/>
                </div>
                <div class="stuRight">
                    <h4><?php echo $v['name']?>:<?php echo $v['title']?>！</h4>
                    <p>
                        <?php echo $v['abstract']?>
                    </p>
                    <b><a href="/word-details/<?php echo $v['id']?>/102.html"><i class="fa fa-caret-right"></i> 阅读原文</a></b>
                </div>
            <?php
            }
            ?>

        </div>
        <h3 class="h3border02"><a href="/case.html#admission">名校案例 <span>more</span></a></h3>
        <div class="schoolAL">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "$id,104,207,135",'pageSize'=>4]);
                foreach($data as $v) {
                    ?>
                    <li><img src="<?php echo $v['image']?>" alt="名校案例"/></li>
                <?php
                }
                ?>
            </ul>
        </div>

    </div>
    <div style="clear: both"></div>
</div>

<div class="applyFor">
    <a href="#"> <input type="button" value="立即查询"/></a>
</div>

<div class="commonTitle titleBG03" id="doctor">
    <div class="titleB titleBpadd02">
        <b><?php echo $caName?>博士留学</b>
        <span>DOCTORAL STUDY</span>
    </div>
    <div class="titleB02 mt02">
        <b class="b01">"非中介"透明服务专注名校申请</b>
        <img src="/cn/images/studyA_blackPhone03.png" alt="黑色电话小图标">
        <b class="b02">400-600-1123</b>
        <input onclick="goAssess()" type="button" value="立即留学评估" class="inputBg03"/>
        <script type="text/javascript">
            function goAssess(){
                window.location.href="/evaluation.html";
            }
        </script>
    </div>
</div>
<div class="commonAbroad">
    <div class="commonMasterL">
        <div class="commerBanner">
            <div class="comHd hd">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="comBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,190",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="#"><img src="<?php echo $v['image']?>" alt="banner图"/></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".commerBanner").slide({mainCell:".comBd ul",autoPlay:true,effect:"leftLoop"});
        </script>
        <div class="commonList listSpecial08">
<!--            <h3><a href="/strategies/--><?php //echo $enName?><!---doctor.html" >留学规划</a></h3>-->
            <h3><a href="javascript:void(0);" >留学规划</a></h3>
            <div class="listHd hd back03">
                <ul>
                    <li><a href="/major.html">热门专业</a></li>
                    <li><a href="">学校排名</a></li>
                    <li><a href="">研究报告</a> </li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="listBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,143",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/143.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,175",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/175.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,125",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/125.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".listSpecial08").slide({mainCell:".listBd",trigger:"mouseover"});
        </script>

        <div class="commonList listSpecial09">
<!--            <h3><a href="/application/--><?php //echo $enName?><!---doctor.html" >留学申请</a></h3>-->
            <h3><a href="javascript:void(0);" >留学申请</a></h3>
            <div class="listHd hd back03">
                <ul>
                    <li>选校</li>
                    <li>文书</li>
                    <li>面试</li>
                    <li>签证</li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="listBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,154",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/154.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,127",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/127.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,128",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/128.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,129",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/129.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".listSpecial09").slide({mainCell:".listBd",trigger:"mouseover"});
        </script>
    </div>
    <div class="commonMasterC">
        <div class="usually">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "$id,118,137",'pageSize'=>5]);
                foreach($data as $v) {
                    ?>
                    <li>● <a href="/word-details/<?php echo $v['id']?>/118.html"><?php echo $v['name']?></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="commonList listSpecial10">
<!--            <h3><a href="/promotion/--><?php //echo $enName?><!---doctor.html" >留学提升</a></h3>-->
            <h3><a href="javascript:void(0);" >留学提升</a></h3>
            <div class="listHd hd back03">
                <ul>
                    <li>比赛</li>
                    <li>实习</li>
                    <li>summer school</li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="listBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,130",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/130.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,131",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/131.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,137,132",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/132.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".listSpecial10").slide({mainCell:".listBd",trigger:"mouseover"});
        </script>
        <div class="commonList02">
            <h3> <a href="/question.html">博士问答</a>  <input type="button" value="立即提问" class="background03"/></h3>
            <div>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id,121,137",'pageSize'=>3]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/121.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

        </div>
    </div>
    <div class="commonMasterR">
        <h3 class="h3border03"><a href="/Doctor/assistance.html">博士留学产品 <span>more</span></a></h3>
        <div class="abroadProduct">
            <?php
            $data = \app\modules\cn\models\Content::getContent(['category' => "$id,114",'pageSize'=>7]);
            foreach($data as $k => $v) {
                ?>
            <a href="/picture-details/<?php echo $v['id']?>/114.html">
                <div class="product0<?php echo $k+1?>" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                    <span><?php echo $v['name']?></span>
                    <!--遮罩层-->
                    <div class="productZZC"></div>
                </div>
                </a>
            <?php
            }
            ?>
        </div>
        <h3 class="h3border03"><a href="/case.html#allCase">学员感言 <span>more</span></a></h3>
        <div class="studentGY">
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => "$id,102,137",'pageSize' => 1]);
            foreach($data as $v) {
                ?>
                <div class="stuLeft">
                    <img src="<?php echo $v['image']?>" alt="学员感言"/>
                </div>
                <div class="stuRight">
                    <h4><?php echo $v['name']?>:<?php echo $v['title']?></h4>
                    <p>
                        <?php echo $v['abstract']?>
                    </p>
                    <b><a href="/word-details/<?php echo $v['id']?>/102.html"><i class="fa fa-caret-right"></i> 阅读原文</a></b>
                </div>
            <?php
            }
            ?>
        </div>
        <h3 class="h3border03"><a href="/case.html#admission">名校案例 <span>more</span></a></h3>
        <div class="schoolAL">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "$id,207,137,104",'pageSize'=>4]);
                foreach($data as $v) {
                    ?>
                    <li><img src="<?php echo $v['image']?>" alt="名校案例"/></li>
                <?php
                }
                ?>
            </ul>
        </div>

    </div>
    <div style="clear: both"></div>
</div>

<div class="advertisement">
    <a href="#"><img src="/cn/images/studyA_schoolApply.png" alt="广告图片"/></a>
</div>
