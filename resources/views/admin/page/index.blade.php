@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header"><h3>页面列表</h3></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>名称</th>
                        <th>时间</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{$page->title}}</td>
                                <td>{{date('Y-m-d H:i:s',strtotime($page->created_at))}}</td>
                                <td>


                                    <a href="{{url("admin/page/{$page->id}/edit")}}" class="btn btn-primary btn-xs" role="button">
                                        编辑
                                    </a>

                                    <form action="{{url('admin/page')}}/{{$page->id}}" method="post" style="display: inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-warning btn-xs" role="button" onclick="return confirm('您确定要删除吗？')" value="删除"/>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                {{$pages->links()}}
                <div class="card-header">
                    <a href="{{route('page.create')}}">
                        <input type="button" class="btn btn-primary" value="新建页面">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
