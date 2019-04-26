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
use App\Models\SiteMessage;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
use App\Common\MyLibs;

class EnterpriseLectureController extends Controller
{
    public function index(){

        $img_article = MyLibs::isMobile()?"页面2-手机-图片":"页面2-电脑-图片";
        $data["img"] = MyLibs::photoParse(Article::getContent($img_article));
        $data += MyLibs::wordAndLinkParse(Article::getContent("页面2-文字和链接"));
//        dump($data);
        return laravel_frontend_view('enterprise', ['data' => $data]);
    }
//    public function index_test(){
//        $img_article = MyLibs::isMobile()?"页面2-手机-图片":"页面2-电脑-图片";
//        $data["img"] = MyLibs::photoParse(Article::getContent($img_article));
//        $data += MyLibs::wordAndLinkParse(Article::getContent("页面2-文字和链接"));
////        dump($data);
//        return laravel_frontend_view('enterprise_test', ['data' => $data]);
//    }


}