<?php
require_once 'connect.php';
$name=$_POST['name'];
$content=$_POST['content'];
$sql="update library set content='$content' where name='$name'";
//ͬ����ʹ��JavaScript������һС�ĶԻ���ִ����ɺ���ֱ����ת��SELECT���档
if(mysqli_query($con,$sql))
{
    echo "<script>alert('modify success!');window.location.href='select.php';</script>";}
    else{
    echo "<script>alert('modify failed!');window.location.href='select.php';</script>";
}