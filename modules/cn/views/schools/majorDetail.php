<link rel="stylesheet" href="/cn/schools/css/majorDetails.css">
<script type="text/javascript" src="/cn/schools/js/majorAnalysis.js"></script>

<div class="majorDetailsTitle">
    <a href="">专业解析首页 > </a><span class="titleName"><?php echo $name?></span>
</div>
<section class="majorDetails">
    <!--左边-->
    <div class="analysisLeft">
        <div class="leftTitle">
            <p><?php echo $name?><span>(<?php echo $title?>)</span></p>
        </div>
        <div class="leftContent">
            <!--专业详情-->
            <div class="proDetails">
                <p class="proTitle"><b>|</b> 专业详情</p>
                <div class="proCenter">
                    <div class="dis_flex">
                        <div class="wd_1">开始学位</div>
                        <div class="wd_2">
                           <?php echo $answer?>
                        </div>
                    </div>
                    <div class="dis_flex">
                        <div class="wd_1">就业方向</div>
                        <div class="wd_2">
                            <?php echo $article?>
                        </div>
                    </div>
                    <div class="dis_flex">
                        <div class="wd_1">从事职业</div>
                        <div class="wd_2">
                            <?php echo $alternatives?>
                        </div>
                    </div>
<!--                    <div class="dis_flex">-->
<!--                        <div class="wd_1">相关证书</div>-->
<!--                        <div class="wd_2">-->
<!--                            MasterMasterMaster-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="dis_flex">
                        <div class="wd_1">相关排名</div>
                        <div class="wd_2">
                            <?php echo $cnName?>
                        </div>
                    </div>
                </div>
            </div>
            <!--专业解释-->
            <div class="explanation">
                <p class="proTitle"><b>|</b> 专业解释</p>
                <div class="expContent">
                    <?php echo $numbering?>
                </div>
            </div>
            <!--适合申请人背景-->
            <div class="applicant">
                <p class="proTitle"><b>|</b> 适合申请人背景</p>
                <div class="expContent">
                    <?php echo $sentenceNumber?>
                </div>
            </div>
            <!--相关院校-->
            <div class="related">
                <p class="proTitle"><b>|</b> 相关院校</p>
                <ul class="relatedName">
                    <?php $school = explode(',', $duration);
                    foreach ($school as $v) {
                        ?>
                        <li><?php echo $v ?></li>
                    <?php } ?>
                </ul>
            </div>
            <!--专业开设课程及课程方向-->
            <div class="courseDirection">
                <p class="proTitle"><b>|</b> 专业开设课程及课程方向</p>
                <!--课程方向-->
                <div class="flex_div">
                    <div class="wd_3">课程方向</div>
                    <div class="dotton"></div>
                </div>
                <div>
                    <?php echo $problemComplement?>
                </div>
                <!--专业开设课程-->
                <div class="flex_div">
                    <div class="wd_3">专业开设课程</div>
                    <div class="dotton">
                    </div>
                </div>
                <ul class="relatedName">
                    <?php $n = explode(',', $trainer);
                    foreach ($n as $v) {
                        ?>
                        <li><?php echo $v ?></li>
                    <?php } ?>
                </ul>
            </div>
            <!--在线咨询-->
            <a class="zx_online" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank"><img src="/cn/schools/images/zx_icon.png" alt=""><span>在线咨询</span></a>
        </div>
    </div>
    <!--右边-->
    <div class="analysisRight">
        <div class="RightTitle">帮我推荐好顾问</div>
        <div class="RightSubmit">
            <p class="m20">你的姓名:</p>
            <input type="text" class="userName w80" name="extendValue[]"/>

            <p class="m10">意向留学国家:</p>
            <input type="text" class="country w80" name="extendValue[]"/>

            <p class="m10">个人情况(如就读学校,年级,平均成绩等):</p>
            <input type="text" class="situation w80" name="extendValue[]"/>

            <p class="m10">您的电话<b>*</b>:</p>
            <input type="text" class="phone w80" name="extendValue[]" id="tel"/>

            <input type="text" class="code_marjo" name="code">
            <button class="getCode" onclick="getCode(this)">获取验证码</button>
            <div class="sure" onclick="recommed()">提交</div>
        </div>
        <div class="rightCenter">
            <div>
                <a href="/background-test.html" target="_blank">
                    <img src="/cn/schools/images/background.png" alt="">
                    <p>背景测评</p>
                </a>
            </div>
            <div>
                <a href="/choice-test.html" target="_blank">
                    <img src="/cn/schools/images/choose-school.png" alt="">
                    <p>选校测评</p>
                </a>
            </div>
            <div>
                <a href="/percentages-test.html" target="_blank">
                    <img src="/cn/schools/images/admission.png" alt="">
                    <p>录取几率</p>
                </a>
            </div>
        </div>
        <div class="RightTitle">如何寻找合适的中介公司？</div>
        <div class="intermediary">
            <ul>
                <li>
                    <img src="/cn/schools/images/public-praise.png" alt="">
                    <b>看口碑</b>
                    <span>看学生真实点评</span>
                </li>
                <li>
                    <img src="/cn/schools/images/plan.png" alt="">
                    <b>比方案</b>
                    <span>比三套设计方案</span>
                </li>
                <li>
                    <img src="/cn/schools/images/quote.png" alt="">
                    <b>比报价</b>
                    <span>比三家公司报价</span>
                </li>
                <li>
                    <img src="/cn/schools/images/guarantee.png" alt="">
                    <b>比保障</b>
                    <span>比服务和保障</span>
                </li>
            </ul>
            <div class="lineOn">
                <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线咨询</a>
            </div>
        </div>
    </div>
</section>
