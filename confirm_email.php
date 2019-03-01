<?php
$msg='';

function redirect(){
    header('Location: login.php');
    exit();
}

if(!isset($_GET['email']) || !isset($_GET['token'])){
    header('Location: login.php?signup=1');
    exit();
}else{
    include 'includes/dbh.inc.php';

    $email = $_GET['email'];
    $token = $_GET['token'];

    $sql = $conn-> query("SELECT user_id from users where user_email='$email' AND user_token='$token' AND user_isEmailConfirmed=0");

    if($sql ->num_rows >0){
        $conn ->query("UPDATE users SET user_isEmailConfirmed=1,user_token='' WHERE user_email='$email'");
        $msg = "emailVerified";
        header('Location: login.php?signup='.$msg);
        exit();
    }else{
        header('Location: login.php?signup=2');
        exit();
    }
}