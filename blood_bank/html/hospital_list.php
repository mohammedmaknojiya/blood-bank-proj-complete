<?php
include '../database/dbconnect.php';
session_start();
?>
<?php
if (isset($_POST["mybutton"])){ 
        $_SESSION["hospital_email"]=$_POST["mybutton"];
        header("location: ../html/hospital/single_hospital.php");   
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
    <title>Hospital List</title>
</head>
<body>
    <div>
        <h1 class="text-center font-weight-bold">Hospital List</h1>
    </div>
    <hr>
    <div>
        <nav class="navbar navbar-light bg-light justify-content-end">

            <input class="form-control mr-sm-2 " type="text" style=" width: 400px;" type="search"
                placeholder="Search Hospital Name" id="myinput" aria-label="Search" onkeyup="myFunction()">



        </nav>
    </div>
    <hr>
    <a class=" d-flex justify-content-end py-3 pr-3" href="../index.html"> <button
            class="btn btn-danger">Go To Home Page !</button></a>



    <div class="container" style="border: 2px solid black; width:fit-conten800px;padding: 20px;border-radius: 10px;">
        <!---start table----->
        <table class="table" id="mytable">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Hospital Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">PhoneNo</th>
                    <th scope="col">Visit Profile</th>
                </tr>
            </thead>
            <tbody>
                <tr><?php
                        $query= "SELECT * from hospital_register";
                        $query_run=mysqli_query($conn,$query);
                        while( $res= mysqli_fetch_array($query_run) )
                        {
                        ?>
                    <td><?php  echo $res["hospital_name"];  ?></td>
                    <td><?php  echo $res["hospital_email"];  ?></td>
                    <td><?php  echo $res["hospital_phone_number"];  ?></td>
                    <form action="hospital_list.php" method="post">
                        <td><button class="btn btn-danger" type="submit" value=<?php echo $res["hospital_email"]; ?>
                                name="mybutton">Visit Hospital Profile</button></td>
                    </form>
                        </tr><?php } ?>
            </tbody>
        </table>
        <script>
            function myFunction() {
                var filter = document.getElementById("myinput").value.toUpperCase();
                var mytable = document.getElementById("mytable");
                var tr = mytable.getElementsByTagName("tr");
                for (var i = 0; i < tr.length; i++) {
                    var td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        var textval = td.textContent || td.innerHTML;
                        if (textval.toUpperCase().indexOf(filter) > -1) { tr[i].style.display = ""; }
                        else { tr[i].style.display = "none"; }
                    }
                }
            }
        </script>
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
