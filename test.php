<?php
/**
 * Created by PhpStorm.
 * User: 小仙女
 * Date: 2019/4/13
 * Time: 19:43
 */
$str = "<p><img alt=\'produce.png\' src=\'http://cms.test/storage/images/article/201904/03/F0y5YHH6LVR3vOPHYJNzVkbAZa166bffKanfjn4F.png\' width=\'383\' height=\'317\'><br></p>
<p>==========<br></p>
<p>天地农耕鼎城茶油750ML1</p>
<p>==========<br></p>
<p>价格1</p>
<p>==========</p>
<p>¥101</p>
<p>==========</p>
<p>链接[<a href=\'http://www.baidu.com\'>www.baidu.com</a>]</p>
<p>==========</p>";

function contentHandlers($str){
    //首先获取图片链接
    //preg_match_all("/storage.+?(\.gif|\.jpeg|\.png|\.jpg|\.bmp)/",$str,$img);
    preg_match_all("/<img.+?src=\"(.+?)\"(.|\n)*?width=.+?height=.+?>/",$str,$img);
    for($i=0; $i<count($img[1]); $i++){
        if(!preg_match_all("/data:image/", $img[1][$i], $jj)){
//                dump($img[1][$i]);
            preg_match_all("/storage.+?(\.gif|\.jpeg|\.png|\.jpg|\.bmp)/",$img[1][$i],$ii);
            $img[1][$i] = URL::asset($ii[0][0]);
        }
    }
    var_dump($str);
    $str = strip_tags($str);

    var_dump("33---------------------------------------");
    var_dump($str);

    $str=str_ireplace("\\n","<br>",$str);

    var_dump("38---------------------------------------");
    var_dump($str);
    $str=str_ireplace("\r\n","",$str);
    $word=explode("==========", $str);


    var_dump("43---------------------------------------");
    var_dump($word);

    if(preg_match_all("/文章标题\[(.+?)\]/",$str,$title)){
        foreach($title[1] as $title){
            if(!empty($title)){
                $links[]="article/show/2/2/".Article::titleToId($title);
            }
            else{
                $links[]="#";
            }
        }
    }
    else{
        preg_match_all("/链接\[(.+?)\]/",$str,$link);
        $links=$link[1];
    }
    $data = [
        "img"=>$img[1],
        "word"=>array_values(array_filter($word)),
        "link"=>( $links= isset($links) ? $links:[] )
    ];
    var_dump($data);
    return $data;
}

contentHandlers($str);