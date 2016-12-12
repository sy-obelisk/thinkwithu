
    <link rel="stylesheet" href="/cn/css/DrApplication.css"/>


<div class="abroadProBig">
    <?php
        if($id == 114) {
        ?>
        <div class="abroadPro-top">
            <img src="/cn/images/DrA_title.png" alt="图标"/>
        </div>
        <div class="abroadPro-group">
            <ul>
                <li>
                    <div class="inputBG purpleFont inputBG01">
                        <a href="/evaluation.html">留学评估</a>

                        <div>
                            <span></span>
                            <img src="/cn/images/mba_peron01.png" alt="里面的图片"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inputBG purpleFont inputBG01">
                        <a href="/question.html">留学问答</a>

                        <div>
                            <span></span>
                            <img src="/cn/images/mba_peron02.png" alt="里面的图片"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inputBG purpleFont inputBG02">
                        <a href="#">申友留学服务四大优势</a>

                        <div>
                            <span></span>
                            <img src="/cn/images/mba_peron03.png" alt="里面的图片"/>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    <?php
    }
    ?>
    <?php
    if($id == 113) {
        ?>
        <div class="abroadPro-top">
            <img src="/cn/images/masterA_title.png" alt="图标"/>
        </div>
        <div class="abroadPro-group">
            <ul>
                <li>
                    <div class="inputBG purplesFont inputBG01">
                        <a href="/evaluation.html">留学评估</a>
                        <div>
                            <span></span>
                            <img src="/cn/images/mba_peron01.png" alt="里面的图片"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inputBG purplesFont inputBG01">
                        <a href="/question.html">留学问答</a>
                        <div>
                            <span></span>
                            <img src="/cn/images/mba_peron02.png" alt="里面的图片"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inputBG purplesFont inputBG02">
                        <a href="#">申友留学服务四大优势</a>
                        <div>
                            <span></span>
                            <img src="/cn/images/mba_peron03.png" alt="里面的图片"/>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    <?php
    }
    ?>
    <?php
    if($id == 112) {
        ?>
        <div class="abroadPro-top">
            <img src="/cn/images/UndergraduateA_title.png" alt="图标"/>
        </div>
        <div class="abroadPro-group">
            <ul>
                <li>
                    <div class="inputBG bluesFont inputBG01">
                        <a href="/evaluation.html">留学评估</a>
                        <div>
                            <span></span>
                            <img src="/cn/images/mba_peron01.png" alt="里面的图片"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inputBG bluesFont inputBG01">
                        <a href="/question.html">留学问答</a>
                        <div>
                            <span></span>
                            <img src="/cn/images/mba_peron02.png" alt="里面的图片"/>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inputBG bluesFont inputBG02">
                        <a href="#">申友留学服务四大优势</a>
                        <div>
                            <span></span>
                            <img src="/cn/images/mba_peron03.png" alt="里面的图片"/>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    <?php
    }
    ?>
    <div class="customization">
        <div class="cust-top">
            <div>
                <img src="/cn/images/DrA_titleFont.png" alt="文字图片"/>
            </div>
        </div>
        <div class="cust-center">
            <div class="essence speColor01">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$id",'pageSize' => 4]);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <div>
                                <img src="<?php echo $v['image']?>" alt="人人图标"/>
                                <b><?php echo $v['name']?></b>
                            </div>
                            <!--<h4><?php //echo $v['title']?></h4>-->
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="abroadPro-advan advanBG04">
        <span>申友留学“非中介”服务优势</span>
        <img src="/cn/images/mba_banCricle.png" alt="半圆"/>
    </div>
    <?php
        if($id == 114){
    ?>
    <div class="distinction">
        <div class="disTitle">
            <b>VS</b>
            <h3>申友留学和传统中介的区别</h3>
            <span class="span01">申友留学</span>
            <span class="span02">传统中介</span>
        </div>
        <div class="disBot">
            <div class="disBot-left">
                <ul>
                    <li>成功案例；申请经验；录取行为定向研究学校，教育项目信息；</li>
                    <li>规划背景提升、出国考试准备，申请材料制作，帮助办理申请手续，追踪申请进度，"套磁"与面试辅导，出国前辅导</li>
                    <li>通过帮助客户争取录取结果，收取咨询服务费用</li>
                    <li>根据客户职业发展目标、客观申请条件全力争取名校录取</li>
                    <li>客户对整个申请过程有“最终决定权”</li>
                </ul>
            </div>
            <div class="disBot-right rightH">
                <ul>
                    <li>与海外合作学校建立良好关系</li>
                    <li>联系合作学校，填写申请表格和送申请人资料，办理出国签证</li>
                    <li>合作学校提供招生，学费提成+客户提供中介费，奖学金提成等</li>
                    <li>根据客户情况从合作学校名单中挑选学校项目</li>
                    <li>客户必须遵守中介合同约定履行与招生学校约定的缴费，培训协议</li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="specDiv">
                <ul>
                    <li><span></span> 服务资本 <span></span></li>
                    <li><span></span> 申请工作 <span></span></li>
                    <li><span></span> 利益关系 <span></span></li>
                    <li><span></span> 选校依据 <span></span></li>
                    <li><span></span> 客户权责 <span></span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="distinction">
        <div class="disTitle">
            <b>VS</b>
            <h3>申友留学和普通“咨询”公司的区别</h3>
            <span class="span01">申友留学</span>
            <span class="span02">普通“咨询”公司</span>
        </div>
        <div class="disBot">
            <div class="disBot-left">
                <ul>
                    <li>照顾客户每一个申请工作环节，包括出国考试，申请手续，材料寄送，出国前准备等；</li>
                    <li>征求客户文书意见，但保持文书设计专业独立性，承诺在客户实际情况基础上进行背景包装、润色、
                        不强制要求客户提供”素材“或”初稿“。承诺提供所有学校要求的申请用PS/SP、小Essay、简历、推荐信、额外说明陈述。</li>
                    <li>最少有一名具备留学背景的教育分析师负责规划客户留学方案；所有项目由高级合伙人做最终负责人；文书、选校由专门从事该方向申请的顾问负责；</li>
                    <li>没有专门考试辅导团队，客户得到录取后提供研究生学习能力，语言能力培训课程，安排文化交流活动帮助申请人尽快适应海外生活环境，提供就业信息；</li>
                    <li>五年企业盛誉；一百万注册资本；千百名成功客户公开支持；服务合同附带”不成功，100%退费“保障。</li>
                </ul>
            </div>
            <div class="disBot-right rightH02">
                <ul>
                    <li>一般只是提供口头咨询指导，不参与或者无人力资源参与其他具体操作</li>
                    <li>要求客户提供“中文初稿”或者“申请背景素材”；或采用流水账文书模式套用模板；或要求客户自己书写文书然后做简单修改；或只书写一篇综合Ps然后要求客户自行针对学校进行修改。</li>
                    <li>一般由一个“项目顾问”人员负责所有工作；大部分咨询服务人员没有留学经历。</li>
                    <li>无</li>
                    <li>不详</li>
                </ul>
            </div>
            <div style="clear: both"></div>
            <div class="specDiv specH">
                <ul>
                    <li><span></span> 服务内容 <span></span></li>
                    <li><span></span> 文书服务 <span></span></li>
                    <li><span></span> 咨询团队 <span></span></li>
                    <li><span></span> 增值服务 <span></span></li>
                    <li><span></span> 客户保障 <span></span></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <?php
    if($id == 113){
        ?>
        <div class="distinction">
            <div class="disTitle">
                <b>VS</b>
                <h3>申友留学和传统中介的区别</h3>
                <span class="span01">申友留学</span>
                <span class="span02">传统中介</span>
            </div>
            <div class="disBot">
                <div class="disBot-left">
                    <ul>
                        <li>成功案例；申请经验；录取行为定向研究学校，教育项目信息；</li>
                        <li>规划背景提升、出国考试准备，申请材料制作，帮助办理申请手续，追踪申请进度，"套磁"与面试辅导，出国前辅导</li>
                        <li>通过帮助客户争取录取结果，收取咨询服务费用</li>
                        <li>根据客户职业发展目标、客观申请条件全力争取名校录取</li>
                        <li>客户对整个申请过程有“最终决定权”</li>
                    </ul>
                </div>
                <div class="disBot-right rightH">
                    <ul>
                        <li>与海外合作学校建立良好关系</li>
                        <li>联系合作学校，填写申请表格和送申请人资料，办理出国签证</li>
                        <li>合作学校提供招生，学费提成+客户提供中介费，奖学金提成等</li>
                        <li>根据客户情况从合作学校名单中挑选学校项目</li>
                        <li>客户必须遵守中介合同约定履行与招生学校约定的缴费，培训协议</li>
                    </ul>
                </div>
                <div style="clear: both"></div>
                <div class="specDiv">
                    <ul>
                        <li><span></span> 服务资本 <span></span></li>
                        <li><span></span> 申请工作 <span></span></li>
                        <li><span></span> 利益关系 <span></span></li>
                        <li><span></span> 选校依据 <span></span></li>
                        <li><span></span> 客户权责 <span></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="distinction">
            <div class="disTitle">
                <b>VS</b>
                <h3>申友留学和普通“咨询”公司的区别</h3>
                <span class="span01">申友留学</span>
                <span class="span02">普通“咨询”公司</span>
            </div>
            <div class="disBot">
                <div class="disBot-left">
                    <ul>
                        <li>照顾客户每一个申请工作环节，包括出国考试，申请手续，材料寄送，出国前准备等；</li>
                        <li>征求客户文书意见，但保持文书设计专业独立性，承诺在客户实际情况基础上进行背景包装、润色、
                            不强制要求客户提供”素材“或”初稿“。承诺提供所有学校要求的申请用PS/SP、小Essay、简历、推荐信、额外说明陈述。</li>
                        <li>最少有一名具备留学背景的教育分析师负责规划客户留学方案；所有项目由高级合伙人做最终负责人；文书、选校由专门从事该方向申请的顾问负责；</li>
                        <li>没有专门考试辅导团队，客户得到录取后提供研究生学习能力，语言能力培训课程，安排文化交流活动帮助申请人尽快适应海外生活环境，提供就业信息；</li>
                        <li>五年企业盛誉；一百万注册资本；千百名成功客户公开支持；服务合同附带”不成功，100%退费“保障。</li>
                    </ul>
                </div>
                <div class="disBot-right rightH02">
                    <ul>
                        <li>一般只是提供口头咨询指导，不参与或者无人力资源参与其他具体操作</li>
                        <li>要求客户提供“中文初稿”或者“申请背景素材”；或采用流水账文书模式套用模板；或要求客户自己书写文书然后做简单修改；或只书写一篇综合Ps然后要求客户自行针对学校进行修改。</li>
                        <li>一般由一个“项目顾问”人员负责所有工作；大部分咨询服务人员没有留学经历。</li>
                        <li>无</li>
                        <li>不详</li>
                    </ul>
                </div>
                <div style="clear: both"></div>
                <div class="specDiv specH">
                    <ul>
                        <li><span></span> 服务内容 <span></span></li>
                        <li><span></span> 文书服务 <span></span></li>
                        <li><span></span> 咨询团队 <span></span></li>
                        <li><span></span> 增值服务 <span></span></li>
                        <li><span></span> 客户保障 <span></span></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <?php
    if($id == 112){
        ?>
        <div class="distinction">
            <div class="disTitle">
                <b>VS</b>
                <h3>申友留学和传统中介的区别</h3>
                <span class="span01">申友留学</span>
                <span class="span02">传统中介</span>
            </div>
            <div class="disBot">
                <div class="disBot-left">
                    <ul>
                        <li>成功案例；申请经验；录取行为定向研究学校，教育项目信息；</li>
                        <li>规划背景提升、出国考试准备，申请材料制作，帮助办理申请手续，追踪申请进度，"套磁"与面试辅导，出国前辅导</li>
                        <li>通过帮助客户争取录取结果，收取咨询服务费用</li>
                        <li>根据客户职业发展目标、客观申请条件全力争取名校录取</li>
                        <li>客户对整个申请过程有“最终决定权”</li>
                    </ul>
                </div>
                <div class="disBot-right rightH">
                    <ul>
                        <li>与海外合作学校建立良好关系</li>
                        <li>联系合作学校，填写申请表格和送申请人资料，办理出国签证</li>
                        <li>合作学校提供招生，学费提成+客户提供中介费，奖学金提成等</li>
                        <li>根据客户情况从合作学校名单中挑选学校项目</li>
                        <li>客户必须遵守中介合同约定履行与招生学校约定的缴费，培训协议</li>
                    </ul>
                </div>
                <div style="clear: both"></div>
                <div class="specDiv">
                    <ul>
                        <li><span></span> 服务资本 <span></span></li>
                        <li><span></span> 申请工作 <span></span></li>
                        <li><span></span> 利益关系 <span></span></li>
                        <li><span></span> 选校依据 <span></span></li>
                        <li><span></span> 客户权责 <span></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="distinction">
            <div class="disTitle">
                <b>VS</b>
                <h3>申友留学和普通“咨询”公司的区别</h3>
                <span class="span01">申友留学</span>
                <span class="span02">普通“咨询”公司</span>
            </div>
            <div class="disBot">
                <div class="disBot-left">
                    <ul>
                        <li>照顾客户每一个申请工作环节，包括出国考试，申请手续，材料寄送，出国前准备等；</li>
                        <li>征求客户文书意见，但保持文书设计专业独立性，承诺在客户实际情况基础上进行背景包装、润色、
                            不强制要求客户提供”素材“或”初稿“。承诺提供所有学校要求的申请用PS/SP、小Essay、简历、推荐信、额外说明陈述。</li>
                        <li>最少有一名具备留学背景的教育分析师负责规划客户留学方案；所有项目由高级合伙人做最终负责人；文书、选校由专门从事该方向申请的顾问负责；</li>
                        <li>没有专门考试辅导团队，客户得到录取后提供研究生学习能力，语言能力培训课程，安排文化交流活动帮助申请人尽快适应海外生活环境，提供就业信息；</li>
                        <li>五年企业盛誉；一百万注册资本；千百名成功客户公开支持；服务合同附带”不成功，100%退费“保障。</li>
                    </ul>
                </div>
                <div class="disBot-right rightH02">
                    <ul>
                        <li>一般只是提供口头咨询指导，不参与或者无人力资源参与其他具体操作</li>
                        <li>要求客户提供“中文初稿”或者“申请背景素材”；或采用流水账文书模式套用模板；或要求客户自己书写文书然后做简单修改；或只书写一篇综合Ps然后要求客户自行针对学校进行修改。</li>
                        <li>一般由一个“项目顾问”人员负责所有工作；大部分咨询服务人员没有留学经历。</li>
                        <li>无</li>
                        <li>不详</li>
                    </ul>
                </div>
                <div style="clear: both"></div>
                <div class="specDiv specH">
                    <ul>
                        <li><span></span> 服务内容 <span></span></li>
                        <li><span></span> 文书服务 <span></span></li>
                        <li><span></span> 咨询团队 <span></span></li>
                        <li><span></span> 增值服务 <span></span></li>
                        <li><span></span> 客户保障 <span></span></li>
                    </ul>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
    <div class="tetralogy">
        <ul>
            <li>
                <div class="topDiv">本科申请服务流程四部曲</div>
                <div class="bottDiv">
                    <a href="#">详情点击</a>
                </div>
            </li>
            <li>
                <div class="topDiv">本科申请服务介绍</div>
                <div class="bottDiv">
                    <a href="#">详情点击</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="abroadPro-admiss">
        <div class="aboTitle"><h1>名校录取榜</h1></div>
        <div class="aboBot-ul">
            <div class="ul01Hd hd">
                <a href="javascript:void(0)" class="prev"><img src="/cn/images/abroadPro_prev.jpg" alt="箭头图标"/></a>
                <a href="javascript:void(0)" class="next"><img src="/cn/images/abroadPro_next.jpg" alt="箭头图标"/></a>
            </div>
            <div class="ul01Bd">
                <ul>
                    <li>
                        <ul>
                            <?php
                                $data = \app\modules\cn\models\Content::getContent(['fields' => 'abroadSchool,major','category' => "$ids,104,207",'page' => 1,'pageSize' =>7]);
                                foreach($data as $v) {
                                    ?>
                                    <li>
                                        <span class="aboBot-span01"><?php echo $v['name']?></span>
                                        <span class="aboBot-span02"><?php echo $v['abroadSchool']?></span>
                                        <span class="aboBot-span03"><?php echo $v['major']?></span>
                                    </li>
                                <?php
                                }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abroadSchool,major','category' => "$ids,104,207",'page' => 2,'pageSize' =>7]);
                            foreach($data as $v) {
                                ?>
                                <li>
                                    <span class="aboBot-span01"><?php echo $v['name']?></span>
                                    <span class="aboBot-span02"><?php echo $v['abroadSchool']?></span>
                                    <span class="aboBot-span03"><?php echo $v['major']?></span>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abroadSchool,major','category' => "$ids,104,207",'page' => 3,'pageSize' =>7]);
                            foreach($data as $v) {
                                ?>
                                <li>
                                    <span class="aboBot-span01"><?php echo $v['name']?></span>
                                    <span class="aboBot-span02"><?php echo $v['abroadSchool']?></span>
                                    <span class="aboBot-span03"><?php echo $v['major']?></span>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'abroadSchool,major','category' => "$ids,104,207",'page' => 4,'pageSize' =>7]);
                            foreach($data as $v) {
                                ?>
                                <li>
                                    <span class="aboBot-span01"><?php echo $v['name']?></span>
                                    <span class="aboBot-span02"><?php echo $v['abroadSchool']?></span>
                                    <span class="aboBot-span03"><?php echo $v['major']?></span>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".aboBot-ul").slide({mainCell:".ul01Bd>ul",effect:"leftLoop",vis:3,scroll:1});
        </script>
    </div>
    <div class="abroadPro-school">
        <div class="schoolBd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "$ids,104,207",'pageSize' => 20]);
                foreach($data as $v) {
                    ?>
                    <li><img src="<?php echo $v['image']?>" alt="图标"/></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".abroadPro-school").slide({mainCell:".schoolBd ul",autoPlay:true,effect:"leftLoop",vis:8});
    </script>
    <div class="studentInfo">
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['fields' => 'score,abroadSchool','category' => "$ids,102,178",'pageSize' =>3]);
            foreach($data as $v) {
                ?>
                <li>
                    <div class="stu-left">
                        <img src="<?php echo $v['image']?>" alt="学员头像" width="125px"/>
                        <a href="/word-details/<?php echo $v['id']?>/102.html">查看详情</a>
                    </div>
                    <div class="stu-right">
                        <h4><?php echo $v['name']?>:
                            <br><?php echo $v['title']?></h4>
                        <ul>
                            <li>成绩：<?php echo $v['score']?></li>
                            <li>学校：<?php echo $v['abroadSchool']?></li>
                        </ul>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>

    <div class="whoUs">
        <ul>
            <li>
                <div class="circle01 LeOrR1">
                    <img src="/cn/images/abroadPro_teacher01.png" alt="老师头像"/>
                    <div>
                        <h4>Amanda</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle02 LeOrR2">
                    <img src="/cn/images/abroadPro_teacher02.png" alt="老师头像"/>
                    <div>
                        <h4>Amanda</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle03 LeOrR3">
                    <img src="/cn/images/abroadPro_teacher03.png" alt="老师头像"/>
                    <div>
                        <h4>Amanda</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle04 LeOrR4">
                    <img src="/cn/images/abroadPro_teacher04.png" alt="老师头像"/>
                    <div>
                        <h4>雷哥<br>Kevin</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle05 LeOrR5">
                    <img src="/cn/images/abroadPro_teacher01.png" alt="老师头像"/>
                    <div>
                        <h4>Amanda</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle06">
                    <img src="/cn/images/abroadPro_teacher04.png" alt="老师头像"/>
                    <div>
                        <h4>雷哥<br>Kevin</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle01 LeOrR12">
                    <img src="/cn/images/abroadPro_teacher01.png" alt="老师头像"/>
                    <div>
                        <h4>Amanda</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle02 LeOrR22">
                    <img src="/cn/images/abroadPro_teacher02.png" alt="老师头像"/>
                    <div>
                        <h4>Amanda</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle03 LeOrR32">
                    <img src="/cn/images/abroadPro_teacher03.png" alt="老师头像"/>
                    <div>
                        <h4>Amanda</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle04 LeOrR42">
                    <img src="/cn/images/abroadPro_teacher04.png" alt="老师头像"/>
                    <div>
                        <h4>雷哥<br>Kevin</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="circle05 LeOrR52">
                    <img src="/cn/images/abroadPro_teacher01.png" alt="老师头像"/>
                    <div>
                        <h4>Amanda</h4>
                    </div>
                </div>
            </li>
        </ul>
        <a href="#">明星顾问</a>
    </div>
    <div class="subject">
        <ul>
            <li>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$ids,125","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id']?>/<?php echo $id?>,125.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div><img src="/cn/images/abroadPro_subject01.png" alt="图标"> 研究报告</div>
            </li>
            <li>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$ids,143","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id'] ?>/<?php echo $id?>,143.html"><?php echo $v['catName']?>ㄧ<?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div><img src="/cn/images/abroadPro_subject02.png" alt="图标"> 找专业</div>
            </li>
            <li>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$ids,154","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id'] ?>/<?php echo $id?>,154.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div><img src="/cn/images/abroadPro_subject03.png" alt="图标"> 找学校</div>
            </li>
            <li>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "$ids,175","pageSize" => 5]);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/word-details/<?php echo $v['id'] ?>/<?php echo $id?>,175.html"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div><img src="/cn/images/abroadPro_subject04.png" alt="图标"> 找排名</div>
            </li>
        </ul>
    </div>
</div>
