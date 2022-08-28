<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KCT</title>
    <link rel="shortcut icon" type="image/jpg" href="images/1606128233phpyrEOyV.png">

</head>
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



    body {
        line-height: 1.6;
        margin: 2em;
        min-width: 990px;
    }

    input {
        margin: .5rem;
        width: 30rem;
        height: 2.2rem;
        padding: 0 1rem;
        font-size: 1.2rem;
        text-align: center;
    }

    .heading {
        font-size: 3.5rem;
        text-align: center;
        margin: 2rem 0 6rem;
    }


    .formLabel {
        font-size: 1.3rem;
    }

    .heading {
        margin: 0 0 2rem;
    }

    .main {
        padding: 1rem;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .faculty_login {
        width: 45rem;
        text-align: center;
        margin: 0 1rem 2rem;
        box-shadow: rgba(55, 57, 58, 0.3) 0px 1px 2px 0px, rgba(41, 43, 45, 0.15) 0px 1px 3px 1px;
        padding: 2rem;
        transition: all ease-in-out .4s;
        border-radius: 10px;
        background-color: white;
    }

    .faculty_login:hover {
        transform: scale(.99);
    }

    .submit {
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

    .star {
        color: rgb(204, 21, 21);
    }

    .submit:hover {
        transform: scale(.98)
    }

    .container {
        padding: 50px;
        margin: 50px;
        background-color: rgb(238, 238, 238);
        color: black;
    }
    .records{
        padding: 50px;
        margin: 50px;
        background-color: #001f3f;
        color: white;
        list-style: none;

    }
</style>
<script>
    function apply_leave() {
        (alert('Leave is applied.Assist your mentor or class advisor for approval. Click on ok to go back'))
        window.location.href = "/student/stu_profile.php";
    };
</script>

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
    <h1 class="heading">Apply Leave</h1>

    <div class="main">
        <div class="container">
            <form action="insertleave.php" method="post">
            <div class="faculty_login">
                <img src="\Attendance Automater System\att\logo.png" alt=""><br>
                <label for="" class="formLabel">Student Name: <span class="star"> *</span></label><br>
                <input name="StudentName" class="Student_detail input" type="text" required>
                <br>

                <label for="" class="formLabel">Roll Number: <span class="star"> *</span></label><br>
                <input name="RollNo" type="text" class="input student_detail" required>
                <br>
                <label class="formLabel">From Date<span class="star"> *</span></label><br>
                <input name="Date" type="date" id="indate" required class="student_detail input">
                <br>
                <label class="formLabel">To Date<span class="star"> *</span></label><br>
                <input name="ToDate" type="date" id="outdate" required class="student_detail input">
                <br>
                <label for="" class="formLabel">Leave Type: <span class="star"> *</span></label><br>
                <input name="LeaveType" type="text" class="input student_detail" required>
                <br>
                <label for="" class="formLabel">Enter the hours <span class="star"> *</span></label><br>
                <input name="ClassHours" type="text" class="input student_detail" required>
                <br>
                <label class="formLabel">Reason:<span class="star"> *</span></label><br>
                <input name="Reason" type="text" id="reason" required class="student_detail input"><br>
                <label class="formLabel">Upload the required document<span class="star"></span></label><br>
                <input name="check" type="file" id="reason"  class="student_detail input">
                <button class="submit" type="submit" value="Submit" >Apply Leave</button>
                <div class="records">
                    <div class="entries">
                        <p>Here the record of leave will be available along with the status whether approved or
                            rejected.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</form>
</body>

</html>