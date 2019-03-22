<?php

/**
 * LaraCMS - CMS based on laravel
 *
 * @category  LaraCMS
 * @package   Laravel
 * @author    Wanglelecc <wanglelecc@gmail.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/wanglelecc/laracms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 前台相关路由
|
*/
Route::group([ 'middleware' => ['laracms.frontend'], ], function () {
    # 前台所有URL必须加入 navigation 参数,否则面包屑无法正常使用

    # 前端示例路由
    Route::get('example', 'ExampleController@index')->name('example');

    # 站点首页
    Route::get('/', 'IndexController@index')->name('index');
    # 文章详情页
    Route::get('/article/show/{navigation}/{category}/{id}', 'ArticleController@show')->name('show');

    # 原始首页
//    Route::get('welcome', 'WelcomeController@index')->name('welcome');

    # 前台需要用户认证路由
    Route::group(['middleware' => ['auth']], function(){

       

    });

});


/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
|
| 载入后台相关路由
|
*/
require __DIR__ . '/administrator.php';
