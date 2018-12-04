<div id="module722" bannertitle="按钮" _indexclass="" _moduletype="1" _modulestyle="81" _moduleid="722" class="form form722 formStyle81" title="" _sys="0" _banid="" style="position:absolute;top:-1px;left:-2px;width:306px; ;border:10px solid transparent;margin-top:-10px;margin-left:-10px; " _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="717" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
    <div class="lightModuleOuterContent lightModuleOuterContent722">
        <div class="J_floatBtnBox floatBtnBox floatBtnStyle floatBtnStyle0 fk-newAM-FloatBtnStyle0">
            <a id="module722FlBtn" href="javascript:;" target="_self" class="middle floatBtn" style="cursor: default;">微信公众号</a>
        </div>
    </div>
</div>
<div id="module723" bannertitle="图片" _indexclass="" _moduletype="1" _modulestyle="79" _moduleid="723" class="form form723 formStyle79" title="" _sys="0" _banid="" style="position:absolute;top:59px;left:21px;width:269px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="717" _inpopupzone="0" _autoheight="0" _global="false" _independent="false">
    <div class="lightModuleOuterContent lightModuleOuterContent723">
        <div class="floatImg floatImg_J floatImg_J_special">
            <a hidefocus="true" class="J_floatImg_jump f_floatImg_jump ">
                <div class="floatImgWrap">
                    <div class="forMargin">
                        @php
                            $info = \App\Http\Model\WebInformation::first();
                        @endphp
                        <img id="float_img_723" class="float_in_img J_defImage " src="{{asset($info->qrcode)}}" alt="ABUIABADGAAg8JTS0gUohtOrugUw6wE46QE" />
                    </div>
                </div></a>
        </div>
    </div>
</div>
