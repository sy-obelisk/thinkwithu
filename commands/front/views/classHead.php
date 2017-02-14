<!--公开课导航-->
<link rel="stylesheet" href="/cn/css/login.css"/>
<script type="text/javascript" src="/cn/js/login.js"></script>
<!--<div class="classHead">
    <div class="headNav">
        <ul>
            <li>
                <a href="javascript:void(0);">
                    快速导航 <i class="fa fa-caret-down"></i></a>
                <div class="pull-down">
                    <ul>
                        <li>
                            <a href="/USA.html" target="_blank">
                                <span><img src="/cn/images/open_navIcon01.png" alt="图标"></span>
                                <b>美国申请</b>
                            </a>
                        </li>
                        <li>
                            <a href="/UK.html" target="_blank">
                                <span><img src="/cn/images/open_navIcon02.png" alt="图标"></span>
                                <b>英国申请</b>
                            </a>
                        </li>
                        <li>
                            <a href="/HK.html" target="_blank">
                                <span><img src="/cn/images/open_navIcon03.png" alt="图标"></span>
                                <b>香港申请</b>
                            </a>
                        </li>
                        <li>
                            <a href="/AUS.html" target="_blank">
                                <span><img src="/cn/images/open_navIcon04.png" alt="图标"></span>
                                <b>澳洲申请</b>
                            </a>
                        </li>
                        <li>
                            <a href="/COUNTRY.html" target="_blank">
                                <span><img src="/cn/images/open_navIcon05.png" alt="图标"></span>
                                <b>其他申请</b>
                            </a>
                        </li>
                        <li>
                            <a href="/question.html" target="_blank">
                                <span><img src="/cn/images/open_navIcon06.png" alt="图标"></span>
                                <b>留学问答</b>
                            </a>
                        </li>
                        <li>
                            <a href="/schools.html" target="_blank">
                                <span><img src="/cn/images/open_navIcon07.png" alt="图标"></span>
                                <b>院校库</b>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="/public-class.html" target="_blank">公开课首页</a></li>
            <li><a href="/Undergraduate.html" target="_blank">本科产品</a></li>
            <li><a href="/Postgraduate.html" target="_blank">硕士产品</a></li>
            <li><a href="/Doctor.html" target="_blank">博士产品</a></li>
            <li><a href="/gmatsheet.html" target="_blank">GMAT</a></li>
            <li><a href="/toefl/assistance.html" target="_blank">TOEFL</a></li>
            <li><a href="/schools.html" target="_blank">留学百科</a></li>
            <li><a href="/evaluation.html" target="_blank">评估</a></li>
            <li>
                <?php if(!$userId) { ?>
                    <div class="login-reg">
                        <div class="login" onclick="userLogin()">
                            <a href="javascript:void(0);">登录</a>
                        </div>
                        <div class="register" onclick="userRegister()">
                            <a href="javascript:void(0);">注册</a>
                        </div>
                    </div>
                <?php
                }else {
                    ?>-->
                <!-----登录之后效果----->
                <!--<div class="loginAfter">
                    <img src="<?php echo $userData['image']?$userData['image']:'/cn/images/details_defaultImg.png'?>" alt="用户头像" class="userImg"/>-->
                    <!--右下角的三角-->
                    <!--<img src="/cn/images/open_sanjiao.png" alt="三角图标" class="rightTriangle"/>-->
                    <!--下拉div-->
                    <!--<div class="toggleDiv">
                        <ul>
                            <li><a href="/public-class/user.html" target="_blank"><img src="/cn/images/open_loginIcon01.png" alt="图标"/> 账号管理</a></li>
                            <li><a href="/public-class/collect.html" target="_blank"><img src="/cn/images/open_loginIcon02.png" alt="图标"/>报名课程</a></li>
                            <li data-title="<?php echo Yii::$app->controller->action->id?>" data-value="<?php echo Yii::$app->controller->id?>" onclick="loginOut(this)"><a href="javascript:;"><img src="/cn/images/open_loginIcon03.png" alt="图标"/> 退出</a></li>
                        </ul>
                    </div>
                </div>

            <?php
                }
                ?>
            </li>-->
<!--            <li>-->
<!--                <a href="#"><img src="/cn/images/open_weibo.png" alt="图标"/></a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#"><img src="/cn/images/open_qq.png" alt="图标"/></a>-->
<!--            </li>-->
            <!--<li><a href="/" target="_blank">返回申友网</a></li>
        </ul>
    </div>
</div>-->

<nav class="nav-wrap">
    <div class="w10" style="overflow: inherit;">
        <a href="/"><img class="logo" src="/cn/Hirsi/images/sy-logo.png" alt=""></a>
        <ul class="inb nav-list clearfix">
            <li><a class="on on-hover nav1-link" href="/">首页</a></li>
            <li><a class="nav1-link" href="/study-aboard/assistance.html">留学服务</a>
                <div class="nav2-wrap">
                    <div class="nav2-list">
                        <div class="inb nav2-left-wrap">
                            <div class="nav2-left">
                                <div class="inb nav2-name">我要申请</div>
                                <div class="inb nav2-mid1">
                                    <a href="/Undergraduate.html">本科</a>
                                    <a href="/Postgraduate.html">硕士</a>
                                    <a href="/Doctor.html">博士</a>
                                    <a href="/picture-details/127/index,111.html">MBA</a>
                                    <br>
                                    <a href="/USA.html">美国</a>
                                    <a href="/UK.html">英国</a>
                                    <a href="/HK.html">香港</a>
                                    <a href="/AUS.html">澳洲</a>
                                    <a href="/COUNTRY.html">其他</a>
                                </div>
                            </div>
                            <div class="nav2-left">
                                <div class="inb nav2-name">推荐服务</div>
                                <div class="inb nav2-mid">
                                    <a href="/picture-details/111/index,110.html">文书定制</a>
                                    <a href="/picture-details/116/index,110.html">签证服务</a>
                                    <a href="/picture-details/115/index,110.html">面试辅导</a>
                                    <br>
                                    <a href="/practices.html">实习</a>
                                    <a href="/picture-details/118/index,110.html">Summer school</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><a class="nav1-link" href="/gmatsheet.html">GMAT培训</a></li>
            <li><a class="nav1-link" href="/toefl/assistance.html">托福培训</a></li>
            <li><a class="nav1-link" href="/ieltssheet.html">雅思培训</a></li>
            <li><a class="nav1-link" href="/public-class.html">申友讲堂</a></li>
            <li><a class="nav1-link" href="http://bbs.gmatonline.cn/forum.php">申友社区</a></li>
            <li><a class="nav1-link" href="/teachers.html">名师云集</a></li>
            <li><a class="nav1-link" href="/case.html">成功案例</a></li>
            <li><a class="nav1-link" href="/schools.html">院校库</a></li>
        </ul>
    </div>
</nav>
<div class="maskLayer" style="display: none;"></div>
<!------------------登录框-------------------------->
<div class="Dialog login" style="display: none;">
    <!--关闭div-->
    <div class="login-close" onclick="closeLogin(this)">
        <img src="/cn/images/login_close.png" alt="关闭图标"/>
    </div>
    <div class="imgTitle">
        <img src="/cn/images/logo.png" alt="log图标"/>
    </div>
    <div class="group-input">
        <div>
            <input type="text" class="userName" placeholder="手机号/邮箱/用户名" onblur="notNull(this)"/>
            <p>用户名不能为空！</p>
        </div>
        <div>
            <input type="password" placeholder="请输入密码" class="userPass inputMT" onblur="verifyCode(this)"/>
            <p>密码不能为空！</p>
        </div>
        <input onclick="subLogin()" type="button" value="登陆" class="inputMT"/>
    </div>
    <div class="otherCont">
        <a href="javascript:void(0);" onclick="RegisterNow(this)">立即注册</a>
        <a href="javascript:void(0);" class="floatR" onclick="forgetPassword(this)">忘记密码？</a>
    </div>
    <!--    <div class="other-login">-->
    <!--        <span>还可以选择QQ登陆</span>-->
    <!--        <img src="/cn/images/login_qq.png" alt="qq登陆"/>-->
    <!--    </div>-->
</div>
<!------------------注册框-------------------------->
<div class="Dialog register DiaNone topPos">
    <!--关闭div-->
    <div class="login-close" onclick="closeLogin(this)">
        <img src="/cn/images/login_close.png" alt="关闭图标"/>
    </div>
    <div class="imgTitle">
        <img src="/cn/images/logo.png" alt="log图标"/>
    </div>
    <div class="group-input groupBanner">
        <div class="groupHd hd">
            <ul>
                <li class="on"><span>使用手机注册</span></li>
                <li><span>使用邮箱注册</span></li>
            </ul>
        </div>
        <div style="clear: both"></div>
        <div class="groupBd">
            <ul>
                <li>
                    <div>
                        <input type="text" class="phone" placeholder="手机号" onblur="verifyPhone(this)"/>
                        <p>手机号不能为空！</p>
                    </div>
                    <div>
                        <input type="text" placeholder="请输入验证码" class="phoneCode authCode" onblur="notNull(this)"/>
                        <input type="button"data-type="1" data-value="1" value="获取验证码" class="obtain" onclick="countdown(this,60)"/>
                        <p>验证码不能为空！</p>
                    </div>
                    <div>
                        <input type="text" class="phoneName" placeholder="用户名" onblur="verifyUserName(this)"/>
                        <p>用户名不能为空！</p>
                    </div>
                    <div>
                        <input type="password" placeholder="请输入密码" class="phonePass inputMT" onblur="verifyCode(this)"/>
                        <p>密码不能为空！</p>
                    </div>
                    <input onclick="phoneRegister()" type="button" value="注册" class="inputMT"/>
                </li>
            </ul>
            <ul>
                <li>
                    <div>
                        <input type="text" class="email" placeholder="邮箱" onblur="verifyEmail(this)"/>
                        <p>邮箱不能为空！</p>
                    </div>
                    <div>
                        <input type="text" placeholder="请输入验证码" class="emailCode authCode" onblur="notNull(this)"/>
                        <input type="button" data-type="1" data-value="2" value="获取验证码" class="obtain" onclick="countdown(this,60)"/>
                        <p>验证码不能为空！</p>
                    </div>
                    <div>
                        <input type="text" class="emailName" placeholder="用户名" onblur="verifyUserName(this)"/>
                        <p>用户名不能为空！</p>
                    </div>
                    <div>
                        <input type="password" placeholder="请输入密码" class="emailPass inputMT" onblur="verifyCode(this)"/>
                        <p>密码不能为空！</p>
                    </div>
                    <input type="button" onclick="emailRegister()" value="注册" class="inputMT"/>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".groupBanner").slide({mainCell:".groupBd",trigger:"mouseover"});
    </script>
    <div class="otherCont conMB">
        <span>已有账号？</span>
        <a href="javascript:void(0);" onclick="reLogin(this)">登陆到申友公开课</a>
    </div>
</div>
<!-------------------找回密码框------------------>
<div class="Dialog DiaNone topPos">
    <!--关闭div-->
    <div class="login-close" onclick="closeLogin(this)">
        <img src="/cn/images/login_close.png" alt="关闭图标"/>
    </div>
    <div class="imgTitle">
        <img src="/cn/images/logo.png" alt="log图标"/>
    </div>
    <div class="group-input groupBanner02">
        <div class="groupHd hd">
            <ul>
                <li class="on"><span>使用手机找回密码</span></li>
                <li><span>使用邮箱找回密码</span></li>
            </ul>
        </div>
        <div style="clear: both"></div>
        <div class="groupBd">
            <ul>
                <li>
                    <div>
                        <input type="text" class="findPhone" placeholder="请输入你的手机号" onblur="verifyPhone(this)"/>
                        <p>手机号不能为空！</p>
                    </div>
                    <div>
                        <input type="text" placeholder="请输入验证码" class="findPhoneCode authCode" onblur="notNull(this)"/>
                        <input type="button" data-type="2" data-value="1" value="获取验证码" class="obtain" onclick="countdown(this,60)"/>
                        <p>验证码不能为空！</p>
                    </div>
                    <div>
                        <input type="password" placeholder="请输入新密码" class="findPhonePass inputMT" onblur="verifyCode(this)"/>
                        <p>密码不能为空！</p>
                    </div>
                    <input type="button" onclick="findPhone()" value="保存" class="inputMT"/>
                </li>
            </ul>
            <ul>
                <li>
                    <div>
                        <input type="text" class="findEmail" placeholder="请输入你的邮箱" onblur="verifyEmail(this)"/>
                        <p>邮箱不能为空！</p>
                    </div>
                    <div>
                        <input type="text" placeholder="请输入验证码" class="findEmailCode authCode" onblur="notNull(this)"/>
                        <input type="button" data-type="2" data-value="2" value="获取验证码" class="obtain" onclick="countdown(this,60)"/>
                        <p>验证码不能为空！</p>
                    </div>
                    <div>
                        <input type="password" placeholder="请输入新密码" class="findEmailPass inputMT" onblur="verifyCode(this)"/>
                        <p>密码不能为空！</p>
                    </div>
                    <input type="button" onclick="findEmail()" value="保存" class="inputMT"/>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".groupBanner02").slide({mainCell:".groupBd",trigger:"mouseover"});
    </script>
    <div class="otherCont conMB">
        <a href="javascript:void(0);" class="findChange" onclick="reLoginThink(this)">又想起来了</a>
    </div>
</div>

<script type="text/javascript">
    /**
     * 登录框
     */
    function userLogin(){
        $('.maskLayer').show();
        $('.login').show();
    }
    /**
     * 注册框
     */
    function userRegister(){
        $('.maskLayer').show();
        $('.register').show();
    }

    /**
     * 用户登录
     */
    function subLogin(){
        var userPass = $('.userPass').val()
        var userName = $('.userName').val();
        if(userName == ""){
            $('.userName').next("p").css("visibility","visible").html("请输入用户名!");
            return false;
        }
        if(userPass == ""){
            $('.userPass').next("p").css("visibility","visible").html("请输入密码");
            return false;
        }
        $.post('/cn/api/check-login',{userPass:userPass,userName:userName},function(re){
            if(re.code == 1){
                window.location.reload()
            }else{
                alert(re.message);
            }
        },'json')
    }
    /**
     * 用户注册
     * @returns {boolean}
     */
    function phoneRegister(){
        var phone = $('.phone').val()
        var code = $('.phoneCode').val()
        var phonePass = $('.phonePass').val()
        var userName = $('.phoneName').val()
        if(phone == ""){
            $('.phone').next("p").css("visibility","visible").html("请输入您的手机号!");
            return false;
        }
        if(code == ""){
            $('.phoneCode').next().next("p").css("visibility","visible").html("请输入手机验证码");
            return false;
        }
        if(phonePass == ""){
            $('.phonePass').next("p").css("visibility","visible").html("请输入您的注册密码");
            return false;
        }
        if(userName == ""){
            $('.phoneName').next("p").css("visibility","visible").html("请输入您的用户名");
            return false;
        }
        $.post('/cn/api/register',{userName:userName,type:1,registerStr:phone,code:code,pass:phonePass},function(re){
            if(re.code == 1){
                alert(re.message);
                $.post('/cn/api/check-login',{userPass:phonePass,userName:phone},function(){
                    window.location.reload()
                },'json')
            }else{
                alert(re.message);
            }
        },'json')
    }

    /**
     * 用户注册
     * @returns {boolean}
     */
    function emailRegister(){
        var email = $('.email').val()
        var code = $('.emailCode').val()
        var emailPass = $('.emailPass').val()
        var userName = $('.emailName').val()
        if(email == ""){
            $('.email').next("p").css("visibility","visible").html("请输入您的邮箱!");
            return false;
        }
        if(code == ""){
            $('.emailCode').next().next("p").css("visibility","visible").html("请输入邮箱验证码");
            return false;
        }
        if(emailPass == ""){
            $('.emailPass').next("p").css("visibility","visible").html("请输入您的注册密码");
            return false;
        }
        if(userName == ""){
            $('.emailName').next("p").css("visibility","visible").html("请输入您的用户名");
            return false;
        }
        $.post('/cn/api/register',{userName:userName,type:2,registerStr:email,code:code,pass:emailPass},function(re){
            if(re.code == 1){
                alert(re.message);
                $.post('/cn/api/check-login',{userPass:emailPass,userName:email},function(re){
                    window.location.reload()
                },'json')
            }else{
                alert(re.message);
            }
        },'json')
    }

    /**
     * 用户退出
     */
    function loginOut(_this){
        $.post('/cn/api/login-out',{},function(re){
            var controller = $(_this).attr('data-value');
            var action = $(_this).attr('data-title');
            if(action == 'manage' || action == 'collect'){
                window.location.href="/public-class.html"
            }else{
                window.location.reload()
            }
        },'json')
    }

    /**
     * 邮箱找回密码
     * @returns {boolean}
     */
    function findEmail(){
        var findEmail = $('.findEmail').val()
        var findEmailCode = $('.findEmailCode').val()
        var findEmailPass = $('.findEmailPass').val()
        if(findEmail == ""){
            $('.findEmail').next("p").css("visibility","visible").html("请输入您的电话!");
            return false;
        }
        if(findEmailCode == ""){
            $('.findEmailCode').next().next("p").css("visibility","visible").html("请输入电话验证码");
            return false;
        }
        if(findEmailPass == ""){
            $('.findEmailPass').next("p").css("visibility","visible").html("请输入您的新密码");
            return false;
        }
        $.post('/cn/api/find-pass',{type:2,registerStr:findEmail,code:findEmailCode,pass:findEmailPass},function(re){
            if(re.code == 1){
                alert(re.message);
                $('.findChange').click();
            }else{
                alert(re.message);
            }
        },'json')
    }

    /**
     * 手机找回密码
     * @returns {boolean}
     */
    function findPhone(){
        var findPhone = $('.findPhone').val()
        var findPhoneCode = $('.findPhoneCode').val()
        var findPhonePass = $('.findPhonePass').val()
        if(findPhone == ""){
            $('.findPhone').next("p").css("visibility","visible").html("请输入您的电话!");
            return false;
        }
        if(findPhoneCode == ""){
            $('.findPhoneCode').next().next("p").css("visibility","visible").html("请输入电话验证码");
            return false;
        }
        if(findPhonePass == ""){
            $('.findPhonePass').next("p").css("visibility","visible").html("请输入您的新密码");
            return false;
        }
        $.post('/cn/api/find-pass',{type:1,registerStr:findPhone,code:findPhoneCode,pass:findPhonePass},function(re){
            if(re.code == 1){
                alert(re.message);
                $('.findChange').click();
            }else{
                alert(re.message);
            }
        },'json')
    }

    /**
     * 添加收藏
     * @param _id
     */
    function addCollect(_id){
        $.post('/cn/api/add-collect',{id:_id,collectType:1},function(re){
            alert(re.message);
        },'json')
    }
</script>