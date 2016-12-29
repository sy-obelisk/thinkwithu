
    <link rel="stylesheet" href="/cn/css/gmatSheet.css"/>

    <script type="text/javascript" src="/cn/js/gmatSheet.js"></script>

<div style="clear: both"></div>
<div class="gmat-topImg">
    <h1>申友GMAT，老牌实力机构</h1>
    <img src="/cn/images/gmat-title.png" alt="图片"/>
    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">在线咨询GMAT</a>
</div>
<!--申友GMAT精品课程-->
<div class="gmat-class">
    <h2>申友GMAT精品课程</h2>
    <ul>
        <li>
            <div class="oneClass">
                <div class="oneC-top">基础课程</div>
                 <div class="oneC-bottom">
                       <div class="inBottom">
                           <h4>
                               <a href="/picture-details/160/index,161,115.html" target="_blank">
                                   GMAT PRE适合人群
                               </a>
                           </h4>
                           <ul>
                               <li>
                                   1、英语基础较弱，CET-4/6成绩不高，没有雅思、托福考试经验或者成绩不理想的学员
                               </li>
                               <li>2、希望在名师指导下短时间内获得GMAT基础
                                   提高训练，偏好小班上课，追求VIP服务体验的学员</li>
                               <li>3、GMAT零基础客户</li>
                           </ul>
                           <h4>
                               <a href="/picture-details/160/index,161,115.html" target="_blank">
                                   GMAT PRE授课内容
                               </a>
                           </h4>
                           <p>GMAT考试简介，词汇，长难句，语法基础，阅读，数学基础等</p>
                           <a href="/picture-details/160/index,161,115.html" target="_blank"><i class="fa fa-search"></i>了解详情</a>
                       </div>
                 </div>
            </div>
        </li>
        <li>
            <div class="twoClass">
                <div class="twoC-top">增值课程</div>
                <div class="twoC-bottom">
                    <div class="two-inBottom">
                        <h4>
                            <a href="/picture-details/167/index,109,163,115.html" target="_blank">
                                GMAT 700+培训适合人群
                            </a>
                        </h4>
                        <ul>
                            <li>
                                1、考试目标明确，希望获得高分的学员
                            </li>
                            <li>2、GMAT高分强化班入学条件</li>
                            <li>3、参与申友GMAT入学测试，取得规定分数以上的成绩</li>
                        </ul>
                        <h4>
                            <a href="/picture-details/167/index,109,163,115.html" target="_blank">
                                GMAT 700+培训授课内容
                            </a>
                        </h4>
                        <p>申友GMAT高分强化班全新升级，通过全方位解析考题和考官的意图，
                            引导学生的思维，教授简单有效的解题技巧。从课前到课后，全程个性化的监督辅导</p>
                        <a href="/picture-details/167/index,109,163,115.html" target="_blank"><i class="fa fa-search"></i>了解详情</a>

                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="oneClass">
                <div class="oneC-top">强化课程</div>
                <div class="oneC-bottom">
                    <div class="inBottom threeSpe">
                        <h4>
                            <a href="/picture-details/161/index,109,162,115.html" target="_blank">
                                GMAT 周末班适合人群
                            </a>
                        </h4>
                        <ul>
                            <li>
                                有强化基础需求的大学生或在职人士，适合周末上课
                            </li>

                        </ul>
                        <h4>
                            <a href="/picture-details/161/index,109,162,115.html" target="_blank">
                            GMAT 周末班授课内容
                             </a>
                        </h4>
                        <div>
                            <p style="text-align: center">逻辑+语法+阅读</p>
                            GMAT周末班课程是链接申友高分系列课程的重要课程。引导学生积极思维，
                            短期内有效提高学员基础水平，是申友GMAT周末班课程所倡导的教学理念</div>
                        <a href="/picture-details/161/index,109,162,115.html" target="_blank"><i class="fa fa-search"></i>了解详情</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<!--近期开班-->
<div class="openClass">
     <div class="topTitle">近期开班</div>
     <table cellspacing="0">
         <tr>
             <th>课程类型</th>
             <th>面授时间</th>
             <th>主讲老师</th>
             <th>城市</th>
             <th></th>
         </tr>
         <?php
         $data = \app\modules\cn\models\Content::getContent(['fields' => 'hot,time,job,place,url','category' => "248",'pageSize'=>6,'order'=>'sort']);
         foreach($data as $v) {
         ?>
         <tr>
             <td><a href="<?php echo $v['url']?>"><?php echo $v['hot']?></a></td>
             <td><?php echo $v['time']?></td>
             <td><?php echo $v['job']?></td>
             <td><?php echo $v['place']?></td>
             <td><a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">在线报名 <i class="fa fa-caret-right"></i></a></td>
         </tr>
         <?php
         }
         ?>
     </table>
    <div class="moreClass">
        <i class="fa fa-caret-down"></i>
        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">更多课程查询</a>
    </div>
</div>
<!--申友GMAT课程特色服务-->
<div class="gmat-special">
    <h2>申友GMAT课程服务特色</h2>
    <div class="in-special">
        <img src="/cn/images/gmat_personGirl.png" alt="中间人图片" class="centerP"/>
        <ul>
            <li>
               <div class="bigBG backGround01 pos01">
                   <div class="circles">
                       <div class="inCircles">
                           <h4>模考解析</h4>
                           <span>实战演练，名师讲解</span>
                       </div>
                   </div>
               </div>
                <!--黄色圆圈部分-->
                <div class="bigBG backGround001 pos01">
                    <div class="circles">
                        <div class="inCircles">
                            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">
                                <img src="/cn/images/gmat_pointer.png" alt="手指图标"/>
                                <h5>模考解析</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="bigBG backGround02 pos02">
                    <div class="circles">
                        <div class="inCircles">
                            <h4>测评预约访谈</h4>
                            <span>名师剖析测评结果
                            <br>针对性提出复习建议</span>
                        </div>
                    </div>
                </div>
                <!--黄色圆圈部分-->
                <div class="bigBG backGround002 pos02">
                    <div class="circles">
                        <div class="inCircles">
                            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">
                                <img src="/cn/images/gmat_pointer.png" alt="手指图标"/>
                                <h5>测评预约访谈</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="bigBG backGround03 pos03">
                    <div class="circles flT03">
                        <div class="inCircles">
                            <h4>真题精讲</h4>
                            <span>真题详解
                            <br>逐题分析解题方法
                            <br>训练解题思维</span>
                        </div>
                    </div>
                </div>
                <!--黄色圆圈部分-->
                <div class="bigBG backGround003 pos03">
                    <div class="circles flT03">
                        <div class="inCircles">
                            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">
                                <img src="/cn/images/gmat_pointer.png" alt="手指图标"/>
                                <h5>真题精讲</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="bigBG backGround04 pos04">
                    <div class="circles flT04">
                        <div class="inCircles">
                            <h4>核心课程</h4>
                            <span>逻辑、语法、阅读、
                            <br>作文、数学全方位讲解
                            </span>
                        </div>
                    </div>
                </div>
                <!--黄色圆圈部分-->
                <div class="bigBG backGround004 pos04">
                    <div class="circles flT04">
                        <div class="inCircles">
                            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">
                                <img src="/cn/images/gmat_pointer.png" alt="手指图标"/>
                                <h5>核心课程</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="bigBG backGround05 pos05">
                    <div class="circles">
                        <div class="inCircles">
                            <h4>名师答疑</h4>
                            <span>1对VIP强化
                            <br>论坛答疑
                            </span>
                        </div>
                    </div>
                </div>
                <!--黄色圆圈部分-->
                <div class="bigBG backGround005 pos05">
                    <div class="circles">
                        <div class="inCircles">
                            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">
                                <img src="/cn/images/gmat_pointer.png" alt="手指图标"/>
                                <h5>在线答疑</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="bigBG backGround06 pos06">
                    <div class="circles">
                        <div class="inCircles">
                            <h4>学习社区</h4>
                            <span>全方位解决各种疑惑
                            <br>学习资料便捷下载
                            </span>
                        </div>
                    </div>
                </div>
                <!--黄色圆圈部分-->
                <div class="bigBG backGround006 pos06">
                    <div class="circles">
                        <div class="inCircles">
                            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">
                                <img src="/cn/images/gmat_pointer.png" alt="手指图标"/>
                                <h5>学习社区</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="bigBG backGround07 pos07">
                    <div class="circles flT">
                        <div class="inCircles">
                            <h4>机经冲刺</h4>
                            <span>考前冲刺，助力高</span>
                        </div>
                    </div>
                </div>
                <!--黄色圆圈部分-->
                <div class="bigBG backGround007 pos07">
                    <div class="circles flT">
                        <div class="inCircles">
                            <a href="/problem.html">
                                <img src="/cn/images/gmat_pointer.png" alt="手指图标"/>
                                <h5>机经冲刺</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="bigBG backGround08 pos08">
                    <div class="circles flT02">
                        <div class="inCircles">
                            <h4>仿真模考</h4>
                            <span>99%参考GMAT考场规则
                            <br>抢先体验GMAT考试效果</span>
                        </div>
                    </div>
                </div>
                <!--黄色圆圈部分-->
                <div class="bigBG backGround008 pos08">
                    <div class="circles flT02">
                        <div class="inCircles">
                            <a href="http://www.gmatonline.cn/exam/index.html">
                                <img src="/cn/images/gmat_pointer.png" alt="手指图标"/>
                                <h5>测试一下</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</div>
<!--国际范儿-->
<div class="toefl-teacher">
    <div class="inTeacher">
        <h2><a href="/teachers.html" target="_blank">国际范儿<span>GMAT名师团队</span>联袂授课</a></h2>
        <div class="toggleSummer">
            <div class="summerHd hd">
                <a href="javascript:;" class="prev">
                    <img src="/cn/images/practice_prevTrangle.png" alt="左边箭头图标">
                </a>
                <a href="javascript:;" class="next">
                    <img src="/cn/images/practice_nextTrangle.png" alt="右边箭头图标">
                </a>
            </div>
            <div class="summerBd">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'job','category' => "138,139",'pageSize'=>20,'order'=>'sort']);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <div class="summerTop">
                                <img src="<?php echo $v['image']?>" alt="图片">
                                <!--遮罩-->
                                <div class="summer-mask">
                                    <a href="/teachers/<?php echo $v['name']?>/<?php echo $v['id']?>.html" target="_blank">
                                        <p><?php echo $v['name']?></p>
                                        <span><?php echo $v['job']?></span>
                                    </a>
                                </div>
                            </div>
                            <span><?php echo $v['name']?></span>
                            <p><?php echo $v['job']?></p>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".toggleSummer").slide({mainCell:".summerBd ul",vis:6,scroll:1,effect:"leftLoop",interTime:50,autoPage:true});
        </script>
        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" class="subscribe" target="_blank">
            <img src="/cn/images/toefl_yuyueIcon.png" alt="预约图标"/>马上预约</a>
    </div>
</div>
<!--关于申友托福-->
<div class="aboutToefl">
    <h2>关于申友GMAT，他们有话说</h2>
    <div class="aboutTSlide">
        <div class="aboutTHd hd">
            <a href="javascript:;" class="next">
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="javascript:;" class="prev">
                <i class="fa fa-angle-left"></i>
            </a>
        </div>
        <div class="aboutTBd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'score','category' => "102,115",'pageSize'=>4,'order'=>'sort desc']);
                foreach($data as $v) {
                    ?>
                <li>
                    <div class="aboutTBd-left">
                        <a href="#">
                            <img src="<?php echo $v['image']?>" alt="学员头像"/>
                        </a>
                    </div>
                    <div class="aboutTBd-right">
                        <h4><?php echo $v['name']?></h4>
                        <p><?php echo $v['title']?></p>
                        <a href="/word-details/<?php echo $v['id']?>/102.html">查看详情 &gt;</a>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <?php
                }
                ?>
            </ul>
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'score','category' => "102",'pageSize'=>4,'order'=>'sort']);
                foreach($data as $v) {
                ?>
                <li>
                    <div class="aboutTBd-left">
                        <a href="#">
                            <img src="<?php echo $v['image']?>" alt="学员头像"/>
                        </a>
                    </div>
                    <div class="aboutTBd-right">
                        <h4><?php echo $v['name']?></h4>
                        <p><?php echo $v['title']?></p>
                        <a href="/word-details/<?php echo $v['id']?>/102.html">查看详情 &gt;</a>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".aboutTSlide").slide({mainCell:".aboutTBd",trigger:"click",pnLoop:false});
    </script>

</div>
<!--申友公开课-->
<div class="shenYou-class">
    <h2>申友公开课</h2>
    <div class="open-commonStyle">
        <?php
        $data = \app\modules\cn\models\Content::getContent(['fields' => 'url,place,time', 'category' => '178,107', 'pageSize' => 4]);
        ?>
        <ul>
            <?php
            foreach ($data as $v) {
                ?>
                <li>
                    <a href="/public-class/<?php echo $v['id'] ?>.html" target="_blank"><img src="<?php echo $v['image'] ?>" alt="课程图"/></a>

                    <p> <a href="/public-class/<?php echo $v['id'] ?>.html" target="_blank"><?php echo $v['name'] ?></a></p>
                    <span><?php echo date("Y-m-d H:i",strtotime($v['time'])) ?></span>
                    <b><?php echo $v['place'] ?></b>

                    <div style="clear: both;border-bottom: 1px #cbcbcb solid"></div>
                    <?php
                    if (!empty($v['url'])) { ?>
                        <a class="classBtn diffColor01" href="/public-class/back/<?php echo $v['id'] ?>.html" target="_blank">课程回放</a>
                    <?php } else { ?>
                        <a href="javascript:;" onclick="addCollect(<?php echo $v['id'] ?>)"
                           class="classBtn diffColor01">报名</a>
                    <?php } ?>
                    <a href="/public-class/<?php echo $v['id'] ?>.html" class="classBtn diffColor02" target="_blank">详情</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
<!--    <ul>-->
<!--        --><?php
//        $data = \app\modules\cn\models\Content::getContent(['order'=>'c.viewCount DESC','fields' => 'place,time,','category' => '107','pageSize' => 4,'where' => 'c.catId != 190']);
//        foreach($data as $v) {
//        ?>
<!--        <li>-->
<!--            <div class="topPurple">-->
<!--               <span>--><?php //echo $v['name']?><!--</span>-->
<!--            </div>-->
<!--            <div class="botWhite">-->
<!--                <ul>-->
<!--                    <li>时间：--><?php //echo date("Y-m-d",strtotime($v['time']))?><!--</li>-->
<!--                    <li>地点：--><?php //echo $v['place']?><!--</li>-->
<!--                    <li>-->
<!--                        --><?php
//                        if(!empty($v['url'])) {
//                            ?>
<!--                            <a class="fa fa-caret-right" href="/public-class/back/--><?php //echo $data[0]['id']?><!--.html">课程回放</a>-->
<!--                        --><?php
//                        }else {
//                            ?>
<!--                            <a onclick="addCollect(--><?php //echo $v['id']?>
<!--    //)" href="javascript:;" class="fa fa-caret-right">报名</a>--><?php
//                        }
//                        ?>
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </li>-->
<!--        --><?php
//        }
//        ?>
<!--    </ul>-->
</div>
<!--申友研究中心-->
<div class="researchCenter">
    <div class="inResearch">
        <h2>申友研究中心</h2>
        <div class="research-top">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields' => 'synopsis','category' => "105,108,115",'pageSize'=>2,'order'=>'sort desc']);
                foreach($data as $v) {
                ?>

                <li>
                    <div class="researchT-left">
                        <a href="/materials.html" target="_blank"><img src="<?php echo $v['image']?>" alt="书籍图片"/></a>
                    </div>
                    <div class="researchT-right">
                        <h5> <a href="/materials.html" target="_blank">《<?php echo $v['name']?>》</a></h5>
                        <div class="whiteRes"><p><?php echo $v['synopsis']?></p></div>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <?php
                }
                ?>

            </ul>
        </div>
        <div class="research-bottom">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "108",'pageSize'=>6]);
                foreach($data as $v) {
                ?>

                <li>
                    <a href="/materials.html" target="_blank">
                        <div class="reseT-img">
                            <img src="<?php echo $v['image']?>" alt="教材图片"/>
                        </div>
                        <span>《<?php echo $v['name']?>》</span>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<!--动态-->
<div class="dynamic">
    <ul>
        <li>
            <div class="dynamic-left">
                <img src="/cn/images/toefl_examIcon01.png" alt="图片"/>
            </div>
            <div class="dynamic-right">
                <h4>考试动态</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "118,115",'pageSize'=>3,'order'=>'sort']);
                    foreach($data as $v) {
                    ?>
                    <li><a href="/list/115,118.html" target="_blank"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="moreDiv">
                    <a href="/list/115,118.html" target="_blank">
                        <span>MORE+</span>
                        <div><i class="fa fa-angle-right"></i></div>
                    </a>
                </div>
                <div style="clear: both"></div>
            </div>
            <div style="clear: both"></div>
        </li>
        <li>
            <div class="dynamic-left">
                <img src="/cn/images/toefl_examIcon02.png" alt="图片"/>
            </div>
            <div class="dynamic-right">
                <h4>名师观点</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "105,117,118",'pageSize'=>3,'order'=>'sort']);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/teachers/interviews.html" target="_blank"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="moreDiv">
                    <a href="/teachers/interviews.html" target="_blank">
                        <span>MORE+</span>
                        <div><i class="fa fa-angle-right"></i></div>
                    </a>
                </div>
                <div style="clear: both"></div>
            </div>
            <div style="clear: both"></div>
        </li>
        <li>
            <div class="dynamic-left">
                <img src="/cn/images/toefl_examIcon03.png" alt="图片"/>
            </div>
            <div class="dynamic-right">
                <h4>申友动态</h4>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['category' => "105,117,118",'pageSize'=>3,'order'=>'sort']);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/thinku-news.html" target="_blank"><?php echo $v['name']?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                <div class="moreDiv">
                    <a href="/thinku-news.html" target="_blank">
                        <span>MORE+</span>
                        <div><i class="fa fa-angle-right"></i></div>
                    </a>
                </div>
                <div style="clear: both"></div>
            </div>
            <div style="clear: both"></div>
        </li>
    </ul>
</div>
<!--马上预约享优惠-->
<div class="favorable">
    <h2>马上预约享优惠</h2>
    <ul>
        <?php
        foreach($extendData as $k => $v) {
            ?>
            <li>
                <label><span><?php echo $v['required'] == 1?'*':''?></span><?php echo $v['name']?>：</label>
                <input name="extendValue[]" class="oneWidth"  <?php echo $v['required'] == 1?'class="val"':''?>  type="text"/>
            </li>
        <?php
        }
        ?>
        <li>
            <label>验证码：</label>
            <input type="text" class="twoWidth" name="code"/>
            <input type="button" onclick="onlineCode(this)" value="获取验证码"/>
        </li>
        <li>
            <a href="javascript:void(0);" onclick="onlineSub(this)">点击提交 &gt;</a>
        </li>
    </ul>

</div>
    <script type="text/javascript">
        function onlineCode(_this){
            var phone = $(_this).closest('li').prev().find('input').val();
            $.post('/cn/api/phone-code',{type:3,phoneNum:phone},function(re){
                alert(re.message);
            },"json")
        }

        function onlineSub(_this){
            var phone = $(_this).closest('li').prev().prev().find('input').val();
            var school = $(_this).closest('li').prev().prev().prev().find('input').val();
            var name = $(_this).closest('li').prev().prev().prev().prev().find('input').val();
            var code = $(_this).closest('li').prev().find('input').val();
            if(phone == ''){
                alert('留下您的联系方式');
                return false;
            }
            if(code == ''){
                alert('请输入验证码');
                return false;
            }
            if(name == ''){
                alert('请输入您的姓名');
                return false;
            }
            $.post('/cn/api/subscribe',{name:name,phone:phone,school:school,code:code},function(re){
                alert(re.message);
                window.location.reload()
            },"json")
        }
    </script>
<!--联系方式-->
<!--单页尾部固定部分-->
<div class="addShenYou">
    <i onclick="closeZX(this)">×</i>
    <span>我们就在您身边，申友GMAT高分热线 &nbsp;| </span>
    <img src="/cn/images/mentor_phoneFont.png" alt="电话文字">
    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">点击咨询报名</a>
</div>
