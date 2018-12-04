@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        @if($name == "create")
                            添加轮播图
                            @else
                            编辑轮播图
                            @endif
                    </h3>
                </div>
                <div class="card-body">
                    <form action="@if($name=="create"){{route('slide.store')}}@else{{url("admin/slide/$slide->id")}} @endif" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if($name == "edit")
                            {{method_field('PUT')}}
                        @endif
                        <div class="form-group">
                            <label>轮播图<span class="size"></span></label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label>标题</label>
                            {{csrf_field()}}
                            <input type="text" placeholder="标题" class="form-control" name="title" value="@if($name=="edit"){{$slide->title}}@endif" >
                        </div>
                            <div class="form-group">
                                <label>链接</label>
                                <input type="text" placeholder="链接" class="form-control" name="link" value="@if($name=="edit"){{$slide->link}}@else http://@endif" >
                            </div>
                            @if($name=="create")
                                <input type="submit" class="btn btn-primary" value="添加" style="margin-top: 20px">
                            @else
                                <input type="submit" class="btn btn-primary" value="更新" style="margin-top: 20px">
                            @endif
                            <a href="{{route('slide.index')}}">
                                <input type="button" class="btn btn-default" value="返回" style="margin-top: 20px">
                            </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection