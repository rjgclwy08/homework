
<?php require_once "headerS.php"; ?>
<div align="center">
<?php
if($_GET["action"]==1){
	//添加信息到数据库
	$teacher_name=htmlspecialchars(trim($_POST["teacher_name"]));
	$teacher_id=htmlspecialchars(trim($_POST["teacher_id"]));
	$student_name=htmlspecialchars(trim($_POST["student_name"]));
	$student_id=htmlspecialchars(trim($_POST["student_id"]));
	$time=htmlspecialchars(trim($_POST["time"]));
	$classtime=htmlspecialchars(trim($_POST["classtime"]));
	if($teacher_name=="") {$err=1;echo "请输入所选教师姓名!<br />";}
	if($teacher_id=="") {$err=1;echo "请输入所选教师工号!<br />";}
	if($student_name=="") {$err=1;echo "请输入你的姓名!<br />";}
	if($student_id=="") {$err=1;echo "请输入你的学号!<br />";}
	if($time=="") {$err=1;echo "请输入所选时间!<br />";}
	if($classtime=="") {$err=1;echo "请输入所选课时!<br />";}
	echo $teacher_name ;
	if($err!=1) {
		require_once "config.php";
	
		$query=$db->query("insert into choice (`teacher_name`,`teacher_id`,`student_name`,`student_id`,`time`,`classtime`) values('".$teacher_name."','".$teacher_id."','".$student_name."','".$student_id."','".$time."','".$classtime."')");
		echo "预约成功!";
  }
}else{
?>
  <p>预约教师</p>
  <hr>
  <form name="choice" method="post" action="choice.php?action=1">
  	<div align="center">
    预约教师姓名<input type="text" name="teacher_name" id="teacher_name"><br /><br />
    预约教师工号<input type="text" name="teacher_id" id="teacher_id"><br /><br />
    
    预约学生姓名<input type="text" name="student_name" id="student_name"><br /><br />
    预约学生学号<input type="text" name="student_id" id="student_id"><br /><br />
    预约时间<input type="text" name="time" id="time"><br /><br />
    预约课时<input type="text" name="classtime" id="classtime">
    
    </div><br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="更改">
  </form>
  </div>
<?php
}
require_once "footer.php";
?>
