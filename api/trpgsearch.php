<?php
    header("Content-Type: text/html;charset=utf-8");
    error_reporting(0);
   class DB_blacklist extends SQLite3
   {
      function __construct()
      {
         $this->open('../database/storage.db');
      }
   }
   //创建一个数据库对象
   $db = new DB_blacklist();
   //输出错误日志
   if(!$db){
      echo $db->lastErrorMsg();
   }
   //拼接查询语句
   $keyword = $_GET['keyword'];
   if (!$keyword){
    echo '{"error":"Cannot input null!"}';
    return;
   }
    $sql =<<<EOF
        SELECT * FROM TRPG WHERE NAME LIKE '%$keyword%';
EOF;
    
    $ret = $db->query($sql);

    if(!$ret){
        echo '{"error":"Getting wrong!"}';
        return;
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
