<!--<link rel="stylesheet" href="/cn/css/header.css"/>-->
<!--<link rel="stylesheet" href="/cn/css/footer.css"/>-->
<!--<link rel="stylesheet" href="/cn/css/public.css?v=1.3"/>-->
<link rel="stylesheet" href="/cn/schools/css/academyDetails.css?v=1.001"/>

<script type="text/javascript" src="/cn/schools/js/academyDetails.js"></script>

<section class="institution_details">
    <div class="detailsCon">
        <div class="con_title">
            <a href="/">首页 ></a>
            <span> <?php echo $data['name']?></span>
        </div>
    </div>

    <div class="content">
        <!--左-->
        <div class="content_left">
            <!--院校资料-->
            <div class="materials">
                <p class="materials_title">
                    <i class="iconfont ico_fb">&#xe68e;</i>
                    <span>院校资料</span>
                </p>
                <div class="materials_c">
                    <div class="name_img"><!--学校名称图片-->
                        <img src="http://schools.viplgw.cn/<?php echo $data['image']?>" alt="学校名称图片">
                    </div>
                    <div class="school_c"><!--中间部分-->
                        <p class="c_name"><?php echo $data['name']?></p>
                        <span><?php echo $data['title']?></span>
                        <p>所在地:<?php echo $data['answer']?></p>
                        <p>地理位置:<?php echo $data['answer']?></p>
                        <p>学校排名:<?php echo $data['article']?></p>
                        <p>官网:<?php echo $data['listeningFile']?></p>
                        <a href="/percentages-test.html">录取几率免费评估</a>
                    </div>
                    <div class="school_img"><!--右边-->
                        <img src="http://schools.viplgw.cn<?php echo $data['duration']?>" alt="学校图片">
                    </div>
                </div>
            </div>
            <!--学校简介-->
            <div class="Profile">
                <p class="materials_title">
                    <i class="iconfont ico_fb">&#xe61f;</i>
                    <span>学校简介</span>
                </p>
                <div class="Profile_con">
                    <?php echo $data['cnName']?>
                </div>
            </div>
            <!--专业详情-->
            <div class="Professional_d">
                <p class="materials_title">
                    <i class="iconfont ico_fb">&#xe605;</i>
                    <span>专业详情</span>
                </p><!--如果有多个则外层循环 ProName  内层循环 pro_title-->
                <?php foreach($major as $val){?>
                <div class="ProName">
                    <div class="ProName_title"><?php echo $val['name']?></div>
                    <div class="ProName_details">
                        <?php foreach($val['content'] as $v){?>
                        <a class="pro_title" href="/schools/major/<?php echo $v['id']?>.html">
                            <p><?php echo $v['name']?></p>
                            <p><?php echo $v['title']?></p>
                        </a>
                        <?php }?>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <!--右-->
        <div class="content_right">
            <div class="right_title">
                <span>本周热门院校</span>
                <span class="change_right"><i class="iconfont icon_change">&#xe609;</i>换一批</span>
            </div>
            <div class="right_con"><!--循环 right_con_son -->
                <?php foreach($school as $k=>$v){
                    if(is_numeric($k)){?>
                <div class="right_con_son">
                    <div class="son_img">
                        <img src="http://schools.viplgw.cn<?php echo $v['image']?>" alt="学校logo">
                        <p>已有<span><?php echo $v['viewCount']+rand(10,100) ?></span>人评估</p>
                    </div>
                    <p class="son_sc_name"><?php echo $v['name']?></p>
                    <p><?php echo $v['title']?></p>
                    <p>学校排名:<?php echo $v['s_rank']?></p>
                    <p>位于:<?php echo $v['s_wz']?></p>
                    <a href="/schools/<?php echo $v['id']?>.html">查看更多信息>></a>
                </div>
                <?php }}?>
            </div>
        </div>
    </div>
</section>
<script>
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