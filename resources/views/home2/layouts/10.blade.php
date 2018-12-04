@php
    $friendsLinks = \App\Http\Model\ImageNew::where('show',1)->orderBy('order','asc')->get();
@endphp
<style type="text/css">
    .container2 {
        width:1050px;
        height: 250px;
        margin:20px auto;
        overflow: hidden;
    }
    .container2 ul {
        display: table-cell;
    }
    .container2 li {
        display: table-cell;
        text-align: center;
    }
</style>
<div class="J_packContent f-packContent f-packContent733 elemZone elemZoneModule" id="fk-packContent733">
    <div class="fk-elemZoneBg J_zoneContentBg elemZoneBg f-packContentBg f-packContentBg733"></div>
    <div id="module737" _indexclass="" _moduletype="1" _modulestyle="90" _moduleid="737" systempattern="479" class="form form737 formStyle90 jz-modulePattern479" title="" _sys="0" _banid="" style="position:absolute;top:14px;left:2px;width:1075px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="733" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
        <table class="formTop formTop737" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td class="left"></td>
                <td class="center"></td>
                <td class="right"></td>
            </tr>
            </tbody>
        </table>
        <table class="formBanner formBanner737" cellpadding="0" cellspacing="0" style="">
            <tbody>
            <tr>
                <td class="left left737"></td>
                <td class="center center737" valign="top">
                    <table cellpadding="0" cellspacing="0" class="formBannerTitle formBannerTitle737">
                        <tbody>
                        <tr>
                            <td class="titleLeft titleLeft737" valign="top"> </td>
                            <td class="titleCenter titleCenter737" valign="top">
                                <div class="titleText titleText737">
                                    <span class="bannerNormalTitle fk_mainTitle mainTitle mainTitle737">图片新闻</span>
                                </div> </td>
                            <td class="titleRight titleRight737" valign="top"> </td>
                        </tr>
                        </tbody>
                    </table> </td>
                <td class="right right737"></td>
            </tr>
            </tbody>
        </table>
        <table class=" formMiddle formMiddle737" style="height:246px; " cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td class="formMiddleLeft formMiddleLeft737"></td>
                <td class="formMiddleCenter formMiddleCenter737 " valign="top">
                    <div class="formMiddleContent formMiddleContent737 fk-formContentOtherPadding" tabstyle="0">
                        <div class="photoMarqueeForms listPhotosMarquee" newmarqueetoward="0">
                            <div>
                                <div class="demo0 J_photoForms J_listPhotosMarquee" id="demo0737">
                                    <div id="container2" class="container2">
                                        <ul id="ul1">
                                            @foreach($friendsLinks as $link)
                                                <li style="width: 245px;height: 200px">
                                                    <a href="imagenews/{{$link->id}}">
                                                        <img style="margin-right: 20px;width: 245px;height: 170px" src="{{$link->image}}" alt="{{$link->title}}" />
                                                        <p style="font-size: 14px;color: rgb(102, 102, 102)">{{$link->title}}</p>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <ul id="ul2">
                                        </ul>
                                    </div>
                                    {{--<div id="scrollobj" style="white-space:nowrap;overflow:hidden;width:1050px;">--}}
                                        {{--@foreach($friendsLinks as $link)--}}
                                                {{--<img class="J_photoImg photoImg" picsca="2" style="width:230px;height:172px;" src="{{$link->image}}" width="640" height="359" alt="{{$link->title}}" title="" />--}}
                                        {{--@endforeach--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div> </td>
                <td class="formMiddleRight formMiddleRight737"></td>
            </tr>
            </tbody>
        </table>
        <table class="formBottom formBottom737" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td class="left left737"></td>
                <td class="center center737"></td>
                <td class="right right737"></td>
            </tr>
            </tbody>
        </table>
        <div class="clearfloat clearfloat737"></div>
    </div>
</div>
