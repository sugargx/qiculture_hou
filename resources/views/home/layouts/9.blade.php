@php
    $newstype = \App\Http\Model\IndexColumn::find(7)->news_type()->first();
    if($newstype){
        $news = $newstype->news()->orderby('created_at','desc')->get()->take(5);
    }

@endphp

<div class="J_packContent f-packContent f-packContent729 elemZone elemZoneModule" id="fk-packContent729">
    <div class="fk-elemZoneBg J_zoneContentBg elemZoneBg f-packContentBg f-packContentBg729"></div>
    <div id="module731" _indexclass="" _moduletype="1" _modulestyle="7" _moduleid="731" systempattern="479" class="form form731 formStyle7 jz-modulePattern479" title="" _sys="0" _banid="" style="position:absolute;top:14px;left:-3px;width:1087px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="729" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
        <table class="formTop formTop731" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td class="left"></td>
                <td class="center"></td>
                <td class="right"></td>
            </tr>
            </tbody>
        </table>
        <table class="formBanner formBanner731" cellpadding="0" cellspacing="0" style="">
            <tbody>
            <tr>
                <td class="left left731"></td>
                <td class="center center731" valign="top">
                    <table cellpadding="0" cellspacing="0" class="formBannerTitle formBannerTitle731">
                        <tbody>
                        <tr>
                            <td class="titleLeft titleLeft731" valign="top"> </td>
                            <td class="titleCenter titleCenter731" valign="top">
                                <div class="titleText titleText731">
                                    <span class="bannerNormalTitle fk_mainTitle mainTitle mainTitle731">@if(isset($newstype)){{$newstype->index_column()->first()->name}}@endif</span>
                                </div> </td>
                            <td class="titleRight titleRight731" valign="top"> </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="formBannerOther formBannerOther731">
                        <div class="formBannerMore formBannerMore731" style="">
                            <span style="_display:inline-block;_position:relative;"> <a hidefocus="true" class="bannerMoreInnerA" href="{{url('guanzi')}}"><span class="bannerMoreInnerSpan">更多&gt;&gt;</span></a> </span>
                        </div>
                        <div class="formBannerBtn formBannerBtn731">
                            <span style="_display:inline-block;_position:relative;"><a hidefocus="true" href="javascript:;" onclick="Site.closeAd(&quot;module731&quot;);return false;" class="g_close"><span class="bannerMoreInnerSpan" style="_display:none;">&nbsp;</span></a> </span>
                        </div> &nbsp;
                    </div> </td>
                <td class="right right731"></td>
            </tr>
            </tbody>
        </table>
        <table class=" formMiddle formMiddle731" style="height:247px; " cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td class="formMiddleLeft formMiddleLeft731"></td>
                <td class="formMiddleCenter formMiddleCenter731 " valign="top">
                    <div class="formMiddleContent formMiddleContent731 fk-formContentOtherPadding" tabstyle="0">
                        <div>
                            <div class="newsList J_newsList  " id="newsList731" _showsetting="0" newslisttype="0" scroll="0">
                                @if(isset($news))
                                    @foreach($news as $new)
                                    <div topclassname="top2" topswitch="off" newsid="80" newsname="{{$new->title}}" class="J_newsListLine line g_item   fk-newsLineHeight my_hover">
                                        <table id="lineBody80" class="J_lineBody lineBody" cellpadding="0" cellspacing="0">
                                            <tbody>
                                            <tr id="module731tr80">
                                                <td class="contentLineIcon "></td>
                                                <td class="J_newsTitle newsTitle" valign="top">
                                                    <div class="J_newsListTopFlag "></div> <a class="fk-newsListTitle" hidefocus="true" href="{{route('news.show',$new->id)}}" target="_blank" title="{{$new->title}}">{{$new->title}}</a> </td>
                                                <td class="J_newsCalendar newsCalendar" valign="top"> <a class="fk-newsListDate" hidefocus="true" href="#">{{ date('Y-m-d',strtotime($new->created_at))}}</a> </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="J_separatorLine separatorLine g_separator "></div>
                                    @endforeach
                                @endif
                                <div class="clearfloat"></div>
                            </div>
                        </div>
                    </div> </td>
                <td class="formMiddleRight formMiddleRight731"></td>
            </tr>
            </tbody>
        </table>
        <table class="formBottom formBottom731" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td class="left left731"></td>
                <td class="center center731"></td>
                <td class="right right731"></td>
            </tr>
            </tbody>
        </table>
        <div class="clearfloat clearfloat731"></div>
    </div>

    <div id="module734" bannertitle="图片" _indexclass="" _moduletype="1" _modulestyle="79" _moduleid="734" class="form form734 formStyle79" title="" _sys="0" _banid="" style="position:absolute;top:79px;left:599px;width:126px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="729" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
        <div class="lightModuleOuterContent lightModuleOuterContent734">
            <div class="floatImg floatImg_J floatImg_J_special">
                <a hidefocus="true" href="@if(count($news)>=1){{route('news.show',$news[0]->id)}}@endif" class="J_floatImg_jump f_floatImg_jump ">
                    <div class="floatImgWrap">
                        <div class="forMargin">
                            <img id="float_img_734" class="float_in_img J_defImage " src="{{asset('images/book3.jpg')}}" alt="ABUIABACGAAgp53S0gUot4y-6wYw_wM4yQU" style="width:136px;height: 177px;"/>
                        </div>
                    </div></a>
            </div>
        </div>
    </div>
    <div id="module735" bannertitle="图片" _indexclass="" _moduletype="1" _modulestyle="79" _moduleid="735" class="form form735 formStyle79" title="" _sys="0" _banid="" style="position:absolute;top:77px;left:753px;width:133px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="729" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
        <div class="lightModuleOuterContent lightModuleOuterContent735">
            <div class="floatImg floatImg_J floatImg_J_special">
                <a hidefocus="true" href="@if(count($news)>=1){{route('news.show',$news[0]->id)}}@endif" class="J_floatImg_jump f_floatImg_jump ">
                    <div class="floatImgWrap">
                        <div class="forMargin">
                            <img id="float_img_735" class="float_in_img J_defImage " src="{{asset('images/book2.jpg')}}" alt="ABUIABACGAAg353S0gUo0PW9pgQwiAI45gI" style="width:136px;height: 177px;"/>
                        </div>
                    </div></a>
            </div>
        </div>
    </div>
    <div id="module736" bannertitle="图片" _indexclass="" _moduletype="1" _modulestyle="79" _moduleid="736" class="form form736 formStyle79" title="" _sys="0" _banid="" style="position:absolute;top:77px;left:911px;width:136px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="729" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
        <div class="lightModuleOuterContent lightModuleOuterContent736">
            <div class="floatImg floatImg_J floatImg_J_special">
                <a hidefocus="true" href="@if(count($news)>=1){{route('news.show',$news[0]->id)}}@endif" class="J_floatImg_jump f_floatImg_jump ">
                    <div class="floatImgWrap">
                        <div class="forMargin">
                            <img id="float_img_736" class="float_in_img J_defImage " src="{{asset('images/book1.jpg')}}" alt="ABUIABACGAAg3Z3S0gUozNW1rQQw5AE4twI" style="width:136px;height: 177px;"/>
                        </div>
                    </div></a>
            </div>
        </div>
    </div>
</div>