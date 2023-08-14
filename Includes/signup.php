<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
// $data=json_decode(file_get_contents("php://input"),true);

    // Get data from form
    $fName=$_POST['fName'];
    $mName=$_POST['mName'];
    $lName=$_POST['lName'];
    $famName=$_POST['famName'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $confirmPwd=$_POST['confirmPwd'];
    $birthDate=$_POST['birthDate'];
  
    $inputs = array([
      $fName, $mName , $lName, $famName, $email, $pwd, $confirmPwd, $birthDate
    ]);

    try {

        // Grabbing the connection
        require_once 'dbhandler.php';
        require_once 'signupModel.php';
        require_once 'signupContr.php';

        // Error Handlers
        if (is_input_empty($inputs)){
        }
        if (is_email_invaild($email)){
        }
        if (is_username_taken($pdo, $fName, $famName)) {
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