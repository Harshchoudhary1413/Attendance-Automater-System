<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Automater</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        @import url("https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400;500&display=swap");

        .navbar {
            background-color: #001f3f;
            /* border-radius: 30px; */

        }

        .navbar ul {
            overflow: auto;
        }

        .navbar li {
            float: left;
            list-style: none;
            margin: 13px 20px;

        }

        .navbar li a {
            padding: 3px 3px;
            text-decoration: none;
            color: white;
        }

        .heading {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 3rem;
        }

        body {
            line-height: 1.6;
            margin: 2em;
            min-width: 990px;
        }

        .containerq p {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: .7cm;
        }

        .container {
            padding: 50px;
            margin: 50px;
            background-color: rgb(238, 238, 238);
            color: black;
        }

        h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1cm;
        }

        button {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            font-size: 15px;
            background-color: #001f3f;
            color: white;
        }
        button:hover {
            transform: scale(0.98);
        }
        .faculty_profile {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            border: 5px solid #272133;
            margin-top: 20px;
            box-shadow: 0 10px 50px rgb(255, 253, 254);
        }
    </style>
    <script>
        function logout(){
             (alert("Press Ok to confirm to logout"))
            window.location.href = "faculty_login.php";
        }
    </script>

</head>

<body>
    <div class="navbar">
        <ul>
            <li class="nav_items"><a href="\Attendance Automater System\att\index1.php">Home</a></li>
            <li class="nav_items"><a href="#">College</a></li>
            <!-- <li class="nav_items"><a href="/">Login/Signup</a></li> -->
            <li class="nav_items"><a href="#">About us</a></li>
            <li class="nav_items"><a href="#">Contact us</a></li>
        </ul>
    </div>
    <!-- <div class="heading">
        <h1>Dashboard</h1>
        <p></p>-->


    <div class="containerq">
        <h1> Dashboard</h1>
        <p>"THE DUTIES OF A TEACHER ARE NEITHER FEW NOR SMALL, BUT THEY ELEVATE THE MIND AND GIVE ENERGY TO THE
            CHARACTER"</p>
        <div class="container">
        <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "attendance_automater_system";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}
            $sql = "SELECT * FROM facultydetails";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}
            while($row = $result->fetch_assoc()) { ?>
            
            <img class="faculty_profile" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['ProfilePhoto']); ?>" /> 

            <?php
            echo " 
            <p>Name:" .$row['FacultyName']. "</p>
            <p>Email id : ".$row['UserId']."</p>
            <p>Contact Number: ".$row['ContactNo']."</p>
            <p>Branch: ".$row['Department']."</p>
            <p>Affiliation: ".$row['Affiliation']."</p>";}
            $connection->close();
        ?>
        

            <a href="\Attendance Automater System\att\facultyrecordatt.php"><button>Record Attendance</button></a><br>
            <a href="\Attendance Automater System\att\groupattendance.php"><button>Check Attendance</button></a><br>
            <a href="\Attendance Automater System\att\approveleave.php"><button>Leave Management</button></a><br>  
  
        </div>
        <button class="logout" onclick="logout()">Logout</button>
        </div>

</body>

</html>