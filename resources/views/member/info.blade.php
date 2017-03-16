<html>
<head>
    <title>App Name - @yield('title')</title>
    <style>
        .header {
            width: 1000px;
            height: 100px;
            margin: 0 auto 20px;
            background: #f5f5f5;
        }
        .main {
            width: 1000px;
            height: 200px;
            margin: 0 auto;
        }
        .main .sidebar {
            float:left;
            width:20%;
            height:inherit;
            background: #f5f5f5;
            border:1px solid #ddd;
        }
        .main .content {
            float:right;
            width:75%;
            height:inherit;
            background: #f5f5f5;
            border:1px solid #ddd;
        }
        .footer {
            width:1000px;
            height:100px;
            margin:0 auto;
            margin-top: 15px;
            background: #f5f5f5;
            border:1px solid #ddd;
        }
    </style>
</head>
<body >

<div class="header">
    @section('header')
        头部
    @show
</div>

<div class="main">

    <div class="sidebar">
        @section('sidebar')
            侧边栏
        @show
    </div>

    <div class="content">
        @yield('content', "我是主要内容区")

    </div>

</div>

<div class="footer">
    @section('footer')
        底部
    @show

    @section('footer')
        footer
    @show
</div>

</body>

</html>