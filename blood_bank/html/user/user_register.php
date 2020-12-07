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

    <title>User Registration</title>
</head>

<body>

    <div class="container my-5" style="border: 2px solid black; padding-top: 20px;padding-bottom:10px;">


        <h1 class="text-center">
            User Registration
        </h1>
        <!------Register form  ---->
        <br>
        <form action="user_register.php" method="post">
            <label for="exampleInputEmail1">Your Name</label>
            <div class="row form-group">

                <div class="col">

                    <input type="text" class="form-control" name="user_fname" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="user_lname" placeholder="Last name">
                </div>
            </div>



            <div class="form-group">
                <label for="exampleInputEmail1">Phone No</label>
                <input type="number" class="form-control" name="user_mobile_number" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="eg:1234567890">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Blood Group</label>
                <input type="text" class="form-control" name="user_blood_group" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="eg:A+ A- O+">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <input type="text" class="form-control" name="user_gender" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="eg:Male Female Others">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" name="user_address" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="eg:abcd efgh">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="user_email" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="user_password" id="exampleInputPassword1"
                    placeholder="Password">
            </div>

            <button type="submit" class="btn btn-danger" name="btnclick">Register !</button>
        </form>
        <br>
        <a href="../user/user_login.php"> <button class="btn btn-danger">Go To Login !</button></a>

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
    $user_fname=$_POST["user_fname"];
    $user_lname=$_POST["user_lname"];
    $user_name=$user_fname." ".$user_lname;
    $user_address=$_POST["user_address"];
    $user_mobile_number=$_POST["user_mobile_number"];
    $user_password=sha1($_POST["user_password"]); //calculating hash of password
    $user_email=$_POST["user_email"];
    $user_gender=$_POST["user_gender"];
    $user_blood_group=$_POST["user_blood_group"];
    



    $query = "INSERT INTO user_register(`user_mobile_number`,`user_name`, `user_email`,`user_password`,`user_address`, `user_gender`, `user_blood_group`) VALUES ('$user_mobile_number','$user_name','$user_email','$user_password','$user_address','$user_gender','$user_blood_group')";

    $query_run = mysqli_query($conn,$query);
    if($query_run){
        echo '<script type="text/javascript">alert("User data inserted Registered.. Go to login")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("User data not inserted .. please try again")</script>';
    }

}
?>