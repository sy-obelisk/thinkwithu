<link rel="stylesheet" href="/cn/schools/css/majorAnalysis.css">
<script type="text/javascript" src="/cn/schools/js/majorAnalysis.js"></script>

<section class="analysisCover">
    <!--左边-->
    <div class="analysisLeft">
        <div class="proTitle">
            <div style="display: inline-block;font-size: 16px;margin-top: 4px">专业方向:</div>
            <div class="proTitleUlCover hd">
               <ul class="proTitleUl">
                   <!--循环li  个数太多会自动换行-->
                   <a <?php echo $catId==433?'class="on"':''?> href="/major-analysis/433/1.html">商科</a>
                   <a <?php echo $catId==434?'class="on"':''?> href="/major-analysis/434/1.html">理工科</a>
                   <a <?php echo $catId==435?'class="on"':''?> href="/major-analysis/435/1.html">文科</a>
                   <a <?php echo $catId==436?'class="on"':''?> href="/major-analysis/436/1.html">艺术与设计</a>
               </ul>
            </div>
        </div>
        <div class="proContent bd">
            <!--外层循环ul  内层循环li-->
            <ul>
                <?php foreach ($data['data'] as $v) { ?>
                    <li>
                        <div class="bdLeft">
                            <a href="/major-detail/<?php echo $v['id']?>.html">
                                <p><b class="flod"><?php echo $v['name'] ?></b><span class="litter">(<?php echo $v['title'] ?>)</span></p>
                            </a>
                            <div class="bdWords"><?php echo $v['introduce'] ?></div>
                        </div>
                        <div class="bdRight">
                            <a href="" target="_blank">
                                <img src="/cn/schools/images/sercah_shcool.png" alt="" style="width: 20px"><span class="color-x">相关院校</span>
                            </a>
                            <?php $school = explode(',', $v['school']);
                            foreach ($school as $key=>$val) {
                                if($key<2){
                                ?>
                                <p><?php echo $val ?></p>
                            <?php } }?>
                        </div>
                    </li>
                <?php } ?>

                <!--分页-->
                <div class="page pagetop">
                    <ul id="page_s">
                        <?php $n=ceil($data['count']/10);
                        for($i=1;$i<$n+1;$i++){
                        ?>
                        <a class="<?php echo $data['page']==$i?'on':'iPage'?>" href="/major-analysis/<?php echo $catId?>/<?php echo $i?>.html"><?php echo $i?></a>
                        <?php }?>
<!--                        <a class="iPage"  href="">2</a>-->
                    </ul>
                </div>
            </ul>
        </div>
    </div>
    <!--右边-->
    <div class="analysisRight">
        <div class="RightTitle">帮我推荐好顾问</div>
        <div class="RightSubmit">
            <p class="m20">你的姓名:</p>
            <input type="text" class="userName w80" name="name"/>

            <p class="m10">意向留学国家:</p>
            <input type="text" class="country w80" name="extendValue[]"/>

            <p class="m10">个人情况(如就读学校,年级,平均成绩等):</p>
            <input type="text" class="situation w80" name="extendValue[]"/>

            <p class="m10">您的电话<b>*</b>:</p>
            <input type="text" class="phone w80" name="extendValue[]" id="tel"/>

            <input type="text" class="code code_marjo" name="code">
            <button class="getCode" onclick="getCode(this)">获取验证码</button>
            <div class="sure" onclick="recommed()">提交</div>
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
                <a href="" target="_blank">在线咨询</a>
            </div>
        </div>
    </div>
</section>

>