<?php
/**
 * Created by PhpStorm.
 * User: ChaThUrikA
 * Date: 12/15/2017
 * Time: 11:08 AM
 */
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";


/******************** All the field names of the investigation relation **************************/
//id
//clinic_no
//clinic_no_type
//BHT_no
//admission_date
//blood_group
//x_ray
//echo
//ultra_sound
//CT
//MRI
//fbc_report
//x_ray_report
//echo_report
//ultra_sound_report
//CT_report
//MRI_report
//ECG_report

// initialize all the variables
$id = $clinic_no = $clinic_no_type = $BHT_no= $admission_date = $blood_group = $x_ray = $echo = $ultra_sound = $CT = $MRI = $fbc_report = $x_ray_report = $echo_report = $ultra_sound_report = $CT_report = $MRI_report = $ECG_report =  "";

// retrieve data from the post request
$clinic_no = $_POST['clinic_no'];
$clinic_no_type = $_POST['clinic_no_type'];
$BHT_no = $_POST['BHT_no'];
$admission_date = $_POST['admission_date'];
$blood_group = $_POST['blood_group'];

if (isset($_POST['x_ray'])) {
    $x_ray = $_POST['x_ray'];
} else {
    $x_ray = 0;
}
if (isset($_POST['echo'])) {
    $echo = $_POST['echo'];
} else {
    $echo = 0;
}
if (isset($_POST['ultra_sound'])) {
    $ultra_sound = $_POST['ultra_sound'];
} else {
    $ultra_sound = 0;
}
if (isset($_POST['CT'])) {
    $CT = $_POST['CT'];
} else {
    $CT = 0;
}
if (isset($_POST['MRI'])) {
    $MRI = $_POST['MRI'];
} else {
    $MRI = 0;
}

//upload files
$fbc_report = $_FILES['fbc_report']['name'];
$file_loc = $_FILES['fbc_report']['tmp_name'];
$folder="../uploads/";
move_uploaded_file($file_loc,$folder.$fbc_report);

$x_ray_report =$_FILES['x_ray_report']['name'];
$file_loc = $_FILES['x_ray_report']['tmp_name'];
$folder="../uploads/";
move_uploaded_file($file_loc,$folder.$x_ray_report);

$echo_report = $_FILES['echo_report']['name'];
$file_loc = $_FILES['echo_report']['tmp_name'];
$folder="../uploads/";
move_uploaded_file($file_loc,$folder.$echo_report);

$ultra_sound_report = $_FILES['ultra_sound_report']['name'];
$file_loc = $_FILES['ultra_sound_report']['tmp_name'];
$folder="../uploads/";
move_uploaded_file($file_loc,$folder.$ultra_sound_report);

$CT_report = $_FILES['CT_report']['name'];
$file_loc = $_FILES['CT_report']['tmp_name'];
$folder="../uploads/";
move_uploaded_file($file_loc,$folder.$CT_report);

$MRI_report = $_FILES['MRI_report']['name'];
$file_loc = $_FILES['MRI_report']['tmp_name'];
$folder="../uploads/";
move_uploaded_file($file_loc,$folder.$MRI_report);

$ECG_report = $_FILES['ECG_report']['name'];
$file_loc = $_FILES['ECG_report']['tmp_name'];
$folder="../uploads/";
move_uploaded_file($file_loc,$folder.$ECG_report);

$sql = "INSERT INTO investigation " .
    "(clinic_no, clinic_no_type, BHT_no, admission_date, blood_group, x_ray, echo, ultra_sound, CT, MRI, fbc_report, x_ray_report, echo_report, ultra_sound_report, CT_report, MRI_report, ECG_report) " .
    "VALUES ('$clinic_no', '$clinic_no_type', '$BHT_no', '$admission_date', '$blood_group', $x_ray, $echo, $ultra_sound, $CT, $MRI, '$fbc_report', '$x_ray_report', '$echo_report', '$ultra_sound_report', '$CT_report', '$MRI_report', '$ECG_report' );";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "investigation.php"
</script>