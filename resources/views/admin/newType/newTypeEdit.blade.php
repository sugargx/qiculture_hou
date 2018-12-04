@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>@if($name=="create") 添加文章分类 @else 修改文章分类 @endif</h3>
                </div>
                <div class="card-body">
                    <form action="@if($name=="create"){{route('newType.store')}}@else{{url("admin/newType/$newType->id")}} @endif" method="post" enctype="multipart/form-data">
                        @include("admin.layouts.errors")
                        @if($name == "edit")
                            {{method_field('PUT')}}
                        @endif
                        <div class="form-group">
                            <label>名称</label>
                            {{csrf_field()}}
                            <input type="text" placeholder="请输入分类名称" class="form-control" name="name" value="@if($name=="edit"){{$newType->name}}@endif" >
                        </div>
                        <div class="form-group">
                            <label>别名</label>
                            <input type="text" placeholder="可忽略" class="form-control" name="flag" value="@if($name=="edit"){{$newType->flag}}@endif" >
                        </div>
                            @if($name=="create")
                                <input type="submit" class="btn btn-primary" value="添加" style="margin-top: 20px">
                            @else
                                <input type="submit" class="btn btn-primary" value="更新" style="margin-top: 20px">
                            @endif
                        <a href="{{route('newType.index')}}">
                            <input type="button" class="btn btn-default" value="返回" style="margin-top: 20px">
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection