<?php
    $path="../images/prprgif/";
    $filename=$_GET['pic'];
    $output="output.gif";
    $animation = new Imagick();//背景图
    $post = new Imagick($filename);//叠加图片获取
    //设置背景位置常量和循环常量
    $width = [80,70,75,85,90];
    $height = [80,90,85,75,70];
    $x = [32,42,37,27,22];
    $y = [32,22,27,37,42];
    $delay=8;
    for($i=0;$i<5;$i++) {
        $thisimage = new Imagick();
        $thisimage->readImage($path."/sprite-".$i.".png");
        $post->resizeImage($width[$i],$height[$i],null,1,false);
        $thisimage->compositeImage($post, imagick::COMPOSITE_DSTOVER, $x[$i], $y[$i]);
        $animation->addImage($thisimage);
        $animation->setImageDelay($delay);
        $animation->setImageDispose(imagick::DISPOSE_BACKGROUND);
    }
    $animation->writeImages($path.$output,true);//写入到文件
    echo "<img src='" . $path . $output . "' />";