
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "nsu_portal");
?>

<!DOCTYPE html>
<html>
    <head>            
        <title> Courses </title>
        <link rel="stylesheet" type ="text/css" href="Css files/Courses.css">
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
            <div id="tab">
                <table class="table table-bordered" id="table1">
                    <tr align="center">
                        <th width="20%">Course</th>
                        <th width="10%">Section</th>
                        <th width="20%">Credit</th>
                    </tr>

                    <?php
                    $id = $_SESSION["id"];
                    $query = "SELECT courses,section,credit FROM taken_courses WHERE id='$id' ";
                    $result = mysqli_query($connect, $query);

                    while ($row = mysqli_fetch_array($result)) 
					{
                        ?>  

                        <tr>
                            <td><?php echo $row["courses"]; ?></td>
                            <td><?php echo $row["section"]; ?></td>
                            <td><?php echo $row["credit"]; ?></td>	
                        </tr>

                        <?php
                    }
                    ?>	
                </table>
            </div>
        </div>	
    </body>
</html> 