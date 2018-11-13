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
                    <input class="input-small" name="userName" size="25" type="text" value="<?php echo isset($_GET['userName'])?$_GET['userName']:''?>"/>
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
                <th>电话</th>
                <th>gpa/gmat/托福</th>
                <th>目前学历</th>
                <th>毕业院校</th>
                <th>目前专业</th>
                <th>院校等级</th>
                <th>申请院校及专业</th>
                <th>感兴趣的服务</th>
                <th>分数</th>
                <th>录取几率</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($data as $v) {
                ?>
                <tr>
                    <td><?php echo $v['id']?></td>
                    <td><?php echo $v['userName']?></td>
                    <td><?php echo $v['phone']?></td>
                    <td><?php echo $v['gpa']."/".$v['gmat']."/".$v['toefl']?></td>
                    <td><?php echo $v['education']?></td>
                    <td><?php echo $v['attendSchool']?></td>
                    <td><?php echo $v['nowMajor']?></td>
                    <td><?php echo \Yii::$app->params['school'][$v['schoolGrade']]?></td>
                    <td><?php echo $v['school']."-".$v['major']?></td>
                    <td>
                        <?php foreach(explode(',',$v['interest']) as $val){
                            echo Yii::$app->params['service'][$val].',';
                        }?>
                    </td>
                    <td><?php echo $v['score']?></td>
                    <td><?php echo $v['percent']?></td>
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