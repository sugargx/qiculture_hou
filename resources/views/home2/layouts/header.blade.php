@php
    $banners = \App\Http\Model\Banner::where('show',1)->where('rank',1)->orderBy('order','asc')->get();
@endphp
<style type="text/css">
    .itemCenter a:hover{
        background-color: #824f2b;
    }
</style>
<table class="webNavTable" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td align="center">
            <div id="webNav" class="webNav">
                <div id="navV2Wrap">
                    <div id="navV2" class="nav navV2">
                        <div class="navMainContent">
                            <div class="navContent">
                                <div id="navCenterContent" class="navCenterContent">
                                    <div id="navCenter" class="navCenter">
                                        <div class="itemPrev"></div>
                                        <div class="itemContainer">
                                            @foreach($banners as $banner)
                                            <div title="" id="nav2" class="item itemCol2 itemIndex1" colid="2">
                                                <div class="itemCenter">
                                                    <a href="{{url($banner->url)}}" style="outline:none;"><span class="itemName0">{{$banner->title}}</span></a>
                                                </div>
                                            </div>
                                            <div class="itemSep"></div>
                                            @endforeach
                                        </div>
                                        <div class="itemNext"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<table class="webHeaderTable J_webHeaderTable" cellpadding="0" cellspacing="0" id="webHeaderTable">
    <tbody>
    <tr>
        <td align="center" class="J_webHeaderTable webHeaderTd fk-moduleZoneWrap">
            <a href="{{url('/')}}">
                <div id="fk-webHeaderZone" class="elemZone elemZoneModule J_moduleZone fk-webHeaderZone fk-moduleZone forms sideForms">
                <div id="module605" bannertitle="图片" _indexclass="formIndex2" _moduletype="1" _modulestyle="79" _moduleid="605" class="form form605 formIndex2 formStyle79 formInZone " title="" _sys="0" _banid="" style="position:absolute;top:71px;left:10px;width:56px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
                    <div class="lightModuleOuterContent lightModuleOuterContent605">
                        <div class="floatImg floatImg_J floatImg_J_special">
                            <a hidefocus="true" class="J_floatImg_jump f_floatImg_jump" href="{{url('/')}}">
                                <div class="floatImgWrap">
                                    <div class="forMargin">
                                        <img id="float_img_605" class="float_in_img J_defImage " src="{{asset('images/ABUIABAEGAAg4a-L0gUoiZznvQYwkAM4kAM!60x60.png')}}" alt="ABUIABAEGAAg4a-L0gUoiZznvQYwkAM4kAM" />
                                    </div>
                                </div></a>
                        </div>
                    </div>
                </div>
                <div id="module610" bannertitle="图片" _indexclass="formIndex3" _moduletype="1" _modulestyle="79" _moduleid="610" class="form form610 formIndex3 formStyle79 formInZone " title="" _sys="0" _banid="" style="position:absolute;top:67px;left:127px;width:38px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
                    <div class="lightModuleOuterContent lightModuleOuterContent610">
                        <div class="floatImg floatImg_J floatImg_J_special">
                            <a hidefocus="true" class="J_floatImg_jump f_floatImg_jump " href="{{url('/')}}">
                                <div class="floatImgWrap">
                                    <div class="forMargin">
                                        <img id="float_img_610" class="float_in_img J_defImage " src="{{asset('images/ABUIABAEGAAggrbL0gUo07iPuAcw6AY4xAk!60x60.png')}}" alt="ABUIABAEGAAggrbL0gUo07iPuAcw6AY4xAk" />
                                    </div>
                                </div></a>
                        </div>
                    </div>
                </div>
                <div id="module614" bannertitle="图片" _indexclass="formIndex4" _moduletype="1" _modulestyle="79" _moduleid="614" class="form form614 formIndex4 formStyle79 formInZone " title="" _sys="0" _banid="" style="position:absolute;top:65px;left:171px;width:59px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
                    <div class="lightModuleOuterContent lightModuleOuterContent614">
                        <div class="floatImg floatImg_J floatImg_J_special">
                            <a hidefocus="true" class="J_floatImg_jump f_floatImg_jump " href="{{url('/')}}">
                                <div class="floatImgWrap">
                                    <div class="forMargin">
                                        <img id="float_img_614" class="float_in_img J_defImage " src="{{asset('images/ABUIABAEGAAgiL-L0gUoxafG-AEwkAM4kAM!100x100.png')}}" alt="ABUIABAEGAAgiL-L0gUoxafG-AEwkAM4kAM" />
                                    </div>
                                </div></a>
                        </div>
                    </div>
                </div>
                <div id="module615" bannertitle="图片" _indexclass="formIndex5" _moduletype="1" _modulestyle="79" _moduleid="615" class="form form615 formIndex5 formStyle79 formInZone " title="" _sys="0" _banid="" style="position:absolute;top:71px;left:230px;width:60px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
                    <div class="lightModuleOuterContent lightModuleOuterContent615">
                        <div class="floatImg floatImg_J floatImg_J_special">
                            <a hidefocus="true" class="J_floatImg_jump f_floatImg_jump " href="{{url('/')}}">
                                <div class="floatImgWrap">
                                    <div class="forMargin">
                                        <img id="float_img_615" class="float_in_img J_defImage " src="{{asset('images/ABUIABAEGAAg5MHL0gUontGQpwUwkAM4kAM!60x60.png')}}" alt="ABUIABAEGAAg5MHL0gUontGQpwUwkAM4kAM" />
                                    </div>
                                </div></a>
                        </div>
                    </div>
                </div>
                <div id="module616" bannertitle="图片" _indexclass="formIndex6" _moduletype="1" _modulestyle="79" _moduleid="616" class="form form616 formIndex6 formStyle79 formInZone " title="" _sys="0" _banid="" style="position:absolute;top:65px;left:290px;width:53px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
                    <div class="lightModuleOuterContent lightModuleOuterContent616">
                        <div class="floatImg floatImg_J floatImg_J_special">
                            <a hidefocus="true" class="J_floatImg_jump f_floatImg_jump " href="{{url('/')}}">
                                <div class="floatImgWrap">
                                    <div class="forMargin">
                                        <img id="float_img_616" class="float_in_img J_defImage " src="{{asset('images/ABUIABAEGAAg4orM0gUo_N-2hwQwkAM4kAM!60x60.png')}}" alt="ABUIABAEGAAg4orM0gUo_N-2hwQwkAM4kAM" />
                                    </div>
                                </div></a>
                        </div>
                    </div>
                </div>
                <div id="module617" bannertitle="图片" _indexclass="formIndex7" _moduletype="1" _modulestyle="79" _moduleid="617" class="form form617 formIndex7 formStyle79 formInZone " title="" _sys="0" _banid="" style="position:absolute;top:65px;left:343px;width:58px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
                    <div class="lightModuleOuterContent lightModuleOuterContent617">
                        <div class="floatImg floatImg_J floatImg_J_special">
                            <a hidefocus="true" class="J_floatImg_jump f_floatImg_jump " href="{{url('/')}}">
                                <div class="floatImgWrap">
                                    <div class="forMargin">
                                        <img id="float_img_617" class="float_in_img J_defImage " src="{{asset('images/ABUIABAEGAAgzI3M0gUo5oK0owUwkAM4kAM!60x60.png')}}" alt="ABUIABAEGAAgzI3M0gUo5oK0owUwkAM4kAM" />
                                    </div>
                                </div></a>
                        </div>
                    </div>
                </div>
                <div id="module712" _indexclass="formIndex8" _moduletype="1" _modulestyle="62" _moduleid="712" class="form  formIndex8 formStyle62 formInZone " title="" _sys="0" _banid="" style="position:absolute;top:77px;left:726px;width:342px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="1" _global="true" _independent="false">
                    <table class="formTop formTop712" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <td class="left"></td>
                            <td class="center"></td>
                            <td class="right"></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class=" formMiddle formMiddle712" style="" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <td class="formMiddleLeft formMiddleLeft712"></td>
                            <td class="formMiddleCenter formMiddleCenter712 " valign="top">
                                <div class="formMiddleContent formMiddleContent712 fk-formContentOtherPadding" tabstyle="0">
                                    <form action="{{url('search')}}" method="post">
                                        <input name="key" style="display: inline !important;width: 55%;" class="form-control form-inline" type="text" maxlength="100" value="" placeholder="" '="" _nsl="[]" />
                                        @csrf
                                        <input class="btn btn-search" type="submit" value="搜索">
                                    </form>
                                </div>
                            </td>
                            <td class="formMiddleRight formMiddleRight712"></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="formBottom formBottom712" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <td class="left left712"></td>
                            <td class="center center712"></td>
                            <td class="right right712"></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="clearfloat clearfloat712"></div>
                </div>
                <div id="module808" bannertitle="图片" _indexclass="formIndex9" _moduletype="1" _modulestyle="79" _moduleid="808" class="form form808 formIndex9 formStyle79 formInZone " title="" _sys="0" _banid="" style="position:absolute;top:66px;left:66px;width:66px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="0" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
                    <div class="lightModuleOuterContent lightModuleOuterContent808">
                        <div class="floatImg floatImg_J floatImg_J_special">
                            <a hidefocus="true" class="J_floatImg_jump f_floatImg_jump " href="{{url('/')}}">
                                <div class="floatImgWrap">
                                    <div class="forMargin">
                                        <img id="float_img_808" class="float_in_img J_defImage " src="{{asset('images/ABUIABAEGAAgtbPL0gUoxr7bzgUwtwQ4twQ!100x100.png')}}" alt="ABUIABAEGAAgtbPL0gUoxr7bzgUwtwQ4twQ" />
                                    </div>
                                </div></a>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </td>
    </tr>
    </tbody>
</table>