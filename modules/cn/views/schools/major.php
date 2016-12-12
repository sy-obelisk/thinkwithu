<link rel="stylesheet" href="/cn/css/header.css"/>
<link rel="stylesheet" href="/cn/css/footer.css"/>
<link rel="stylesheet" href="/cn/css/public.css"/>
    <link rel="stylesheet" href="/cn/schools/css/academyD-threeLevel.css"/>


<div class="threeLevel-content">
    <div class="acadL-top">
        <img src="/cn/schools/images/academy_yuanx.png" alt="标题图标" height="32"/>
        <span>专业详情</span>
    </div>
    <div class="three-center">
        <div class="threeC-left">
            <span></span>
<!--            <img src="http://academy.fawn/--><?php //echo $major[0]['cont'][0]['image']?><!--" alt="图片"/>-->
            <img src="http://academy.gmatonline.cn/<?php echo $major[0]['cont'][0]['image']?>" alt="图片"/>
        </div>
        <div class="threeC-center">
            <h4><?php echo $major[0]['cont'][0]['title']?>(<?php echo $major[0]['cont'][0]['name']?>)</h4>
            <ul>
                <li>建校时间：<?php echo $major[0]['cont'][0]['s_time']?></li>
                <li>学校人数：<?php echo $major[0]['cont'][0]['s_pesonal']?></li>
                <li>学校类型：<?php echo $major[0]['cont'][0]['s_type']?></li>
                <li>所在地：  <?php echo $major[0]['cont'][0]['s_place']?></li>
                <li>地理位置：<?php echo $major[0]['cont'][0]['s_wz']?></li>
                <li>学校排名：<?php echo $major[0]['cont'][0]['s_rank']?></li>
                <li>
                    官网：
                    <a href="<?php echo $major[0]['cont'][0]['s_url']?>"><?php echo $major[0]['cont'][0]['s_url']?></a>
                    <div class="thR-cen">
                        <a href="#">
                            <img src="/cn/schools/images/academy_gou.png" alt="图片">
                            <span>录取几率免费评估</span>
                        </a>
                    </div>
                </li>

            </ul>
        </div>
        <div class="threeC-right">
<!--            <img src="http://academy.fawn/--><?php //echo $major[0]['cont'][0]['s_logo']?><!--" alt="图片">-->
            <img src="http://academy.gmatonline.cn/<?php echo $major[0]['cont'][0]['s_logo']?>" alt="图片">
        </div>
        <div style="clear: both"></div>
    </div>
 <!------------------专业介绍---------------------->
    <div class="acad_commonT">
        <img src="/cn/schools/images/academyD_xing.png" alt="五角星图标"/>
        <b>专业介绍</b>
        <span>| Professional introduction</span>
    </div>
    <div class="basicData">
        <ul>
            <li>
                <div class="basic-left">项目名称</div>
                <div class="basic-right">
                    <span><?php echo $major[0]['s_xname']?></span>
                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="basic-left">项目网址</div>
                <div class="basic-right">
                    <span><?php echo $major[0]['s_xname']?></span>
                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="basic-left">学制</div>
                <div class="basic-right">
                    <span><?php echo $major[0]['s_year']?></span>
                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="basic-left">学费</div>
                <div class="basic-right">
                    <span><?php echo $major[0]['s_cost']?></span>
                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="basic-left">入学时间</div>
                <div class="basic-right">
                    <span><?php echo $major[0]['s_gotime']?></span>
                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="basic-left">截止日期</div>
                <div class="basic-right">
                    <span><?php echo $major[0]['s_stime']?></span>
                </div>
                <div style="clear: both"></div>
            </li>
            <li>
                <div class="basic-left">课程特色</div>
                <div class="basic-right">
                    <span><?php echo $major[0]['s_course']?></span>
                </div>
                <div style="clear: both"></div>
            </li>
        </ul>
    </div>
    <!------------------专业入学要求---------------------->
    <div class="acad_commonT">
        <img src="/cn/schools/images/academyD_xing.png" alt="五角星图标"/>
        <b>专业入学要求</b>
        <span>| Professional admission requirements</span>
    </div>
    <div class="majorRequest">
        <p><?php echo $major[0]['s_require']?></p>
    </div>

    <!------------------专业就业方向---------------------->
    <div class="acad_commonT">
        <img src="/cn/schools/images/academyD_xing.png" alt="五角星图标"/>
        <b>专业就业方向</b>
        <span>| Professional employment direction</span>
    </div>
    <div class="majorRequest">
        <p><?php echo $major[0]['s_direction']?></p>
    </div>

    <!--热门背景提升项目-->
    <div class="prospectus">
        <div class="prospectus-top">
            <img src="/cn/schools/images/academy_hotIcon.gif" alt="gif图标" height="100%"/>
            <span>热门背景提升项目</span>
            <a href="/practices.html" class="morePro" target="_blank">more</a>
            <a href="javascript:void();" class="huan" id="hotpage" pid="1" onclick="hotmajor(1)">换一批</a>
        </div>
        <div class="prospectus-bottom">
            <ul id="hotmajor">
            </ul>
        </div>
    </div>

</div>


<!--联系申友-->

<script type="text/javascript">
    jQuery(".connection").slide({mainCell:".connectBd",trigger:"mouseover"});

    $(function(){
        hotmajor();
    });

    function hotmajor(m){
        var pg = $("#hotpage").attr('pid');
        if(m==1){
            var pgs = parseInt(pg)+1;
        }else{
            var pgs = pg;
        }
        //我的课程
        $.ajax({
            url: '/cn/schools/major',
            data: {
                hot: 'hot',
                pageNumber: pgs,
                pageSize: 7
            },
            type: 'post',
            cache: false,
            dataType: 'json',
            beforeSend:function(){
//                $("#hotmajor").append("<img src='/wap/styles/images/loading.gif'/>");//显示加载动画
            },
            success: function (data) {
                $('#hotmajor').empty();
                if(data.code == 1){
                    var str = "";
                    $.each(data.data,function(k,v) {
                        str +=' <li>'+
                        '<div class="bTop-img"><a href="/schools/majormsg/'+ v.pid+'/'+ v.catId+'.html">'+
                        '<img src="/cn/schools/images/aboutUs_counicon05.png" alt="学校图片"></a>'+
                        '</div>'+
                        '<div class="bBot-info">'+
                        '<ul>'+
                        '<li>('+ v.name+')</li>'+
                        '<li>('+ v.s_gotime+')</li>'+
                        '<li><a href="/schools/majormsg/'+ v.pid+'/'+ v.catId+'.html">查看详情>></a></li>'+
                        '<li><a href="/evaluation.html">免费评估 <img src="/cn/schools/images/academyD_whiteJ.png" alt="图标"></a></li>'+
                        '</ul>'+
                        '</div>'+
                        '</li>';
                        if(v.name){
                            $("#hotmajor").html(str);
                        }
                    });
                }
            },
            complete: function() {
                //请求完成的处理
//                $("#hotmajor").append("<li>已加载完毕</li>");
            },
            error: function () {
                alert("网络通讯失败");
            }
        });
    }
</script>
