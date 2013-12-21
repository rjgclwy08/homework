<?php require_once "header.php"; ?>
<div align="center">
<?php
$id=$_GET["id"];
if($_GET["action"]==1){
	$time=htmlspecialchars(trim($_POST["time"]));
	$classtime=htmlspecialchars(trim($_POST["classtime"]));
	
	if($time=="") {$err=1;echo "请输入日期!<br />";}
	if($classtime=="") {$err=1;echo "请输入课时!<br />";}
	
	
	if($err!=1) {
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("update teacher_time set `time`='".$time."',`classtime`='".$classtime."'");
		echo "输入时间成功!";
  }
}else{
?>
  <p>输入时间</p>
  <hr>
  <form name="time_input" method="post" action="time_edit.php?action=1&id=<?php echo $id;?>">
  	<div align="left">
  	<?php
    	require_once "config.php";
	    mysql_query("SET NAMES 'utf8'");
    	$query=$db->query("select * from teacher_time where teacher_id='".$id."'");
    	if($r=$db->fetch_array($query)){
    		echo '时间<input type="text" name="time" id="time" value="'.$r["time"].'"><br /><br />';
    		echo '课时<input type="text" name="classtime" id="classtime" value="'.$r["classtime"].'"><br /><br />';
    		
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
