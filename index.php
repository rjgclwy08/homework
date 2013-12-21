<?php require_once "headerT.php"; ?>
<div align="center">
<?php
$err=0;
if($_GET["action"]==1){
	$name=htmlspecialchars(trim($_POST["name"]));
	$password=htmlspecialchars(trim($_POST["password"]));
	if($name!="admir") {$err=1;echo "请输入你的姓名!<br />";}
	if($password!="123456") {$err=1;echo "请输入你的学号!<br />";}
	
	if($err!=1) {
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
	    echo "<tr>";
		echo "登陆成功!";
        echo "<td><a href='teacher_info.php'>进入主页面</a></td>";
		echo "</tr>";
  }
}else{
?>
 
  <hr>
  <form name="index" method="post" action="index.php?action=1">
  	<div align="center">
    
    
    姓名<input type="text" name="name" id="name"><br /><br />
    密码<input type="text" name="password" id="password"><br /><br />
    
    
    </div><br />
    <input name="submit" type="submit" value="登陆">
    <input name="reset" type="reset" value="重置">
  </form>
  </div>
<?php
}
require_once "footer.php";
?>