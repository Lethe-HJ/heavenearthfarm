<?php

namespace App\Http\Controllers\Administrator;

use DB;
use Wanglelecc\Laracms\Models\Article;
use Illuminate\Http\Request;
use Wanglelecc\Laracms\Http\Requests\Administrator\ArticleRequest;
use Wanglelecc\Laracms\Handlers\CategoryHandler;
use Wanglelecc\Laracms\Models\Category;
use Wanglelecc\Laracms\Models\MultipleFile;

class ContentListController extends Controller
{
    public function index(Article $article, Request $request)
    {
        $this->authorize('index', $article);
        // 分类过滤
        if(($category_id = $request->category ?? 0) && ($category = Category::find($category_id))){
            $article = $category->articles();
        }

        $article = $article->with(['categorys']);
        // 关键字过滤
        if($keyword = $request->keyword ?? ''){
            $article->where('title', 'like', "%{$keyword}%");
        }

        // 开始时间过滤
        if($begin_time = $request->begin_time ?? ''){
            $article = $article->where('created_at','>',$begin_time);
        }

        // 结束时间过滤
        if($end_time = $request->end_time ?? ''){
            $article = $article->where('created_at','<',$end_time);
        }

        $articles = $article->ordered()->recent()->paginate(config('administrator.paginate.limit'));

        // 修正页码
        if( $articles->count() < 1 && $articles->lastPage() > 1 ){
            return redirect($articles->url($articles->lastPage()));
        }

        if($request->getRequestUri() == "/administrator/articles?type=article"){
            $blade = "myarticle";
        }
        elseif($request->getRequestUri() == "/administrator/blocks"){
            $blade = "myblock";
        }
        else{}
        return laravel_backend_view($blade.'.index', compact('articles'));
    }

    public function edit(Article $article, CategoryHandler $categoryHandler, Request $request)
    {
        $this->authorize('update', $article);
        $articleCategorys = $article->categorys()->pluck('category_id')->toArray();
//        $category = $categoryHandler->web($categoryHandler->select($categoryHandler->getCategorys('article')), $articleCategorys);
        $category = $categoryHandler->web($categoryHandler->select($categoryHandler->getCategorys('page')), $articleCategorys);


        if($request->page == "articles"){
            $blade = "myarticle";
        }
        elseif($request->page == "blocks"){
            $blade = "myblock";
        }
        else{}
        return laravel_backend_view($blade.'.create_and_edit', compact('article', 'category'));
    }
}
