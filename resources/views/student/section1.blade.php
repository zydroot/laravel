
@extends('student.layout')


@section('header')
    @parent //把原模板的也输出出来
    这是新的header
    <h1 style="width:100%;height:1px; background-color: black"></h1>
@stop


//yield重写也是用section
@section('content')


//模板中输出php变量
<p>{{ $val1 }}</p>
//模板中输出php代码
<p>{{ date('Y-m-d h:i:s',time()) }}</p>
{{--<p>{{ in_array($val1,$arr) ? 'true':'false' }}</p>--}}
<p>
    @if( !in_array($val1,$arr) )

        {{$arr[1]}}
        @else
        {{$arr[0]}}
        @endif
</p>
  {{--//是否存在变量--}}
<p>{{ isset($val1) ? $val1 : 'default' }}</p>
  {{--//isset()的 短语法--}}
    <p>{{ $val1 or 'default' }}</p>

    {{--//原样输出--}}
    <p>@{{ $val1 }}</p>

    {{--//模板的注释 -在html中看不到--}}
    {{-- 这就是模板的注释 --}}

    {{--//引入子视图 include--}}
    @include('student.common1',['messa' => '<br>zheshige cuowuxinxi '])
<p></p>
    <p>
        @unless($val1 != '3323')
            dengyu3323
        @endunless
    </p>
    <p>
        @for($i=0;$i<2;$i++)
            {{$arr[$i]}}
        @endfor
    </p>

    <p>
        @foreach($student as $team)
            {{$team->name}}
        @endforeach
    </p>

    
@stop
