@extends('admin.layouts.main')
@section('content')


    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header"><h3>首页模块</h3></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>序号</th>
                            <th>对应文章分类名</th>
                            <th>首页显示名称</th>
                            <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($index_columns as $column)
                            <tr>
                                <td>{{$column->id}}</td>
                                <td>{{$column->news_type()->first()->name}}</td>
                                <td>{{$column->name}}</td>
                                <td>
                                    <a href="{{url("admin/indexColumn/$column->id/edit")}}">
                                        <input type="button" class="btn btn-success btn-xs" value="编辑">
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection