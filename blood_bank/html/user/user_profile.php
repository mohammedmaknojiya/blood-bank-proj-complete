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

    <!--our css file---->
    <link rel="stylesheet" href="../css/style.css">
    <title>User Profile</title>
</head>

<body>
    <div>
        <h1 class="text-center font-weight-bold">User Profile</h1>
    </div>
    <hr>
    <a class=" d-flex justify-content-end py-3 pr-3" href="../user/user_home.php"> <button
            class="btn btn-danger">Go To Home Page !</button></a>

    <div class="container" style="border: 2px solid black; width:fit-conten800px;padding: 20px;">

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>User Name: </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="user_profile.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <h3><input name="user_name" value=<?php echo $_SESSION["user_name"];    ?>></h3>
                        </div>

                        <div class="col-lg-4 col-sm-12 col-md-12  d-flex  justify-content-end">
                            <button type="submit" name="btnclick1" class="btn btn-danger  ">Save !</button>

                        </div>
                    </div>
                    </from>
            </div>


        </div>
        <hr>

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Address: </h2>

            </div>
            <form action="user_profile.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="user_address" value=<?php echo $_SESSION["user_address"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick2" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Gender: </h2>

            </div>
            <form action="user_profile.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="user_gender" value=<?php echo $_SESSION["user_gender"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick3" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Blood Group: </h2>

            </div>
            <form action="user_profile.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="user_blood_group" value=<?php echo $_SESSION["user_blood_group"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick4" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>
        
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

<!----------------------php code ------------------------------------->
<?php

if (isset($_POST["btnclick1"]))
{
    $user_name=$_POST["user_name"];
    $user_mobile_number=$_SESSION["user_mobile_number"];
    $query = "UPDATE user_register SET  user_name ='$user_name' WHERE user_mobile_number='$user_mobile_number'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("data not Updated .. please try again")</script>';
    } 

}
elseif (isset($_POST["btnclick2"]))
{
    $user_address=$_POST["user_address"];
    $user_mobile_number=$_SESSION["user_mobile_number"];
    $query = "UPDATE user_register SET user_address='$user_address' WHERE user_mobile_number='$user_mobile_number'";  
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("data not Updated .. please try again")</script>';
    }

}
elseif (isset($_POST["btnclick3"]))
{
    $user_gender=$_POST["user_gender"];
    $user_mobile_number=$_SESSION["user_mobile_number"];
    $query = "UPDATE user_register SET user_gender='$user_gender' WHERE user_mobile_number='$user_mobile_number'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert(" data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert(" data not Updated .. please try again")</script>';
    } 

}
elseif (isset($_POST["btnclick4"]))
{
    $user_blood_group=$_POST["user_blood_group"];
    $user_mobile_number=$_SESSION["user_mobile_number"];
    $query = "UPDATE user_register SET user_blood_group='$user_blood_group' WHERE user_mobile_number='$user_mobile_number'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert(" data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert(" data not Updated .. please try again")</script>';
    } 

}



?>