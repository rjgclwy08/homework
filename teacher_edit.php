<?php require_once "header.php"; ?>
<div align="center">
<?php
$id=$_GET["id"];
if($_GET["action"]==1){
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
		$query=$db->query("update teacher_info set `name`='".$teacher_name."',`id`='".$teacher_id."',`sex`='".$teacher_sex."',`birthday`='".$teacher_birthday."',`xl`='".$teacher_xl."',`zc`='".$teacher_zc."',`zw`='".$teacher_zw."',`phone`='".$teacher_phone."',`email`='".$teacher_email."' where id='".$id."'");
		echo "编辑教师信息成功!";
  }
}else{
?>
  <p>编辑教师信息</p>
  <hr>
  <form name="teacher_input" method="post" action="teacher_edit.php?action=1&id=<?php echo $id;?>">
  	<div align="left">
  	<?php
    	require_once "config.php";
	    mysql_query("SET NAMES 'utf8'");
    	$query=$db->query("select * from teacher_info where id='".$id."'");
    	if($r=$db->fetch_array($query)){
    		echo '教师姓名<input type="text" name="teacher_name" id="teacher_name" value="'.$r["name"].'"><br /><br />';
    		echo '教师工号<input type="text" name="teacher_id" id="teacher_id" value="'.$r["id"].'"><br /><br />';
    		if($r["sex"]==0){
    			echo '教师性别<input type="radio" name="teacher_sex" value="0" id="teacher_sex_0" checked>男 <input type="radio" name="teacher_sex" value="1" id="teacher_sex_1">女<br /><br />';
    		}else{
    			echo '教师性别<input type="radio" name="teacher_sex" value="0" id="teacher_sex_0">男 <input type="radio" name="teacher_sex" value="1" id="teacher_sex_1" checked>女<br /><br />';
    		}
    		echo '出生年月<input type="text" name="teacher_birthday" id="teacher_birthday" value="'.$r["birthday"].'"><br /><br />';
    		echo '教师学历<input type="text" name="teacher_xl" id="teacher_xl" value="'.$r["xl"].'"><br /><br />';
    		echo '教师职称<input type="text" name="teacher_zc" id="teacher_zc" value="'.$r["zc"].'"><br /><br />';
    		echo '教师职务<input type="text" name="teacher_zw" id="teacher_zw" value="'.$r["zw"].'"><br /><br />';
    		echo '教师电话<input type="text" name="teacher_phone" id="teacher_phone" value="'.$r["phone"].'"><br /><br />';
    		echo '教师邮箱<input type="text" name="teacher_email" id="teacher_email" value="'.$r["email"].'">';
    	}
  	?>
    </div><br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="还原">
  </form>
  </div>
<?php
}
require_once "footer.php";
?>
