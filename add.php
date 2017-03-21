<html>
<body>
<!-- 当提交数据时会提交到add.hanle.php的页面 -->
    <form action="add.handle.php" method="post">
    <!--  input 中type 的类型默认为text;name来定义元素的名称，只有设置了name的属性的表单元素才能在提交
    表单时传递他们的值-->
    name:<input type="text" name="name">
    <br>
    content:<input type="text" name="content"><br>
    price:<input type="text" name="price"><br>
    <input type="submit" value="提交">
   </form>
</body>
</html>
