<?php
 session_start();
$connect= mysqli_connect("localhost","root","","nsu_portal")
?>



<!DOCTYPE html> 
<html>
<head> 
<title> STUDENTS </title>
<link rel="stylesheet" type="text/css" href="Css files/students_Form.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="ajax.js"></script>





<script type="text/javascript">
						function PreviewImage() {
						var oFReader = new FileReader();
						oFReader.readAsDataURL(document.getElementById("a").files[0]);
						oFReader.onload = function (oFREvent) {
						document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

        </script>
</head> 
 
<body>
<div class="main_container">
		<div class="navigation-bar">
            <input type= "image" id= "logo" src="pictures/A.png" />
			<h3 id="hh">NORTH SOUTH UNIVERSITY</h3> <br>
			<h5 id="hh1">Center of Excellence in Higher Education</h5>
			<h6 id="hh2">The first private university of Bangladesh</h6>
	    </div>
		
		<a href="http://localhost/NSU%20PORTAL/Login_Page.php"> <input type= "image" id= "Login_Button" src="pictures/log.jpg" /> </a>
		 <div class="navigation">		  
			<ul> 
			   <li> <a href="http://localhost/NSU%20PORTAL/Teacher%20form.php"> <b> Teachers Form</b></a> </li>
		</div>	 </ul>
			 
<center> <h2> Student Application Form </h2> <br> <br> <br>


<form class="myform" method="post" enctype="multipart/form-data" >
    <img id="uploadPreview" src="pictures/Add.png" class="avatar" onclick= document.getElementById("a").click()/><br>
    <input type="file" id="a" name="a" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/><br> </br> </center>
    <input type="button" id="button" name="Image" value="Add File" onclick= document.getElementById("a").click() /> <br><br><br><br>
 
<center> 
<input type="text" name="fname" id="fname" class="textbox" placeholder="First Name" /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="lname" id="lname" class="textbox"  placeholder="Last Name" /> <br> <br>
<input type="text" name="fathers_name" class="textbox"  id="father's_name" placeholder="Father's Name" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="mothers_name" class="textbox"  id="mother's_name" placeholder="Mother's Name" /> <br> <br>
<input type="text" name="Email" class="textbox"  id="Email" placeholder="Email" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="Phone_No" class="textbox"  id="" placeholder="Phone No." /> <br> <br>
<input type="text" name="dob"  class="textbox" id="dob" placeholder="Date of birth    (dd-mm-yyyy)" /> <br><br>
<input type="text" name="id"  class="textbox" placeholder="id" /><br><br>
<input type="password" name="Npassword"  class="textbox" id="password" placeholder="New Password" />  <br><br>
<input type="password" name="Cpassword" class="textbox"  id="cpass" placeholder="Confirm Password" /> <br><br><br><br>
<h4> ADDRESS </h4><br>
<input type="text" name="house_no"  class="textbox" id="house_no" placeholder="House No." />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="location"  class="textbox" id="location" placeholder="Location" /><br> <br>
<input type="text" name="village"  class="textbox" id="village" placeholder="Village/Street" /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="thana"  class="textbox" placeholder="Thana" id="thana" /><br> <br>
<input type="text" name="district" class="textbox"  id="district" placeholder="District" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="pcode" class="textbox"  id="pcode" placeholder="Post Code"> <br><br><br><br>


<h4>Educational Qualification</h4><br>
<table id="table" border="2" width="800">
<thead>
   <th align="center"> Name of Degree </th>
   <th> Institute </th>
   <th> Board </th>
   <th> Year </th>
   <th> result </th>	
</thead>

<tr> 
	<td> JSC/JDC </td>
	<td contenteditable="true"></td>
	<td contenteditable="true"> </td>
	<td contenteditable="true"> </td>
	<td contenteditable="true"> </td>
</tr>

<tr> 
	<td> SSC/DAKHIL </td>
	<td contenteditable="true"> </td>
	<td contenteditable="true"> </td>
	<td contenteditable="true"> </td>
	<td contenteditable="true"> </td>
</tr>

<tr> 
	<td> HSC/ALIM </td>
	<td contenteditable="true"> </td>
	<td contenteditable="true"> </td>
	<td contenteditable="true"> </td>
	<td contenteditable="true"> </td>
</tr>

</table>
<br> <br>
<input type="submit" name="submit" id="submit" value="submit" /> <br><br><br><br>
</center>
</form>
	  
	  <?php
if (isset($_POST['id']))
{
	$F_Name = $_POST['fname'];
	$L_Name = $_POST['lname'];
	$Fathers_name =$_POST['fathers_name'];
	$Mothers_name = $_POST['mothers_name'];
	$Email = $_POST['Email'];
	$Phone = $_POST['Phone_No'];
	$Dob = $_POST['dob'];
	$Id = $_POST['id'];
	$New_Password = $_POST['Npassword'];
	$Confirm_Password = $_POST['Cpassword'];
	$House = $_POST['house_no'];
	$Location = $_POST['location'];
	$Village = $_POST['village'];
	$Thana = $_POST['thana'];
	$District= $_POST['district'];
	$Post_Code = $_POST['pcode'];
	$_SESSION['id'] = $_POST['id'];
	
	
	            $img_name = $_FILES['a']['name'];
				$img_size =$_FILES['a']['size'];
			    $img_tmp =$_FILES['a']['tmp_name'];
				
				$directory = 'Students Picture/';
				$target_file = $directory.$img_name;


						move_uploaded_file($img_tmp,$target_file);
	
	$query="INSERT INTO students_info VALUES ('$Id','$F_Name','$L_Name','$Fathers_name','$Mothers_name','$Email','$Phone','$Dob','$New_Password','$Confirm_Password','$House','$Location','$Village','$Thana','$District','$Post_Code','$target_file')";
	$result= mysqli_query($connect,$query);
    //$row = mysqli_fetch_array($result);
		
		if($result)
			echo '<script type= "text/javascript"> alert ("Information Saved Succesfully") </script>';
		else
			echo '<script type= "text/javascript"> alert ("Something is wrong") </script>';
}

?>



  <script>	  
  $(document).ready(function()
  {
      var x= "<?php echo $_SESSION['id'] ?>";
	  if(x !=""){
	  $('#submit').click(function(){	  
	    var N_Degree = [];
		var Institute = [];
		var Board = [];
		var Year = [];
		var result = [];
		
		for (var i = 0; i < table.rows.length - 1 ; i++) 
		{
		  N_Degree [i] = table.rows[i+1].cells[0].innerHTML;
		  Institute[i] = table.rows[i+1].cells[1].innerHTML;
		  Board [i] = table.rows[i+1].cells[2].innerHTML;
		  Year   [i] = table.rows[i+1].cells[3].innerHTML;
		  result   [i] = table.rows[i+1].cells[4].innerHTML;
		}
		
		var jsonString1 = JSON.stringify(N_Degree);
		var jsonString2 = JSON.stringify(Institute);
		var jsonString3 = JSON.stringify(Board);
		var jsonString4 = JSON.stringify(Year);
		var jsonString5 = JSON.stringify(result);
		$.ajax(
		{
		  type:"POST",
		  url:"result.php",
		  data:{N_Degree:jsonString1,Institute:jsonString2,Board:jsonString3,Year:jsonString4,result:jsonString5},
		  cache: false,
		  success:function(data){ }
		});
       
	  });
	  } 
  });</script>
  </div>
</body>
</html>
 