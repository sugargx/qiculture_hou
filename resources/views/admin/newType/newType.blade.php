@extends('admin.layouts.main')
@section('content')


    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header"><h3>文章分类列表</h3></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>序号</th>
                            <th>类名</th>
                            <th>别名</th>
                            <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($newTypes as $newType)
                            <tr>
                                <td>{{$newType->id}}</td>
                                <td>{{$newType->name}}</td>
                                <td>{{$newType->flag}}</td>
                                <td>
                                    <a href="{{url("admin/newType/$newType->id/edit")}}">
                                        <input type="button" class="btn btn-success btn-xs" value="编辑">
                                    </a>
                                    <form action="{{url('admin/newType')}}/{{$newType->id}}" method="post" style="display: inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-warning btn-xs" role="button" onclick="return confirm('您确定要删除吗？')" value="删除">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{$newTypes->links()}}
                </div>
                <div class="card-header">
                    <a href="{{route('newType.create')}}">
                        <input type="button" class="btn btn-primary" value="添加分类">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection