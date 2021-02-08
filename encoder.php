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
        document.title = "指向字符串加密API接口";
    };
</script>
<title>指向字符串加密API接口</title>
<link href="css/api_page.css" media="screen" rel="stylesheet" type="text/css">
<div class="web_bg" style="background-image: url(./images/catalog_bg.jpg);"></div>
<div class="cover_bg"></div>
</head>

<body>
    <h1 style="text-align: left;color:rgb(255,255,255);text-shadow: 2px 2px 2px #bdc3c7;">#指向字符串加密API接口</h1>
    <a href="../catalog" class="sub_title"><img src="images/home-icon.png" style="vertical-align: middle;"/> 返回目录 >> </a>
    <hr>
    <div class="intro_meta">
        <h2 class="api">接口地址</h2>
        <h3 style="color:#51ce28;margin-left:30px;text-shadow:1px 1px 1px #51ce28;">http://api.yorunina.cn/api/encoder</h3>
        <h2 class="request">请求方式</h2>
        <h3 style="color:#e6d32f;margin-left:30px;text-shadow:1px 1px 1px #e6d32f;">GET</h3>
        <h2 class="example">请求示例</h2>
        <h3 style="color:#ec5c7c;margin-left:30px;text-shadow:1px 1px 0px #ec5c7c;">http://api.yorunina.cn/api/encoder?symbol=咕嗝鸽钴&type=1&str=测试</h3>
        <h3 style="color:#ec5c7c;margin-left:30px;text-shadow:1px 1px 0px #ec5c7c;">http://api.yorunina.cn/api/encoder?symbol=咕嗝鸽钴&type=2&str=钴鸽嗝鸽鸽钴嗝嗝鸽咕鸽钴钴鸽鸽咕鸽鸽钴钴鸽嗝嗝嗝</h3>
        <h2 class="para">参数说明</h2>
        <table class="para_table" style="margin-left:30px;display: inline-block;background-color: rgba(0, 0, 0, 0);color: #ffffff;border-collapse:collapse;">
        <colgroup><col width="150"><col width="200"><col width="200"><col width="400"><col></colgroup>
        <thead><tr><td>名称</td><td>必填</td><td>类型</td><td>说明</td></tr></thead>
        <tbody><tr><td>str</td><td>是</td><td>被加密/解密的字符串</td><td>解密和加密的处理值</td></tr></tbody>
        <tbody><tr><td>symbol</td><td>是</td><td>被加密/解密的依据</td><td>请保证输入的依据为非重复字符，且只有中文/只有英文/只有数字</td></tr></tbody>
        <tbody><tr><td>type</td><td>是</td><td>定义加密/解密</td><td>在输入type为1的情况下为加密，反之为解密</td></tr></tbody>
        <tbody><tr><td>split</td><td>否</td><td>定义symbol的分割类型</td><td>中文情况填3，否则填1</td></tr></tbody>
        </table>
        <h2 class="return">返回数据</h2>
        <pre class="code_block">
//加密模式
{"return":"100","str":"钴鸽嗝鸽鸽钴嗝嗝鸽咕鸽钴钴鸽鸽咕鸽鸽钴钴鸽嗝嗝嗝"}
//解密模式
{"return":"100","str":"测试"}</pre>
</div>
    <script src="https://api.vvhan.com/api/snow"></script>
</body>

</html>