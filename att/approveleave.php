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

        /* body {
            width: 100%;
            height: 100%;
            color: black;
            font-weight: bold;
            background-color: white;
        } */

        body {
            line-height: 1.6;
            margin: 2em;
            min-width: 990px;
        }

        .containerq p {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: .7cm;

        }

        h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1cm;
        }

        th {
            background-color: #001f3f;
            color: #fff;
            padding: 0.5em 1em;
        }

        td {
            border-top: 1px solid #eee;
            padding: 0.5em 0.5em;
        }

        input {
            cursor: pointer;
        }

        .name-col {
            text-align: left;
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
        input {
        /* margin: .5rem; */
        /* width: 30rem; */
        /* height: 2.2rem; */
        padding: 0 1rem;
        font-size: 1.2rem;
        text-align: center;
    }
    </style>
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
        <h1> Leave Requests</h1>
        <form action="approve.php" method = "post">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Roll number</th>
                    <!-- <th>Leave Requests</th> -->
                    <th>Leave Type</th>
                    <!-- <th>Status(check for approved)</th> -->
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Hour</th>
                    <th>Reason</th>
                    <th>closed date</th>
                    <th>Status (Tap here to approve)</th>
                    <th>Response</th>
                </tr>
            </thead>
            <tbody>
                <tr>
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
			$sql = "SELECT * FROM leavemanagement";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}
            while($row = $result->fetch_assoc()) {
                echo "
                    <td class='name-col'>".$row['StudentName']."</td>
                    <td class='rollno'>" .$row['RollNo']."</td>
                    <td class='type'>" .$row['LeaveType']."</td>
                    <td class='indate'>" .$row['InDate']."</td>
                    <td class='indate'>" .$row['ToDate']."</td>
                    <td class='classhour'>" .$row['ClassHours']."</td>
                    <td class='reason'>" .$row['Reason']."</td>
                    <td> <input name='ClosedDate' type='date'></td>
                    <td> <input name='Check' type='checkbox'></td>
                    <td> <input name='Response'type='text'></td>                    
            </tr>";
            if ( isset($_POST['Check']) ) {
                $Check = "1";
            } else { 
                $Check = "0";
            };}
                $connection->close();
                ?>     
                           
            </tbody>
        </table>
        <button class="leavesubmit" onclick="submit()">Submit</button>
    </div>
            </form>
</body>

</html>