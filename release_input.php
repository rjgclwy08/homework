<?php require_once "header.php"; ?>
<div align="center">
<?php
$tid=$_GET["tid"];
if($_GET["action"]==1){
	//添加信息到数据库
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
		$query=$db->query("insert into teacher_release (`teacher_id`,`time`,`q_name`,`p_name`,`pm`) values('".$tid."','".$time."','".$q_name."','".$p_name."','".$pm."')");
		echo "添加新论文发表情况信息成功!";
  }
}else{
?>
  <p>添加新论文发表情况信息</p>
  <hr>
  <form name="release_input" method="post" action="release_input.php?action=1&tid=<?php echo $tid;?>">
  	<div align="left">
    时间<input type="text" name="time" id="time"><br /><br />
    期刊名称<input type="text" name="q_name" id="q_name"><br /><br />
    论文名称<input type="text" name="p_name" id="p_name"><br /><br />
    作者排名<input type="text" name="pm" id="pm"><br /><br />
    </div><br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="清除">
  </form>
  </div>
<?php
}
require_once "footer.php";
?>
