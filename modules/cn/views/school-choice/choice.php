<link rel="stylesheet" href="/cn/css/schoolChoose/choice.css">

<section class="school_choice">
    <!--轮播-->
    <div class="enrollSlider">
        <div class="enrollBd">
            <ul>
                <?php foreach($data as $v){?>
                <li>雷哥网会员 <?php echo $v['userName'].' '.date('Y-m-d H:i:s')?>-获得一份录取报告</li>
                <?php }?>
            </ul>
        </div>
        <script>
            jQuery(".enrollSlider").slide({mainCell:".enrollBd ul",autoPlay:true,effect:"leftMarquee",interTime:50,trigger:"click"});
        </script>
    </div>
    <!--录取内容-->
    <div class="choose-auto">
        <h2>选校测评</h2>
        <div class="top-info-c">
            为学生了解自身情况、寻找合适院校，“我目前水平能申到哪些国外学校？”自动生成选校报告+熟悉申请条件
        </div>
        <div class="choose-step">
            <ul>
                <li class="on">
                    <div class="font-box">个人成绩</div>
                    <div class="num-box">1</div>
                </li>
                <li>
                    <div class="font-box">学校背景</div>
                    <div class="num-box">2</div>
                </li>
                <li>
                    <div class="font-box">个人软背景</div>
                    <div class="num-box">3</div>
                </li>
                <li>
                    <div class="font-box">申请方向背景</div>
                    <div class="num-box">4</div>
                </li>
            </ul>
        </div>
        <form action="/cn/api/school-storage" method="post" id="chooseSchool">
            <!--第一步-->
            <div class="step-1">
                <ul>
                    <li>
                        <label for="gpa"><b>*</b><span>GPA</span></label>
                        <input type="text" id="gpa" name="result_gpa" value="">
                        <span class="tishi-yu" style="right: -75px;">例：3.0或者85</span>
                    </li>
                    <li>
                        <label for="gmat"><b style="color: white">*</b><span>GMAT/GRE</span></label>
                        <input type="text" id="gmat" name="result_gmat" value="">
                        <span class="tishi-yu">若暂未出分，可填目标分数</span>
                    </li>
                    <li>
                        <label for="toefl"><b>*</b><span>TOEFL/IELTS</span></label>
                        <input type="text" id="toefl" name="result_toefl" value="">
                        <span class="tishi-yu">若暂未出分，可填目标分数</span>
                    </li>
                </ul>
                <div class="bot-btn-group">
                    <input type="button" value="下一步" onclick="nextStep1()">
                </div>
            </div>
            <!--第二步-->
            <div class="step-2 common-step">
                <ul>
                    <li>
                        <span><b style="color: white">*</b>目&nbsp;&nbsp;&nbsp;前&nbsp;&nbsp;学&nbsp;&nbsp;&nbsp;历</span>
                        <ul>
                            <li>
                                <input type="radio" name="education" id="boshi" value="博士" checked>
                                <label for="boshi">博士</label>
                            </li>
                            <li>
                                <input type="radio" name="education" value="硕士" id="shuoshi">
                                <label for="shuoshi">硕士</label>
                            </li>
                            <li>
                                <input type="radio" name="education" value="本科" id="benke">
                                <label for="benke">本科</label>
                            </li>
                            <li>
                                <input type="radio" name="education" value="专科" id="zhuanke">
                                <label for="zhuanke">专科</label>
                            </li>
                            <li>
                                <input type="radio" name="education" value="高中" id="gaozhong">
                                <label for="gaozhong">高中</label>
                            </li>
                            <li>
                                <input type="radio" name="education" value="初中" id="chuzhong">
                                <label for="chuzhong">初中</label>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span><b>*</b><span>就读/毕业学校</span></span>
                        <select id="biye" name="school">
                            <option value=""></option>
                            <option value="1">清北复交浙大</option>
                            <option value="2">985学校</option>
                            <option value="3">211学校</option>
                            <option value="4">非211本科</option>
                            <option value="5">专科</option>
                        </select>
                    </li>
                    <li>
                        <span style="letter-spacing: 1px"><b>*</b><span>学校具体名称</span></span>
                        <input type="text" id="schoolName" name="schoolName" class="com-input">
                    </li>
                    <li>
                        <span><b>*</b>专&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业</span>
                        <input type="text" class="com-input" id="major-input" onclick="showMajorC(this,2)" name="major01">
                        <input type="hidden" name="major_top" class="fangId">
                        <input type="hidden" name="school_major" class="fangPid">
                        <input type="hidden" name="nowMajor" class="fangName">
                    </li>
                </ul>
                <div class="bot-btn-group">
                    <input type="button" value="上一步" class="mr" onclick="prevStep1()">
                    <input type="button" value="下一步" onclick="nextStep2()">
                </div>
            </div>
            <!--第三步-->
            <div class="step-3">
                <div class="common-box">
                    <h4><b>*</b>实习/工作经验</h4>
                    <ul class="sortUl">
                        <li>
                            <input type="radio" name="work[0][]" value="1" id="dashi">
                            <label for="dashi">国内四大</label>
                        </li>
                        <li>
                            <input type="radio" name="work[0][]" value="2" id="fiveH">
                            <label for="fiveH">500强</label>
                        </li>
                        <li>
                            <input type="radio" name="work[0][]" value="3" id="waiqi">
                            <label for="waiqi">外企</label>
                        </li>
                        <li>
                            <input type="radio" name="work[0][]" value="4" id="guoqi">
                            <label for="guoqi">国企</label>
                        </li>
                        <li>
                            <input type="radio" name="work[0][]" value="5" id="siqi">
                            <label for="siqi">私企</label>
                        </li>
                    </ul>
                    <ul class="yearTime">
                        <li>
                            <input type="radio" name="year[0]" value="1" id="onemonth">
                            <label for="onemonth">1个月及以内</label>
                        </li>
                        <li>
                            <input type="radio" name="year[0]" value="2" id="twomonth">
                            <label for="twomonth">2-3个月</label>
                        </li>
                        <li>
                            <input type="radio" name="year[0]" value="3" id="threemonth">
                            <label for="threemonth">3个月-1年</label>
                        </li>
                        <li>
                            <input type="radio" name="year[0]" value="4" id="oneyear">
                            <label for="oneyear">1年-3年</label>
                        </li>
                        <li>
                            <input type="radio" name="year[0]" value="5" id="threeyear">
                            <label for="threeyear"> 3-5年</label>
                        </li>
                        <li>
                            <input type="radio" name="year[0]" value="6" id="fiveyear">
                            <label for="fiveyear"> 5年以上</label>
                        </li>
                    </ul>
                    <textarea name="live[0]" placeholder="请如实填写跟申请方向相关的工作经验，若没有完整工作经验，请填写相关实习经验,每项描述不低于30字，请尽量填写大于30天的相关经历，若没有可不填；"></textarea>
                    <div class="jixu-add" id="add_1">
                        <img src="/cn/images/school/choose-add.png" alt="添加图标">
                        <span>继续添加</span>
                    </div>
                </div>
                <div class="common-box">
                    <h4>项目经验</h4>
                    <textarea name="project[]" placeholder="请如实填写跟申请方向相关的项目经验，如相关比赛经历、商业项目、实验项目、论文发表等。每项描述文字不低于30字。若没有可不填。"></textarea>
                    <div class="jixu-add" id="add_2">
                        <img src="/cn/images/school/choose-add.png" alt="添加图标">
                        <span>继续添加</span>
                    </div>
                </div>
                <div class="common-box">
                    <h4>海外留学</h4>
                    <textarea name="studyTour[]" placeholder="请如实填写海外游学经历，如交换项目、海外实践课程等。若没有可不填。"></textarea>
                    <div class="jixu-add" id="add_3">
                        <img src="/cn/images/school/choose-add.png" alt="添加图标">
                        <span>继续添加</span>
                    </div>
                </div>
                <div class="common-box">
                    <h4>公益活动</h4>
                    <textarea name="active[]" placeholder="请如实填写你所参与的公益项目，若没有可不填。"></textarea>
                    <div class="jixu-add" id="add_4">
                        <img src="/cn/images/school/choose-add.png" alt="添加图标">
                        <span>继续添加</span>
                    </div>
                </div>
                <div class="common-box">
                    <h4>获奖经历</h4>
                    <textarea name="price[]" placeholder="请如实填写你所获奖经历，若没有可不填。"></textarea>
                    <div class="jixu-add" id="add_5">
                        <img src="/cn/images/school/choose-add.png" alt="添加图标">
                        <span>继续添加</span>
                    </div>
                </div>
                <div class="bot-btn-group">
                    <input type="button" value="上一步" class="mr" onclick="prevStep2()">
                    <input type="button" value="下一步" onclick="nextStep3()">
                </div>
            </div>
            <!--第四步-->
            <div class="step-4 common-step">
                <ul>
                    <li>
                        <span><b>*</b>留&nbsp;学&nbsp;目&nbsp;的&nbsp;地</span>
                        <ul id="mudidi">
                            <li>
                                <input type="radio" name="destination" id="meiguo0" value="155" checked>
                                <label for="meiguo0">美国</label>
                            </li>
                            <li>
                                <input type="radio" name="destination" id="meiguo1" value="156">
                                <label for="meiguo1">英国</label>
                            </li>
                            <li>
                                <input type="radio" name="destination" id="meiguo2" value="157">
                                <label for="meiguo2">加拿大</label>
                            </li>
                            <li>
                                <input type="radio" name="destination" id="meiguo3" value="158">
                                <label for="meiguo3">澳洲</label>
                            </li>
                            <li>
                                <input type="radio" name="destination" id="meiguo4" value="159">
                                <label for="meiguo4">新加坡</label>
                            </li>
                            <li>
                                <input type="radio" name="destination" id="meiguo5" value="160">
                                <label for="meiguo5">香港</label>
                            </li>
                            <li>
                                <input type="radio" name="destination" id="meiguo6" value="520">
                                <label for="meiguo6">欧洲</label>
                            </li>
                            <li>
                                <input type="radio" name="destination" id="meiguo7" value="521">
                                <label for="meiguo7">亚洲</label>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span><b>*</b>专&nbsp;&nbsp;业</span>
                        <input type="text" class="com-input" id="step4-major" onclick="showMajorC(this,4)" name="major02">
                        <input type="hidden" name="id2" class="fangId">
                        <input type="hidden" name="major" class="fangPid">
                        <input type="hidden" name="major_left" class="fangName">
                    </li>
                    <li>
                        <span><b>*</b>感兴趣的留学服务</span>
                        <ul id="xinqu">
                            <li>
                                <input type="checkbox" name="interest[]" id="diy" value="半DIY">
                                <label for="diy">半DIY</label>
                            </li>
                            <li>
                                <input type="checkbox" name="interest[]" id="jinxiu" value="文书写作与精修">
                                <label for="jinxiu">文书写作与精修</label>
                            </li>
                            <li>
                                <input type="checkbox" name="interest[]" id="xuejie" value="学长学姐选校指导">
                                <label for="xuejie">学长学姐选校指导</label>
                            </li>
                            <li>
                                <input type="checkbox" name="interest[]" id="quantao" value="全套留学服务">
                                <label for="quantao">全套留学服务</label>
                            </li>
                            <li>
                                <input type="checkbox" name="interest[]" id="zhongjie" value="已找中介">
                                <label for="zhongjie">已找中介</label>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="warn-info">
                    <div class="warn-left">
                        <img src="/cn/images/school/cp-worn.png" alt="图标">
                    </div>
                    <div class="warn-right">
                        <p>
                            此报告未考虑文书质量与面试质量用户须填写实际情况，保证结果的准确性，此报告匹配标准以近5年留学录取成果大数据作为技术支撑，并不能百分百代表实际录取结果，仅供参考
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="bot-btn-group">
                    <input type="button" value="上一步" class="mr" onclick="prevStep3()">
                    <input type="button" value="提交" onclick="chooseSub()">
                </div>
            </div>
        </form>
    </div>
<!--    专业显示-->
    <div class="t-major-mask">
        <div class="t-m-in">
            <div class="t-m-close" onclick="closeMajorC()">×</div>
            <div class="first_page">
                <h4>学科类别</h4>
                <ul class="first-ul">
                    <li>
                        <span>商科管理与经济</span>
                        <div class="second_page">
                            <ul>
                                <li data-id="196" data-pid="172" data-name="金融">金融</li>
                                <li data-id="197" data-pid="172" data-name="管理">管理</li>
                                <li data-id="198" data-pid="172" data-name="市场营销">市场营销</li>
                                <li data-id="199" data-pid="172" data-name="工商管理MBA">工商管理MBA</li>
                                <li data-id="200" data-pid="172" data-name="人力资源管理">人力资源管理</li>
                                <li data-id="201" data-pid="172" data-name="会计">会计</li>
                                <li data-id="202" data-pid="172" data-name="管理信息系统">管理信息系统</li>
                                <li data-id="203" data-pid="172" data-name="国际商务/贸易">国际商务/贸易</li>
                                <li data-id="204" data-pid="172" data-name="酒店/旅游管理">酒店/旅游管理</li>
                                <li data-id="205" data-pid="172" data-name="奢侈品管理">奢侈品管理</li>
                                <li data-id="206" data-pid="172" data-name="供应链管理">供应链管理</li>
                                <li data-id="207" data-pid="172" data-name="创业学">创业学</li>
                                <li data-id="208" data-pid="172" data-name="房地产">房地产</li>
                                <li data-id="209" data-pid="172" data-name="商业分析（BA）">商业分析（BA）</li>
                                <li data-id="210" data-pid="172" data-name="会展管理">会展管理</li>
                                <li data-id="211" data-pid="172" data-name="技术项目管理">技术项目管理</li>
                                <li data-id="212" data-pid="172" data-name="体育管理">体育管理</li>
                                <li data-id="213" data-pid="172" data-name="文化管理">文化管理</li>
                                <li data-id="214" data-pid="172" data-name="电子商务">电子商务</li>
                                <li data-id="215" data-pid="172" data-name="知识管理">知识管理</li>
                                <li data-id="216" data-pid="172" data-name="商务/商业">商务/商业</li>
                                <li data-id="217" data-pid="172" data-name="政治经济学">政治经济学</li>
                                <li data-id="218" data-pid="172" data-name="发展经济学">发展经济学</li>
                                <li data-id="219" data-pid="172" data-name="计量经济学">计量经济学</li>
                                <li data-id="220" data-pid="172" data-name="卫生经济学">卫生经济学</li>
                                <li data-id="221" data-pid="172" data-name="国际经济学">国际经济学</li>
                                <li data-id="222" data-pid="172" data-name="应用经济学">应用经济学</li>
                                <li data-id="223" data-pid="172" data-name="土地经济学">土地经济学</li>
                                <li data-id="224" data-pid="172" data-name="环境经济学">环境经济学</li>
                                <li data-id="225" data-pid="172" data-name="经济政策">经济政策</li>
                                <li data-id="226" data-pid="172" data-name="经济学">经济学</li>
                                <li data-id="268" data-pid="172" data-name="金工/数学">金工/数学</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>工科</span>
                        <div class="second_page">
                            <ul>
                                <li data-id="227" data-pid="174" data-name="工程学/工程管理">工程学/工程管理</li>
                                <li data-id="228" data-pid="174" data-name="EE（电子电气通信工程类）">EE（电子电气通信工程类）</li>
                                <li data-id="230" data-pid="174" data-name="机械工程">机械工程</li>
                                <li data-id="231" data-pid="174" data-name="土木与环境工程">土木与环境工程</li>
                                <li data-id="232" data-pid="174" data-name="材料科学与工程">材料科学与工程</li>
                                <li data-id="233" data-pid="174" data-name="生物制药工程">生物制药工程</li>
                                <li data-id="234" data-pid="174" data-name="能源与动力工程">能源与动力工程</li>
                                <li data-id="236" data-pid="174" data-name="纳米工程">纳米工程</li>
                                <li data-id="237" data-pid="174" data-name="航空航天工程">航空航天工程</li>
                                <li data-id="238" data-pid="174" data-name="交通运输工程">交通运输工程</li>
                                <li data-id="239" data-pid="174" data-name="石油工程">石油工程</li>
                                <li data-id="240" data-pid="174" data-name="工业工程">工业工程</li>
                                <li data-id="241" data-pid="174" data-name="环境工程">环境工程</li>
                                <li data-id="242" data-pid="174" data-name="化学工程">化学工程</li>
                                <li data-id="243" data-pid="174" data-name="CS计算机科学与系统工程">CS计算机科学与系统工程</li>
                                <li data-id="245" data-pid="174" data-name="生物工程">生物工程</li>
                                <li data-id="524" data-pid="174" data-name="城市规划与设计">城市规划与设计</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>理学</span>
                        <div class="second_page">
                            <ul>
                                <li data-id="184" data-pid="176" data-name="生物">生物</li>
                                <li data-id="265" data-pid="176" data-name="数学">数学</li>
                                <li data-id="266" data-pid="176" data-name="统计学">统计学</li>
                                <li data-id="267" data-pid="176" data-name="精算">精算</li>
                                <li data-id="269" data-pid="176" data-name="应用数学">应用数学</li>
                                <li data-id="380" data-pid="176" data-name="海洋科学">海洋科学</li>
                                <li data-id="381" data-pid="176" data-name="地理">地理</li>
                                <li data-id="382" data-pid="176" data-name="大气科学">大气科学</li>
                                <li data-id="383" data-pid="176" data-name="地理信息系统">地理信息系统</li>
                                <li data-id="384" data-pid="176" data-name="地质学">地质学</li>
                                <li data-id="399" data-pid="176" data-name="物理">物理</li>
                                <li data-id="405" data-pid="176" data-name="化学">化学</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>艺术与设计</span>
                        <div class="second_page">
                            <ul>
                                <li data-id="175" data-pid="178" data-name="教育学">教育学</li>
                                <li data-id="177" data-pid="178" data-name="传播学">传播学</li>
                                <li data-id="180" data-pid="178" data-name="公共事务">公共事务</li>
                                <li data-id="181" data-pid="178" data-name="语言与文学">语言与文学</li>
                                <li data-id="182" data-pid="178" data-name="历史与文化">历史与文化</li>
                                <li data-id="183" data-pid="178" data-name="社会与哲学">社会与哲学</li>
                                <li data-id="185" data-pid="178" data-name="心理学">心理学</li>
                                <li data-id="189" data-pid="178" data-name="政治与外交">政治与外交</li>
                                <li data-id="190" data-pid="178" data-name="公共卫生">公共卫生</li>
                                <li data-id="280" data-pid="178" data-name="影视">影视</li>
                                <li data-id="281" data-pid="178" data-name="音乐">音乐</li>
                                <li data-id="282" data-pid="178" data-name="建筑学">建筑学</li>
                                <li data-id="284" data-pid="178" data-name="编剧">编剧</li>
                                <li data-id="286" data-pid="178" data-name="摄影">摄影</li>
                                <li data-id="287" data-pid="178" data-name="平面设计">平面设计</li>
                                <li data-id="288" data-pid="178" data-name="绘画">绘画</li>
                                <li data-id="289" data-pid="178" data-name="服装设计">服装设计</li>
                                <li data-id="290" data-pid="178" data-name="室内设计">室内设计</li>
                                <li data-id="291" data-pid="178" data-name="艺术管理">艺术管理</li>
                                <li data-id="293" data-pid="178" data-name="表演">表演</li>
                                <li data-id="296" data-pid="178" data-name="工业设计">工业设计</li>
                                <li data-id="300" data-pid="178" data-name="珠宝设计">珠宝设计</li>
                                <li data-id="301" data-pid="178" data-name="娱乐管理">娱乐管理</li>
                                <li data-id="525" data-pid="178" data-name="传媒">传媒</li>
                                <li data-id="526" data-pid="178" data-name="艺术设计">艺术设计</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>医学</span>
                        <div class="second_page">
                            <ul>
                                <li data-id="367" data-pid="187" data-name="临床医学">临床医学</li>
                                <li data-id="368" data-pid="187" data-name="康复医学">康复医学</li>
                                <li data-id="369" data-pid="187" data-name="护理学">护理学</li>
                                <li data-id="370" data-pid="187" data-name="牙医">牙医</li>
                                <li data-id="371" data-pid="187" data-name="生物医学">生物医学</li>
                                <li data-id="372" data-pid="187" data-name="遗传学">遗传学</li>
                                <li data-id="373" data-pid="187" data-name="生理学">生理学</li>
                                <li data-id="374" data-pid="187" data-name="免疫学">免疫学</li>
                                <li data-id="375" data-pid="187" data-name="兽医">兽医</li>
                                <li data-id="376" data-pid="187" data-name="病理学">病理学</li>
                                <li data-id="377" data-pid="187" data-name="中医药">中医药</li>
                                <li data-id="378" data-pid="187" data-name="医院管理">医院管理</li>
                                <li data-id="379" data-pid="187" data-name="药理学">药理学</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span>农业与林业</span>
                        <div class="second_page">
                            <ul>
                                <li data-id="412" data-pid="195" data-name="农业">农业</li>
                                <li data-id="413" data-pid="195" data-name="林业">林业</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="t-m-btn">
                    <input type="button" value="确定" onclick="sureMajor()">
                </div>
            </div>

        </div>
    </div>

</section>

<script type="text/javascript" src="/cn/js/school/choice.js"></script>