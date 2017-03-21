<?php 
//修改name，动态传递name的值，不需要再输入
$name=$_GET['name'];
?>
<html>
<body>
    <form action="modify.handle.php" method="post">
    name:<input type="text" name="name" value="<?php echo $name?>">
    <br>
    content:<input type="text" name="content"><br>
    price:<input type="text" name="price"><br>
    <input type="submit" value="提交">
   </form>
</body>
</html>
