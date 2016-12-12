
    <link rel="stylesheet" href="/cn/css/masterDocument.css"/>


<div class="document-top">
    <?php
    $data = \app\modules\cn\models\Content::getContent(['fields' => 'synopsis,abstract','category' => '107','pageSize' => 1]);
    ?>
<!--    <div class="vacaRight">-->
<!--        <h3>【--><?php //echo $data[0]['name']?><!--】</h3>-->
<!--        <p>--><?php //echo $data[0]['abstract']?><!--~</p>-->
<!--        <ul>-->
<!--            <li>讲座内容</li>-->
<!--            <li><pre>--><?php //echo $data[0]['synopsis']?><!--</pre></li>-->
<!---->
<!--        </ul>-->
<!--        <a href="/word-details/--><?php //echo $data[0]['id']?><!--/107.html" class="lijiSee">立即查看</a>-->
<!--    </div>-->
    <div class="docuT-left">
        <a href="/public-class.html"> <img src="/cn/images/masterDocu_open.jpg" alt="公开课图片"/></a>
    </div>
    <div class="docuT-center">
        <img src="/cn/images/masterDocu_img.png" alt="名师文档"/>
    </div>
    <div class="docuT-right">
        <div class="docuTrHd hd">
            <ul>
                <li>留学热帖</li>
                <li>考试热帖</li>
                <li>研究报告</li>
            </ul>
        </div>
        <div class="docuTrBd">
            <ul>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">2015大改革，取消GMAT不会显示C了 <img src="/cn/images/index_hotRed.png" alt="hot图标"></a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">GMAC推出增强版GMAT成绩</a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">2015GMAT考试时间及考位公布通知 解析</a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">原创分享：GMAT机经使用方法</a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">GMAT verbal部分在复习时有什么异同</a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">科学、快速记忆GMAT词汇</a>
                </li>
            </ul>
            <ul>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">2015大改革，取消GMAT不会显示C了 <img src="/cn/images/index_hotRed.png" alt="hot图标"></a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">GMAC推出增强版GMAT成绩</a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">2015GMAT考试时间及考位公布通知 解析</a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">原创分享：GMAT机经使用方法</a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">GMAT verbal部分在复习时有什么异同</a>
                </li>
                <li>
                    <i class="fa fa-angle-left"></i>
                    <a href="#">科学、快速记忆GMAT词汇</a>
                </li>
            </ul>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '125','pageSize' => 6]);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <i class="fa fa-angle-left"></i>
                            <a href="/word-details/<?php echo $v['id']?>/125.html"><?php echo $v['name']?><img src="/cn/images/index_hotRed.png" alt="hot图标"></a>
                        </li>
                    <?php
                    }
                ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".docuT-right").slide({mainCell:".docuTrBd",trigger:"mouseover"});
    </script>
</div>
<!--雷哥寄语-->
<div class="document-center01">
    <div class="docu-cOneHd hd">
        <a href="javascript:;" class="prev"><img src="/cn/images/masterDocu_whiteJ01.png" alt="左边箭头"/></a>
        <a href="javascript:;" class="next"><img src="/cn/images/masterDocu_whiteJ02.png" alt="右边箭头"/></a>
    </div>
    <div class="docu-cOneBd">
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => '142']);
            foreach($data as $v) {
                ?>
                <li>
                    <h2><?php echo $v['name']?></h2>
                    <span>"<?php echo $v['title']?>"</span>

                    <div class="greenFont">
                        <img src="<?php echo $v['image']?>" alt="老师头像" class="teacherTX"/>

                        <p>
<?php echo $v['abstract']?>
                        </p>

                        <div class="seeJieS">
                            <img src="/cn/images/masterDocu_whiteJ03.png" alt="介绍"/>
                            <a href="/word-details/<?php echo $v['id']?>/142.html">查看详情</a>
                        </div>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>
<script type="text/javascript">
    jQuery(".document-center01").slide({mainCell:".docu-cOneBd ul",trigger:"click"});
</script>
<!--培训感言-->
<!--<div class="document-center02">-->
<!--    <div class="title">培训感言</div>-->
<!--    <div class="bottUL">-->
<!--        <ul>-->
<!--            --><?php
//            $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abstract','category' => '102,177','pageSize' => 4]);
//                foreach($data as $v) {
//                    ?>
<!--                    <li>-->
<!--                        <div class="leftImg">-->
<!--                            <img src="--><?php //echo $v['smallPhoto']?><!--" alt="培训"/>-->
<!--                        </div>-->
<!--                        <div class="rightInfo">-->
<!--                            <h4>"--><?php //echo $v['title']?><!-- "<img src="/cn/images/masterDocu_new.png" alt="new图标"/></h4>-->
<!---->
<!--                            <p>--><?php //echo $v['abstract']?><!--</p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                --><?php
//                }
//            ?>
<!--        </ul>-->
<!--        <a href="/cn/case">查看更多 <i class="fa  fa-caret-right"></i></a>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--留学感言-->
<!--<div class="document-center03">-->
<!--    <div class="title">留学感言</div>-->
<!--    <div class="bottAborad">-->
<!--        <ul>-->
<!--            --><?php
//            $data = \app\modules\cn\models\Content::getContent(['fields' => 'smallPhoto,abstract','category' => '102,178','pageSize' => 5]);
//            foreach($data as $v) {
//            ?>
<!--            <li>-->
<!--                <img src="--><?php //echo $v['smallPhoto']?><!--" alt="留学感言"/>-->
<!--                <h4>"--><?php //echo $v['title']?><!--"</h4>-->
<!--                <p>--><?php //echo $v['abstract']?><!--</p>-->
<!--            </li>-->
<!--            --><?php
//            }
//            ?>
<!--        </ul>-->
<!--        <a href="/cn/case">查看更多 <i class="fa  fa-caret-right"></i></a>-->
<!--    </div>-->
<!--</div>-->
<!--名校录取榜-->
<div class="document-center04">
    <div class="centerFourHd hd">
        <div class="leftPhone">
            <span>全国咨询热线</span>
            <h2><img src="/cn/images/index_purplePhone.png" alt="电话图标">400-600-1123</h2>
        </div>
        <ul>
            <li><span>名校录取榜</span></li>
            <li><span>培训高分榜</span></li>
        </ul>
        <b>
            我们只申请名校 培养高分学员
            <img src="/cn/images/studentsCase_titlePerson.png" alt="标题人人图标">
        </b>
    </div>
    <div class="centerFourBd">
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abroadSchool','category' => '104,207','pageSize' => 5]);
            foreach($data as $v) {
            ?>
            <li>
                <a href="/picture-details/<?php echo $v['id']?>/104.html">
                    <img src="<?php echo $v['image']?>" alt="大学详情"/>
                    <p><?php echo $v['name']?>飞跃<?php echo $v['abroadSchool']?></p>
                </a>
            </li>
            <?php
            }
            ?>
        </ul>
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['category' => '104,206','pageSize' => 5]);
            foreach($data as $v) {
                ?>
                <li>
                    <a href="/picture-details/<?php echo $v['id']?>/104.html">
                        <img src="<?php echo $v['image']?>" alt="大学详情"/>
                        <p><?php echo $v['name']?></p>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</div>
<script type="text/javascript">
    jQuery(".document-center04").slide({mainCell:".centerFourBd",trigger:"mouseover"});
</script>

