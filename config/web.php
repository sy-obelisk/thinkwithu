<?php

$params = require(__DIR__ . '/params.php');
Yii::$classMap['Method'] = '@app/libs/Method.php';
Yii::$classMap['UploadFile'] = '@app/libs/upload/UploadFile.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'content' => [
                    'class'=>'app\modules\content\ContentModule'
                ],
        'basic' => [
            'class'=>'app\modules\basic\BasicModule'
        ],

        'user' => [
            'class'=>'app\modules\user\UserModule'
        ],

        'cn' => [
            'class'=>'app\modules\cn\CnModule'
        ],

        'wap' => [
            'class'=>'app\modules\wap\WapModule'
        ],

        'thinku' => [
            'class'=>'app\modules\thinku\ThinkuModule'
        ],
    ],
    'components' => [

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=thinkwithu',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'tablePrefix'=>'x2_'
        ],
        'db1' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=liuxu',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'tablePrefix'=>'x2_'
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '3ggkbEhqR-n2ASj19BJSpbdvpmbO4NwK',
        ],
//        'cache' => [
//            'class' => 'yii\caching\MemCache',
//            'servers'=> [['host'=>'127.0.0.1','port'=>'11211']]
//        ],
//        'errorHandler' => [
//            'errorAction' => 'site/error',
//        ],

        'mailer' => [

            'class' => 'yii\swiftmailer\Mailer',

            'useFileTransport' =>false,//这句一定有，false发送邮件，true只是生成邮件在runtime文件夹下，不发邮件

            'transport' => [

                'class' => 'Swift_SmtpTransport',

                'host' => 'smtp.exmail.qq.com',  //每种邮箱的host配置不一样

                'username' => 'news@thinkwithu.com',

                'password' => 'News0114',

                'port' => '465',

                'encryption' => 'ssl',



            ],

            'messageConfig'=>[

                'charset'=>'UTF-8',

                'from'=>['news@thinkwithu.com'=>'申友网']

            ],

        ],

         'urlManager' => [
             'enablePrettyUrl' => true,
             'showScriptName' => false,
             //'suffix' => '.html',
             'rules' => [
                 //首页
                 '' => 'cn/index',
                 //国家留学
                 '<str:(COUNTRY|USA|UK|HK|AUS)>.html' => 'cn/study/index',

                 '<str:(COUNTRY)>/<cstr:(SGP|NE|DEU-FRA|CAN|NZL)>.html' => 'cn/study/index',
                 //本科留学
                 'Undergraduate.html' => 'cn/study/undergraduate',
                 //硕士留学
                 'Postgraduate.html' => 'cn/study/master-business',
                 //博士留学
                 'Doctor.html' => 'cn/study/doctor-study',
                 //培训
                 'training.html' => 'cn/cultivate',

                 'training-<str>.html' => 'cn/cultivate',
                 //审核专用
                 //'' => 'cn/cultivate',
                 //案列
                 'case.html' => 'cn/case',
                 //案列详情
//                 'case/details.html' => 'cn/case/details',
                 'case/<id:\d+>.html' => 'cn/case/details',

                 'case/search.html' => 'cn/case/search',
                 //名师云集
                 'teachers.html' => 'cn/masters',

                 'teachers/<id:\d+>.html' => 'cn/masters',
                 //名师案列库
                 'teachers/<str>/<id:\d+>.html' => 'cn/masters/cases',

                 'cn/masters/cases' => 'site/error',
                 //名师文档
                 'encyclopedia/bachelor.html'=>'cn/encyclopedia/index',//留学百科
                 'encyclopedia/master.html'=>'cn/encyclopedia/master',//硕士留学
                 'encyclopedia/<id:\d+>.html'=>'cn/encyclopedia/details',//留学百科详情
                 'teachers/interviews.html' => 'cn/masters/document',
                 '<course:\w+>-course/detail/<id:\d+>.html' => 'cn/course/class-detail',
                 //留学评估
                 'evaluation.html' => 'cn/study/assess',
                 //留学申请
                 'application/<country>-<degree>.html' => 'cn/study/apply',
                 //美国留学服务申请页面
                 'studying-<country>.html' => 'cn/study/studying-abroad',
                 //留学提升
                 'promotion/<country>-<degree>.html' => 'cn/study/promote',
                 //留学规划
                 'strategies.html' => 'cn/study/project',

                 'strategies/<country>-<degree>.html' => 'cn/study/project',

                 'strategies/<country>.html' => 'cn/study/project',
                 //找专业
                 'major.html' => 'cn/index/major',

                 'major/<id:\d+>.html' => 'cn/index/major',

                 'major/<id:\d+>/<page:\d+>.html' => 'cn/index/major',
                 //公开课
//                 'public-class/<id:\d+>.html' =>'cn/index/public-class',

                 'public-class.html' => 'cn/class/index',

                 'public-class/<id:\d+>.html' => 'cn/class/details',

                 'public-class/back/<id:\d+>.html' => 'cn/class/details-back',

                 'public-class/syabroad.html' => 'cn/class/syabroad',

                 'public-class/list.html' => 'cn/class/abroad',

                 'public-class/list/<page:\d+>.html' => 'cn/class/abroad',

                 'public-class/syabroad/<page:\d+>.html' => 'cn/class/syabroad',

                 'public-class/cultivate.html' => 'cn/class/cultivate',

                 'public-class/cultivate/<page:\d+>.html' => 'cn/class/cultivate',

                 'public-class/user.html' => 'cn/class/manage',

                 'public-class/collect.html' => 'cn/class/collect',
                 //找排名
                 'ranking.html' => 'cn/index/ranking',

                 'ranking/<organization:\d+>/<country:\d+>/<major:\d+>/<year:\d+>.html' => 'cn/index/ranking',
                 //列表页
                 'list/<category>.html' => 'cn/index/list',

                 'list/<page:\d+>/<category>.html' => 'cn/index/list',

                 'cn/index/list' => 'site/error',
                 //签证面试
                 'VisaInterview.html' => 'cn/index/visa-interview',

                 'VisaInterview/<page:\d+>.html' => 'cn/index/visa-interview',
                 //问答
                 'question.html' => 'cn/index/question',

                 'question/<id:\d+>.html' => 'cn/index/question',

                 'question/<page:\d+>/<id:\d+>.html' => 'cn/index/question',
                 //关于申友
                 'about-thinku.html' => 'cn/about',
                 //联系我们
                 'contactus.html' => 'cn/about/contact',
                 //加入我们
                 'joinus.html' => 'cn/about/join',
                 //图片三级
                 'picture-details/<id:\d+>/<category>.html' => 'cn/index/picture-details',
                 //学校三级
                 'school-details/<id:\d+>/<category>.html' => 'cn/index/school-details',
                 //文字三级
                 'word-details/<id:\d+>/<category>.html' => 'cn/index/word-details',
                 //留学产品
                 'study-aboard/assistance.html' => 'cn/study/abroad-products',
                 //本科产品
                 'Undergraduate/assistance.html' => 'cn/study/apply-course',
                 //硕士产品
                 'Postgraduate/assistance.html' => 'cn/study/apply-master',
                 //博士产品
                 'Doctor/assistance.html' => 'cn/study/apply-doctor',
                 //单项
                 'individual.html' => 'cn/cultivate/individual',
                 //MBA-PHD
                 'MBA-PHD.html' => 'cn/cultivate/mba-phd',
                 //单项服务加油站
                 'single.html' => 'cn/study/single',
                 //GMAT详情
                 'gmat/assistance.html' => 'cn/cultivate/details',
                 //基础课程
                 'gmat/assistance/basic-course.html' => 'cn/course/basic-class',
                 //高分
                 'gmat/assistance/advanced-course.html' => 'cn/course/advanced-course',
                 //强化
                 'gmat/assistance/intensive-training-course.html' => 'cn/course/intensive-course',
                 //开课查询
                 'assistance/course-inquiry.html' => 'cn/course/class-query',
                 //申友专题
                 'thinku-news.html' => 'cn/masters/project',
                 //申友教材
                 'materials.html' => 'cn/about/materials',
                 //备考资料
                 'duidance.html' => 'cn/cultivate/test-daf',
                 //留学服务
                 'study-aboard/service/introduction.html' => 'cn/study/service',
                 //去留学了
                 'surprise.html' => 'cn/study/go',
                 'search.html' => 'cn/search/index',

                 'gmat/app.html' => 'cn/app/gmat',
                 // 背景测试
                 'background-test.html' => 'cn/school-choice/background',
                 'percentages-test.html' => 'cn/school-choice/percentages',
                 'choice-test.html' => 'cn/school-choice/choice',
                 'choice-result/<id:\d+>.html' => 'cn/school-choice/school-result',
                 'probability-result/<id:\d+>.html' => 'cn/school-choice/probability-result',

//审核专用
//                    '' => 'index/index',
//                    'about-thinku.html' =>'index/about',
//                 'contactus.html' =>'index/contact',

                 'schools.html' => 'cn/schools/index',//院校库首页

                 'schools/<schoolid:\d+>.html' => 'cn/schools/details',//院校详情 排行

                 'schools-detail/<school:\d+>.html' => 'cn/schools/school-detail',//院校详情 学校查询

                 'schools/major/<id:\d+>.html' => 'cn/schools/majormsg',//学校专业

                 'major-analysis/<catId:\d+>/<page:\d>.html' => 'cn/schools/major-analysis',//专业二级

                 'major-detail/<id:\d+>.html' => 'cn/schools/major-detail',//专业详情

                 'schools-ranking/<classId:\d+>/<yearId:\d+>/<page:\d+>.html' => 'cn/schools/ranking',//学校的排行

                 'counselor-teachers/<country:\d+>/<page:\d+>.html' => 'cn/schools/teacher',//推荐顾问

                 'counselor-detail/<id:\d+>.html' => 'cn/schools/teacher-detail',//推荐顾问

                 'practices.html' => 'cn/practices/index',//游学实习首页

                 'practices/<id:\d+>.html' => 'cn/practices/details',//游学实习详情页面

                 'mentor.html' => 'cn/mentor/index',//海外mentor首页
                 'gmatsheet.html' => 'cn/gmatsheet/index',//GMAT单页
                 'gre.html' => 'cn/gre/index',//GRE单页
                 'words.html' => 'cn/words/index',//单词单页
                 'ieltssheet.html' => 'cn/ieltssheet/index',//雅思单页
                 'satsheet.html' => 'cn/satsheet/index',//SAT单页
                 'toefl/assistance.html' => 'cn/toeflsheet/index',//toefl单页
                 'studyTool.html' => 'cn/app-tool/index',//APP工具单页
                 'problem.html' => 'cn/index/problem',//每日一题



                // 出国留学
                 'study-abroad.html'=>'cn/serve/apply',
                 'study-abroad/category-<category>/aim-<aim>/country-<country>/page-<page:\d+>.html'=>'cn/serve/apply',
                 'study-abroad/category-<category>/aim-<aim>/country-<country>/page-<page:\d+>/buyNum-<buyNum:\d+>.html'=>'cn/serve/apply',
                 'study-abroad/category-<category>/aim-<aim>/country-<country>/page-<page:\d+>/price-<price:\d+>.html'=>'cn/serve/apply',
                 'study-abroad/category-<category>/aim-<aim>/country-<country>/page-<page:\d+>/time-<time:\d+>.html'=>'cn/serve/apply',

             ],
         ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;

