
<link rel="stylesheet" href="/cn/css/studentsCase.css"/>
    <script type="text/javascript" src="/cn/js/public.js"></script>
    <script type="text/javascript" src="/cn/js/studentsCase.js"></script>

<div class="caseBanner">
    <div class="leftBanner">
        <div class="caseBanhd hd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['category' => "100,190",'pageSize'=>3]);
                foreach($data as $k => $v) {
                    ?>
                    <li><?php echo $k+1?></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="caseBanbd">
            <ul>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['fields'=> "url",'category' => "100,190",'pageSize'=>3]);
                foreach($data as $v) {
                    ?>
                    <li><a href="<?php echo $v['url']?>"><img src="<?php echo $v['image']?>" alt="banner图"></a></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        jQuery(".leftBanner").slide({mainCell:".caseBanbd ul",autoPlay:true});
    </script>
    <div class="rightList">
        <div class="listHd">
            <ul>
                <li><a href="javascript:void(0);">名校录取榜</a></li>
                <li><a href="javascript:void(0);">高分录取榜</a></li>
            </ul>
        </div>
        <div style="clear: both"></div>
        <div class="listBd">
            <ul>
                <li>
                    <div class="listBdBaner01">
                        <div class="listB-Bd">
                            <ul>
                                <?php
                                $data = \app\modules\cn\models\Content::getContent(['category' => "207,104",'pageSize'=>7]);
                                foreach($data as $v) {
                                    ?>
                                    <li><i class="fa fa-angle-left"></i><a href="/picture-details/<?php echo $v['id']?>/104.html"><?php echo $v['name']?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(".listBdBaner01").slide({mainCell:".listB-Bd ul",effect:"topMarquee",autoPlay:true,vis:7,interTime:50});
                    </script>
                    <div class="schoolImg">
                        <img src="/cn/images/index_school01.png" alt="名校图标1"/>
                        <img src="/cn/images/index_school02.png" alt="名校图标2"/>
                        <img src="/cn/images/index_school03.png" alt="名校图标3"/>
                    </div>
                </li>
            </ul>
            <ul>
                <li>
                    <div class="listBdBaner02">
                        <div class="listB-Bd">
                            <ul>
                                <?php
                                $data = \app\modules\cn\models\Content::getContent(['category' => "206,104",'pageSize'=>7]);
                                foreach($data as $v) {
                                    ?>
                                    <li><a href="/picture-details/<?php echo $v['id']?>/104.html"><i class="fa fa-angle-left"></i><?php echo $v['name']?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(".listBdBaner02").slide({mainCell:".listB-Bd ul",effect:"topMarquee",autoPlay:true,vis:7,interTime:50});
                    </script>
                    <img src="/cn/images/index_topScore.jpg" alt="高分榜单" style="width: 280px;"/>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        /* 内层 */
//        jQuery(".rightList .inbanner").slide({titCell:".listbhd li",mainCell:".listbbd",trigger:"mouseover"});
        /* 外层 */
        jQuery(".rightList").slide({titCell:".listHd li",mainCell:".listBd"});
    </script>
    <div style="clear: both"></div>
</div>
<div id="allCase" class="allCase">
    <div class="allcaseHd hd">
        <h2><a href="javascript:;">全部案例 <span>ALL CASE</span></a></h2>
        <div>
            <img src="/cn/images/index_purplePhone.png" alt="电话图标" width="13"/>
            <span>400-600-1123</span>
        </div>
        <ul>
            <li><span></span><img src="/cn/images/studentsCase_countryCase04.png" alt="案例图标"/> <a href="#">留学案例</a></li>
            <li><span></span><img src="/cn/images/studentsCase_countryCase05.png" alt="案例图标"/> <a href="#">GMAT案例</a></li>
            <li><span></span><img src="/cn/images/studentsCase_countryCase06.png" alt="案例图标"/> <a href="#">托福案例</a></li>
        </ul>
    </div>
    <div class="allcaseBd">
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'score,abroadSchool','category' => "178,102",'pageSize'=>15]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $v) {
                ?>
                <li>
                    <a href="/word-details/<?php echo $v['id']?>/102.html">
                        <img src="<?php echo $v['image']?>" alt="学员头像" width="213"/>
                        <div>
                            <ul>
                                <li><?php echo $v['name']?>:<?php echo $v['title']?></li>
                                <!--                            <li>成绩：--><?php //echo $v['score']?><!--</li>-->
                                <li>学校：<?php echo $v['abroadSchool']?></li>
                            </ul>
                        </div>
                    </a>
                </li>
            <?php
            }
            ?>
            <!--分页-->
            <div data-value="178,102" class="page">
                <ul>
                    <li>总数：<?php echo $count?></li>
                    <li data-value="1" class="num"><a href="javascript:;">首页</a></li>
                    <li data-value="0" class="num"><a href="javascript:;">上一页</a></li>
                    <li data-value="2" class="num"><a href="javascript:;">下一页</a></li>
                    <li data-value="<?php echo $total?>" class="mr num"><a href="javascript:;">尾页</a></li>
                    <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                    <li class="mr02"><input type="text"/></li>
                    <li class="goButton"><input type="button" value="GO"/></li>
                    <li class="num"></li>
                </ul>
            </div>
        </ul>
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'score,abroadSchool','category' => "115,102",'pageSize'=>15]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $v) {
                ?>
                <li>
                    <a href="/word-details/<?php echo $v['id']?>/102.html">
                        <img src="<?php echo $v['image']?>" alt="学员头像" width="213"/>
                        <div>
                            <ul>
                                <li><?php echo $v['name']?>:<?php echo $v['title']?></li>
                                <li>成绩：<?php echo $v['score']?></li>
                                <!--<li>学校：--><?php //echo $v['abroadSchool']?><!--</li>-->
                            </ul>
                        </div>
                    </a>
                </li>
            <?php
            }
            ?>
            <!--分页-->
            <div data-value="115,102" class="page">
                <ul>
                    <li>总数：<?php echo $count?></li>
                    <li data-value="1" class="num"><a href="javascript:;">首页</a></li>
                    <li data-value="0" class="num"><a href="javascript:;">上一页</a></li>
                    <li data-value="2" class="num"><a href="javascript:;">下一页</a></li>
                    <li data-value="<?php echo $total?>" class="mr num"><a href="javascript:;">尾页</a></li>
                    <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                    <li class="mr02"><input type="text"/></li>
                    <li class="goButton"><input type="button" value="GO"/></li>
                    <li class="num"></li>
                </ul>
            </div>
        </ul>
        <ul>
            <?php
            $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'score,abroadSchool','category' => "116,102",'pageSize'=>15]);
            $total = $data['total'];
            $count = $data['count'];
            unset($data['count']);
            unset($data['total']);
            unset($data['pageStr']);
            foreach($data as $v) {
                ?>
                <li>
                    <a href="/word-details/<?php echo $v['id']?>/102.html">
                        <img src="<?php echo $v['image']?>" alt="学员头像" width="213"/>
                        <div>
                            <ul>
                                <li><?php echo $v['name']?>:<?php echo $v['title']?></li>
                                <li>成绩：<?php echo $v['score']?></li>
                                <!--<li>学校：--><?php //echo $v['abroadSchool']?> <!--</li>-->
                            </ul>
                        </div>
                    </a>
                </li>
            <?php
            }
            ?>
            <!--分页-->
            <div data-value="116,102" class="page">
                <ul>
                    <li>总数：<?php echo $count?></li>
                    <li data-value="1" class="num"><a href="javascript:;">首页</a></li>
                    <li data-value="0" class="num"><a href="javascript:;">上一页</a></li>
                    <li data-value="2" class="num"><a href="javascript:;">下一页</a></li>
                    <li data-value="<?php echo $total?>" class="mr num"><a href="javascript:;">尾页</a></li>
                    <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                    <li class="mr02"><input type="text"/></li>
                    <li class="goButton"><input type="button" value="GO"/></li>
                    <li class="num"></li>
                </ul>
            </div>
        </ul>
    </div>
</div>
<script type="text/javascript">
    jQuery(".allCase").slide({mainCell:".allcaseBd",trigger:"mouseover"});
</script>
<div id="admission" class="admission">
    <div class="admissHd hd">
        <b>
            我们只申请名校 培养高分学员
            <img src="/cn/images/studentsCase_titlePerson.png" alt="标题人人图标" height="35px"/>
        </b>
        <ul>
            <li><a href="javascript:;">名校录取OFFER</a></li>
            <li><a href="javascript:;">高分成绩单</a></li>
        </ul>
        <div style="clear: both"></div>
    </div>
    <div class="admissBd">
        <ul>
            <li>
                <div class="admissLeft">
                    <ul>
                        <?php
                            $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'category' => '104,207','pageSize' => 6]);
                            $total = $data['total'];
                            $count = $data['count'];
                            unset($data['count']);
                            unset($data['total']);
                            unset($data['pageStr']);
                            foreach($data as $v) {
                                ?>
                                <li>
                                    <a href="/picture-details/<?php echo $v['id']?>/104.html">
                                        <div><img src="<?php echo $v['image']?>" alt="名校录取图片"/></div>
                                        <span><?php echo $v['name']?></span>
                                    </a>
                                </li>
                            <?php
                            }
                        ?>
                        <!--分页-->
                        <div class="page">
                            <ul>
                                <li>总数：<?php echo $count?></li>
                                <li data-value="1" class="num1"><a href="javascript:;">首页</a></li>
                                <li data-value="0" class="num1"><a href="javascript:;">上一页</a></li>
                                <li data-value="2" class="num1"><a href="javascript:;">下一页</a></li>
                                <li data-value="<?php echo $total?>" class="mr num1"><a href="javascript:;">尾页</a></li>
                                <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                                <li class="mr02"><input type="text"/></li>
                                <li class="goButton"><input type="button" value="GO"/></li>
                                <li class="num1"></li>
                            </ul>
                        </div>
                    </ul>
                </div>
                <div class="admissRight">
                    <?php
                        $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => '154','pageSize' => 1])
                    ?>
                    <h2>
                        <?php echo isset($data[0])?$data[0]['name']:''?>
                    </h2>
                    <div class="university">
                        <div class="uniLeft">
                            <img src=" <?php echo isset($data[0])?$data[0]['image']:''?>" alt="城市图">
                        </div>
                        <div class="uniRight">
                            <span> <?php echo isset($data[0])?$data[0]['abstract']:''?></span>
                        </div>
                    </div>
                    <div style="clear: both"></div>
                    <div class="ProductMenu studentCaseW">
                        <div class="productBd">
                            <ul>
                                <li>
                                    <div class="abroadProduct studentC">
                                        <div class="product01 studentCase01" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                                            <a href="/Postgraduate/assistance.html">硕士留学<br>申请方案</a>
                                            <!--遮罩层-->
                                            <div class="productZZC"></div>
                                        </div>
                                        <div class="product02 studentCase02" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                                            <a href="/Undergraduate/assistance.html">本科留学<br>申请方案</a>
                                            <!--遮罩层-->
                                            <div class="productZZC"></div>
                                        </div>
                                        <div class="product03 studentCase03" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                                            <a href="/Doctor/assistance.html">博士留学<br>申请方案</a>
                                            <!--遮罩层-->
                                            <div class="productZZC"></div>
                                        </div>
                                        <div class="product04 studentCase04" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                                            <a href="/individual.html">单项服务</a>
                                            <!--遮罩层-->
                                            <div class="productZZC"></div>
                                        </div>
                                        <div class="product05 studentCase05" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                                            <a href="/MBA-PHD.html">MBA/PHD</a>
                                            <!--遮罩层-->
                                            <div class="productZZC"></div>
                                        </div>
                                        <div class="product06 studentCase06" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                                            <a href="/cn/study/service">申友留学<br>服务优势</a>
                                            <!--遮罩层-->
                                            <div class="productZZC"></div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(".ProductMenu").slide({mainCell:".productBd",trigger:"mouseover"});
                        function hideZZC(o){
                            $(o).find("div.productZZC").hide();
                        }
                        function showZZC(o){
                            $(o).find("div.productZZC").show();
                        }
                    </script>

                </div>
            </li>
        </ul>
        <ul>
            <li>
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'category' => '104,206','pageSize' => 10]);
                    $total = $data['total'];
                    $count = $data['count'];
                    unset($data['count']);
                    unset($data['total']);
                    unset($data['pageStr']);
                    foreach($data as $v) {
                        ?>
                        <li><a href="/picture-details/<?php echo $v['id']?>/104.html"><img src="<?php echo $v['image']?>" alt="ͼƬ"></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
            <div class="page" style="clear: both">
                <ul>
                    <li>总数：<?php echo $count?></li>
                    <li data-value="1" class="num2"><a href="javascript:;">首页</a></li>
                    <li data-value="0" class="num2"><a href="javascript:;">上一页</a></li>
                    <li data-value="2" class="num2"><a href="javascript:;">下一页</a></li>
                    <li data-value="<?php echo $total?>" class="mr num2"><a href="javascript:;">尾页</a></li>
                    <li data-value="<?php echo $total?>" class="total mr02">页次：<span class="colorRed">1</span>/<?php echo $total?></li>
                    <li class="mr02"><input type="text"/></li>
                    <li class="goButton"><input type="button" value="GO"/></li>
                    <li class="num2"></li>
                </ul>
            </div>
        </ul>
    </div>
</div>
<script type="text/javascript">
    jQuery(".admission").slide({mainCell:".admissBd",trigger:"mouseover"});
</script>
<div class="onlineEvaluation">
    <div class="teacherJY studenTeac">
        <div class="slideTeaFont">
            <div class="slideTeaHd hd">
                <a href="javascript:;" class="prev"><i class="fa fa-caret-left"></i></a>
                <a href="javascript:;" class="next"><i class="fa fa-caret-right"></i></a>
            </div>
            <div class="slideTeaBd bd">
                <?php
                    $data = \app\modules\cn\models\Content::getContent(['fields' => 'abstract','category' => '142','pageSize'=>5]);
                    foreach($data as $v) {
                        ?>
                        <ul>
                            <li>
                                <div class="teaHeadImg">
                                    <h1><?php echo $v['name']?></h1>

                                    <div>
                                        <img src="<?php echo $v['image']?>" alt="名师头像"/>
                                    </div>
                                </div>
                                <div class="teaInfo studenInfo">
                                    <h5>"<?php echo $v['title']?>"</h5>

                                    <p class="mt">
                                        <?php echo $v['abstract']?>。
                                    </p>
                                    <a href="/word-details/<?php echo $v['id']?>/142.html">more <i class="fa fa-caret-right"></i></a>
                                </div>
                            </li>
                        </ul>
                    <?php
                    }
                ?>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".slideTeaFont").slide({trigger:"click"});
        </script>
    </div>
    <div class="onlinePG">
        <img src="/cn/images/studentsCase_onlinePG.png" alt="在线评估图片"/>
        <div class="userInfo">
            <ul>
                <li>
                    <label>
                        <span>*</span>
                        <b>姓名：</b>
                    </label>
                    <div>
                        <input class="onlineName" type="text"/>
                    </div>
                </li>
                <?php
                $extendData = \app\modules\cn\models\CategoryExtend::find()->where("catId=226 AND belong='content'")->orderBy('id ASC')->all();
                foreach($extendData as $v) {
                    ?>
                    <li>
                        <label>
                            <span>*</span>
                            <b><?php echo $v['name']?>：</b>
                        </label>
                        <?php if($v['type'] == 0){?>
                            <div>
                                <input type="text" name=""/>
                            </div>
                        <?php } elseif($v['type'] == 5) {
                            $typeValue = explode(",",$v['typeValue']);
                            ?>
                            <div class="infoRight">
                                <div class="default defa04">
                                    <span class="onlineValue">请选择</span>
                                    <div class="clickBac clickBac03" onclick="selectInfo(this)"></div>
                                    <!--文字-->
                                    <div class="secFont secFont04">
                                        <ul>
                                            <?php foreach($typeValue as $val) { ?>
                                                <li><?php echo $val?></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both"></div>
                        <?php
                        }
                        ?>
                    </li>
                <?php
                }
                ?>
                <li>
                    <label>
                        <span>*</span>
                        <b>验证码：</b>
                    </label>
                    <div class="diffWidth">
                        <input name="code" type="text"/>
                        <input onclick="onlineCode(this)" type="button" value="获取验证码"/>
                    </div>
                </li>
                <li>
                    <div class="submitBtn">
                        <div onclick="onlineSub(this)">提交</div>
                    </div>
                </li>
            </ul>
        </div>
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
            var email = $(_this).closest('li').prev().prev().prev().find('input').val();
            var name = $('.onlineName').val();
            var code = $(_this).closest('li').prev().find('input').val();
            var _class = $(_this).closest('li').prev().prev().prev().prev().find('.onlineValue').html();
            if(phone == ''){
                alert('留下您的联系方式');
                return false;
            }
            if(code == ''){
                alert('请输入验证码');
                return false;
            }
            if(_class == '请选择'){
                alert('请选择课程');
                return false;
            }
            if(name == ''){
                alert('请输入您的姓名');
                return false;
            }
            if(email == ''){
                alert('请输入你的联系邮箱');
                return false;
            }
            $.post('/cn/api/online-words',{class:_class,name:name,email:email,phone:phone,code:code},function(re){
                alert(re.message);
                window.location.reload()
            },"json")
        }
    </script>
    <div class="recommend">
        <h4>推荐阅读</h4>
        <ul>
            <?php
            $related = Yii::$app->db->createCommand('Select * from {{%content}} c WHERE c.id in (SELECT DISTINCT contentId FROM {{%category_content}} ca WHERE ca.catId IN (118,125,126,127,128,129,130,131)) ORDER BY c.viewCount DESC LIMIT 6')->queryAll();
            foreach($related as $v) {
                ?>
                <li><a href="/word-details/<?php echo $v['id']?>/<?php echo $v['catId']?>.html"><?php echo $v['name']?></a></li>
            <?php
            }
            ?>
        </ul>
    </div>
    <div style="clear: both"></div>
</div>

<script type="text/javascript">
    //感言分页
    $('body').on('click',".num",function(){
        var _this = this;
        var page = $(this).attr('data-value');
        var total = $(this).siblings('.total').attr('data-value');
        if(Number(page) < 1){
            return false;
        }
        if(Number(page) > Number(total)){
            return false;
        }
        var pageSize = 15;
        var category = $(this).closest('.page').attr('data-value');
        $.post('/cn/api/change-content',{fields:'score,abroadSchool',page:page,pageSize:pageSize,category:category},function(re){
            var dataStr = "";
            for(i=0;i<re.data.length;i++){
                dataStr += '<li>';
                dataStr+='<a href="/word-details/'+re.data[i].id+'/102.html">';
                dataStr +='<img src="'+re.data[i].image+'" alt="学员头像" width="213"/>';
                dataStr +='<div>';
                dataStr +='<ul>';
                dataStr +='<li>'+re.data[i].name+':'+re.data[i].title+'</li>';
//                dataStr +='<li>成绩：'+re.data[i].score+'</li>';
                dataStr +='<li>学校：'+re.data[i].abroadSchool+'</li>';
                dataStr +='</ul>';
                dataStr +='</div>';
                dataStr +=' </a></li>';
            }
            dataStr +='<div data-value="'+category+'" class="page">';
            dataStr +=re.str;
            dataStr +='</div>';
            $(_this).closest('div').closest('ul').html(dataStr);
        },'json')
    })
    //名校案列
    $('body').on('click',".num1",function(){
        var _this = this;
        var page = $(this).attr('data-value');
        var total = $(this).siblings('.total').attr('data-value');
        if(Number(page) < 1){
            return false;
        }
        if(Number(page) > Number(total)){
            return false;
        }
        var pageSize = 6;
        $.post('/cn/api/change-content',{pageClass:'num1',fields:'',page:page,pageSize:pageSize,category:'207,104'},function(re){
            var dataStr = "<ul>";
            for(i=0;i<re.data.length;i++){
                dataStr += '<li><a href="/picture-details/'+re.data[i].id+'/104.html">';
                dataStr +='<div><img src="'+re.data[i].image+'" alt="图片"/></div>';
                dataStr +='<span>'+re.data[i].name+'</span>';
                dataStr +='</a></li>';
            }
            dataStr +='<div class="page">';
            dataStr +=re.str;
            dataStr +='</div></ul>';
            $(_this).closest('.admissLeft').html(dataStr);
        },'json')
    })
//高分案列培训
    $('body').on('click',".num2",function(){
        var _this = this;
        var page = $(this).attr('data-value');
        var total = $(this).siblings('.total').attr('data-value');
        if(Number(page) < 1){
            return false;
        }
        if(Number(page) > Number(total)){
            return false;
        }
        var pageSize = 10;
        $.post('/cn/api/change-content',{pageClass:'num2',fields:'',page:page,pageSize:pageSize,category:'104,206'},function(re){
            var dataStr = "<li><ul>";
            for(i=0;i<re.data.length;i++){
                dataStr += '<li><a href="/picture-details/'+re.data[i].id+'/104.html">';
                dataStr +='<img src="'+re.data[i].image+'" alt="学员头像" width="213"/>';
                dataStr +='</a></li>';
            }
            dataStr +='</ul></li><div  class="page" style="clear: both">';
            dataStr +=re.str;
            dataStr +='</div>';
            $(_this).closest('div').closest('ul').html(dataStr);
        },'json')
    });
    //分页搜索
    $('body').on('click',".goButton",function(){
        var page = $(this).prev('li').find('input').val();
        var next = $(this).next('li');
        next.attr('data-value',page);
        next.click();
    })
</script>