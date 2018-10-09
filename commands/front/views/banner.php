<nav class="nav-wrap">
    <div class="w10 nav-top" style="overflow: inherit;">
<!--        <a href="/"><img class="logo" src="/cn/Hirsi/images/sy-logo3.png" alt=""></a>-->
        <ul class="inb nav-list clearfix" style="margin-top: 6px">
            <li><a class="<?php echo $controller == 'index' ? 'on on-hover' : '' ?>  nav1-link" href="/">首页</a></li>
            <li><a class="nav1-link <?php echo $controller == 'study' ? 'on on-hover' : '' ?>" href="/study-aboard/assistance.html">留学服务</a></li>
            <li><a class="nav1-link <?php echo $controller == 'gmatheet' ? 'on on-hover' : '' ?>" href="/gmatsheet.html">GMAT课程</a></li>
            <li><a class="nav1-link <?php echo $controller == 'gre' ? 'on on-hover' : '' ?>" href="/gre.html">GRE课程</a></li>
            <li><a class="nav1-link <?php echo $controller == 'satsheet' ? 'on on-hover' : '' ?>" href="/satsheet.html">SAT课程</a></li>
            <li><a class="nav1-link <?php echo $controller == 'toeflsheet' ? 'on on-hover' : '' ?>" href="/toefl/assistance.html">托福课程</a></li>
            <li><a class="nav1-link <?php echo $controller == 'ieltssheet' ? 'on on-hover' : '' ?>" href="/ieltssheet.html">雅思课程</a></li>
            <li><a class="nav1-link <?php echo $controller == 'words' ? 'on on-hover' : '' ?>" href="/words.html">单词学习</a></li>
            <li><a class="nav1-link <?php echo $controller == 'class' ? 'on on-hover' : '' ?>" href="/public-class.html">申友讲堂</a></li>
            <li><a class="nav1-link" href="http://www.gmatonline.cn" target="_blank">申友在线</a></li>
            <li><a class="nav1-link <?php echo  strpos($_SERVER['REQUEST_URI'],'teachers')?'on on-hover':''?>" href="/teachers.html">名师云集</a></li>
            <li><a class="nav1-link <?php echo $controller == 'case' ? 'on on-hover' : '' ?>" href="/case.html">成功案例</a></li>
            <li><a class="nav1-link <?php echo $controller == 'schools' ? 'on on-hover' : '' ?>" href="/schools.html">院校库</a></li>
            <li><a class="nav1-link" href="http://bbs.thinkwithu.com/" target="_blank">论坛</a></li>
            <li><a class="nav1-link <?php echo $controller == 'studyTool' ? 'on on-hover' : '' ?>" href="/studyTool.html">APP工具</a></li>
        </ul>
    </div>
</nav>