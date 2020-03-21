<?php 
    session_start();
	$connect = mysqli_connect('localhost','root','','nsu_portal');

	if($_REQUEST["N_Degree"] || $_REQUEST["Institute"] || $_REQUEST["Board"]){
		
	    $id= $_SESSION['id'];
		//$id= 1611;
	
		$N_Degree = json_decode(stripslashes($_POST['N_Degree']));
		$Institute = json_decode(stripslashes($_POST['Institute']));
		$Board = json_decode(stripslashes($_POST['Board']));
		$Year = json_decode(stripslashes($_POST['Year']));
		$result = json_decode(stripslashes($_POST['result']));
		$length = count($N_Degree);
		for($x = 0; $x < $length; $x++) 
		{
		    $q = "insert into educational_qualification values('$N_Degree[$x]','$Institute[$x]','$Board[$x]','$Year[$x]','$result[$x]','$id')";
		    $query = mysqli_query($connect,$q);
		}
	
			
	}
?>
			
			
			
			
			

