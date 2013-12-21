<?php require_once "header.php"; ?>
	<div align="center">
		<a href='release_input.php?tid=<?php echo $_GET["id"];?>'>添加新的论文发表情况</a><br /><br />
	<table border="1">
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$id=$_GET["id"];
		$query=$db->query("select * from teacher_release where teacher_id='".$id."'");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			echo "<td><a href='release_edit.php?id=".$r["uni_id"]."'>编辑</a></td>";
			echo "<td>".$r["time"]."</td>";
			echo "<td>".$r["q_name"]."</td>";
			echo "<td>".$r["p_name"]."</td>";
			echo "<td>".$r["pm"]."</td>";
			echo "</tr>";
		}
	?>
	</table>
	</div>
<?php require_once "footer.php";?>
