<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 8/31/17
 * Time: 5:28 PM
 */

include'connect.php';
session_start();

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    //check if there are empty fields
    if(!empty($username) && !empty($password)) {

        //check if the username and password is in the database.
        $sql3 = "SELECT id FROM voters WHERE user_name='$username' AND pass_word='$password'";
        $query3 = mysqli_query($conn, $sql3);
        $num2 = mysqli_num_rows($query3);

        if ($num2 == 1) {

            $_SESSION['login_user'] = $username;
            header("Location: home.php");
        }else{
                echo"Your Username or Password is Invalid!";
            }
    }else{
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
        <h2>Login To Vote</h2>
          <form method="POST" action="login.php">
            <div class="form-group">
              <label for="username">Username:</label>
              <input class="form-control" id="username" name="username" placeholder="Enter username" />
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" />
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>

            <button class="btn btn-default" id="but" name="login">Login</button>

            <div id="reg">click <a href="register.php">here</a> to register</div>
          </form>
      </div>      
    </div>
</body>
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_jumbotron&stacked=h by HTTrack Website Copier/3.x [XR&CO\'2014], Fri, 23 Jan 2015 07:33:51 GMT -->
</html>

