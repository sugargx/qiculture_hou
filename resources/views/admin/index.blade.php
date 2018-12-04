@extends("admin.layouts.main")

@section('content')
    <div class="row" >
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-green-light" href="{{url('/')}}">
                <div class="card-body">
                    <i class="icon fa fa-link fa-4x"></i>
                    <div class="content">
                        <div class="title" ></div>
                        <div class="value"><span class="sign" >查看网站</span></div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-yellow-light" href="{{url('admin/new/create')}}">
                <div class="card-body">
                    <i class="icon fa fa-plus-square fa-4x"></i>

                    <div class="content">
                        <div class="title" href=""></div>
                        <div class="value"><span class="sign">发布文章</span></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-yellow-light" href="{{url('admin/banner/create')}}">
                <div class="card-body">
                    <i class="icon fa fa-plus-square fa-4x"></i>

                    <div class="content">
                        <div class="title" href=""></div>
                        <div class="value"><span class="sign">菜单管理</span></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-mini">
                <div class="card-header">
                    <div class="card-title">运行环境</div>
                    <ul class="card-action">
                        <li>
                            <i class="fa fa-refresh"></i>
                        </li>
                    </ul>
                </div>
                <div class="card-body no-padding table-responsive">
                    <table class="table card-table">

                        <tbody>
                        <tr>
                            <td>主机：</td>
                            <td class="right">{{GetHostByName($_SERVER['SERVER_NAME'])}}</td>
                            <!-- <td><span class="badge badge-success badge-icon"><i class="fa fa-check" aria-hidden="true"></i><span>Complete</span></span></td> -->
                        </tr>
                        <tr>
                            <td>系统日期：</td>
                            <td class="right"><?php echo $showtime=date("Y-m-d H:i:s");?></td>
                            <!-- <td><span class="badge badge-warning badge-icon"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Pending</span></span></td> -->
                        </tr>
                        <tr>
                            <td>操作系统：</td>
                            <td class="right">{{PHP_OS}}</td>
                            <!-- <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td> -->
                        </tr>
                        <tr>
                            <td>PHP版本：</td>
                            <td class="right">{{PHP_VERSION}}</td>
                            <!-- <td><span class="badge badge-danger badge-icon"><i class="fa fa-times" aria-hidden="true"></i><span>Cancelled</span></span></td> -->
                        </tr>
                        <tr>
                        <td>数据库：</td>
                        <td class="right"></td>
                        <!-- <td><span class="badge badge-primary badge-icon"><i class="fa fa-truck" aria-hidden="true"></i><span>Shipped</span></span></td> -->
                        </tr>
                        <tr>
                        <td>运行环境：</td>
                        <td class="right">{{php_sapi_name()}}</td>
                        <!-- <td><span class="badge badge-info badge-icon"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Confirm Payment</span></span></td> -->
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card card-mini">
                <div class="card-header">
                    <div class="card-title">软件信息</div>
                </div>
                <div class="card-body no-padding table-responsive">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>软件开发：</td>
                            <td>山东萌芽网络科技有限公司</td>
                        </tr>
                        <tr>
                            <td>授权使用：</td>
                            <td>齐文化研究院</td>
                        </tr>
                        <tr>
                            <td>名称：</td>
                            <td>萌芽网站管理系统</td>
                        </tr>
                        <tr>
                            <td>版本：</td>
                            <td>2.0.1</td>
                        </tr>
                        <tr>
                            <td>网址：</td>
                            <td><a href="http://www.mengyakeji.com" target="_blank">www.mengyakeji.com</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

