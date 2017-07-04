
    <link rel="stylesheet" href="/cn/css/teacherDetails.css"/>


<div class="detailTop">
    <img src="/cn/images/quesAnswer_topH02.jpg" alt="头部图片"/>
</div>

<div class="detailCon">
    <div class="detail-top">
        <div class="detailLeft">
            <div class="l-left">
                <img src="<?php echo $data[0]['image']?>" alt="老师照片">
            </div>
            <div class="l-right"><?php echo $data[0]['name']?><?php echo $data[0]['job']?></div>
            <div style="clear: both"></div>
        </div>
        <div class="detailRight">
            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">
                <img src="/cn/images/teacherD_messIcon.png" alt="短信图标"/>
                <span>和老师聊聊</span><b>┘</b>
            </a>
        </div>
        <div style="clear: both"></div>
    </div>
    <div class="detail-con">
        <?php echo $data[0]['description']?>
    </div>
</div>
<?php

$studyInSpeech = \app\modules\cn\models\Content::getContent(['fields' => 'abstract,smallPhoto','category' => '102,178','pageSize' => 4,'order' => "c.viewCount DESC"]);
$trainingSpeech = \app\modules\cn\models\Content::getContent(['fields' => 'abstract,smallPhoto','category' => '102,177','pageSize' => 4,'order' => "c.viewCount DESC"]);
?>
<div class="students">
    <div class="stu-left">
        <img src="/cn/images/teacherD_student.jpg" alt="申友学子图片"/>
    </div>
    <div class="stu-right">
        <div class="ri-grey">
            <h4>留学感言 <span>OVERSEAS STUDY</span></h4>
            <?php
            if (isset($studyInSpeech[0])) {
            ?>
            <div class="riG-left">
                <div class="riGl-left">
                    <img src="<?php echo $studyInSpeech[0]['smallPhoto'] ?>" alt="图片">
                </div>
                <div class="riGl-right">
                    <h2>
                        "<?php echo $studyInSpeech[0]['title'] ?> "
                    </h2>
                    <p>
                        <?php echo $studyInSpeech[0]['abstract'] ?>
                    </p>
                </div>
                <div style="clear: both"></div>
            </div>
            <div class="riG-right">
                <ul>
                    <?php
                    foreach ($studyInSpeech as $k => $v) {
                        if ($k == 0) {
                            continue;
                        }
                        ?>
                        <li><img src="/cn/images/teacherD_playIcon.png" alt="图标"/><a
                                href="/word-details/<?php echo $v['id'] ?>/102.html"><?php echo $v['title'] ?></a>
                        </li>
                    <?php
                    }
                    ?>

                </ul>
            </div>
            <div style="clear: both"></div>
            <?php
            }
            ?>
        </div>
        <div class="ri-grey">
            <h4>培训感言 <span>SPEECH TRAINING</span></h4>
            <?php
            if (isset($trainingSpeech[0])) {
            ?>
            <div class="riG-left">
                <div class="riGl-left">
                    <img src="<?php echo $trainingSpeech[0]['smallPhoto'] ?>" alt="图片">
                </div>
                <div class="riGl-right">
                    <h2>
                        "<?php echo $trainingSpeech[0]['title'] ?>"
                    </h2>
                    <p>
                        <?php echo $trainingSpeech[0]['abstract'] ?>
                    </p>
                </div>
                <div style="clear: both"></div>
            </div>
            <div class="riG-right">
                <ul>
                    <?php
                    foreach ($trainingSpeech as $k => $v) {
                        if ($k == 0) {
                            continue;
                        }
                        ?>
                        <li><img src="/cn/images/teacherD_playIcon.png" alt="点图标"/><a
                                href="/word-details/<?php echo $v['id'] ?>/102.html"><?php echo $v['title'] ?></a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div style="clear: both"></div>
            <?php
            }
            ?>
        </div>
    </div>
    <div style="clear: both"></div>
</div>

<script type="text/javascript">
    jQuery(".connection").slide({mainCell:".connectBd",trigger:"mouseover"});
</script>
<!-------------------------------------------------右边的悬浮窗------------------------------------------->
<?php use app\commands\front\RightSuspensionWidget;?>
<?php RightSuspensionWidget::begin();?>
<?php RightSuspensionWidget::end();?>
<!----------------------------------------------左边悬浮窗-------------------------------------------------------------->
<?php use app\commands\front\LeftSuspensionWidget;?>
<?php LeftSuspensionWidget::begin();?>
<?php LeftSuspensionWidget::end();?>
</body>
</html>