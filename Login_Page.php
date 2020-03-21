<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "nsu_portal");
?>

<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transtional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>            
        <title> 
            Login Page
        </title>

        <link rel="stylesheet" type ="text/css" href="Css files/Login_Page.css">
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

            <div id= "User_Pass">			
                <center>
                    <form class="myform" action="Login_page.php"  method="post">
                        <input type= "text" id= "id" name="id" placeholder=" please enter your name " /> <br><br> 							
                        <input type= "Password" id="pass" name="Password" placeholder="password" /><br>		    
                        <a href="#" title="Forgot Password" > Forgot your password ?</a> <br><br><br>						    						
                        <input type="submit" name="L_button" id="L_button" value="Login"> </input> <br><br>
                    </form>	
                </center>
            </div> <!-- Username,password box ends here-->


            <?php
            if (isset($_POST['L_button'])) 
			{
                if (isset($_POST["id"])) 
				{
                    $id = $_POST['id'];
                    $Password = $_POST['Password'];
                    $query = "select * from students_info WHERE id='$id' AND New_Password='$Password'";
                    $result = mysqli_query($connect, $query);
                    $num = mysqli_num_rows($result);
                    if ($num > 0)
					{
                        $row = mysqli_fetch_array($result);
                        $_SESSION['id'] = $row['id'];
                        header('location:Home.php');
                    }  // login with the student id ends here
                    else if (isset($_POST["id"]))
					{
                        $Initial = $_POST['id'];
                        $Password = $_POST['Password'];
                        $query = "select * from teachers_info WHERE Initial='$Initial' AND New_Password='$Password'";
                        $result = mysqli_query($connect, $query);
                        $num = mysqli_num_rows($result);
                        if ($num > 0) 
						{
                            $row = mysqli_fetch_array($result);
                            $_SESSION['Initial'] = $row['Initial'];
                            header('location:Teach.php');
                        }
						else if ($_POST["id"] == 'cse' && $_POST['Password'] == 456)
						{
                            header('location:students form.php');
                        }
						else 
						{ // this 'else' using for both students and faculties invalid login 
                            echo '<script type="text/javascript"> alert("Usrname and Password did not match aaaaaaaaaaaaaaaaaaaaa") </script>';
                        }
                    }
                }
            }
            ?>

        </div>

    </body>
</html>	
