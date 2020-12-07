<?php

include '../../database/dbconnect.php';
session_start();

 if (!$_SESSION["login_or_not"])
 {
   header("location: ../user/user_login.php");

 }


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-------our css----->
    <link rel="stylesheet" href="../../css/style.css">
    <title>User Home Page</title>
</head>

<body>
    <!---navigation bar----->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger font-weight-bold">
        <a class="navbar-brand" href="#"><?php echo $_SESSION["user_name"]?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../hospital_list.php">Hospital List</a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="../user/user_profile.php">Update Profile</a>
                </li>


            </ul>
            

                <a href="../logout.php"><button class="btn btn-outline-dark my-2 my-sm-0" >Logout!!</button></a>
            
        </div>
    </nav>
    <!------navigation bar ends-->
    <!-----body details-->
    <div class="container pt-5">
        <div class="welcome_div  mt-5">
            <h2 class="text-center py-2"> Welcome  </h2>
            <h1 class="text-center py-2"><?php echo $_SESSION["user_name"]?></h1>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>