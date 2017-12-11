<?php
/**
 * Created by PhpStorm.
 * User: ChaThUrikA
 * Date: 12/11/2017
 * Time: 6:44 PM
 */
/******************** All the field names of the Examination Relation **************************/
//id
//clinic_no_type
//clinic_no
//BHT_no
//general_examination
//cardiovascular_system_examination
//respiratory_system_examination
//nervous_system_examination
//abdominal_examination
//genito_urinary_examination
//limbs_examination

include_once "../../../system/common/session_handling.php";
include_once "../../../system/common/dbconnection_inc.php";

// initialize all the variables
$id=$clinic_no_type=$BHT_no=$general_examination=$cardiovascular_system_examination=$respiratory_system_examination=$nervous_system_examination=$nervous_system_examination=$genito_urinary_examination=$limbs_examination= "";

// retrieve data from the post request
$clinic_no_type = $_POST['clinic_no_type'];
$clinic_no = $_POST['clinic_no'];
$BHT_no = $_POST['BHT_no'];
$general_examination = $_POST['general_examination'];
$cardiovascular_system_examination = $_POST['cardiovascular_system_examination'];
$respiratory_system_examination = $_POST['respiratory_system_examination'];
$nervous_system_examination = $_POST['nervous_system_examination'];
$abdominal_examination = $_POST['abdominal_examination'];
$genito_urinary_examination = $_POST['genito_urinary_examination'];
$limbs_examination = $_POST['limbs_examination'];

$sql = "INSERT INTO examination " .
    "(clinic_no_type, clinic_no, BHT_no, general_examination, cardiovascular_system_examination, respiratory_system_examination, nervous_system_examination, abdominal_examination, genito_urinary_examination, limbs_examination) " .
    "VALUES ('$clinic_no_type', '$clinic_no', '$BHT_no', '$general_examination', '$cardiovascular_system_examination', '$respiratory_system_examination', '$nervous_system_examination', '$abdominal_examination', '$genito_urinary_examination', '$limbs_examination');";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "examination.php"
</script>

