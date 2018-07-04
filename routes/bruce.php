<?php
/**
 * Created by PhpStorm.
 * User: zhufeng
 * Date: 2018/5/24
 * Time: 下午5:05
 */
Route::get('/', function () {
    return view('index');
});

Route::get('/phpinfo',function (){
   return phpinfo();
});

Route::get('bruce/chu','Bruce\BruceController@bruceChu');

Route::get('test/mongodb','Bruce\BruceController@testMongodb');

Route::get('test/mysql','Bruce\BruceController@testMysql');

Route::get('/queue', 'Bruce\BruceController@queueTest' );