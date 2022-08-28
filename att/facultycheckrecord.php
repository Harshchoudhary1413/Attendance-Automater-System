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

        .container {
            background-color: rgb(238, 238, 238);
            margin: 50px;
            height: 900px;

        }

        .containerb {
            margin: 20px;
            display: grid;
            grid-template-columns: 200px 200px 200px 200px 200px 200px;
            grid-gap: 30px;
            justify-content: center;
            align-items: center;
            /* height: 50vh; */
            font-family: 'roboto', cursive;
        }

        .card {
            background-color: #001f3f;
            height: 15rem;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: rgba(0, 0, 0, 0.7);
            color: white;
        }

        .card__name {
            margin-top: 15px;
            font-size: 1.5em;
        }

        .card__image {
            height: 100px;
            width: 100px;
            border-radius: 50%;
            border: 5px solid #272133;
            margin-top: 20px;
            box-shadow: 0 10px 50px rgb(255, 253, 254);
        }

        .grid-container {
            display: grid;
            /* grid-template-columns: 1fr 1fr; */
            /* grid-gap: 2px; */
            font-size: 1.1em;
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

        .btn_att {
            padding: 3px;
            background-color: #001f3f;
            color: white;
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
    <div class="container">
        <div class="heading">
            <p>Course Title: Engineering Clinic </p>
            <p>Course Code: U18CSI4204</p>
            <p>Total Number of students : 12</p>
            <p>Batch: 2020-2024</p>
            <a href="\Attendance Automater System\att\groupattendance.php"><button>Group Attendance</button></a><br>
        </div>
        <div class="containerb">


            <div class="card">
                <img src="/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image"
                    class="card__image">
                <p class="card__name">Student_Name1</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.1
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name2</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.2
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name3</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.3
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name4</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.4
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name5</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.5
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name6</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.6
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name7</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.7
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name8</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.8
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name9</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.9
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name10</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.10
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name11</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.11
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
            <div class="card">
                <img src="/Images/pngtree-vector-edit-profile-icon-png-image_758006.jpg" alt="Student_image  "
                    class="card__image">
                <p class="card__name">Student_Name12</p>
                <div class="grid-container">

                    <div class="grid-child-roll_number">
                        Roll No.12
                    </div>
                    <a href="\Attendance Automater System\att\stu_att.php"><button class="btn_att">Attendance</button></a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>