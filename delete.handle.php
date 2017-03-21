<?php
require_once 'connect.php';
$name=$_GET['name'];
//动态获取name的信息，这样方便操作，不需要delete一次再返回修改一次name的值。
$sql="delete from library where name='$name'";//调取sql中已有的name的值

//同样，使用JavaScript来弹出一小的对话框，执行完成后又直接跳转到SELECT界面。
if(mysqli_query($con,$sql))
{
    echo "<script>alert('delet success!');window.location.href='select.php';</script>";}
  else{  echo "<script>alert('delet failed!');window.location.href='select.php';</script>";
}