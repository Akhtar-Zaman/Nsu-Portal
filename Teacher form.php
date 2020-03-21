<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "nsu_portal")
?>



<!DOCTYPE html> 
<html>
    <head> 
        <title> Teachers INFO </title>
        <link rel="stylesheet" type="text/css" href="Css files/Teacher_ Form.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="ajax.js"></script>
        <script type="text/javascript">
            function PreviewImage()
			{
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("a").files[0]);
                oFReader.onload = function (oFREvent) 
				{
                    document.getElementById("uploadPreview").src = oFREvent.target.result;
                };
            }
            ;

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
            <center> <h2> Teacher Application Form </h2> <br> <br> <br>


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
                <input type="text" name="id"  class="textbox" placeholder="Initial" /><br><br>
                <input type="password" name="Npassword"  class="textbox" id="password" placeholder="New Password" />  <br><br>
                <input type="password" name="Cpassword" class="textbox"  id="cpass" placeholder="Confirm Password" /><br><br><br><br>
                <h4> ADDRESS </h4><br>
                <input type="text" name="house_no"  class="textbox" id="house_no" placeholder="House No." />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="location"  class="textbox" id="location" placeholder="Location" /><br> <br>
                <input type="text" name="village"  class="textbox" id="village" placeholder="Village/Street" /> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="thana"  class="textbox" placeholder="Thana" id="thana" /><br> <br>
                <input type="text" name="district" class="textbox"  id="district" placeholder="District" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="text" name="pcode" class="textbox"  id="pcode" placeholder="Post Code"> <br><br><br><br>


                <h4>Educational Qualification (Before graduation)</h4><br>
                <table id="table1" border="2" width="800">
                    <thead>
                    <th align="center"> Name of Degree </th>
                    <th> Institute </th>
                    <th> Board </th>
                    <th> Year </th>
                    <th> result </th>	
                    </thead>

                    <tr> 
                        <td> JSC/JDC </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>

                    <tr> 
                        <td> SSC/DAKHIL </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>

                    <tr> 
                        <td> HSC/ALIM </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>
                </table>
                <br> <br><br><br>
				
                <h4>Educational Qualification (Graduation and after Graduation)</h4><br>
                <table id="table2" border="2" width="800">
                    <thead>
                    <th align="center"> Name of Degree </th>
                    <th> Major </th>
                    <th> Minor </th>
                    <th> Institute </th>
                    <th> Year </th>
                    <th> result </th>

                    </thead>

                    <tr> 
                        <td> B.Sc. </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>

                    <tr> 
                        <td> M.Sc. </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>

                    <tr> 
                        <td> Ph.D. </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>
                </table>
                <br> <br><br><br>
				
                <h4>Experience</h4><br>
                <table id="table3" border="2" width="800">
                    <thead>
                    <th align="center"> Position </th>
                    <th> Organization </th>
                    <th> Time from </th>
                    <th> Time to</th>
                    <th> Remarks </th>	
                    </thead>

                    <tr> 
                        <td> Lecturer </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>

                    <tr> 
                        <td> Asst.professor </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>

                    <tr> 
                        <td> Associate professor </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>
					
                    <tr> 
                        <td> professor </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>

                    <tr> 
                        <td> Post-Doc</td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                        <td contenteditable=""> </td>
                    </tr>
                </table>
                <br> <br>
				
                <input type="submit" name="submit" id="submit" value="submit" /><br><br><br><br>
            </center>
        </form>


        <?php
        if (isset($_POST['id'])) 
		{
            $F_Name = $_POST['fname'];
            $L_Name = $_POST['lname'];
            $Fathers_name = $_POST['fathers_name'];
            $Mothers_name = $_POST['mothers_name'];
            $Email = $_POST['Email'];
            $Phone = $_POST['Phone_No'];
            $Dob = $_POST['dob'];
            $Initial = $_POST['id'];
            $New_Password = $_POST['Npassword'];
            $Confirm_Password = $_POST['Cpassword'];
            $House = $_POST['house_no'];
            $Location = $_POST['location'];
            $Village = $_POST['village'];
            $Thana = $_POST['thana'];
            $District = $_POST['district'];
            $Post_Code = $_POST['pcode'];
            $_SESSION['id'] = $_POST['id'];


            $img_name = $_FILES['a']['name'];
            $img_size = $_FILES['a']['size'];
            $img_tmp = $_FILES['a']['tmp_name'];

            $directory = 'Teachers Picture/';
            $target_file = $directory . $img_name;


            move_uploaded_file($img_tmp, $target_file);

            $query = "INSERT INTO teachers_info VALUES ('$Initial','$F_Name','$L_Name','$Fathers_name','$Mothers_name','$Email','$Phone','$Dob','$New_Password','$Confirm_Password','$House','$Location','$Village','$Thana','$District','$Post_Code','$target_file')";
            $result = mysqli_query($connect, $query);
            //$row = mysqli_fetch_array($result);
            if ($result) 
			{
                echo '<script type="text/javascript"> alert("inserted") </script>';
            }
			else
                echo '<script type="text/javascript"> alert("something is wrong") </script>';
        }
        ?>
    </div>
    <script>

        $(document).ready(function ()
        {
            var x = "<?php echo $_SESSION['id'] ?>";
            if (x != "") {
                $('#submit').click(function () {
                    var N_Degree = [];
                    var Institute = [];
                    var Board = [];
                    var Year = [];
                    var result = [];

                    for (var i = 0; i < table1.rows.length - 1; i++)
                    {
                        N_Degree [i] = table1.rows[i + 1].cells[0].innerHTML;
                        Institute[i] = table1.rows[i + 1].cells[1].innerHTML;
                        Board [i] = table1.rows[i + 1].cells[2].innerHTML;
                        Year   [i] = table1.rows[i + 1].cells[3].innerHTML;
                        result   [i] = table1.rows[i + 1].cells[4].innerHTML;
                    }

                    var jsonString1 = JSON.stringify(N_Degree);
                    var jsonString2 = JSON.stringify(Institute);
                    var jsonString3 = JSON.stringify(Board);
                    var jsonString4 = JSON.stringify(Year);
                    var jsonString5 = JSON.stringify(result);
                    $.ajax(
                            {
                                type: "POST",
                                url: "Tea.php",
                                data: {N_Degree: jsonString1, Institute: jsonString2, Board: jsonString3, Year: jsonString4, result: jsonString5},
                                cache: false,
                                success: function (data) { }
                            });

                    // Second table

                    var N_Degree1 = [];
                    var Major = [];
                    var Minor = [];
                    var Institute1 = [];
                    var Year1 = [];
                    var result1 = [];

                    for (var i = 0; i < table2.rows.length - 1; i++)
                    {
                        N_Degree1 [i] = table2.rows[i + 1].cells[0].innerHTML;
                        Major[i] = table2.rows[i + 1].cells[1].innerHTML;
                        Minor [i] = table2.rows[i + 1].cells[2].innerHTML;
                        Institute1   [i] = table2.rows[i + 1].cells[3].innerHTML;
                        Year1   [i] = table2.rows[i + 1].cells[4].innerHTML;
                        result1   [i] = table2.rows[i + 1].cells[5].innerHTML;
                    }

                    var jsonString6 = JSON.stringify(N_Degree1);
                    var jsonString7 = JSON.stringify(Major);
                    var jsonString8 = JSON.stringify(Minor);
                    var jsonString9 = JSON.stringify(Institute1);
                    var jsonString10 = JSON.stringify(Year1);
                    var jsonString11 = JSON.stringify(result1);
                    $.ajax(
                            {
                                type: "POST",
                                url: "Tea.php",
                                data: {N_Degree1: jsonString6, Major: jsonString7, Minor: jsonString8, Institute1: jsonString9, Year1: jsonString10, result1: jsonString11},
                                cache: false,
                                success: function (data) { }
                            });


                    // 3rd table
                    var Position = [];
                    var Organization = [];
                    var Time_from = [];
                    var Time_to = [];
                    var Remarks = [];

                    for (var i = 0; i < table3.rows.length - 1; i++)
                    {
                        Position [i] = table3.rows[i + 1].cells[0].innerHTML;
                        Organization[i] = table3.rows[i + 1].cells[1].innerHTML;
                        Time_from [i] = table3.rows[i + 1].cells[2].innerHTML;
                        Time_to   [i] = table3.rows[i + 1].cells[3].innerHTML;
                        Remarks   [i] = table3.rows[i + 1].cells[4].innerHTML;
                    }

                    var jsonString12 = JSON.stringify(Position);
                    var jsonString13 = JSON.stringify(Organization);
                    var jsonString14 = JSON.stringify(Time_from);
                    var jsonString15 = JSON.stringify(Time_to);
                    var jsonString16 = JSON.stringify(Remarks);
                    $.ajax(
                            {
                                type: "POST",
                                url: "Tea.php",
                                data: {Position: jsonString12, Organization: jsonString13, Time_from: jsonString14, Time_to: jsonString15, Remarks: jsonString16},
                                cache: false,
                                success: function (data) { }
                            });


                });
            }
        });
		</script>

</body>
</html>
