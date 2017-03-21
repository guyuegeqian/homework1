<?php
require_once 'connect.php';
$name=$_POST['name'];
$content=$_POST['content'];
$sql="update library set content='$content' where name='$name'";
//同样，使用JavaScript来弹出一小的对话框，执行完成后又直接跳转到SELECT界面。
if(mysqli_query($con,$sql))
{
    echo "<script>alert('modify success!');window.location.href='select.php';</script>";}
    else{
    echo "<script>alert('modify failed!');window.location.href='select.php';</script>";
}