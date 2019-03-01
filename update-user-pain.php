<?php
session_start();

include ('includes/dbh.inc.php');

if(isset($_POST["painLevel"])){
    $stmt = $conn->prepare("INSERT into user_pain(user_id,pain_date,pain_level) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE pain_level=VALUES(pain_level)");
    $stmt->bind_param("sss",$user_id, $date, $painLevel);
    $user_id = $_SESSION['u_id'];
    $date = date('Y-m-d');
//    $date = date('Y-m-d',strtotime("+1 day"));
    $painLevel = $_POST['painLevel'];
    $stmt->execute();
}
