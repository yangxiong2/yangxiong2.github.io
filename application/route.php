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

//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];
use  think\Route;
Route::group('admin',function (){
    Route::rule('index','admin/admin/index','get|post');
    Route::rule('articlelist', 'admin/admin/articlelist', 'get|post');
    Route::rule('welcome', 'admin/admin/welcome', 'get|post');
    Route::rule('picturelist','admin/admin/picturelist','get|post');
    Route::rule('productbrand','admin/admin/productbrand','get|post');
    Route::rule('productcategory','admin/admin/productcategory','get|post');
    Route::rule('productcategoryadd','admin/admin/productcategoryadd','get|post');
    Route::rule('productlist','admin/admin/productlist','get|post');
    Route::rule('feedbacklist','admin/admin/feedbacklist','get|post');
    Route::rule('comment','admin/admin/comment','get|post');
    Route::rule('memberlist','admin/admin/memberlist','get|post');
    Route::rule('memberrecordbrowse','admin/admin/memberrecordbrowse','get|post');
    Route::rule('memberrecorddownload','admin/admin/memberrecorddownload','get|post');
    Route::rule('memberrecordshare','admin/admin/memberrecordshare','get|post');
    Route::rule('memberdel','admin/admin/memberdel','get|post');

    Route::rule('adminrole','admin/admin/adminrole','get|post');
    Route::rule('adminpermission','admin/admin/adminpermission','get|post');
    Route::rule('adminlist','admin/admin/adminlist','get|post');

    Route::rule('charts1','admin/admin/charts1','get|post');
    Route::rule('charts2','admin/admin/charts2','get|post');
    Route::rule('charts3','admin/admin/charts3','get|post');
    Route::rule('charts4','admin/admin/charts4','get|post');
    Route::rule('charts5','admin/admin/charts5','get|post');
    Route::rule('charts6','admin/admin/charts6','get|post');
    Route::rule('charts7','admin/admin/charts7','get|post');

    Route::rule('systembase','admin/admin/systembase','get|post');
    Route::rule('systemcategory','admin/admin/systemcategory','get|post');
    Route::rule('systemdata','admin/admin/systemdata','get|post');
    Route::rule('systemshielding','admin/admin/systemshielding','get|post');
    Route::rule('systemlog','admin/admin/systemlog','get|post');

    Route::rule('articleadd','admin/admin/articleadd','get|post');
    Route::rule('productadd','admin/admin/productadd','get|post');
    Route::rule('pictureadd','admin/admin/pictureadd','get|post');
    Route::rule('memberadd','admin/admin/memberadd','get|post');
});

Route::group('index',function (){
      Route::rule('index','index/index/index','get|post');
      Route::rule('detailed','index/index/detailed','get|post');

});