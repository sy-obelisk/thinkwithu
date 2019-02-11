<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="GMAT高频词汇,GRE高频词汇,托福高频词汇,雅思高频词汇,背单词,在线背单词,英语单词,出国留学单词,GRE单词,GMAT单词,托福单词,雅思单词,英语词汇">
    <meta name="description" content="雷哥单词，一款只为出国留学考生准备的应试单词APP！仅筛选GMAT/GRE/托福/雅思核心必考的中高频词汇，通过音、形、意、例句、真题例题，学习和背诵单词，单词记忆合理、学以致用。考高分有多难？背单词有多难？雷哥单词都懂你！
">
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
    <!-- <meta name="description" content=""> -->
    <!-- 让IE浏览器用最高级内核渲染页面 还有用 Chrome 框架的页面用webkit 内核
    <!-- ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <!-- IOS6全屏 Chrome高版本全屏-->
    <!-- ================================================== -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!-- 让360双核浏览器用webkit内核渲染页面-->
    <!-- ================================================== -->
    <meta name="renderer" content="webkit">
    <title>雷哥单词APP，一款只为出国留学考生准备的应试词汇APP！</title>
    <!-- Mobile Specific Metas
   ================================================== -->
    <!-- !!!注意 minimal-ui 是IOS7.1的新属性，最小化浏览器UI -->
    <link rel="stylesheet" href="/cn/words/css/globle.css">
    <link rel="stylesheet" href="/cn/words/css/animate.min.css">
    <link rel="stylesheet" href="/cn/words/css/index.css">
<!--    <link rel="stylesheet" href="http://www.viplgw.cn/cn/css/public.css?v=1.1"/>-->
    <link rel="stylesheet" href="/cn/css/public.css?v=1.1"/>
    <link rel="stylesheet" href="/cn/gre/css/reset.css">
    <link rel="stylesheet" href="/cn/css/header.css"/>
    <link rel="stylesheet" href="/cn/css/footer.css"/>
    <link rel="stylesheet" href="/cn/gre/css/index.css">
    <link rel="shortcut icon" href="http://www.thinkwithu.com/favicon.ico"/>

    <script src="/cn/words/js/jquery-1.12.2.min.js"></script>
    <script src="/cn/gre/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/words/js/num.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>

</head>
<body>


<!--第一部分-->
<div class="new-addOne">
    <div class="anne-flex a-title">
        <span>此款单词神器，已收录&nbsp;&nbsp;</span><div id="dataNums"></div><span>&nbsp;&nbsp;词条，仅供留学界大佬免费使用，扫一扫下载</span>
        <ul class="anne-flex">
            <li>
                <img src="http://gmat.viplgw.cn/app/web_core/styles/images/words-ios.png" alt="苹果版二维码" width="95" height="95"/>
                <b>iOS版</b>
            </li>
            <li>
                <img src="http://gre.viplgw.cn/cn/images/word_android.png" alt="app安卓版二维码图片" width="95" height="95"/>
                <b>Android版</b>
            </li>
        </ul>
    </div>
    <div class="a-bigTitle">
        <img src="/cn/words/images/word-logo.png" alt="图标" width="61" height="61"/>
        <span>雷哥单词</span>
    </div>
    <div class="a-search">
        <div class="a-s-top">
            <input type="text" placeholder="在此输入要翻译的单词或文字" onkeyup="javascript:enterSearch(event)"/>
            <input type="button" value="翻译" onclick="searchWords()"/>
            <!--下拉展示-->
            <div class="words-xiala">
                <ul>

                </ul>
            </div>
        </div>
        <div class="a-s-bot">
            丰富词汇资源、详细词汇释义例题尽在雷哥单词，包含GMAT、GRE、托福、雅思、SAT、海外旅游、学习、生活等词包
        </div>
    </div>
</div>
<!--搜索框-->
<!--<div class="w_twoSort">-->
<!--    <div class="w_search anne-flex">-->
<!--        <div class="w_s_left anne-flex">-->
<!--            <input type="text" placeholder="请输入你要查询的单词或中文" onkeyup="javascript:enterSearch(event)"/>-->
<!--            <div class="icon anne-flex" onclick="searchWords()">-->
<!--                <img src="/cn/images/word-search.png" alt="搜索图标"/>-->
<!--            </div>-->
<!--            <!--下拉展示-->
<!--            <div class="words-xiala">-->
<!--                <ul>-->
<!---->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="w_s_right">-->
<!--            快捷获取你想知道的单词信息~-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--搜索出来的内容显示-->
<div class="w_threeSort anne-flex">
    <div class="w_t_left ">
        <img src="/cn/words/images/word-iphoneSearch.png" alt="图片"/>
    </div>
    <div class="w_t_right ">
        <h4>hypothesis  假设</h4>
        <span>
             <span class="small_font">英  [haɪ'pɒθɪsɪs]</span>
             <span class="volumeIcon" onclick="playWordAudio(this)"></span>
             <audio src="<?php echo $words['uk_audio']?>"></audio>
         </span>
        <span>
             <span class="small_font ml">美 [haɪ'pɑθəsɪs]</span>
             <span class="volumeIcon" onclick="playWordAudio(this)"></span>
             <audio src="<?php echo $words['us_audio']?>"></audio>
         </span>
        <p class="small_font">词根: thesis =to put,place,表示"放,引申为论文,观点"</p>
        <h5>短语</h5>
        <ul>
            <li>1  null hypothesis   [零假设,虚假设,解消,假设]</li>
            <li>2  alternative hypothesis   [择一假设；备择假设]</li>
            <li>3  composite hypothesis   [复合假设]</li>
            <li>4  hypothesis testing   [假设检验；假设检定]</li>
        </ul>
        <h5>例句</h5>
        <ul class="example">
            <li>
                <p>1  His new <b>hypothesis</b> gives a possible reason for the change of the weather.</p>
                <span>他的新假说提出气象变化的一个可能的原因。</span>
            </li>
            <li>
                <p>2  Her study is based on the <b>hypothesis</b> that language simplification is possible.</p>
                <span>她的研究基于语言可以简化这样一个假说.</span>
            </li>
            <li>
                <p>3  We have proved the <b>hypothesis</b>./p>
                    <span>我们已经证明了这种假设.</span>
            </li>
            <li>
                <p>4  Her <b>hypothesis</b> concerns the role of electromagnetic radiation.</p>
                <span>她的假说涉及到电磁辐射的作用.</span>
            </li>
        </ul>
    </div>
</div>
<!--单词例题展示-->
<div class="words-example">
    <h4>例题</h4>
    <div class="words-art">

    </div>
    <div class="words-question">
        <p>Healthy lungs produce a natural antibiotic that protects them from infection by routinely killing harmful bacteria on airway surfaces. People with cystic fibroses, however, are unable to fight off such bacteria, even though their lungs produce normal amounts of the antibiotic. Since the fluid on airway surfaces in the lungs of people with cystic fibrosis bas an abnormally high salt concentration, scientists hypothesize that in high salt environments the antibiotic becomes ineffective at killing harmful bacteria.</p><p>Which of the following, if it were obtained as an experimental result, would most decisively undermine the scientists’ <span class="words-bold">hypothesis</span>?</p>
    </div>
    <div class="words-options">
        <ul>
            <li>
                <input type="radio" name="options" id="op01"/>
                <label for="op01"><b>A</b> Healthy lungs in which the salt concentration of the airway-surface fluid has been substantially increased are able to reestablish their normal
                    salt concentration within a relatively short period of time.</label>
            </li>
            <li>
                <input type="radio" name="options" id="op02"/>
                <label for="op02"><b>B</b> The antibiotic produced by the lungs is effective at killing harmful bacteria even when salt concentrations are below levels typical of healthy lungs.</label>
            </li>
            <li>
                <input type="radio" name="options" id="op03"/>
                <label for="op03"><b>C</b> The salt concentration of the airway-surface fluid in the lungs of people who suffer from cystic fibrosis tends to return to its former high levels after having been reduced to levels typical of healthy lungs.</label>
            </li>
            <li>
                <input type="radio" name="options" id="op04"/>
                <label for="op04"><b>D</b> The lungs of people who suffer from cystic fibrosis are unable to fight off harmful bacteria even when the salt concentration is reduced to levels typical of healthy lungs.</label>
            </li>
            <li>
                <input type="radio" name="options" id="op05"/>
                <label for="op05"><b>E</b> The salt concentration in the airway-surface fluid of people whose lungs produce lower-than-average amounts of the antibiotic is generally much lower than that typical of healthy lungs.</label>
            </li>
        </ul>
        <input type="hidden" value="D" id="trueAnswer"/>
    </div>
</div>

<div class="w_oneSort">
    <div class="win_o_box anne-flex">
        <div class="win_o_left">
            <!--            <div class="left_one anne-flex">-->
            <!--                <div class="l_l_logo">-->
            <!--                    <img src="/cn/words/images/word-logo.png" alt="图标"/>-->
            <!--                </div>-->
            <!--                <div class="l_c_font">-->
            <!--                    <ul>-->
            <!--                        <li><a href="javascript:void(0);">GMAT高频词汇</a></li>-->
            <!--                        <li><a href="javascript:void(0);">GRE高频词汇</a></li>-->
            <!--                        <li><a href="javascript:void(0);">托福高频词汇</a></li>-->
            <!--                        <li><a href="javascript:void(0);">雅思高频词汇</a></li>-->
            <!--                    </ul>-->
            <!--                </div>-->
            <!--               <div class="l_r_null"></div>-->
            <!--            </div>-->
            <div class="left_two">GRE单词犹如泰山压顶？如何7天搞定托福雅思核心词汇？GMAT备考有多难？
                <br>雷哥单词，一款只为出国留学考生准备的应试单词APP！
                <br>考高分有多难？背单词有多难？雷哥单词都懂你！
            </div>
            <div class="left_three">
                <ul>
                    <li class="anne-flex">
                        <img src="/cn/words/images/word-gou.png" alt="图标"/>
                        <p>仅筛选GMAT/GRE/托福/雅思核心必考的中高频词汇</p>
                    </li>
                    <li class="anne-flex">
                        <img src="/cn/words/images/word-gou.png" alt="图标"/>
                        <p>通过音、形、意、例句、真题例题，学习和背诵单词，
                            <br>单词记忆合理、学以致用</p>
                    </li>
                    <li class="anne-flex">
                        <img src="/cn/words/images/word-gou.png" alt="图标"/>
                        <p>高效小组刷词团周周开团，让你背单词更有趣</p>
                    </li>
                </ul>
            </div>
            <div class="left_four">
                <ul class="anne-flex">
                    <li>
                        <div>
                            <img src="http://gmat.viplgw.cn/app/web_core/styles/images/words-ios.png" alt="iOS单词app下载二维码"/>
                        </div>
                        <p>雷哥单词iOS下载</p>
                    </li>
                    <li>
                        <div>
                            <img src="http://gre.viplgw.cn/cn/images/word_android.png" alt="app二维码图片"/>
                        </div>
                        <p>雷哥单词Android下载</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="win_o_right">
            <!--            <div class="right_top_num anne-flex">-->
            <!--                <span>此款单词神器，已收录&nbsp;&nbsp;</span><div id="dataNums"></div><span>&nbsp;&nbsp;词条</span>-->
            <!--            </div>-->
            <!--            <p>仅供留学界大佬免费使用</p>-->
            <div class="right_bot_img">
                <div>
                    <ul class="anne-flex">
                        <li><b>456</b><span>个</span></li>
                        <li><b>1234</b><span>个</span></li>
                        <input type="hidden" value="<?php echo $totalCount;?>" id ="totalCount"/>
                    </ul>
                </div>
                <img src="/cn/words/images/word-iphones.png" alt="iphone图标" height="498"/>
            </div>
        </div>
    </div>
</div>
<!--精选考试高频词汇-->
<div class="w_fourSort">
    <div class="w_f_top animated">
        <div class="common_green anne-flex">
            <img src="/cn/words/images/word-gaop01.png" alt="图标"/>
        </div>
        <h2>精选考试高频词汇</h2>
        <p>精选GMAT/GRE/托福/雅思核心必考的中高频词汇</p>
    </div>
    <div class="w_f_bot anne-flex">
        <div class="w_f_b_left com_li">
            <ul>
                <li class="anne-flex animated">
                    <div class="f_b_l_left">
                        <h4>三大个性化记忆模式</h4>
                        <p>艾宾浩斯记忆法（科学记忆）、复习记忆法（复习+记新词）、快速记忆法（记新词）</p>
                    </div>
                    <div class="f_b_l_right">
                        <div class="common_green anne-flex">
                            <span></span>
                        </div>
                    </div>
                </li>
                <li class="anne-flex animated">
                    <div class="f_b_l_left">
                        <h4>学以致用背单词</h4>
                        <p>通过音、形、意、例句、真题例题，学习和背诵单词，单词记忆合理</p>
                    </div>
                    <div class="f_b_l_right">
                        <div class="common_green anne-flex">
                            <span></span>
                        </div>
                    </div>
                </li>
                <li class="anne-flex animated">
                    <div class="f_b_l_left">
                        <h4>科学复习模式</h4>
                        <p>错题生词本、时间顺序、听写拼写模式</p>
                    </div>
                    <div class="f_b_l_right">
                        <div class="common_green anne-flex">
                            <span></span>
                        </div>
                    </div>
                </li>
                <li class="anne-flex animated">
                    <div class="f_b_l_left">
                        <h4>单词数据报告</h4>
                        <p>单词记忆曲线、每周单词数据表、每月单词数据表</p>
                    </div>
                    <div class="f_b_l_right">
                        <div class="common_green anne-flex">
                            <span></span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="w_f_b_center">
            <img src="/cn/words/images/word-gaopIphone.png" alt="iphone">
        </div>
        <div class="w_f_b_right com_li">
            <ul>
                <li class="anne-flex animated">
                    <div class="f_b_l_right">
                        <div class="common_green anne-flex">
                            <span></span>
                        </div>
                    </div>
                    <div class="f_b_l_left">
                        <h4>留学单词量评估</h4>
                        <p>科学评估你的留学单词量，时时评估，知己知彼</p>
                    </div>
                </li>
                <li class="anne-flex animated">
                    <div class="f_b_l_right">
                        <div class="common_green anne-flex">
                            <span></span>
                        </div>
                    </div>
                    <div class="f_b_l_left">
                        <h4>战友PK单词</h4>
                        <p>匹配同一词包战友PK单词量，轻松记背单词
                            <br>高效小组刷词团周周开团，让你背单词更有趣</p>
                    </div>
                </li>
                <li class="anne-flex animated">
                    <div class="f_b_l_right">
                        <div class="common_green anne-flex">
                            <span></span>
                        </div>
                    </div>
                    <div class="f_b_l_left">
                        <h4>全新翻译功能</h4>
                        <p>拍照、语音、输入字母快捷翻译查找不认识的单词</p>
                    </div>
                </li>
                <li class="anne-flex animated">
                    <div class="f_b_l_right">
                        <div class="common_green anne-flex">
                            <span></span>
                        </div>
                    </div>
                    <div class="f_b_l_left">
                        <h4>打卡签到送雷豆</h4>
                        <p>雷豆可兑换雷哥网任意课程和服务</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--雷哥单词app-->
<div class="w_fiveSort">
    <div class="fs_in anne-flex">
        <div>
            <img src="/cn/words/images/word-botapp.png" alt="图标"/>
        </div>
        <div class="fs_in_right">
            <p>用雷哥单词APP <br>
                留学考试拿高分  更轻松  更高效</p>
            <a href="https://itunes.apple.com/cn/app/%E9%9B%B7%E5%93%A5%E5%8D%95%E8%AF%8D/id1375429473?l=zh&ls=1&mt=8" target="_blank">开始背单词</a>
        </div>
    </div>
</div>

</body>
<script>
    $(function(){
//        数字滚动插件
        var totalCount = $("#totalCount").val();
        $("#dataNums").rollNumDaq({
            deVal:totalCount
        });
//        监听搜索单词输入变化
        $(".a-s-top input[type='text']").bind('input propertychange', function() {
            showWordsXl();
        });
//        监听音频播放完毕删除图标上的class样式
        $("audio").bind("ended",function () {
            $(this).siblings("span.volumeIcon").removeClass("on");
        });
//         监听例题选择答案变化
        inputChange();
//        点击其他地方隐藏搜索单词下拉
        $("body").click(function(e){
            var _target = $(e.target);
            if (_target.closest(".words-xiala").length == 0) {
                $(".words-xiala").slideUp();
            }
        });

    });
    function inputChange() {
        $(".words-options ul li input").change(function () {
            if(this.checked){
                $(this).parents("li").addClass("on").siblings("li").removeClass("on").find("input").attr("disabled",true);
            }
            var userAnswer=$(".words-options ul li.on").find("label b").html();
            var trueAnswer=$("#trueAnswer").val();
            if(userAnswer==trueAnswer){
                $(".words-options ul li.on").addClass("green").siblings("li").removeClass("green");
            }else{
                $(".words-options ul li.on").addClass("red").siblings("li").removeClass("red");
            }
            $(".words-options ul li").each(function () {
                if($(this).find("label b").html()==trueAnswer){
                    $(this).addClass("green").siblings("li").removeClass("green");
                }
            });
        });
    }
    //        当滚动到该div时淡入效果(搜索单词内容展示)
    $(window).scroll(function () {
        var top=$(".w_threeSort")[0].offsetTop;//单词搜索内容div
        var top02=$(".w_fourSort")[0].offsetTop;//高频词汇div
        if (top >= $(window).scrollTop() && top < ($(window).scrollTop()+$(window).height())) {
//            alert("div在可视范围");
            $(".w_t_left").addClass("fadeInLeft");
            $(".w_t_right").addClass("fadeInRight");
        }
        if (top02 >= $(window).scrollTop() && top02 < ($(window).scrollTop()+$(window).height())) {
//            alert("div在可视范围");
            setTimeout(function () {
                $(".w_f_top").addClass("zoomIn");
                setTimeout(function () {
                    $(".w_f_b_right ul li:first-child").addClass("zoomInRight");
                    $(".w_f_b_left ul li:first-child").addClass("zoomInLeft");
                    setTimeout(function () {
                        $(".w_f_b_right ul li:nth-child(2)").addClass("zoomInRight");
                        $(".w_f_b_left ul li:nth-child(2)").addClass("zoomInLeft");
                        setTimeout(function () {
                            $(".w_f_b_right ul li:nth-child(3)").addClass("zoomInRight");
                            $(".w_f_b_left ul li:nth-child(3)").addClass("zoomInLeft");
                            setTimeout(function () {
                                $(".w_f_b_right ul li:nth-child(4)").addClass("zoomInRight");
                                $(".w_f_b_left ul li:nth-child(4)").addClass("zoomInLeft");
                            },500);
                        },500);
                    },500);
                },500);
            },500);
        }
    });
    //    判断音频播放和暂停
    function playWordAudio(o){
        var audio=$(o).siblings("audio")[0];
        if(audio.paused){
            audio.play();
            $(o).addClass("on");
        }else{
            audio.pause();
            $(o).removeClass("on");
        }
    }

    /**
     * 输入单词关键词出现下拉
     * @returns {boolean}
     */
    function showWordsXl() {
        var content=$(".a-s-top input[type='text']").val();
        if(!content){
            $(".words-xiala").slideUp();
//            alert("请输入你要搜索的内容！");
            return false;
        }else{
            $.ajax({
                url:"http://words.viplgw.cn/cn/index/word-search",
                type:"post",
                data:{
                    content:content
                },
                dataType:"json",
                success:function (data) {
                    var da=data;
                    var str='';
                    for(var i=0;i<da.length;i++){
                        str+='<li data-id="'+da[i].id+'" onclick="hideWordsXl(this)">'+da[i].word+'</li>';
                    }
                    $(".words-xiala").slideDown().find("ul").html(str);
                }
            });
        }

    }

    /**
     * 隐藏下拉并保存后面接口需要的iD
     * @param o
     */
    function hideWordsXl(o) {
        $(".words-xiala").slideUp();
        $(".a-s-top input[type='text']").val($(o).html()).attr("data-id",$(o).attr("data-id"));
        searchWords();
    }

    /**
     * 单词详情展示
     * @returns {boolean}
     */
    function searchWords() {

        var id=$(".a-s-top input[type='text']").attr("data-id");
        var con=$(".a-s-top input[type='text']").val();

        if(!id){
            if(con){//手动输入完整单词而没有选择下拉单词时的id
                $(".words-xiala ul li").each(function () {
                    var thh=$(this).html();
                    if(con==thh){
                        $(".a-s-top input[type='text']").attr("data-id",$(this).attr("data-id"));
                        id=$(this).attr("data-id");
                    }
//                    else{
//                        alert("请输入正确的单词！");
//                        return false;
//                    }
                });
            }else{
//                alert("请输入你要搜索的内容！");
                return false;
            }
        }

        $.ajax({
            url:"http://words.viplgw.cn/cn/index/word-message",
            type:"post",
            data:{
                id:id
            },
            dataType:"json",
            success:function (data) {
                var da=data;
                var str='';
                var liti='';
                var spl=$(".a-s-top input[type='text']").val();
                if(da.question.qslctarr){
                    liti='<h4>例题</h4>' +
                        '<div class="words-art">' +da.question.article.split(spl).join('<span class="words-bold">'+spl+'</span>')+
                        '</div>' +
                        '<div class="words-question">' +
                        da.question.question.split(spl).join('<span class="words-bold">'+spl+'</span>')+
                        '</div>' +
                        '<div class="words-options">' +
                        '<ul>';
                    for(var bx=0;bx<da.question.qslctarr.length;bx++){
                        liti+='<li>' +
                            '<input type="radio" name="options" id="op0b'+bx+'"/>&nbsp;&nbsp;' +
                            '<label for="op0b'+bx+'"><b>'+da.question.qslctarr[bx].name+'</b>&nbsp;&nbsp;'+da.question.qslctarr[bx].select +
                            '</label>' +
                            '</li>';
                    }
                    liti+='</ul>' +
                        '<input type="hidden" value="'+da.question.questionanswer+'" id="trueAnswer"/>' +
                        '</div>';
                    $(".words-example").show().html(liti);
                }else{
                    $(".words-example").hide();
                }
                str+='<h4>'+da.word.word+'&nbsp;&nbsp;'+da.word.translate+'</h4>' +
                    '<span>' +
                    '<span class="small_font">英&nbsp;&nbsp;'+(da.word.phonetic_uk?da.word.phonetic_uk:'')+'</span>&nbsp;&nbsp;' +
                    '<span class="volumeIcon" onclick="playWordAudio(this)"></span>' +
                    '<audio src="'+da.word.uk_audio+'"></audio>'+
                    '</span>' +
                    '<span>' +
                    '<span class="small_font ml">美&nbsp;&nbsp;'+(da.word.phonetic_us?da.word.phonetic_us:'')+'</span>&nbsp;&nbsp;' +
                    '<span class="volumeIcon" onclick="playWordAudio(this)"></span>' +
                    '<audio src="'+da.word.us_audio+'"></audio>' +
                    '</span>' +
                    '<p class="small_font">'+(da.word.mnemonic?da.word.mnemonic:'')+'</p>';
                if(da.lowSentence.length>0){
                    str+='<h5>短语</h5>' +
                        '<ul>';
                    for(var i=0;i<da.lowSentence.length;i++){
                        str+='<li>'+(i+1)+'&nbsp;&nbsp;'+da.lowSentence[i].english+'['+da.lowSentence[i].chinese+']'+'</li>';
                    }
                    str+='</ul>';
                }
                if(da.sentence.length>0){
                    str+='<h5>例句</h5>' +
                        '<ul class="example">';
                    for(var j=0;j<da.sentence.length;j++){
                        str+='<li>' +
                            '<p>'+da.sentence[j].english+'</p>' +
                            '<span>'+da.sentence[j].chinese+'</span>' +
                            '</li>';
                    }
                    str+='</ul>';
                }

                $(".w_t_right").html(str);
                $(".a-s-top input[type='text']").val("").attr("data-id","");
                inputChange();
                $("audio").bind("ended",function () {
                    $(this).siblings("span.volumeIcon").removeClass("on");
                });

            }
        });
    }

    /**
     * enter键搜索单词
     * @param ev
     */
    function enterSearch(ev) {
        var e=ev||window;
        if(e.keyCode==13){
            searchWords();
        }
    }
    /**
     * 登录框
     */
    function userLogin(){
        location.href="http://login.viplgw.cn/cn/index?source=10&url=<?php echo Yii::$app->request->hostInfo.Yii::$app->request->getUrl()?>"
    }
    /**
     * 注册框
     */
    function userRegister(){
        location.href="http://login.viplgw.cn/cn/index/register?source=8&url=<?php echo Yii::$app->request->hostInfo.Yii::$app->request->getUrl()?>"
    }
</script>

</html>