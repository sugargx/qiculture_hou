@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    管理员管理
                </div>
                <div class="card-body no-padding">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="top">
                            <div class="dataTables_length">

                            </div>

                            <div class="clear"></div>
                        </div>
                        <table class="table primary">
                            <thead>
                            <tr>
                                <th>用户名</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->account}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                           href="{{url('/admin/user/'.$user->id.'/edit')}}">编辑</a>
                                        {{--<form method="post" action="{{url('/admin/user/del/'.$user->id)}}">--}}
                                        {{--{{csrf_field()}}--}}
                                        {{--<button type="submit" class="btn btn-danger btn-sm" id="button-delete">删除</button>--}}
                                        {{--</form>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="bottom">
                            <div>
                                <a href="{{route('user.create')}}" class="btn btn-primary">新增管理员</a>
                            </div>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection