<?php


function NewEntry(){
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];    

    $servername = "10.0.0.2";
    $username = "vm1";  
    $password = "bishal";
    $dbname = "db1";

    // checking connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO Feedback(q1, q2, q3, q4, q5) VALUES ('$q1', '$q2', '$q3', '$q4', '$q5')";
	
    if ($conn->query($sql) === TRUE) {
    echo "Thank you for your feed back.";
    } else {
    echo "Error inserting table: " . $conn->error;
    }    

}
if(isset($_POST['submit']))
{
		NewEntry();
}

?>
