<html>
<head>
<title>php��MySQL�����Ӳ���</title>
</head>
<body>
<center>
<?php
$connect=mysql_connect('localhost','root','mysql');
if(!$connect) 
echo "��Ǹ����MySQL���ݿ������ʧ�ܣ�";
else 
echo "��ϲ����MySQL���ݿ�����ӳɹ���";
?>
</center>
</body>
</html>
