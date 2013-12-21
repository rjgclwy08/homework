<?php require_once "header.php"; ?>
<div align="center">
<?php
if($_GET["action"]==1){
	//添加信息到数据库
	$teacher_name=htmlspecialchars(trim($_POST["teacher_name"]));
	$teacher_id=htmlspecialchars(trim($_POST["teacher_id"]));
	$teacher_sex=htmlspecialchars(trim($_POST["teacher_sex"]));
	$teacher_birthday=htmlspecialchars(trim($_POST["teacher_birthday"]));
	$teacher_xl=htmlspecialchars(trim($_POST["teacher_xl"]));
	$teacher_zc=htmlspecialchars(trim($_POST["teacher_zc"]));
	$teacher_zw=htmlspecialchars(trim($_POST["teacher_zw"]));
	$teacher_phone=htmlspecialchars(trim($_POST["teacher_phone"]));
	$teacher_email=htmlspecialchars(trim($_POST["teacher_email"]));
	if($teacher_name=="") {$err=1;echo "请输入教师姓名!<br />";}
	if($teacher_id=="") {$err=1;echo "请输入教师工号!<br />";}
	if($teacher_sex=="") {$err=1;echo "请输入教师姓别!<br />";}
	if($teacher_birthday=="") {$err=1;echo "请输入教师出生年月!<br />";}
	if($teacher_xl=="") {$err=1;echo "请输入教师学历!<br />";}
	if($teacher_zc=="") {$err=1;echo "请输入教师职称!<br />";}
	if($teacher_zw=="") {$err=1;echo "请输入教师职务!<br />";}
	if($teacher_phone=="") {$err=1;echo "请输入教师电话!<br />";}
	if($teacher_email=="") {$err=1;echo "请输入教师邮箱!<br />";}
	
	if($err!=1) {
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("insert into teacher_info (`name`,`id`,`sex`,`birthday`,`xl`,`zc`,`zw`,`phone`,`email`) values('".$teacher_name."','".$teacher_id."','".$teacher_sex."','".$teacher_birthday."','".$teacher_xl."','".$teacher_zc."','".$teacher_zw."','".$teacher_phone."','".$teacher_email."')");
		echo "添加新教师信息成功!";
  }
}else{
?>
  <p>添加教师信息</p>
  <hr>
  <form name="teacher_input" method="post" action="teacher_input.php?action=1">
  	<div align="left">
    教师姓名<input type="text" name="teacher_name" id="teacher_name"><br /><br />
    教师工号<input type="text" name="teacher_id" id="teacher_id"><br /><br />
    教师性别<input type="radio" name="teacher_sex" value="0" id="teacher_sex_0">男
        <input type="radio" name="teacher_sex" value="1" id="teacher_sex_1">女<br /><br />
    出生年月<input type="text" name="teacher_birthday" id="teacher_birthday"><br /><br />
    教师学历<input type="text" name="teacher_xl" id="teacher_xl"><br /><br />
    教师职称<input type="text" name="teacher_zc" id="teacher_zc"><br /><br />
    教师职务<input type="text" name="teacher_zw" id="teacher_zw"><br /><br />
    教师电话<input type="text" name="teacher_phone" id="teacher_phone"><br /><br />
    教师邮箱<input type="text" name="teacher_email" id="teacher_email">
    </div><br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="清除">
  </form>
  </div>
<?php
}
require_once "footer.php";
?>
