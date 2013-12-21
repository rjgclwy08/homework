<?php require_once "headerS.php"; ?>
<body>
	<div align="center">
	寻找你的姓名学号<br /><br />
	<table border="1">
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("select * from choice order by `student_id`");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			
			echo "<td><a href='student_choice.php?id=".$r["student_id"]."'>".$r["student_name"]."</a></td>";
			echo "<td>".$r["student_id"]."</td>";
			
			echo "</tr>";
		}
	?>
	</table>
	</div>
<?php require_once "footer.php";?>
