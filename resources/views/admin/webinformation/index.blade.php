@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><i class="icon fa fa-user" aria-hidden="true"></i>请输入网站的信息</div>
                <div class="card-body">
                    <form class="form form-horizontal" method="post" action="{{url('admin/webinformation')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="section">
                            <div class="section-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">网站名称</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="网站名称" name="webname" value="{{$key->webname}}"  >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">网站描述</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="网站描述" name="description" value="{{$key->description}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">关键词（英文,分开）</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="请输入连续的关键词" name="keywords"  @if($key->keywords != null) value="{{$key->keywords}}" @endif >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">地址</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="地址" name="adress" value="{{$key->adress}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">备案</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="备案信息" name="beian"value="{{$key->beian}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">版权</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="版权信息" name="banquan"value="{{$key->banquan}}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">微信二维码<small>不修改请忽略</small></label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="qrcode">
                                    </div>
                                </div>
                                @if($key->qrcode)
                                <div class="form-group">
                                    <label class="col-md-3 control-label">微信二维码</label>
                                    <div class="col-md-9">
                                        <img src="{{asset($key->qrcode)}}" style="width: 200px;height: 200px;">
                                    </div>
                                </div>
                                @endif
                                <div class="form-group" style="margin-top: 20px">
                                    <a class="col-md-9 col-md-offset-3">
                                        <input type="submit" class="btn btn-primary" value="保存">
                                        <input type="button" class="btn btn-default" onclick="location.href='{{url('/admin')}}'"  value="取消">
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

