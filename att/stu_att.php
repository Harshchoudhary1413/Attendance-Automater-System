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
        .att_percentage{
            padding: 50px;
            margin: 50px;
        }

        .piechart_att {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: conic-gradient(red 0deg 180deg, orange 180deg 201deg, yellow 201deg 360deg);
        }
    </style>
    <script>
        function logout() {
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

    <div class="container">
        <div class="containerq">
            <p>Name : Student Name1</p>
            <p>Roll Number: 0001</p>
            <p>Email id: student@123</p>
            <p>Contact Number: *****12345</p>
            <p>Course Title: Software Engineering</p>
            <p>Course Code: U18CSI4204</p>
            <h1> Attendance</h1>
            <p>Total Number of classes:30 </p>
            <p>Classes Attended: 15</p>
            <p>Attendance percentage: 50% </p>
            <p>Leave Approved: 2</p>
            <P>Final percentage: 56%</P>
            <div class="att_percentage">
                <p>Attendance ( RED : Classes Joined , Orange : Leave , Yellow : Absent)</p>
                <div class="piechart_att">
                </div>
            </div>
        </div>

    </div>
</body>
</html>