
    <link rel="stylesheet" href="/cn/css/joinUs.css?v=1.1"/>
<!--    <script type="text/javascript" src="/cn/js/joinUs.js"></script>-->

<div class="join-wrap w10">
    <div class="join-top-img">
        <img src="/cn/images/join_01.png" alt="背景图片">
    </div>
    <div class="join-about">
        <div style="width: 1220px;margin: auto">
            <img src="/cn/images/join_02.png" alt="关于我们">
            <h2>企业简介</h2>
            <div class="about-left">
                <h4>企业介绍</h4>
                <p>申友国际教育源于2007年的雷哥创业团队。2012年在北京注册，目前在上海、成都、杭州、武汉、广州、深圳、美国加州等多个城市拥有分支机构，致力于以科技改变教育，专注于高端留学咨询和出国考试培训。其中，申友名校留学咨询，SAT培训、GMAT培训、托福培训、雅思培训、在规模上目前处于国内实力地位。</p>
                <div>
                    <h4>申友文化<br>
                        客户——客户中心，诚信专注，做良心事业<br>
                        公司——持续学习，勇于变革，为发展储力<br>
                        员工——卓越文化，价值共享，让员工受益<br>
                    </h4>
                </div>
            </div>
            <div class="about-right">
                <img src="/cn/images/join_03.png" alt="">
            </div>
        </div>
    </div>
    <div class="join-us">
        <div style="width: 1200px;margin: auto">
            <img src="/cn/images/join_04.png" alt="">
            <h2>加入我们</h2>
            <div class="join-cnt">
                <div class="hd">
                    <ul>
                        <li>教育类</li>
                        <li>营销/市场类</li>
                        <li>留学顾问类</li>
                        <li>综合类</li>
                    </ul>
                </div>
                <div class="bd">
                    <div>
                        <dl>
                            <dt>招聘职位:</dt>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "213,211"]);
                            //                        var_dump($data);
                            //                        die;
                            foreach($data as $v) {
                                ?>
                                <dd><strong><?php echo $v['name']?>：</strong><?php  $id=$v['id']; $data =  \app\modules\cn\models\Content::getContent(['fields' => 'description','where' => "c.id=$id"]);echo($data[0]['description'] ) ;?></dd>
                            <?php }?>
                        </dl>
                        <dl>
                            <dt>福利：</dt>
                            <dd>1、定期体检</dd>
                            <dd>2、节日福利</dd>
                            <dd>3、五险一金</dd>
                            <dd>4、完善的员工培养体系</dd>
                            <dd>5、全面的内部激励系统</dd>
                        </dl>
                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">跟我们聊聊</a>
                    </div>
                    <div>
                        <dl>
                            <dt>招聘职位:</dt>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "215,211"]);
                            foreach($data as $v) {
                                ?>
                                <dd><strong><?php echo $v['name']?>：</strong><?php  $id=$v['id']; $data =  \app\modules\cn\models\Content::getContent(['fields' => 'description','where' => "c.id=$id"]);echo($data[0]['description'] ) ;?></dd>
                            <?php }?>
                        </dl>
                        <dl>
                            <dt>福利：</dt>
                            <dd>1、定期体检</dd>
                            <dd>2、节日福利</dd>
                            <dd>3、五险一金</dd>
                            <dd>4、完善的员工培养体系</dd>
                            <dd>5、全面的内部激励系统</dd>
                        </dl>
                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">跟我们聊聊</a>
                    </div>
                    <div>
                        <dl>
                            <dt>招聘职位:</dt>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "217,211"]);
                            foreach($data as $v) {
                                ?>
                                <dd><strong><?php echo $v['name']?>：</strong><?php  $id=$v['id']; $data =  \app\modules\cn\models\Content::getContent(['fields' => 'description','where' => "c.id=$id"]);echo($data[0]['description'] ) ;?></dd>
                            <?php }?>

                        </dl>
                        <dl>
                            <dt>福利：</dt>
                            <dd>1、定期体检</dd>
                            <dd>2、节日福利</dd>
                            <dd>3、五险一金</dd>
                            <dd>4、完善的员工培养体系</dd>
                            <dd>5、全面的内部激励系统</dd>
                        </dl>
                        <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">跟我们聊聊</a>
                    </div>
                    <div>
                        <dl>
                            <dt>招聘职位:</dt>
                            <?php
                            $data = \app\modules\cn\models\Content::getContent(['fields' => 'place','category' => "216,211"]);
                            foreach($data as $v) {
                                ?>
                                <dd><strong><?php echo $v['name']?>：</strong><?php  $id=$v['id']; $data =  \app\modules\cn\models\Content::getContent(['fields' => 'description','where' => "c.id=$id"]);echo($data[0]['description'] ) ;?></dd>
                            <?php }?>
                            <dl>
                                <dt>福利：</dt>
                                <dd>1、定期体检</dd>
                                <dd>2、节日福利</dd>
                                <dd>3、五险一金</dd>
                                <dd>4、完善的员工培养体系</dd>
                                <dd>5、全面的内部激励系统</dd>
                            </dl>
                            <a href="http://p.qiao.baidu.com/im/index?siteid=6058744&ucid=3827656&cp=&cr=&cw=">跟我们聊聊</a>
                    </div>
                </div>
            </div>
            <script type="text/javascript">jQuery(".join-cnt").slide();</script>
        </div>
    </div>
    <div class="join-address">
        <div style="width: 1200px;margin: auto">
            <dl>
                <dt>工作地址：</dt>
                <dd>总部：上海市杨浦区政学路51号（近大学路五角场）</dd>
                <dd>北京：北京市海淀区海淀大街38号银科大厦（中关村创业大街）</dd>
                <dd>成都：成都市锦江区东大街下东大街段258号西部国际金融中心（WIFC）2号楼20层</dd>
                <dd>武汉：武汉市洪山区珞瑜路889号融众国际</dd>
                <dd>杭州：杭州市下城区庆春路118号嘉德广场</dd>
            </dl>
            <p>人力资源部邮箱：hr@thinkwithu.cn</p>
        </div>
    </div>
</div>

