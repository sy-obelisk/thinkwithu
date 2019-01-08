<link rel="stylesheet" href="/cn/schools/css/teacher.css">

<section class="teacherCover">
    <!--banner-->
    <div class="teacher_banner">
        <img src="/cn/schools/images/ranking.png" alt="">
    </div>
    <div class="teacherContent">
        <!--最新消息-->
        <div class="messageNew">
            <div class="messageLeft"><i class="iconfont">&#xe627;</i><span>最新消息</span></div>
            <div class="messageRight">
                <div class="bd">
                    <ul class="bdlist">
                        <li><p>2018-9-20 12:00 已为雷哥网会员trump安排申请中国留学顾问</p></li>
                        <li><p>2018-9-20 12:00 已为雷哥网会员trump安排申请中国留学顾问</p></li>
                        <li><p>2018-9-20 12:00 已为雷哥网会员trump安排申请中国留学顾问</p></li>
                        <li><p>2018-9-20 12:00 已为雷哥网会员trump安排申请中国留学顾问</p></li>
                        <li><p>2018-9-20 12:00 已为雷哥网会员trump安排申请中国留学顾问</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            jQuery(".messageRight").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",interTime:50,trigger:"click",vis:2});
        </script>
        <!--老师详情-->
        <div class="teacherTitle">
            <ul class="rightTitleContent">
                <a class="year">申请国家:</a>
                <!--当前这个加上类名 on-->
                <a href="" class="on">全部</a>
                <a href="" class="">美国</a>
                <a href="" class="">英国</a>
                <a href="" class="">澳洲</a>
                <a href="" class="">香港</a>
                <a href="" class="">新加坡</a>
                <a href="" class="">加拿大</a>
                <a href="" class="">欧洲</a>
                <a href="" class="">韩国</a>
                <a href="" class="">日本</a>
                <a href="" class="">中国</a>
            </ul>
        </div>
        <div class="tea_content">
            <!--左边-->
            <div class="tea_details">
                <ul>
                    <!--循环li-->
                    <?php foreach($teacher['data']['data'] as $v){?>
                    <li>
                        <!--老师图片 名字-->
                        <div class="tea_img">
                            <div>
                               <img src="http://www.smartapply.cn<?php echo $v['image']?>" alt="文服老师">
                            </div>
                            <p><?php echo $v['name']?></p>
                        </div>
                        <!--个人简介-->
                        <div class="personal">
                            <p class="Introduction"><span>个人简介</span> <a href="" class="reservation">预约咨询</a></p>
                            <p class="practicing"><?php echo $v['source']?> <?php echo $v['buyNum']?> 从业<?php echo $v['age']?>年</p>
                            <div class="personalWords"><?php echo $v['answer']?></div>
                            <div class="impression">
                                <div>
                                    <p><?php echo $v['students']?>份</p>
                                    <p>获取录取通知书</p>
                                </div>
                                <div>
                                    <p><?php echo $v['successRate']?>%</p>
                                    <p>留学申请成功率</p>
                                </div>
                                <div>
                                    <p><?php echo $v['impression']?>分</p>
                                    <p>学生印象分</p>
                                </div>
                            </div>
                        </div>
                        <!--清除浮动的 不管-->
                        <div style="clear: both"></div>
                    </li>
                    <?php }?>
                    <li>
                        <!--老师图片 名字-->
                        <div class="tea_img">
                            <div>
                                <img src="http://www.thinkwithu.com/files/attach/images/20160901/1472705745484320.jpg" alt="">
                            </div>
                            <p>Keven NI</p>
                        </div>
                        <!--个人简介-->
                        <div class="personal">
                            <p class="Introduction"><span>个人简介</span> <a href="" class="reservation">预约咨询</a></p>
                            <p class="practicing">联合创始人 全球 从业12年</p>
                            <div class="personalWords">联合创始人 全球 从业12年联合创始人 全球 从业12年联合创始人 全球 从业12年联合创始人 全球 从业12年联合创始人 全球 从业12年 联合创始人 全球 从业12年联合创始人 全球 从业12年联合创始人 全球 从业12年联合创始人 全球</div>
                            <div class="impression">
                                <div>
                                    <p>1600份</p>
                                    <p>获取录取通知书</p>
                                </div>
                                <div>
                                    <p>99.2%</p>
                                    <p>留学申请成功率</p>
                                </div>
                                <div>
                                    <p>99分</p>
                                    <p>学生印象分</p>
                                </div>
                            </div>
                        </div>
                        <!--清除浮动的 不管-->
                        <div style="clear: both"></div>
                    </li>
                </ul>
            </div>
            <!--右边-->
            <div class="rankListLeft">
                <div class="succesCase">热门顾问排行</div>
                <div class="caseContent bd">
                    <ul>
                        <!--循环li-->
                        <li>
                            <div class="caseImg">
                                <img src="http://www.thinkwithu.com/files/attach/images/20160901/1472705745484320.jpg" alt="">
                            </div>
                            <div class="caseName">
                                <p>kevin ni</p>
                                <div>联合创始人</div>
                                <a href="" target="_blank">咨询</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="rightCenter">
                    <div>
                        <a href="" target="_blank">
                            <img src="/cn/schools/images/background.png" alt="">
                            <p>背景测评</p>
                        </a>
                    </div>
                    <div>
                        <a href="" target="_blank">
                            <img src="/cn/schools/images/choose-school.png" alt="">
                            <p>选校测评</p>
                        </a>
                    </div>
                    <div>
                        <a href="" target="_blank">
                            <img src="/cn/schools/images/admission.png" alt="">
                            <p>录取几率</p>
                        </a>
                    </div>
                </div>
                <!--广告1-->
                <div class="advertising_1"></div>
                <!--广告2-->
                <div class="advertising_2"></div>
                <!--二维码-->
                <div class="qrCode"></div>
                <p class="qrCodeP">靠谱学习资源,文书资源咨询</p>
            </div>
        </div>
    </div>
</section>