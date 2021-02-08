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
        document.title = "开放云黑名单API接口";
    };
</script>
<title>开放云黑名单API接口</title>
<link href="css/api_page.css" media="screen" rel="stylesheet" type="text/css">
<div class="web_bg" style="background-image: url(./images/catalog_bg.jpg);"></div>
<div class="cover_bg"></div>
</head>

<body>
    <h1 style="text-align: left;color:rgb(255,255,255);text-shadow: 2px 2px 2px #bdc3c7;">#开放云黑名单API接口</h1>
    <a href="../catalog" class="sub_title"><img src="images/home-icon.png" style="vertical-align: middle;"/> 返回目录 >> </a>
    <hr>
    <div class="intro_meta">
        <h2 class="api">接口地址(黑名单列表获取)</h2>
        <h3 style="color:#51ce28;margin-left:30px;text-shadow:1px 1px 1px #51ce28;">http://api.yorunina.cn/api/blacklist</h3>
        <h2 class="request">请求方式</h2>
        <h3 style="color:#e6d32f;margin-left:30px;text-shadow:1px 1px 1px #e6d32f;">GET</h3>
        <h2 class="example">请求示例</h2>
        <h3 style="color:#ec5c7c;margin-left:30px;text-shadow:1px 1px 1px #ec5c7c;">http://api.yorunina.cn/api/blacklist</h3>
        <h2 class="para">参数说明</h2>
        <table class="para_table" style="margin-left:30px;display: inline-block;background-color: rgba(0, 0, 0, 0);color: #ffffff;border-collapse:collapse;">
        <colgroup><col width="150"><col width="200"><col width="200"><col width="200"><col></colgroup>
        <thead><tr><td>名称</td><td>必填</td><td>类型</td><td>说明</td></tr></thead>
        <tbody><tr><td>无需输入参数</td><td></td><td></td><td></td></tr></tbody>
        </table>
        <h2 class="return">返回数据</h2>
        <pre class="code_block">
[2439030904,283797548,3453217282]
//一个Json数组结构</pre>
    <hr>
    <h2 class="api">接口地址(黑名单查询)</h2>
        <h3 style="color:#51ce28;margin-left:30px;text-shadow:1px 1px 1px #51ce28;">http://api.yorunina.cn/api/blacksearch</h3>
        <h2 class="request">请求方式</h2>
        <h3 style="color:#e6d32f;margin-left:30px;text-shadow:1px 1px 1px #e6d32f;">GET</h3>
        <h2 class="example">请求示例</h2>
        <h3 style="color:#ec5c7c;margin-left:30px;text-shadow:1px 1px 1px #ec5c7c;">http://api.yorunina.cn/api/blacksearch?query=2647529954,3387138942</h3>
        <h2 class="para">参数说明</h2>
        <table class="para_table" style="margin-left:30px;display: inline-block;background-color: rgba(0, 0, 0, 0);color: #ffffff;border-collapse:collapse;">
        <colgroup><col width="150"><col width="200"><col width="200"><col width="200"><col></colgroup>
        <thead><tr><td>名称</td><td>必填</td><td>类型</td><td>说明</td></tr></thead>
        <tbody><tr><td>query</td><td>是</td><td>[QQ],[QQ],[QQ]...</td><td>查询QQ序列的黑名单详情</td></tr></tbody>
        </table>
        <h2 class="return">返回数据</h2>
        <pre class="code_block">
[
    {
        "blackQQ": 3387138942,
        "reason": "盗图自用",
        "submitter": 1012357567,
        "reviewer": 836193631,
        "date": 1602924488
    },
    {
        "blackQQ": 2647529954,
        "reason": "骗人惯犯",
        "submitter": 1012357567,
        "reviewer": 836193631,
        "date": 1602924488
    }
]</pre>
</div>
    <script src="https://api.vvhan.com/api/snow"></script>
</body>

</html>