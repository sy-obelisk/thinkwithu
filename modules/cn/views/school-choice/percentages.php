<link rel="stylesheet" href="/cn/css/schoolChoose/enroll.css">
<script type="text/javascript" src="/cn/js/school/enroll.js"></script>


<section class="enrollCover">
    <!--轮播-->
    <div class="enrollSlider">
        <div class="enrollBd">
            <ul>
                <?php foreach($data as $v){?>
                <li>申友网用户 <?php echo $v['userName'].' '.date('Y-m-d H:i:s')?> -获得一份录取报告</li>
                <?php }?>

            </ul>
        </div>
        <script>
            jQuery(".enrollSlider").slide({mainCell:".enrollBd ul",autoPlay:true,effect:"leftMarquee",interTime:50,trigger:"click"});
        </script>
    </div>
    <!--录取内容-->
    <div class="enrollContent">
        <form action="/cn/api/probability-storage" method="post" id="luquForm">
            <div class="backTitle">
                <h1>学校录取测评</h1>
                <p>欢迎使用申友网学校录取测评工具。被自己的 Dream School 录取 </p>
                <p>是怎样的体验？来测评下我离名校的距离还差多少。</p>
            </div>
            <!--搜索框-->
            <div class="enrollBox">
                <div class="search-lu-group">
                    <div class="search-school">
                        <label class="sea-name"><b>*</b><span>院校搜索</span></label>
                        <div class="sea-input">
                            <input type="text" placeholder="请输入学校名称" oninput="showData()" id="top-schoolName" name="schoolName">
                            <input type="hidden" name="schoolId" class="schoolId">
                            <input type="hidden" name="schoolRank" class="schoolRank">
                            <input type="hidden" name="country" class="s_country">
                            <div class="search-btn" onclick="showData()">
                                <img src="/cn/images/school/luqu-search.png" alt="搜索图标">
                            </div>
                            <div class="s-i-select">
                                <ul>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="search-major">
                        <label class="sea-name"><b>*</b><span>专业选择</span></label>
                        <div class="s-m-select">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle pro_choice" data-toggle="dropdown">
                                    <span class="b_val" id="top-majorName"><b>请选择专业</b></span>
                                    <input type="hidden" value="" name="majorId" id="majorId">
                                    <input type="hidden" name="majorName" id="majorName">
                                    <a href="javascript:void(0);" class="rightJ-btn">
                                        <img src="/cn/images/school/luqu-sanjiao.png" alt="箭头图标">
                                    </a>
                                </button>
                                <ul class="dropdown-menu pro_category" role="menu">

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--个人成绩-->
                <P class="perGradsH4"><i class="iconfont perGrads"></i>个人成绩</P>
                <div class="person">
                    <ul>
                        <li>
                            <label for="gpa"><b>*</b><span>GPA</span></label>
                            <input type="text" id="gpa" name="gpa">
                            <span style="color: grey;font-size: 12px;">例：3.0或者85</span>
                        </li>
                        <li>
                            <label for="gmat"><b style="color: white">*</b><span>GMAT/GRE</span></label>
                            <input type="text" id="gmat" name="gmat">
                            <span style="color: grey;font-size: 12px;">若暂未出分，可填目标分数</span>
                        </li>
                        <li>
                            <label for="toefl"><b>*</b><span>TOEFL/IELTS</span></label>
                            <input type="text" id="toefl" name="toefl">
                            <span style="color: grey;font-size: 12px;">若暂未出分，可填目标分数</span>
                        </li>
                    </ul>
                </div>
                <!--学校背景-->
                <P class="perGradsH4" style="margin-top: 40px"><i class="iconfont perBg"></i>学校背景</P>
                <div class="school">
                    <ul>
                        <li id="xueli">
                            <label class="before-name" style="margin-right: 10px"><b style="color: white">*</b><span>目&nbsp;&nbsp;前&nbsp;&nbsp; 学&nbsp;&nbsp; 历</span></label>
                            <input type="radio" name="education" id="boshi" value="博士" checked="">
                            <label for="boshi">博士</label>
                            <input type="radio" name="education" id="shuoshi" value="硕士">
                            <label for="shuoshi">硕士</label>
                            <input type="radio" name="education" id="bengke" value="本科">
                            <label for="bengke">本科</label>
                            <input type="radio" name="education" id="zhuanke" value="专科">
                            <label for="zhuanke">专科</label>
                            <input type="radio" name="education" id="gaozhong" value="高中">
                            <label for="gaozhong">高中</label>
                            <input type="radio" name="education" id="chuzhong" value="初中">
                            <label for="chuzhong">初中</label>
                        </li>
                        <li>
                            <label class="before-name"><b>*</b><span>就读/毕业学校</span></label>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle Pro_choose" data-toggle="dropdown">
                                    <span class="b_val" id="jiudu"></span>
                                    <input type="hidden" value="" name="school" class="school_value">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu school_category" role="menu">
                                    <li onclick="fuzhi(this)" data-value="1">
                                        <a href="javascript:void(0);">清北复交浙大</a>
                                    </li>
                                    <li onclick="fuzhi(this)" data-value="2">
                                        <a href="javascript:void(0);">985</a>
                                    </li>
                                    <li onclick="fuzhi(this)" data-value="3">
                                        <a href="javascript:void(0);">211</a>
                                    </li>
                                    <li onclick="fuzhi(this)" data-value="4">
                                        <a href="javascript:void(0);">非211本科</a>
                                    </li>
                                    <li onclick="fuzhi(this)" data-value="5">
                                        <a href="javascript:void(0);">专科</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <label class="before-name"><b>*</b><span>学校具体名称</span></label>
                            <input type="text" id="schoolname" name="attendSchool">
                        </li>

                        <li>
                          <label class="before-name"><b>*</b><span>专
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              &nbsp;&nbsp;&nbsp;&nbsp;
                              业</span></label>
                            <input type="text" id="major-input" onclick="showMajorC(this)">
                            <input type="hidden" name="major" value="172" id="major_z">
                        </li>

                        <li>
                            <label class="before-name"><b>*</b><span>感兴趣的留学服务</span></label>
                            <ul id="xinqu">
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
                            <label for="userName_1"><b>*</b><span>您的姓名</span></label>
                            <input type="text" id="userName_1" name="userName" value="" class="new_input">
                        </li>

                        <li>
                            <label for="phone_1"><b>*</b><span>您的手机号</span></label>
                            <input type="text" id="phone_1" name="phone" value="" class="new_input">
                        </li>
                    </ul>
                </div>
                <!--下一步-->
                <input type="button" value="下一步" class="subbtn" id="nextMask" onclick="showMaskN()">
                <!--是否具有背景条件-->
                <div class="back-mask">
                    <div class="in-b-disc">
                        <div class="in-b-top">
                            你是否具备以下背景条件？
                        </div>
                        <div class="in-b-bot">
                            <p class="blue">备注：请勾选以下已参加过的内容（可多选）</p>
                            <ul>
                                <li>
                                    <div class="group_check">
                                        <input type="checkbox" value="1" name="bigFour" id="tiaojian1">
                                        <label for="tiaojian1"></label>
                                    </div>
                                    <label for="tiaojian1" class="font">500强/四大实习（工作）经验</label>
                                </li>
                                <li>
                                    <div class="group_check">
                                        <input type="checkbox" value="1" name="foreignCompany" id="tiaojian2">
                                        <label for="tiaojian2"></label>
                                    </div>
                                    <label for="tiaojian2" class="font">外企实习（工作）经验</label>
                                </li>
                                <li>
                                    <div class="group_check">
                                        <input type="checkbox" value="1" name="enterprises" id="tiaojian3">
                                        <label for="tiaojian3"></label>
                                    </div>
                                    <label for="tiaojian3" class="font">国企实习（工作）经验</label>
                                </li>
                                <li>
                                    <div class="group_check">
                                        <input type="checkbox" value="1" name="privateEnterprise" id="tiaojian4">
                                        <label for="tiaojian4"></label>
                                    </div>
                                    <label for="tiaojian4" class="font">私企实习（工作）经验</label>
                                </li>
                                <li>
                                    <div class="group_check">
                                        <input type="checkbox" value="1" name="project" id="tiaojian5">
                                        <label for="tiaojian5"></label>
                                    </div>
                                    <label for="tiaojian5" class="font">相关专业项目比赛经验</label>
                                </li>
                                <li>
                                    <div class="group_check">
                                        <input type="checkbox" value="1" name="study" id="tiaojian6">
                                        <label for="tiaojian6"></label>
                                    </div>
                                    <label for="tiaojian6" class="font">海外游学经验</label>
                                </li>
                                <li>
                                    <div class="group_check">
                                        <input type="checkbox" value="1" name="publicBenefit" id="tiaojian7">
                                        <label for="tiaojian7"></label>
                                    </div>
                                    <label for="tiaojian7" class="font">公益活动</label>
                                </li>
                                <li>
                                    <div class="group_check">
                                        <input type="checkbox" value="1" name="awards" id="tiaojian8">
                                        <label for="tiaojian8"></label>
                                    </div>
                                    <label for="tiaojian8" class="font">获奖经历</label>
                                </li>
                            </ul>
                            <input type="button" value="提交" class="new-sub" onclick="subsInfo()">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--专业选择-->
    <div class="t-major-mask">
        <div class="t-m-in">
            <div class="t-m-close" onclick="closeMajorC()">×</div>
            <div class="first_page">
                <h4>学科类别</h4>
                <ul class="first-ul">
                    <li>
                        <span>商科管理与经济</span>
                        <div class="second_page">
                            <ul>
                                <li data-pid="金融">金融</li>
                                <li data-pid="管理">管理</li>
                                <li data-pid="市场营销">市场营销</li>
                                <li data-pid="工商管理MBA">工商管理MBA</li>
                                <li data-pid="人力资源管理">人力资源管理</li>
                                <li data-pid="会计">会计</li>
                                <li data-pid="管理信息系统">管理信息系统</li>
                                <li data-pid="国际商务/贸易">国际商务/贸易</li>
                                <li data-pid="酒店/旅游管理">酒店/旅游管理</li>
                                <li data-pid="奢侈品管理">奢侈品管理</li>
                                <li data-pid="供应链管理">供应链管理</li>
                                <li data-pid="创业学">创业学</li>
                                <li data-pid="房地产">房地产</li>
                                <li data-pid="商业分析（BA）">商业分析（BA）</li>
                                <li data-pid="会展管理">会展管理</li>
                                <li data-pid="技术项目管理">技术项目管理</li>
                                <li data-pid="体育管理">体育管理</li>
                                <li data-pid="文化管理">文化管理</li>
                                <li data-pid="电子商务">电子商务</li>
                                <li data-pid="知识管理">知识管理</li>
                                <li data-pid="商务/商业">商务/商业</li>
                                <li data-pid="政治经济学">政治经济学</li>
                                <li data-pid="发展经济学">发展经济学</li>
                                <li data-pid="计量经济学">计量经济学</li>
                                <li data-pid="卫生经济学">卫生经济学</li>
                                <li data-pid="国际经济学">国际经济学</li>
                                <li data-pid="应用经济学">应用经济学</li>
                                <li data-pid="土地经济学">土地经济学</li>
                                <li data-pid="环境经济学">环境经济学</li>
                                <li data-pid="经济政策">经济政策</li>
                                <li data-pid="经济学">经济学</li>
                                <li data-pid="金工/数学">金工/数学</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>工科</span>
                        <div class="second_page">
                            <ul>
                                <li data-pid="工程学/工程管理">工程学/工程管理</li>
                                <li data-pid="EE（电子电气通信工程类）">EE（电子电气通信工程类）</li>
                                <li data-pid="机械工程">机械工程</li>
                                <li data-pid="土木与环境工程">土木与环境工程</li>
                                <li data-pid="材料科学与工程">材料科学与工程</li>
                                <li data-pid="生物制药工程">生物制药工程</li>
                                <li data-pid="能源与动力工程">能源与动力工程</li>
                                <li data-pid="纳米工程">纳米工程</li>
                                <li data-pid="航空航天工程">航空航天工程</li>
                                <li data-pid="交通运输工程">交通运输工程</li>
                                <li data-pid="石油工程">石油工程</li>
                                <li data-pid="工业工程">工业工程</li>
                                <li data-pid="环境工程">环境工程</li>
                                <li data-pid="化学工程">化学工程</li>
                                <li data-pid="CS计算机科学与系统工程">CS计算机科学与系统工程</li>
                                <li data-pid="生物工程">生物工程</li>
                                <li data-pid="城市规划与设计">城市规划与设计</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>理学</span>
                        <div class="second_page">
                            <ul>
                                <li data-pid="生物">生物</li>
                                <li data-pid="数学">数学</li>
                                <li data-pid="统计学">统计学</li>
                                <li data-pid="精算">精算</li>
                                <li data-pid="应用数学">应用数学</li>
                                <li data-pid="海洋科学">海洋科学</li>
                                <li data-pid="地理">地理</li>
                                <li data-pid="大气科学">大气科学</li>
                                <li data-pid="地理信息系统">地理信息系统</li>
                                <li data-pid="地质学">地质学</li>
                                <li data-pid="物理">物理</li>
                                <li data-pid="化学">化学</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>艺术与设计</span>
                        <div class="second_page">
                            <ul>
                                <li data-pid="教育学">教育学</li>
                                <li data-pid="传播学">传播学</li>
                                <li data-pid="公共事务">公共事务</li>
                                <li data-pid="语言与文学">语言与文学</li>
                                <li data-pid="历史与文化">历史与文化</li>
                                <li data-pid="社会与哲学">社会与哲学</li>
                                <li data-pid="心理学">心理学</li>
                                <li data-pid="政治与外交">政治与外交</li>
                                <li data-pid="公共卫生">公共卫生</li>
                                <li data-pid="影视">影视</li>
                                <li data-pid="音乐">音乐</li>
                                <li data-pid="建筑学">建筑学</li>
                                <li data-pid="编剧">编剧</li>
                                <li data-pid="摄影">摄影</li>
                                <li data-pid="平面设计">平面设计</li>
                                <li data-pid="绘画">绘画</li>
                                <li data-pid="服装设计">服装设计</li>
                                <li data-pid="室内设计">室内设计</li>
                                <li data-pid="艺术管理">艺术管理</li>
                                <li data-pid="表演">表演</li>
                                <li data-pid="工业设计">工业设计</li>
                                <li data-pid="珠宝设计">珠宝设计</li>
                                <li data-pid="娱乐管理">娱乐管理</li>
                                <li data-pid="传媒">传媒</li>
                                <li data-pid="艺术设计">艺术设计</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>医学</span>
                        <div class="second_page">
                            <ul>
                                <li data-pid="临床医学">临床医学</li>
                                <li data-pid="康复医学">康复医学</li>
                                <li data-pid="护理学">护理学</li>
                                <li data-pid="牙医">牙医</li>
                                <li data-pid="生物医学">生物医学</li>
                                <li data-pid="遗传学">遗传学</li>
                                <li data-pid="生理学">生理学</li>
                                <li data-pid="免疫学">免疫学</li>
                                <li data-pid="兽医">兽医</li>
                                <li data-pid="病理学">病理学</li>
                                <li data-pid="中医药">中医药</li>
                                <li data-pid="医院管理">医院管理</li>
                                <li data-pid="药理学">药理学</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>农业与林业</span>
                        <div class="second_page">
                            <ul>
                                <li data-pid="农业">农业</li>
                                <li data-pid="林业">林业</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="t-m-btn">
                    <input type="button" value="确定" onclick="sureMajor()">
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    //    就读毕业院校下拉框显示
    $('.Pro_choose').click(function () {
        if($(this).hasClass('open')){
            $(this).removeClass('open');
            $('.school_category').slideUp();
        }else {
            $(this).addClass('open');
            $('.school_category').slideDown();
        }

    });
    //    专业选择下拉框显示
    $('.pro_choice').click(function () {
        if($(this).hasClass('open')){
            $(this).removeClass('open');
            $('.pro_category').slideUp();
        }else {
            $(this).addClass('open');
            $('.pro_category').slideDown();
        }

    });
    //    下拉之后赋值
    function  fuzhi(o){
        var newVal=$(o).find("a").html();
        var majorId=$(o).attr("data-id");
        var s_value=$(o).attr("data-value");
        $(o).parents("ul").siblings("button").find(".b_val").html(newVal);
        $(o).parents("ul").siblings("button").find("input.school_value").val(s_value);
        $(o).parents("ul").siblings("button").find("input#majorId").val(majorId);
        $(o).parents("ul").siblings("button").find("input#majorName").val(newVal);
        //就读毕业院校下拉框关闭
        $('.Pro_choose').removeClass('open');
        $('.school_category').slideUp();

        //专业选择下拉框关闭
        $('.pro_choice').removeClass('open');
        $('.pro_category').slideUp();
    }
    //    显示专业点击选择
    $(".second_page ul li").click(function(){
        $(this).addClass("on").siblings("li").removeClass("on");
        $(this).parents("li").addClass("on").siblings("li").removeClass("on").find("li").removeClass("on");
    });
    //    显示专业弹窗
    function showMajorC(o){
        $(".t-major-mask").show();
    }
    //    关闭专业弹窗
    function closeMajorC(){
        $(".t-major-mask").hide();
    }
    //    保存选择的专业类别
    function sureMajor(){
        var h=$(".second_page ul li.on").html();
        var pid=$(".second_page ul li.on").attr("data-pid");
        $(".t-major-mask").hide();
        $("#major-input").val(h).siblings("input[type='hidden']").val(pid);
    }
    //    院校搜索
    function showData(){
        var v=$("#top-schoolName").val();
        if(v){
            $(".s-i-select").find("ul").html("");
            $.ajax({
                url:"http://schools.smartapply.cn/cn/api/words-school",
                type:"get",
                data:{
                    keywords:v
                },
                dataType:"json",
                jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
                jsonpCallback: "success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
                success:function(data){
                    var str='';
                    if(data.code==1){
                        if(data.data){
                            for(var i=0;i<data.data.length;i++){
                                str+='<li onclick="schoolFuZhi(this)" data-id="'+data.data[i].id+'"' +
                                    ' data-rank="'+data.data[i].rank+'"' +
                                    'data-country="'+data.data[i].country+'"><b>'+data.data[i].name+'</b><span>('+data.data[i].title+')</span></li>';
                            }
                            $(".s-i-select").find("ul").html(str);
                            $(".s-i-select").slideDown();
                            return false;
                        }
                    }
                }
            });

        }else{
            $(".s-i-select").slideUp();
        }
    }
    //    院校搜索下拉框赋值
    function schoolFuZhi(o){
        var newV=$(o).find("b").html();
        $(o).parents(".s-i-select").hide().siblings("input").val(newV).attr("data-lid",$(o).attr("data-id"))
            .siblings("input.schoolId").val($(o).attr("data-id"))
            .end().siblings("input.schoolRank").val($(o).attr("data-rank"))
            .end().siblings("input.s_country").val($(o).attr("data-country"));
        searchMajor($(o).attr("data-id"));
    }
    //    搜索专业
    function searchMajor(id){
        $(".search-major").find(".dropdown-menu").html("");
        $.ajax({
            url:"http://schools.smartapply.cn/cn/api/id-major",
            type:"get",
            data:{
                id:id
            },
            dataType:"json",
            jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(默认为:callback)
            jsonpCallback: "success_jsonpCallback",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名
            success:function(data){
                var str='';
                if(data){
                    for(var i=0;i<data.length;i++){
                        str+='<li onclick="fuzhi(this)" data-id="'+data[i].id+'">'+
                            '<a href="javascript:void(0);">'+data[i].name+'</a>'+
                            '</li>';
                    }
                    $(".search-major").show().find(".dropdown-menu").html(str);
                }
            }
        });
    }
    $("#xinqu li input").change(function(){
        var num= $("#xinqu li input:checked").length;
        if(num>=3){
            alert("感兴趣的留学服务最多只可以选择两项哦！");
            $(this).removeAttr("checked");
            return false;
        }
    });
    //    下一步
    function showMaskN(){
        var bitian1=$("#jiudu").html();
        var bitian2=$("#schoolname").val();
        var bitian3=$("#major-input").val();
        var gpa=$("#gpa").val();
        var gmat=$("#gmat").val();
        var toefl=$("#toefl").val();
        var topSname=$("#top-schoolName").val();
        var topMname=$("#top-majorName").html();
        var uName=$("#userName_1").val();
        var uPhone=$("#phone_1").val();
        if(!topSname){
            alert("院校搜索为必选项！");
            return false;
        }
        if(!topMname || topMname=='<b>请选择专业</b>'){
            alert("专业选择为必选项！");
            return false;
        }
        if(gpa){
            if (isNaN(gpa)) {
                alert("请输入正确的科目分数！");
                return false;
            }
            if((gpa<2.5) || (gpa>100) || ((gpa>4)&&(gpa<50))){
                alert("gpa数值填写范围为2.5-4.0或者50-100！");
                return false;
            }
        }else{
            alert("GPA为必填项！");
            return false;
        }
        if(gmat){
            if (isNaN(gmat)) {
                alert("请输入正确的科目分数！");
                return false;
            }
            if((gmat<200)){
                alert("gre数值填写范围为200-340，gmat数值填写范围为400-800");
                return false;
            }
            if((gmat>340)&&(gmat<400)){
                alert("gre数值填写范围为200-340，gmat数值填写范围为400-800");
                return false;
            }
            if((gmat>800)){
                alert("gre数值填写范围为200-340，gmat数值填写范围为400-800");
                return false;
            }
        }
        if(toefl){
            if (isNaN(toefl)) {
                alert("请输入正确的科目分数！");
                return false;
            }
            if((toefl<5)){
                alert("toefl数值填写范围为60-120！,ielts数值填写范围为5.0-9.0！");
                return false;
            }
            if((toefl>120)){
                alert("toefl数值填写范围为60-120！,ielts数值填写范围为5.0-9.0！");
                return false;
            }
            if((toefl<60) && (toefl>9)){
                alert("toefl数值填写范围为60-120！,ielts数值填写范围为5.0-9.0！");
                return false;
            }
        }else{
            alert("TOEFL/IELTS为必填项！");
            return false;
        }

        if(!bitian1){
            alert("就读/毕业学校为必填项！");
            return false;
        }
        if(!bitian2){
            alert("学校具体名称为必填项！");
            return false;
        }
        if(!bitian3){
            alert("专业为必填项！");
            return false;
        }
        if($("#xinqu li input:checked").length<=0){
            alert("感兴趣的留学服务为必选项！");
            return false;
        }
        if(!uName){
            alert("姓名为必填项！");
            return false;
        }
        if(!uPhone){
            alert("电话为必填项！");
            return false;
        }
        $(".back-mask").show();
    }
    //    提交表单
    function subsInfo(){
        var num=$(".in-b-bot ul li input:checked").length;
        if(num){
            //表单提交数据
            var schoolRank = $('.schoolRank').val();//院校排名
            var country = $('.s_country').val();//国家
            var schoolName = $('#top-schoolName').val();//学校名称
            var majorId = $('#majorId').val();//专业id
            var majorName = $('#majorName').val();//专业名称
            var gpa = $('#gpa').val();//gpa
            var gmat = $('#gmat').val();//gmat
            var toefl = $('#toefl').val();//toefl
            var education = $("#xueli input:checked").val();//学历
            var school = $(".school_value").val();//就读院校
            var attendSchool = $("#schoolname").val();//具体学校名称
            var major = $("#major_z").val();//专业
            var obj_len= [];
            var obj_1 = $("#xinqu li input:checked");
            obj_1.each(function(){
                obj_len.push($(this).val());//感兴趣的留学服务
            });
            var userName = $('#userName_1').val();//姓名
            var phone = $('#phone_1').val();//电话
            // var obj_tj= [];
            // var obj_2 = $(".in-b-bot ul li input:checked");
            // obj_2.each(function(){
            //     obj_tj.push($(this).val());//具备的以下条件
            // });
            if($('#tiaojian1').is(':checked')){//500强、四大
                var bigFour = $('#tiaojian1').val();
            }else {
                var bigFour = '';
            }
            if($('#tiaojian2').is(':checked')){//外企实习（工作）经验
                var foreignCompany = $('#tiaojian2').val();
            }else {
                var foreignCompany = '';
            }
            if($('#tiaojian3').is(':checked')){//国企实习（工作）经验
                var enterprises = $('#tiaojian3').val();
            }else {
                var enterprises = '';
            }
            if($('#tiaojian4').is(':checked')){//私企实习（工作）经验
                var privateEnterprise = $('#tiaojian4').val();
            }else {
                var privateEnterprise = '';
            }
            if($('#tiaojian5').is(':checked')){//相关专业项目比赛经验
                var project = $('#tiaojian5').val();
            }else {
                var project = '';
            }
            if($('#tiaojian6').is(':checked')){//海外游学经验
                var study = $('#tiaojian6').val();
            }else {
                var study = '';
            }
            if($('#tiaojian7').is(':checked')){//公益活动
                var publicBenefit = $('#tiaojian7').val();
            }else {
                var publicBenefit = '';
            }
            if($('#tiaojian8').is(':checked')){//获奖经历
                var awards = $('#tiaojian8').val();
            }else {
                var awards = '';
            }


            $.ajax({
                type: "POST",
                dataType: "json",
                url: "/cn/api/probability-storage" ,
                data:{
                    schoolRank:schoolRank,
                    country:country,
                    schoolName:schoolName,
                    majorName:majorName,
                    gpa:gpa,
                    gmat:gmat,
                    toefl:toefl,
                    education:education,
                    school:school,
                    major:major,
                    attendSchool:attendSchool,
                    interest:obj_len,
                    userName:userName,
                    phone:phone,
                    bigFour:bigFour,
                    foreignCompany:foreignCompany,
                    enterprises:enterprises,
                    privateEnterprise:privateEnterprise,
                    project:project,
                    study:study,
                    publicBenefit:publicBenefit,
                    awards:awards
                },
                success: function (result) {
                    if(result.code==1){
                       console.log('提交成功');
                    }
                    else {
                        alert("提交失败！");
                    }
                },
                error : function() {
                    alert("提交失败！");
                }
            });

            // $("#luquForm").submit();
        }else {
            alert("请勾选以下已参加过的内容！");
            return false;
        }
    }


</script>