@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>@if($name=="create") 添加文章分类 @else 修改文章分类 @endif</h3>
                </div>
                <div class="card-body">
                    <form action="@if($name=="create"){{route('indexColumn.store')}}@else{{url("admin/indexColumn/$column->id")}} @endif" method="post" enctype="multipart/form-data">
                        @include("admin.layouts.errors")
                        @if($name == "edit")
                            {{method_field('PUT')}}
                        @endif
                        <div class="form-group">
                            <label>对应分类</label>
                            {{csrf_field()}}
                            <select class="select2" name="news_type_id">
                                @foreach($news_types as $news_type)
                                    <option value="{{$news_type->id}}" @if($news_type->id == $column->id) selected @endif>{{$news_type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>首页显示名称</label>
                            <input type="text" placeholder="请输入首页显示名称" class="form-control" name="name" value="@if($name=="edit"){{$column->name}}@endif" >
                        </div>
                            @if($name=="create")
                                <input type="submit" class="btn btn-primary" value="添加" style="margin-top: 20px">
                            @else
                                <input type="submit" class="btn btn-primary" value="更新" style="margin-top: 20px">
                            @endif
                        <a href="{{route('indexColumn.index')}}">
                            <input type="button" class="btn btn-default" value="返回" style="margin-top: 20px">
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection