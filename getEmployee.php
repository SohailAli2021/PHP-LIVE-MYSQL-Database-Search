<?php
$con = new mysqli('localhost', 'root', '', 'emp');
if ($con) {
    // echo "Connection Successfully";
} else {
    echo "Connection Not Successfully";
}

$name = $_GET['name'];
$name = mysqli_real_escape_string($con, $name);

$sql = "SELECT * FROM emp WHERE name LIKE '$name%'";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
    while ($rows = mysqli_fetch_array($res)) {
        echo "<p>" . $rows['emp_no'] . "&nbsp;&nbsp;" . $rows['name'] . "</p>";
    }
} else {
    echo "<p>NO DATA Found</p>";
}
mysqli_close($con);
?>
