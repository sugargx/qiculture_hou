<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>齐文化后台管理</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flat-admin.css')}}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme/blue-sky.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme/blue.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme/red.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme/yellow.css')}}">

</head>
<body>
<div class="app app-default">

    <div class="app-container app-login">
        <div class="flex-center">
            <div class="app-header"></div>
            <div class="app-body">
                <div class="loader-container text-center">
                    <div class="icon">
                        <div class="sk-folding-cube">
                            <div class="sk-cube1 sk-cube"></div>
                            <div class="sk-cube2 sk-cube"></div>
                            <div class="sk-cube4 sk-cube"></div>
                            <div class="sk-cube3 sk-cube"></div>
                        </div>
                    </div>
                    <div class="title">Logging in...</div>
                </div>
                <div class="app-block">
                    <div class="app-form">
                        <div class="form-header">
                            <div class="app-brand"><span class="highlight">齐文化</span>管理系统</div>
                        </div>

                        <form method="POST" action="{{url('/admin/login')}}">
                            {{csrf_field()}}
                            <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                             <i class="fa fa-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" placeholder="用户名" >
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                <i class="fa fa-key" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="密码">
                            </div>

                            <p>
                                <input type="checkbox" name="remember_token">记住
                            </p>
                            @include("admin.layouts.errors")
                            <div class="text-center">
                                {{--<button type="submit">123</button>--}}
                                {{--<input type="submit" value="123">--}}
                                <input type="submit" class="btn btn-success btn-submit" value="登录">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="app-footer">
            </div>
        </div>
    </div>

</div>


<script type="text/javascript" src="{{asset('assets/js/vendor.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>--}}

</body>
</html>