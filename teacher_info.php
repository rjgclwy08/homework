<?php require_once "header.php"; ?>
	<div align="center">
	<a href='teacher_input.php'>添加新的教师信息</a><br /><br />
	<table border="1">
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("select * from teacher_info order by `name`");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			echo "<td><a href='teacher_edit.php?id=".$r["id"]."'>编辑</a></td>";
			echo "<td><a href='teacher_person.php?id=".$r["id"]."'>".$r["name"]."</a></td>";
			echo "<td>".$r["id"]."</td>";
			echo "<td>".$r["sex"]."</td>";
			echo "<td>".$r["birthday"]."</td>";
			echo "<td>".$r["xl"]."</td>";
			echo "<td>".$r["zc"]."</td>";
			echo "<td>".$r["zw"]."</td>";
			echo "<td>".$r["phone"]."</td>";
			echo "<td>".$r["email"]."</td>";
			echo "</tr>";
		}
	?>
	</table>
	</div>
<?php require_once "footer.php";?>
