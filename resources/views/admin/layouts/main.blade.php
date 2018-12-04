<!DOCTYPE html>
<html>
<head>
    <title>萌芽管理系统</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/flat-admin.css')}}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/theme/blue-sky.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/theme/blue.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/theme/red.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/theme/yellow.css')}}">

</head>
<body>
<div class="app app-default">
    {{--sidebar--}}

    @include("admin.layouts.sidebar")
    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">
            {{--{{list}}--}}
        </div>
    </script>
    <div class="app-container app-full">

        @include("admin.layouts.header")
        <!-- 主体部分 -->
        {{--<div class="app-messaging-container">--}}
            {{----}}
        {{--</div>--}}
            @yield("content")
        {{--<script type="text/javascript" src="{{asset('/assets/js/vendor.js')}}"></script>--}}
        {{--<script type="text/javascript" src="{{asset('/assets/js/app.js')}}"></script>--}}
    </div>

    <script type="text/javascript" src="{{asset('/assets/js/vendor.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/js/app.js')}}"></script>
</div>
</body>
</html>