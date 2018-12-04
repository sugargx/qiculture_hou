<style type="text/css">
    .hoverhover:hover{
        color: #c40000;
    }
</style>
@foreach($news as $item)
    <a href="{{url("news/$item->id")}}">
        <p class="hoverhover">{{$item->title}}</p>
        <p>{{date('Y-m-d',strtotime($item->created_at))}}</p>
    </a>
@endforeach