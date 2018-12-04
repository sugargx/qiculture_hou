@php
    if(count($newtypes)>0){
        $newtype = $newtypes[0];
        $news = $newtype->news()->orderby('created_at','desc')->get()->take(5);
    }
@endphp

@if(isset($news)&&count($news)>=1)
<div id="module707" bannertitle="文本" _indexclass="" _moduletype="1" _modulestyle="86" _moduleid="707" class="form form707 formStyle86 siteEditor " title="" _sys="0" _banid="" style="position:absolute;top:95px;left:336px;width:420px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="606" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
    <div class="lightModuleOuterContent lightModuleOuterContent707">
        <div class="fk-editor simpleText fk-editor-break-word">
            <span style="font-family: &quot;&quot;; text-align: center; display: block;">
                <b>
                    <span style="color: rgb(0, 0, 0);">
                        <a href="{{route('news.show',$news[0]->id)}}" target="_blank">{{$news[0]->title}}</a>
                    </span>
                </b>
            </span>
            <span style="font-size: 16px;line-height: 20px">
                {{mb_substr($news[0]->description,0,50)}}
            </span>
        </div>
    </div>
</div>
@endif
<div id="module709" bannertitle="按钮" _indexclass="" _moduletype="1" _modulestyle="81" _moduleid="709" class="form form709 formStyle81" title="" _sys="0" _banid="" style="position:absolute;top:38px;left:326px;width:422px; ;border:10px solid transparent;margin-top:-10px;margin-left:-10px; " _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="606" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
    <div class="lightModuleOuterContent lightModuleOuterContent709">
        <div class="J_floatBtnBox floatBtnBox floatBtnStyle floatBtnStyle0 fk-newAM-FloatBtnStyle0">
            <a id="module709FlBtn" href="@if(isset($newtype)){{url("newtype/$newtype->id" )}}@endif" target="_self" class="middle floatBtn" style="cursor: default;">@if(isset($newtype)){{$newtype->name}}@endif</a>
        </div>
    </div>
</div>
<div id="module711" _indexclass="" _moduletype="1" _modulestyle="7" _moduleid="711" class="form form711 formStyle7" title="" _sys="0" _banid="" style="position:absolute;top:172px;left:321px;width:422px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="606" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
    <table class="formTop formTop711" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="left"></td>
            <td class="center"></td>
            <td class="right"></td>
        </tr>
        </tbody>
    </table>

    <table class=" formMiddle formMiddle711" style="height:203px; " cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="formMiddleLeft formMiddleLeft711"></td>
            <td class="formMiddleCenter formMiddleCenter711 " valign="top">
                <div class="formMiddleContent formMiddleContent711 fk-formContentOtherPadding" tabstyle="0">
                    <div>
                        <div class="newsList J_newsList  " id="newsList711" _showsetting="0" newslisttype="0" scroll="0">
                            @if(isset($news)&&count($news)>=2)
                                @foreach($news as $index => $new)
                                    @if($index == 0)
                                        @continue
                                    @endif
                            <div topclassname="top2" topswitch="off" newsid="104" newsname="{{$new->title}}" class="J_newsListLine line g_item   fk-newsLineHeight my_hover">
                                <table id="lineBody104" class="J_lineBody lineBody" cellpadding="0" cellspacing="0">
                                    <tbody>
                                    <tr id="module711tr104">
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
            <td class="formMiddleRight formMiddleRight711"></td>
        </tr>
        </tbody>
    </table>


    <table class="formBottom formBottom711" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="left left711"></td>
            <td class="center center711"></td>
            <td class="right right711"></td>
        </tr>
        </tbody>
    </table>
    <div class="clearfloat clearfloat711"></div>
</div>
