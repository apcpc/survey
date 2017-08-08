<div class="survey_menu">
    <ul class="layui-nav layui-nav-tree layui-nav-side" lay-filter="demo" style="margin-top:60px">
        <li class="layui-nav-item layui-nav-itemed">
            <a href="javascript:;">用户管理</a>
            <dl class="layui-nav-child">
                <dd><a href="javascript:;">用户列表</a></dd>
                <dd><a href="javascript:;">密码修改</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item layui-nav-itemed">
            <a href="javascript:;">模版控件管理</a>
            <dl class="layui-nav-child">
                <dd class="layui-this"><a href="javascript:;">控件列表</a></dd>
                <dd><a href="javascript:;">添加控件</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="javascript:;">调查卷模版</a></li>
        <li class="layui-nav-item"><a href="javascript:;">用户模版管理</a></li>
    </ul>
</div>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script src="/survey/asset/js/modules/element.js"></script>
<script>
    layui.use('element', function () {
        var element = layui.element(); //导航的hover效果、二级菜单等功能，需要依赖element模块

        //监听导航点击
        element.on('nav(demo)', function (elem) {
            console.log(elem)
            layer.msg(elem.text());
        });
    });
</script>