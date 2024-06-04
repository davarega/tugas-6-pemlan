<?php
header('Content-Type: application/json');

include 'auth.php';

$output = array();
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $output[] = $row;
    }
} else {
	$output['error'] = true;
	$output['message'] = "No data found";
}

echo json_encode($output);
$conn->close();

?>