@extends('admin.layouts.main')
@section('content')


    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header"><h3>文章列表</h3></div>
                <div class="card-body" style="overflow: hidden">

                    <table class="table">
                        <thead>
                        <tr>
                            <th>标题</th>
                            <th>作者</th>
                            <th>分类</th>
                            <th>浏览量</th>
                            <th>发表时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($news as $new)

                                <tr>
                                    <th>{{$new->title}}</th>
                                    <td>{{$new->author}}</td>
                                    <td>{{$new->type()->first()->name}}</td>
                                    <td>{{$new->page_view}}</td>
                                    <td>{{date('Y/m/d',strtotime($new->created_at))}}</td>
                                    <td>
                                        <a href="{{url("admin/new/$new->id/edit")}}">
                                            <input type="button" class="btn btn-success btn-xs" value="编辑">
                                        </a>
                                        <form action="{{url('admin/new')}}/{{$new->id}}" method="post" style="display: inline">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input type="submit" class="btn btn-warning btn-xs" role="button" onclick="return confirm('您确定要删除吗？')" value="删除">
                                        </form>
                                    </td>
                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$news->links()}}
                <div class="card-header">
                    <a href="{{route('new.create')}}">
                        <input type="button" class="btn btn-primary" value="发布文章">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection