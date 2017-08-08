<div style="clear:both ;
    border-top: 1px solid rgba(0,0,0,0.07);
    background-color: #f3f5f9;
    color: #758697;
    position: absolute;
    padding-top: 10px;
    bottom: 0;
    z-index: 2;
    left: 200px;
    right: 0;
    height:30px;">

    <div class="foot_right">Copyright © 2002-2017 青岛雨诺网络信息股份有限公司</div>
</div>
<script>
   $(function(){
       $('#widgetBtn').click(function(){
           var title=$('input:eq(0)').val();
           var widgetType=$('.widgetType').val();
           var content=$('form').html();
           alert(title);
           alert(widgetType);
          $.ajax({
              type:"post",
              data:{"title":title,"content":content,"type":widgetType},
              url:"save",
              dataType:"json",
              success:function(event){
                 if(event.status==200){
                     alert(event.content);
                 }
              }

          })
       })
   })
</script>
</body>
</html>