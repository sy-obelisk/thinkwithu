<link rel="stylesheet" href="/cn/css/major.css"/>
<script type="text/javascript" src="/cn/js/index.js"></script>
<!-----------------------------导航end------------------------------>
<div class="allMajor">
    <div class="inMajor">
        <ul>
            <?php
                $data = \app\modules\cn\models\Category::getCategory(143);
                foreach($data as $v) {
                    ?>
                    <li <?php echo $v['id'] == $id?'class="on"':''?>><a href="/major/<?php echo $v['id']?>.html">
                        <img src="<?php echo $v['image']?>" alt="专业图标"/>

                        <div>
                            <h3>
                                <?php echo $v['name']?> <br>
                                <span><?php echo $v['enName']?></span>
                            </h3>
                        </div>
                        </a></li>
                <?php
                }
            ?>
        </ul>
        <div class="Analyst">
            <div class="leftAnalyst">
                <p>
                    <b><?php echo $categoryData['name']?>专业</b> <br>
                    <span>申请分析</span>
                </p>
            </div>
            <div class="rightAnalyst">
                <?php echo $categoryData['description']?>
            </div>
        </div>
        <div class="majorSearch">
            <input type="text" value="热门搜索美国留学" onfocus="this.value=''" onblur="shiqu(this)">
            <div>
                <span></span>
                <img src="/cn/images/frame_serachIcon.png" alt="搜索图标"/>
            </div>
        </div>
    </div>
</div>
<div class="quesAcontent">
    <div class="contentLeft">
        <div class="majorContent">
            <ul>
                <?php foreach($contentData as $v) { ?>
                    <li>
                        <div class="maCleft">
                            <img src="<?php echo $v['image']?>" alt="图片信息"/>
                        </div>
                        <div class="maCright">
                            <a href="/word-details/<?php echo $v['id']?>/<?php echo $id?>.html"><h4><?php echo $v['name']?></h4></a>

                            <p>
                                <?php echo $v['abstract']?>
                            </p>
                            <span>关键词： <?php echo $v['keywords']?> </span>
                            <b> <a href="#">留学方案</a> |
                                <a href="#" style="color: red">在线咨询</a>
                            </b>
                        </div>
                        <div style="clear: both"></div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <!--分页-->
        <script type="text/javascript">
            function goPage(){
                var page = $('.pageNumber').val();
                var total = <?php echo $total?>;
                if(page = "" || page > total || page<1){
                    alert("请输入正确数字");
                    return false;
                }
                var page = $('.pageNumber').val();
                location.href="/major/<?php echo $id?>/"+page+'.html';
            }
        </script>
        <div class="page pagetop">
            <ul>
                <li>总数：<?php echo $count?></li>
                <li><a href="<?php echo "/major/$id/1.html"?>">首页</a></li>
                <li><a href="<?php echo ($page >1)?'/major/'.$id.'/'.($page-1).'.html':'javascript:;'?>">上一页</a></li>
                <li><a href="<?php echo ($page < $total)?'/major/'.$id.'/'.($page+1).'.html':'javascript:;'?>">下一页</a></li>
                <li class="mr"><a href="<?php echo "/major/$id/$total"?>.html">尾页</a></li>
                <li class="mr02">页次：<span class="colorRed"><?php echo $page?></span>/<?php echo $total?></li>
                <li class="mr02"><input class="pageNumber" type="text"/></li>
                <li><input onclick="goPage()" type="button" value="GO"/></li>
            </ul>

            <div style="clear: both"></div>
        </div>

        <?php use app\commands\front\RelatedWidget;?>
        <?php RelatedWidget::begin();?>
        <?php RelatedWidget::end();?>
    </div>
    <?php use app\commands\front\RightWidget;?>
    <?php RightWidget::begin();?>
    <?php RightWidget::end();?>
    <div style="clear: both"></div>
</div>
