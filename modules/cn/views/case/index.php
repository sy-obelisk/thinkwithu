
<link rel="stylesheet" href="/cn/css/studentsCase.css"/>
<script type="text/javascript" src="/cn/js/public.js"></script>
<script type="text/javascript" src="/cn/js/studentsCase.js"></script>

<section class="banner">
    <!--背景轮播-->
    <div class="bd_banner bd" style="width: 100%;overflow: hidden;">
        <ul><!--循环li-->
            <li>
                <a href="" target="_blank">
                    <img src="http://www.thinkwithu.com//files/attach/images/20170217/1487326065197811.png" alt="案例库">
                </a>
            </li>
            <li>
                <a href="" target="_blank">
                    <img src="http://www.thinkwithu.com//files/attach/images/20170217/1487326158184993.png" alt="案例库">
                </a>
            </li>
            <li>
                <a href="" target="_blank">
                    <img src="http://www.thinkwithu.com//files/attach/images/20170303/1488503883239281.jpg" alt="案例库">
                </a>
            </li>
        </ul>
    </div>
    <!--左边-->
    <div class="bannerLeft">
        <div class="b_l_content">
            <div class="b_l_title">
                <div>
                    <i class="iconfont r_w">&#xe656;</i>
                    <span>姓名</span>
                </div>
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
                        if(($v['title']!=false)&&($v['name']!=$v['title'])){?>
                    <li><!--循环li-->
                        <div><p><?php echo $v['name']?></p></div>
<!--                        <div>金融</div>-->
                        <div><?php echo $v['title']?></div>
                    </li>
                    <?php }}?>
                </ul>
            </div>
        </div>
    </div>
    <script>
        jQuery(".banner").slide({mainCell:".bd ul",effect:"leftLoop",autoPlay:true});
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
            <span>专业:</span><input type="text" class="profession">
            <span class="search_btn">搜索</span>
        </div>
        <!--案例-->
        <div class="casesContent">
            <div class="cases_d">
                <ul>
                    <?php for($i=0;$i<ceil(count($new['data'])/3);$i++){?>
                    <li><!--外层循环li  内层循环div Content_d-->
                        <?php foreach($new['data'] as $k=>$v){
                        if ($k < ($i + 1) * 3 && $k >= $i * 3) { ?>
                            <a href="" class="Content_d_cover">
                                <div class="Content_d">
                                    <div class="imgCover">
                                        <img src="http://www.thinkwithu.com/<?php echo $v['image']?>" alt="录取图片">
                                        <div class="mask">
                                            <p class="mask_name"><?php echo $v['name']?></p><!--姓名-->
                                            <p class="mask_school">录取院校: <?php echo $v['abroadSchool']?></p><!--录取院校-->
                                            <p class="mask_obj"><?php if($v['major']!=false) echo '录取专业：'.$v['major'];?> </p><!--录取专业-->
                                        </div>
                                    </div>
                                    <p class="content_p"><?php echo $v['name']?></p>
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
<!--成功案例-->
<section class="success_cases">
    <div class="success_content">
        <p class="Record_title">成功案例</p>
        <div class="service_line"></div>
        <div class="success_title hd">
            <ul>
                <li data-catid="282"><p>美国留学</p></li>
                <li data-catid="283"><p>英国留学</p></li>
                <li data-catid="284"><p>澳洲加拿大</p></li>
                <li data-catid="285"><p>香港新加坡</p></li>
                <li data-catid="286"><p>欧洲国家</p></li>
                <a href="">More>></a>
            </ul>
        </div>
        <div class="admission_c bd">
            <?php foreach($case as $val){?>
            <ul><!--外层循环ul  内层循环li admission_d-->
                <?php foreach ($val['data'] as $k => $v) {
                    if (is_numeric($k)) {
                        ?>
                        <a href="" class="admission_d_cover">
                            <li class="admission_d">
                                <div class="admission_img">
                                    <img src="http://www.smartapply.cn<?php echo $v['image'] ?>" alt="录取图片">
                                </div>
                                <p class="admission_name"><?php echo $v['cnName'] ?></p><!--姓名-->
                                <p class="admission_m"><?php echo $v['problemComplement'] ?></p><!--录取院校-->
                                <p class="admission_school">毕业院校:<span><?php echo $v['numbering'] ?></span></p><!--毕业院校-->
                                <p class="admission_hardware">硬件条件:<span><?php echo $v['sentenceNumber'] ?></span></p>
                                <!--硬件条件-->
                                <p class="admission_ad">录取院校:<span>哈佛大学</span></p><!--录取院校-->
                                <p class="admission_obj">录取专业:<span><?php echo $v['article'] ?></span></p><!--录取专业-->
                            </li>
                        </a>
                    <?php }
                } ?>
                <!--分页-->
                <div class="page_size">
                    <?php echo $val['pageStr'];?>
                </div>
            </ul>
            <?php }?>
        </div>
    </div>
    <script>
        jQuery(".success_content").slide({});
    </script>
</section>