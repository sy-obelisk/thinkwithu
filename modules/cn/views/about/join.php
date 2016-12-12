
    <link rel="stylesheet" href="/cn/css/joinUs.css"/>
    <script type="text/javascript" src="/cn/js/joinUs.js"></script>


<div class="joinUs-topImg">
    <img src="/cn/images/joinUs_headImg.png" alt="内容头部图"/>
</div>
<div class="quesAcontent">
    <div class="contentLeft">
        <div class="join-left">
            <h4>职位类别</h4>
            <div class="leftUl">
                <ul>
                    <li>
                        <div class="diffWH widthH01">
                            <h5>教学类</h5>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "213,211"]);
                            foreach($data as $v) {
                                ?>
                                <span data-value="<?php echo $v['id']?>" class="purpleColor"><?php echo $v['name']?></span><br>
                                <span class="greyColor">[工作地点]<?php echo $v['place']?></span><br>
                            <?php
                            }
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="diffWH widthH01">
                            <h5>销售类</h5>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "214,211"]);
                            foreach($data as $v) {
                                ?>
                                <span data-value="<?php echo $v['id']?>" class="purpleColor"><?php echo $v['name']?></span><br>
                                <span class="greyColor">[工作地点]<?php echo $v['place']?></span><br>
                            <?php
                            }
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="diffWH widthH01">
                            <h5>市场类</h5>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "215,211"]);
                            foreach($data as $v) {
                                ?>
                                <span data-value="<?php echo $v['id']?>" class="purpleColor"><?php echo $v['name']?></span><br>
                                <span class="greyColor">[工作地点]<?php echo $v['place']?></span><br>
                            <?php
                            }
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="diffWH widthH02">
                            <h5>管理类</h5>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "216,211"]);
                            foreach($data as $v) {
                                ?>
                                <span data-value="<?php echo $v['id']?>" class="purpleColor"><?php echo $v['name']?></span><br>
                                <span class="greyColor">[工作地点]<?php echo $v['place']?></span><br>
                            <?php
                            }
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="diffWH widthH02">
                            <h5>咨询类</h5>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "217,211"]);
                            foreach($data as $v) {
                                ?>
                                <span data-value="<?php echo $v['id']?>" class="purpleColor"><?php echo $v['name']?></span><br>
                                <span class="greyColor">[工作地点]<?php echo $v['place']?></span><br>
                            <?php
                            }
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="diffWH widthH02">
                            <h5>文服类</h5>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "218,211"]);
                            foreach($data as $v) {
                                ?>
                                <span data-value="<?php echo $v['id']?>" class="purpleColor"><?php echo $v['name']?></span><br>
                                <span class="greyColor">[工作地点]<?php echo $v['place']?></span><br>
                            <?php
                            }
                            ?>
                        </div>
                    </li>
                    <li>
                        <div class="diffWH widthH02">
                            <h5>IT类</h5>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "219,211"]);
                            foreach($data as $v) {
                                ?>
                                <span data-value="<?php echo $v['id']?>" class="purpleColor"><?php echo $v['name']?></span><br>
                                <span class="greyColor">[工作地点]<?php echo $v['place']?></span><br>
                            <?php
                            }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="join-right">
            <h4>人才培养</h4>
            <div class="rBlueC"><img src="/cn/images/joinUs_rightAll.jpg" alt="图片"></div>
        </div>
        <!------------弹出层-------------->
        <div class="zzcAll"></div>
        <div class="contentTc">
            <div class="incontentTK">
                <img src="/cn/images/joinUs_close.png" alt="关闭图标" class="closeJ" onclick="closePos()"/>
                <ul>
                    <li><b>一、岗位职责：</b></li>
                    <li> 1、教授GMAT、SAT、托福等国外考试专项课程；</li>
                    <li> 2、针对学员情况，有差异的用学生易接受的方法进行教学，认真批改学生作业并予以反馈； </li>
                    <li> 3、对学生进行专业性的学习指导，保证教学质量； </li>
                    <li> 4、根据教学需要进行教学研发工作，收集和整理课程编辑所需的原始资料和相关信息； </li>
                    <li> 5、积极参加集团内部各种讲座、教研、会议等活动，参与教学评估，保证授课质量； </li>
                    <li> 6、完成上级交办的其他工作。 </li>
                    <li><b> 二、任职要求： </b></li>
                    <li> 1、本科及以上学历，有国外留学背景或相关课程授课经验者优先； </li>
                    <li> 2、英语专八，或GMAT/SAT/托福高分；</li>
                    <li> 3、熟悉GMAT、SAT、托福考试内容，具备扎实的专业知识与技能；</li>
                    <li> 4、具备较强的沟通能力与逻辑思维能力；有一定教学技能与课堂管理能力； </li>
                    <li> 5、有敬业精神，口齿伶俐，中文表达能力强，普通话和英语发音标准；</li>
                    <li><b> 三、在申友，我们为员工提供各项福利待遇：</b></li>
                    <li>1、同行业内具有竞争力的优厚薪酬福利； </li>
                    <li>2、聘用员工享有社保福利（养老保险、医疗保险、生育保险、失业保险、工伤保险） </li>
                    <li>3、工作8小时制，每周休息2天，法定节假日，带薪婚假/产/年等假期；</li>
                    <li>4、为了员工身体健康，每年免费为员工提供年体检；</li>
                    <li>5、每逢节日，享受节日礼金；生日补贴，高温/避寒等各类福利政策。</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contentRight">
        <img src="/cn/images/quesAnswer_phone02.png" alt="联系电话"/>
    </div>
    <div style="clear: both"></div>
</div>
