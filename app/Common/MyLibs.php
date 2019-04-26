<?php
namespace App\Common;
use App\Models\Article;
use Illuminate\Support\Facades\URL;
class MyLibs{
    public static function contentHandlers($str){
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
        $str = strip_tags($str);
        $str=str_ireplace("\\n","<br>",$str);
        $str=str_ireplace("\r\n","",$str);
        $word=explode("==========", $str);

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
//        dump($data);
        return $data;
    }
    function delempty($v) {
        return $v != ""? true : false;
    }

    public static function photoParse($str){
        preg_match_all("/\[\-\-photo\-(\d{1,2})\-\-\].+?<img.+?src=\"(.+?)\"(.|\n)*?width=.+?height=.+?>/",$str,$imgs);
        for($i=0;$i<count($imgs[1]);$i++){
            $j=(int)$imgs[1][$i]-1;
            $data[$j] = $imgs[2][$j];
        }
        return $data;
    }

    public static function wordAndLinkParse($str){
        preg_match_all("/(word|link|article|video)\-(\d{1,2})\-\-\](.+?)\[\-\-/",strip_tags($str),$itm);
        for($i=0;$i<count($itm[2]);$i++){
            $index=(int)$itm[2][$i]-1;//
            $key=$itm[1][$i];//
            $data[$key][$index] = $itm[3][$index];
        }
        return $data;
    }

    //判断是否是移动端访问
    public static function isMobile()
    {
        // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])) {
            return TRUE;
        }
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA'])) {
            return stristr($_SERVER['HTTP_VIA'], "wap") ? TRUE : FALSE;// 找不到为flase,否则为TRUE
        }
        // 判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT'])) {
            $clientkeywords = array(
                'mobile',
                'nokia',
                'sony',
                'ericsson',
                'mot',
                'samsung',
                'htc',
                'sgh',
                'lg',
                'sharp',
                'sie-',
                'philips',
                'panasonic',
                'alcatel',
                'lenovo',
                'iphone',
                'ipod',
                'blackberry',
                'meizu',
                'android',
                'netfront',
                'symbian',
                'ucweb',
                'windowsce',
                'palm',
                'operamini',
                'operamobi',
                'openwave',
                'nexusone',
                'cldc',
                'midp',
                'wap'
            );
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                return TRUE;
            }
        }
        if (isset ($_SERVER['HTTP_ACCEPT'])) { // 协议法，因为有可能不准确，放到最后判断
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== FALSE) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === FALSE || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                return TRUE;
            }
        }
        return FALSE;
    }

}
