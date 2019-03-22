<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/3/18
 * Time: 17:21
 */
/**
 * 前台示例控制器
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Wanglelecc\Laracms\Models\Category;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        for($i=0;$i<=9;$i++){
            if($i==1){continue;}
            $data[$i]=self::contentHandler(Article::getContent("区域".$i));
        }
        $data[0]["categry"] = Category::categryName();
        $data[1] = ["slideshow"=>get_block("2018_03_04_224524_index_slide_block")];//轮播图
        dump($data);

        return laravel_frontend_view('index', ['data' => $data]);
    }

    public function contentHandler($str){
        //首先获取图片链接
        preg_match_all("/storage.+?(\.gif|\.jpeg|\.png|\.jpg|\.bmp)/",$str,$img);
        $str = strip_tags($str);
        $word=explode("==========", $str);
        preg_match_all("/文章标题ttt(.+?)ttt/",$str,$title);
//        dump($title[1]);
        foreach($title[1] as $title){
            if(!empty($title)){
//                dump($title);
                $link[]="article/show/2/2/".Article::titleToId($title);
//                dump($link);
            }
        }

        return [
            "img"=>$img[0],
            "word"=>array_values(array_filter($word)),
            "link"=>( $link= isset($link) ? $link:[] )
        ];
    }


}