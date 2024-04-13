<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ems_db"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM faculty_tab";
$result = $conn->query($sql);

$faculty = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $faculty[] = $row;
    }
}
$conn->close();
$faculty_json = json_encode($faculty);
?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var facultyList = document.getElementById("faculty-list");
    var faculty = <?php echo $faculty_json; ?>;

    if (faculty.length > 0) {
        faculty.forEach(function(fac) {
            var facHtml = `
                <div class="col-lg-5 mx-auto mb-5">
                    <p class="lead"><strong style="font-weight: bold;">Faculty ID:</strong> ${fac.sid}</p>
                    <p class="lead"><strong style="font-weight: bold;">Faculty Name:</strong> ${fac.Fac_name}</p>
                    <p class="lead"><strong style="font-weight: bold;">Date of Joining:</strong> ${fac.Fac_DOJ}</p>
                    <p class="lead"><strong style="font-weight: bold;">Qualification:</strong> ${fac.qualification}</p>
                    <p class="lead"><strong style="font-weight: bold;">Department:</strong> ${fac.department}</p>
                </div>
            `;
            facultyList.insertAdjacentHTML("beforeend", facHtml);
        });
    } else {
        facultyList.innerHTML = "<p>No faculty found.</p>";
    }
});
</script>
