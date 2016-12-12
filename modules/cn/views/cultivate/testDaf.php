
    <link rel="stylesheet" href="/cn/css/ueberTestdaf.css"/>

<div class="ueberHead">
    <img src="/cn/images/ueber_bigBG.png" alt="备考资料图标" class="bg"/>
    <img src="/cn/images/ueber_font.png" alt="文字图标" class="fontIcon"/>
</div>
<div class="ueberContent">
    <div class="ueberC-hd hd">
        <h2>备考资料</h2>
        <ul>
            <li>数学</li>
            <li>语法</li>
            <li>逻辑</li>
            <li>阅读</li>
            <li>作文</li>
            <li>IR</li>
        </ul>
    </div>
    <div class="ueberC-bd">
        <ul>
            <li>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "196,166",'pageSize'=>3]);
                $total = $data['total'];
                $count = $data['count'];
                unset($data['count']);
                unset($data['total']);
                unset($data['pageStr']);
                foreach($data as $v) {
                ?>
                <ul>
                    <li><a href="/word-details/<?php echo $v['id']?>/166.html"><h3><?php echo $v['name']?></h3></a></li>
                    <li><?php echo $v['abstract']?></li>
                </ul>
                <?php
                }
                ?>
                <div style="clear: both"></div>
                <!--分页-->
                <div data-value="196,166" class="page pagetop">
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
                    <div style="clear: both"></div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "197,166",'pageSize'=>3]);
                $total = $data['total'];
                $count = $data['count'];
                unset($data['count']);
                unset($data['total']);
                unset($data['pageStr']);
                foreach($data as $v) {
                ?>
                <ul>
                        <li><a href="/word-details/<?php echo $v['id']?>/166.html"><h3><?php echo $v['name']?></h3></a></li>
                        <li><?php echo $v['abstract']?></li>
                </ul>
                <?php
                }
                ?>
                <div style="clear: both"></div>
                <!--分页-->
                <div data-value="197,166" class="page pagetop">
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
                    <div style="clear: both"></div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "198,166",'pageSize'=>3]);
                $total = $data['total'];
                $count = $data['count'];
                unset($data['count']);
                unset($data['total']);
                unset($data['pageStr']);
                foreach($data as $v) {
                ?>
                <ul>
                        <li><a href="/word-details/<?php echo $v['id']?>/166.html"><h3><?php echo $v['name']?></h3></a></li>
                        <li><?php echo $v['abstract']?></li>
                </ul>
                <?php
                }
                ?>
                <div style="clear: both"></div>
                <!--分页-->
                <div data-value="198,166" class="page pagetop">
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
                    <div style="clear: both"></div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "199,166",'pageSize'=>3]);
                $total = $data['total'];
                $count = $data['count'];
                unset($data['count']);
                unset($data['total']);
                unset($data['pageStr']);
                foreach($data as $v) {
                ?>
                <ul>
                        <li><a href="/word-details/<?php echo $v['id']?>/166.html"><h3><?php echo $v['name']?></h3></a></li>
                        <li><?php echo $v['abstract']?></li>
                </ul>
                <?php
                }
                ?>
                <div style="clear: both"></div>
                <!--分页-->
                <div data-value="199,166" class="page pagetop">
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
                    <div style="clear: both"></div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "200,166",'pageSize'=>3]);
                $total = $data['total'];
                $count = $data['count'];
                unset($data['count']);
                unset($data['total']);
                unset($data['pageStr']);
                foreach($data as $v) {
                ?>
                <ul>
                        <li><a href="/word-details/<?php echo $v['id']?>/166.html"><h3><?php echo $v['name']?></h3></a></li>
                        <li><?php echo $v['abstract']?></li>
                </ul>
                <?php
                }
                ?>
                <div style="clear: both"></div>
                <!--分页-->
                <div data-value="200,166" class="page pagetop">
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
                    <div style="clear: both"></div>
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                $data = \app\modules\cn\models\Content::getContent(['pageStr' => 1,'fields' => 'abstract','category' => "201,166",'pageSize'=>3]);
                $total = $data['total'];
                $count = $data['count'];
                unset($data['count']);
                unset($data['total']);
                unset($data['pageStr']);
                foreach($data as $v) {
                ?>
                <ul>
                        <li><a href="/word-details/<?php echo $v['id']?>/166.html"><h3><?php echo $v['name']?></h3></a></li>
                        <li><?php echo $v['abstract']?></li>
                </ul>
                <?php
                }
                ?>
                <div style="clear: both"></div>
                <!--分页-->
                <div data-value="201,166" class="page pagetop">
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
                    <div style="clear: both"></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    jQuery(".ueberContent").slide({mainCell:".ueberC-bd",trigger:"mouseover"});
</script>
<div class="ueberClass">
    <div class="basicBig">
        <div class="kou-group top01">
            <img src="/cn/images/cultivateD_kou.png" alt="中间的扣图标"/>
        </div>
        <div class="basic-left HL01">
            <span>基础课程</span>
        </div>
        <div class="basic-right">
            <ul>
                <li>GMAT培训 基础班（PRE课程）</li>
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
                <li>GMAT培训周末精品班</li>
                <li>VIP课程</li>
                <li>GMAT培训模块组合课程</li>
                <li>GMAT语文应式精品班</li>
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
                <li>GMAT培训700/680/650</li>
                <li></li>
                <li>高分强化课程</li>
                <li>GMAT寒假高分强化班</li>
                <li>GMAT培训机经与冲刺强化班</li>
                <li>GMAT培训 模考解析班</li>
                <li>GMAT培训 精品强化班</li>
                <li>GMAT培训 4天语文精讲班</li>
                <li>GMAT培训 数学、IR班</li>
                <li>上海GMAT晚班3-5人VIP课程</li>
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
                <li>GMAT700+高分强化班</li>
                <li>寒暑假开班时间</li>
                <li>周末精品班</li>
                <li>元旦强化班</li>
                <li>全日制连授班</li>
                <li>住宿班</li>
            </ul>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<script type="text/javascript">
    $('.num').live('click',function(){
        var _this = this;
        var page = $(this).attr('data-value');
        var total = $(this).siblings('.total').attr('data-value');
        if(page <1){
            return false;
        }
        if(page > total){
            return false;
        }
        var pageSize = 3;
        var category = $(this).closest('.page').attr('data-value');
        $.post('/cn/api/change-content',{fields:'abstract',page:page,pageSize:pageSize,category:category},function(re){
            var dataStr = "";
            for(i=0;i<re.data.length;i++){
                dataStr += "<ul>";
                dataStr += '<li><a href="/word-details/'+re.data[i].id+'/166.html"><h3>'+re.data[i].name+'</h3></a></li>';
                dataStr +='<li>'+re.data[i].abstract+'</li>';
                dataStr += "</ul>";
            }
            dataStr +='<div style="clear: both"></div> <div data-value="'+category+'" class="page pagetop">';
            dataStr +=re.str;
            dataStr +='</div>';
            $(_this).closest('div').closest('li').html(dataStr);
        },'json')
    })
</script>
