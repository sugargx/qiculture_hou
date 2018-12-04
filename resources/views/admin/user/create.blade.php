@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    新增管理员
                </div>
                <div class="card-body">
                    <form class="form form-horizontal" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="section">
                            <div class="section-body">
                                @include('admin.layouts.errors')
                                <div class="form-group">
                                    <label class="col-md-3 control-label">账号</label>
                                    <div class="col-md-6">
                                        <input  type="text" class="form-control" name="account" value=""  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">密码</label>
                                    <div class="col-md-6">
                                        <input  type="password" class="form-control" name="password" required >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">确认密码</label>
                                    <div class="col-md-6">
                                        <input  type="password" class="form-control" name="password_confirmation" required >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer">
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">保存</button>
                                    <a href="{{route('user.index')}}" class="btn btn-default">取消</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection