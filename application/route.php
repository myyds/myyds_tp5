<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
//静态路由
Route::rule('/','index/index/index');
// Route::rule('/','index/index/index');
// Route::rule('test','test/test/test');

// // //带参数路由

// Route::rule('time/:year/:month','index/index/shijian');
// Route::rule('time/:year/[:month]','index/index/shijian');//可选


//完全匹配路由
// Route::rule('/$','index/index/index');

// 资源路由
// Route::resource('user','index/users');


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
