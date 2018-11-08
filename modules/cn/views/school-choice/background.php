<link rel="stylesheet" href="/cn/css/schoolChoose/schoolChoose.css">
<script type="text/javascript" src="/cn/js/school/shcoolChoose.js"></script>

<section class="schoolCover">
    <div class="school_content">
        <div class="backTitle">
            <h1>留学背景测评</h1>
            <p>"我该如何合理规划申请时间？"  1分钟完成专业测评,</p>
            <p>即可获得留学评估师提供的全面专业留学评估报告与方案建议,为你指点迷津</p>
        </div>
        <form action="/cn/api/background-test" method="post" id="backForm">
            <div class="page-1 firstPage">
                <ul>
                    <li>
                        <label for="time">
                            <b>*</b><span>1.计划出国时间</span>
                        </label>
                        <input type="text" id="time" name="planTime" placeholder="如：2018年春季">
                    </li>
                    <li>
                        <label for="country">
                            <b>*</b><span>2.意向国家</span>
                        </label>
                        <input type="text" id="country" name="country">
                    </li>
                    <li>
                        <label for="major">
                            <b>*</b><span>3.意向专业</span>
                        </label>
                        <input type="text" id="major" name="major">
                    </li>
                    <li>
                        <label>
                            <b style="color: white">*</b><span>4.是否有参加过以下考试</span>
                        </label>
                        <input type="radio" name="kaoshi" id="yes" checked="">
                        <label for="yes">是</label>
                        <input type="radio" name="kaoshi" id="no">
                        <label for="no">否</label>

                        <ul>
                            <li>
                                <label for="gmat">GMAT</label>
                                <input type="text" id="gmat" name="gmat" placeholder="请填写真实分数">
                            </li>
                            <li>
                                <label for="toefl">托福</label>
                                <input type="text" id="toefl" name="toefl" placeholder="请填写真实分数">
                            </li>
                            <li>
                                <label for="ielts">雅思</label>
                                <input type="text" id="ielts" name="ielts" placeholder="请填写真实分数">
                            </li>
                        </ul>
                    </li>
                    <li>
                        <label>
                            <b>*</b><span>5.是否有软背景经历？</span>
                        </label>
                        <input type="radio" name="shixi" id="yes02" checked="">
                        <label for="yes02">是</label>
                        <input type="radio" name="shixi" id="no02">
                        <label for="no02">否</label>
                        <textarea cols="30" rows="10" name="experience" id="xuelijl" placeholder="请如实填写跟申请方向相关的软背景经历。如实习/工作经验、项目比赛经验、海外游学经验、公益活动&nbsp;、获奖经历等。"></textarea>
                    </li>
                    <li>
                        <input type="button" value="下一页" class="nextBtn" onclick="bcNextPage()">
                    </li>
                </ul>
            </div>
            <div class="page-1 secondPage"><!--第二页-->
                <ul>
                   <li>
                       <label>
                           <b>*</b><span>6.您最关心的问题</span>
                       </label>
                       <ul class="check_ul">
                           <li>
                               <input type="checkbox" name="emphases[]" id="fuwu" value="1">
                               <label for="fuwu">服务流程</label>
                           </li>
                           <li>
                               <input type="checkbox" name="emphases[]" id="chuguo" value="2">
                               <label for="chuguo">出国考试课程</label>
                           </li>
                           <li>
                               <input type="checkbox" name="emphases[]" id="xuanxiao" value="3">
                               <label for="xuanxiao">选校定位</label>
                           </li>
                           <li>
                               <input type="checkbox" name="emphases[]" id="guwen" value="4">
                               <label for="guwen">推荐顾问</label>
                           </li>
                           <li>
                               <input type="checkbox" name="emphases[]" id="buzou" value="5">
                               <label for="buzou">申请步骤</label>
                           </li>
                           <li>
                               <input type="checkbox" name="emphases[]" id="feiyong" value="6">
                               <label for="feiyong">申请费用</label>
                           </li>
                           <li>
                               <input type="checkbox" name="emphases[]" id="jiangxuej" value="7">
                               <label for="jiangxuej">奖学金</label>
                           </li>
                           <li>
                               <input type="checkbox" name="emphases[]" id="other" value="8">
                               <label for="other">其他</label>
                           </li>
                       </ul>
                   </li>
                    <li>
                        <label for="buchong"> <b style="color: white">*</b><span>7.补充你想了解的问题</span></label>
                        <textarea id="buchong" name="supplement"></textarea>
                    </li>
                    <li>
                        <label for="n-name"><b>*</b><span>8.您的姓名</span></label>
                        <input type="text" id="n-name" name="uName">
                    </li>
                    <li>
                        <label for="n-phone"><b>*</b><span>9.您的电话</span></label>
                        <input type="text" id="n-phone" name="phone">
                    </li>
                    <li>
                        <label for="n-wechat"><b>*</b><span>10.QQ/微信</span></label>
                        <input type="text" id="n-wechat" name="weChat">
                    </li>
                    <li>
                        <label><b>*</b><span>11.感兴趣的留学服务</span></label>
                        <ul class="check_ul last">
                            <li>
                                <input type="checkbox" name="interest[]" id="diy" value="1">
                                <label for="diy">半DIY</label>
                            </li>
                            <li>
                                <input type="checkbox" name="interest[]" id="jinxiu" value="2">
                                <label for="jinxiu">文书写作与精修</label>
                            </li>
                            <li>
                                <input type="checkbox" name="interest[]" id="xuejie" value="3">
                                <label for="xuejie">学长学姐选校指导</label>
                            </li>
                            <li>
                                <input type="checkbox" name="interest[]" id="quantao" value="4">
                                <label for="quantao">全套留学服务</label>
                            </li>
                            <li>
                                <input type="checkbox" name="interest[]" id="zhongjie" value="5">
                                <label for="zhongjie">已找中介</label>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <input type="button" value="上一页" class="nextBtn" onclick="bcPrevPage()">
                        <input type="button" value="提交" class="nextBtn" onclick="subBackground()">
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </form>
    </div>
</section>