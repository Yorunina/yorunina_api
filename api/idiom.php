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
   $ask = $_GET['ask'];
   //查询成语foot
    $sql_foot = <<<EOF
    SELECT FOOT FROM IDIOM WHERE NAME='$ask';
EOF;

    $search_foot_ret = $db->query($sql_foot);
    while ($search_foot_row = $search_foot_ret->fetchArray(SQLITE3_ASSOC)) {
        $search_head= $search_foot_row['FOOT'];
}
    $output['msg'] = 100;
    if(!$search_head){
        $output['msg'] = 101;
        $output['ans'] = "Can't find such idiom from database.";
}
    else{
        $sql_head = <<<EOF
        SELECT * FROM IDIOM WHERE HEAD LIKE '$search_head' ORDER BY RANDOM() LIMIT 1;"
EOF;
        $search_head_ret = $db->query($sql_head);
        while ($search_head_row = $search_head_ret->fetchArray(SQLITE3_ASSOC)) {
            $output['ans'] = $search_head_row['NAME'];
            $output['spell']= $search_head_row['SPELL'];
            $output['content']= $search_head_row['CONTENT'];
            $output['derivation']= $search_head_row['DERIVATION'];
    }
}
    if(!$output['ans']){
        $output['msg'] = 101;
        $output['ans']="Can't find answer.";
}
    echo json_encode($output,JSON_UNESCAPED_UNICODE);
    $db->close();