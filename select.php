<?php
require_once 'connect.php';
//调取SQL从表library调取数据。
$sql="select * from library";
//$temp是个mysqli_result类型的变量
$temp=mysqli_query($con,$sql);
//通过mysqli_fetch_assoc可以将放在$temp中的id,name,content,price拿出来，每次取出来一行
while($row=mysqli_fetch_assoc($temp))
{
//将每次取出来的一行数据放到$data数组当中
    $data[]=$row;
}
?>
<!--添加一个ADD的超链接 -->
<a href="add.php">add</a><br>
<?php 


foreach($data as $everydata)
{
?>

<?php 
//将$data中的每个元素$everyData中的name和price属性输出出来
    echo $everydata['name'].":".$everydata['price'];
?>
<!-- 添加一个delete与modify的超链接，点击超链接直接跳转到相应的网页 -->
    <a href="delete.handle.php?name=<?php  echo $everydata['name']?>">delete</a>
     <a href="modify.php?name=<?php  echo $everydata['name']?>">modify</a>

 <?php 
    echo "<br>";
}
?>