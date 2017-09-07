<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 8/31/17
 * Time: 5:29 PM
 */

include'connect.php';

if(isset($_POST["can1"]) || isset($_POST["can2"]) || isset($_POST["can3"]) || isset($_POST["can4"]) || isset($_POST["can5"]) || isset($_POST["can6"]) || isset($_POST["can7"]) || isset($_POST["can8"]) || isset($_POST["can9"]) ){


        if(isset($_POST["can1"])){
            $can1 = $_POST["can1"];
            $sql1 = "UPDATE presidency
            SET votes= votes +1
            WHERE candidate='ikenna'";
            $query1 = mysqli_query($conn, $sql1);

            if($query1){
                echo "You have successfully voted for Ikenna";
            }else{
                echo"Error: Vote not successful";
            }

        }elseif(isset($_POST["can2"])){
            $can2 = $_POST["can2"];
            $sql2 = "UPDATE presidency
            SET votes= votes +1
            WHERE candidate='queeneth'";
            $query2 = mysqli_query($conn, $sql2);

            if($query2){
                echo "You have successfully voted for Queeneth";
            }else{
                echo"Error: Vote not successful";
            }

        }elseif(isset($_POST["can3"])){
            $can3 = $_POST["can3"];
            $sql3 = "UPDATE presidency
            SET votes= votes +1
            WHERE candidate='chinasa'";
            $query3 = mysqli_query($conn, $sql3);

            if($query3){
                echo "You have successfully voted for Chinasa";
            }else{
                echo"Error: Vote not successful";
            }

        }elseif(isset($_POST["can4"])){
            $can4 = $_POST["can4"];
            $sql4 = "UPDATE vice_presidency
            SET votes= votes +1
            WHERE candidate='evuka'";
            $query4 = mysqli_query($conn, $sql4);

            if($query4){
                echo "You have successfully voted for Evuka";
            }else{
                echo"Error: Vote not successful";
            }

        }elseif(isset($_POST["can5"])){
            $can5 = $_POST["can5"];
            $sql5 = "UPDATE vice_presidency
            SET votes= votes +1
            WHERE candidate='ozioma'";
            $query5 = mysqli_query($conn, $sql5);

            if($query5){
                echo "You have successfully voted for Ozioma";
            }else{
                echo"Error: Vote not successful";
            }

        }elseif(isset($_POST["can6"])){
            $can6 = $_POST["can6"];
            $sql6 = "UPDATE vice_presidency
            SET votes= votes +1
            WHERE candidate='chinenye'";
            $query6 = mysqli_query($conn, $sql6);

            if($query6){
                echo "You have successfully voted for Chinenye";
            }else{
                echo"Error: Vote not successful";
            }

        }elseif(isset($_POST["can7"])){
            $can7 = $_POST["can7"];
            $sql7 = "UPDATE secretary
            SET votes= votes +1
            WHERE candidate='eche'";
            $query7 = mysqli_query($conn, $sql7);

            if($query7){
                echo "You have successfully voted for Eche";
            }else{
                echo"Error: Vote not successful";
            }

        }elseif(isset($_POST["can8"])){
            $can8 = $_POST["can8"];
            $sql8 = "UPDATE secretary
            SET votes= votes +1
            WHERE candidate='buchi'";
            $query8 = mysqli_query($conn, $sql8);

            if($query8){
                echo "You have successfully voted for Buchi";
            }else{
                echo"Error: Vote not successful";
            }

        }else{
            $can9 = $_POST["can9"];
            $sql9 = "UPDATE secretary
            SET votes= votes +1
            WHERE candidate='neche'";
            $query9 = mysqli_query($conn, $sql9);

            if($query9){
                echo "You have successfully voted for Neche";
            }else{
                echo"Error: Vote not successful";
            }

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
<body id="home_body">
    <div class="container">
        <div id="header">
            <ul class="nav nav-pills">
                <li><a href="home.php" style="margin-right:150px"><img src="images/Slide1.png" alt="candidate 1">Home</a></li>
                <button class="btn btn-default pull-right" id="but"><a href="logout.php">Logout</a></button>
            </ul>
        </div>
            <div class="jumbotron" style="text-align: center;">
                <h3>For Presidency </h3>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>candidate 1</th>
                        <th>candidate 2</th>
                        <th>candidate 3</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><img src="images/candidate.jpg" alt="candidate 1"></td>
                        <td><img src="images/candidate.jpg" alt="candidate 2"></td>
                        <td><img src="images/candidate.jpg" alt="candidate 3"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <td>Ikenna BIG</td>
                        <td>Queeneth</td>
                        <td>Chinasa</td>
                      </tr>
                    </tbody>
                    <tbody>
                    <form action="home.php" method="POST">
                        <div class="form-group">
                    <tr>
                        <td><input type="submit" class="btn btn-default" id="but" name="can1" value="Vote" /></td>
                        <td><input type="submit" class="btn btn-default" id="but" name="can2" value="Vote" /></td>
                        <td><input type="submit" class="btn btn-default" id="but" name="can3" value="Vote" /></td>
                    </tr>
                    </tbody>
                  </table>


                   </div>
                  </form>
            </div>
            <div class="jumbotron" style="text-align: center;">
                <h3>For Vice Presidency </h3>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>candidate 1</th>
                        <th>candidate 2</th>
                        <th>candidate 3</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       <td><img src="images/candidate.jpg" alt="candidate 1"></td>
                        <td><img src="images/candidate.jpg" alt="candidate 2"></td>
                        <td><img src="images/candidate.jpg" alt="candidate 3"></td>
                      </tr>
                    </tbody>
                     <tbody>
                      <tr>
                        <td>Evuka </td>
                        <td>Ozioma</td>
                        <td>Chinenye</td>
                      </tr>
                    </tbody>
                    <tbody>
                    <form action="home.php" method="POST">
                        <div class="form-group">
                            <tr>
                                <td><input type="submit" class="btn btn-default" id="but" name="can4" value="Vote" /></td>
                                <td><input type="submit" class="btn btn-default" id="but" name="can5" value="Vote" /></td>
                                <td><input type="submit" class="btn btn-default" id="but" name="can6" value="Vote" /></td>
                            </tr>
                    </tbody>
                  </table>

                    </div>
            <div class="jumbotron" class="container" style="text-align: center;">
                <h3>For Secretary</h3>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>candidate 1</th>
                        <th>candidate 2</th>
                        <th>candidate 3</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                       <td><img src="images/candidate.jpg" alt="candidate 1"></td>
                        <td><img src="images/candidate.jpg" alt="candidate 2"></td>
                        <td><img src="images/candidate.jpg" alt="candidate 3"></td>
                      </tr>
                    </tbody>
                     <tbody>
                      <tr>
                        <td>Eche</td>
                        <td>Buchi</td>
                        <td>Neche</td>
                      </tr>
                    </tbody>
                    <tbody>
                    <form action="home.php" method="POST">
                        <div class="form-group">
                            <tr>
                                <td><input type="submit" class="btn btn-default" id="but" name="can7" value="Vote" /></td>
                                <td><input type="submit" class="btn btn-default" id="but" name="can8" value="Vote" /></td>
                                <td><input type="submit" class="btn btn-default" id="but" name="can9" value="Vote" /></td>
                            </tr>
                    </tbody>
                  </table>

                         </div>
            </div>
        <form action="home.php" method="POST">
        <input type="submit" class="btn btn-default" id="but" name="results" value="View Results" style="margin-left: 600px" />
        </form>
        <div class="container-fluid" style="text-align: center"><?php
        if(isset($_POST["results"])){
            $sql10 = "SELECT candidate, votes FROM presidency";
            $result1 = mysqli_query($conn, $sql10);
            echo "<br/><b>PRESIDENTIAL RESULT</b><br/>";

            while($array1 = mysqli_fetch_assoc($result1)){
                foreach($array1 as $key => $val){
                    echo "<table style=' margin-left:auto; margin-right:auto;'>".$key." : ".$val. "</table>";
                }
            }

            $sql11 = "SELECT candidate, votes FROM vice_presidency";
            $result2 = mysqli_query($conn, $sql11);
            echo "<br/><b>VICE PRESIDENTIAL RESULT</b><br/>";

            while($array2 = mysqli_fetch_assoc($result2)){
                foreach($array2 as $key => $val){
                    echo "<table>".$key." : ".$val."<table/>";
                }
            }

            $sql12 = "SELECT candidate, votes FROM secretary";
            $result3 = mysqli_query($conn, $sql12);
            echo "<br/><b>SECRETARY RESULT</b><br/>";

            while($array3 = mysqli_fetch_assoc($result3)){
                foreach($array3 as $key => $val){
                    echo "<table>".$key." : ".$val."</table>";
                }
            }
        }
        ?>
        </div>
    </div>
<div/>
</body>
<!-- Mirrored from www.w3schools.com/bootstrap/tryit.asp?filename=trybs_jumbotron&stacked=h by HTTrack Website Copier/3.x [XR&CO\'2014], Fri, 23 Jan 2015 07:33:51 GMT -->
</html>


