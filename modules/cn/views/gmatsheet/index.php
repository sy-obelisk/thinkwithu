
    <link rel="stylesheet" href="/cn/css/gmatSheet.css"/>
    <script type="text/javascript" src="/cn/js/gmatSheet.js"></script>

<div style="clear: both"></div>
<div class="gmat-topImg">
    <img src="/cn/images/gmat_bigBG.png"/>
    <a target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">在线咨询GMAT</a>
</div>
<!--申友GMAT精品课程-->
<section class="gmat-class">
    <h2 class="pub-title">申友GMAT四大经典课程</h2>
    <ul>
    	<li class="gmat-box left">
    		<div class="img-box">
          <img src="/cn/images/gmat-class01.png" alt="零基础进阶课">
        </div>
        <div class="cnt-box">
          <a href="/picture-details/160/index,161,115.html">了解详情</a>
          <div class="cnt-text">
            <h2>GMAT零基础进阶课</h2>
            <div><span>适合人群：</span><p>零基础备考GMAT，初次备考或自觉性不是很高。</p></div>
            <div><span>课程设置：</span><p>2课时测评+30课时基础课+30课时名师方法课+30课时强化训练课+50课时真题答疑课，共42课时。</p></div>
          </div>
        </div>
    	</li>
    	<li class="gmat-box right">
        <div class="cnt-box">
          <a href="/picture-details/161/index,109,162,115.html">了解详情</a>
          <div class="cnt-text">
            <h2>GMAT经典强化方法课</h2>
            <div><span>适合人群：</span><p>有一定的语言基础；希望系统全面学习GMAT核心方法及运用。</p></div>
            <div><span>课程设置：</span><p>2课时测评+30课时名师方法课+30课时强化训练课+50课时真题答疑课，共112课时.</p></div>
          </div>
        </div>
        <div class="img-box">
          <img src="/cn/images/gmat-class02.png" alt="GMAT经典强化方法课">
        </div>
    	</li>
    	<li class="gmat-box left">
        <div class="img-box">
          <img src="/cn/images/gmat-class03.png" alt="GMAT700分冲刺课">
        </div>
        <div class="cnt-box">
          <a href="/picture-details/2325/index,109,163,115.html">了解详情</a>
          <div class="cnt-text">
            <h2>GMAT700分冲刺课</h2>
            <div><span>适合人群：</span><p>GMAT目标分700+，希望在申友GMAT名师指点下通过精准、高效复习一次拿下GMAT高分。</p></div>
            <div><span>课程设置：</span><p>2课时测评+30课时名师方法课+30课时强化训练课+50课时真题答疑课+8课时VIP，一共120 课时.</p></div>
          </div>
        </div>
    	</li>
      <li class="gmat-box right">
        <div class="cnt-box">
          <a href="/picture-details/2326/index,109,163,115.html">了解详情</a>
          <div class="cnt-text">
            <h2>GMAT750分冲刺课</h2>
            <div><span>适合人群：</span><p>GMAT目标分750+，希望系统全面学习GMAT核心考点，希望在申友GMAT名师指点下精准、高效复习拿下GMAT750+高分。</p></div>
            <div><span>课程设置：</span><p>2课时测评+30课时名师方法课+30课时强化训练课+50课时真题答疑课+16课时VIP，一共128 课时.</p></div>
          </div>
        </div>
        <div class="img-box">
          <img src="/cn/images/gmat-class04.png" alt="GMAT750分冲刺课">
        </div>
      </li>
    </ul>
</section>
<!--近期开班-->
<section class="gmat-open">
  <h2 class="pub-title">近期开班</h2>
	<div class="openClass">
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
         foreach($data as $k=>$v) {
         ?>
         <tr>
             <td><a href="<?php echo $v['url']?>"><?php echo $v['hot']?></a><i class="fa fa-fire" style="color: red;"></i></td>
             <td><?php echo $v['time']?></td>
             <td><?php echo $v['job']?></td>
             <td><?php echo $v['place']?></td>
             <td class="open-apply">
               <a href="<?php
               if($k=='2'){echo 'http://www.gmatonline.cn/gmatcourses/index.html' ;}else {echo 'http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw='; } ?>"  target="_blank">在线报名 </a></td>
         </tr>
         <?php
         }
         ?>
     </table>
    <div class="pub-more">
      <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">
        <span>更多课程查询</span>
        <i class="fa fa-caret-down"></i>
      </a>
    </div>
</div>
</section>
<!--申友GMAT课程特色服务-->
<section class="gmat-special">
	<h2 class="pub-title">申友GMAT课程服务特色</h2>
	<div class="in-special">
    <ul class="wrap">
      <li class="list">
        <p>学前专业测评</p>
        <p>制定个性化预习计划</p>
        <div>01.专业测评访谈</div>
      </li>
      <li class="list">
        <p>名师GMAT方法论讲解</p>
        <p>反复回放，充分学理论</p>
        <div>02.名师方法课</div>
      </li>
      <li class="list">
        <p>方法实践课，做题训练</p>
        <p>理论知识运用到实践中</p>
        <div>03.强化训练课</div>
      </li>
      <li class="list">
        <p>训练解题思维</p>
        <p>真题解析</p>
        <p>逐渐分析解题方法</p>
        <div>04.真题精讲课</div>
      </li>
      <li class="list">
        <p>人工智能问答系统</p>
        <p>题目/知识点/OG/讲义等答疑</p>
        <div>05.在线系统答疑</div>
      </li>
      <li class="list">
        <p>99%参考GMAT考场规划</p>
        <p>抢先体验GMAT考场效果</p>
        <div>06.仿真模考解析</div>
      </li>
      <li class="list">
        <p>课程提醒，督促学习</p>
        <div>07.学管师全程跟进</div>
      </li>
      <li class="list">
        <p>1对1VIP强化</p>
        <p>精准解答</p>
        <div>08.1对1名师答疑</div>
      </li>
      <li class="list">
        <p>考前名师点题冲刺</p>
        <p>理清真题答题思路</p>
        <div>09.考前点题冲刺</div>
      </li>
      <li class="list">
        <p>题库全面，随时刷题</p>
        <p>GMAT APP</p>
        <div>10.智能系统刷题</div>
      </li>
      <li class="list">
        <p>全方位解决各种疑惑</p>
        <p>学习资料便捷下载</p>
        <div>11.在线学习社区</div>
      </li>
      <li class="list">
        <p>专家顾问1对1留学规划</p>
        <p>明确留学目标和方向</p>
        <div>12.1对1留学规划</div>
      </li>
    </ul>
	</div>
  <div class="pub-more">
    <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=" target="_blank">
      <span>更多课程查询</span>
      <i class="fa fa-caret-down"></i>
    </a>
  </div>
</section>
<!--申友GMAT名师团队-->
<div class="toefl-teacher">
  <h2 class="pub-title">申友GMAT名师团队</h2>
  <div class="inTeacher">
      <div class="toggleSummer">
          <div class="summerHd hd">
              <a href="javascript:void(0);" class="prev">&lt;</a>
              <a href="javascript:void(0);" class="next">&gt;</a>
          </div>
          <div class="summerBd">
            <ul>
              <li>
                <img src="/cn/images/gmat_kevin.png" alt="老师照片"/>
                <div class="summer-title">
                  <p>雷哥Kevin</p>
                  <p>主讲：GMAT逻辑、语法、数学、IR</p>
                </div>
                <p class="summer-cent">Kevin，学生赠名“雷哥”。具有多年GMAT教学经验，曾受邀到全国数十所著名高校巡回讲座。资深留学英语名师，国内早批新托福教师长期专注海外留学规划和出国考试研究，培养留学学生过万，遍布世界名校。留学考试学术成果：GMAT逻辑靶向图、GMAT逻辑本质论、GMAT语法优先原则、GMAT必要性阅读法、是留学英语考试的集大成者。研发和出版多本留学英语培训教材，并不断优化教学方法，专著有《Influence--雷哥GMAT逻辑》、《申友GMAT高分讲义》、《GMAT真题名师精讲》等。 </p>
                <a class="btn-2" target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
              </li>
              <li>
                <img src="/cn/images/toefl_amanda.png" alt="老师照片"/>
                <div class="summer-title">
                  <p>阿曼Amanda</p>
                  <p>主讲：GMAT阅读、语法</p>
                </div>
                <p class="summer-cent">申友集团语言教学研发总监，《申友GMAT阅读笔记》主编，《申友GMAT语法笔记》副主编。英国兰卡斯特大学硕士，国内重本英语专业毕业；曾以培训师身份受邀参加GMAC官方举办的亚太峰会。亲历雅思，GMAT考试。国外的几年深造，使她对西方人的思维方式和表达习惯有着深刻的了解;多年教授和研发留学英语课程，尤其是GMAT、TOEFL、SAT阅读和雅思口语，对其有个人的见解;上课风格诙谐活泼，深受学生的喜欢。</p>
                <a class="btn-2" target="_blank"  href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
              </li>
              <li>
                <img src="/cn/images/gmat_zora.jpg" alt="老师照片"/>
                <div class="summer-title">
                  <p>Zora</p>
                  <p>主讲：GMAT逻辑、数学、SC、IR</p>
                </div>
                <p class="summer-cent">著作：参编《牡丹江主要旅游景点中英文对照翻译》（东北林业大学出版社）
                  <br />
                  学术成果：申友教育总部教师，GMAT句子改错“解析王”，不仅对GMAT教学有独到见解，更在专八、BEC高级、雅思等多项重量级考试中获取高分；第十四届中国澳大利亚研究国际学术研讨会外事接待组组长；曾作为东北地区渤海靺鞨秀详细资料、澳大利亚吉拉德政府外交政策以及澳大利亚女作家伊丽莎白•乔利小说《果园窃贼》等多个翻译项目的翻译骨干，参与第十四届中澳研讨会前期项目；普通话水平一级乙等，“东北话水平八级”；教学风格另类幽默，深受学生喜爱。</p>
                <a class="btn-2" target="_blank"
                   href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
              </li>
              <li>
                <img src="/cn/images/gmat-sharron.jpg" alt="老师照片"/>
                <div class="summer-title">
                  <p>Sharron</p>
                  <p>主讲：GMAT逻辑、阅读</p>
                </div>
                <p class="summer-cent">英国巴斯大学管理学院硕士，国内重本商务英语专业，持专八证书。对出国留学考试认识深刻，在留学考试中各科均斩获高分。曾数十次参与涉及外籍人员刑事案件的公安提审、律师会见、法院文件传达、该国领事会见等重要口译工作。</p>
                <a class="btn-2" target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
              </li>
              <li>
                <img src="/cn/images/gmat_portia.jpg" alt="教师照片"/>
                <div class="summer-title">
                  <p>Portia</p>
                  <p>主讲：GMAT数学、SC、IR</p>
                </div>
                <p class="summer-cent">善于挖掘学生学习的盲点，并能及时满足学生学习所需，对GMAT、SAT数学研究深入，针对基础、中等、高分三段不同程度的学生有独特的教学方案，拥有独特的数学学习构架，难点部分讲解深入易懂；GMAT句子改错讲解细致，对题目分析透彻，善于总结做题技巧，深受学生喜爱。</p>
                <a class="btn-2" target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
              </li>
              <li>
                <img src="/cn/images/gmat_julie.png" alt="老师照片"/>
                <div class="summer-title">
                  <p>Julie</p>
                  <p>主讲：GMAT阅读、数学、逻辑</p>
                </div>
                <p class="summer-cent">美国工学硕士、博士。美国化工协会会员，全奖赴美留学，后留美工作。在美期间，多次参加国际会议，亲历美国文化，游遍美国。本科毕业于西安交通大学，取得双学位(工程/英语)，在校期间以作者身份在英国知名环境类杂志发表论文一篇。在所参加过的各类出国考试中均获得高分，并不断尝试刷新。
多年GMAT考试培训经验，深谙GMAT阅读、数学考试技法，为广大考生带来福音。以缜密的工科思维和批判式的文科思维穿行于GMAT培训讲堂。目前为申友的GMAT主讲老师之一，并负责教研与教师团队的培训建设。Julie有多年托福授课经验，是国内较早的新托福教师之一，准确把握ETS的出题思路，其研发的口语听力技巧深受学生亲睐。对西方人的思维方式和表达习惯有着深刻理解，能够有效纠正学生学习英语的误区。在留学申请与签证办理，以及海外学习，工作和生活方面有着丰富经验，尤其擅长美国工科硕士申请。
                    </p>
                <a class="btn-2" target="_blank" href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">约课</a>
              </li>
            </ul>
          </div>
      </div>
      <script type="text/javascript">
         jQuery(".toggleSummer").slide({ mainCell:".summerBd ul", effect:"leftLoop",vis:3, autoPlay:false});
      </script>
  </div>
</div>
<!--申友公开课-->
<div class="shenYou-class">
  <h2 class="pub-title">申友公开课</h2>
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
  <div class="pub-more">
    <a href="/public-class.html" target="_blank">
      <span>更多课程查询</span>
      <i class="fa fa-caret-down"></i>
    </a>
  </div>
</div>
<!--关于申友托福-->
<div class="aboutToefl">
    <h2 class="pub-title">申友GMAT,让高分来说话</h2>
    <div class="aboutTSlide">
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
                        <p title="<?php echo $v['title']?>"><?php echo $v['title']?></p>
                        <div>
                          <span>Total:<?php echo $v['score']?>分</span>
                          <a href="/word-details/<?php echo $v['id']?>/102.html">查看详情 &gt;</a>
                        </div>
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
                      <div>
                        <span>Total:710分（Q51,V34）</span>
                        <a href="/word-details/<?php echo $v['id']?>/102.html">查看详情 &gt;</a>
                      </div>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
      <div class="aboutTHd hd">
        <a href="javascript:;" class="prev">1</a>
        <a href="javascript:;" class="next">2</a>
      </div>
    </div>
    <script type="text/javascript">
        jQuery(".aboutTSlide").slide({mainCell:".aboutTBd",trigger:"click",pnLoop:false});
    </script>

</div>
<!--动态-->
<div class="dynamic">
  <ul>
    <li>
      <div class="dynamic-right">
        <div class="dynamic-title">
          <h4>考试动态</h4>
          <a href="list/125.html" target="_blank">
            <span>MORE <i class="fa fa-angle-right"></i></span>
          </a>
        </div>
        <ul>
          <?php
          $data = \app\modules\cn\models\Content::getContent(['category' => "118,115",'pageSize'=>8]);
          //                    var_dump($data);
          foreach($data as $v) {
            ?>
            <li><a href="/word-details/<?php echo $v['id']?>/115,118.html" target="_blank"><?php echo $v['name']?></a></li>
            <?php
          }
          ?>
        </ul>
      </div>
    </li>
    <li>
      <div class="dynamic-right">
        <div class="dynamic-title">
          <h4>研究报告</h4>
          <a href="list/125.html" target="_blank">
            <span>MORE <i class="fa fa-angle-right"></i></span>
          </a>
        </div>
        <ul>
          <?php
          $data = \app\modules\cn\models\Content::getContent(['category' => "125",'pageSize'=>8]);
          foreach($data as $v) {
            ?>
            <li><a href="/word-details/<?php echo $v['id']?>/217.142.html" target="_blank"><?php echo $v['name']?></a></li>
            <?php
          }
          ?>
        </ul>
      </div>
      <div style="clear: both"></div>
    </li>
    <li>
      <div class="dynamic-right">
        <div class="dynamic-title">
          <h4>申友动态</h4>
          <a href="/list/105.html" target="_blank">
            <span>MORE <i class="fa fa-angle-right"></i></span>
          </a>
        </div>
        <ul>
          <?php
          $data = \app\modules\cn\models\Content::getContent(['category' => "105,117,118",'pageSize'=>8]);
          foreach($data as $v) {
            ?>
            <li><a href="/word-details/<?php echo $v['id']?>/88.118.html" target="_blank"><?php echo $v['name']?></a></li>
            <?php
          }
          ?>
        </ul>
      </div>
    </li>
  </ul>
</div>
<!--申友研究中心-->
<div class="researchCenter">
  <h2 class="pub-title">申友研究中心</h2>
    <div class="inResearch">
        <div class="research-bottom">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "108",'pageSize'=>5]);
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
