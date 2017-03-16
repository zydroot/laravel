<?php

namespace App\Http\Controllers;

use App\Student;
use App\Stuent;
use Illuminate\Support\Facades\DB;

class StudengController extends Controller{

    public function test1(){
        //return 'test1';
        $student =  DB::select('select * from lara');
        var_dump($student);

        //DB::insert('insert into lara (name,age) values(?, ?)',['zyd',18]);
    }

    public function query1(){

//       $result = DB::table('lara') -> insert([
//            'name' => 'zydwyj',
//            'age' => 18
//        ]);
//        var_dump($result);

//        $bool = DB::table('lara')->insertGetId([
//            'name' => 'wangyongjie',
//            'age' => 18
//        ]);
//        return $bool;
        //多条数据插入
        $result = DB::table('lara') -> insert([
            ['name'=>'jason','age' =>19],
            ['name'=>'jason1','age' =>20]
        ]);
        var_dump($result);
    }

    public function update1(){
//        $num  = DB::table('lara')
//            ->where('id',9)
//            -> update([
//                'age' => 20
//        ]);
//        var_dump($num);
        //自增，自减
        //$num = DB::table('lara')->increment('age');
        //$num = DB::table('lara')->increment('age',3); //自增3

        //$num = DB::table('lara')->decrement('age',3);  //自减
//        $num = DB::table('lara')
//            ->where('id',10)
//            ->decrement('age',3);  //带条件自减

        //自增||自减的同时修改数据
        $num = DB::table('lara')
            ->where('id',10)
            ->decrement('age',3,['name'=>'imooc']);


        var_dump($num);
    }

    public function query3(){
        //DB::table('lara') -> delete();// 整个表删除
        $num = DB::table('lara')
            ->where('id',14)
            ->delete();

        $num = DB::table('lara')
            ->where('id','>=',14)    //待条件
            ->delete();
        var_dump($num);

        DB::table('lara') -> truncate(); //删除整个表
    }

    public function  query4(){
        $result = DB::table('lara')->get();
        var_dump($result);
    }
    public function orm1(){

        //$students = Student::all(); //查询表的所有记录
           //根据主键进行查询

        //$studentone = Student::find(20);
        //dd($studentone);

        //$students = Student::get();
        //dd($students);

//        $student = Student::where('id','>','15')
//        ->first();
//        var_dump($student);

//        echo '<pre>';
//        $student = Student::chunk(2,function($students){   // 分页查询
//            var_dump($students);
//        });

        //聚合函数
        //$num = Student::count();
        //$num = Student::max('age');
        //$num = Student::min('age');
        //$num = Student::avg('age');
        $num = Student::sum('age');

        dd($num);

    }

    public function orm2(){
        $student = new Student();
        $student->name="tadi23";
        $student->age = 130;
        $bool = $student->save();
        var_dump($bool);
    }
    public function orm3(){
        $student = new Student();
        $result = $student::get();
        var_dump($result);
    }

    public function section1(){

        $result = Student::get();
        $val1 = '3323';
        $arr = ['3323','shits'];
        return view('student.section1', [
            'val1' => $val1,
            'arr' => $arr,
            'student' => $result
        ]);
    }
}




