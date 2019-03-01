<?php

//session_start();

include ('includes/dbh.inc.php');

$data = array();

$sql = "SELECT * FROM personal_plan where user_id = 18";
//$sql = "SELECT * FROM personal_plan where user_id = " . $_SESSION['u_id'];
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = array(
            'id' => $row["event_id"],
            'title' => $row["event_name"],
            'start' => $row['event_start_time'],
            'end' => $row['event_end_time'],
            'color' => $row['event_color']
        );
    }
    echo json_encode($data);
} else {
    echo "0 results";
}