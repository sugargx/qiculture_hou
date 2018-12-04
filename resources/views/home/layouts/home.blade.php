<!DOCTYPE html>
<html lang="zh-CN">
<head>
    @php
        $webInfo = \App\Http\Model\WebInformation::first();
    @endphp
    <meta charset="UTF-8">
    <meta http‐equiv="X‐UA‐Compatible" content="IE=edge,chrome=1">
    <script src="{{asset('scripts/jquery-3.3.1.min.js')}}"></script>
    <title>{{$webInfo->webname}}</title>
    <meta name="keywords" content="{{$webInfo->keywords}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    @yield('css')
</head>
@php
    $banners = \App\Http\Model\Banner::where('show',1)->where('rank',1)->orderBy('order','asc')->get();
@endphp
<body background="{{asset('images/background.png')}}">
<div class="header">
    <div class="header-top">
        <iframe width="450" scrolling="no" height="18" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&icon=1&wind=0&num=1&site=12"></iframe>
    </div>
    <div class="header-title">
        <img src="{{asset('images/sdut.png')}}">
        <img src="{{asset('images/qi.png')}}">
        <img src="{{asset('images/wen.png')}}">
        <img src="{{asset('images/hua.png')}}">
        <img src="{{asset('images/yan.png')}}">
        <img src="{{asset('images/jiu.png')}}">
        <img src="{{asset('images/yuan.png')}}">
    </div>
    <div class="header-search">
        <form action="{{url('search')}}" method="post">
            <input type="text" name="key" id="text-search">
            @csrf
            <button onclick="">
                <img src="{{asset('images/icon-search.png')}}">
            </button>
        </form>
    </div>
</div>
<div class="nav">
    <div class="nav-contant">
        @foreach($banners as $banner)
            <a href="{{url($banner->url)}}">{{$banner->title}}</a>
        @endforeach
    </div>
</div>
@yield('content')
<hr class="footer-hr">
<div class="footer">
    <p>{{$webInfo->banquan}} &nbsp; {{$webInfo->adress}} 技术支持：<a href="https://www.mengyakeji.com/" target="_blank">萌芽科技</a></p>
</div>
</body>
</html>
