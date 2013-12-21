<?php require_once "headerS.php"; ?>
	<div align="center">
		<a href='choice.php?tid=<?php echo $_GET["id"];?>'>继续预约老师</a><br /><br />
		预约情况<br /><br />
	<table border="1">
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$id=$_GET["id"];
		$query=$db->query("select * from choice where student_id='".$id."'");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			echo "<td>".$r["teacher_name"]."</td>";
			echo "<td>".$r["teacher_id"]."</td>";
			echo "<td>".$r["student_name"]."</td>";
			echo "<td>".$r["student_id"]."</td>";
			echo "<td>".$r["time"]."</td>";
			echo "<td>".$r["classtime"]."</td>";
			echo "</tr>";
		}
	?>
	</table>
	</div>
<?php require_once "footer.php";?>

		
