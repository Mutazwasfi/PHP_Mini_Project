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
    $phoneNumber=$_POST['phoneNumber'];
    $birthDate=$_POST['birthDate'];
  
    $inputs = array([
      $fName, $mName , $lName, $famName, $email, $pwd, $confirmPwd, $phoneNumber, $birthDate
    ]);

    try {

        // Grabbing the connection
        require_once 'dbhandler.php';
        require_once 'signupModel.php';
        require_once 'signupContr.php';

        // Error Handlers
        $errors =[];

        if (!is_input_empty($inputs)){
          $errors["empty_input"]="Fill in all the fields";
        }
        if (is_email_invaild($email)){
          $errors["invalid_email"]="Invalid email used";
        }
        if (is_username_taken($pdo, $fName, $famName)) {
          $errors["username_taken"] = "Username_taken already registerd!";
        }

        if (is_email_registeried($pdo, $email)) {
          $errors["email_used"] = "Email already registerd!";
        }

        require_once 'session.php';

        // IF USER ENTERED ANYTHING INVALID SEND BACK TO HOME
        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("location: ../home.php");
        }


        create_user($pdo, $fName, $mName , $lName, $famName, $email, $pwd, $confirmPwd, $phoneNumber, $birthDate);
        
        header("location: ../home.php?signup=success");
        
        $pdo = null;
        $stmt = null;
        die();
    } 
    catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    } 
}
else {
    header("location: ../home.php");
    die();
}