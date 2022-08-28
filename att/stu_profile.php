<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Cards</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

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

        button {
            cursor: pointer;
        }

        button:hover {
            transform: scale(0.98);
        }

        body {
            line-height: 1.6;
            margin: 2em;
            min-width: 990px;
        }


        .heading {
            font-size: 4rem;
            text-align: center;
            margin-bottom: 3rem;
        }
        .containerq p {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: .7cm;
        }

        .container {
            padding: 50px;
            margin: 50px;
            background-color: rgb(238, 238, 238);;
            color: black;
        }

        h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1cm;
        }
        .faculty_profile {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            border: 5px solid #272133;
            margin-top: 20px;
            box-shadow: 0 10px 50px rgb(255, 253, 254);
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


    </style>
    <script>
        function logout(){
            (alert("Press Ok to confirm to logout"))
            window.location.href = "/stu_login.php";
        }
    </script>
</head>

<body>
    <div class="navbar">
        <ul>
            <li class="nav_items"><a href="\Attendance Automater System\att\index1.php">Home</a></li>
            <li class="nav_items"><a href="#">College</a></li>
            <!-- <li class="nav_items"><a href="#">Login/Signup</a></li> -->
            <li class="nav_items"><a href="#">About us</a></li>
            <li class="nav_items"><a href="#">Contact us</a></li>
        </ul>
    </div>

    <div class="containerq">
        <h1> Dashboard</h1>
        <p>"THE BEAUTIFUL THING ABOUT LEARNING IS THAT NOBODY CAN TAKE IT FROM YOU."</p>
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

            // read all row from database table
			$sql = "SELECT * FROM studentdetails";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}
            while($row = $result->fetch_assoc()) { ?>
            
            <img class="faculty_profile" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['profilepic']); ?>" /> 

            <?php
            echo " 
            <p>Name:" .$row['StudentName']. "</p>
            <p>Roll Number:" .$row['RollNo']."</p>
            <p>Email id : ".$row['UserId']."</p>
            <p>Contact Number: ".$row['ContactNo']."</p>
            <p>Branch: ".$row['Branch']."</p>
            <p>Batch: ".$row['Year']."</p>";}
            $connection->close();
        ?>
        <a href="\Attendance Automater System\att\stu_attendance.php"><button>Click here to check your Attendance</button></a><br>
        <a href="\Attendance Automater System\att\applyleave.php"><button>Click here to Apply Leave</button></a><br>
        </div>
             
        </div>
        <button class="logout" onclick="logout()">Logout</button>
            
        
    </div>


</body>

</html>