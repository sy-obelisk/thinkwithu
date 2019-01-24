<link rel="stylesheet" href="/cn/schools/css/schoolDetails.css">
<script type="text/javascript" src="/cn/schools/js/theia-sticky-sidebar.min.js"></script>
<section>
    <!--banner-->
    <div class="details-banner">
        <div class="banner-school">
            <div class="bs-left">
                <img src="http://schools.smartapply.cn<?php echo $data['image']?>" alt="学校图片">
            </div>
            <div class="bs-center">
                <h4 class="ellipsis"><?php echo $data['name']?></h4>
                <p class="ellipsis"><?php echo $data['title']?></p>
                <a href="/percentages-test.html">
                    <img src="/cn/schools/images/benkeD-jilv.png" alt="图标">
                    录取几率免费评估
                </a>
            </div>
            <div class="bs-right">
                <ul>
                    <li class="ellipsis">
                        <img src="/cn/schools/images/benkeD-white01.png" alt="图标">
                        <span>所在国家：<?php echo $data['country']?></span>
                    </li>
                    <li class="ellipsis">
                        <img src="/cn/schools/images/benkeD-white02.png" alt="图标">
                        <span>所在地：<?php echo $data['answer']?></span>
                    </li>
                    <li class="ellipsis">
                        <img src="/cn/schools/images/benkeD-white03.png" alt="图标">
                        <span>学校排名：<?php echo $data['article']?></span>
                    </li>
                    <li class="ellipsis">
                        <img src="/cn/schools/images/benkeD-white04.png" alt="图标">
                        <span>学校性质：<?php echo $data['nature']?></span>
                    </li>
                    <li class="ellipsis" style="width: 100%">
                        <img src="/cn/schools/images/benkeD-white05.png" alt="图标">
                        <span>官网：</span>
                        <a href="<?php echo $data['listeningFile']?>" target="_blank"><?php echo $data['listeningFile']?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--您所在的位置-->
    <div class="banner-nav">
        <span>您所在的位置 : </span><a href="/"> 首页></a><label<?php echo $data['name']?></label>
    </div>
    <!--内容-->
    <div class="content wrapper">
        <!--内容左边导航-->
        <div class="content-left sidebar">
            <div class="apply-nav theiaStickySidebar">
                <h4>
                    <div class="degree"><img src="/cn/schools/images/school-ssicon.png" alt="图标"></div>
                    <span>硕士申请</span>
                </h4>
                <ul>
                    <li>
                        <a href="javascript:void(0);" onclick="showSecond_1(this)">
                            <span>学校简介</span>
                        </a>
                    </li>
                    <li class="on">
                        <a href="javascript:void(0);" onclick="showSecond(this)">
                            <span class="blue-s">专业设置</span>
                            <div class="num-tot"><?php echo count($major)?></div>
                            <span class="grey-jianT"></span>
                        </a>
                        <?php foreach($major as $key=>$val){?>
                        <ul>
                            <li>
                                <a href="javascript:void(0);" onclick="showSecond(this)">
                                    <span class="blue-s"><?php echo $val['name']?></span>
                                    <div class="num-tot"><?php echo count($val['content'])?></div>
                                    <span class="grey-jianT"></span>
                                </a>
                                <ul>
                                    <?php foreach($val['content'] as $k=>$v){?>
                                    <li class="thridLi" data-majorid="<?php echo $v['id']?>">
                                        <a href="javascript:void(0);" onclick="majorDetail(this,<?php echo $v['id']?>)">
                                            <span><?php echo $k+1?></span>
                                              <?php echo $v['name']?>
                                        </a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </li>
                        </ul>
                        <?php }?>
                    </li>
                </ul>
                <div class="bottom-zixun">
                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线咨询老师</a>
                </div>
            </div>

        </div>
        <!--内容右边-->
        <div class="content-right follow">
            <div class="details-jianjie" id="school-intro">
                <!--学校简介-->
                <h4 class="s-common-t">学校简介</h4>
                <div class="jianjie-left">
                    <?php echo $data['cnName']?>
                </div>
                <div class="jianjie-right">
                    <img src="http://schools.smartapply.cn<?php echo $data['duration']?>" alt="学校图片">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="school-details">
                <?php foreach($major as $val){?>
                <div class="new-bb-pb">
                    <h2>
                        <img src="/cn/schools/images/line-r.png" alt="标题图">
                        <span><?php echo $val['name']?></span>
                        <img src="/cn/schools/images/line.png" alt="标题图">
                    </h2>
                    <!--具体专业  循环 major-show-new id和右侧下啦选项的id保持一致 方便点击定位到对应位置-->
                    <?php foreach($val['content'] as $v){?>
                    <div class="major-show-new" id="<?php echo $v['id']?>">
                        <h4 class="title_h4"><?php echo $v['name']?></h4>
                        <p class="title_p">（<?php echo $v['title']?>）</p>
                        <ul class="project">
                            <li>
                                <span class="time">项目名称 ：</span><?php echo $v['name']?></li>
                            <li>
                                <span class="time">项目网址 ：</span>
                                <a href="<?php echo $v['website']?>" target="_blank">
                                   <?php echo $v['website']?>
                                </a>
                            </li>
<!--                            <li>-->
<!--                                <span class="time">截止日期 ：</span>--><?php //echo $v['endTime']!=false?$v['endTime']:'数据正在更新中，请前往“项目网址”查看~'?><!--</li>-->
                            <li>
                                <span class="time">基本申请要求 : </span>
                                <table class="project-table">
                                    <tbody>
                                    <tr class="project-tr">
                                        <td>GPA ：</td>
                                        <td><?php echo $v['gpa']!=false?$v['gpa']:'数据正在更新中，请前往“项目网址”查看~'?></td>

                                        <td>GRE ：</td>
                                        <td><?php echo $v['gre']!=false?$v['gre']:'数据正在更新中，请前往“项目网址”查看~'?></td>
                                    </tr>
                                    <tr class="project-tr">
                                        <td>雅思 ：</td>
                                        <td><?php echo $v['ielts']!=false?$v['ielts']:'数据正在更新中，请前往“项目网址”查看~'?></td>
                                        <td>学位 ：</td>
                                        <td><?php echo $v['degree']!=false?$v['degree']:'数据正在更新中，请前往“项目网址”查看~'?></td>

                                    </tr>
                                    <tr class="project-tr">
                                        <td>托福 ：</td>
                                        <td><?php echo $v['toefl']!=false?$v['toefl']:'数据正在更新中，请前往“项目网址”查看~'?></td>
                                        <td>工作年限 ：</td>
                                        <td><?php echo $v['years']==false?'数据正在更新中，请前往“项目网址”查看~':$v['years']?></td>

                                    </tr>
                                    <tr class="project-tr">
                                        <td>GMAT ：</td>
                                        <td><?php echo $v['gmat']!=false?$v['gmat']:'数据正在更新中，请前往“项目网址”查看~'?></td>

                                        <td>学费 ：</td>
                                        <td><?php echo $v['tuition']!=false?$v['tuition']:'数据正在更新中，请前往“项目网址”查看~'?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <span class="time">专业介绍 : </span>
                                <div>
                                    <?php echo $v['setup']?>
                                </div>
                            </li>
                        </ul>


                    </div>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>
<script>
    $(function () {
        //右侧边栏固定跟随左边内容滚动
        $('.follow,.sidebar').theiaStickySidebar({
                additionalMarginTop:60
         }
        );
    });
    //第一层点击事件
    function showSecond_1(o) {
        if($(o).parent("li").hasClass("on")){
            $(o).siblings("ul").slideUp();
            $(o).parent().next().removeClass("on");
        }else{
            $(o).parent().addClass("span-on");
            $(o).parent().next().removeClass("on");
            $(o).attr('href','#school-intro');
        }
    }
    //第二层点击事件
    function showSecond(o) {
        $(o).parent().prev().removeClass("span-on");
        if($(o).parent("li").hasClass("on")){
            $(o).siblings("ul").slideUp();
            $(o).parent("li").removeClass("on").siblings("li").removeClass("on");
        }else{
            $(o).siblings("ul").slideDown().parent("li").siblings("li").find(">a").siblings("ul").slideUp();
            $(o).parent("li").addClass("on").siblings("li").removeClass("on");
        }
    }
    //第三层点击滚动到对应位置事件
    function majorDetail(o,majorId){
        // $('.content-left').addClass('apply-fiexd');

        $(o).parent("li").addClass("on");
        $(o).parent("li").siblings().removeClass("on");
        $(o).parent("li").parent("ul").parent("li").siblings("li").find("li").removeClass("on");
        $("html,body").animate({
            scrollTop:($("#"+majorId)[0].offsetTop+380)+"px"
        });
    }
</script>