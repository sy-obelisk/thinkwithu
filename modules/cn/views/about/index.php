<link rel="stylesheet" href="/cn/css/aboutUs.css"/>

<!-----------------------------导航end------------------------------>

<div class="quesAcontent">
    <div class="contentLeft">
        <div class="about-top">
            <div class="abT-left">
                <img src="/cn/images/aboutUs_logo.png" alt="关于我们"/>
            </div>
            <div class="abT-right">
                <h2>“非中介”透明服务 专注名校申请</h2>
                <p>
                    <span>全国咨询热线</span>
                    <b>
                        <img src="/cn/images/aboutUs_phone.png" alt="电话图标"/>
                        400-600-1123
                    </b>
                </p>
            </div>
        </div>
        <div class="infoBanner">
            <div class="infobHd hd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => '209']);
                        foreach($data as $k => $v) {
                            ?>
                            <li>
                                <div class="infoLimg">
                                    <img src="<?php echo $v['image']?>" alt="图片"/>
                                </div>
                                <div class="infoRifont">
                                    <span><?php echo $v['name']?></span>
                                </div>
                            </li>
                        <?php
                        }
                    ?>
                </ul>
            </div>
            <div class="infobBd">
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'description','category' => '209']);
                foreach($data as $k=>$v) {
                    ?>
                    <ul>
                        <li>
                            <div class="bdContent">
                                <div class="c-center">
                                    <?php echo $v['description']?>
                                </div>
                            </div>
                        </li>
                    </ul>
                <?php
                }
                ?>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".infoBanner").slide({mainCell:".infobBd",trigger:"mouseover"});
        </script>
    </div>
    <?php use app\commands\front\RightWidget;?>
    <?php RightWidget::begin(['type' => 1]);?>
    <?php RightWidget::end();?>
    <div style="clear: both"></div>
</div>
