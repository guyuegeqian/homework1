<?php
require_once 'connect.php';
//��ȡSQL�ӱ�library��ȡ���ݡ�
$sql="select * from library";
//$temp�Ǹ�mysqli_result���͵ı���
$temp=mysqli_query($con,$sql);
//ͨ��mysqli_fetch_assoc���Խ�����$temp�е�id,name,content,price�ó�����ÿ��ȡ����һ��
while($row=mysqli_fetch_assoc($temp))
{
//��ÿ��ȡ������һ�����ݷŵ�$data���鵱��
    $data[]=$row;
}
?>
<!--���һ��ADD�ĳ����� -->
<a href="add.php">add</a><br>
<?php 


foreach($data as $everydata)
{
?>

<?php 
//��$data�е�ÿ��Ԫ��$everyData�е�name��price�����������
    echo $everydata['name'].":".$everydata['price'];
?>
<!-- ���һ��delete��modify�ĳ����ӣ����������ֱ����ת����Ӧ����ҳ -->
    <a href="delete.handle.php?name=<?php  echo $everydata['name']?>">delete</a>
     <a href="modify.php?name=<?php  echo $everydata['name']?>">modify</a>

 <?php 
    echo "<br>";
}
?>