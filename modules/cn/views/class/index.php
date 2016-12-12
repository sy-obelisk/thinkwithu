<!DOCTYPE html>
<html>
<head>
    <?php
    $seo = \app\modules\cn\models\Category::getSeoInfo(107);
    ?>
    <title><?php echo $seo['title'] ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="keywords" content="<?php echo $seo['keywords'] ?>">
    <meta name="description" content="<?php echo $seo['description'] ?>">
    <link rel="stylesheet" href="/cn/css/openClass.css">
    <link rel="stylesheet" href="/cn/css/open-public.css"/>
    <link rel="stylesheet" href="/cn/css/fonts/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="/cn/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/cn/js/open-public.js"></script>
    <script type="text/javascript" src="/cn/js/public.js"></script>
    <script type="text/javascript" src="/cn/js/jquery.SuperSlide.2.1.1.js"></script>
</head>
<body><!--公开课的页面都是有左右两边的组件的，我就不加了哈-->
<!--公开课头部-->
<?php use app\commands\front\ClassHeadWidget; ?>
<?php ClassHeadWidget::begin(); ?>
<?php ClassHeadWidget::end(); ?>
<!--轮播-->
<div class="classBanner">
    <div class="classB-hd hd">
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url', 'category' => '190,107']);
        ?>
        <ul>
            <?php
            foreach ($data as $v) {
                ?>
                <li></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div class="classB-bd">
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url', 'category' => '190,107']);
        ?>
        <ul>
            <?php
            foreach ($data as $v) {
                ?>
                <li><a href="<?php echo $v['url'] ?>"><img src="<?php echo $v['image'] ?>" alt="banner图"/></a></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <!--banner上面的遮罩层-->
    <?php
    $userId = Yii::$app->session->get('userId');
    ?>
    <?php
    if (!$userId) {
        ?>
        <div class="member-login">
            <h4>会员登录</h4>
            <ul>
                <li>
                    <div class="member-left">
                        <span></span>
                        <img src="/cn/images/open_username.png" alt="图片"/>
                    </div>
                    <div class="member-right">
                        <input class="indexUserName" type="text" placeholder="手机/邮箱/用户名"/>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="member-left">
                        <span></span>
                        <img src="/cn/images/open_password.png" alt="图片"/>
                    </div>
                    <div class="member-right">
                        <input class="indexUserPass" type="password" placeholder="密码"/>
                    </div>
                    <div style="clear: both"></div>
                    <a href="#">忘记密码？</a>

                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="leftVerification">
                        <input class="indexCode" type="text" placeholder="验证码"/>
                    </div>
                    <div class="rightImgFont">
                        <img title="点击刷新" src="/cn/api/verification-code" align="absbottom"
                             onclick="this.src='/cn/api/verification-code?'+Math.random();"/>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <input onclick="indexLogin()" type="button" value="马上登录"/>
                    <input onclick="userRegister()" type="button" value="立即注册"/>

                    <div class="otherLogin">
                        <span>其他账号登录</span><br>
                        <a href="#"><img src="/cn/images/open_weibo.png" alt="微博" width="18"/></a>
                        <a href="#"><img src="/cn/images/open_qq.png" alt="QQ" width="18"/></a>
                    </div>
                </li>
            </ul>
            <script type="text/javascript">
                function indexLogin() {
                    var userPass = $('.indexUserPass').val()
                    var userName = $('.indexUserName').val();
                    var code = $('.indexCode').val();
                    if (userName == "") {
                        alert('请输入用户名');
                        return false;
                    }
                    if (userPass == "") {
                        alert('请输入密码');
                        return false;
                    }

                    if (code == "") {
                        alert('请输入验证码');
                        return false;
                    }
                    $.post('/cn/api/check-login', {
                        verificationCode: code,
                        userPass: userPass,
                        userName: userName
                    }, function (re) {
                        if (re.code == 1) {
                            window.location.reload()
                        } else {
                            alert(re.message);
                        }
                    }, 'json')
                }
            </script>
        </div>
    <?php
    }
    ?>
</div>
<script type="text/javascript">
    jQuery(".classBanner").slide({mainCell: ".classB-bd ul", autoPlay: true, mouseOverStop: false});
</script>

<div class="open-commonTitle">
    <h4><a href="/public-class/abroad.html">留学申请</a></h4><a href="/public-class/abroad.html">更多</a>
</div>

<div class="open-commonStyle">
    <?php
    $data = \app\modules\cn\models\Content::getContent(['fields' => 'url,place,time', 'category' => '178,107', 'pageSize' => 8]);
    ?>
    <ul>
        <?php
        foreach ($data as $v) {
            ?>
            <li>
                <a href="/public-class/<?php echo $v['id'] ?>.html"><img src="<?php echo $v['image'] ?>" alt="课程图"/></a>

                <p> <a href="/public-class/<?php echo $v['id'] ?>.html"><?php echo $v['name'] ?></a></p>
                <span><?php echo date("Y-m-d H:i",strtotime($v['time'])) ?></span>
                <b><?php echo $v['place'] ?></b>

                <div style="clear: both;border-bottom: 1px #cbcbcb solid"></div>
                <?php
                if (!empty($v['url'])) { ?>
                    <a class="classBtn diffColor01" href="/public-class/back/<?php echo $v['id'] ?>.html">课程回放</a>
                <?php } else { ?>
                    <a href="javascript:void(0);" onclick="addCollect(<?php echo $v['id'] ?>)"
                       class="classBtn diffColor01">报名</a>
                <?php } ?>
                <a href="/public-class/<?php echo $v['id'] ?>.html" class="classBtn diffColor02">详情</a>
            </li>
        <?php
        }
        ?>
    </ul>
</div>

<div class="open-commonTitle">
    <h4><a href="/public-class/cultivate.html">考试培训</a></h4><a href="/public-class/cultivate.html">更多</a>
</div>

<div class="open-commonStyle">
    <ul>
        <li class="noBorderLi">
            <div class="haveBG-img imgBack01">
                <h1>GMAT</h1>
            </div>
        </li>
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url,place,time', 'category' => '115,107', 'pageSize' => 3]);
        ?>
        <?php
        foreach ($data as $v) {
            ?>
            <li>
                <a href="/public-class/<?php echo $v['id'] ?>.html"><img src="<?php echo $v['image'] ?>" alt="课程图"/></a>
                <p><a href="/public-class/<?php echo $v['id'] ?>.html"><?php echo $v['name'] ?></a></p>
                <span><?php echo date("Y-m-d H:i",strtotime($v['time'])) ?></span>
                <b><?php echo $v['place'] ?></b>

                <div style="clear: both;border-bottom: 1px #cbcbcb solid"></div>
                <?php if (!empty($v['url'])) { ?>
                    <a class="classBtn diffColor01" href="/public-class/back/<?php echo $v['id'] ?>.html">课程回放</a>
                <?php } else { ?>
                    <a href="javascript:;" onclick="addCollect(<?php echo $v['id'] ?>)"
                       class="classBtn diffColor01">报名</a>                     <?php } ?>
                <a href="/public-class/<?php echo $v['id'] ?>.html" class="classBtn diffColor02">详情</a>
            </li>
        <?php
        }
        ?>
        <li class="noBorderLi">
            <div class="haveBG-img imgBack02">
                <h1>托福</h1>
            </div>
        </li>
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url,place,time', 'category' => '116,107', 'pageSize' => 3]);
        ?>
        <?php
        foreach ($data as $v) {
            ?>
            <li>
                <a href="/public-class/<?php echo $v['id'] ?>.html"><img src="<?php echo $v['image'] ?>" alt="课程图"/></a>

                <p><a href="/public-class/<?php echo $v['id'] ?>.html"><?php echo $v['name'] ?></a></p>
                <span><?php echo date("Y-m-d H:i",strtotime($v['time'])) ?></span>
                <b><?php echo $v['place'] ?></b>

                <div style="clear: both;border-bottom: 1px #cbcbcb solid"></div>
                <?php if (!empty($v['url'])) { ?>
                    <a class="classBtn diffColor01" href="/public-class/back/<?php echo $v['id'] ?>.html">课程回放</a>                     <?php } else { ?>
                    <a href="javascript:;" onclick="addCollect(<?php echo $v['id'] ?>)"
                       class="classBtn diffColor01">报名</a>                     <?php } ?>
                <a href="/public-class/<?php echo $v['id'] ?>.html" class="classBtn diffColor02">详情</a>
            </li>
        <?php
        }
        ?>
    </ul>
</div>
<!--联系申友-->
<div style="background: white;width: 100%;padding: 10px 0 5px 0">
    <?php use app\commands\front\ContactWidget; ?>
    <?php ContactWidget::begin(); ?>
    <?php ContactWidget::end(); ?>
    <script type="text/javascript">
        jQuery(".connection").slide({mainCell: ".connectBd", trigger: "mouseover"});
    </script>
</div>

<!-------------------------------------------公开课页面的尾部-------------------------------------->
<?php use app\commands\front\ClassFootWidget; ?>
<?php ClassFootWidget::begin(); ?>
<?php ClassFootWidget::end(); ?>
<!--右边固定部分-->
<?php use app\commands\front\RightSuspensionWidget; ?>
<?php RightSuspensionWidget::begin(); ?>
<?php RightSuspensionWidget::end(); ?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php use app\commands\front\LeftSuspensionWidget; ?>
<?php LeftSuspensionWidget::begin(); ?>
<?php LeftSuspensionWidget::end(); ?>
<div class="open-fixed">
    <div class="inFix">
        <!--<a href="#">立即咨询</a>-->
        <b></b>
        <span onclick="scrollTo(0,0);">回顶部</span>
    </div>
</div>
</body>
</html>