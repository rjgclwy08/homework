<?php require_once "header.php"; ?>
<div align="center">
<?php
$id=$_GET["id"];
if($_GET["action"]==1){
	$time=htmlspecialchars(trim($_POST["time"]));
	$p_name=htmlspecialchars(trim($_POST["p_name"]));
	$jb=htmlspecialchars(trim($_POST["jb"]));
	if($time=="") {$err=1;echo "请输入时间!<br />";}
	if($p_name=="") {$err=1;echo "请输入奖项名称!<br />";}
	if($jb=="") {$err=1;echo "请输入获奖级别!<br />";}
	
	if($err!=1) {
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("update teacher_award set `time`='".$time."',`p_name`='".$p_name."',`jb`='".$jb."' where uni_id='".$id."'");
		echo "编辑获奖情况信息成功!";
  }
}else{
?>
  <p>编辑获奖情况信息</p>
  <hr>
  <form name="award_input" method="post" action="award_edit.php?action=1&id=<?php echo $id;?>">
  	<div align="left">
  	<?php
    	require_once "config.php";
	    mysql_query("SET NAMES 'utf8'");
    	$query=$db->query("select * from teacher_award where uni_id='".$id."'");
    	if($r=$db->fetch_array($query)){
    		echo '时间<input type="text" name="time" id="time" value="'.$r["time"].'"><br /><br />';
    		echo '奖项名称<input type="text" name="p_name" id="p_name" value="'.$r["p_name"].'"><br /><br />';
    		echo '获奖级别<input type="text" name="jb" id="jb" value="'.$r["jb"].'"><br /><br />';
    	}
  	?>
    </div><br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="清除">
  </form>
  </div>
<?php
}
require_once "footer.php";
?>