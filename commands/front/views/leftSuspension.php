<div class="w10 info-wrap">
    <div class="text-wrap">
        <h1 class="info-tit">我的留学方案</h1>
        <div class="user-info clearfix">
            <div>
                <p class="info-tit">姓名：</p>
                <input class="info-int" id="username" type="text" placeholder="">
            </div>
            <div>
                <p class="info-tit">联系电话：</p>
                <input class="info-int" id="tel" type="text" placeholder="">
            </div>
           
        </div>
        <p class="info-tit">我想去的国家：</p>
        <select class="info-select" name="country" id="country">
            <option value="美国">美国</option>
            <option value="加拿大">加拿大</option>
            <option value="英国">英国</option>
            <option value="澳洲">澳洲</option>
            <option value="香港">香港</option>
            <option value="其他">其他</option>
        </select>
        <p class="info-tit">我要申请的学位：</p>
        <select class="info-select" name="stage" id="stage">
            <option value="硕士">硕士</option>
            <option value="本科">本科</option>
            <option value="博士">博士</option>
            <option value="高中">高中</option>
        </select>
        <p class="info-tit">我计划出国的时间：</p>
        <select class="info-select" name="data" id="data">
            <option value="2018年入学">2018年入学</option>
            <option value="2017年春季入学">2017年春季入学</option>
            <option value="2017年秋季入学">2017年秋季入学</option>
            <option value="2018年春季入学">2018年春季入学</option>
        </select>
        <div class="codeWrap">
            <p class="info-tit">验证码：</p>
            <input type="text"  name="code" class="info-int" id="telver"/>
            <button class="codeBtn" onclick="leftCode()">获取验证码</button>
        </div>
        <h1 onclick="lxfa()" class="info-btn tm">获取方案</h1>
    </div>

    </div>
    <script type="text/javascript">
        function lxfa() {
            var name = $("#username").val();
            var phone = $("#tel").val();
            var ver= $("#telver").val();
            var country = $("#country").val();
            var stage = $("#stage").val();
            var data = $("#data").val();
            if (name==''||phone==''||ver==''){
                alert("请输入姓名/电话/验证码");
            }else {
                $.post('/cn/api/smart', {
                    name: name,
                    country: country,
                    phone: phone,
                    stage: stage,
                    data: data
                }, function (re) {
                    alert(re.message);
                    $('.text-wrap').find('.info-int').val('');
                }, "json")
            }
        }
        function leftCode(){
			var phone = document.getElementById('tel').value;
			console.log(phone);
            $.post('/cn/api/phone-code',{type:2,phoneNum:phone},function(re){
                alert(re.message);
            },"json")
        }
    </script>