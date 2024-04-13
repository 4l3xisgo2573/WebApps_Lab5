<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ems_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO faculty_tab (Fac_id, Fac_name, Fac_DOB, qualification, department) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $Fac_id, $Fac_name, $Fac_DOB, $qualification, $department);
$Fac_id = $_POST['Fac_id'];
$Fac_name = $_POST['Fac_name'];
$Fac_DOB = $_POST['Fac_DOB'];
$qualification = $_POST['qualification'];
$department = $_POST['department'];

$stmt->execute();

echo "New record inserted successfully";

$stmt->close();
$conn->close();
?>
