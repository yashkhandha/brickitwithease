<?php

include ('includes/dbh.inc.php');

session_start();

$id = $_POST['id'];

if(isset($_POST["id"])){
    $query = "DELETE from personal_plan where event_id = '$id'";

    mysqli_query($conn,$query);

}
