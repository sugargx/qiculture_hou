@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        @if($name == "create")
                            添加图片新闻
                            @else
                            编辑图片新闻
                            @endif
                    </h3>
                </div>
                <div class="card-body">
                    <form action="@if($name=="create"){{route('imageNew.store')}}@else{{url("admin/imageNew/$imageNew->id")}} @endif" method="post" enctype="multipart/form-data">
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
                            <label>图片<span class="size"></span></label>
                            <input type="file" class="form-control" name="image">
                        </div>
                            <div class="form-group">
                                <label>标题<span class="size"></span></label>
                                <input type="text" placeholder="请输入标题" class="form-control" name="title" @if($name=='edit') value="{{$imageNew->title}}@endif">
                            </div>
                            <div class="form-group">
                                <label>文章内容</label>
                                @include('admin.layouts.Ueditor')
                            </div>
                            @csrf
                            @if($name=="create")
                                <input type="submit" class="btn btn-primary" value="添加" style="margin-top: 20px">
                            @else
                                <input type="submit" class="btn btn-primary" value="更新" style="margin-top: 20px">
                            @endif
                            <a href="{{route('imageNew.index')}}">
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
                ue.execCommand("inserthtml",'@if($name=="edit"){!! html_entity_decode($imageNew->content) !!}@endif') ;
            });
        </script>
    </div>
@endsection