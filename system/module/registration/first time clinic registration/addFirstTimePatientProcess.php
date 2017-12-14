<?php
/**
 * Created by PhpStorm.
 * User: ChaThUrikA
 * Date: 12/13/2017
 * Time: 2:51 PM
 */
/******************** All the field names of the Word Registration Relation **************************/
//id
//clinic_no
//clinic_no_type
//patient_name
//DOB


include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

// initialize all the variables
$id=$clinic_no=$clinic_no_type=$patient_name=$DOB="";

// retrieve data from the post request
$clinic_no = $_POST['clinic_no'];
$clinic_no_type = $_POST['clinic_no_type'];
$patient_name = $_POST['patient_name'];
$DOB = $_POST['DOB'];

$sql = "INSERT INTO first_time_clinic_registration " .
    "(clinic_no, clinic_no_type, patient_name, DOB) " .
    "VALUES ('$clinic_no', '$clinic_no_type', '$patient_name', '$DOB');";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "firstTimeClinicRegistration.php"
</script>

