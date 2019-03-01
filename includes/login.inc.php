<?php

session_start();

if(isset($_POST['submit'])){

    include 'dbh.inc.php';

    $userName = mysqli_real_escape_string($conn,$_POST['userName']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    //Error handling
    //Check if inputs are empty
    if(empty($userName) || empty($password)){
        header("Location: ../login.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM users where user_username = '$userName' OR user_email='$userName'";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: ../login.php?login=error");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                // De hashing the password
                $hashedPasswordCheck = password_verify($password,$row['user_password']);
                if($hashedPasswordCheck == false){
                    header("Location: ../login.php?login=error");
                    exit();
                }elseif ($hashedPasswordCheck == true){
                    if($row['user_isEmailConfirmed'] == 0){
                        $msg = "emailNotVerified";
                        header("Location: ../login.php?login=".$msg);
                        exit();
                    }
                    // log in user
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first_name'] = $row['user_first_name'];
                    $_SESSION['u_last_name'] = $row['user_last_name'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_userName'] = $row['user_userName'];
                    $msg = "success";
                    header("Location: ../login.php?login=".$msg);

                    exit();
                }
            }
        }
    }
} else{
    header("Location: ../login.php?login=error");
    exit();
}