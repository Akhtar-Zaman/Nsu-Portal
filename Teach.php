
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "nsu_portal");
?>

<html>
    <head>            
        <title> Teach </title>  
        <link rel="stylesheet" type ="text/css" href="Css files/Teach.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />		
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="ajax.js"></script>
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
            <center>
                <div class="My_Account">									
                    <ul>
                        <li> <?php
                            $id = $_SESSION['Initial'];
                            $query = "SELECT First_Name FROM teachers_info where Initial='$id' ";
                            $result = mysqli_query($connect, $query);
                            $ro = mysqli_fetch_array($result);
                            echo " <a href ='http://localhost/NSU%20PORTAL/Teachers%20Information.php' </a> <i class='fas fa-address-book'></i> " . $ro["First_Name"];
                            ?>				  
                        </li>														
                    </ul>												
                </div>
            </center>
            <a href="http://localhost/NSU%20PORTAL/Login_Page.php"> <input type= "image" id= "Login_Button" src="pictures/log.jpg" /> </a>
            <table class="table table-bordered" id="table">
                <tr>
                    <th width="40%">Course</th>
                    <th width="10%">Section</th>
                    <th width="20%">Faculty</th>
                </tr>
                <?php
                $initial = $_SESSION['Initial'];
                $query = "SELECT course,section,faculty FROM teach_courses ";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {
                    ?>  
                    <tr class="table-row" data-href="http://localhost/NSU%20PORTAL/details.php">
                        <td> <?php echo $row["course"]; ?></td> 
                        <td> <?php echo $row["section"]; ?></td>
                        <td> <?php echo $row["faculty"]; ?></td>	
                    </tr>

                    <?php
                }
                ?>	
            </table>


            <script>
                $(document).ready(function ()
                {
                    $(".table-row").click(function ()
                    {
                        window.document.location = $(this).data("href");
                    });

                    for (var i = 1; i < table.rows.length; i++)
                    {
                        table.rows[i].onclick = function ()
                        {
                            var course = this.cells[0].innerHTML;
                            var section = this.cells[1].innerHTML;
                            $.ajax
                                    ({
                                        method: "POST",
                                        url: "new.php",
                                        data: {course: course, section: section},
                                        cache: false,
                                        success: function (data) { }
                                    });
                        };
                    }
                });
            </script>

        </div>	

    </body>
</html> 