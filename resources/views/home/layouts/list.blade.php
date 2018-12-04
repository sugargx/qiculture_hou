@php
    if($newstype){
        $news = $newstype->news()->orderby('created_at','desc')->get()->take(5);
    }

@endphp
<div id="module741" bannertitle="按钮" _indexclass="" _moduletype="1" _modulestyle="81" _moduleid="741" class="form form741 formStyle81" title="" _sys="0" _banid="" style="{{$style}}" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="606" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
    <div class="lightModuleOuterContent lightModuleOuterContent741">
        <div class="J_floatBtnBox floatBtnBox floatBtnStyle floatBtnStyle0 fk-newAM-FloatBtnStyle0">
            <a id="module741FlBtn" href="@if(isset($newstype)){{url("newtype/$newstype->id" )}}@endif" target="_self" class="middle floatBtn" style="cursor: default;@if(isset($width)) width:{{$width}}; @endif">@if(isset($newstype)){{$newstype->index_column()->first()->name}}@endif</a>
        </div>
    </div>
</div>

<div id="module783" _indexclass="" _moduletype="1" _modulestyle="7" _moduleid="783" class="form form783 formStyle7" title="" _sys="0" _banid="" style="{{$style2}}" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="606" _inpopupzone="0" _autoheight="1" _global="false" _independent="false">
    <table class="formTop formTop783" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="left"></td>
            <td class="center"></td>
            <td class="right"></td>
        </tr>
        </tbody>
    </table>
    <table class=" formMiddle formMiddle783" style="height:285px; " cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="formMiddleLeft formMiddleLeft783"></td>

            <td class="formMiddleCenter formMiddleCenter783 " valign="top">
                <div class="formMiddleContent formMiddleContent783 fk-formContentOtherPadding" tabstyle="0">
                    <div>
                        <div class="newsList J_newsList  " id="newsList783" _showsetting="0" newslisttype="0" scroll="0">
                            @if(isset($news))
                                @foreach($news as $new)
                                <div topclassname="top1" topswitch="on" newsid="22" newsname="{{$new->title}}" class="J_newsListLine line g_item   fk-newsLineHeight my_hover">
                                    <table id="lineBody22" class="J_lineBody lineBody" cellpadding="0" cellspacing="0">
                                        <tbody>
                                        <tr id="module783tr22">
                                            <td class="contentLineIcon "></td>
                                            <td class="J_newsTitle newsTitle" valign="top">
                                                <div class="J_newsListTopFlag "></div>
                                                <a class="fk-newsListTitle" hidefocus="true" href="{{route('news.show',$new->id)}}" target="_blank" title="{{$new->title}}">
                                                    {{$new->title}}
                                                </a>
                                            </td>
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
                </div>
            </td>

            <td class="formMiddleRight formMiddleRight783"></td>
        </tr>
        </tbody>
    </table>
    <table class="formBottom formBottom783" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="left left783"></td>
            <td class="center center783"></td>
            <td class="right right783"></td>
        </tr>
        </tbody>
    </table>
    <div class="clearfloat clearfloat783"></div>
</div>