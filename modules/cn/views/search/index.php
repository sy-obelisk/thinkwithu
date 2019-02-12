<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--  <meta charset="UTF-8">-->
<!--  <title>申友官网</title>-->
  <!--阻止浏览器缓存-->
<!--  <meta http-equiv="pragma" content="no-cache">-->
<!--  <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">-->
<!--  <meta http-equiv="expires" content="0">-->
<!--  <!-- Basic Page Needs-->
<!--  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
<!--  <meta name="keywords"-->
<!--        content="申友_雅思_IELTS_雷哥雅思_申友雅思在线_雅思备考_雷哥雅思课程_雅思培训_雅思在线课程_雅思网络课程_雅思网课_雅思备考_IELTS资料_IELTS视频课程_IELTS网络课程_备考雅思_考雅思">-->
<!--  <meta name="description" content="申友雅思在线|申友IELTS在线培训课程，雅思在线课程，雅思网络课程直播课，大中华区权威一站式雅思学习生态系统">-->
<!--  <meta name="title" content="申友雅思在线_雅思备考_雅思培训_雅思网络课程_雅思在线课程_雅思网课_雅思直播课_IELTS申友">-->
<!--  <meta name="author" content="">-->
<!--  <meta name="Copyright" content="">-->
<!--  <!-- 让IE浏览器用最高级内核渲染页面 还有用 Chrome 框架的页面用webkit 内核-->
<!--  <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">-->
<!--  <!-- IOS6全屏 Chrome高版本全屏-->
<!--  <meta name="apple-mobile-web-app-capable" content="yes">-->
<!--  <meta name="mobile-web-app-capable" content="yes">-->
<!--  <!-- 让360双核浏览器用webkit内核渲染页面-->
<!--  <meta name="renderer" content="webkit">-->
<!--  <script src="/cn/js/jquery1.42.min.js"></script>-->
<!--  <script src="/cn/Hirsi/js/jquery-3.1.0.min.js"></script>-->
<!--  <link rel="stylesheet" href="/cn/css/header.css"/>-->
<!--  <link rel="stylesheet" href="/cn/css/footer.css"/>-->
<!--  <link rel="stylesheet" href="/cn/css/public.css?v=1.2"/>-->
<!---->
<!--  <link rel="stylesheet" href="/cn/Hirsi/css/reset.css">-->
<!--  <link rel="stylesheet" href="/cn/Hirsi/css/index.css">-->
  <link rel="stylesheet" href="/cn/css/search.css">
<!--  <script type="text/javascript" src="/cn/js/public.js"></script>-->
<!--  <title>申友雅思在线_雅思备考_雅思培训_雅思网络课程_雅思在线课程_雅思网课_雅思直播课_IELTS申友</title>-->
<!--</head>-->
<!--<body>-->
<!--<header class="sy-header">-->
<!--  <div class="w10 clearfix">-->
<!--    <img src="/cn/Hirsi/images/sy-text.png" style="margin-right: 55px" alt="高分成就梦想名校改变人生">-->
<!--    <img src="/cn/Hirsi/images/sy-tel.png" alt="400-600-1123">-->
<!--    <a class="refer-btn"-->
<!--       href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw="-->
<!--       target="_blank">在线咨询</a>-->
    <!--登录&注册-->
<!--    <div class="login-wrap fr" style="display: none;">-->
<!--      <span class="on">登录</span>-->
<!--      <span>注册</span>-->
<!--    </div>-->
    <!--搜索-->
<!--    <div class="search-wrap fr">-->
<!--      <input class="search search1" type="search" onkeyup="enterKey(event,this)" placeholder="请输入关键词">-->
<!--      <img src="/cn/Hirsi/images/search-icon.png" style="margin-left: -1px;cursor: pointer;" onclick="keySearch()" alt="搜索">-->
<!--    </div>-->
<!--  </div>-->
<!--</header>-->
<!-----------------------------头部------------------------------>
<?php //use app\commands\front\BannerWidget;?>
<?php //BannerWidget::begin();?>
<?php //BannerWidget::end();?>
<!--<div style="clear: both;margin-bottom: 10px;"></div>-->
<!---------------------------左边悬浮窗---------------------------------->
<?php //use app\commands\front\LeftSuspensionWidget;?>
<?php //LeftSuspensionWidget::begin();?>
<?php //LeftSuspensionWidget::end();?>

<section>
  <div class="search-bc">
    <div class="search-wrap fr">
      <input class="search search2" type="search" onkeyup="enterKey(event,this)" placeholder="请输入关键词">
      <img src="/cn/Hirsi/images/search-icon.png" style="margin-left: -1px;cursor: pointer;" onclick="keySearch()" alt="搜索">
    </div>
    <div class="search-hot">
      <dl>
        <dt>热搜词：</dt>
        <dd>GMAT</dd>
        <dd>托福</dd>
        <dd>留学</dd>
        <dd>雅思</dd>
        <dd>美国</dd>
        <dd>案例</dd>
      </dl>
    </div>
  </div>
  <div class="search-cnt search-subject">
    <ul>
      <?php  if($data==false){echo '无搜索结果';}else{ $keyword = Yii::$app->request->get('keyword', '');foreach($data as $v) {?>
        <li class="search-list">
          <h2>
           <a href="/word-details/<?php echo $v['id']?>/<?php echo $v['catId']?>.html"><?php echo str_replace($keyword,'<span style="color:red;">'.$keyword.'</span>',$v['name'])?></a>
          </h2>
<!--          <div>-->
<!--            <p>--><?php //echo $v['summary']?><!--</p>-->
<!--          </div>-->
        </li>
      <?php }}?>
<!--      后台输出页码-->
      <?php if($data==false){echo '';}else{echo $str;}?>
  </div>
</section>
<!-----------------------------尾部------------------------------>
<?php //use app\commands\front\FooterWidget;?>
<?php //FooterWidget::begin();?>
<?php //FooterWidget::end();?>
</body>
<script>
  $(function () {
    $('.search').val("<?php echo Yii::$app->request->get('keyword', '')?>");
  })
</script>
</html>