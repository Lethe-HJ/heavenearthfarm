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
use App\Common\MyLibs;

class IndexController extends Controller
{
    public function index()
    {
        $img_article = MyLibs::isMobile()?"页面1-手机-图片":"页面1-电脑-图片";
        $data["img"] = MyLibs::photoParse(Article::getContent($img_article));
        $data += MyLibs::wordAndLinkParse(Article::getContent("页面1-文字和链接"));
        $data["slideshow"] = get_block("2018_03_04_224524_index_slide_block");//轮播图

        return laravel_frontend_view('index', ['data' => $data]);
    }

    public function index_test(){
        $img_article = MyLibs::isMobile()?"页面1-手机-图片":"页面1-电脑-图片";
        $data["img"] = MyLibs::photoParse(Article::getContent($img_article));
        $data += MyLibs::wordAndLinkParse(Article::getContent("页面1-文字和链接"));
        $data["slideshow"] = get_block("2018_03_04_224524_index_slide_block");//轮播图

        return laravel_frontend_view('index_test', ['data' => $data]);
    }
//    public function test(){
//        $data["img"] = MyLibs::photoParse(Article::getContent("页面1-电脑-图片"));
//        $data[] = MyLibs::wordAndLinkParse(Article::getContent("页面1-文字和链接"));
//
//        return $data;
//    }


}