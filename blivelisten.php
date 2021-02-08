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
        document.title = "B站直播快捷监测API";
    };
</script>
<title>B站直播快捷监测API</title>
<link href="css/api_page.css" media="screen" rel="stylesheet" type="text/css">
<div class="web_bg" style="background-image: url(./images/catalog_bg.jpg);"></div>
<div class="cover_bg"></div>
</head>

<body>
    <h1 style="text-align: left;color:rgb(255,255,255);text-shadow: 2px 2px 2px #bdc3c7;">#B站直播快捷监测API</h1>
    <a href="../catalog" class="sub_title"><img src="images/home-icon.png" style="vertical-align: middle;"/> 返回目录 >> </a>
    <hr>
    <div class="intro_meta">
        <h2 class="api">接口地址</h2>
        <h3 style="color:#51ce28;margin-left:30px;text-shadow:1px 1px 1px #51ce28;">http://api.yorunina.cn/api/blivelisten</h3>
        <h2 class="request">请求方式</h2>
        <h3 style="color:#e6d32f;margin-left:30px;text-shadow:1px 1px 1px #e6d32f;">GET</h3>
        <h2 class="example">请求示例</h2>
        <h3 style="color:#ec5c7c;margin-left:30px;text-shadow:1px 1px 0px #ec5c7c;">http://localhost/api/blivelisten.php?idlist=12669477,646053753&type=1&live=0</h3>
        <h2 class="para">参数说明</h2>
        <table class="para_table" style="margin-left:30px;display: inline-block;background-color: rgba(0, 0, 0, 0);color: #ffffff;border-collapse:collapse;">
        <colgroup><col width="150"><col width="200"><col width="200"><col width="400"><col></colgroup>
        <thead><tr><td>名称</td><td>必填</td><td>类型</td><td>说明</td></tr></thead>
        <tbody><tr><td>idlist</td><td>是</td><td>字符串</td><td>拼接而成的id串，以,分割，在type为1时为uid，2是为roomid</td></tr></tbody>
        <tbody><tr><td>type</td><td>否</td><td>1或2</td><td>用于定义idlist中到底为uid还是roomid</td></tr></tbody>
        <tbody><tr><td>live</td><td>否</td><td>1或2</td><td>为1时，只取出当前正在直播的数据</td></tr></tbody>
        </table>
        <h2 class="return">返回数据</h2>
        <pre class="code_block">
[
    {
        "uid": "12669477",
        "error": 0,
        "live": 0,
        "data": {
            "roomStatus": 1,
            "roundStatus": 0,
            "liveStatus": 0,
            "url": "https://live.bilibili.com/1276955",
            "title": "用铃心造bot人",
            "cover": "http://i0.hdslb.com/bfs/live/new_room_cover/069c92fe1728dc21a7478360338a83f863aeaf6e.jpg",
            "online": 0,
            "roomid": 1276955,
            "broadcast_type": 0,
            "online_hidden": 0
        }
    },
    {
        "uid": "646053753",
        "error": 0,
        "live": 0,
        "data": {
            "roomStatus": 1,
            "roundStatus": 0,
            "liveStatus": 0,
            "url": "https://live.bilibili.com/22415539",
            "title": "【测试】阿清的闲聊窗口",
            "cover": "http://i0.hdslb.com/bfs/live/new_room_cover/35c7524dcafd562195b84f28187daef3a3b04b63.jpg",
            "online": 0,
            "roomid": 22415539,
            "broadcast_type": 0,
            "online_hidden": 0
        }
    }
]</pre>
</div>
    <script src="https://api.vvhan.com/api/snow"></script>
</body>

</html>