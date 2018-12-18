
<link rel="stylesheet" href="/cn/css/studentsCase.css"/>
<script type="text/javascript" src="/cn/js/public.js"></script>
<script type="text/javascript" src="/cn/js/studentsCase.js"></script>

<section class="banner">
    <!--背景轮播-->
    <div class="bd_banner bd" style="width: 100%;overflow: hidden;">
        <ul><!--循环li-->
            <li>
                <a href="" target="_blank">
                    <img src="http://www.thinkwithu.com/files/attach/images/20170217/1487326065197811.png" alt="案例库">
                </a>
            </li>
        </ul>
    </div>
    <!--左边-->
    <div class="bannerLeft">
        <div class="b_l_content">
            <div class="b_l_title">
<!--                <div>-->
<!--                    <i class="iconfont r_w">&#xe656;</i>-->
<!--                    <span>姓名</span>-->
<!--                </div>-->
<!--                <div>-->
<!--                    <i class="iconfont j_b">&#xe655;</i>-->
<!--                    <span>录取专业</span>-->
<!--                </div>-->
                <div>
                    <i class="iconfont x_x">&#xe606;</i>
                    <span>录取学校</span>
                </div>
            </div>
            <div class="b_l_details">
                <ul>
                    <?php foreach($list as $v){
//                        if(($v['title']!=false)&&($v['name']!=$v['title'])){?>
                    <li><!--循环li-->
<!--                        <div><p>--><?php //echo $v['name']?><!--</p></div>-->
<!--                        <div>金融</div>-->
                        <div><?php echo $v['title']!=false?$v['title']:$v['name']?></div>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
    <script>
        // jQuery(".banner").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true});
        jQuery(".b_l_content").slide({mainCell:".b_l_details ul",autoPlay:true,effect:"topMarquee",vis:9,interTime:50,trigger:"click"});
    </script>
</section>
<!--最新案例-->
<section class="latestCases">
    <div class="l_c_content">
        <p class="Record_title">最新案例</p>
        <div class="service_line"></div>
        <!--搜索-->
        <div class="l_c_search">
            <span>学校:</span><input type="text" class="school">
<!--            <span>专业:</span><input type="text" class="profession">-->
            <span class="search_btn" onclick="search_al()">搜索</span>
        </div>
        <!--案例-->
        <div class="casesContent">
            <div class="cases_d">
                <ul>
                    <?php for($i=0;$i<ceil(count($new)/3);$i++){?>
                    <li><!--外层循环li  内层循环div Content_d-->
                        <?php foreach($new as $k=>$v){
                        if ($k < ($i + 1) * 3 && $k >= $i * 3) { ?>
                            <a href="/case/<?php echo $v['id']?>.html" class="Content_d_cover">
                                <div class="Content_d">
                                    <div class="imgCover">
                                        <img src="http://www.thinkwithu.com<?php echo $v['image']?>" alt="录取图片">
                                        <div class="mask">
                                            <p class="mask_name"><?php echo $v['title']==false?$v['name']:$v['title']?></p><!--姓名-->
                                            <?php if($v['abroadSchool']!=false){?><p class="mask_school">录取院校: <?php echo $v['abroadSchool']?></p><?php }?><!--录取院校-->
                                            <?php if($v['major']!=false){?><p class="mask_obj"><?php  echo '录取专业：'.$v['major'];?> </p><?php }?><!--录取专业-->
                                        </div>
                                    </div>
                                    <p class="content_p"><?php echo $v['name']?></p>
                                </div>
                            </a>
                        <?php }}?>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="hd hdCases">
                <ul><!--循环li-->
                    <?php for($i=0;$i<ceil(count($new)/3);$i++){?>
                    <li></li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <script>
            jQuery(".casesContent").slide({mainCell:".cases_d ul",effect:"left",autoPlay:true});
        </script>
    </div>
</section>
<!--留学案例-->
<section class="success_cases">
    <div class="success_content">
        <p class="Record_title">留学案例</p>
        <div class="service_line"></div>
        <div class="success_title hd">
            <ul>
                <li data-catid="104,88,207"><p>美国留学</p></li>
                <li data-catid="104,89,207"><p>英国留学</p></li>
                <li data-catid="104,91,96,207"><p>澳洲加拿大</p></li>
                <li data-catid="104,90,93,207"><p>香港新加坡</p></li>
                <li data-catid="104,94,207"><p>欧洲国家</p></li>
                <a href="">More>></a>
            </ul>
        </div>
        <div class="admission_c bd">
            <?php foreach($case as $key=>$val){?>
            <ul class="successList"><!--外层循环ul  内层循环li admission_d-->
               <div class="List_c">
                   <?php foreach ($val as $k => $v) {
                       if (is_numeric($k)) {
                           ?>
                           <a href="/case/<?php echo $v['id']?>.html" class="admission_d_cover">
                               <li class="admission_d">
                                   <div class="admission_img">
                                       <img src="http://www.thinkwithu.com<?php echo $v['image'] ?>" alt="录取图片">
                                   </div>
                                   <p class="admission_name"><?php echo $v['name'] ?></p><!--录取院校-->
                                   <!--                                <p class="admission_m">--><?php //echo $v['abroadSchool'] ?><!--</p><!--录取院校-->
                                   <p class="admission_school">毕业院校:<span><?php echo $v['oldSchool'] ?></span></p><!--毕业院校-->
                                   <p class="admission_hardware">硬件条件:<span><?php echo $v['score'] ?></span></p>
                                   <!--硬件条件-->
                                   <p class="admission_ad">录取院校:<span><?php echo $v['abroadSchool'] ?></span></p><!--录取院校-->
                                   <p class="admission_obj">录取专业:<span><?php echo $v['major'] ?></span></p><!--录取专业-->
                               </li>
                           </a>
                       <?php }
                   } ?>
               </div>
                <!--分页-->
                <div class="pageSize">
                    <?php for($i=1;$i<=$val['total'];$i++){?>
                    <li data-value="<?php echo $val['total']?>" class="total mr02 <?php if($i==1) echo 'on'?>"><span class="colorRed"><?php echo $i;?></span></li>
                    <?php }?>
                </div>
            </ul>
            <?php }?>
        </div>
    </div>
    <script>
        jQuery(".success_content").slide({});
    </script>
</section>
<!--成功案例-->
<section class="Study_case">
    <div class="StudyContent">
        <p class="Record_title">成功案例</p>
        <div class="service_line"></div>
        <div class="success_title hd">
            <ul>
                <li data-catid=""><p>GMAT</p></li>
                <li data-catid=""><p>雅思</p></li>
                <li data-catid=""><p>托福</p></li>
                <li data-catid=""><p>GRE</p></li>
                <a href="">More>></a>
            </ul>
        </div>

        <div class="admission_c bd">
            <!--外层循环ul  内层循环a标签 admission_d_cover-->
            <ul class="successList">
                <div class="List_c">
                    <a href="" class="admission_d_cover">
                        <li class="Study_d">
                            <div class="Study_img">
                                <img src="http://www.thinkwithu.com/files/attach/images/20151224/1450927492359581.jpg" alt="录取图片">
                            </div>
                            <p class="admission_name">北京科技大学 飞跃 宾夕法尼亚大学</p><!--录取院校-->
                            <!--                                <p class="admission_m">--><!--</p><!--录取院校-->
                            <p class="admission_school">毕业院校:<span>北京科技大学</span></p><!--毕业院校-->
                            <p class="admission_hardware">硬件条件:<span></span></p>
                            <!--硬件条件-->
                            <p class="admission_ad">录取院校:<span> 宾夕法尼亚大学</span></p><!--录取院校-->
                            <p class="admission_obj">录取专业:<span></span></p><!--录取专业-->
                        </li>
                    </a>
                    <a href="" class="admission_d_cover">
                        <li class="Study_d">
                            <div class="Study_img">
                                <img src="http://www.thinkwithu.com/files/attach/images/20151224/1450927492359581.jpg" alt="录取图片">
                            </div>
                            <p class="admission_name">北京科技大学 飞跃 宾夕法尼亚大学</p><!--录取院校-->
                            <!--                                <p class="admission_m">--><!--</p><!--录取院校-->
                            <p class="admission_school">毕业院校:<span>北京科技大学</span></p><!--毕业院校-->
                            <p class="admission_hardware">硬件条件:<span></span></p>
                            <!--硬件条件-->
                            <p class="admission_ad">录取院校:<span> 宾夕法尼亚大学</span></p><!--录取院校-->
                            <p class="admission_obj">录取专业:<span></span></p><!--录取专业-->
                        </li>
                    </a>
                    <a href="" class="admission_d_cover">
                        <li class="Study_d">
                            <div class="Study_img">
                                <img src="http://www.thinkwithu.com/files/attach/images/20151224/1450927492359581.jpg" alt="录取图片">
                            </div>
                            <p class="admission_name">北京科技大学 飞跃 宾夕法尼亚大学</p><!--录取院校-->
                            <!--                                <p class="admission_m">--><!--</p><!--录取院校-->
                            <p class="admission_school">毕业院校:<span>北京科技大学</span></p><!--毕业院校-->
                            <p class="admission_hardware">硬件条件:<span></span></p>
                            <!--硬件条件-->
                            <p class="admission_ad">录取院校:<span> 宾夕法尼亚大学</span></p><!--录取院校-->
                            <p class="admission_obj">录取专业:<span></span></p><!--录取专业-->
                        </li>
                    </a>
                    <a href="" class="admission_d_cover">
                        <li class="Study_d">
                            <div class="Study_img">
                                <img src="http://www.thinkwithu.com/files/attach/images/20151224/1450927492359581.jpg" alt="录取图片">
                            </div>
                            <p class="admission_name">北京科技大学 飞跃 宾夕法尼亚大学</p><!--录取院校-->
                            <!--                                <p class="admission_m">--><!--</p><!--录取院校-->
                            <p class="admission_school">毕业院校:<span>北京科技大学</span></p><!--毕业院校-->
                            <p class="admission_hardware">硬件条件:<span></span></p>
                            <!--硬件条件-->
                            <p class="admission_ad">录取院校:<span> 宾夕法尼亚大学</span></p><!--录取院校-->
                            <p class="admission_obj">录取专业:<span></span></p><!--录取专业-->
                        </li>
                    </a>
                </div>
                <!--分页-->
                <div class="pageSizeStudy">

                </div>
            </ul>
        </div>
    </div>
    <script>
        jQuery(".StudyContent").slide({});
    </script>
</section>


<script>
    //留学案例分页
    $(document).on("click", ".pageSize li.total", function () {
        var caseWrap = $(this).parent().parent().find('.List_c');
        var catId = $('.success_title ul li.on').attr("data-catid");
        var page = parseInt($(this).children().html());
        $(this).siblings().removeClass('on');
        $(this).addClass('on');
        $.ajax({
            url: "/cn/api/get-case",
            type: "get",
            data: {
                catId: catId,
                page: page,
            },
            dataType: "json",
            success: function (data) {
                var str = "";
                caseWrap.empty();
                for (var i = 0; i < data.data.length; i++) {
                    str += '<a href="/case/' + catId + '/' + data.data[i].id+'.html" class="admission_d_cover">';
                    str +='<li class="admission_d">';

                    str +='<div class="admission_img"><img src="http://www.thinkwithu.com'+ data.data[i].image +'" alt="录取图片"></div>';
                    str +='<p class="admission_name">'+ data.data[i].name +'</p><!--录取院校-->';
                    // str +='<p class="admission_m">'+ data.data[i].name +'</p><!--录取院校-->';
                    str +='<p class="admission_school">毕业院校:<span>'+ data.data[i].oldSchool +'</span></p><!--毕业院校-->';
                    if(data.data[i].score){
                        str +='<p class="admission_hardware">硬件条件:<span>'+ data.data[i].score+'</span></p><!--硬件条件-->';
                    }else {
                        str +='<p class="admission_hardware">硬件条件:<span></span></p><!--硬件条件-->';
                    }
                    str +='<p class="admission_ad">录取院校:<span>'+ data.data[i].abroadSchool +'</span></p><!--录取院校-->';
                    str +='<p class="admission_obj">录取专业:<span>'+ data.data[i].major+'</span></p><!--录取专业-->';

                    str +='</li>';
                    str += '</a>';
                }
                caseWrap.append(str);
            }
        });
    });
    //成功案例分页

    //搜索
    function search_al() {
        var keyword = $('.school').val();
        window.location.href='/case/search.html?keyword='+ keyword +'';
    }
</script>