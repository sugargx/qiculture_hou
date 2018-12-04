@extends('admin.layouts.main')
@section('content')


    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header"><h3>图片新闻</h3></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>序号</th>
                        <th>标题</th>
                        <th>状态</th>
                        <th>预览</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($imageNews as $imageNew)
                            <tr>
                                <td>{{$imageNew->order}}</td>
                                <td>{{$imageNew->title}}</td>
                                @if($imageNew->show==0)
                                    <td>已隐藏</td>
                                @else
                                    <td>正在显示</td>
                                @endif
                                <td>
                                    <img src="{{asset($imageNew->image)}}" width="200" height="100">
                                </td>
                                <td>
                                    <a href="{{url("admin/imageNew/$imageNew->id/edit")}}">
                                        <input type="button" class="btn btn-success btn-xs" value="编辑">
                                    </a>
                                    <form action="{{url('admin/imageNew')}}/{{$imageNew->id}}" method="post" style="display: inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-warning btn-xs" role="button" onclick="return confirm('您确定要删除吗？')" value="删除">
                                    </form>
                                    @if($i!=1)
                                        <a href="{{url("admin/ImageNewUp/$imageNew->id")}}">
                                            <input type="button" class="btn btn-success btn-xs" value="上移">
                                        </a>
                                    @endif
                                    @if($i!=count($imageNews))
                                    <a href="{{url("admin/imageNewDown/$imageNew->id")}}">
                                        <input type="button" class="btn btn-success btn-xs" value="下移">
                                    </a>
                                    @endif
                                    @if($imageNew->show==0)
                                        <a href="{{url("admin/imageNewShow/{$imageNew->id}")}}" class="btn btn-primary btn-xs" role="button">
                                            显示
                                        </a>
                                    @endif
                                    @if($imageNew->show==1)
                                        <a href="{{url("admin/imageNewShow/{$imageNew->id}")}}" class="btn btn-primary btn-xs" role="button">
                                            隐藏
                                        </a>
                                    @endif
                                    @php
                                        $i++;
                                    @endphp
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-header">
                    <a href="{{route('imageNew.create')}}">
                        <input type="button" class="btn btn-primary" value="添加图片新闻">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection