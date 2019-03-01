<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//
include_once 'PHPMailer.php';
include_once 'Exception.php';
include_once 'SMTP.php';

$msg ="";

if(isset($_POST['submit'])){
    include_once 'dbh.inc.php';

    $firstNameErr = $lastNameErr = "";

    //to prevent user putting code in form
    $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $userName = mysqli_real_escape_string($conn,$_POST['userName']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    //Error handling
    //Check for empty fields
    if(empty($firstName) || empty($lastName) || empty($email) || empty($userName) || empty($password)){
        //$_SESSION['Error'] = "You left one or more of the required fields.";
        $firstNameErr = "First name is required";
        header("Location: ../login.php?signup=empty");
        //stops script after exit function
        exit();
    } else{
        //Check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/",$firstName) || !preg_match("/^[a-zA-Z]*$/",$lastName)){
            $msg = "invalidName";
            header("Location: ../login.php?signup=".$msg);
            //stops script after exit function
            exit();
        }else{
            //check if email is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $msg = "invalidEmail";
                header("Location: ../login.php?signup=".$msg);
                //stops script after exit function
                exit();
            }else{
                //Check if username already exists
                $sql = "SELECT * FROM users where user_email='$email'";
                $result = mysqli_query($conn,$sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    $msg = "userTaken";
                    header("Location: ../login.php?signup=".$msg);
                    //stops script after exit function
                    exit();
                }else{
                    //token
                    $token = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!$/()*';
                    $token = str_shuffle($token);
                    $token = substr($token,0,10);

                    //HASH password
                    $hashPwd = password_hash($password, PASSWORD_DEFAULT);
                    //Insert user into database
                    $sql = "INSERT INTO users (user_first_name,user_last_name,user_email,user_password,user_username,user_isEmailConfirmed,user_token) values 
                            ('$firstName','$lastName','$email','$hashPwd','$userName',0,'$token');";
                    mysqli_query($conn,$sql);

                    $mail = new PHPMailer();
                    try {
                        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'khandhayash@gmail.com';                 // SMTP username
                        $mail->Password = 'Gmail@1231?0';                           // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;

                        //Recipients
                        $mail->setFrom('from@example.com', 'Brick it with ease');
                        $mail->addAddress($email,$firstName);

                        //Content
                        $mail->isHTML(true);                                  // Set email format to HTML
                        $mail->Subject = 'Brick it with ease - Verify email';
                        $mail->Body    = "Please click on link below link to verify your account <b></b><br><br>
                            <a href='http://brickit.tk/confirm_email.php?email=$email&token=$token'>Click here</a>";


                        if($mail->send()){
                            $msg = "success";
                            header("Location: ../login.php?signup=success");
                            exit();
                        }else{
                            $msg = "mailNotSent";
                            header("Location: ../login.php?signup=".$msg);
                            exit();
                        }
                    } catch (Exception $e) {
                        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                    }
//                    $msg = "success";
//                            header("Location: ../login.php?signup=success");
//                            exit();

                }
            }
        }
    }

}else{
    header("Location: ../login.php");
    //stops script after exit function
    exit();
}
?>