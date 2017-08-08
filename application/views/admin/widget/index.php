<div class="survey_content">
    <?php $this->load->view('menu'); ?>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief" lay-allowclose="true" style="margin-left:200px">
        <ul class="layui-tab-title">
            <li>控件列表</li>
        </ul>
        <div class="layui-tab-content" style="height: 100px;">
            <div class="layui-tab-item layui-show">
                <div class="layui-form">
                    <table class="layui-table">
                        <colgroup>
                            <col width="50">
                            <col width="150">
                            <col width="150">
                            <col width="200">
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose"></th>
                            <th>编号</th>
                            <th>控名称</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($list as $vo): ?>
                        <tr>
                            <td><input type="checkbox" name="" lay-skin="primary"></td>
                            <td><?php echo $vo['id']; ?></td>
                            <td><?php echo $vo['title']; ?></td>
                            <td><?php echo $vo['create_time']; ?></td>
                            <td><a href="">编辑</a> | <a href="<?php echo base_url()."index.php/widget/delete?id=".$vo['id'];?>">删除</a></td>

                        </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>

