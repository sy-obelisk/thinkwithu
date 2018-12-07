<link rel="stylesheet" href="/cn/css/studyPlanNew.css"/>


<section class="abroad">
    <div class="assessment">
        <div class="tit-wrap">
            <div class="w12 tit-top clearfix">
                <img src="cn/images/assess/t1.png" alt="欢迎进入免费留学评估系统">
                <div class="inb step-tit fr">
                    <img src="cn/images/assess/step-1.png" style="margin-right: 70px;" alt="">
                    <img src="cn/images/assess/step-2.png" style="margin-right: 165px;" alt="">
                </div>
            </div>
            <div class="content-wrap w12 clearfix">
                <!--左-->
                <div class="cl-wrap fl">
                    <form id="myForm" action="/cn/api/assessment" onsubmit="return checkSub()" method="post">
                        <div class="cl-list-wrap">
                            <div class="cl-list">
                                <p class="select-text">1.我想申请：<em class="must">(必填） </em></p>
                                <div class="int-wrap  int-1 relative clearfix">
                                    <span class="m1 spanVal must">请选择</span>
                                    <input name="extendValue[0]" class="val" type="hidden" value="">
                                    <span class="crow inb fr"><img src="cn/images/assess/crow.png" alt=""></span>
                                    <ul class="select-list ani">
                                        <li>高中</li>
                                        <li>本科</li>
                                        <li>硕士</li>
                                        <li>MBA</li>
                                        <li>博士</li>
                                        <li>游学</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">2.我想申请的国家：<em class="must">(必填） </em></p>
                                <div class="int-wrap  int-1 relative clearfix">
                                    <span class="m1 spanVal must">请选择</span>
                                    <input name="extendValue[1]" class="val" type="hidden" value="">
                                    <span class="crow inb fr"><img src="cn/images/assess/crow.png" alt=""></span>
                                    <ul class="select-list ani">
                                        <li>美国</li>
                                        <li>英国</li>
                                        <li>澳洲</li>
                                        <li>加拿大</li>
                                        <li>香港</li>
                                        <li>新加坡</li>
                                        <li>其他国家</li>
                                        <li>移民</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">3.我现在的专业：<em class="must">(必填） </em></p>
                                <div class="int-wrap  int-1 relative clearfix">
                                    <input name="extendValue[4]" class="class=" val"="" m3"="" type="text" placeholder="请输入您现在的专业">
                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">4.我现在的学历：<em class="must">(必填） </em></p>
                                <div class="int-wrap  int-1 relative clearfix">
                                    <span class="m1 spanVal must">请选择</span>
                                    <input name="extendValue[14]" class="val" type="hidden" value="">
                                    <span class="crow inb fr"><img src="cn/images/assess/crow.png" alt=""></span>
                                    <ul class="select-list ani">
                                        <li>本科</li>
                                        <li>硕士</li>
                                        <li>博士</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">5.我意向出国的时间：<em class="must">(必填） </em></p>
                                <div class="int-wrap  int-1 relative clearfix">
                                    <input name="extendValue[15]" class="class=" val"="" m3"="" type="text" placeholder="请输入您意向出国时间">
                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">6.毕业/目前在读的学校：<em class="must"> </em></p>
                                <div class="int-wrap  int-1 relative clearfix">
                                    <input name="extendValue[3]" class=" m3" type="text" placeholder="请输入您毕业/目前在读的学校">
                                </div>
                            </div>
                            <div class="submit1 next">下一步</div>
                        </div>
                        <div class="cl-list-wrap2 ">
                            <div class="cl-list">
                                <p class="select-text">我申请的专业：<em class="must"> </em></p>
                                <div class="int-wrap  int-1 relative clearfix">
<!--                                    <input class="m9" type="text" name="extendValue[2]" placeholder="请输入您申请的专业">-->
                                    <span class="m1 spanVal must">请选择</span>
                                    <input name="extendValue[2]" class="val" type="hidden" value="">
                                    <span class="crow inb fr"><img src="cn/images/assess/crow.png" alt=""></span>
                                    <ul class="select-list ani" style="height: 280px;">
                                        <li>商科</li>
                                        <li>理工科</li>
                                        <li>文科</li>
                                        <li>法律</li>
                                        <li>医学</li>
                                        <li>艺术</li>
                                        <li>体育</li>
                                        <li>其他</li>
                                    </ul>

                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">GRE/GMAT：<em class="must">(必填） </em></p>
                                <div class="int-wrap clearfix">
                                    <input class="m9" type="text" name="extendValue[8]" id="GMAT" placeholder="请输入您的GRE/GMAT成绩">

                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">GPA：<em class="must">(必填） </em></p>
                                <div class="int-wrap clearfix">
                                    <input class="m9" type="text" name="extendValue[6]" id="GPA" placeholder="请输入您的GPA成绩">

                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">托福/雅思：<em class="must">(必填） </em></p>
                                <div class="int-wrap clearfix">
                                    <input class="m9" type="text" name="extendValue[7]" id="TOEFL" placeholder="请输入您的托福/雅思成绩">

                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">考试情况：<em class="must"> </em></p>
                                <div class="int-wrap clearfix">
                                    <input class="m9" type="text" name="extendValue[9]" placeholder="请填写">

                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">荣誉奖励：<em class="must"> </em></p>
                                <textarea name="extendValue[10]" class="text-de m14"></textarea>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">职业/学术成就：<em class="must"> </em></p>
                                <textarea name="extendValue[11]" class="text-de m14"></textarea>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">社团活动：<em class="must"> </em></p>
                                <textarea name="extendValue[12]" class="text-de m14"></textarea>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">工作/实习背景：<em class="must"> </em></p>
                                <textarea name="extendValue[13]" class="text-de m14"></textarea>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">您关心的问题：<em class="must"> </em></p>
                                <div class="int-wrap int-1 relative clearfix">
                                    <span class="must spanVal">请选择</span>
                                    <input type="hidden" name="extendValue[5]" value="">
                                    <span class="crow inb fr"><img src="cn/images/assess/crow.png" alt=""></span>
                                    <ul class="select-list ani" style="height: 240px;">
                                        <li>服务流程</li>
                                        <li>出国考试流程</li>
                                        <li>选校定位</li>
                                        <li>申请步骤</li>
                                        <li>申请费用</li>
                                        <li>奖学金</li>
                                        <li>其他</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">我还想了解：<em class="must"> </em></p>
                                <div class="int-wrap clearfix">
                                    <input class="m9" type="text" name="extendValue[16]" placeholder="请填写">

                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">你的姓名：<em class="must"> </em></p>
                                <div class="int-wrap clearfix">
                                    <input class="m9" type="text" name="name" placeholder="请输入您的姓名">

                                </div>
                            </div>
                            <div class="cl-list">
                                <p class="select-text">你的电话：<em class="must">(必填） </em></p>
                                <div class="int-wrap clearfix special" >
                                    <input class="m9" type="text" name="extendValue[17]" placeholder="请输入您的电话">
                                </div>
                                <div class="v-code">
                                    <img style="height: 35px;" src="/cn/api/verification-code" onclick="this.src='/cn/api/verification-code?'+Math.random();" name="user_code" alt="验证码">
                                    <input style="border: 1px #a0a0a0 solid" id="code" type="text" placeholder="请输入验证码">
                                </div>
                            </div>

                            <div class="submit2">
                                <input type="hidden" name="code" value="">
                                <input class="current prev" type="button" value="上一步">
                                <input class="submit" type="submit" value="提交评估">
                            </div>
                        </div>
                    </form>
                </div>
                <!--右-->
                <div class="cr-wrap fr">
                    <div class="cr-tit tr"><img src="cn/images/assess/ad.png" alt=""></div>
                    <div class="ban-list">
                        <div class="ban-wrap">
                            <div class="ban-left tm inb">
                                <img src="cn/images/assess/ad1.png" alt="">
                            </div>
                            <div class="ban-right inb">
                                <p class="ban-text"><img class="point inb" src="cn/images/assess/gou.png">透明+保障 </p>
                                <p class="ban-text"><img class="point inb" src="cn/images/assess/gou.png">网申、邮箱等账号密码与学生共享 </p>
                                <p class="ban-text"><img class="point inb" src="cn/images/assess/gou.png">文书、邮寄材料全部透明操作</p>
                            </div>
                        </div>
                        <div class="ban-wrap">
                            <div class="ban-left tm inb">
                                <img src="cn/images/assess/ad1.png" alt="">
                            </div>
                            <div class="ban-right inb">
                                <p class="ban-text"><img class="point inb" src="cn/images/assess/gou.png">透明+保障 </p>
                                <p class="ban-text"><img class="point inb" src="cn/images/assess/gou.png">网申、邮箱等账号密码与学生共享 </p>
                                <p class="ban-text"><img class="point inb" src="cn/images/assess/gou.png">文书、邮寄材料全部透明操作</p>
                            </div>
                        </div>
                        <div class="ban-wrap">
                            <div class="ban-left tm inb">
                                <img src="cn/images/assess/ad1.png" a.select-listlt="">
                            </div>
                            <div class="ban-right inb">
                                <p class="ban-text"><img class="point inb" src="cn/images/assess/gou.png">透明+保障 </p>
                                <p class="ban-text"><img class="point inb" src="cn/images/assess/gou.png">网申、邮箱等账号密码与学生共享 </p>
                                <p class="ban-text"><img class="point inb" src="cn/images/assess/gou.png">文书、邮寄材料全部透明操作</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    function checkSub(){
        var gpaReg1 = new RegExp("^[0-4]{1}$");
        var gpaReg2 = new RegExp("^([0-3]{1})+(.[0-9]{1})?$");
        var toeflReg1 = new RegExp("^([0-1]+([0-2]{1})+([0-9]{1}))$");
        var toeflReg2 = new RegExp("^[1-9]+([0-9]{1})$");
        var toeflReg3 = new RegExp("^([0-9]|([3-8]+(.[0-9]{1})))$");
        var GPA = $('#GPA').val();
        var TOEFL = $('#TOEFL').val();
        var GMAT = $('#GMAT').val();
        var code = $('#code').val();
        var a = 1;
        var num=0;
        if(code=='') {
            alert('请输入验证码');
            return false;
        } else{
            var ajaxFlag=true;
            var code_y = $('#code').val();
            $.ajax({
                url: '/cn/api/check-code',
                type: 'post',
                data:{
                    verificationCode:code_y
                },
                async:false,//设置同步方式，非异步！
                cache:false,//严格禁止缓存！
                dataType: 'json',
                success: function (data) {
                    if(data.code!=1){
                        alert("验证码输入错误");
                        ajaxFlag=false;
                    }
                },
                error: function () {
                    alert('网络通讯失败...');
                    ajaxFlag=false;
                }
            });
            if(!ajaxFlag){
                return false;
            }
        }
        $('.spanVal').each(function(){
            var spanVal = $(this).html();
            if(spanVal == '请选择'){
                spanVal = '';
            }
            $(this).next().val(spanVal);
        });
        $('.val').each(function(){
            if($(this).val() == "" || $(this).val() == "请选择"){
                alert('必填项不能为空');
                a = 2;
                return false;
            }
        });
        if(a == 2){
            return false;
        }
        if(GPA<1 || GPA>4){
            alert('GPA请输入1-4之间的数字');
            return false;
        }else{
            if(GPA>=3.5){
                GPA = 90;
            }else
            if(GPA>=3 && GPA<=3.4){
                GPA = 80;
            }else
            if(GPA>=2 && GPA<=2.9){
                GPA = 65;
            }else
            if(GPA<2){
                GPA = 45;
            }
        }
        if(!toeflReg1.test(TOEFL) && !toeflReg2.test(TOEFL) && !toeflReg3.test(TOEFL)){
            alert('托福数值为10到120  雅思数值为3.0到9.0（最小间隔为0.5）');
            return false;
        }else{
            if(TOEFL>=10){
                if(TOEFL>=110){
                    TOEFL = 90;
                }else
                if(TOEFL>=100 && TOEFL<=109){
                    TOEFL = 80;
                }else
                if(TOEFL>=90 && TOEFL<=99){
                    TOEFL = 65;
                }else
                if(TOEFL<90){
                    TOEFL = 45;
                }
            }else{
                if(TOEFL>=8.0){
                    TOEFL = 90;
                }else
                if(TOEFL>=7.5 && TOEFL<=7.9){
                    TOEFL = 80;
                }else
                if(TOEFL>=5.5 && TOEFL<=7.4){
                    TOEFL = 65;
                }else
                if(TOEFL<5.5){
                    TOEFL = 45;
                }
            }
        }
        if((GMAT>=400 && GMAT<=800) || (GMAT>=261 && GMAT<=340)){
            if(GMAT>=350){
                if(GMAT>=750){
                    GMAT = 90;
                }else
                if(GMAT>=700 && GMAT<=749){
                    GMAT = 80;
                }else
                if(GMAT>=650 && GMAT<=699){
                    GMAT = 65;
                }else
                if(GMAT<650){
                    GMAT = 45;
                }
            }else{
                if(GMAT>=300){
                    GMAT = 90;
                }else
                if(GMAT>=250 && GMAT<=299){
                    GMAT = 80;
                }else
                if(GMAT>=200 && GMAT<=249){
                    GMAT = 65;
                }else
                if(GMAT<200){
                    GMAT = 45;
                }
            }
        }else{
            alert('GMAT数值为400到800（最小间隔为10），GRE数值为261-340');
            return false;
        }
        var all = GPA+GMAT+TOEFL;
        var collagen = Math.ceil(all/3);
        $('#collagen').val(collagen);
    }
    $(function () {
        $(".submit2 input").hover(function () {
            $(this).addClass("current").siblings("input").removeClass("current");
        });

//        上一步 下一步切换
        $(".next").on("click", function () {
            $(".cl-list-wrap").hide();
            $(".cl-list-wrap2").fadeIn();
            $(".step-tit img").eq(0).attr("src", "cn/images/assess/step-1b.png");
            $(".step-tit img").eq(1).attr("src", "cn/images/assess/step-2b.png");
        });

        $(".submit2 .prev").on("click", function () {
            $(".cl-list-wrap").fadeIn();
            $(".cl-list-wrap2").hide();
            $(".step-tit img").eq(0).attr("src", "cn/images/assess/step-1.png");
            $(".step-tit img").eq(1).attr("src", "cn/images/assess/step-2.png");
        });


//       仿下拉框

        $(".int-1").on("click", function () {
            if ($(this).hasClass("onCheck")) {
                $(this).removeClass("onCheck");
                $(this).children(".select-list").slideUp(200);
            } else {
                $(this).addClass("onCheck");
                $(this).children(".select-list").slideDown(200);
            }
        });

        $(".select-list li").on("click", function () {
            var text = $(this).html();
            $(this).parent().parent().children(".crow").removeClass("onCheck");
            $(this).parent().parent().children(".must").html(text).css({color: "#000000"});
            $(this).parent().slideUp(200);
        });


    })

</script>