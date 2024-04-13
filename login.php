<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ems_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userid = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM Users_tab WHERE userid=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $userid, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['userid'] = $user['userid'];
    $_SESSION['role'] = $user['role'];
    switch ($user['role']) {
        case 'Admin':
            header("Location: admin/index.php");
            break;
        case 'Faculty':
            header("Location: faculty/index.php");
            break;
        case 'Student':
            header("Location: student/index.php");
            break;
        default:
            header("Location: index.html");
    }
    exit();
} else {
    header("Location: index.html");
    exit();
}

$stmt->close();
$conn->close();
?>
