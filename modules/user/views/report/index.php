<script type="text/javascript" src="/My97DatePicker/WdatePicker.js"></script>

<div class="span10" id="datacontent">
    <ul class="breadcrumb">
        <li><a href="/user/index/index">用户模块</a> <span class="divider">/</span></li>
        <li class="active">举报管理</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="javascript:;" onclick="javascript:openall();">举报管理</a>
        </li>
    </ul>
    <legend>所有举报</legend>
    <form action="<?php echo baseUrl?>/user/report/index/" method="get" class="form-horizontal">
        <table class="table">
            <tr>
                <td>
                    举报ID：
                </td>
                <td>
                    <input name="id" class="input-small" size="25" type="text" class="number" value="<?php echo isset($_GET['id'])?$_GET['id']:''?>"/>
                </td>
                <td>
                    举报时间：
                </td>
                <td>
                    <input class="input-small Wdate" onclick="WdatePicker()" type="text" size="10"  name="beginTime" value="<?php echo isset($_GET['beginTime'])?$_GET['beginTime']:''?>"/> - <input class="input-small Wdate" onclick="WdatePicker()"  size="10" type="text" name="endTime"  value="<?php echo isset($_GET['endTime'])?$_GET['endTime']:''?>"/>
                </td>
<!--                <td>-->
<!--                    用户Id：-->
<!--                </td>-->
<!--                <td>-->
<!--                    <input class="input-small" name="userId" size="25" type="text" value="--><?php //echo isset($_GET['userId'])?$_GET['userId']:''?><!--"/>-->
<!--                </td>-->
            </tr>
            <tr>
                <td>
                    举报内容类型：
                </td>
                <td>
                    <select name="reportType">
                        <option value="" <?php echo isset($_GET['reportType'])&&$_GET['reportType']==""?"selected":''?>>全部</option>
                        <option value="1" <?php echo isset($_GET['reportType'])&&$_GET['reportType']==1?"selected":''?>>文章</option>
                        <option value="2" <?php echo isset($_GET['reportType'])&&$_GET['reportType']==2?"selected":''?>>评论</option>
                        <option value="3" <?php echo isset($_GET['reportType'])&&$_GET['reportType']==3?"selected":''?>>题目</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">提交</button>
                </td>
            </tr>
        </table>
    </form>
    <form action="/user/report/publish" id="checkPush" method="post">
        <table class="table table-hover">
            <thead>
            <tr>
                <th width="80">ID</th>
                <th>内容Id</th>
                <th>用户Id</th>
                <th>举报分类</th>
                <th>描述</th>
                <th>举报内容类型</th>
                <th>发表时间</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($data as $v) {
                ?>
                <tr>
                    <td><?php echo $v['id']?></td>
                    <td><span><?php echo $v['contentId']?></span></td>
                    <td><span><?php echo $v['userId']?></span></td>
                    <td><span><?php echo Yii::$app->params['report'][$v['reportType']][$v['cate']]?></span></td>
                    <td><span><?php echo $v['description']?></span></td>
                    <?php
                        switch($v['reportType']){
                            case 1:$v['reportType']='文章';break;
                            case 2:$v['reportType']='评论';break;
                            case 3:$v['reportType']='题目/内容';break;
                        }
                    ?>
                    <td><span><?php echo $v['reportType']?></span></td>
                    <td><span><?php echo date("Y-m-d H:i:s",$v['createTime'])?></span></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <div class="control-group">
            <div class="controls">
                <?php
                foreach($block as $v) {
                    ?>
                    <?php if($v['value'] == "publish") { ?>
                        <button class="push btn btn-primary" type="button"><?php echo $v['name'] ?></button>
                    <?php
                    }elseif($v['value'] == "no-publish") {
                        ?>
                        <button class="noPush btn btn-primary" type="button"><?php echo $v['name'] ?></button>
                    <?php
                    }
                        ?>
                <?php
                }
                ?>
            </div>
        </div>
        <input type="hidden" name="url" value="<?php echo Yii::$app->request->getUrl()?>" />
    </form>
    <div class="pagination pagination-right">
        <?php use yii\widgets\LinkPager;?>
        <?php echo LinkPager::widget([
            'pagination' => $page,
        ])?>
    </div>
</div>
<script>
    $(function() {
        $(".checkAll").change(function () {
            var sss = $(this).is(":checked");
            if(sss){
                $(".childCheck").prop("checked", true);
            }else{
                $(".childCheck").prop("checked", false);
            }
        })

        $(".push").on('click',function(){
            $("#checkPush").attr('action','/user/discuss/publish');
            $("#checkPush").submit();
        })
        $(".noPush").on('click',function(){
            $("#checkPush").attr('action','/user/discuss/no-publish');
            $("#checkPush").submit();
        })
    })
</script>