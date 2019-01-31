<?php
function getdata(){

    $servername = "10.0.0.2";
    $username = "vm1";
    $password = "bishal";
    $dbname = "db1";

    // checking connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection

    if ($conn->connect_error) {
	echo "lag gaye";
       die("Connection failed: " . $conn->connect_error);
     }else {

	//echo "working fine";	
    }

   // mysqli_select_db($dbname);
$sql = 'SELECT * FROM Feedback';
$result = $conn->query('SELECT * FROM Feedback') or die('could not query');


//echo $result;

$data = array();
for($x = 0; $x< mysqli_num_rows($result); $x++){
    $data[] = mysqli_fetch_assoc($result);
}

echo json_encode($data);
}

getdata();
?>
