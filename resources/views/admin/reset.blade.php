@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form form-horizontal" action="{{url('/admin/reset')}}" method="post"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="section">
                            <div class="section-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">用户名</label>
                                    <div class="col-md-6">
                                        {{\App\Http\Model\User::findOrFail(session('adminID'))->account}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">新密码：</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control"
                                               name="new_pass" placeholder="请输入新密码" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label"></label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control"
                                               name="new_pass_confirmation" placeholder="请再次输入新密码" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer">
                            <div class="form-group">
                                @include('admin.layouts.errors')
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">确认修改</button>
                                    <a href="{{url('/admin')}}">
                                        <button type="button"
                                                class="btn btn-info">取消
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection