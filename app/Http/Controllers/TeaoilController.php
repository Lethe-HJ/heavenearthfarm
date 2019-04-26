<?php

namespace App\Http\Controllers;

use App\Common\MyLibs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SiteMessage;
use App\Models\Article;
use DB;

class TeaoilController extends Controller
{
    public function index(){
//        for($i=1;$i<=7;$i++){
//            //if($i==1){continue;}
//            $data[$i]=MyLibs::contentHandlers(Article::getContent("页面5区域".$i));
//        }

//        $site_settings = SiteMessage::getDetails();

        //dump($data);
        $img_article = MyLibs::isMobile()?"页面5-手机-图片":"页面5-电脑-图片";
        $data["img"] = MyLibs::photoParse(Article::getContent($img_article));
        $data += MyLibs::wordAndLinkParse(Article::getContent("页面5-文字和链接"));
        dump($data);
        return laravel_frontend_view('teaoil', ['data' => $data]);

    }

}
