<?php require_once "headerW.php"; ?>
<div align="center">
<?php
$err=0;
if($_GET["action"]==1){
	//添加信息到数据库
	
	$student_name=htmlspecialchars(trim($_POST["student_name"]));
	$student_id=htmlspecialchars(trim($_POST["student_id"]));
	
	
	if($student_name=="") {$err=1;echo "请输入你的姓名!<br />";}
	if($student_id=="") {$err=1;echo "请输入你的学号!<br />";}
	
	
	
	if($err!=1) {
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("insert into student (`student_name`,`student_id`) values('".$student_name."','".$student_id."')");
		 echo "<tr>";
		echo "登陆成功!";
       
			echo "<td><a href='student.php'>进入主页面</a></td>";
			
			echo "</tr>";
  }
}else{
?>
 
  <hr>
  <form name="student_index" method="post" action="student_index.php?action=1">
  	<div align="center">
    
    
    学生姓名<input type="text" name="student_name" id="student_name"><br /><br />
    学生学号<input type="text" name="student_id" id="student_id"><br /><br />
    
    
    </div><br />
    <input name="submit" type="submit" value="登陆">
    <input name="reset" type="reset" value="重置">
  </form>
  </div>
<?php
}
require_once "footer.php";
?>