<?php
/**
 * Created by PhpStorm.
 * User: ChaThUrikA
 * Date: 12/13/2017
 * Time: 2:51 PM
 */
/******************** All the field names of the Word Registration Relation **************************/
//id
//BHT_no
//word_number
//patient_name
//DOB
//age
//tp_number
//gender
//address

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

// initialize all the variables
$id=$BHT_no=$word_number=$patient_name=$DOB=$age=$tp_number=$gender=$address= "";

// retrieve data from the post request
$BHT_no = $_POST['BHT_no'];
$word_number = $_POST['word_number'];
$patient_name = $_POST['patient_name'];
$DOB = $_POST['DOB'];
$age = $_POST['age'];
$tp_number = $_POST['tp_number'];
$gender = $_POST['gender'];
$address = $_POST['address'];


$sql = "INSERT INTO word_registration " .
    "(BHT_no, word_number, patient_name, DOB, age, tp_number, gender, address) " .
    "VALUES ('$BHT_no', '$word_number', '$patient_name', '$DOB', '$age', '$tp_number', '$gender', '$address');";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "wordRegistration.php"
</script>

