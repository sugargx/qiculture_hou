@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>@if($name=="create") 添加文章 @else 修改文章 @endif</h3>
                </div>
                <div class="card-body">
                    <form action="@if($name=="create"){{route('new.store')}}@else{{url("admin/new/$new->id")}} @endif" method="post" enctype="multipart/form-data">
                        @include("admin.layouts.errors")
                        @if($name == "edit")
                            {{method_field('PUT')}}
                        @endif
                        <div class="form-group">
                            <label>标题</label>
                            {{csrf_field()}}
                            <input type="text" placeholder="请输文章标题" class="form-control" name="title" value="@if($name=="edit"){{$new->title}}@endif" >
                        </div>
                        <div class="form-group">
                            <label>作者</label>
                            <input type="text" placeholder="请输文章作者" class="form-control" name="author" value="@if($name=="edit"){{$new->author}}@endif" >
                        </div>
                        <div class="form-group">
                            <label>关键词</label>
                            <input type="text" placeholder="请输文章关键词" class="form-control" name="keywords" value="@if($name=="edit"){{$new->keywords}}@endif" >
                        </div>
                        <div class="form-group">
                            <label>摘要</label>
                            <input type="text" placeholder="请输文章摘要" class="form-control" name="description" value="@if($name=="edit"){{$new->description}}@endif" >
                        </div>
                        <div class="form-group">
                            <label>视频文章图片<small>非视频文章请忽略</small></label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label>请选择分类</label>
                            <select class="select2" name="type_id">
                                @foreach($newTypes as $newType)
                                    <option value="{{$newType->id}}" @if($name=="edit"&&$newType->id == $new->type_id) selected @endif>{{$newType->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>时间</label>
                            <input type="datetime-local" class="form-control" name="created_at" value="@if($name=="edit"){{date('Y-m-d',strtotime($new->created_at))}}T{{date('h:i',strtotime($new->created_at))}}@endif" >
                        </div>
                        <div class="form-group">
                            <label>文章内容</label>
                            @include('admin.layouts.Ueditor')
                        </div>
                            @if($name=="create")
                                <input type="submit" class="btn btn-primary" value="添加" style="margin-top: 20px">
                            @else
                                <input type="submit" class="btn btn-primary" value="更新" style="margin-top: 20px">
                            @endif
                        <a href="{{route('new.index')}}">
                            <input type="button" class="btn btn-default" value="返回" style="margin-top: 20px">
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <script language="JavaScript">
            var ue = UE.getEditor('editor');
            ue.ready(function() {
                //设置编辑器的内容
                ue.execCommand("inserthtml",'@if($name=="edit"){!! html_entity_decode($new->content) !!}@endif') ;
            });
        </script>
    </div>
@endsection