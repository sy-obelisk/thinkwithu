
<div class="span10" id="datacontent">
    <ul class="breadcrumb">
        <li><a href="/toefl/index/index">申友模块</a> <span class="divider">/</span></li>
        <li class="active">客户留言</li>
    </ul>
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="javascript:;" onclick="javascript:openall();">客户留言(<?php echo count($data)?>)</a>
        </li>
    </ul>
    <legend>用户</legend>
    <form action="/user/discuss/publish" id="checkPush" method="post">
        <table class="table table-hover">
            <thead>
            <tr>
                <th width="80">ID</th>
                <th>姓名</th>
                <th>联系电话</th>
                <th>邮箱</th>
                <th>留言时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($data as $v) {
                ?>
                <tr>
                    <td><?php echo $v['id']?></td>
                    <td><span><?php echo $v['name']?></span></td>
                    <td><span><?php echo $v['phone']?></span></td>
                    <td><span><?php echo $v['email']?></span></td>
                    <td><span><?php echo $v['createTime']?></span></td>
                    <td>
                        <div>
                            <?php
                            foreach($block as $val) {
                                ?>
                                <a class="btn"
                                   href="<?php echo baseUrl?>/thinku/customer-message/<?php echo $val['value']?>?id=<?php echo $v['id']?>"><?php echo $val['name']?></a>
                            <?php
                            }
                            ?>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </form>
    <div class="pagination pagination-right">
    </div>
</div>
