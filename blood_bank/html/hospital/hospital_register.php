<?php

include '../../database/dbconnect.php';

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

    <title>Hospital Registration</title>
</head>

<body>

    <div class="container my-5" style="border: 2px solid black; padding-top: 20px;padding-bottom:10px;">


        <h1 class="text-center">
            Hospital Registration
        </h1>
        <!------Register form  ---->
        <br>
        <form action="hospital_register.php" method="post">

            <div class="form-group">
                <label for="exampleInputEmail1">Hospital Name</label>
                <input type="text" class="form-control" name="hospital_name" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="eg:ABC health care">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Phone No</label>
                <input type="number" class="form-control" name="hospital_phone_number" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="eg:1234567890">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="hospital_email" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="hospital_password" id="exampleInputPassword1"
                    placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" name="hospital_address" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="eg:abcd efgh">
            </div>





            <button type="submit" class="btn btn-danger" name="btnclick">Register !</button>
        </form>
        <br>
        <a href="../hospital/hospital_login.php"> <button class="btn btn-danger">Go To Login !</button></a>

        <br>


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

if (isset($_POST["btnclick"]))
{
    $hospital_name=$_POST["hospital_name"];
    $hospital_address=$_POST["hospital_address"];
    $hospital_phone_number=$_POST["hospital_phone_number"];
    $hospital_email=$_POST["hospital_email"];
    $hospital_password=sha1($_POST["hospital_password"]);
    


    $query = "INSERT INTO hospital_register(`hospital_name`, `hospital_address`, `hospital_phone_number`, `hospital_email`, `hospital_password`) VALUES ('$hospital_name','$hospital_address','$hospital_phone_number','$hospital_email','$hospital_password')";

    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data inserted Registered.. Go to login")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
    }

}
?>