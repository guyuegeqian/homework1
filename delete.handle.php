<?php
require_once 'connect.php';
$name=$_GET['name'];
//��̬��ȡname����Ϣ�������������������Ҫdeleteһ���ٷ����޸�һ��name��ֵ��
$sql="delete from library where name='$name'";//��ȡsql�����е�name��ֵ

//ͬ����ʹ��JavaScript������һС�ĶԻ���ִ����ɺ���ֱ����ת��SELECT���档
if(mysqli_query($con,$sql))
{
    echo "<script>alert('delet success!');window.location.href='select.php';</script>";}
  else{  echo "<script>alert('delet failed!');window.location.href='select.php';</script>";
}