
    <link rel="stylesheet" href="/cn/css/cultivateDetails.css"/>
    <script type="text/javascript" src="/cn/js/index.js"></script>
<!-----------------------------导航end------------------------------>
<div class="cultivateBig">
    <div class="gmat-cult">申友GMAT培训</div>
    <div class="basicClass">
        <div class="basicBig">
            <div class="kou-group top01">
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/>
            </div>
            <div class="basic-left HL01">
                <span>基础课程</span>
            </div>
            <div class="basic-right">
                <ul>
                    <?php
                    $data  = \app\modules\cn\models\Content::getContent(['category' => '161']);
                    foreach($data as $v) {
                        ?>
                        <li><a target="_blank" href="/picture-details/<?php echo $v['id']?>/161.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="basicBig">
            <div class="kou-group top02">
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/><br>
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/>
            </div>
            <div class="basic-left HL02">
                <span>高分课程</span>
            </div>
            <div class="basic-right">
                <ul>
                    <?php
                    $data  = \app\modules\cn\models\Content::getContent(['category' => '162']);
                    foreach($data as $v) {
                        ?>
                        <li><a target="_blank" href="/picture-details/<?php echo $v['id']?>/162.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="basicBig">
            <div class="kou-group top03">
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/><br>
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/><br>
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/><br>
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/>
            </div>
            <div class="basic-left HL03">
                <span>强化课程</span>
            </div>
            <div class="basic-right">
                <ul>
                    <?php
                    $data  = \app\modules\cn\models\Content::getContent(['category' => '163']);
                    foreach($data as $v) {
                        ?>
                        <li><a target="_blank" href="/picture-details/<?php echo $v['id']?>/163.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div style="clear: both"></div>
        </div>
        <div class="basicBig">
            <div class="kou-group top02">
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/><br>
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/><br>
                <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/>
            </div>
            <div class="basic-left HL04">
                <span>开班查询</span>
            </div>
            <div class="basic-right">
                <ul>
                    <?php
                    $data  = \app\modules\cn\models\Content::getContent(['category' => '164']);
                    foreach($data as $v) {
                        ?>
                        <li><a target="_blank" href="/picture-details/<?php echo $v['id']?>/164.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
    <div class="testimonials">
        <div class="testimonialsL">
            <div class="customer-left">
                <img src="/cn/images/cultivate_customer.png" alt="客户感言图片"/>
            </div>
            <div class="customer-right">
                <ul>
                    <?php
                     $data = \app\modules\cn\models\Content::getContent(['category' => '102,177','pageSize' => 7]);
                    foreach($data as $v){
                    ?>
                    <li><a target="_blank" href="/word-details/<?php echo $v['id']?>/102.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="testimonialsC">
            <h4>GMAT高分榜单</h4>
            <ul>                    <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => '104,206','pageSize' => 7]);
                foreach($data as $v) {
                    ?>
                    <li><img src="/cn/images/abroadPro_win.png" alt="奖杯图标"/><a
                            href="/picture-details/<?php echo $v['id'] ?>/104.html"><?php echo $v['name'] ?></a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="testimonialsR">
            <input type="button" value="在线测评"/>
            <input type="button" value="GMAT问答"/>
        </div>
        <div style="clear: both"></div>
    </div>
    <div class="gmatTeacher">
        <div class="gmatTitle">GMAT名师</div>
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract,job','category' => "139",'pageSize' => 5]);
            foreach($data as $k => $v) {
                ?>
                <li>
                    <div class="headPortrait"><img src="<?php echo $v['image']?>" alt="老师头像"/></div>
                    <div>
                        <h4><?php echo $v['name']?></h4>

                        <p><?php echo $v['job']?>，
                            <br><?php echo $v['abstract']?></p>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
        <div style="clear: both"></div>
        <a target="_blank" href="/teachers.html">查看更多</a>
    </div>
</div>
