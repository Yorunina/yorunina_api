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
   //鉴权
   if($_GET['token']!='eczhendetaibangle'){
      echo "Error token!";
      return;
   }
   //创建一个数据库对象
   $db = new DB_blacklist();
   //输出错误日志
   if(!$db){
      echo $db->lastErrorMsg();
      return;
   }
   switch($_GET['type']){
   //设定查询语句
   case "insert":
      $blackQQ = $_GET['blackQQ'];
      $reason = $_GET['reason'];
      $submitter = $_GET['submitter'];
      $reviewer = $_GET['reviewer'];
      $date = time();
      $sql =<<<EOF
         INSERT INTO blacklist (blackQQ,reason,submitter,reviewer,date)
         VALUES ($blackQQ, '$reason', $submitter, $reviewer,$date );
EOF;
      $ret = $db->exec($sql);
      echo "Successfully insert record where QQ=$blackQQ reason=$reason";
   break;
   case "delete":
      $blackQQ = $_GET['blackQQ'];
      $sql =<<<EOF
      DELETE from blacklist where blackQQ=$blackQQ;
EOF;
      $ret = $db->exec($sql);
      echo "Successfully delete record where QQ=$blackQQ";
   break;
   default:
   echo 'Illegal Input of Type';
   return;
   break;
}
//数据库执行

   if(!$ret){
      echo $db->lastErrorMsg();
   }
   $db->close();
?>