<?php require_once "headerS.php"; ?>
</body>
	<div align="center">
	<a href='choice.php'>预约教师</a><br /><br />
	<a href='student_beforechoice.php'>预约教师结果</a><br /><br />
	
	<table border="1">
	教师基本信息<br /><br />
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		$query=$db->query("select * from teacher_info order by `name`");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$r["name"]."</td>";
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
	 <br />



	<table border="1">
	教师时间<br /><br />
	<?php
	require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
	$query=$db->query("select * from teacher_time  order by 'teacher_id'");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			echo "<td>".$r["teacher_id"]."</td>";
			echo "<td>".$r["time"]."</td>";
			echo "<td>".$r["classtime"]."</td>";
			echo "</tr>";
		}
	?>
     </table> 
	 <br />
	
	<table border="1">
	教师获奖情况<br /><br />
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		
		$query=$db->query("select * from teacher_award order by `teacher_id`");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
		    echo "<td>".$r["teacher_id"]."</td>";
			echo "<td>".$r["time"]."</td>";
			echo "<td>".$r["p_name"]."</td>";
			echo "<td>".$r["jb"]."</td>";
			echo "</tr>";
		}
	?>
    </table>
    <br />
	
	<table border="1">
	教师论文发表情况<br /><br />
	<?php
		require_once "config.php";
		mysql_query("SET NAMES 'utf8'");
		
		$query=$db->query("select * from teacher_release  order by `teacher_id`");
		while($r=$db->fetch_array($query)){
			echo "<tr>";
			echo "<td>".$r["teacher_id"]."</td>";
			echo "<td>".$r["time"]."</td>";
			echo "<td>".$r["q_name"]."</td>";
			echo "<td>".$r["p_name"]."</td>";
			echo "<td>".$r["pm"]."</td>";
			echo "</tr>";
		}
	?>
	</table>
	<br />
	</div>
<?php require_once "footer.php";?>