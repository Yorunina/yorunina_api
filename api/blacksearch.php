<?php
    header("Content-Type: text/html;charset=utf-8");
    error_reporting(0);
   class DB_blacklist extends SQLite3
   {
      function __construct()
      {
         $this->open('../database/blacklist.db');
      }
   }
   //创建一个数据库对象
   $db = new DB_blacklist();
   //输出错误日志
   if(!$db){
      echo $db->lastErrorMsg();
   }
   //拼接查询语句
   $list = explode(",",$_GET['query']);
   $querylist = "blackQQ = ".$list[0];
   for($j=1,$len=sizeof($list);$j<$len;$j++){
    $querylist = $querylist." OR blackQQ = ".$list[$j];
   }
    $sql =<<<EOF
        SELECT * FROM blacklist WHERE $querylist;
EOF;
    
    $ret = $db->query($sql);

    if(!$ret){
        echo '{"error":"Query wrong!"}';
    }
    else{
        //json格式化输出
        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            $jsonArray[] = $row;
    }
    echo json_encode($jsonArray,JSON_UNESCAPED_UNICODE);
}
    $db->close();
    return;
?>