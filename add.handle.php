<?php
require_once 'connect.php';
//只调用一次connect.php
//在定义变量是在前面加$
//$_POST是单个传值，设置成那个数据，将数据传送上去，$_GET是动态传值，通过变量名称来传送
$name=$_POST['name'];
$content=$_POST['content'];
$price=$_POST['price'];
echo $name;
$sql="insert into library(name,content,price) values('$name','$content',$price)";


//使用JavaScript语句，当执行成功时将弹出一个小的对话框，不用在打开一个网页，当执行完成后，直接跳转到select界面。
if(mysqli_query($con,$sql))
{
    echo "<script>alert('add success!');window.location.href='select.php';</script>";}
    else{
    echo "<script>alert('add failed!');window.location.href='select.php';</script>";
}