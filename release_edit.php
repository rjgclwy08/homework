<?php require_once "header.php"; ?>
<div align="center">
<?php
$id=$_GET["id"];
if($_GET["action"]==1){
	$time=htmlspecialchars(trim($_POST["time"]));
	$q_name=htmlspecialchars(trim($_POST["q_name"]));
	$p_name=htmlspecialchars(trim($_POST["p_name"]));
	$pm=htmlspecialchars(trim($_POST["pm"]));
	if($time=="") {$err=1;echo "请输入时间!<br />";}
	if($q_name=="") {$err=1;echo "请输入期刊名称!<br />";}
	if($p_name=="") {$err=1;echo "请输入论文名称!<br />";}
	if($pm=="") {$err=1;echo "请输入作者排名!<br />";}
	
	if($err!=1) {
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("update teacher_release set `time`='".$time."',`q_name`='".$q_name."',`p_name`='".$p_name."',`pm`='".$pm."' where uni_id='".$id."'");
		echo "编辑论文发表情况信息成功!";
  }
}else{
?>
  <p>编辑论文发表情况信息</p>
  <hr>
  <form name="release_input" method="post" action="release_edit.php?action=1&id=<?php echo $id;?>">
  	<div align="left">
  	<?php
    	require_once "config.php";
	    mysql_query("SET NAMES 'utf8'");
    	$query=$db->query("select * from teacher_release where uni_id='".$id."'");
    	if($r=$db->fetch_array($query)){
    		echo '时间<input type="text" name="time" id="time" value="'.$r["time"].'"><br /><br />';
    		echo '期刊名称<input type="text" name="q_name" id="q_name" value="'.$r["q_name"].'"><br /><br />';
    		echo '论文名称<input type="text" name="p_name" id="p_name" value="'.$r["p_name"].'"><br /><br />';
    		echo '作者排名<input type="text" name="pm" id="pm"" value="'.$r["pm"].'"><br /><br />';
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
