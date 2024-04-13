<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ems_db"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM courses_tab";
$result = $conn->query($sql);
$courses = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
}
$conn->close();
$courses_json = json_encode($courses);
?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var coursesList = document.getElementById("courses-list");
    var courses = <?php echo $courses_json; ?>;

    if (courses.length > 0) {
    courses.forEach(function(course) {
        var courseHtml = `
        <div class="col-lg-5 mx-auto mb-5">
    <p class="lead"><strong style="font-weight: bold;">Course ID:</strong> ${course.Course_id}</p>
    <p class="lead"><strong style="font-weight: bold;">Course Name:</strong> ${course.Course_name}</p>
    <p class="lead"><strong style="font-weight: bold;">Offered In:</strong> ${course.Offered_in}</p>
    <p class="lead"><strong style="font-weight: bold;">Credits:</strong> ${course.credits}</p>
    <p class="lead"><strong style="font-weight: bold;">Prerequisites:</strong> ${course.pre_req}</p>
    <p class="lead"><strong style="font-weight: bold;">Type:</strong> ${course.type}</p>
</div>
        `;
        coursesList.insertAdjacentHTML("beforeend", courseHtml);
    });
} else {
    coursesList.innerHTML = "<p>No courses found.</p>";
}

});
</script>
