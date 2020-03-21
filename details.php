  <?php 
  $connect = mysqli_connect("localhost", "root", "", "nsu_portal");
  ?>
  
  
<html>
<head>            
    <title> Details </title>	   
    <link rel="stylesheet" type ="text/css" href="Css files/details.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>		
</head>

 <body>
   	   <div class="main_container">	 
		   <div class="navigation-bar">
               <input type= "image" id= "logo" src="pictures/A.png" />
			   <h3 id="hh">NORTH SOUTH UNIVERSITY</h3> <br>
			   <h5 id="hh1">Center of Excellence in Higher Education</h5>
			   <h6 id="hh2">The first private university of Bangladesh</h6>
	      </div>
		
		 <table class="table table-bordered" id="table">
			<tr>
			    <th width="20%">id</th>
				<th width="30%">Name</th>
				<th width="20%">Phone Number</th>
			</tr>			
				<?php		
                    include ('new.php');
				?>		
		 </table>		
	  </div>	
	
 </body>
</html> 