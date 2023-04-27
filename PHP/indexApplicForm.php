<?php

require_once('config/db.php');
$query = "select * from tblscinfo";
$result = mysqli_query($con, $query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,800;1,900&family=Teko:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <nav>
            <div class="brngyLbl">BARANGAY 48, PASAY CITY</div>
                <ul class="navItems">
                    <li id = "db"><a href="index.php">DASHBOARD</li>
                    <li id = "af"><a href="#">APPLICATION FORM</li>
                    <li id = "sc"><a href="indexSCTab.php">SENIOR CITIZENS</li>
                    <li id = "ma"><a href="#">MY ACCOUNT</li>
                </ul>

                <div class="logo">
                    <a href="#"><img src="pasay-logo-1 (4).png" alt="PasayLogo" id="brngyPic"></i></a>
                </div>
        </nav>

        <div id="DataContainer">
            <div id="official-lbl"><p>Application Form</p></div>

            <div class="formSection1">

            <form action="">


            <label for="LastName">Last Name</label>
            <input type="text" name="LastName" id="LastName" placeholder="Enter Last Name">

            <label for="LastName">First Name</label>
            <input type="text" name="FirstName" id="FirstName" placeholder="Enter First Name">

            <label for="LastName">Middle Name</label>
            <input type="text" name="MiddleName" id="MiddleName" placeholder="Enter Last Name">

            <label for="LastName">Address</label>
            <input type="text" name="Address" id="Address" placeholder="Enter Address">

            <label for="BirthDate">Birth Date</label>
            <input type="text" name="BirthDate" id="BirthDate" placeholder="Enter BirthDate">

            <label for="BirthPlace">Birth Place</label>
            <input type="text" name="BirthPlace" id="LastName" placeholder="Enter BirthPlace">

            <label for="LastName">Baranggay Number</label>
            <input type="text" name="BrngyNum" id="LastName" placeholder="Enter Last Name">


            </form>
            </div>

            <div class="formSection2">

            <form action="">

            <label for="LastName">SONA</label>
            <input type="text" name="sona" id="LastName" placeholder="Enter Last Name">

            <label for="LastName">District</label>
            <input type="text" name="District" id="LastName" placeholder="Enter Last Name">

            <label for="LastName">Age</label>
            <input type="text" name="Age" id="LastName" placeholder="Enter Last Name">

            <label for="LastName">Properties</label>
            <input type="text" name="Properties" id="LastName" placeholder="Enter Last Name">

            <label for="LastName">Monthly Income</label>
            <input type="text" name="MonthlyInc" id="LastName" placeholder="Enter Last Name">

            <label for="LastName">PWD</label>
            <input type="radio" name="rdbPWD" id="rdbPWD" value="Y" checked/>Yes 
            <input type="radio" name="rdbPWD" id="rdbPWD" value="N" checked/>No

            <label for="submit">Click to submit</label>
            <input type="submit" placeholder="SUBMIT">

            </form>

            </div>
                        
        </div>
</body>
</html>