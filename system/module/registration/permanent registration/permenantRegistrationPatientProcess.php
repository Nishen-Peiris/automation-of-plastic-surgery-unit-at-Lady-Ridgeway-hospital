<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 12/13/17
 * Time: 10:22 PM
 */

/******************** All the field names of the Permanent_registration relation **************************/
//id
//clinic_no_type
//clinic_no
//first_contact_date
//patient_name
//DoB
//address
//gender
//referred_by_hospital
//hospital_district
//referred_by_person

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

// initialize all the variables
$id = $clinic_no_type = $clinic_no = $first_contact_date = $patient_name = $DoB = $address = $gender = $referred_by_hospital = $hospital_district = $referred_by_person = "";

// retrieve data from the post request
$clinic_no_type = $_POST['clinic_no_type'];
$clinic_no = $_POST['clinic_no'];
$first_contact_date = $_POST['first_contact_date'];
$patient_name = $_POST['patient_name'];
$DoB = $_POST['DoB'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$referred_by_hospital = $_POST['referred_by_hospital'];
$hospital_district = $_POST['hospital_district'];
$referred_by_person = $_POST['referred_by_person'];

echo $referred_by_hospital;
echo "<br/>";
echo $referred_by_person;
echo "<br/>";
echo $_POST['referred_by_hospital'];
echo "<br/>";
echo $_POST['referred_by_person'];

$sql = "INSERT INTO permanent_registration " .
    "(clinic_no_type, clinic_no, first_contact_date, patient_name, DoB, address, gender, referred_by_hospital, hospital_district, referred_by_person) " .
    "VALUES ('$clinic_no_type', '$clinic_no', '$first_contact_date', '$patient_name', '$DoB', '$address', '$gender', '$referred_by_hospital', '$hospital_district', '$referred_by_person');";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "permanentRegistration.php"
</script>