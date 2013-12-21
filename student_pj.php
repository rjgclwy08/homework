<?php require_once "header.php"; ?>
	<div align="center">
	<a href='pj_input.php?tid=<?php echo $_GET["id"];?>'>添加新的网上评教情况</a><br /><br />	
	<table border="1">
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$id=$_GET["id"];
		$query=$db->query("select * from student_pj where teacher_id='".$id."'");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			echo "<td><a href='pj_edit.php?id=".$r["uni_id"]."'>编辑</a></td>";
			echo "<td>".$r["xq"]."</td>";
			echo "<td>".$r["kc"]."</td>";
			echo "<td>".$r["pjf"]."</td>";
			echo "<td>".$r["class"]."</td>";
			echo "</tr>";
		}
	?>
	</table>
	</div>
<?php require_once "footer.php";?>
