@php
    $info = \App\Http\Model\WebInformation::first();
@endphp
<div id="webFooter" class="webFooter">
    <div id="footer" class="footer">
        <table class="footerMiddle" cellpadding="0" cellspacing="0">
            <tbody>
            <tr valign="top">
                <td class="middleLeft"></td>
                <td class="middleCenter" align="center">
                    <div class="footerContent">
                        <div class="footerInfo">
                            <p><span style="font-family:arial;"></span></p>
                            <p style="line-height:2.5em;"><span style="font-family:微软雅黑;">{{$info->banquan}} &nbsp; {{$info->adress}} 技术支持：<a href="https://www.mengyakeji.com/" target="_blank">萌芽科技</a></span></p>
                        </div>
                    </div> </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>