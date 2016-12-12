<div class="footer">
    <div class="footerFont">
        <ul>
            <li>
                <ol class="olTwo">
                    <li><a href="/USA.html">美&nbsp;&nbsp;&nbsp;&nbsp;国</a></li>
                    <li><a href="/UK.html">英&nbsp;&nbsp;&nbsp;&nbsp;国</a></li>
                    <li><a href="/HK.html">香&nbsp;&nbsp;&nbsp;&nbsp;港</a></li>
                    <li><a href="/AUS.html">澳&nbsp;&nbsp;&nbsp;&nbsp;洲</a></li>
                    <li><a href="/COUNTRY.html">其&nbsp;&nbsp;&nbsp;&nbsp;他</a></li>
                </ol>
            </li>
            <li>
                <ol class="olTwo twoDiff">
                    <li><a href="/public-class.html">GMAT课堂</a></li>
                    <li><a href="/gmatsheet.html">GMAT开班查询</a></li>
                    <li><a href="/public-class.html">托福公开课</a></li>
                    <li><a href="/toeflsheet.html ">托福开班查询</a></li>
                    <li><a href="/case.html">高分案例</a></li>
                </ol>
            </li>
            <li>
                <ol class="olThree threeML">
                    <li><a href="/Undergraduate.html">本科留学</a></li>
                    <li><a href="/Postgraduate.html">硕士留学</a></li>
                    <li><a href="/Doctor.html">博士留学</a></li>
                    <li><a href="/practices.html">游学服务</a></li>

                </ol>
            </li>
            <li>
                <ol class="olThree threeDiff">
                    <li>
                        <a href="/schools.html">院校搜索</a>
                        <a href="/study-aboard/assistance.html" class="mla">留学方案</a>
                    </li>
                    <li>
                        <a href="/problem.html">每日一题</a>
                        <a href="/public-class.html" class="mla">申友课堂</a>
                    </li>
                    <li>
                        <a href="/mentor.html">Mentor&nbsp;&nbsp;</a>
                        <a href="/practices.html" class="mla">实习资源</a>
                    </li>
                    <li>
                        <a href="/question.html">留学问答</a>
                        <a href="/evaluation.html" class="mla">留学评估</a>
                    </li>

                </ol>
            </li>
            <li>
                <ol class="olTwo">
                    <li><a href="/about-thinku.html">申友介绍</a></li>
                    <li><a href="/teachers/interviews.html">名师文档</a></li>
                    <li><a href="/about-thinku.html">行业资质</a></li>
                    <li><a href="/joinus.html">加入我们</a></li>
                    <li><a href="/contactus.html">联系我们</a></li>
                </ol>
            </li>
        </ul>
    </div>
    <div style="clear: both"></div>
    <div class="footerPhone">
        <b>400-600-1123</b>
        <ul class="tm">
            <li>
                <div class="left-ewm">

                    <img src="/cn/images/index_erweima01.jpg" alt="申友GMAT"/>
                </div>
                <div class="right-font">
                    <span>申友GMAT</span>
                </div>
            </li>
            <li>
                <div class="left-ewm">

                    <img src="/cn/images/index_erweima02.jpg" alt="申友留学"/>
                </div>
                <div class="right-font">
                    <span>申友留学</span>
                </div>
            </li>
<!--            <li>-->
<!--                <div class="left-ewm">-->
<!---->
<!--                    <img src="/cn/images/index_erweima03.png" alt="托福100"/>-->
<!--                </div>-->
<!--                <div class="right-font">-->
<!--                    <span>托福100</span>-->
<!--                </div>-->
<!--            </li>-->
        </ul>
    </div>
    <div style="clear: both"></div>
</div>
<div class="smallFoot">
    <p>
        <b>友情链接：</b>
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url', 'category' => '220']);
        foreach ($data as $k => $v) {
            ?>
            <a href="<?php echo $v['url'] ?>"
               target="_blank"><?php echo $v['name'] ?><?php echo ($k + 1 != count($data)) ? '|' : '' ?></a>
            <?php
        }
        ?>
        <!--        百度商桥客服代码-->
        <script
            type="text/javascript"> var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fe59a33493ccdfd0202bca0a2225bb1c8' type='text/javascript'%3E%3C/script%3E")) </script>
    </p>
    <span>Copyright © 2015 All Right Reserved 申友教育 版权所有
        <a target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备16000003号</a>
        <span>京公网安备 11010802018491</span>
        <a target="_blank" href="/cn/index/disclaimer">免责声明</a>
    </span>
</div>

<!-----------------------------右边弹窗-------------------------->
<!--<div class="rightLayer">-->
<!--    <div class="close_icon" onclick="hideLayer()">×</div>-->
<!--    <div class="top_ul">-->
<!--        <ul>-->
<!--            <li><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">在线咨询</a></li>-->
<!--            <li><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">GMAT培训</a></li>-->
<!--            <li><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">托福培训</a></li>-->
<!--            <li><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">美国留学</a></li>-->
<!--            <li><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">英国留学</a></li>-->
<!--            <li><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">其他留学</a></li>-->
<!--            <li><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">海外咨询</a></li>-->
<!--            <li><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">留学规划</a></li>-->
<!--            <li><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">游学与实习</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--    <div class="bottom_top" onclick="scroll_Top();"></div>-->
<!--</div>-->
<!--<div class="rightLayer_two" onclick="showLayer();"></div>-->
<div id="right-wrap" class="right-wrap">
    <div class="img-wrap">
        <div class="wx-wrap">
            <div class="erm-wrap"><img src="/cn/images/erm-1.jpg" alt=""></div>
        </div>
        <div class="tel-wrap2">
            <div class="tel-text2">400-600-1123</div>
        </div>
        <img src="/cn/images/consult.png" alt="">
        <a class="online" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="></a>
        <div class="close-wrap"></div>
    </div>
</div>
<div class="rightLayer_two" ></div>
<script>
    $(".close-wrap").click(function(){
        $("#right-wrap").hide();
        $(".rightLayer_two").fadeIn();
    });
    $(".rightLayer_two").click(function(){
        $(this).hide();
        $("#right-wrap").fadeIn();
    })
</script>