<link rel="stylesheet" href="/cn/css/encyclopedia/details.css">
<link rel="stylesheet" href="/cn/css/encyclopedia/reset.css">

<input type="hidden" value="<?php echo $data['id']?>" id="arcticleId"><!--文章id-->

<section class="enDetailsCover">
    <div class="enWrap">
        <div class="enTitle">
            <a href="/">首页 ></a>
            <a href="/encyclopedia/master.html">留学百科 ></a>
            <span>正文</span>
        </div>
        <div class="content">
            <!--左-->
            <div class="content_left">
                <!--标题-->
                <p class="conTitle"><?php echo $data['name']?></p>
                <div class="consult_view clearfix">
                    <div class="fl">
                        <div class="xiaobian_tx">
                            <a href="">
                                <img src="http://www.smartapply.cn/cn/images/editor-user/JL.png" alt="小编头像">
                            </a>
                        </div>
                        <span class="xiaob_name">
                            <a href="javascript:void(0);">申友</a>
                        </span>
                        <span><?php echo $data['createTime']?></span>
                        <span class="view_se">阅读（<?php echo $data['viewCount']?>）</span>
                    </div>
                </div>
                <!--内容-->
                <div class="con_con">
                   <?php echo $data['description']?>
                </div>
                <!--尾部-->
                <div class="con_bot">
<!--                    <div class="bot_l">-->
<!--                        <img src="/cn/images/ency/bq.png" alt="">-->
<!--                        <span>硕士留学 美国留学 留学申请</span>-->
<!--                    </div>-->
                    <div class="bot_r">
                        <div class="bshare-custom icon-medium sharemore">
                            <a title="更多平台" class="bshare-more share"><img src="/cn/images/ency/share.png" alt=""><em>分享</em></a>
                        </div>
                        <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
                        <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
                        <span class="error" onclick="showM()"><img src="/cn/images/ency/error.png" alt=""><em>报错</em></span>
                    </div>
                </div>
            </div>
            <!--右-->
            <div class="commonRight">
                <div class="TopList">

                    <div class="hotXiao">
                        <div class="common-title">
                           <span>|</span> 你可能感兴趣的学校
                        </div>
                        <div class="interestSchool">
                            <ul> <!--循环li-->
                                <?php foreach ($school['data'] as $k => $v) {
                                if (is_numeric($k)) {
                                ?>
                                <li class="school-flex">
                                    <div class="numDiv"><?php echo $k + 1 ?></div>
                                    <div class="interImg">
                                        <a href="/schools/<?php echo $v['id'] ?>.html">
                                            <img src="http://schools.smartapply.cn<?php echo $v['image'] ?>" alt="学校图片">
                                        </a>
                                    </div>
                                    <div class="interSchoolF">
                                        <p class="ellipsis"><a href="/schools/<?php echo $v['id'] ?>.html"><?php echo $v['name'] ?>（<?php echo $v['title'] ?>）</a></p>
                                        <span class="ellipsis">排名：<?php echo $v['s_rank'] ?>   &nbsp;&nbsp;|&nbsp;&nbsp;  查看人数：<?php echo $v['viewCount']+rand(30,80) ?></span>
                                    </div>
                                </li>
                                <?php }
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="xb-c-right">
                        <h4> <span>|</span>最新文章推荐</h4>
                        <ul><!--循环li-->
                            <?php foreach($hot as $v){?>
                            <li>
                                <div class="us-left">
                                    <a href="/encyclopedia/<?php echo $v['id'] ?>.html">
                                        <img src="http://www.thinkwithu.com<?php echo $v['image']?>" alt="图片">
                                    </a>
                                </div>
                                <div class="us-right">
                                    <p class="ellipsis-2">
                                        <a href="/encyclopedia/<?php echo $v['id'] ?>.html"><?php echo $v['name']?></a>
                                    </p>
                                    <span><?php echo $v['createTime']?></span>
                                    <span class="fr">阅读：<?php echo $v['viewCount']?></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <?php }?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--报错弹窗-->
<section class="error_mask">
    <div class="error_kuang">
        <div class="error_close" onclick="closeErrorMask()">
            <img src="http://www.greonline.cn/cn/images/error_close.png" alt="关闭图标">
        </div>
        <div class="error_title bgw">
            纠错文章
        </div>
        <div class="error_sort">
            <ul>
                <li>
                    <label for="sort01">错别字</label>
                    <input type="radio" name="check" id="sort01" data-type="1">
                </li>
                <li>
                    <label for="sort02">排版有误</label>
                    <input type="radio" name="check" id="sort02" data-type="2">
                </li>
                <li>
                    <label for="sort03">描述错误</label>
                    <input type="radio" name="check" id="sort03" data-type="3">
                </li>
                <li>
                    <label for="sort04">理解错误</label>
                    <input type="radio" name="check" id="sort04" data-type="4">
                </li>
                <li>
                    <label for="sort05">抄袭文章</label>
                    <input type="radio" name="check" id="sort05" data-type="5">
                </li>
                <li>
                    <label for="sort06">其它</label>
                    <input type="radio" name="check" id="sort06" data-type="6">
                </li>
            </ul>
        </div>
        <div class="error_title error2">
            错误描述
        </div>
        <div class="error_text">
            <textarea class="descrip"></textarea>
            <input type="button" value="提交" onclick="subError()">
        </div>
    </div>
</section>

<script>
    //开启弹窗
    function showM() {
        $('.error_mask').show();
    }
    //关闭弹窗
    function closeErrorMask() {
        $('.error_mask').hide();
    }
    //提交报错
    function subError() {
        var id = $('#arcticleId').val()//文章id
        var catType = $("input[type='radio']:checked").attr('data-type');//错误类型
        var details = $('.descrip').val();//错误描述
        if($("input[type='radio']:checked").length>0){

        }else {
            alert('请选择错误原因');
            return false
        }
        if(details){
            $.post('/cn/api/report',{
                contentId:id,
                reportType:1,
                description:details,
                cate:catType,
                type:1
            },function (re) {
                if(JSON.parse(re).code==1){
                    alert(JSON.parse(re).message);
                    $('.error_mask').hide();
                }
            })
        }else {
            alert('请填写错误描述')
        }

    }
</script>