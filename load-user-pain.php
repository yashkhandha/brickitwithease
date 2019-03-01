<?php

session_start();

include ('includes/dbh.inc.php');

$json_array = array();

$sql = "SELECT * FROM user_pain where user_id = " . $_SESSION['u_id'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $json_array[] = $row;
//              array(
//            'id' => $row["id"],
//            'user_id' => $row["user_id"],
//            'pain_date' => $row['pain_date'],
//            'pain_level' => $row['pain_level'],
//        );
    }
    echo json_encode($json_array);
//    echo json_encode($data);
} else {
    echo "0 results";
}