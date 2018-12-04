<div id="module670" _indexclass="" _moduletype="1" _modulestyle="7" _moduleid="670" class="form form670 formStyle7 formInMulMCol " title="" _sys="0" _banid="" style="" _side="0" _intab="0" _inmulmcol="399" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="1" _global="false" _independent="false">
    <table class="formTop formTop670" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="left"></td>
            <td class="center"></td>
            <td class="right"></td>
        </tr>
        </tbody>
    </table>
    <table class="formBanner formBanner670" cellpadding="0" cellspacing="0" style="">
        <tbody>
        <tr>
            <td class="left left670"></td>
            <td class="center center670" valign="top">
                <table cellpadding="0" cellspacing="0" class="formBannerTitle formBannerTitle670">
                    <tbody>
                    <tr>
                        <td class="titleLeft titleLeft670" valign="top"> </td>
                        <td class="titleCenter titleCenter670" valign="top">
                            <div class="titleText titleText670">
                                <span class="bannerNormalTitle fk_mainTitle mainTitle mainTitle670">{{$newtype->name}}</span>
                            </div> </td>
                        <td class="titleRight titleRight670" valign="top"> </td>
                    </tr>
                    </tbody>
                </table>
                <div class="formBannerOther formBannerOther670">
                    <div class="formBannerMore formBannerMore670" style="">
                        <span style="_display:inline-block;_position:relative;"> <a hidefocus="true" class="bannerMoreInnerA" href="{{url("newtype/$newtype->id")}}"><span class="bannerMoreInnerSpan">更多&gt;&gt;</span></a> </span>
                    </div>
                    <div class="formBannerBtn formBannerBtn670">
                        <span style="_display:inline-block;_position:relative;"><a hidefocus="true" href="javascript:;" onclick="Site.closeAd(&quot;module670&quot;);return false;" class="g_close"><span class="bannerMoreInnerSpan" style="_display:none;">&nbsp;</span></a> </span>
                    </div> &nbsp;
                </div> </td>
            <td class="right right670"></td>
        </tr>
        </tbody>
    </table>
    <table class=" formMiddle formMiddle670" style="" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="formMiddleLeft formMiddleLeft670"></td>
            <td class="formMiddleCenter formMiddleCenter670 " valign="top">
                <div class="formMiddleContent formMiddleContent670 fk-formContentOtherPadding" tabstyle="0">
                    <div>
                        <div class="newsList J_newsList  " id="newsList670" _showsetting="0" newslisttype="0" scroll="0">
                            @foreach($news as $new)
                                <div topclassname="top1" topswitch="on" newsid="106" newsname="{{$new->title}}" class="J_newsListLine line g_item   fk-newsLineHeight ">
                                    <table id="lineBody106" class="J_lineBody lineBody" cellpadding="0" cellspacing="0">
                                        <tbody>
                                        <tr id="module670tr106">
                                            <td class="contentLineIcon "></td>
                                            <td class="J_newsTitle newsTitle" valign="top">
                                                <div class="J_newsListTopFlag "></div> <a class="fk-newsListTitle" hidefocus="true" href="{{route('news.show',$new->id)}}" target="_blank" title="{{$new->title}}">{{$new->title}}</a> </td>
                                            <td class="J_newsCalendar newsCalendar" valign="top"> <a class="fk-newsListDate" hidefocus="true" href="nd.jsp?id=106#_np=7_670" target="_blank">{{date('Y-m-d',strtotime($new->created_at))}}</a> </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="J_separatorLine separatorLine g_separator "></div>
                            @endforeach
                            <div class="clearfloat"></div>
                        </div>
                    </div>
                </div> </td>
            <td class="formMiddleRight formMiddleRight670"></td>
        </tr>
        </tbody>
    </table>
    <table class="formBottom formBottom670" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="left left670"></td>
            <td class="center center670"></td>
            <td class="right right670"></td>
        </tr>
        </tbody>
    </table>
    <div class="clearfloat clearfloat670"></div>
</div>
