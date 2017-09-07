<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 8/31/17
 * Time: 5:29 PM
 */

include'connect.php';

//check if the submit button has been clicked.
if(isset($_POST['submit'])) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    //check if there are empty fields
    if(!empty($fullname) && !empty($username) && !empty($email) && !empty($password)) {
        if ($fullname > 50 || $username > 50 || $email > 100) {
            echo "Error: Fullname, Username or Email is too long";
        }else{
            //check if the username and email already exists.
            $sql1 = "SELECT * FROM voters WHERE full_name='$fullname' OR email='$email'";
            $query1 = mysqli_query($conn, $sql1);
            $num1 = mysqli_num_rows($query1);

            if ($num1 > 0) {
                echo "Error: Fullname, Username or Email already exist!";
            }else{
                //insert into database
                $sql2 = "INSERT INTO voters(full_name, user_name, email, pass_word) VALUES ('$fullname','$username','$email','$password')";
                $query2 = mysqli_query($conn, $sql2);

                if($query2){
                    header("Location: home.php");
                    echo"Registration successful!";

                    exit();
                }else{
                    echo"Registration failed!";
                }
            }
        }
    } else {
        echo "Input fields are empty!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-voting Platform</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf - 8" type="text/css"/>
  <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf - 8" type="text/css"/>  
  
</head>
<body>
<div class="container">
  <div class="jumbotron">
    <h2>Register To Vote</h2>      
     <form  method="POST" action="register.php">
    <div class="form-group">
      <label for="name">Fullname:</label> 
      <input class="form-control" name="fullname" placeholder="Enter name" />
    </div>
      <div class="form-group">
      <label for="username">Username:</label>
      <input name="username" class="form-control" placeholder="Enter username" />
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" placeholder="Enter email" />
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" placeholder="Enter password" />
    </div> 
    <input type="submit" class="btn btn-default" id="but" name="submit" value="Submit" />
    </form>
  </div>      
</div>

</body>
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_jumbotron&stacked=h by HTTrack Website Copier/3.x [XR&CO\'2014], Fri, 23 Jan 2015 07:33:51 GMT -->
</html>