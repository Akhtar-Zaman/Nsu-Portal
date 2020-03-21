
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "nsu_portal");
?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transtional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>            
        <title> Students information </title>	
        <link rel="stylesheet" type ="text/css" href="Css files/Student_Information.css">
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

            <!-- My Account Link -->
            <center>  <div class="My_Account">									
                    <ul>
                        <li> <?php
                            $id = $_SESSION["id"];
                            $query = "SELECT First_Name FROM students_info where id='$id'";
                            $result = mysqli_query($connect, $query);
                            $row = mysqli_fetch_array($result);
                            echo " <a href ='http://localhost/NSU%20PORTAL/Student_Information.php' </a> <i class='fas fa-user-plus'></i> " . $row["First_Name"];
                            ?>				  
                        </li>														
                    </ul>												
                </div>
            </center>

            <a href="http://localhost/NSU%20PORTAL/Login_Page.php"> <input type= "image" id= "Login_Button" src="pictures/log.jpg" /> </a>
            <div class="navigation">		  
                <ul> 
                    <li> <a href="http://localhost/NSU%20PORTAL/Home.php"> <i class="fas fa-home"></i> Home </a> </li>
                    <li> <a href="http://localhost/NSU%20PORTAL/Student_Information.php"> <i class="fas fa-user-alt"></i> Profile </a> </li>							   
                    <li> <a href="http://localhost/NSU%20PORTAL/Advising.php"> <i class="far fa-edit"></i> Advising </a> </li>
                    <li> <a href="http://localhost/NSU%20PORTAL/Courses.php"> <i class="fas fa-book"></i> Courses</a> </li>	   							   
                </ul>
            </div>

            <center> <h3><b> General Info </h3> </b></center>
            <table  class="table table-bordered" border="2" width="500" >
                <?php
                $id = $_SESSION["id"];
                $query = "SELECT * FROM students_info where id='$id'";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result))
				{
                    ?>
                    <img  src=" <?php echo $row["pictures"]; ?>" id= "imge" height="300" width="300"> <br><br>
                    <tr> <th>Id</th>             <td> <?php echo $row["id"]; ?> </td></tr>
                    <tr> <th>First_Name</th>     <td> <?php echo $row["First_Name"]; ?> </td> </tr>
                    <tr> <th >Last_Name</th>     <td> <?php echo $row["Last_Name"]; ?> </td></tr>
                    <tr> <th >Father's_Name</th>  <td> <?php echo $row["Fathers_Name"]; ?> </td>	</tr>
                    <tr> <th >Mother's_Name</th>  <td><?php echo $row["Mothers_Name"]; ?> </td>	</tr>
                    <tr> <th >Email</th>          <td> <?php echo $row["Email"]; ?> </td>	</tr>
                    <tr> <th >Phone_No</th>       <td><?php echo $row["Phone_No"]; ?> </td>	</tr>
                    <tr> <th >Date_Of_Birth</th>  <td> <?php echo $row["Date_Of_Birth"]; ?> </td>	</tr>
                    <tr> <th >House_No</th>       <td><?php echo $row["House_No"]; ?> </td>	</tr>
                    <tr> <th >Location</th>       <td><?php echo $row["Location"]; ?> </td>	</tr>
                    <tr> <th >Village/Street</th> <td><?php echo $row["Village/Street"]; ?> </td>	</tr>
                    <tr> <th >Thana</th>          <td> <?php echo $row["Thana"]; ?> </td>	</tr>
                    <tr> <th >District</th>       <td><?php echo $row["District"]; ?> </td>	</tr>
                    <tr> <th >Post_Code</th>      <td> <?php echo $row["Post_Code"]; ?> </td>	</tr>
                  <?php
                }
                  ?>	
            </table> <br>

            <center> <h3> <b> Educational qualification </b></h3> </center>
            <table  class="table table-bordered" >
                <tr> 
                    <th>Name Of Degree</th> 
                    <th>Institute</th>     
                    <th >Board</th>   
                    <th >Year</th> 
                    <th >Result</th>
				</tr>
                <?php
                $id = $_SESSION["id"];
                $query = "SELECT Name_Of_Degree,Institute,Board,Year,Result FROM educational_qualification where id='$id'";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) 
				{
                  ?>
                    <tr> 
     					<td> <?php echo $row["Name_Of_Degree"]; ?> </td> 
                        <td> <?php echo $row["Institute"]; ?> </td>
                        <td> <?php echo $row["Board"]; ?> </td>
                        <td> <?php echo $row["Year"]; ?> </td> 
                        <td> <?php echo $row["Result"]; ?> </td>
					</tr>
				  <?php
				}
				  ?>	
            </table>


        </div>				
    </body>
</html>		



