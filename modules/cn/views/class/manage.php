<!DOCTYPE html>
<html>
<head>
    <?php
    $seo = \app\modules\cn\models\Category::getSeoInfo(107);
    ?>
    <title><?php echo $seo['title']?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $seo['keywords']?>">
    <meta name="description" content="<?php echo $seo['description']?>">
    <!--防止设置padding的div增大-->
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <link rel="stylesheet" href="/cn/css/openClass.css">
    <link rel="stylesheet" href="/cn/css/open-public.css"/>
    <link rel="stylesheet" href="/cn/css/personalSettings.css"/>
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css"/>
    <script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/ueditor/ueditor.all.min.js"></script>
    <!-- 编辑器公式插件 -->
    <script type="text/javascript" charset="utf-8" src="/ueditor/kityformula-plugin/addKityFormulaDialog.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/kityformula-plugin/getKfContent.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/kityformula-plugin/defaultFilterFix.js"></script>
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/cn/js/personalSettings.js"></script>
    <script type="text/javascript" src="/cn/js/open-public.js"></script>
</head>
<body>
<!---------------------头部--------------------------->
<?php use app\commands\front\ClassHeadWidget;?>
<?php ClassHeadWidget::begin();?>
<?php ClassHeadWidget::end();?>
<!---------------------头部 end--------------------------->
<div class="personNav">
    <ul>
        <li><a href="/user/exam.html">个人中心</a> &gt; <a href="javascript:void(0);">账号管理</a></li>
    </ul>
</div>
<div class="personContent">
    <div class="headPortrait">
        <div class="headP-left">
            <img class="image" src="<?php echo $data->image?$data->image:'/cn/images/details_defaultImg.png'?>" alt="用户头像"/>
        </div>
        <div class="headP-right">
            <h1 class="navNickname"><?php echo $data->nickname?$data->nickname:$data->userName?></h1>
            <div>
                <input type="button" value="上传头像" onclick="upImage()" class="uploadHead"/>
            </div>
        </div>
    </div>
    <div class="information">
        <ul>
            <li>
                <label>个人资料</label>
                <span class="navNickname"><?php echo $data->nickname?$data->nickname:$data->userName?></span>
                <a href="javascript:void(0);" onclick="copyReader(this,1)"><span>编辑</span> <i class="fa fa-angle-double-down"></i></a>
                <div style="clear: both"></div>
                <div class="groupInput">
                    <ul class="groupUl01">
                        <li>
                            <label>昵称：</label>
                            <input type="text" class="nickname" value="<?php echo $data->nickname?>" onblur="notNull(this)"/>
                            <p>昵称不能为空！</p>
                        </li>
<!--                        <li>-->
<!--                            <label>学校：</label>-->
<!--                            <input class="school" value="--><?php //echo $data->school?><!--" type="text"/>-->
<!--                            <p>&nbsp;</p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <label>专业：</label>-->
<!--                            <input class="major" value="--><?php //echo $data->major?><!--" type="text"/>-->
<!--                            <p>&nbsp;</p>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <label>年级：</label>-->
<!--                            <input  class="grade" value="--><?php //echo $data->grade?><!--" type="text"/>-->
<!--                            <p>&nbsp;</p>-->
<!--                        </li>-->
                        <li>
                            <label>&nbsp;</label>
                            <input type="button" onclick="changeUserInfo()" value="保存"/>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <label>电话</label>
                <span class="navPhone"><?php echo $data->phone?$data->phone:'未绑定电话'?></span>
                <a href="javascript:void(0);" onclick="copyReader(this,3)"><span>编辑</span>  <i class="fa fa-angle-double-down "></i></a>
                <div class="groupInput">
                    <ul class="groupUl03">
                        <li>
                            <label>电话：</label>
                            <input type="text" class="changePhone" value="<?php echo $data->phone?>" onblur="verifyPhone(this)"/>
                            <p>电话不能为空！</p>
                        </li>
                        <li>
                            <label>验证码：</label>
                            <input style="width: 70px;" type="text" class="changePhoneCode" value=""/>
                            <input type="button" data-type="3" data-value="1" value="获取验证码" class="obtain" onclick="countdown(this,60)"/>
                            <p>验证码！</p>
                        </li>
                        <li>
                            <label>&nbsp;</label>
                            <input onclick="changeUserPhone()" type="button" value="保存"/>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <label>登录邮箱</label>
                <span class="navEmail"><?php echo $data->email?$data->email:'未绑定邮箱'?></span>
                <a href="javascript:void(0);" onclick="copyReader(this,2)"><span>编辑</span>  <i class="fa fa-angle-double-down "></i></a>
                <div style="clear: both"></div>
                <div class="groupInput">
                    <ul class="groupUl02">
                        <li>
                            <label>当前邮箱：</label>
                            <span class="navEmail"><?php echo $data->email?$data->email:'未绑定邮箱'?></span>
                        </li>
                        <li>
                            <label>新邮箱：</label>
                            <input type="text" class="changeEmail" onblur="verifyEmail(this)"/>
                            <p>邮箱不能为空！</p>
                        </li>
                        <li>
                            <label>验证码：</label>
                            <input style="width: 70px;" type="text" class="changeEmailCode" value=""/>
                            <input type="button" data-value="2" value="获取验证码" class="obtain" onclick="countdown(this,60)"/>
                            <p>验证码！</p>
                        </li>
                        <li>
                            <label>&nbsp;</label>
                            <input onclick="changeUserEmail()" type="button" value="保存"/>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <label>密码</label>
                <span>************</span>
                <a href="javascript:void(0);" onclick="copyReader(this,3)"><span>编辑</span>  <i class="fa fa-angle-double-down "></i></a>
                <div class="groupInput">
                    <ul class="groupUl03">
                        <li>
                            <label>当前密码：</label>
                            <input type="password" value="" class="oldPassword" onblur="verifyCode(this,0)"/>
                            <p>密码不能为空！</p>
                        </li>
                        <li>
                            <label>新密码：</label>
                            <input type="password" class="newPassword" onblur="verifyCode(this,0)"/>
                            <p>新密码不能为空！</p>
                        </li>
                        <li>
                            <label>确认新密码：</label>
                            <input type="password" class="newPassword2" onblur="verifyCode(this,1)"/>
                            <p>再次输入密码不能为空！</p>
                        </li>
                        <li>
                            <label>&nbsp;</label>
                            <input onclick="changeUserPass()" type="button" value="保存"/>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--右边固定部分-->
<?php use app\commands\front\RightSuspensionWidget;?>
<?php RightSuspensionWidget::begin();?>
<?php RightSuspensionWidget::end();?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php use app\commands\front\LeftSuspensionWidget;?>
<?php LeftSuspensionWidget::begin();?>
<?php LeftSuspensionWidget::end();?>
<!---------------------尾部--------------------------->
<!-------------------------------------------公开课页面的尾部-------------------------------------->
<div class="open-footer">
    <div>
        <a href="#">关于申友</a>
        <a href="#">联系我们</a>
        <a href="#">申友招聘</a>
    </div>
    <div>
        <span>友情链接：</span>
        <a href="#">SAT online</a>
        <span>|</span>
        <a href="#">雷哥GMAT在线</a>
        <span>|</span>
        <a href="#">去留学网</a>
        <span>|</span>
        <a href="#">小申托福</a>
        <span>|</span>
        <a href="#">留学社区</a>
    </div>
    <div>
        <span>Copyright &copy; 2015 All Right Reserved 申友教育 版权所有 京ICP备16000003号</span>
    </div>
</div>
<!---------------------尾部 end--------------------------->
</body>
</html>
<script>
    //实例化编辑器
    var o_ueditorupload = UE.getEditor('headPortrait',
        {
            autoHeightEnabled:false
        });
    o_ueditorupload.ready(function ()
    {

        o_ueditorupload.hide();//隐藏编辑器

        //监听图片上传
        o_ueditorupload.addListener('beforeInsertImage', function (t,arg)
        {
            $.post('/cn/api/up-image',{image:arg[0].src},function(re){
                if(re.code == 1){
                    $('.image').attr('src',arg[0].src);
                    $('.navImage').attr('src',arg[0].src);
                }else{
                    alert(re.message)
                }
            },'json')

        });

        /* 文件上传监听
         * 需要在ueditor.all.min.js文件中找到
         * d.execCommand("insertHtml",l)
         * 之后插入d.fireEvent('afterUpfile',b)
         */
        o_ueditorupload.addListener('afterUpfile', function (t, arg)
        {

        });
    });

    //弹出图片上传的对话框
    function upImage()
    {
        var myImage = o_ueditorupload.getDialog("insertimage");
        myImage.open();
    }
    //弹出文件上传的对话框
    //    function upFiles()
    //    {
    //        var myFiles = o_ueditorupload.getDialog("attachment");
    //        myFiles.open();
    //    }

</script>
<script type="text/plain" id="headPortrait"></script>
<script type="text/javascript">
    /**
     * 修改用户信息
     * @returns {boolean}
     */
    function changeUserInfo(){
        var nickname = $('.nickname').val();
        if(nickname == ''){
            alert('请输入昵称');
            return false;
        }
//        var phone = $('.changePhone').val();
//        var phoneCode = $('.changePhoneCode').val();
//        var school = $('.school').val();
//        var major = $('.major').val();
//        var grade = $('.grade').val();
        $.post('/cn/api/change-user-info',{nickname:nickname},function(re){
            if(re.code == 1){
                $('.navNickname').html(nickname);
            }
            alert(re.message);
        },'json')
    }
    /**
     * 修改用户邮箱
     * @returns {boolean}
     */
    function changeUserEmail(){
        var email = $('.changeEmail').val();
        if(email == ''){
            alert('请输入邮箱');
            return false;
        }
        var emailCode = $('.changeEmailCode').val();
        if(emailCode == ''){
            alert('请输入邮箱验证码');
            return false;
        }
        $.post('/cn/api/change-user-email',{email:email,emailCode:emailCode},function(re){
            if(re.code == 1){
                $('.navEmail').html(email);
            }
            alert(re.message);
        },'json')
    }

    /**
     * 修改用户电话
     * @returns {boolean}
     */
    function changeUserPhone(){
        var phone = $('.changePhone').val();
        if(phone == ''){
            alert('请输入电话');
            return false;
        }
        var phoneCode = $('.changePhoneCode').val();
        if(phoneCode == ''){
            alert('请输入电话验证码');
            return false;
        }
        $.post('/cn/api/change-user-phone',{phone:phone,phoneCode:phoneCode},function(re){
            if(re.code == 1){
                $('.navPhone').html(phone);
            }
            alert(re.message);
        },'json')
    }
    /**
     * 修改用户密码
     * @returns {boolean}
     */
    function changeUserPass(){
        var oldPassword = $('.oldPassword').val();
        if(oldPassword == ''){
            alert('请输入当前密码');
            return false;
        }
        var newPassword = $('.newPassword').val();
        var newPassword2 = $('.newPassword2').val();
        if(newPassword == '' || newPassword2 ==''){
            alert('请输入新密码');
            return false;
        }
        if(newPassword != newPassword2){
            alert('两次新密码不一致');
            return false;
        }
        $.post('/cn/api/change-user-pass',{oldPassword:oldPassword,newPassword:newPassword},function(re){
            alert(re.message);
        },'json')
    }
</script>