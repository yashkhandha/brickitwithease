<?php

//session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//
include_once 'includes/PHPMailer.php';
include_once 'includes/Exception.php';
include_once 'includes/SMTP.php';

$email = "";

include ('includes/dbh.inc.php');

if(isset($_POST["title"])) {

    $stmt = $conn->prepare("INSERT into personal_plan(event_name,user_id,event_start_time,event_end_time,event_color) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $event_name, $user_id, $start, $end, $color);
    $event_name = $_POST['title'];
    $user_id = 18;
//    $user_id = $_SESSION['u_id'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $color = $_POST['color'];
    $stmt->execute();

    if ($_POST['emailChecked'] === 'true') {
        $sql = "SELECT * FROM users where user_id = 18";
//        $sql = "SELECT * FROM users where user_id = " . $_SESSION['u_id'];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $email = $row['user_email'];
            }

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
                $mail->addAddress($email,"TEST");

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Brick it with ease - Activity details';
                $mail->Body    = "New Activity added to your planner. Your activity details are as follows - <br><br><b>Activity name : </b> $event_name<br>
                    <b>Activity start : </b> $start<br>
                    <b>Activity end : </b> $end<br>                    
                    <br>
                    For more information regarding this activity <br>
                    <a href='http://brickit.tk/login.php'>Click here</a>
                    
                    <br><br>
                    Please mark this email to remember your activity. Enjoy your day. Cheers !";

                if($mail->send()){
                    exit();
                }else{
                }
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        } else {
            echo "0 results";
        }
    }
    else{
        exit();
    }



}