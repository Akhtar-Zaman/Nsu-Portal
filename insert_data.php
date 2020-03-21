<?php 
    session_start();
	$connect = mysqli_connect('localhost','root','','nsu_portal');

	if($_REQUEST["course"] || $_REQUEST["section"] || $_REQUEST["credit"]){

	
	    $id= $_SESSION["id"];
		$course = json_decode(stripslashes($_POST['course']));
		$section = json_decode(stripslashes($_POST['section']));
		$credit = json_decode(stripslashes($_POST['credit']));
		$fees = json_decode(stripslashes($_POST['Fees']));
		$length = count($course);
		for($x = 0; $x < $length; $x++) 
		{
		    $q = "insert into taken_courses values('$course[$x]','$section[$x]','$credit[$x]','$fees[$x]','$id')";
		    $query = mysqli_query($connect,$q);
		}
	
			
	}
?>
			