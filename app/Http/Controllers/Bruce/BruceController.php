<?php

namespace App\Http\Controllers\Bruce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Jobs\queueTest;

class BruceController extends Controller
{
    public function __construct()
    {

    }

    public function bruceChu(Request $request){
        dd($request->all());
    }
    public function testMongodb(){
        $res = DB::connection('mongodb')->collection('articles')
            ->select('score','views')->where('score',80)->get();
        return $res;
    }
    public function testMysql(){
        $res = DB::table('ruis_production_order')->get();
        return $res;
    }
    public function queueTest(){
        for($i = 0; $i < 100; $i ++) {
            dispatch(new queueTest("ssss".$i));
        }
        exit('程序结束');
    }
}
