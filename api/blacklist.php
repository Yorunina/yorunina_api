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
   //设定查询语句
   $sql =<<<EOF
      SELECT blackQQ from blacklist;
EOF;
 
   $ret = $db->query($sql);
   //json格式化输出
   while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {

      $jsonArray[] = $row['blackQQ'];
  }
   echo json_encode($jsonArray,JSON_UNESCAPED_UNICODE);
   $db->close();
?>