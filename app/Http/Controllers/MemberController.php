<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/2
 * Time: 20:52
 */

namespace App\Http\Controllers;

use App\Member;

class MemberController extends Controller{
    public function info(){
        return route('memberinfo');
    }
    public function showinfo($id){
        return 'the id is '.$id;
    }
    public function viewinfo(){
        return Member::getMember();    //调用模型静态方法
//        return view('member/info',[  // 调用视图，传递参数
//            'name' => 'tttt',
//            'age' => 10
//        ]);
    }
}