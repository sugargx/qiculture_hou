<table class=" formMiddle formMiddle12" style="" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td class="formMiddleLeft formMiddleLeft12"></td>
        <td class="formMiddleCenter formMiddleCenter12 " valign="top">
            <div class="formMiddleContent formMiddleContent12 fk-formContentOtherPadding" tabstyle="0">
                <div class="newsDetail newsDetailV2" newsid="10">
                    <div class="title">
                        {{$new->title}}
                    </div>
                    {{--<div class="newsInfoWrap">--}}
                        {{--<div class="rightInfo">--}}
                            {{--<span class="newsInfo"><span id="newsQrCode" class="webSiteQrCode">&nbsp;</span>二维码</span>--}}
                            {{--<span class="newsInfo"><span class="viewCount"></span><span class="newsViewCount">36</span></span>--}}
                        {{--</div>--}}
                        {{--<div class="leftInfo"></div>--}}
                    {{--</div>--}}
                    <div class="line1"></div>
                    <table width="82%" border="0" cellspacing="0" cellpadding="0">
                        <tbody style="margin:0px;padding:0px;">
                        <tr style="margin:0px;padding:0px;">
                            <td height="30" align="center" valign="middle">发布人：{{$new->author}} &nbsp;发布时间：{{date('Y-m-d',strtotime($new->created_at))}} &nbsp; 浏览次数:{{$new->page_view}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="richContent  richContent0">
                        {!! $new->content !!}
                    </div>
                    <div class="line2"></div>
                    <div class="middlePanel">
                        <div id="prevAndNextDivV2">
                            <div id="newsPagenation12" class="newsPagenation" style="display: block !important;">
                                <div class="pagenationV2">
                                    @if(isset($pre_new))
                                    <span class="pageTag">上一篇</span>
                                    <a hidefocus="true" href="{{route('news.show',$pre_new->id)}}">{{$pre_new->title}}</a>
                                    @endif
                                </div>
                                @if(isset($next_new))
                                <div class="pagenationV2">
                                    <span class="pageTag">下一篇</span>
                                    <a hidefocus="true" href="{{route('news.show',$next_new->id)}}">{{$next_new->title}}</a>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="newsGroup">
                            <span class="newsGroupName">文章分类：</span>
                            <a class="newsGroupTag" href="nr.jsp?mid=12&amp;groupId=1" target="_self">{{$new->type()->first()->name}}</a>
                        </div>
                        {{--<div class="shareInfo">--}}
                            {{--<span class="shareTag">分享到：</span>--}}
                            {{--<div class="shareListPanel">--}}
                                {{--<a class="shareIcon Weixin" hidefocus="true" title="分享到 微信" href="javascript:;" onclick="Site.wxShareAlter('/qrCode.jsp?cmd=mobiDetailQR&amp;id=10&amp;lcid=2052&amp;size=190&amp;t=1', true);return false;"></a>--}}
                                {{--<a class="shareIcon sina_weibo" hidefocus="true" title="分享到 新浪微博" href="javascript:;" onclick="window.open(&quot;http://service.weibo.com/share/share.php?title=%E3%80%90%E5%B1%B1%E4%B8%9C%E7%90%86%E5%B7%A5%E5%A4%A7%E5%AD%A6%E4%B8%A4%E4%B8%AD%E5%BF%83%E8%8E%B7%E6%89%B9%E7%9C%81%E9%AB%98%E7%AD%89%E5%AD%A6%E6%A0%A1%E5%8D%8F%E5%90%8C%E5%88%9B%E6%96%B0%E4%B8%AD%E5%BF%83+-+-%E3%80%91http%3A%2F%2Fwww.ko15238176.icoc.bz%2Fnd.jsp%3Fid%3D10%26_sc%3D2&amp;url=http%3A%2F%2Fwww.ko15238176.icoc.bz%2Fnd.jsp%3Fid%3D10%26_sc%3D2&amp;pic=&quot;)"></a>--}}
                                {{--<a class="shareIcon qq_zone" hidefocus="true" title="分享到 QQ空间" href="javascript:;" onclick="window.open(&quot;http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?summary=http%3A%2F%2Fwww.ko15238176.icoc.bz%2Fnd.jsp%3Fid%3D10%26_sc%3D2&amp;url=http%3A%2F%2Fwww.ko15238176.icoc.bz%2Fnd.jsp%3Fid%3D10%26_sc%3D2&amp;pics=&amp;title=%E3%80%90%E5%B1%B1%E4%B8%9C%E7%90%86%E5%B7%A5%E5%A4%A7%E5%AD%A6%E4%B8%A4%E4%B8%AD%E5%BF%83%E8%8E%B7%E6%89%B9%E7%9C%81%E9%AB%98%E7%AD%89%E5%AD%A6%E6%A0%A1%E5%8D%8F%E5%90%8C%E5%88%9B%E6%96%B0%E4%B8%AD%E5%BF%83+-+-%E3%80%91&quot;)"></a>--}}
                                {{--<a class="shareIcon douban" hidefocus="true" title="分享到 豆瓣网" href="javascript:;" onclick="window.open(&quot;http://shuo.douban.com/!service/share?name=%E3%80%90%E5%B1%B1%E4%B8%9C%E7%90%86%E5%B7%A5%E5%A4%A7%E5%AD%A6%E4%B8%A4%E4%B8%AD%E5%BF%83%E8%8E%B7%E6%89%B9%E7%9C%81%E9%AB%98%E7%AD%89%E5%AD%A6%E6%A0%A1%E5%8D%8F%E5%90%8C%E5%88%9B%E6%96%B0%E4%B8%AD%E5%BF%83+-+-%E3%80%91http%3A%2F%2Fwww.ko15238176.icoc.bz%2Fnd.jsp%3Fid%3D10%26_sc%3D2&amp;text=http%3A%2F%2Fwww.ko15238176.icoc.bz%2Fnd.jsp%3Fid%3D10%26_sc%3D2&amp;image=&quot;)"></a>--}}
                                {{--<a hidefocus="true" title="分享到 百度贴吧" href="javascript:;" onclick="Fai.ing('由于百度贴吧网址要求限制，免费域名网址暂不支持分享。',true);return false;" '=""><span class="shareIcon baidu_tieba"></span></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="clearfloat"></div>
                    </div>
                </div>
            </div> </td>
        <td class="formMiddleRight formMiddleRight12"></td>
    </tr>
    </tbody>
</table>