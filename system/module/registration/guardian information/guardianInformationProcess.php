<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 12/14/17
 * Time: 5:35 AM
 */

/******************** All the field names of the guardian_information relation **************************/
//id
//clinic_no_type
//clinic_no
//BHT_no
//guardian_name
//address
//gender
//contact_no
//occupation

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

// initialize all the variables
$id = $clinic_no_type = $clinic_no = $BHT_no = $guardian_name = $address = $gender = $contact_no = $occupation = $age = "";

// retrieve data from the post request
$clinic_no_type = $_POST['clinic_no_type'];
$clinic_no = $_POST['clinic_no'];
$BHT_no = $_POST['BHT_no'];
$guardian_name = $_POST['guardian_name'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$contact_no = $_POST['contact_no'];
$occupation = $_POST['occupation'];
$age = $_POST['age'];

$sql = "INSERT INTO guardian_information " .
    "(clinic_no_type, clinic_no, BHT_no, guardian_name, address, gender, contact_no, occupation, age) " .
    "VALUES ('$clinic_no_type', '$clinic_no', '$BHT_no', '$guardian_name', '$address', '$gender', '$contact_no', '$occupation', $age);";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "guardianInformation.php"
</script>