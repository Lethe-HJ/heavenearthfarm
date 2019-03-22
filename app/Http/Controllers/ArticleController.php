<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use DB;

class ArticleController extends Controller
{
	//文章展示
    public function show($navigation = 0, $category = 0,$id)
    {
        $click = DB::table('articles')->where('id',$id)->increment('views');
    	$getContent = Article::getArticle($id);
    	//dump($getContent);
    	//dump($getContent->title);
        //dump($getContent->content);
          
        return laravel_frontend_view('show', compact('getContent'));
    }


}
