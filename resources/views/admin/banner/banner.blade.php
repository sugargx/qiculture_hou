@extends("admin.layouts.main")

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header"><h3>菜单列表</h3></div>
                <div class="card-body" style="overflow: hidden">
                    <table class="table primary" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                {{--<th>编号</th>--}}
                                <th>导航栏名称</th>
                                <th>别名</th>
                                <th>排序</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                        <tbody>
                        @php
                        $j = 1;
                        @endphp
                        @foreach($banners as $banner)
                            <tr>
                                <td>━{{$banner->title}}</td>
                                <td>{{$banner->url}}</td>
                                <td>{{$banner->order}}</td>
                                <td>
                                    @if($banner->show==1)
                                            正在显示
                                    @else
                                        已隐藏
                                        @endif
                                </td>
                                <td>
                                    @if($banner->show==0)
                                        <a href="{{url("admin/bannerShow/{$banner->id}")}}" class="btn btn-primary btn-xs" role="button">
                                            显示
                                        </a>
                                    @endif
                                    @if($banner->show==1)
                                        <a href="{{url("admin/bannerShow/{$banner->id}")}}" class="btn btn-primary btn-xs" role="button">
                                            隐藏
                                        </a>
                                    @endif
                                    @if($j!=1)
                                        <a href="{{url("admin/bannerUp/$banner->id")}}">
                                            <input type="button" class="btn btn-success btn-xs" value="上移">
                                        </a>
                                    @endif
                                    @if($j!=count($banners))
                                        <a href="{{url("admin/bannerDown/$banner->id")}}">
                                            <input type="button" class="btn btn-success btn-xs" value="下移">
                                        </a>
                                    @endif

                                    @php
                                        $j ++;
                                    @endphp
                                    <a href="{{url("admin/banner/$banner->id/edit")}}">
                                        <input type="button" class="btn btn-success btn-xs" value="编辑">
                                    </a>
                                    <form action="{{url('admin/banner')}}/{{$banner->id}}" method="post" style="display: inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-warning btn-xs" role="button" onclick="return confirm('您确定要删除吗？')" value="删除">
                                    </form>
                                </td>
                            </tr>
                            @if($banner->rank == 1)
                                @php
                                $later_banners = \App\Http\Model\Banner::where('pre_id','=',$banner->id)->orderby('order','asc')->get();
                                @endphp
                                @php
                                    $i = 1;
                                @endphp

                                 @foreach($later_banners as $later_banner)
                            <tr>
                                <td>&nbsp;&nbsp;━&nbsp;&nbsp;━{{$later_banner->title}}</td>
                                <td>{{$later_banner->url}}</td>
                                <td>&nbsp;&nbsp;━&nbsp;&nbsp;━{{$later_banner->order}}</td>
                                <td>
                                    @if($later_banner->show==1)
                                        正在显示
                                    @else
                                        已隐藏
                                    @endif
                                </td>
                                <td>
                                    @if($later_banner->show==0)
                                        <a href="{{url("admin/bannerShow/{$later_banner->id}")}}" class="btn btn-primary btn-xs" role="button">
                                            显示
                                        </a>
                                    @endif
                                    @if($later_banner->show==1)
                                        <a href="{{url("admin/bannerShow/{$later_banner->id}")}}" class="btn btn-primary btn-xs" role="button">
                                            隐藏
                                        </a>
                                    @endif
                                    @if($i!=1)
                                        <a href="{{url("admin/bannerUp/$later_banner->id")}}">
                                            <input type="button" class="btn btn-success btn-xs" value="上移">
                                        </a>
                                    @endif
                                    @if($i!=count($later_banners))
                                        <a href="{{url("admin/bannerDown/$later_banner->id")}}">
                                            <input type="button" class="btn btn-success btn-xs" value="下移">
                                        </a>
                                    @endif

                                        @php
                                            $i ++;
                                        @endphp
                                    <a href="{{url("admin/banner/$later_banner->id/edit")}}">
                                        <input type="button" class="btn btn-success btn-xs" value="编辑">
                                    </a>
                                    <form action="{{url('admin/banner')}}/{{$later_banner->id}}" method="post" style="display: inline">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="submit" class="btn btn-warning btn-xs" role="button" onclick="return confirm('您确定要删除吗？')" value="删除">
                                    </form>
                                </td>
                            </tr>
                                @endforeach
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-header">
                    <a href="{{route('banner.create')}}">
                        <input type="button" class="btn btn-primary" value="添加菜单">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script language="JavaScript">
        $('#select').change(function () {
            var v = $('#select').val();
            var s = v.split('/');
            if(s[1]=='自定义'){
                $('#lianjie').show();
            }else{
                $('#lianjie').hide();
            }

            $('#menu').val(s[1]);
        });
    </script>
@endsection