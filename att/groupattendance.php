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
    </style>
    <script>
        function downloadCSV(csv, filename) {
            var csvFile;
            var downloadLink;

            // CSV file
            csvFile = new Blob([csv], { type: "text/csv" });

            // Download link
            downloadLink = document.createElement("a");

            // File name
            downloadLink.download = filename;

            // Create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Hide download link
            downloadLink.style.display = "none";

            // Add the link to DOM
            document.body.appendChild(downloadLink);

            // Click download link
            downloadLink.click();
        }
        function exportTableToCSV(filename) {
            var csv = [];
            var rows = document.querySelectorAll("table tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [], cols = rows[i].querySelectorAll("td, th");

                for (var j = 0; j < cols.length; j++)
                    row.push(cols[j].innerText);

                csv.push(row.join(","));
            }

            // Download CSV file
            downloadCSV(csv.join("\n"), filename);
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

    <div class="container">
        <h1>Class Attendance Records</h1>
        <p>Total Number of students: 7</p>
        <p>Total class hours: 30</p>
        <div class="containerq">
            <table>
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Roll Number</th>
                        <th>Course Title</th>
                        <th>Course Code</th>
                        <th>Total class hours</th>
                        <th>Total Classes Attended</th>
                        <th>Present percentage</th>
                        <th>Leaves Approved</th>
                        <th>Final Attendance Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="student">
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
			$sql = "SELECT * FROM attendancerecords";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}
            while($row = $result->fetch_assoc()) { 

            echo " 
                        <td>" .$row['StudentName']. "</td>
                        <td>" .$row['RollNo']. "</td> 
                        <td>" .$row['CourseTitle']. "</td>
                        <td>" .$row['CourseCode']. "</td>
                        <td>" .$row['TotalClassHours']. "</td>
                        <td>" .$row['Attended']. "</td>
                        <td>" .$row['PresentPercentage']. "</td>
                        <td>" .$row['LeavesApproved']. "</td>
                        <td>" .$row['FinalAttendancePercentage']. "</td>
                    </tr>
                    " ;}
                        $connection->close();
                        ?>
                </tbody>
            </table>
        </div>
        <button onclick="exportTableToCSV('attendance.csv')">Click here to download the attendance sheet</button>

    </div>
    
</body>

</html>