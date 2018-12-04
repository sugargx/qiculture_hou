@php
    $links = \App\Http\Model\Link::all();
@endphp
@foreach($links as $link)
    <a href="{{$link->url}}" style="display: block;float: left;margin-right: 40px">
        <span style="font-size:16px;">
            <span style="font-size:16px;">{{$link->name}}</span>
        </span>
    </a>
@endforeach