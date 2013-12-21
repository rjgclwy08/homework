<?php require_once "header.php"; ?>
	<div align="center">
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$id=$_GET["id"];
		$query=$db->query("select * from teacher_info where id='".$id."'");
		while($r=$db->fetch_array($query)){
			echo $r["name"];
			
			
			echo "<br /><br /><a href='teacher_award.php?id=".$id."'>获奖情况</a>";
			echo "<br /><br /><a href='teacher_release.php?id=".$id."'>发表论文情况</a>";
			echo "<br /><br /><a href='teacher_time.php?id=".$id."'>时间</a>";
			echo "<br /><br /><a href='teacher_choice.php?id=".$id."'>预约情况</a>";
			
		}
	?>
	</div>
<?php require_once "footer.php";?>
