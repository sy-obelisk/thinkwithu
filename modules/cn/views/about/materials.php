
    <link rel="stylesheet" href="/cn/css/ShenYouMaterials.css"/>
<!-----------------------------导航end------------------------------>

<div class="materHead">
    <img src="/cn/images/shenYou_banner.jpg" alt="申友教材"/>
</div>
<div class="materialsC">
    <ul>
        <?php
            $data = \app\modules\cn\models\Content::getContent(['category' => '108','fields' => 'recommend,synopsis,abstract']);
        ?>
        <?php
            foreach($data as $v) {
                ?>
                <li>
                    <div class="leftBook"><img src="<?php echo $v['image']?>" alt="申友教材"/></div>
                    <div class="rightInfo">
                        <h4><?php echo $v['name']?></h4>

                        <p><?php echo $v['abstract']?>
                            <br>本书的主要内容是：<?php echo $v['synopsis']?></p>
                        <h5>推荐理由</h5>

                        <div class="excuse">
                            <pre>
<?php echo $v['recommend']?>
                            </pre>
                        </div>
                    </div>
                    <div style="clear: both"></div>
                </li>
            <?php
            }
        ?>
    </ul>
</div>
