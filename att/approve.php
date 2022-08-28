<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Submitted</title>
    <link rel="shortcut icon" type="image/jpg" href="\Attendance Automater System\att\/1606128233phpyrEOyV.png">

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

    
</style>

 
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
        // Taking all 5 values from the form data(input)
        $ClosedDate = $_REQUEST['ClosedDate'];
        $Status = $_REQUEST['Check'];
        $Response = $_REQUEST['Response'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "UPDATE leavemanagement SET Status = '$Status' , Response = '$Response' , ClosedDate = '$ClosedDate' WHERE SNO = '1'";

        if(mysqli_query($connection, $sql)){
            echo "<h1>Requests updated.</h1>";
        } else{
            echo "ERROR: Hush! Sorry $sql."
                . mysqli_error($conn);
        }
         
        // Close connection
        $connection->close();
        ?>
</body>
 
</html>