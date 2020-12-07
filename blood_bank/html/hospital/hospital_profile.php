<?php

include '../../database/dbconnect.php';
session_start();

if (!$_SESSION["login_or_not1"])
{
    header("location: ../hospital/hospital_login.php");

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
    <title>Hospital Profile</title>
</head>

<body>
    <div>
        <h1 class="text-center font-weight-bold">Hospital Profile</h1>
    </div>
    <hr>
    <a class=" d-flex justify-content-end py-3 pr-3" href="../hospital/hospital_home.php"> <button
            class="btn btn-danger">Go To Home Page !</button></a>

    <div class="container" style="border: 2px solid black; width:fit-conten800px;padding: 20px;">

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Hospital Name: </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="hospital_profile.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <h3><input name="hospital_name" value=<?php echo $_SESSION["hospital_name"];    ?>></h3>
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
                <h2>PhoneNo: </h2>

            </div>
            <form action="hospital_profile.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="hospital_phone_number" value=<?php echo $_SESSION["hospital_phone_number"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick2" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>


        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>Address: </h2>

            </div>
            <form action="hospital_profile.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="hospital_address" value=<?php echo $_SESSION["hospital_address"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick3" class="btn btn-danger ">Save !</button>

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
    $hospital_name=$_POST["hospital_name"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_register SET hospital_name='$hospital_name' WHERE hospital_email='$hospital_email'"; 
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
    $hospital_phone_number=$_POST["hospital_phone_number"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_register SET hospital_phone_number='$hospital_phone_number' WHERE hospital_email='$hospital_email'";  
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
    $hospital_address=$_POST["hospital_address"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_register SET hospital_address='$hospital_address' WHERE hospital_email='$hospital_email'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert(" data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert(" data not Updated .. please try again")</script>';
    } 

}



?>