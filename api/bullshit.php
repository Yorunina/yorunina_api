<?php
    header('Cache-Control: no-cache, must-revalidate');
    header('Pragma: no-cache');
    header("Expires: 0");
    error_reporting(0);
    //从已有的数组中随机选取一个回复
    function random_select($arr) {
        return $arr[array_rand($arr)];
    }
    //替换标点符号
    function replace_punc($str) {
        $str = str_replace(['， ', ', ', ','], '，', $str);
        $str = str_replace(['。 ', '. ', '.'], '。', $str);
        $str = str_replace(['： ', ': ', ':'], '：', $str);
        $str = str_replace(['？ ', '? ', '?'], '？', $str);
        return $str;
    }
    //对数据中的保留词进行替换(类别1)
    function sen($str) {
        global $front_sen, $after_sen;
        $str = str_replace('a', random_select($front_sen), $str);
        $str = str_replace('b', random_select($after_sen), $str);
        return $str;
    }
    //对数据中的保留词进行替换(类别2)
    function ask_res($str) {
        global $ask, $res;
        $str = str_replace('b', random_select($ask), $str);
        $str = str_replace('a', random_select($res), $str);
        return $str;
    }

    // 读取data
    $data = json_decode(file_get_contents('../database/json_data/bosh.json'), true);
    $famous = $data['famous']; // a和b分别是前面和after_sen
    $front_sen = $data['before'];
    $after_sen = $data['after'];
    $bosh = $data['bosh'];
    $ask = $data['ask'];
    $solution = $data['solution'];
    $res = $data['conclusion'];

    // 设定参数，对超额参数进行限制
    $word = empty($_GET['word']) ? '使用狗屁不通生成器' : $_GET['word'];
    $len = (empty($_GET['length']) || !is_numeric($_GET['length'])) ? 1000 : intval($_GET['length']);

    // 设定上限
    if ($len > 65536) $len = 65536;

    // 生成article
    $article = [];
    $paragraph = '';
    $main_len = 0;
    while ($main_len < $len) {
        $branch = mt_rand(0, 100);
        if ($branch < 5 && mb_strlen($paragraph) > 50) { // 另起一段，每段至少五十字
            $article[] = '　　' . mb_substr($paragraph, 0, mb_strlen($paragraph) - 1) . '。';
            $str = '';
            $paragraph = '';
        } elseif ($branch < 20) { // 类别1替换
            $str = replace_punc(sen(random_select($famous)));
        } elseif ($branch < 30) { // 类别2替换
            $str = replace_punc(ask_res(random_select($solution)));
        } else { // 替换标点
            $str = replace_punc(random_select($bosh));
        }
        $paragraph .= $str;
        //拼接
        $main_len += mb_strlen($str);
    }

    // 拼接最后一段
    $article[] = '　　' . mb_substr($paragraph, 0, mb_strlen($paragraph) - 1) . '。';
    $article = str_replace('x', $word, join("\n", $article));

    header('Content-Type: text/plain; charset=UTF-8');
    echo '{"return":"100","msg":"' . $article . '"}';
    return;
?>