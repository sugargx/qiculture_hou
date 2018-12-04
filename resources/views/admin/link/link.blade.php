@extends('admin.layouts.main')
@section('content')


    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header"><h3>友情链接列表</h3></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>序号</th>
                            <th>链接名称</th>
                            <th>链接地址</th>
                            <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($links as $link)
                            <tr>
                                <td>{{$link->id}}</td>
                                <td>{{$link->name}}</td>
                                <td>{{$link->url}}</td>
                                <td>
                                    <a href="{{url("admin/link/$link->id/edit")}}">
                                        <input type="button" class="btn btn-success btn-xs" value="编辑">
                                    </a>
                                    <form action="{{url('admin/link')}}/{{$link->id}}" method="post" style="display: inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-warning btn-xs" role="button" onclick="return confirm('您确定要删除吗？')" value="删除">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{$links->links()}}
                </div>
                <div class="card-header">
                    <a href="{{route('link.create')}}">
                        <input type="button" class="btn btn-primary" value="添加友情链接">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection