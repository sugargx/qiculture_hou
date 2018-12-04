@extends('admin.layouts.main')
@section('content')


    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header"><h3>幻灯片列表</h3></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>序号</th>
                        <th>标题</th>
                        <th>链接</th>
                        <th>状态</th>
                        <th>预览</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($slides as $slide)
                            <tr>
                                <td>{{$slide->order}}</td>
                                <td>{{$slide->title}}</td>
                                <td>{{$slide->link}}</td>
                                @if($slide->show==0)
                                    <td>已隐藏</td>
                                @else
                                    <td>正在显示</td>
                                @endif
                                <td>
                                    <img src="{{asset($slide->image)}}" width="200" height="100">
                                </td>
                                <td>
                                    <a href="{{url("admin/slide/$slide->id/edit")}}">
                                        <input type="button" class="btn btn-success btn-xs" value="编辑">
                                    </a>
                                    <form action="{{url('admin/slide')}}/{{$slide->id}}" method="post" style="display: inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-warning btn-xs" role="button" onclick="return confirm('您确定要删除吗？')" value="删除">
                                    </form>
                                    @if($i!=1)
                                        <a href="{{url("admin/slideUp/$slide->id")}}">
                                            <input type="button" class="btn btn-success btn-xs" value="上移">
                                        </a>
                                    @endif
                                    @if($i!=count($slides))
                                    <a href="{{url("admin/slideDown/$slide->id")}}">
                                        <input type="button" class="btn btn-success btn-xs" value="下移">
                                    </a>
                                    @endif
                                    @if($slide->show==0)
                                        <a href="{{url("admin/slideShow/{$slide->id}")}}" class="btn btn-primary btn-xs" role="button">
                                            显示
                                        </a>
                                    @endif
                                    @if($slide->show==1)
                                        <a href="{{url("admin/slideShow/{$slide->id}")}}" class="btn btn-primary btn-xs" role="button">
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
                    {{$slides->links()}}
                </div>
                <div class="card-header">
                    <a href="{{route('slide.create')}}">
                        <input type="button" class="btn btn-primary" value="添加幻灯片">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection