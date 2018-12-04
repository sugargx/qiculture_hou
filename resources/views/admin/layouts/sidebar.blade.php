<aside class="app-sidebar" id="sidebar">
    <div class="sidebar-header">
        <a class="sidebar-brand" href="#"><span class="highlight">萌芽</span> 管理系统</a>
        <button type="button" class="sidebar-toggle">
            <i class="fa fa-times"></i>
        </button>
    </div>
    <div class="sidebar-menu">
        <ul class="sidebar-nav">
            <li class="">
                <a href="{{url('/admin')}}">
                    <div class="icon">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </div>
                    <div class="title">首页</div>
                </a>
            </li>
            <li class="">
                <a href="{{url('/')}}" target="_blank">
                    <div class="icon">
                        <i class="fa fa-link"  aria-hidden="true"></i>
                    </div>
                    <div class="title">查看网站</div>
                </a>
            </li>
            <li class="dropdown  ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="title">内容管理</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="{{route('newType.index')}}">文章分类管理</a></li>
                        <li><a href="{{route('new.index')}}">文章管理</a></li>
                        {{--<li><a href="{{route('page.index')}}">页面管理</a></li>--}}
                        <li><a href="{{route('link.index')}}">友情链接管理</a></li>
                        <li><a href="{{route('slide.index')}}">幻灯片管理</a></li>
                        <li><a href="{{route('imageNew.index')}}">图片新闻管理</a></li>
                    </ul>
                </div>
            </li>
            <li class="dropdown ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-cube"></i>
                    </div>
                    <div class="title">扩展组件</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="{{route('banner.index')}}">菜单栏管理</a></li>
                        <li><a href="{{route('indexColumn.index')}}">首页模块管理</a></li>
                        <li><a href="{{route('page.index')}}">页面管理</a></li>
                    </ul>
                </div>
            </li>
            {{--<li class="">--}}
                {{--<a href="{{url('/admin/message')}}">--}}
                    {{--<div class="icon">--}}
                        {{--<i class="fa fa-navicon" aria-hidden="true"></i>--}}
                    {{--</div>--}}
                    {{--<div class="title">留言</div>--}}
                {{--</a>--}}
            {{--</li>--}}
            <li class="dropdown ">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <div class="icon">
                        <i class="fa fa-cog"></i>
                    </div>
                    <div class="title">网站设置</div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="{{url('admin/webinformation')}}">基本信息</a></li>
                        <li><a href="{{route('user.index')}}">管理员列表</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>