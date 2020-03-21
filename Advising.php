
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "nsu_portal");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Advising</title>		 
        <link rel="stylesheet" type ="text/css" href="Css files/Advising.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="ajax.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
            <div id="scroll">
                <table id="table1" border="2" align="right"  width="480">
                    <thead>
                        <tr >
                            <th align="center"><b> course</b></th>
                            <th><b> section</b></th>
                            <th><b> credit</b></th>
                            <th><b> Time</b></th>
                            <th><b> Fees</b></th>
                        </tr>
                    </thead>
                    <tr> <td>cse 311</td> <td>1</td> <td>3.00</td> <td>01:00 PM - 02:30 PM RA</td> <td>16500.00</td> </tr>
                    <tr> <td>cse 312</td> <td>1</td> <td>3.00</td> <td>02:00 PM - 02:30 PM RA</td> <td>16500.00</td> </tr>
                    <tr> <td>cse 313</td> <td>3</td> <td>3.00</td> <td>03:00 PM - 02:30 PM RA</td> <td>16500.00</td> </tr>
                    <tr> <td>cse 314</td> <td>4</td> <td>3.00</td> <td>04:00 PM - 02:30 PM RA</td> <td>16500.00</td> </tr>
                    <tr> <td>cse 315</td> <td>5</td> <td>3.00</td> <td>05:00 PM - 02:30 PM RA</td> <td>16500.00</td> </tr>
                    <tr> <td>cse 332</td> <td>1</td> <td>3.00</td> <td>08:00 PM - 02:30 PM RA</td> <td>16500.00</td> </tr>
                </table>
            </div>

            <div id="2nd_table">
                <form method="post">
                    <table id="table2" border="2" width="500">
                        <tr>
                            <th align="center">Course</th>
                            <th align="center">Section</th>
                            <th align="center">Credit</th>
                            <th align="center">Time</th>
                            <th align="center">Fees</th>
                            <th> </th>                      
                        </tr>
                    </table> 

                </form>
                <br> <br> 
                <div id="label">
                    <label> Student Actuvity Fee :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2000.00</label><br>
                    <label> Computer Lab Fee:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1500.00</label><br>
                    <label> Library Fee:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 500.00</label><br> 
                </div>
                <label id="ab" > <b>. ---------------------------------------------------------------------------------------------------</b></label><br>
                <span id="val"></span> <br> <br>
                <input type="submit" name="sub" id="save" value="save" >	<br> <br><br> <br>	  
            </div>
            <div id="label2"> 
                <label id="aa" > <b> ⇒ Dropping Is Not Allowed. </b></label><br>
                <label id="aa"> <b>⇒ Section Change Is Not Allowed. </b></label><br> 
                <label id="bb"> <b> ⇒ ECE Students Must Take Applicable Lab With Their Theory Section. <b/> </label><br> 
            </div>

            <script>
                $(document).ready(function ()
                {
                    $('#save').click(function ()
                    {
                        var course = [];
                        var section = [];
                        var credit = [];
                        var Fees = [];

                        for (var i = 0; i < table2.rows.length - 1; i++)
                        {
                            course [i] = table2.rows[i + 1].cells[0].innerHTML;
                            section[i] = table2.rows[i + 1].cells[1].innerHTML;
                            credit [i] = table2.rows[i + 1].cells[2].innerHTML;
                            Fees   [i] = table2.rows[i + 1].cells[4].innerHTML;

                        }

                        var jsonString1 = JSON.stringify(course);
                        var jsonString2 = JSON.stringify(section);
                        var jsonString3 = JSON.stringify(credit);
                        var jsonString4 = JSON.stringify(Fees);
                        $.ajax(
                                {
                                    type: "POST",
                                    url: "insert_data.php",
                                    data: {course: jsonString1, section: jsonString2, credit: jsonString3, Fees: jsonString4},
                                    cache: false,
                                    success: function (data) { }
                                });

                        alert("course saved succesfully");
                    });

                    var k;
                    var o;
                    var found = false;

                    for (var i = 1; i < table1.rows.length; i++)
                    {
                        var tabl = document.getElementById('table2');
                        table1.rows[i].onclick = function ()
                        {
                            if (found == true)
                            {
                                var fo = false;
                                for (o = 1; o < table2.rows.length; o++)
                                {
                                    if (table2.rows[o].cells[0].innerHTML == this.cells[0].innerHTML || table2.rows[o].cells[3].innerHTML == this.cells[3].innerHTML)
                                    {
                                        fo = true;
                                        break;
                                    }
                                }

                                if (fo == true)
                                {
                                    alert("this course already added you");
                                }
								else
                                {
                                    // Adding new rows
                                    var newRow = table2.insertRow(table2.length);
                                    cell1 = newRow.insertCell(0);
                                    cell2 = newRow.insertCell(1);
                                    cell3 = newRow.insertCell(2);
                                    cell4 = newRow.insertCell(3);
                                    cell5 = newRow.insertCell(4);
                                    cell6 = newRow.insertCell(5);

                                    // add values to the cells						
                                    cell1.innerHTML = this.cells[0].innerHTML;
                                    cell2.innerHTML = this.cells[1].innerHTML;
                                    cell3.innerHTML = this.cells[2].innerHTML;
                                    cell4.innerHTML = this.cells[3].innerHTML;
                                    cell5.innerHTML = this.cells[4].innerHTML;
                                    cell6.innerHTML = "❌";

                                    // delete rows 							
                                    var index, table = document.getElementById('table2');
                                    for (var a = 1; a < table2.rows.length; a++)
                                    {
                                        table2.rows[a].cells[5].onclick = function ()
                                        {
                                            var c = confirm("do you want to delete this row");
                                            if (c === true)
                                            {
                                                index = this.parentElement.rowIndex;
                                                table2.deleteRow(index);
                                            }

                                            var sumVal = 4000.00;
                                            for (var j = 1; j < table2.rows.length; j++)
                                                sumVal = sumVal + parseFloat(table2.rows[j].cells[4].innerHTML);
                                            document.getElementById("val").innerHTML = "Total = " + sumVal + ".00";

                                        };

                                    }


                                    // sum of the fees

                                    var table = document.getElementById("table2"), sumVal = 4000.00;
                                    for (var b = 1; b < table2.rows.length; b++)
                                    {
                                        sumVal = sumVal + parseFloat(table2.rows[b].cells[4].innerHTML);
                                    }
                                    document.getElementById("val").innerHTML = "Total = " + sumVal + ".00";

                                    // sum ends

                                }


                            }
							else
                            {

                                // Adding new rows
                                var newRow = table2.insertRow(table2.length);
                                cell1 = newRow.insertCell(0);
                                cell2 = newRow.insertCell(1);
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);
                                cell6 = newRow.insertCell(5);

                                // add values to the cells						
                                cell1.innerHTML = this.cells[0].innerHTML;
                                cell2.innerHTML = this.cells[1].innerHTML;
                                cell3.innerHTML = this.cells[2].innerHTML;
                                cell4.innerHTML = this.cells[3].innerHTML;
                                cell5.innerHTML = this.cells[4].innerHTML;
                                cell6.innerHTML = "❌";

                                for (k = 1; k < table2.rows.length; k++)
                                {
                                    if (table2.rows[k].cells[0].innerHTML == this.cells[0].innerHTML || table2.rows[k].cells[3].innerHTML == this.cells[3].innerHTML)
                                    {
                                        found = true;
                                        break;
                                    }

                                }
                                // delete rows 

                                var index, table = document.getElementById('table2');
                                for (var a = 1; a < table2.rows.length; a++)
                                {
                                    table2.rows[a].cells[5].onclick = function () {
                                        var c = confirm("do you want to delete this row");
                                        if (c === true) {
                                            index = this.parentElement.rowIndex;
                                            table2.deleteRow(index);
                                        }

                                        var sumVal = 4000.00;
                                        for (var j = 1; j < table2.rows.length; j++)
                                            sumVal = sumVal + parseFloat(table2.rows[j].cells[4].innerHTML);
                                        document.getElementById("val").innerHTML = "Total = " + sumVal + ".00";
                                    };
                                }



                                // sum of the fees

                                var table = document.getElementById("table2"), sumVal = 4000.00;
                                for (var b = 1; b < table2.rows.length; b++)
                                {
                                    sumVal = sumVal + parseFloat(table2.rows[b].cells[4].innerHTML);
                                }
                                document.getElementById("val").innerHTML = "Total = " + sumVal + ".00";

                                // sum ends						
                            }
                        }
                    }

                });</script>  

            <span id="val"></span> <br> <br>


        </div> 
    </body>
</html>
