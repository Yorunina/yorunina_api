<?php
    header('Cache-Control: no-cache, must-revalidate');
    header('Pragma: no-cache');
    header("Expires: 0");
    header('Content-Type: text/plain; charset=UTF-8');
    error_reporting(0);
    //获取查询列表
    //get请求函数
    function geturl($url){
        $headerArray =array("cookie:0");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output,true);
        return $output;
}
    //获取live直播状态，输入uid
    function livestate($id){
        $url = "http://api.live.bilibili.com/room/v1/Room/getRoomInfoOld?mid=".$id;
        $content = geturl($url);
        $data = $content['data'];
        $output['uid'] = $id;
        if($content['code']!=0){
            $output['error'] = -1;
        }
        elseif($data['liveStatus']){
            $output['error'] = 0;
            $output['live'] = 1;
            $output['data'] = $data;
        }
        else{
            $output['error'] = 0;
            $output['live'] = 0;
            $output['data'] = $data;
        }
        return $output;
    }
    //详细数据，输入roomid
    function detailstate($id){
        $url = "http://api.live.bilibili.com/room/v1/Room/room_init?id=".$id;
        $content = geturl($url);
        $data = $content['data'];
        $output['room_id'] = $id;
        if($content['code']!=0){
            $output['error'] = -1;
        }
        elseif($data['live_status']){
            $output['error'] = 0;
            $output['live'] = 1;
            $output['data'] = $data;
        }
        else{
            $output['error'] = 0;
            $output['live'] = 0;
            $output['data'] = $data;
        }
        return $output;
    }
    $idlist = explode(",",$_GET['idlist']);

    //遍历列表，删除所有非数字元素
    foreach($idlist as $i=>$content){
        if(!is_numeric($content)){
            unset($idlist[$i]);
        }
    }
    if(empty($idlist)){
        echo '{"error":"No valid para."}';
        return;
    }
    elseif(sizeof($idlist)>10){
        echo '{"error":"To many para."}';
        return;
    }

    //模式化输出
    switch ($_GET['live']){
        //只返回正在直播的数据
        case 1:
            $count = 0;
            if($_GET['type']==2){
                foreach($idlist as $i=>$id){
                    $temp=detailstate($id);
                    if ($temp['live']!=1){
                        continue;
                    }
                    else{
                        $output[$count] = $temp;
                        $count++;
                    }
                }
            } else {
                foreach($idlist as $i=>$id){
                    $temp=livestate($id);
                    if ($temp['live']!=1){
                        continue;
                    }
                    else{
                        $output[$count] = $temp;
                        $count++;
                    }
                }
            }
        break;
        //返回所有数据
        default:
            if($_GET['type']==2){
                foreach($idlist as $i=>$id){
                    $output[$i]=detailstate($id);
                }
            } else {
                foreach($idlist as $i=>$id){
                    $output[$i]=livestate($id);
                }
            }

        break;
    }
    echo json_encode($output);
    return;
