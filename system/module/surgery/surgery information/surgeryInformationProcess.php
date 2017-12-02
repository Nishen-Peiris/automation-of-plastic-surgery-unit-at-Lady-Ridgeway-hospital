<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 12/1/17
 * Time: 7:41 PM
 */
/******************** All the field names of the surgery relation **************************/
//id
//BHT_no
//surgery_date
//surgery_time
//surgery_name
//type_of_anesthesia
//done_by
//designation
//assisted_by_1
//assisted_by_2
//assisted_by_3

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

// initialize all the variables
$id = $BHT_no = $surgery_date = $surgery_time = $surgery_name = $type_of_anesthesia = $done_by = $designation = $assisted_by_1 = $assisted_by_2 = $assisted_by_3 = "";

// retrieve data from the post request
$BHT_no = $_POST['BHT_no'];
$surgery_date = $_POST['surgery_date'];
$surgery_time = $_POST['surgery_time'];
$surgery_name = $_POST['surgery_name'];
$type_of_anesthesia = $_POST['type_of_anesthesia'];
$done_by = $_POST['done_by'];
$designation = $_POST['designation'];
$assisted_by_1 = $_POST['assisted_by_1'];
$assisted_by_2 = $_POST['assisted_by_2'];
$assisted_by_3 = $_POST['assisted_by_3'];

$sql = "INSERT INTO surgery " .
    "(BHT_no, surgery_date, surgery_time, surgery_name, type_of_anesthesia, done_by, designation, assisted_by_1, assisted_by_2, assisted_by_3) " .
    "VALUES ('$BHT_no', '$surgery_date', '$surgery_time', '$surgery_name', '$type_of_anesthesia', '$done_by', '$designation', '$assisted_by_1', '$assisted_by_2', '$assisted_by_3');";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "surgeryInformation.php"
</script>