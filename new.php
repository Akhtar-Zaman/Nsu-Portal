        <?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "nsu_portal");
	
	if(isset($_POST['course']))
	{
		$_SESSION['b'] = $_POST['section'];
		$_SESSION['a'] = $_POST['course'];		
	}
	if(isset($_SESSION['a']))
	{
		$d= trim($_SESSION['a']);
        $e= trim($_SESSION['b']);	
		$query = "SELECT distinct s.id,first_name,Phone_No FROM students_info as s,taken_courses as t WHERE t.id=s.id AND courses='$d' AND section='$e' ";
		$result = mysqli_query($connect, $query);
		while($row = mysqli_fetch_array($result))
		{
		  ?>
         	<tr>
				<td> <?php echo $row["id"]; ?> </td> 
				<td><?php echo $row["first_name"]; ?></td>
				<td><?php echo $row["Phone_No"]; ?></td>	
			</tr>
			
			<?php
	    }
	}
	else
	{
	  echo "variable is not set";
	}
            ?>