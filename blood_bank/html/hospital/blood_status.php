<?php

include '../../database/dbconnect.php';
session_start();

if (!$_SESSION["login_or_not1"])
{
     header("location: ../hospital/hospital_login.php");

}

?>
<?php
$hospital_email=$_SESSION["hospital_email"];

$query = "SELECT  * FROM hospital_dashboard WHERE hospital_email = '$hospital_email'  ";

$query_run = mysqli_query($conn,$query);


    if($query_run)
    {
        if(mysqli_num_rows($query_run)>0)
        {
        $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
        }
        else
        {
            echo '<script type="text/javascript">alert("No such entry exists...")</script>';
        }
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
    <title>Blood Status</title>
</head>

<body>
    <div>
        <h1 class="text-center font-weight-bold">Blood Status</h1>
    </div>
    <hr>
    <a class=" d-flex justify-content-end py-3 pr-3" href="../hospital/hospital_home.php"> <button
            class="btn btn-danger">Go To Home Page !</button></a>

    <div class="container  "
        style="border: 2px solid black; width:fit-conten800px;padding: 20px;margin-bottom: 20px; border-radius: 20px; ">

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>A+ </h2>

            </div>
            <div class="col-lg-8 col-sm-12 col-md-12">
                <form action="blood_status.php" method="post">
                    <div class="row ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <h3><input name="a" value=<?php echo $row["a"]; ?>></h3>
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
                <h2>A- </h2>

            </div>
            <form action="blood_status.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="a_" value=<?php echo $row["a_"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick2" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>B+ </h2>

            </div>
            <form action="blood_status.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="b" value=<?php echo $row["b"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick3" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>


        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>B-</h2>

            </div>
            <form action="blood_status.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="b_" value=<?php echo $row["b_"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick4" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>O+ </h2>

            </div>
            <form action="blood_status.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="o" value=<?php echo $row["o"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick5" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>O- </h2>

            </div>
            <form action="blood_status.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="o_" value=<?php echo $row["o_"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick6" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>AB+ </h2>

            </div>
            <form action="blood_status.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="ab" value=<?php echo $row["ab"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick7" class="btn btn-danger ">Save !</button>

                </div>
                </from>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4 col-sm-12 col-md-12">
                <h2>AB- </h2>

            </div>
            <form action="blood_status.php" method="post">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <h3><input name="ab_" value=<?php echo $row["ab_"];    ?>></h3>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-12  d-flex  justify-content-end">
                    <button type="submit" name="btnclick8" class="btn btn-danger ">Save !</button>

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
    $a=$_POST["a"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_dashboard SET a ='$a' WHERE hospital_email='$hospital_email'"; 
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
     $a_=$_POST["a_"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_dashboard SET a_= '$a_' WHERE hospital_email='$hospital_email'";  
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
     $b=$_POST["b"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_dashboard SET b = '$b' WHERE hospital_email='$hospital_email'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert(" data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert(" data not Updated .. please try again")</script>';
    } 

}
elseif (isset($_POST["btnclick3"]))
{
     $b_=$_POST["b_"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_dashboard SET b_ = '$b_' WHERE hospital_email='$hospital_email'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert(" data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert(" data not Updated .. please try again")</script>';
    } 

}
elseif (isset($_POST["btnclick3"]))
{
     $o=$_POST["o"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_dashboard SET o = '$o' WHERE hospital_email='$hospital_email'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert(" data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert(" data not Updated .. please try again")</script>';
    } 

}
elseif (isset($_POST["btnclick3"]))
{
     $o_=$_POST["o_"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_dashboard SET o_ = '$o_' WHERE hospital_email='$hospital_email'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert(" data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert(" data not Updated .. please try again")</script>';
    } 

}
elseif (isset($_POST["btnclick3"]))
{
     $ab=$_POST["ab"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_dashboard SET ab = '$ab' WHERE hospital_email='$hospital_email'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert(" data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert(" data not Updated .. please try again")</script>';
    } 

}
elseif (isset($_POST["btnclick3"]))
{
     $ab_=$_POST["ab_"];
    $hospital_email=$_SESSION["hospital_email"];
    $query = "UPDATE hospital_dashboard SET ab_ = '$ab_' WHERE hospital_email='$hospital_email'"; 
     $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert(" data is Updated.....")</script>';
    }
    else{
        echo '<script type="text/javascript">alert(" data not Updated .. please try again")</script>';
    } 

}


?>