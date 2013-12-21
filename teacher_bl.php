<?php require_once "header.php"; ?>
	<div align="center">
	<a href='bl_input.php?tid=<?php echo $_GET["id"];?>'>添加新的毕业论文情况</a><br /><br />
	<table border="1">
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$id=$_GET["id"];
		$query=$db->query("select * from teacher_bl where teacher_id='".$id."'");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			echo "<td><a href='bl_edit.php?id=".$r["uni_id"]."'>编辑</a></td>";
			echo "<td>".$r["xq"]."</td>";
			echo "<td>".$r["nj"]."</td>";
			echo "<td>".$r["zy"]."</td>";
			echo "<td>".$r["number"]."</td>";
			echo "</tr>";
		}
	?>
	</table>
	</div>
<?php require_once "footer.php";?>
