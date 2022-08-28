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

        /* Column types */
        th.missed-col {
            background-color: #f00;
        }

        td.missed-col {
            background-color: #ffecec;
            color: #f00;
            text-align: center;
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
    </style>
    <script>
        function submit() {
            (alert('Attendance details have been saved. Click on Ok to go back'))
            window.location.href = "faculty_loggedin.php";
        };
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
        <p></p>
    </div> -->
    <h1> Attendance</h1>
    <table>
        <thead>
            <tr>
                <th class="name-col">Student Name↓ Date→</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
                <th>21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th>27</th>
                <th>28</th>
                <th>29</th>
                <th>30</th>

            </tr>
        </thead>
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
            while($row = $result->fetch_assoc()) { ?>z
        <tbody>
            <tr class="student">
                <?php echo"<td>" .$row['StudentName']."</td>" ?>
                <?php
                $attended = $row['Attended'];
                for ($x = 1; $x <= $attended ; $x++) {
                echo "<td class='attend-col'><input type='checkbox' checked></td>";} ?>
                <?php 
                $TCH = $row['TotalClassHours'];
                $T = $TCH - $attended ;
                for($y = 1; $y <= $T; $y++){
                    echo"<td class='attend-col'><input type='checkbox'></td>";
                    }
                    ?>
            </tr>
        </tbody>
        <?php ;}
                $connection->close(); ?>
    </table>
    <button class="submit_details" onclick="submit()">Click to save the Attendance</button>
    
</body>

</html>