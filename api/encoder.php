<?php
    header("Content-Type: text/html;charset=utf-8");
    error_reporting(0);
    //正则表达式取出字符串中的数字
    //优先进行判空
    if(!intval($_GET['split'])){
        $num = 3;
    }
    else{
        $num = intval($_GET['split']);
    }
    //将url传入参数读入
    $str = $_GET['str'];
    $symbol = str_split($_GET['symbol'],$num);
    if(sizeof($symbol)>16){
        echo '{"error":"Illegal Input of symbol , too long as input!"}';
        return;
    }
    //获取进制转换依据
    $len = sizeof($symbol);
    switch($_GET['type'])
    {
        case 1:
            //进行加密
            $hexarr = str_split(bin2hex($str),8);
            $hexstr = base_convert($hexarr[0], 16, $len);
            for($j = 1;$j<sizeof($hexarr);$j++){
                $hexstr = $hexstr.",".base_convert($hexarr[$j], 16, $len);
            }
            echo '{"return":"100","str":"'.strtr($hexstr,$symbol).'"}';
        break;
        case 2:
            //进行解密
            $symbol = array_flip($symbol);
            $hexarr = explode(",",strtr($str,$symbol));
            for($j=0;$j<sizeof($hexarr);$j++){
                $hexstr = $hexstr.base_convert($hexarr[$j],$len,16);
            }
            echo '{"return":"100","str":"'.pack("H*",$hexstr).'"}';
        break;
        default:
        echo '{"error":"Illegal Input of Type , only accept 1 or 2 as input!"}';
        break;
    }