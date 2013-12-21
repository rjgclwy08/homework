<?php require_once "header.php"; ?>
	<div align="center">
		<a href='award_input.php?tid=<?php echo $_GET["id"];?>'>添加新的获奖情况</a><br /><br />
	<table border="1">
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$id=$_GET["id"];
		$query=$db->query("select * from teacher_award where teacher_id='".$id."'");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			echo "<td><a href='award_edit.php?id=".$r["uni_id"]."'>编辑</a></td>";
			echo "<td>".$r["time"]."</td>";
			echo "<td>".$r["p_name"]."</td>";
			echo "<td>".$r["jb"]."</td>";
			echo "</tr>";
		}
	?>
	</table>
	</div>
<?php require_once "footer.php";?>
