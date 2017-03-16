<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::post('post1',function(){
    return "ppost";
});
Route::any('post2',function(){
    return "ppost1";
});
Route::match(['get','post'],'multy1',function(){
    return "ppost2";
});
Route::get('user/{id}',function($id=333){
    return 'userid  is '.$id;
})->where('id','[0-9]+');
Route::get('user/{pename}/{name?}',function($pename,$name='wang'){
    return 'pename is '.$pename.' name  is '.$name;
})->where(['pename'=>'[A-Z]+','name'=>'[A-Za-z]+']);

//路由群组
Route::group(['prefix' => 'member'],function(){

    Route::get('user/center',['as'=>'center',function(){
        return route('center');
    }]);
    Route::any('multy2',function(){

        return 'member-multy';
    });
});
//路由输出视图
Route::get('web',function(){
    return view('welcome');
});
//路由关联控制器
//Route::get('member/info','MemberController@info');

//数组形式
//Route::get('member/info',['uses' => 'MemberController@info']);

//数组形式,添加别名
Route::get('member/info',[
    'uses' => 'MemberController@info',
    'as' => 'memberinfo'
]);
//参数绑定
Route::get('member/{id?}',['uses' => 'MemberController@showinfo'])
->where('id','[0-9]+');;

//访问视图
Route::get('member/info1',[
    'uses' => 'MemberController@viewinfo'
]);
Route::any('test1',['uses' => 'StudengController@test1']);
Route::any('query1',['uses' => 'StudengController@query1']);
Route::any('update1', ['uses' => 'StudengController@update1']);
Route::any('query3',['uses' => 'StudengController@query3']);
Route::any('query4',['uses' => 'StudengController@query4']);


Route::any('orm1',['uses' => 'StudengController@orm1']);
Route::any('orm2',['uses' => 'StudengController@orm2']);
Route::any('orm3',['uses' => 'StudengController@orm3']);


Route::any('section1',['uses' => 'StudengController@section1']);