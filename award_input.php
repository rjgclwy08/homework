<?php require_once "header.php"; ?>
<div align="center">
<?php
$tid=$_GET["tid"];
if($_GET["action"]==1){
	//添加信息到数据库
	$time=htmlspecialchars(trim($_POST["time"]));
	$p_name=htmlspecialchars(trim($_POST["p_name"]));
	$jb=htmlspecialchars(trim($_POST["jb"]));
	if($time=="") {$err=1;echo "请输入时间!<br />";}
	if($p_name=="") {$err=1;echo "请输入奖项名称!<br />";}
	if($jb=="") {$err=1;echo "请输入获奖级别!<br />";}
	
	if($err!=1) {
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("insert into teacher_award (`teacher_id`,`time`,`p_name`,`jb`) values('".$tid."','".$time."','".$p_name."','".$jb."')");
		echo "添加新获奖情况成功!";
  }
}else{
?>
  <p>添加新获奖情况信息</p>
  <hr>
  <form name="award_input" method="post" action="award_input.php?action=1&tid=<?php echo $tid;?>">
  	<div align="left">
    时间<input type="text" name="time" id="time"><br /><br />
    奖项名称<input type="text" name="p_name" id="p_name"><br /><br />
    获奖级别<input type="text" name="jb" id="jb"><br /><br />
     
    </div><br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="清除">
  </form>
  </div>
<?php
}
require_once "footer.php";
?>
