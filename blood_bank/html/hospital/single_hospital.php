<?php

include '../../database/dbconnect.php';
session_start();


?>
<?php
$hospital_email=$_SESSION["hospital_email"];

$query = "SELECT  * FROM hospital_register WHERE hospital_email = '$hospital_email'  ";

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
    <link rel="stylesheet" href="../../css/style.css">
    <title>Single Hospital</title>
</head>

<body>
    <div>
        <h1 class="text-center font-weight-bold"><?php echo $row["hospital_name"]; ?></h1>
    </div>
    <hr>

    <a class=" d-flex justify-content-end py-3 pr-3" href="../hospital_list.php"> <button
            class="btn btn-danger">Go To Hospital List Page!</button></a>


    <div class="container details">
        <h2 class="text-center">Hospital Details</h2>
        <hr>
        <h4>Hospital Name: <?php echo $row["hospital_name"]; ?></h4>
        <h4>Address: <?php echo $row["hospital_address"]; ?></h4>
        <h4>Phone No: <?php echo $row["hospital_phone_number"]; ?></h4>
        <h4>Email Id: <?php echo $row["hospital_email"]; ?></h4>

    </div>
    <div class="container" style="border: 2px solid black; width:fit-conten800px;padding: 20px;border-radius: 10px;">
        <!---start table----->
        <table class="table" id="mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">A+</th>
                    <th scope="col">A-</th>
                    <th scope="col">B+</th>
                    <th scope="col">B-</th>
                    <th scope="col">O+</th>
                    <th scope="col">O-</th>
                    <th scope="col">AB+</th>
                    <th scope="col">AB-</th>
                    <th scope="col">Request</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $hospital_email=$row["hospital_email"];
                        $query= "SELECT * from hospital_dashboard where hospital_email='$hospital_email' ";

                        $query_run=mysqli_query($conn,$query);
                        
                   
                        while( $res= mysqli_fetch_array($query_run) )
                        {

                        ?>
                    <td><?php  echo $res["a"];  ?></td>
                    <td><?php  echo $res["a_"];  ?></td>
                     <td><?php  echo $res["b"];  ?></td>
                    <td><?php  echo $res["b_"];  ?></td>
                     <td><?php  echo $res["o"];  ?></td>
                    <td><?php  echo $res["o_"];  ?></td>
                     <td><?php  echo $res["ab"];  ?></td>
                    <td><?php  echo $res["ab_"];  ?></td>
                    <form action="single_hospital.php" method="post">
                        <td><button class="btn btn-danger" type="submit" 
                                name="mybutton">Send Request</button></td>
                    </form>
                </tr>
                <?php
                        }
                    ?>

            </tbody>
        </table>

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

if (isset($_POST["mybutton"]))
{
        if (!$_SESSION["login_or_not"])
    {
        header("location: ../user/user_login.php");

    }
                

    else{
        

        $user_mobile_number=$_SESSION["user_mobile_number"];
        $user_name=$_SESSION["user_name"];
        $hospital_email=$_SESSION["hospital_email"];

        


        $query1 = "INSERT INTO users_requests_data(`user_mobile_number`,`user_name`, `hospital_email`) VALUES ('$user_mobile_number','$user_name','$hospital_email')";

        $query_run1 = mysqli_query($conn,$query1);
            if($query_run1){
                echo '<script type="text/javascript">alert("Request Send")</script>';
            }
            else{
                echo '<script type="text/javascript">alert("Request not send .. please try again")</script>';
            }
            }

        
    }
?>