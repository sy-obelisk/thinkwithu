<!--<nav class="nav-wrap">-->
<!--    <div class="w10 nav-top" style="overflow: inherit;">-->
<!--        <ul class="inb nav-list clearfix" style="margin-top: 6px">-->
<!--            <li class="forYou"><img src="/cn/Hirsi/images/classify.png" alt="横"><span>为你推荐</span></li>-->
<!--            <li><a class="--><?php //echo $controller == 'index' ? 'on on-hover' : '' ?><!--  nav1-link" href="/">首页</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'study' ? 'on on-hover' : '' ?><!--" href="/study-aboard/assistance.html">留学服务</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'gmatheet' ? 'on on-hover' : '' ?><!--" href="/gmatsheet.html">GMAT课程</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'gre' ? 'on on-hover' : '' ?><!--" href="/gre.html">GRE课程</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'satsheet' ? 'on on-hover' : '' ?><!--" href="/satsheet.html">SAT课程</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'toeflsheet' ? 'on on-hover' : '' ?><!--" href="/toefl/assistance.html">托福课程</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'ieltssheet' ? 'on on-hover' : '' ?><!--" href="/ieltssheet.html">雅思课程</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'words' ? 'on on-hover' : '' ?><!--" href="/words.html">单词学习</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'class' ? 'on on-hover' : '' ?><!--" href="/public-class.html">申友讲堂</a></li>-->
<!--            <li><a class="nav1-link" href="http://www.gmatonline.cn" target="_blank">申友在线</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo  strpos($_SERVER['REQUEST_URI'],'teachers')?'on on-hover':''?><!--" href="/teachers.html">名师云集</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'case' ? 'on on-hover' : '' ?><!--" href="/case.html">成功案例</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'schools' ? 'on on-hover' : '' ?><!--" href="/schools.html">院校库</a></li>-->
<!--            <li><a class="nav1-link" href="http://bbs.thinkwithu.com/" target="_blank">论坛</a></li>-->
<!--            <li><a class="nav1-link --><?php //echo $controller == 'studyTool' ? 'on on-hover' : '' ?><!--" href="/studyTool.html">APP工具</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->

<nav class="nav-wrap">
    <div class="w10 nav-top" style="overflow: inherit;">
        <ul class="inb nav-list clearfix">
            <div class="forYou">
                <img src="/cn/Hirsi/images/classify.png" alt="横"><span>为你推荐</span>
                <div class="recommend-list">
                    <ul>
                        <li><a href="/studying-USA.html">美国留学 <i class="iconfont left_jt">&#xe600;</i></a></li>
                        <li><a href="/studying-UK.html">英国留学 <i class="iconfont left_jt">&#xe600;</i></a></li>
                        <li><a href="/studying-AUS.html">澳洲留学 <i class="iconfont left_jt">&#xe600;</i></a></li>
<!--                        <li><a href="/studying-Canada.html">加拿大留学 <i class="iconfont left_jt">&#xe600;</i></a></li>-->
                        <li><a href="/studying-HK.html">香港留学 <i class="iconfont left_jt">&#xe600;</i></a></li>
                    </ul>
                </div>
            </div>
            <li><a class="nav1-link <?php echo $controller == 'index' ? 'on on-hover' : '' ?>" href="/">首页</a></li>
            <li>
                <a class="nav1-link <?php echo ($controller == 'satsheet' || $controller == 'ieltssheet' || $controller == 'gmatsheet' || $controller == 'toeflsheet' || $controller == 'gre') ? 'on on-hover' : '' ?>" href="javascript:void(0);">考试提分 <img class="crow-1" src="/cn/Hirsi/images/crow-1.png" alt="下拉三角图标"></a>
                <div class="eaxm-list">
                    <ul>
                        <li><a href="/satsheet.html">SAT</a></li>
                        <li><a href="/toefl/assistance.html">托福</a></li>
                        <li><a href="/ieltssheet.html">雅思</a></li>
                        <li><a href="/gmatsheet.html">GAMT</a></li>
                        <li><a href="/gre.html">GRE</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav1-link <?php echo $controller == 'school-choice' ? 'on on-hover' : '' ?>" href="javascript:void(0);">选校工具 <img class="crow-1" src="/cn/Hirsi/images/crow-1.png" alt="下拉三角图标"></a>
                <div class="eaxm-list eaxm-list-1">
                    <ul>
                        <li><a href="/background-test.html">背景测评</a></li>
                        <li><a href="/choice-test.html">选校测评</a></li>
                        <li><a href="/percentages-test.html">录取测评</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav1-link <?php echo $controller == 'schools' ? 'on on-hover' : '' ?>" href="/schools.html">院校库 <img class="crow-1" src="/cn/Hirsi/images/crow-1.png" alt="下拉三角图标"></a>
                <div class="eaxm-list eaxm-list-1">
                    <ul>
                        <li><a href="">院校查询</a></li>
                        <li><a href="">专业排名</a></li>
                        <li><a href="">大学排名</a></li>
                    </ul>
                </div>
            </li>
            <li><a class="nav1-link" href="/">留学百科 <img class="crow-1" src="/cn/Hirsi/images/crow-1.png" alt="下拉三角图标"></a></li>
            <li><a class="nav1-link" href="/practices.html">实习活动</a></li>
            <li><a class="nav1-link <?php echo $controller == 'class' ? 'on on-hover' : '' ?>" href="/public-class.html">申友讲堂</a></li>
            <li><a class="nav1-link <?php echo $controller == 'case' ? 'on on-hover' : '' ?>" href="/case.html">名校案列</a></li>
            <li><a class="nav1-link <?php echo $controller == 'masters' ? 'on on-hover' : '' ?>" href="/teachers.html">名师团队</a></li>
        </ul>
    </div>
</nav>