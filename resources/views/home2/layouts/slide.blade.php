
<div id="module783" _indexclass="" _moduletype="1" _modulestyle="7" _moduleid="783" class="form form783 formStyle7" title="" _sys="0" _banid="" style="position:absolute;top:28px;left:780px;width:300px;" _side="0" _intab="0" _inmulmcol="0" _infullmeasure="0" _inpack="606" _inpopupzone="0" _autoheight="1" _global="false" _independent="false">
    <table class="formTop formTop783" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="left"></td>
            <td class="center"></td>
            <td class="right"></td>
        </tr>
        </tbody>
    </table>
    <table class=" formMiddle formMiddle783" style="height:310px; " cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td class="formMiddleLeft formMiddleLeft783"></td>

            <td class="formMiddleCenter formMiddleCenter783 " valign="top">
                <div class="formMiddleContent formMiddleContent783 fk-formContentOtherPadding" tabstyle="0">
                    <div>
                        <div class="newsList J_newsList  " id="newsList783" _showsetting="0" newslisttype="0" scroll="0">
                            <div style="width:250px;height: 310px;">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 275px;height:300px">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators" style="bottom:20px">
                                    @foreach($slides as $index => $slide)

                                        <li data-target="#carousel-example-generic" data-slide-to="{{$index}}" @if($index==0) class="active" @endif></li>

                                    @endforeach
                                    </ol>

                                    <!-- Wrapper for slides -->

                                    <div class="carousel-inner" role="listbox">
                                        @foreach($slides as $index => $slide)
                                        <div class="item @if($index == 0) active @endif" style="width: 275px;height:310px">
                                            <a href="{{$slide->link}}">
                                                <img src="{{asset($slide->image)}}" alt="..." style="width: 275px;height:310px">
                                                <div class="carousel-caption" style="left: 0;right:0;width:280px;padding-bottom: 0">
                                                    <div>{{$slide->title}}</div>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
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
