<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ems_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("INSERT INTO student_tab (Stu_id, Stu_name, Stu_year_of_enrollment, Stu_major, CGPA, year_of_graduation) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $Stu_id, $Stu_name, $Stu_year_of_enrollment, $Stu_major, $CGPA, $year_of_graduation);
$Stu_id = $_POST['Stu_id'];
$Stu_name = $_POST['Stu_name'];
$Stu_year_of_enrollment = $_POST['Stu_year_of_enrollment'];
$Stu_major = $_POST['Stu_major'];
$CGPA = $_POST['CGPA'];
$year_of_graduation = $_POST['year_of_graduation'];
if ($stmt->execute()) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
