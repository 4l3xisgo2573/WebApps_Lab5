<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ems_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Student_tab";
$result = $conn->query($sql);

$students = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

$conn->close();
$students_json = json_encode($students);
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var studentList = document.getElementById("student-list");
    var students = <?php echo $students_json; ?>;

    if (students.length > 0) {
        students.forEach(function(student) {
            var stuHtml = `
                <div class="col-lg-5 mx-auto mb-5">
                    <p class="lead"><strong style="font-weight: bold;">Student ID:</strong> ${student.sid}</p>
                    <p class="lead"><strong style="font-weight: bold;">Student Name:</strong> ${student.Stu_name}</p>
                    <p class="lead"><strong style="font-weight: bold;">Year of Enrollment:</strong> ${student.Stu_year_of_enrollment}</p>
                    <p class="lead"><strong style="font-weight: bold;">Major:</strong> ${student.Stu_major}</p>
                    <p class="lead"><strong style="font-weight: bold;">CGPA:</strong> ${student.CGPA}</p>
                    <p class="lead"><strong style="font-weight: bold;">Year of Graduation:</strong> ${student.year_of_graduation}</p>
                </div>
            `;
            studentList.insertAdjacentHTML("beforeend", stuHtml);
        });
    } else {
        studentList.innerHTML = "<p>No students found.</p>";
    }
});
</script>
