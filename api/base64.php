<?php
    header("Content-Type: text/html;charset=utf-8");
    error_reporting(0);
    switch($_GET['iconv']){
        case u8:
            $input_str = iconv('GBK', 'UTF-8', $_GET['str']);
            break;
        default:
            $input_str = $_GET['str'];
            break;
    }
    //获取进制转换依据
    switch($_GET['type'])
    {
        case encode:
            //进行加密
            echo base64_encode($input_str);
        break;
        case decode:
            //进行解密
            echo base64_decode($input_str);
        break;
        default:
        echo '{"error":"Illegal Input of Type , only accept encode or decode as input!"}';
        break;
    }