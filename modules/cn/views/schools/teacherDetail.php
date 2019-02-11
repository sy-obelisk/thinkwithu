<link rel="stylesheet" href="/cn/schools/css/teacherDetails.css">


<section>
    <!--顶部-->
    <div class="topPurple">
        <div class="container">
            <!--左边-->
            <div class="teacher-left">
                <div class="teacherImg">
                    <img src="http://liuxue.viplgw.cn<?php echo $data[0]['image']?>" alt="老师头像">
                </div>
                <div class="teacherInfo">
                    <p><?php echo $data[0]['name']?><span><?php echo $data[0]['A']?></span></p>
                    <p><?php echo $data[0]['alternatives']?>;从业<?php echo $data[0]['article']?>年</p>
                    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">预约咨询</a>
                </div>
            </div>
            <!--右边-->
            <div class="teacher-right">
                <div class="commonCircle cir-back01">
                    <div>
                        <h4><?php echo $data[0]['listeningFile']?>份</h4>
                        <p>获取录取通知书</p>
                    </div>
                </div>
                <div class="commonCircle cir-back02">
                    <div>
                        <h4><?php echo $data[0]['cnName']?>%</h4>
                        <p>留学申请成功率</p>
                    </div>
                </div>
                <div class="commonCircle cir-back03">
                    <div>
                        <h4><?php echo $data[0]['numbering']?>分</h4>
                        <p>学生印象评分</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--详情-->
    <div class="content">
        <!--左边-->
        <div class="consultants-left">
            <!--导航侧边栏定位-->
            <div class="consultants-nav">
                <div class="on" data-ids="individual">顾问介绍</div>
                <div data-ids="hisAnswer" class="">TA的回答 <span class="trans">（0）</span></div>
            </div>
            <!--个人简介-->
            <div class="individual" id="individual">
                <h2>个人简介</h2>
                <div>
                    <!--整个内容-->
                    <p><?php echo $data[0]['answer']?></p>
                </div>
            </div>
            <!--近期服务案例-->
            <?php if ($caseList != false) {?>
            <div class="ServiceCase" id="ServiceCase">
                <h2>近期服务案例</h2>
                <ul>
                    <li>
                        <div class="grey-bot">
                            <div class="commonSee">
                                <!--整个内容-->
                                <?php foreach ($caseList as $v) {
                                    ?>
                                    <p><?php echo $v[0]['cnName'] ?>,<?php echo $v[0]['numbering'] ?>,<?php echo $v[0]['sentenceNumber'] ?></p>
                                    <p>申请方向：<?php echo $v[0]['article'] ?>,录取结果：<?php echo $v[0]['problemComplement'] ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <?php }?>
            <!--TA的回答-->
            <div class="hisAnswer" id="hisAnswer">
                <h2>TA的回答</h2>
                <ul>
                    <?php if ($answer) {
                        foreach ($answer as $v) { ?>
                            <h4><?php echo $v['question'] ?></h4>
                            <p><?php echo $v['content'] ?></p>
                        <?php }
                    } ?>
                </ul>
            </div>
        </div>
        <!--右边-->
        <div class="consultants-right">
            <div class="RightTitle">可能感兴趣的大学</div>
            <ul class="consuBot">
                <!--循环li-->
                <?php foreach($school as $k=>$v){
                    if ($k < 8) {
                        ?>
                        <li>
                            <div class="numDiv"><?php echo $k + 1 ?></div>
                            <a href="/schools/<?php echo $v['id'] ?>.html"><?php echo $v['name'] ?>（<?php echo $v['title'] ?>）</a>
                            <span>排名 <?php echo $v['article'] ?></span>
                            <p class="c_kNum">
                                <img src="/cn/schools/images/sercah_shcool.png" alt="查看图标">
                                <span><?php echo $v['viewCount'] ?>人查看</span>
                            </p>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
        <!--清浮动-->
        <div style="clear: both"></div>
    </div>
</section>
<script>
    $('.consultants-nav div').click(function () {
        var ids=$(this).attr("data-ids");
        var objTop=$("#"+ids)[0].offsetTop+200;
        $(this).addClass("on").siblings("div").removeClass("on");
        $("html,body").animate({scrollTop:objTop + "px"}, 500);
    })
</script>