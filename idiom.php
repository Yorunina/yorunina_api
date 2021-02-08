<!doctype html>
<html>
<head>
<link rel="icon" type="image/png" sizes="144x144" href="logo-144.png"/>
<link rel="apple-touch-icon" type="image/png" sizes="144x144" href="logo-144.png"/>
<meta charset="utf-8">
<meta name="viewport" content="width=drive-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript">
    window.onblur = function() {
        document.title = "o(´^｀)o生气气";
    };
    window.onfocus = function() {
        document.title = "成语接龙API接口";
    };
</script>
<title>成语接龙API接口</title>
<link href="css/api_page.css" media="screen" rel="stylesheet" type="text/css">
<div class="web_bg" style="background-image: url(./images/catalog_bg.jpg);"></div>
<div class="cover_bg"></div>
</head>

<body>
    <h1 style="text-align: left;color:rgb(255,255,255);text-shadow: 2px 2px 2px #bdc3c7;">#成语接龙API接口</h1>
    <a href="../catalog" class="sub_title"><img src="images/home-icon.png" style="vertical-align: middle;"/> 返回目录 >> </a>
    <hr>
    <div class="intro_meta">
        <h2 class="api">接口地址</h2>
        <h3 style="color:#51ce28;margin-left:30px;text-shadow:1px 1px 1px #51ce28;">http://api.yorunina.cn/api/idiom</h3>
        <h2 class="request">请求方式</h2>
        <h3 style="color:#e6d32f;margin-left:30px;text-shadow:1px 1px 1px #e6d32f;">GET</h3>
        <h2 class="example">请求示例</h2>
        <h3 style="color:#ec5c7c;margin-left:30px;text-shadow:1px 1px 0px #ec5c7c;">http://api.yorunina.cn/api/idiom?ask=远见卓识</h3>
        <h2 class="para">参数说明</h2>
        <table class="para_table" style="margin-left:30px;display: inline-block;background-color: rgba(0, 0, 0, 0);color: #ffffff;border-collapse:collapse;">
        <colgroup><col width="150"><col width="200"><col width="200"><col width="400"><col></colgroup>
        <thead><tr><td>名称</td><td>必填</td><td>类型</td><td>说明</td></tr></thead>
        <tbody><tr><td>ask</td><td>是</td><td>被查询的成语</td><td>不能为不合法的成语(比如一个顶俩)</td></tr></tbody>
        </table>
        <h2 class="return">返回数据</h2>
        <pre class="code_block">
{
    "msg": 100,
    "ans": "十病九痛",
    "spell": "shí bìng jiǔ tòng",
    "content": "形容浑身病痛。",
    "derivation": "清·曹雪芹《红楼梦》第一百二回：“如今我的身子是十病九痛的，你二嫂子也是三日好两日不好。”"
}</pre>
</div>
    <script src="https://api.vvhan.com/api/snow"></script>
</body>

</html>