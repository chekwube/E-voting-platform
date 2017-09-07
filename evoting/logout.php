<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 8/31/17
 * Time: 5:33 PM
 */

session_start();

if(session_destroy()){
    header("Location: login.php");
}