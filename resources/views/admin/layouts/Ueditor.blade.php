<script type="text/javascript" charset="utf-8" src="{{asset("/Ueditor/ueditor.config.js")}}"></script>
<script type="text/javascript" charset="utf-8" src="{{asset("/Ueditor/ueditor.all.min.js")}}"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="{{asset("/Ueditor/lang/zh-cn/zh-cn.js")}}"></script>
<div id="editor" name="content" type="text/plain" style="height: 400px;width: 100%;margin: auto"></div>

<script type="text/javascript" src="{{asset('js/myUeditorConfig.js')}}"></script>