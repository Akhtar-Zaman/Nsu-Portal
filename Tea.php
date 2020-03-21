<?php

	session_start();
	$connect = mysqli_connect('localhost', 'root', '', 'nsu_portal');

	if ($_REQUEST["N_Degree"] || $_REQUEST["Institute"] || $_REQUEST["Board"])
	{
		$id = $_SESSION['id'];
		$N_Degree = json_decode(stripslashes($_POST['N_Degree']));
		$Institute = json_decode(stripslashes($_POST['Institute']));
		$Board = json_decode(stripslashes($_POST['Board']));
		$Year = json_decode(stripslashes($_POST['Year']));
		$result = json_decode(stripslashes($_POST['result']));
		$length = count($N_Degree);
		for ($x = 0; $x < $length; $x++) 
		{
			$q = "insert into before_graduation values('$N_Degree[$x]','$Institute[$x]','$Board[$x]','$Year[$x]','$result[$x]','$id')";
			$query = mysqli_query($connect, $q);
		}
	}

	// 2nd table
	if ($_REQUEST["N_Degree1"] || $_REQUEST["Major"] || $_REQUEST["Minor"])
	{
		$id = $_SESSION['id'];
		$N_Degree1 = json_decode(stripslashes($_POST['N_Degree1']));
		$Major = json_decode(stripslashes($_POST['Major']));
		$Minor = json_decode(stripslashes($_POST['Minor']));
		$Institute1 = json_decode(stripslashes($_POST['Institute1']));
		$Year1 = json_decode(stripslashes($_POST['Year1']));
		$result1 = json_decode(stripslashes($_POST['result1']));
		$length = count($N_Degree1);
		for ($x = 0; $x < $length; $x++)
		{
			$q = "insert into after_graduation values('$N_Degree1[$x]','$Major[$x]','$Minor[$x]','$Institute1[$x]','$Year1[$x]','$result1[$x]','$id')";
			$query = mysqli_query($connect, $q);
		}
	}

	//3rd table
	if ($_REQUEST["Position"] || $_REQUEST["Organization"] || $_REQUEST["Time_from"])
	{
		$id = $_SESSION['id'];
		$Position = json_decode(stripslashes($_POST['Position']));
		$Organization = json_decode(stripslashes($_POST['Organization']));
		$Time_from = json_decode(stripslashes($_POST['Time_from']));
		$Time_to = json_decode(stripslashes($_POST['Time_to']));
		$Remarks = json_decode(stripslashes($_POST['Remarks']));
		$length = count($Position);
		for ($x = 0; $x < $length; $x++)
		{
			$q = "insert into experience values('$Position[$x]','$Organization[$x]','$Time_from[$x]','$Time_to[$x]','$Remarks[$x]','$id')";
			$query = mysqli_query($connect, $q);
		}
	}
?>
			





