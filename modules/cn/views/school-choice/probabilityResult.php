<link rel="stylesheet" href="/cn/css/schoolChoose/probability-result.css">
<script type="text/javascript" src="/cn/js/school/echarts.simple.min.js"></script>



<section class="result_cover">
    <div class="admission">
        <div class="admission_name"><?php echo $data['userName']?></div>
        <p class="probability">您申请到<span class="schoolName"><?php echo $data['school']?>- <?php echo $data['major']?></span>专业的成功率为</p>
        <div class="svgs"><!--定义svg圆圈-->
            <span class="bf"><?php echo $data['percent']?>%</span>
        </div>
        <p class="exceed_p">已超过<span class="exceed"><?php if($data['score']<=50){ echo 30; } elseif($data['score']<=60){ echo 40; } elseif($data['score']<=70){ echo 55; }
            elseif($data['score']<=80){ echo 70; } elseif($data['score']<=90){ echo 80; } elseif($data['score']<=100){ echo 85; }?>%</span>的测试者</p>
        <div class="backExceed"><!--背景条件分析-->
            <p class="backExceed_title">背景条件分析</p>
            <div class="content_left">
                <div>
                    <div class="Disadvantage">劣势</div>
                    <div class="contentList">
                        <?php if ($data['res']['defect'] != false) { ?>
                            <?php foreach ($data['res'] as $k => $v) {
                                if ($k != 'defect' && $k != 'advantage' && $v['type'] == 0) { ?>
                                    <li><span><?php echo $v['name'] ?>：<?php echo $v['score'] ?>，打败了<?php echo $v['num'] ?>人</span></li>
                                <?php }
                            } ?>
                        <?php } else {
                            echo ' <li><span>你的整体成绩条件暂无明显劣势</span></li>';
                        } ?>
                    </div>
                </div>
                <div>
                    <div class="advantage">优势</div>
                    <div class="contentList">
                        <?php if ($data['res']['advantage'] != false) { ?>
                            <?php foreach ($data['res'] as $k => $v) {
                                if ($k != 'defect' && $k != 'advantage' && $v['type'] == 1) { ?>
                                    <li><span><?php echo $v['name'] ?>：<?php echo $v['score'] ?>，打败了<?php echo $v['num'] ?>人</span></li>
                                <?php }
                            } ?>
                        <?php } else {
                            echo ' <li><span>你的整体成绩条件暂无明显申请优势，请继续刷分！</span></li>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <p class="tix">*此报告匹配标准近5年留学录取成果大数据作为技术支撑,并不能百分百代表实际录取结果,仅供参考</p>
        <div class="btn"><!--按钮-->
            <a href="/" class="backHome">返回首页</a>
            <a href="/percentages-test.html" class="continue">继续测评</a>
        </div>
    </div>
</section>

<script>

    //协议
    var svgNS = "http://www.w3.org/2000/svg";
    //封装方法创建标签
    function createTag(tag,tagAttr){
        var oTag=document.createElementNS(svgNS,tag);
        for(var attr in tagAttr){
            oTag.setAttribute(attr,tagAttr[attr]);
        };
        return oTag;
    };
    //画圆弧的路径
    function drawArcByRadiusDeg(startX, startY, r, deg, clockwise) {
        var cw = typeof clockwise !== 'undefined' ? clockwise : 1;
        var x = startX - r + r*Math.cos(deg*Math.PI/180);
        var y = startY + (1===cw ? 1 : -1)*r*Math.sin(deg*Math.PI/180);
        var bigOrSmall = deg>180 ? 1 : 0;
        return "M " + startX +" "+ startY + " A "+ r +" " + r + " 0 " + bigOrSmall + " " +cw+ " " + x + " " + y
    }
    //画图
    function drawPath(data){
        var x=170,y=92,r = 78,clockwise=1;//x,y圆心位置   r圆弧的半径   clockwise顺时针
        var Percentage=data*359.9999;
        var circle1=createTag('path',{'d':drawArcByRadiusDeg(x, y, r, 359.99, clockwise),'stroke':"#ccc",'fill-opacity':"0",'stroke-width':"12"});
        var circle2=createTag('path',{'d':drawArcByRadiusDeg(x, y, r, Percentage, clockwise),'stroke':"rgb(198,89,185)",'fill-opacity':"0",'stroke-width':"12"});
        var text1=createTag('text',{'x':x-50,'y':y-10,'font-size':"20px",'text-anchor':"middle"});
        var text2=createTag('text',{'x':x-50,'y':y+20,'fill':"#333",'font-size':"20px",'text-anchor':"middle"});
        $(text1).html(data*100+'%');

        $(oSvg).append(circle1);
        $(oSvg).append(circle2);
        // $(oSvg).append(text1);
        $(oSvg).append(text2);
    }

    //创建svg
    var oSvg=createTag('svg',{"width":"100%","height":"100%",'xmlns':svgNS});
    $('.svgs').append(oSvg);

    //调用
    var per = <?php echo $data['percent']?>;
    drawPath((per/100));

</script>
