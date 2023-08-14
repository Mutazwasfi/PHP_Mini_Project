<?php
require("config.php");

if($_SERVER["REQUEST_METHOD"] === "POST"){

    // Get data from form
    $fName=$_POST['fName'];
    $mName=$_POST['mName'];
    $lName=$_POST['lName'];
    $famName=$_POST['famName'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $confirmPwd=$_POST['confirmPwd'];
    $birthDate=$_POST['birthDate'];

    try {

        // Grabbing the connection
        require_once 'dbhandler.php';
        require_once 'signupModel.php';
        require_once 'signupContr.php';

        // Error Handlers
        if (is_Input_Empty($fName, $mName , $lName, $famName, $email, $pwd, $confirmPwd, $birthDate))       
            sad;
        }
    } 
    catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    } 
}
else {
    header("location: ../home.php");
    die();
}