
    <link rel="stylesheet" href="/cn/css/studyPlan.css"/>


<!-----------------------------导航end------------------------------>
<div class="computerImg">
    <img src="/cn/images/studyPlan_compter.png" alt="头部电脑图"/>
</div>
<form action="/evaluation.html" onsubmit="return checkSub()" method="post">
<div class="applicationRating">
    <!--<img src="/cn/images/studyPlan_hands01.png" alt="手图标" class="hands01"/>-->
    <!--<img src="/cn/images/studyPlan_hands02.png" alt="手图标" class="hands02"/>-->
    <div class="applicationTop">
        <span>申友名校申请评估</span>
        <b><img src="/cn/images/studyPlan_phone.png" alt="电话"/>400-600-1123</b>
    </div>
    <div class="applicationBot">
        <div class="intention">
            <div class="intenLeft">
                <img src="/cn/images/studyPlan_num01.png" alt="评估图标"/>
                <h1>留学申请意向及信息</h1>
            </div>
            <div class="intenRight">
                <ul>
                    <?php
                        foreach($extendData as $k => $v) {
                            if($k == 6){
                                break;
                            }
                            ?>
                            <li>
                                <label><span><?php echo $v['required'] == 1?'*':''?></span> <?php echo $k+1?>.<?php echo $v['name']?>：</label>

                                <div class="group-input">
                                    <?php if($v['type'] == 0){?>
                                    <input name="extendValue[]" class="val" type="text"/>
                                    <?php } elseif($v['type'] == 5) {
                                        $typeValue = explode(",",$v['typeValue']);
                                        ?>
                                        <div class="default defa03">
                                            <span class="spanVal">请选择</span>
                                            <input name="extendValue[]" <?php echo $v['required'] == 1?'class="val"':''?> type="hidden" value="" />
                                            <div class="clickBac clickBac01" onclick="selectInfo(this)"></div>
                                            <!--文字-->
                                            <div class="secFont secFont03">
                                                <ul>
                                                    <?php foreach($typeValue as $val) { ?>
                                                        <li><?php echo $val?></li>
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                        <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="intention02">
            <div class="intenLeft02">
                <img src="/cn/images/studyPlan_num02.png" alt="评估图标"/>
                <h1>背景信息扩充（选填）</h1>
                <span>注：背景资料填的越仔细
                <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    留学老师对你的评估结果越准确哦！</span>
            </div>
            <div class="intenRight ulLimB">
                <ul>
                    <?php
                    foreach($extendData as $k => $v) {
                        if($k < 6 ){
                            continue;
                        }
                        if($k == 6){
                            $idStr = 'id="GPA"';
                        }else if($k == 7){
                            $idStr = 'id="TOEFL"';
                        }else if($k == 8){
                            $idStr = 'id="GMAT"';
                        }else{
                            $idStr = '';
                        }
                        ?>
                        <li>
                            <label><span><?php echo $v['required'] == 1?'*':''?> </span> <?php echo $v['name']?>：</label>

                            <div class="group-input">
                                <?php if($v['type'] == 0){?>
                                    <input name="extendValue[]" <?php echo $idStr?> <?php echo $v['required'] == 1?'class="val"':''?>  type="text"/>
                                <?php } elseif($v['type'] == 5) {
                                    $typeValue = explode(",",$v['typeValue']);
                                    ?>
                                    <div class="default defa03">
                                        <span class="spanVal">请选择</span>
                                        <input type="hidden" <?php echo $idStr?> <?php echo $v['required'] == 1?'class="val"':''?>  name="extendValue[]" value="">
                                        <div class="clickBac clickBac01" onclick="selectInfo(this)"></div>
                                        <!--文字-->
                                        <div class="secFont secFont03">
                                            <ul>
                                                <?php foreach($typeValue as $val) { ?>
                                                    <li><?php echo $val?></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php
                                } elseif($v['type'] == 4) {
                                    ?>
                                    <textarea name="extendValue[]" cols="30" rows="10"></textarea>
                                <?php
                                }
                                ?>
                            </div>
                            <div style="clear: both"></div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <input type="hidden" name="collagen" id="collagen" value="">
            </div>
            <div style="clear: both"></div>
        </div>
    </div>
</div>
<!--提交按钮-->
<div class="referBtn">
    <input type="submit" value="提交"/>
    <span>（我们留学顾问将会在下一个工作日内与您取得联系。）</span>
</div>
</form>
<div class="planProduct">
    <div class="leftProduct">
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
    <div class="ProductMenu studyPlanW">
        <div class="productHd hd">
            <b><img src="/cn/images/studentsCase_titlePerson.png" alt="标题人"/> &nbsp;&nbsp;&nbsp;&nbsp;我们只申请名校 培养高分学员</b>
            <ul>
                <li><span>留学产品</span></li>
                <li><span>培训产品</span></li>
            </ul>

        </div>
        <div class="productBd">
            <ul>

                <li>
                    <div class="abroadProduct">
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => "113",'pageSize'=>7]);
                        foreach($data as $k => $v) {
                            ?>
                            <div class="product0<?php echo $k+1?>" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                                <a href="/picture-details/<?php echo $v['id']?>/113.html"><?php echo $v['title']?><br><?php echo $v['name']?></a>
                                <!--遮罩层-->
                                <div class="productZZC"></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div style="clear: both"></div>
                </li>

            </ul>
            <ul>
                <li>
                    <div class="abroadProduct">
                        <?php
                        $data = \app\modules\cn\models\Content::getContent(['category' => "109,115",'pageSize'=>7]);
                        foreach($data as $k => $v) {
                            ?>
                            <div class="product0<?php echo $k+1?>" onmouseover="hideZZC(this)" onmouseout="showZZC(this)">
                                <a href="/picture-details/<?php echo $v['id']?>/109,115.html"><?php echo $v['title']?><br><?php echo $v['name']?></a>
                                <!--遮罩层-->
                                <div class="productZZC"></div>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                    <div style="clear: both"></div>
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
    <div style="clear: both"></div>
</div>

<script type="text/javascript">
    function checkSub(){
        var gpaReg1 = new RegExp("^[0-4]{1}$");
        var gpaReg2 = new RegExp("^([0-3]{1})+(.[0-9]{1})?$");
        var toeflReg1 = new RegExp("^([0-1]+([0-2]{1})+([0-9]{1}))$");
        var toeflReg2 = new RegExp("^[1-9]+([0-9]{1})$");
        var toeflReg3 = new RegExp("^([0-9]|([3-8]+(.[0-9]{1})))$");
        var GPA = $('#GPA').val();
        var TOEFL = $('#TOEFL').val();
        var GMAT = $('#GMAT').val();
        var a = 1;
        $('.spanVal').each(function(){
            var spanVal = $(this).html();
            if(spanVal == '请选择'){
                spanVal = '';
            }
            $(this).next().val(spanVal);
        })
        $('.val').each(function(){
            if($(this).val() == "" || $(this).val() == "请选择"){
                alert('星标志位必填');
                a = 2;
                return false;
            }
        })
        if(a == 2){
            return false;
        }
        if(GPA<1 || GPA>4){
            alert('GPA请输入1-4之间的数字');
            return false;
        }else{
            if(GPA>=3.5){
                GPA = 90;
            }else
            if(GPA>=3 && GPA<=3.4){
                GPA = 80;
            }else
            if(GPA>=2 && GPA<=2.9){
                GPA = 65;
            }else
            if(GPA<2){
                GPA = 45;
            }
        }
        if(!toeflReg1.test(TOEFL) && !toeflReg2.test(TOEFL) && !toeflReg3.test(TOEFL)){
            alert('托福数值为10到120  雅思数值为3.0到9.0（最小间隔为0.5）');
            return false;
        }else{
            if(TOEFL>=10){
                if(TOEFL>=110){
                    TOEFL = 90;
                }else
                if(TOEFL>=100 && TOEFL<=109){
                    TOEFL = 80;
                }else
                if(TOEFL>=90 && TOEFL<=99){
                    TOEFL = 65;
                }else
                if(TOEFL<90){
                    TOEFL = 45;
                }
            }else{
                if(TOEFL>=8.0){
                    TOEFL = 90;
                }else
                if(TOEFL>=7.5 && TOEFL<=7.9){
                    TOEFL = 80;
                }else
                if(TOEFL>=5.5 && TOEFL<=7.4){
                    TOEFL = 65;
                }else
                if(TOEFL<5.5){
                    TOEFL = 45;
                }
            }
        }
        if((GMAT>=400 && GMAT<=800) || (GMAT>=261 && GMAT<=340)){
            if(GMAT>=350){
                if(GMAT>=750){
                    GMAT = 90;
                }else
                if(GMAT>=700 && GMAT<=749){
                    GMAT = 80;
                }else
                if(GMAT>=650 && GMAT<=699){
                    GMAT = 65;
                }else
                if(GMAT<650){
                    GMAT = 45;
                }
            }else{
                if(GMAT>=300){
                    GMAT = 90;
                }else
                if(GMAT>=250 && GMAT<=299){
                    GMAT = 80;
                }else
                if(GMAT>=200 && GMAT<=249){
                    GMAT = 65;
                }else
                if(GMAT<200){
                    GMAT = 45;
                }
            }
        }else{
            alert('GMAT数值为400到800（最小间隔为10），GRE数值为261-340');
            return false;
        }
        var all = GPA+GMAT+TOEFL;
        var collagen = Math.ceil(all/3)
        $('#collagen').val(collagen);
    }
</script>