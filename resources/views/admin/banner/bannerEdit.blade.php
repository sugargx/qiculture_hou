@extends('admin.layouts.main')
@section('content')
    <style type="text/css">
        .select2-container--default .select2-results > .select2-results__options {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>@if($name=="create") 添加菜单 @else 修改菜单 @endif</h3>
                </div>
                <div class="card-body">
                    <form action="@if($name=="create"){{route('banner.store')}}@else{{url("admin/banner/$banner->id")}} @endif" method="post" enctype="multipart/form-data">
                        @if($name == "edit")
                            {{method_field('PUT')}}
                        @endif
                        @include("admin.layouts.errors")
                        <div class="section">
                            <div class="section-title"></div>
                            <div class="section-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">选择</label>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="type" id="select" style="margin-bottom: 10px;">
                                            <option value="-1">-----请选择-----</option>
                                            <optgroup label="新闻类别">
                                                @php
                                                    $newTypes = \App\Http\Model\NewType::get();
                                                @endphp
                                                @foreach($newTypes as $newType)
                                                    <option value="2/{{$newType->id}}" name="type_id" @if($name=="edit"&&$newType->id==$banner->type_id) selected @endif>{{$newType->name}}</option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="其他">
                                                <option value="4/0" @if($name=="edit"&&4==$banner->type) selected @endif>自定义链接</option>
                                                <option value="6/0" @if($name=="edit"&&6==$banner->type) selected @endif>首页</option>
                                                @php
                                                    $pages = \App\Http\Model\Page::get();
                                                @endphp
                                                @foreach($pages as $page)
                                                    <option value="5/{{$page->id}}" name="category" @if($name=="edit"&&$page->id==$banner->type_id) selected @endif>{{$page->title}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">菜单名称</label>
                                    <div class="col-md-9">
                                        {{csrf_field()}}
                                        <input type="text" class="form-control" placeholder="菜单名称" name="title" id="menu" value="@if($name=="edit"){{$banner->title}}@endif">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">别名（请输入英文）</label>
                                    <div class="col-md-9">
                                        {{csrf_field()}}
                                        <input type="text" class="form-control" placeholder="别名" name="url" required value="@if($name=="edit"){{$banner->url}}@endif">
                                    </div>
                                </div>
                                <div class="form-group" @if($name == "create") style="display: none; @endif @if($name == "edit" && $banner->type != 4) style="display: none;" @endif id="lianjie">
                                    <label class="col-md-3 control-label">链接</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="链接" name="href" value="@if($name == "edit"){{$banner->href}}@else{{"http://"}}@endif">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">选择上一级</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control"  name="pre_id" >
                                            <option value="-1">-----请选择-----</option>
                                            @foreach($banners as $ban)
                                                <option @if($name=="edit"&&$ban->id==$banner->pre_id) selected @endif value="{{$ban->id}}" name="pre">一{{$ban->title}}</option>
                                            @endforeach>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($name=="create")
                            <input type="submit" class="btn btn-primary" value="添加" style="margin-top: 20px">
                        @else
                            <input type="submit" class="btn btn-primary" value="更新" style="margin-top: 20px">
                        @endif
                        <a href="{{route('banner.index')}}">
                            <input type="button" class="btn btn-default" value="返回" style="margin-top: 20px">
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#select').change(function () {
                var v = $('#select').find("option:selected").text();
                if(v=="自定义链接"){
                    $('#lianjie').show();
                }else{
                    $('#lianjie').hide();
                }
                $('#menu').val(v);
            });
        })
    </script>
@endsection
{{--//作业：给表单所有文本框添加一个键盘事件，要求回车自动进入下一行。--}}
