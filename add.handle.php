<?php
require_once 'connect.php';
//ֻ����һ��connect.php
//�ڶ����������ǰ���$
//$_POST�ǵ�����ֵ�����ó��Ǹ����ݣ������ݴ�����ȥ��$_GET�Ƕ�̬��ֵ��ͨ����������������
$name=$_POST['name'];
$content=$_POST['content'];
$price=$_POST['price'];
echo $name;
$sql="insert into library(name,content,price) values('$name','$content',$price)";


//ʹ��JavaScript��䣬��ִ�гɹ�ʱ������һ��С�ĶԻ��򣬲����ڴ�һ����ҳ����ִ����ɺ�ֱ����ת��select���档
if(mysqli_query($con,$sql))
{
    echo "<script>alert('add success!');window.location.href='select.php';</script>";}
    else{
    echo "<script>alert('add failed!');window.location.href='select.php';</script>";
}