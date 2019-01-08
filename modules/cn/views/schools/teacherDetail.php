<link rel="stylesheet" href="/cn/schools/css/teacherDetails.css">


<section>
    <!--顶部-->
    <div class="topPurple">
        <div class="container">
            <!--左边-->
            <div class="teacher-left">
                <div class="teacherImg">
                    <img src="http://www.smartapply.cn/files/attach/images/20170817/1502931744512388.png" alt="老师头像">
                </div>
                <div class="teacherInfo">
                    <p>Kevin Ni<span>联合创始人</span></p>
                    <p>全球;从业12年</p>
                    <a href="" target="_blank">预约咨询</a>
                </div>
            </div>
            <!--右边-->
            <div class="teacher-right">
                <div class="commonCircle cir-back01">
                    <div>
                        <h4>1649份</h4>
                        <p>获取录取通知书</p>
                    </div>
                </div>
                <div class="commonCircle cir-back02">
                    <div>
                        <h4>99.2%</h4>
                        <p>留学申请成功率</p>
                    </div>
                </div>
                <div class="commonCircle cir-back03">
                    <div>
                        <h4>99分</h4>
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
                <div data-ids="hisAnswer" class="">TA的回答 <span class="trans">（2）</span></div>
            </div>
            <!--个人简介-->
            <div class="individual" id="individual">
                <h2>个人简介</h2>
                <div>
                    <!--整个内容-->
                    <p> </p><p>雷哥网联合创始人，留学规划与英语教育名家，GMAT/TOEFL名师。</p><p>联合创始人，中国留学咨询行业领军人物。上海交大EMBA，连续多年亲自深入全球名企名校走访交流，如谷歌、苹果、FACEBOOK，哈佛、沃顿、斯坦福。多年研究英语系国家名校留学，尤其擅长商科申请规划。指导的学生多人获得美英著名商学院录取，如Stanford、MIT、Yale、哥大、JHU、剑桥、LSE、帝国理工等。对文书创作颇有建树，研究名校文书上千篇，洞悉名校录取官喜好和录取倾向。</p><p>留学考试学术成果：“GMAT逻辑靶向图”、“GMAT逻辑本质论”、“GMAT语法优先原则”、“GMAT必要性阅读法”、“新托福听力阈值训练法”、“新托福万能口语法”、“雅思西方批判式作文法”等，是留学英语考试的集大成者。在国内首创“新托福四化一中心作文法”。研发和出版多本留学英语培训教材，并不断优化教学方法，专著有《Influence--雷哥GMAT逻辑》、 《雅思写作攻略》、《申友GMAT高分讲义》、 《GMAT真题名师精讲》等。</p><p><br></p><p></p>
                </div>
            </div>
            <!--近期服务案例-->
            <div class="ServiceCase" id="ServiceCase">
                <h2>近期服务案例</h2>
                <ul>
                    <li>
                        <div class="grey-bot">
                            <div class="commonSee">
                                <!--整个内容-->
                                <p>留学考试学术成果：</p><p>“GMAT逻辑靶向图”、“GMAT逻辑本质论”、“GMAT语法优先原则”、“GMAT必要性阅读法”、“新托福听力阈值训练法”、“新托福万能口语法”、“雅思西方批判式作文法”等，是留学英语考试的集大成者。</p><p>在国内首创“新托福四化一中心作文法”。研发和出版多本留学英语培训教材，并不断优化教学方法，专著有《Influence--雷哥GMAT逻辑》、 《雅思写作攻略》、《申友GMAT高分讲义》、 《GMAT真题名师精讲》等。</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--TA的回答-->
            <div class="hisAnswer" id="hisAnswer">
                <h2>TA的回答</h2>
                <ul>

                </ul>
            </div>
        </div>
        <!--右边-->
        <div class="consultants-right">
            <div class="RightTitle">可能感兴趣的大学</div>
            <ul class="consuBot">
                <!--循环li-->
                <li>
                    <div class="numDiv">1</div>
                    <a href="">伦敦商学院（LBS）</a>
                    <span>排名 1</span>
                    <p class="c_kNum">
                        <img src="/cn/schools/images/sercah_shcool.png" alt="查看图标">
                        <span>553人查看</span>
                    </p>
                </li>
                <li>
                    <div class="numDiv">1</div>
                    <a href="">伦敦商学院（LBS）</a>
                    <span>排名 1</span>
                    <p class="c_kNum">
                        <img src="/cn/schools/images/sercah_shcool.png" alt="查看图标">
                        <span>553人查看</span>
                    </p>
                </li>
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