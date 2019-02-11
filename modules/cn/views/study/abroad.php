<link rel="stylesheet" href="/cn/css/StudyAbroadProducts-new.css"/>

<!--banner-->
<section class="banner">
    <div class="banner_left">
        <div class="banner_slide">
            <ul><!--循环li-->
                <?php foreach($banner as $v){?>
                <li>
                    <img src="<?php echo $v['image']?>" alt="<?php echo $v['name']?>">
                </li>
                <?php }?>
            </ul>
        </div>
        <i class="prev iconfont">&#xe608;</i>
        <i class="next iconfont">&#xe607;</i>
        <div class="bannerCenter">
            <ul>
                <li>
                    <a href="/background-test.html"><div class="bak_c"></div></a>
                    <span>背景测评</span>
                </li>
                <li>
                    <a href="/choice-test.html"><div class="choose_c"></div></a>
                    <span>选校测评</span>
                </li>
                <li>
                    <a href="/percentages-test.html"><div class="choose_t"></div></a>
                    <span>选校推荐</span>
                </li>
            </ul>
        </div>
    </div>
    <script>
        jQuery(".banner_left").slide({mainCell:".banner_slide ul",effect:"leftLoop",autoPlay:true});
    </script>
    <div class="banner_right">
        <span class="shu">|</span> <div class="right_title"> <span>留学录取优秀案例</span></div>
        <div class="right_slide">
            <ul><!--循环li-->
                <?php foreach($caseList as $v){?>
                <li>
                    <b>•</b>
                    <span><a href="/word-details/<?php echo $v['id']?>/index,178.html"><?php echo $v['title']!=false?$v['title']:$v['name']?></a></span>
                    <div class="clearfix"></div>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
    <script>
        jQuery(".banner_right").slide({mainCell:".right_slide ul",autoPlay:true,effect:"topMarquee",vis:9,interTime:50,trigger:"click"});
    </script>
</section>
<!--申请攻略-->
<section class="Apca_strategy">
    <p class="Record_title">
        <?php $country = Yii::$app->request->get('country','USA'); if($country=='USA'){
            echo '美国';
        }elseif($country=='UK'){
            echo '英国';
        }elseif($country=='HK'){
            echo '香港';
        }elseif($country=='AUS'){
            echo '澳大利亚';
        }elseif($country=='Canada'){
            echo '加拿大';
        }?>留学热门专业申请攻略</p>
    <div class="service_line"></div>
    <div class="strategy_content">
        <div class="business profession"><!--商科-->
            <div class="content_left">
                <span class="pro_name">商科</span>
                <div class="pro_icon"></div>
                <div class="pro_st"><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">定制攻略</a></div>
            </div>
            <div class="content_right">
                <ul><!--循环li-->
                    <?php foreach($news['business'] as $v){?>
                    <li>
                        <b>•</b>
                        <span><a href="/word-details/<?php echo $v['id']?>/index,178.html"><?php echo $v['name']?></a></span>
                        <div class="clearfix"></div>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="science profession"><!--理科-->
            <div class="content_left">
                <span class="pro_name">理工科</span>
                <div class="pro_icon lg_icon"></div>
                <div class="pro_st"><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">定制攻略</a></div>
            </div>
            <div class="content_right">
                <ul><!--循环li-->
                    <?php foreach($news['science'] as $v){?>
                        <li>
                            <b>•</b>
                            <span><a href="/word-details/<?php echo $v['id']?>/index,178.html"><?php echo $v['name']?></a></span>
                            <div class="clearfix"></div>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="abroad_stu"><!--留学动态 专业解析-->
            <div class="abroad_title">
                <div class="abroad_name on">留学动态</div>
                <div class="abroad_name">专业解析</div>
            </div>
            <div class="abroad_stu_slide slideshow"><!--留学动态-->
                <ul><!--循环li-->
                    <?php foreach($news['abroad'] as $v){?>
                    <li>
                        <b>•</b>
                        <span><a href="/word-details/<?php echo $v['id']?>/index,178.html"><?php echo $v['name']?></a></span>
                        <div class="clearfix"></div>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="abroad_stu_slide_1 slideshow"><!--专业解析-->
                <ul><!--循环li-->
                    <?php foreach($news['major'] as $v){?>
                    <li>
                        <b>•</b>
                        <span><a href="/word-details/<?php echo $v['id']?>/index,178.html"><?php echo $v['name']?></a></span>
                        <div class="clearfix"></div>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="science profession m20"><!--工科-->
            <div class="content_left">
                <span class="pro_name">金融</span>
                <div class="pro_icon jr_icon"></div>
                <div class="pro_st"><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">定制攻略</a></div>
            </div>
            <div class="content_right">
                <ul><!--循环li-->
                    <?php foreach($news['finance'] as $v){?>
                        <li>
                            <b>•</b>
                            <span><a href="/word-details/<?php echo $v['id']?>/index,178.html"><?php echo $v['name']?></a></span>
                            <div class="clearfix"></div>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="science profession m20"><!--文科-->
            <div class="content_left">
                <span class="pro_name">文科</span>
                <div class="pro_icon wk_icon"></div>
                <div class="pro_st"><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">定制攻略</a></div>
            </div>
            <div class="content_right">
                <ul><!--循环li-->
                    <?php foreach($news['arts'] as $v){?>
                        <li>
                            <b>•</b>
                            <span><a href="/word-details/<?php echo $v['id']?>/index,178.html"><?php echo $v['name']?></a></span>
                            <div class="clearfix"></div>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="united m20"><!--美国留学专业推荐-->
            <div class="united_title"><span>|</span>
                <?php $country = Yii::$app->request->get('country','USA'); if($country=='USA'){
                    echo '美国';
                }elseif($country=='UK'){
                    echo '英国';
                }elseif($country=='HK'){
                    echo '香港';
                }elseif($country=='AUS'){
                    echo '澳大利亚';
                }elseif($country=='Canada'){
                    echo '加拿大';
                }?>留学专业推荐</div>
            <div class="united_slide">
                <ul>
                    <?php foreach($recommend as $v){?>
                    <li>
                        <div class="unitedImg"><img src="<?php echo $v['image']!=false?'http://www.thinkwithu.com'.$v['image']:'/cn/images/ceshi.png'?>" alt=""></div>
                        <p>专业介绍:<span><?php echo $v['name']?></span></p>
<!--                        <p>推荐理由:<span>美国留学如何成功申请心理学科目等等等你的歌</span></p>-->
                    </li>
                    <?php }?>
                </ul>
            </div>
            <i class="prev iconfont">&#xe608;</i>
            <i class="next iconfont">&#xe607;</i>
        </div>
    </div>
    <script>
        jQuery(".profession").slide({mainCell:".content_right ul",autoPlay:true,effect:"topMarquee",vis:6,interTime:50,trigger:"click"});
        $('.abroad_name').click(function () {
            var index = $(this).index();
            $('.abroad_name').removeClass('on');
            $(this).addClass('on');
            $('.slideshow').hide();
            $('.slideshow').eq(index).show()
        })
        jQuery(".abroad_stu").slide({mainCell:".abroad_stu_slide ul",autoPlay:true,effect:"topMarquee",vis:5,interTime:50,trigger:"click"});
        jQuery(".abroad_stu").slide({mainCell:".abroad_stu_slide_1 ul",autoPlay:true,effect:"topMarquee",vis:5,interTime:50,trigger:"click"});
        jQuery(".united").slide({mainCell:".united_slide ul",effect:"leftLoop",autoPlay:true});
    </script>
</section>
<!--最新活动-->
<section class="latest_ac">
    <p class="Record_title">最新活动</p>
    <div class="service_line"></div>
    <div class="ac_content">
        <ul><!--循环li-->
            <?php foreach($active as $v){?>
            <li class="Brushing">
                <div class="Brushing_img"><img src="http://www.thinkwithu.com<?php echo $v['image']?>" alt=""></div>
                <div class="Brushing_cover">
                    <p class="Brushing_title"><?php echo $v['name']?></p>
                    <div class="Brushing_teacher">老师:<p><?php echo $v['speaker']?></p></div>
                    <p class="Brushing_time">时间:<span><?php echo $v['time']?></span></p>
                    <div class="Brushing_sign">
                        <a href="/public-class/<?php echo $v['id']?>.html"><div class="Brushing_details">查看详情</div></a>
                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="><div class="Brushing_click">点击报名</div></a>
                    </div>
                </div>
            </li>
            <?php }?>
        </ul>
    </div>
    <script>
        jQuery(".latest_ac").slide({mainCell:".ac_content ul",effect:"leftLoop",autoPlay:true,vis:4});
    </script>
</section>
<!--美国留学热门项目-->
<section class="hot_items">
    <p class="Record_title">
        <?php $country = Yii::$app->request->get('country','USA'); if($country=='USA'){
            echo '美国';
        }elseif($country=='UK'){
            echo '英国';
        }elseif($country=='HK'){
            echo '香港';
        }elseif($country=='AUS'){
            echo '澳大利亚';
        }elseif($country=='Canada'){
            echo '加拿大';
        }?>留学热门项目</p>
    <div class="service_line"></div>
    <div class="hot_content">
        <ul>
            <?php foreach ($abroadPro as $k => $v) {
                $country = Yii::$app->request->get('country', 'USA');
                if ($country == 'USA' || $country == 'UK') {
                    if ($k < count($abroadPro) - 2) {
                        ?>
                        <li>
                            <img class="hotImg" src="<?php echo $v['image'] ?>" alt="">
                            <a href="/word-details/<?php echo $v['id'] ?>/index,178.html"><?php echo $v['name'] ?>
                                <span><i class="iconfont">&#xe600;</i></span></a>
                        </li>
                    <?php }
                } else {
                    ?>
                    <li>
                        <img class="hotImg" src="<?php echo $v['image'] ?>" alt="">
                        <a href="/word-details/<?php echo $v['id'] ?>/index,178.html"><?php echo $v['name'] ?> <span><i
                                    class="iconfont">&#xe600;</i></span></a>
                    </li>
                <?php }
            } ?>
        </ul>
    </div>
    <script>
        jQuery(".hot_items").slide({mainCell:".hot_content ul",effect:"leftLoop",autoPlay:true,vis:4});
    </script>
</section>
<!--背景提升项目-->
<section class="improvement">
    <p class="Record_title">背景提升项目</p>
    <div class="service_line"></div>
    <div class="impro_content">
        <div class="impro_title">
            <ul>
                <li class="title_btn on" data-id="243">国外实习</li>
                <li class="title_btn" data-id="242">国内实习</li>
                <li class="title_btn" data-id="262">海外就业</li>
                <li class="title_btn" data-id="239">国外游学</li>
                <li class="title_btn" data-id="263">科研实习</li>
                <li class="title_btn" data-id="264">公益项目</li>
            </ul>
        </div>
        <div class="content_list"><!--外层循环 listDiv-->
            <?php foreach($internship as $k=>$v){?>
            <div class="<?php echo $k=='inland'?'practice ':''?>listDiv"><!--国外实习  内层循环div list_show-->
                <div class="listDivCover">
                    <?php foreach($v as $key=>$val){
                        if(is_numeric($key)){?>
                            <a href="/word-details/<?php echo $val['id']?>/index,178.html">
                                <div class="list_show">
                                    <img src="<?php echo 'http://www.thinkwithu.com'.$val['image']?>" alt="">
                                    <div class="list_bottom">
                                        <p><?php echo $val['name']?></p>
                                    </div>
                                </div>
                            </a>
                        <?php }
                    }?>
                </div>
                <!-- 分页-->
                <div class="pageSize">
                    <ul><?php if($v['count']!=false){?>
                        <li class="prevbtn"><a href="javascript:;">&#60;</a></li>
                        <?php for($i=1;$i<$v['total']+1;$i++){?>
                        <li class="num on"><?php echo $i?></li>
                        <?php }?>
                        <li class="nextbtn"><a href="javascript:;">&#62;</a></li>
                    <?php }?>
                    </ul>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <script>
        $('.title_btn').click(function () {
            var index = $(this).index();
            $('.title_btn').removeClass('on');
            $(this).addClass('on');
            $('.listDiv').hide();
            $('.listDiv').eq(index).show();
        });
        function getContent(catid,page,index) {
            var str='';
            $.get('/cn/api/internship',{catId:catid,page:page},function (re) {
                for(var i in JSON.parse(re).data){
                    if(i<6){
                        str+='<a href="/word-details/'+ JSON.parse(re).data[i].id +'/index,178.html">';
                        str+='<div class="list_show">';
                        str+='<img src="http://www.thinkwithu.com'+JSON.parse(re).data[i].image+'" alt="">';
                        str+='<div class="list_bottom">';
                        str+='<p>'+ JSON.parse(re).data[i].name +'</p>';
                        str+='</div>';
                        str+='</div>';
                        str+='</a>';
                    }
                }
                $('.listDiv').eq(index).find('.listDivCover').html(str);
                $('.listDiv').eq(index).find('.num').removeClass('on');
                $('.listDiv').eq(index).find('.num').eq(JSON.parse(re).data.page-1).addClass('on');
            })
        }
        // 分页数字
        $('.num').click(function () {
            var page = parseInt($(this).html());
            var catid = $('.impro_title').find('.on').attr('data-id');
            var index = $('.impro_title').find('.on').index();
            getContent(catid,page,index);
        });
        //分页下一页
        $('.nextbtn').click(function () {
            var page = parseInt($(this).parent().find('.on').next().html());
            var catid = $('.impro_title').find('.on').attr('data-id');
            var index = $('.impro_title').find('.on').index();
            if(page){
                getContent(catid,page,index);
            }
        });
        //分页上一页
        $('.prevbtn').click(function () {
            var page = parseInt($(this).parent().find('.on').prev().html());
            var catid = $('.impro_title').find('.on').attr('data-id');
            var index = $('.impro_title').find('.on').index();
            if(page){
                getContent(catid,page,index);
            }
        });
    </script>
</section>
<!--美国留学成功案例-->
<section class="successCase">
    <p class="Record_title">
        <?php $country = Yii::$app->request->get('country','USA'); if($country=='USA'){
            echo '美国';
        }elseif($country=='UK'){
            echo '英国';
        }elseif($country=='HK'){
            echo '香港';
        }elseif($country=='AUS'){
            echo '澳大利亚';
        }elseif($country=='Canada'){
            echo '加拿大';
        }?>留学成功案例</p>
    <div class="service_line"></div>
    <div class="case_content">
        <div class="casebd">
            <ul><!--外层循环li 内层循环div case_cover-->
                <?php
                $i = 1;
                $n = count($case) != false ? ceil(count($case) / 6) : 0;
                for ($i;$i <=$n; $i++) { ?>
                    <li>
                        <div  class="case_cover">
                        <?php $j=0;for ($j;$j < 6; $j++) {
                            if ($i < $n  || (($i == $n) && $j <count($case) % 6)) {

                                ?>
                                <div>
                                    <div class="case_tx"><img src="<?php echo 'http://www.thinkwithu.com'.$case[($i-1) * 6 + $j]['image']?>" alt=""></div>
                                    <p class="case_name"><?php echo $case[($i-1) * 6 + $j]['name'] ?></p>
                                    <p class="case_intro"><a href="/word-details/<?php echo $case[($i-1) * 6 + $j]['id']?>/index,178.html"><?php echo $case[($i-1) * 6 + $j]['title'] ?></a></p>
                                    <!--                                    <p class="case_school">录取院校:商学院</p>-->
                                </div>
                            <?php }
                        } ?>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="casehd">
            <ul><!--循环li-->
                <?php  for ($i=0;$i <ceil(count($case)/6);$i++) { ?>
                <li><?php echo $i+1?></li>
                <?php }?>
            </ul>
            <i class="prev iconfont">&#xe608;</i>
            <i class="next iconfont">&#xe607;</i>
        </div>
    </div>
    <script>
        jQuery(".case_content").slide({titCell:'.casehd ul li',mainCell:".casebd ul",effect:"left",autoPlay:false});
    </script>
</section>
<!--美国留学考试提分课程-->
<section class="scoring">
    <div class="scoring_content">
        <p class="Record_title">
            <?php $country = Yii::$app->request->get('country','USA'); if($country=='USA'){
                echo '美国';
            }elseif($country=='UK'){
                echo '英国';
            }elseif($country=='HK'){
                echo '香港';
            }elseif($country=='AUS'){
                echo '澳大利亚';
            }elseif($country=='Canada'){
                echo '加拿大';
            }?>留学考试提分课程</p>
        <div class="service_line"></div>
        <div class="scoring_course">
            <?php $country = Yii::$app->request->get('country', 'USA');
            if ($country == 'USA') { ?>
                <a href="http://gmat.viplgw.cn/gmatcourses/397.html" target="_blank">
                    <p>GMAT 700 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://gre.viplgw.cn/course/7778.html" target="_blank">
                    <p>GRE 330 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://toefl.viplgw.cn/toeflcourses/18534.html" target="_blank">
                    <p>托福 110 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://www.thinkusat.com/class_details/1.html" target="_blank">
                    <p>SAT 精品</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://ielts.viplgw.cn/cn/course/detail-2299.html" target="_blank">
                    <p>雅思一对一</p>
                    <p>精品课</p>
                </a>
            <?php } elseif ($country == 'UK') { ?>
                <a href="http://gmat.viplgw.cn/gmatcourses/397.html" target="_blank">
                    <p>GMAT 700 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://gre.viplgw.cn/course/7778.html" target="_blank">
                    <p>GRE 330 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://ielts.viplgw.cn/cn/course/detail-2299.html" target="_blank">
                    <p>雅思一对一</p>
                    <p>精品课</p>
                </a>
            <?php } elseif ($country == 'HK') { ?>
                <a href="http://gmat.viplgw.cn/gmatcourses/397.html" target="_blank" style="margin-left: 170px!important;">
                    <p>GMAT 700 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://gre.viplgw.cn/course/7778.html" target="_blank" style="margin-left: 90px!important;">
                    <p>GRE 330 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://toefl.viplgw.cn/toeflcourses/18534.html" target="_blank" style="margin-left: 170px!important;margin-top: 40px;">
                    <p>托福 110 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://ielts.viplgw.cn/cn/course/detail-2299.html" target="_blank" style="margin-left: 150px!important;">
                    <p>雅思一对一</p>
                    <p>精品课</p>
                </a>
            <?php } elseif ($country == 'AUS') { ?>
                <a href="http://gmat.viplgw.cn/gmatcourses/397.html" target="_blank">
                    <p>GMAT 700 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://gre.viplgw.cn/course/7778.html" target="_blank">
                    <p>GRE 330 分</p>
                    <p>冲刺课程</p>
                </a>
                <a href="http://ielts.viplgw.cn/cn/course/detail-2299.html" target="_blank">
                    <p>雅思一对一</p>
                    <p>精品课</p>
                </a>
            <?php } elseif ($country == 'Canada') { ?>
                '加拿大'
            <?php } ?>
        </div>
    </div>
</section>
<!--申友留学王牌名师-->
<section class="teacher">
    <p class="Record_title">申友留学王牌名师</p>
    <div class="service_line"></div>
    <div class="teacher_content">
        <ul>
            <?php foreach($teacher as $v){?>
            <li>
                <div class="teacher_img"><img src="<?php echo 'http://www.thinkwithu.com'.$v['image']?>" alt=""></div>
                <p class="teacher_name"><?php echo $v['name']?></p>
                <div class="teacher_intro">
                    <?php echo $v['description']?>
                </div>
                <div class="btn">
                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="  target="_blank" class="yy">立即预约</a>
                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank" class="sq">申请案例</a>
                </div>
            </li>
            <?php }?>
        </ul>
        <a class="next"><i class="iconfont next_icon">&#xe602;</i></a>
        <a class="prev"><i class="iconfont prev_icon">&#xe601;</i></a>
    </div>
    <script>
        jQuery(".teacher").slide({mainCell:".teacher_content ul",effect:"leftLoop",autoPlay:true,vis:4,scroll:1});
    </script>
</section>