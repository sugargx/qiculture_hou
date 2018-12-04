@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>@if($name=="create") 添加友情链接 @else 修改友情链接 @endif</h3>
                </div>
                <div class="card-body">
                    <form action="@if($name=="create"){{route('link.store')}}@else{{url("admin/link/$link->id")}} @endif" method="post" enctype="multipart/form-data">
                        @include("admin.layouts.errors")
                        @if($name == "edit")
                            {{method_field('PUT')}}
                        @endif
                        <div class="form-group">
                            <label>链接名称</label>
                            {{csrf_field()}}
                            <input type="text" placeholder="请输入链接名称" class="form-control" name="name" value="@if($name=="edit"){{$link->name}}@endif" >
                        </div>
                        <div class="form-group">
                            <label>链接网址</label>
                            <input type="text" placeholder="请输入链接" class="form-control" name="url" value="@if($name=="edit"){{$link->url}}@else http://@endif">
                        </div>

                            @if($name=="create")
                                <input type="submit" class="btn btn-primary" value="添加" style="margin-top: 20px">
                            @else
                                <input type="submit" class="btn btn-primary" value="更新" style="margin-top: 20px">
                            @endif
                        <a href="{{route('link.index')}}">
                            <input type="button" class="btn btn-default" value="返回" style="margin-top: 20px">
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection