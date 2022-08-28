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

        .navbar {
            background-color: #001f3f;
            /* height: 72px; */
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

        /* .navbar li a:hover {
            color: rgb(107, 99, 126)
        } */

        /* .search {
            float: right;
            color: white;
            padding: 12px 75px;
        } */

        .home {
            /* width: 100rem; */
            text-align: center;
            margin: 70px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            padding: 2rem;
            transition: all ease-in-out .4s;
            border-radius: 10px;
            background-color: rgb(238, 238, 238);
        }

        .faculty_login {
            width: 30rem;
            height: 2.5rem;
            font-size: 1.2rem;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #001f3f;
            margin: 2rem 0;
            transition: all ease-in-out .3s;
            color: white;
        }

        .stu_login {
            width: 13rem;
            height: 2.5rem;
            font-size: 1.2rem;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #001f3f;
            margin: 2rem 2rem;
            transition: all ease-in-out .3s;
            color: white;
        }
        .faculty_login:hover,
        .stu_login:hover {
            transform: scale(.98)
        }

        /* body {
            width: 100%;
            height: 100%;
            color: black;
            font-weight: bold;
            animation: myanimation 10s infinite; 
        } */
        body {
            line-height: 1.6;
            margin: 2em;
            min-width: 990px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <ul>
            <li class="nav_items"><a href="\Attendance Automater System\att\index1.php">Home</a></li>
            <li class="nav_items"><a href="#">College</a></li>
            <li class="nav_items"><a href="#">About us</a></li>
            <li class="nav_items"><a href="#">Contact us</a></li>
        </ul>
    </div>
    <div class="home">
        <img src="\Attendance Automater System\att\logo.png" alt="">
        <div class="Heading">
            <h1>Attendance Automater</h1>
        </div>
        <div class="main">
            <div class="desc">
                <p>An Educational ERP system that records the students attendance in an Institution </p> 
            </div>
            <div class="login_btns">
                <a href="\Attendance Automater System\att\faculty_login.php"><button class="faculty_login">Click here for Faculty Login</button><br></a>
                <a href="\Attendance Automater System\att\stu_login.php"><button class="stu_login">Student Login</button></a>
                <a href="\Attendance Automater System\att\stu_register.php"><button class="stu_login">New Student Register</button></a>
            </div>
        </div>

    </div>

</body>
</html>