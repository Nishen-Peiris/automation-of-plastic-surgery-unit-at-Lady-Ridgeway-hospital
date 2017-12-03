<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 12/3/17
 * Time: 11:27 AM
 */

/******************** All the field names of the pre_surgery relation **************************/
//id
//BHT_no
//photograph
//complications
//post_surgery_investigations
//date_of_discharge
//discharge_plan

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

// initialize all the variables
$id = $BHT_no = $photograph = $complications = $post_surgery_investigations = $date_of_discharge = $discharge_plan = "";

// retrieve data from the post request
$BHT_no = $_POST['BHT_no'];
$photograph = $_POST['photograph'];
$complications = $_POST['complications'];
$post_surgery_investigations = $_POST['post_surgery_investigations'];
$date_of_discharge = $_POST['date_of_discharge'];
$discharge_plan = $_POST['discharge_plan'];

$sql = "INSERT INTO post_surgery " .
    "(BHT_no, photograph, complications, post_surgery_investigations, date_of_discharge, discharge_plan) " .
    "VALUES ('$BHT_no', '$photograph', '$complications', '$post_surgery_investigations', '$date_of_discharge', '$discharge_plan');";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "postSurgeryInformation.php"
</script>