<!--<link rel="stylesheet" href="/cn/css/header.css"/>-->
<!--<link rel="stylesheet" href="/cn/css/footer.css"/>-->
<!--<link rel="stylesheet" href="/cn/css/public.css?v=1.3"/>-->
<link rel="stylesheet" href="/cn/schools/css/academyD-threeLevel.css?v=1"/>


<section class="majorCover">
    <div class="detailsCon">
        <div class="con_title">
            <a href="/">首页 &gt;</a>
            <a href="/schools/<?php echo $school['id']?>.html"><?php echo $school['name']?>&gt;</a>
            <span><?php echo $data['name']?>(<?php echo $data['title']?>)</span>
        </div>
    </div>

    <div class="content">
        <!--左-->
        <div class="content_left">
            <!--专业详情-->
            <div class="materials">
                <p class="materials_title">
                    <i class="iconfont ico_fb">&#xe68e;</i>
                    <span>专业详情</span>
                </p>
                <div class="materials_c">
                    <div class="name_img"><!--学校名称图片-->
                        <img src="http://schools.viplgw.cn<?php echo $school['image']?>" alt="学校名称图片">
                    </div>
                    <div class="school_c"><!--中间部分-->
                        <p class="c_name"><?php echo $school['name']?></p>
                        <span><?php echo $school['title']?></span>
                        <p>所在地:<?php echo $school['answer']?></p>
                        <p>地理位置:<?php echo $school['alternatives']?></p>
                        <p>学校排名:<?php echo $school['article']?></p>
                        <p>官网:<?php echo $data['url']?></p>
                        <a href="/percentages-test.html">录取几率免费评估</a>
                    </div>
                    <div class="school_img"><!--右边-->
                        <img src="http://schools.viplgw.cn<?php echo $school['duration']?>" alt="学校图片">
                    </div>
                </div>
            </div>
            <!--专业介绍-->
            <div class="majorIntro">
                <p class="materials_title">
                    <i class="iconfont ico_fb_1">&#xe600;</i>
                    <span class="majro_cn">专业介绍</span>
                    <span class="majro_en"> Professional introduction</span>
                </p>
                <div class="majorIntro_c">
                    <ul>
                        <li>
                            <div class="basic-left flex-container-center">项目名称</div>
                            <div class="basic-right">
                                <span><?php echo $data['title']?>(<?php echo $data['name']?>)</span>
                            </div>
                            <div style="clear: both"></div>
                        </li>
                        <li>
                            <div class="basic-left flex-container-center">项目网址</div>
                            <div class="basic-right">
                                <span><a href="<?php echo $data['url']?>" target="_blank"><?php echo $data['url']?></a></span>
                            </div>
                            <div style="clear: both"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--专业详情-->
            <div class="pro_details">
                <p class="materials_title">
                    <i class="iconfont ico_fb_1">&#xe600;</i>
                    <span class="majro_cn">专业详情</span>
                    <span class="majro_en"> Professional introduction</span>
                </p>
                <div class="iframeCover">
                    <iframe id="college_homepage" src="<?php echo $data['url']?>" scrolling="auto" height="600px" width="94%" frameborder="0"></iframe><!--iframe内嵌窗口-->
                </div>
            </div>
            <!--专业方向-->
            <div class="proDirection">
                <p class="materials_title">
                    <i class="iconfont ico_fb_1">&#xe600;</i>
                    <span class="majro_cn">专业方向</span>
                    <span class="majro_en"> Professional employment direction</span>
                    <span class="change_an"><i class="iconfont icon_change pro_change"></i>换一批</span>
                </p>
                <div class="prospectus-bottom">
                    <ul id="hotmajor">
                        <?php foreach($hot as $v){?>
                        <li>
                            <div class="bTop-img"><a href="/major/11870.html">
                                    <img src="/cn/images/aboutUs_counicon05.png" alt="学校图片"></a>
                            </div>
                            <div class="bBot-info">
                                <ul>
                                    <li><?php echo $v['title']?></li>
                                    <li><?php echo $v['direction']?></li>
                                    <li><a href="/schools/major/<?php echo $v['id']?>.html" class="see_d">查看详情&gt;&gt;</a></li>
                                    <li class="pg_free_li"><a href="/evaluation.html" class="pg_free">免费评估<i class="iconfont left_icon">&#xe610;</i></a></li>
                                </ul>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <!--右-->
        <div class="content_right">
            <div class="right_title">
                <span>本周热门院校</span>
                <span class="change_right"><i class="iconfont icon_change">&#xe609;</i>换一批</span>
            </div>
            <div class="right_con"><!--循环 right_con_son -->
                <?php foreach ($schoolData['data'] as $k => $v) {
                    if (is_numeric($k)) {
                        ?>
                        <div class="right_con_son">
                            <div class="son_img">
                                <img src="http://schools.viplgw.cn<?php echo $v['image'] ?>" alt="学校logo">
                                <p>已有<span><?php echo $v['viewCount'] + rand(10, 100) ?></span>人评估</p>
                            </div>
                            <p class="son_sc_name"><?php echo $v['name'] ?></p>
                            <p><?php echo $v['title'] ?></p>
                            <p>学校排名:<?php echo $v['s_rank'] ?></p>
                            <p>位于:<?php echo $v['s_wz'] ?></p>
                            <a href="/schools/<?php echo $v['id'] ?>.html">查看更多信息>></a>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
</section>
<script>
    //专业方向换一批
    $('.change_an').click(function () {
        $.post('http://schools.viplgw.cn/cn/api/select-major',{},function(re){
            var str = "";
            for(var i=0;i<re.length;i++){
                str +='<li>'+
                    '<div class="bTop-img"><a href="">'+
                    '<img src="/cn/images/aboutUs_counicon05.png" alt="学校图片"></a>'+
                    '</div>'+
                    '<div class="bBot-info">'+
                    '<ul>'+
                    '<li>'+ re[i].title+'</li>'+
                    '<li>'+ re[i].direction+'</li>'+
                    '<li><a href="/schools/major/'+re[i].id+'.html">查看详情>></a></li>'+
                    '<li class="pg_free_li"><a href="/evaluation.html" class="pg_free">免费评估<i class="iconfont left_icon">&#xe610;</i></a></li>'+
                    '</ul>'+
                    '</div>'+
                    '</li>';
            }

            $("#hotmajor").html(str);
        },'json')
    });
    //右侧换一批
    var countNum = 0;
    var flag = true;
    $('.change_right').click(function () {
       if(flag==true){

       }else {
           countNum+=1;
       }
        $.get('/cn/api/school',{count:countNum},function(re){
            var str = "";
            flag = false;
            for(var i=0;i<6;i++){
                str+='<div class="right_con_son">';
                str+='<div class="son_img">';
                str+='<img src="http://schools.viplgw.cn'+ re.school[i].image +'" alt="学校logo">';
                str+='<p>已有<span>'+ (parseInt(re.school[i].viewCount)+parseInt(Math.floor(Math.random()*(100 - 1) + 1)))+'</span>人评估</p>';
                str+='</div>';
                str+='<p class="son_sc_name">'+ re.school[i].name  +'</p>';
                str+='<p>'+ re.school[i].title  +'</p>';
                str+='<p>学校排名'+ re.school[i].s_rank  +'</p>';
                str+='<p>位于'+ re.school[i].s_wz  +'</p>';
                str+='<a href="/schools/'+ re.school[i].id +'.html">查看更多信息>></a>';
                str+='</div>';
            }
            $('.right_con').html(str);

        },'json')
    });
</script>