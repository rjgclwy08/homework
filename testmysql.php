<html>
<head>
<title>php和MySQL的连接测试</title>
</head>
<body>
<center>
<?php
$connect=mysql_connect('localhost','root','mysql');
if(!$connect) 
echo "抱歉，与MySQL数据库的连接失败！";
else 
echo "恭喜，与MySQL数据库的连接成功！";
?>
</center>
</body>
</html>
