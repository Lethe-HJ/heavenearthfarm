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
//        for($i=1; $i<=4; $i++)
//            $categr_li[] = [Category::show($i, 'article')];
        $data=[];
        $data["area0"] = ["pict"=>"images/frontend/logo.png", "categr_li"=>Category::categryName()];//导航栏
        $data["area1"] = ["slideshow"=>get_block("2018_03_04_224524_index_slide_block")];//轮播图
        for($i=1;$i<=3;$i++){
            $data["area2"][] = ["img"=>"storage/".Article::getImg("区域2_商城链接".$i), "word"=>strip_tags(Article::getContent("区域2_商城链接".$i))];
        }
        $data["area3"] = [
            "img"=>[
                "title"=>"storage/".Article::getImg("区域3_标题图片"),
                "leftimg"=>"storage/".Article::getImg("区域3_左部图片"),
            ],
            "word"=>explode("==========", strip_tags(Article::getContent("区域3_文字与链接"))),
        ];

        $data["area4"] = [
            "img"=>[
//                "top"=>"images/frontend/main_logo.png",
                "top"=>"storage/".Article::getImg("区域4_顶端图片"),
                "middle"=>"storage/".Article::getImg("区域4_中间图片"),
                "button_bg"=>"storage/".Article::getImg("区域4_底端背景")
            ],
            "threemix"=>[
                "img"=>[
                    "storage/".Article::getImg("区域4_底部框框1"),
                    "storage/".Article::getImg("区域4_底部框框2"),
                    "storage/".Article::getImg("区域4_底部框框3"),
                ],
                "word"=>[
                    explode("==========", strip_tags(Article::getContent("区域4_底部框框1"))),
                    explode("==========", strip_tags(Article::getContent("区域4_底部框框2"))),
                    explode("==========", strip_tags(Article::getContent("区域4_底部框框3"))),
                ],
            ]
        ];

        //var_dump(Category::show('1'));
        return laravel_frontend_view('index1', ['data' => $data]);
    }
}