<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 9/2/17
 * Time: 12:01 PM
 */

$host = "localhost";
$db = "evote";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$db);
$query = mysqli_select_db($conn, $db);
