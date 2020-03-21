
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "nsu_portal");
?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transtional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>            
        <title> Teachers information </title>	
        <link rel="stylesheet" type ="text/css" href="Css files/Teachers Information.css">
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
                            $id = $_SESSION['Initial'];
                            $query = "SELECT First_Name FROM teachers_info where Initial='$id'";
                            $result = mysqli_query($connect, $query);
                            $row = mysqli_fetch_array($result);
                            echo " <a href ='#' </a> <i class='fas fa-address-book'></i> " . $row["First_Name"];
                            ?>				  
                        </li>														
                    </ul>												
                </div>
            </center>

            <a href="http://localhost/NSU%20PORTAL/Login_Page.php"> <input type= "image" id= "Login_Button" src="pictures/log.jpg" /> </a>

            <center> <h3 id="h3"><b> General Info </h3> </b></center>
            <table class="table table-bordered"  border = "2"width="500">
                <?php
                $id = $_SESSION['Initial'];
                $query = "SELECT * FROM teachers_info where Initial='$id'";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) 
				{
                    ?>
                    <img  src=" <?php echo $row["pictures"]; ?>" id= "imge" height="300" width="300"> <br><br>
                    <tr> <th>Id</th>             <td> <?php echo $row["Initial"]; ?> </td></tr>
                    <tr> <th>First_Name</th>     <td> <?php echo $row["First_Name"]; ?> </td> </tr>
                    <tr> <th >First_Name</th>     <td> <?php echo $row["Last_Name"]; ?> </td></tr>
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
            </table><br>

            <center> <h3> <b> Before Graduation </b></h3> </center>
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
                $query = "SELECT Name_Of_Degree,Institute,Board,Year,Result FROM before_graduation where Initial='1611319042'";
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
            </table> <br>
			
            <center> <h3> <b> After Graduation </b></h3> </center>
            <table  class="table table-bordered" >
                <tr> 
                    <th>Name Of Degree</th> 
                    <th >Major</th>
                    <th >Minor</th>
                    <th>Institute</th>        
                    <th >Year</th> 
                    <th >Result</th>  	
				</tr>
<?php
$id = $_SESSION["id"];
$query = "SELECT Name_Of_Degree,Major,Minor,Institute,Year,Result FROM after_graduation where Initial='1611319042'";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) 
{
    ?>

                    <tr>  
					    <td> <?php echo $row["Name_Of_Degree"]; ?> </td> 
                        <td> <?php echo $row["Major"]; ?> </td>
                        <td> <?php echo $row["Minor"]; ?> </td>
                        <td> <?php echo $row["Institute"]; ?> </td>
                        <td> <?php echo $row["Year"]; ?> </td> 
                        <td> <?php echo $row["Result"]; ?> </td>
					</tr>

    <?php
}
?>	
            </table> <br>	 



            <center> <h3> <b> Experience</b></h3> </center>
            <table  class="table table-bordered" >
                <tr> 
                    <th>Position</th>
                    <th >Organization</th>			 
                    <th>Time_Form</th>     
                    <th >Time_To</th>   
                    <th >Remarks</th> 
                </tr>
<?php
$id = $_SESSION["id"];
$query = "SELECT Position,Organization,Time_From,Time_To,Remarks FROM experience where Initial='1611319042'";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
    ?>

                    <tr>  <td> <?php echo $row["Position"]; ?> </td> 
                        <td> <?php echo $row["Organization"]; ?> </td>
                        <td> <?php echo $row["Time_From"]; ?> </td>
                        <td> <?php echo $row["Time_To"]; ?> </td> 
                        <td> <?php echo $row["Remarks"]; ?> </td>
                    </tr>

    <?php
}
?>	
            </table>


        </div>				
    </body>
</html>		



