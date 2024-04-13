<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "ems_db"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Department_tab";
$result = $conn->query($sql);
$departments = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $departments[] = $row;
    }
}
$conn->close();
$departments_json = json_encode($departments);
?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var departmentList = document.getElementById("department-list");
    var departments = <?php echo $departments_json; ?>;
    if (departments.length > 0) {
        departments.forEach(function(department) {
            var deptHtml = `
                <div class="col-lg-5 mx-auto mb-5">
                    <p class="lead"><strong style="font-weight: bold;">Department ID:</strong> ${department.Dept_id}</p>
                    <p class="lead"><strong style="font-weight: bold;">Department Name:</strong> ${department.Dept_name}</p>
                    <p class="lead"><strong style="font-weight: bold;">Department Chair:</strong> ${department.Dept_chair}</p>
                    <p class="lead"><strong style="font-weight: bold;">Department Dean:</strong> ${department.Dept_dean}</p>
                    <p class="lead"><strong style="font-weight: bold;">Budget:</strong> ${department.Dept_budget}</p>
                </div>
            `;
            departmentList.insertAdjacentHTML("beforeend", deptHtml);
        });
    } else {
        departmentList.innerHTML = "<p>No departments found.</p>";
    }
});
</script>
