@extends('home.layouts.home')
@section('css')
    <script src="{{asset('scripts/jquery-3.3.1.min.js')}}"></script>
    <link rel="Stylesheet" type="text/css" href="{{asset('css/menu-list.css')}}">
@endsection
@section('content')
<div class="main" style="overflow: hidden">
    <div class="main-nav">
        @foreach($news as $new)
            <div class="news-title" id="{{$new->id}}">
                {{$new->title}}
            </div>
        @endforeach
        @foreach($childMenu as $item)
            <div style="@if($childId == $item->id) background-color:rgb(166, 92, 31); @endif">
                <a href="{{url($url . '/' . $item->id)}}" style="color: black;">
                    {{$item->title}}
                </a>
            </div>
        @endforeach
    </div>
    <div class="main-text">
        @if($childId!=0)
            @foreach($news as $new)
                <a href="{{url("news/$new->id")}}">{{$new->title}}<span></span></a>
            <hr/>
            @endforeach
        @endif
    </div>
    @if($childId!=0)
        <div style="float: right">{{$news->links()}}</div>
    @endif
    @if($childId==0)
    @foreach($news as $new)
        <div class="main-text news-content" id="news{{$new->id}}" style="display: none;">
            {!! $new->content !!}
        </div>
        @endforeach
    @endif
    @if($childId==0)
    <script language="JavaScript">

        $(document).ready(function () {
            $('.news-content:first').show();
            $('.news-title').mouseenter( function () {
                newsId = $(this).attr('id');
                $('.news-title').css('background-color','white')
                $(this).css('background-color','rgb(166, 92, 31)')
                console.log(newsId);
                $('.news-content').hide();
                $('#news'+newsId).show();
            })
        });
    </script>
        @endif
</div>
@endsection