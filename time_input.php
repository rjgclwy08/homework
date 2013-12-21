<?php require_once "header.php"; ?>
<div align="center">
<?php
$tid=$_GET["tid"];
if($_GET["action"]==1){
	//添加信息到数据库
	$time=htmlspecialchars(trim($_POST["time"]));
	$classtime=htmlspecialchars(trim($_POST["classtime"]));
	
	if($time=="") {$err=1;echo "请输入时间!<br />";}
	if($classtime=="") {$err=1;echo "请输入课时!<br />";}
	
	
	if($err!=1) {
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("insert into teacher_time (`teacher_id`,`time`,`classtime`) values('".$tid."','".$time."','".$classtime."')");
		echo "添加时间信息成功!";
  }
}else{
?>
  <p>添加时间信息</p>
  <hr>
  <form name="time_input" method="post" action="time_input.php?action=1&tid=<?php echo $tid;?>">
  	<div align="left">
    时间<input type="text" name="time" id="time"><br /><br />
    课时<input type="text" name="classtime" id="classtime"><br /><br />
    
    </div><br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="还原">
  </form>
  </div>
<?php
}
require_once "footer.php";
?>