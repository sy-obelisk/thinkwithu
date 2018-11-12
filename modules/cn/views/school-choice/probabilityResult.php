<link rel="stylesheet" href="/cn/css/schoolChoose/probability-result.css">
<script type="text/javascript" src="/cn/js/school/echarts.simple.min.js"></script>



<section class="result_cover">
    <div class="admission">
        <div class="admission_name">Trump</div>
        <p class="probability">您申请到<span class="schoolName">伦敦商学院（LBS）- 管理学</span>专业的成功率为</p>
        <div class="svgs"><!--定义svg圆圈-->
            <span class="bf">71%</span>
        </div>
        <p class="exceed_p">已超过<span class="exceed">70%</span>的测试者</p>
        <div class="backExceed"><!--背景条件分析-->
            <p class="backExceed_title">背景条件分析</p>
            <div class="content_left">
                <div>
                    <div class="Disadvantage">劣势</div>
                    <div class="contentList">
                        <li><span>院校背景：加利福利亚,打败了136位测评者打败了136位测评者打败了136位测评者</span></li>
                    </div>
                </div>
                <div>
                    <div class="advantage">优势</div>
                    <div class="contentList">
                        <li><span>雅思：加利福利亚,打败了136位测评者打败了136位测评者打败了136位测评者</span></li>
                        <li><span>个人经历：加利福利亚,打败了136位测评者打败了136位测评者打败了136位测评者</span></li>
                    </div>
                </div>
            </div>
        </div>
        <p class="tix">*此报告匹配标准近5年留学录取成果大数据作为技术支撑,并不能百分百代表实际录取结果,仅供参考</p>
        <div class="btn"><!--按钮-->
            <a href="" class="backHome">返回首页</a>
            <a href="" class="continue">继续测评</a>
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
    drawPath(0.7);

</script>
