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

    .collage_name {
        font-size: 3.5rem;
        text-align: center;
        margin: 2rem 0 6rem;
    }


    .formLabel {
        font-size: 1.3rem;
    }

    .heading {
        text-align: center;
        font-size: 4rem;
        margin: 0 0 2rem;
    }

    .heading1 {
        text-align: center;
        font-size: 3rem;
        margin: 0 0 2rem;
    }

    .main {
        padding: 1rem;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .student,
    .parents,
    .Courses,
    .note {
        width: 45rem;
        text-align: center;
        margin: 0 1rem 2rem;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        padding: 2rem;
        transition: all ease-in-out .4s;
        border-radius: 10px;
        background-color: rgb(238, 238, 238);
    }

    .note {
        padding: 0 5rem;
        position: absolute;
        bottom: -14rem;
        right: 10rem;
        width: 60rem;
    }

    .noteText {
        margin-top: 1rem;
    }

    .student:hover,
    .parents:hover,
    .hostel:hover {
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
</style>
<!-- <script>
    function register() {
        (alert('Your details have been saved. Now you can login using your email id and password. Click ok to    continue '))
        window.location.href = "/stu_login.php";

    }
</script> -->

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
    <div class="container">
        <h1 class="heading">Student Register</h1>
        <div class="main">
            <form action="insert.php" method="post">
                <div class="student">
                    <h2 class="heading1">STUDENT DETAILS</h2>

                    <label for="" class="formLabel">Student Name: <span class="star"> *</span></label><br>
                    <input name="StudentName" class="Student_detail input" type="text" required>
                    <br>

                    <label for="" class="formLabel">Roll Number: <span class="star"> *</span></label><br>
                    <input name="RollNo" type="text" class="input student_detail" required>
                    <br>

                    
                    <label for="" class="formLabel">Phone Number: <span class="star"> *</span> </label><br>
                    <input name="ContactNo" type="text" class="student_detail input" style=" text-align: center;"
                        maxlength="10" required max="10">
                    <br>

                    <label for="" class="formLabel">Email: <span class="star"> *</span></label><br>
                    <input name="EmailId" type="email" required class="student_detail input">
                    <br>

                    <label for="" class="formLabel">Password: <span class="star"> *</span></label><br>
                    <input name="Password" type="text" required class="student_detail input"><br>

                    <label for="" class="formLabel">Course Code: <span class="star"> *</span></label><br>
                    <input name="CourseCode" type="text" required class="student_detail input"><br>

                    <label for="" class="formLabel">Course Title<span class="star"> *</span></label><br>
                    <input name="CourseTitle" type="text" required class="student_detail input"><br>

                    <label for="img">Select image:</label>
                    <input type="file" id="img" name="img" accept="image/*">
                </div>
                
                <div class="note ">
                    <h4 class="note_details "></h4>
                    <input type="checkbox" required style="width: 1rem;">I agree all terms and conditions

                    <h4 class="noteText">Fields Marked with <span class="star"> *</span> are mandatory.</h4>

                    <button class="submit" type="submit" value="Submit" >Submit</button>
                </div>

            </form>
        </div>
</body>

</html>