<script type="text/javascript" src="/My97DatePicker/WdatePicker.js"></script>

<div class="span10" id="datacontent">
    <ul class="breadcrumb">
        <li><a href="/user/index/index">用户模块</a> <span class="divider">/</span></li>
        <li class="active">用户管理</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="javascript:;" onclick="javascript:openall();">用户管理</a>
        </li>
    </ul>
    <legend>用户</legend>
    <form action="<?php echo baseUrl?>/user/probability-test/index/" method="get" class="form-horizontal">
        <table class="table">
            <tr>
                <td>
                    用户名：
                </td>
                <td>
                    <input name="userName" class="input-small" size="25" type="text" class="number" value="<?php echo isset($_GET['userId'])?$_GET['userId']:''?>"/>
                </td>
                <td>
                    用户电话：
                </td>
                <td>
                    <input name="phone" class="input-small" size="25" type="text" class="number" value="<?php echo isset($_GET['phone'])?$_GET['phone']:''?>"/>
                </td>
                <td>
                    用户名：
                </td>
                <td>
                    <input class="input-small" name="uName" size="25" type="text" value="<?php echo isset($_GET['uName'])?$_GET['uName']:''?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    国家：
                </td>
                <td>
                    <input class="input-small" name="country" size="25" type="text" value="<?php echo isset($_GET['country'])?$_GET['country']:''?>"/>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">提交</button>
                </td>
            </tr>
        </table>
    </form>
    <form action="/user/discuss/publish" id="checkPush" method="post">
        <table class="table table-hover">
            <thead>
            <tr>
                <th width="80">ID</th>
                <th>用户名</th>
                <th>gpa/gmat/托福</th>
                <th>目前学历</th>
                <th>毕业院校</th>
                <th>目前专业</th>
                <th>院校等级</th>
                <th>申请专业</th>
                <th>分数</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($data as $v) {
                ?>
                <tr>
                    <td><?php echo $v['id']?></td>
                    <td><?php echo $v['userName']?></td>
                    <td><?php echo $v['gpa']."/".$v['gmat']."/".$v['toefl']?></td>
                    <td><?php echo $v['education']?></td>
                    <td><?php echo $v['attendSchool']?></td>
                    <td><?php echo $v['nowMajor']?></td>
                    <td><?php echo \Yii::$app->params['school'][$v['schoolGrade']]?></td>
                    <td><?php echo $v['major']?></td>
                    <td><?php echo $v['score']?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

    </form>
    <div class="pagination pagination-right">
        <?php use yii\widgets\LinkPager;?>
        <?php echo LinkPager::widget([
            'pagination' => $page,
        ])?>
    </div>
</div>
<script type="text/javascript">
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
            $("input[name='status']").val(1);
            $("#checkPush").submit();
        })
        $(".noPush").on('click',function(){
            $("input[name='status']").val(0);
            $("#checkPush").submit();
        })
    })
</script>