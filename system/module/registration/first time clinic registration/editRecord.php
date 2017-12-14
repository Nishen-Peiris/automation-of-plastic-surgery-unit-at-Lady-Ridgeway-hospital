<?php
/**
 * Created by PhpStorm.
 * User: ChaThUrikA
 * Date: 12/13/2017
 * Time: 9:26 PM
 */
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data from post
    $id = $_POST{'id'};
    $clinic_no= $_POST{'clinic_no'};
    $clinic_no_type = $_POST{'clinic_no_type'};
    $patient_name = $_POST['patient_name'];
    $DOB = $_POST['DOB'];


    $sql = "UPDATE word_registration set BHT_no = '$BHT_no', patient_name = '$patient_name', DOB = '$DOB', age = '$age', tp_number = '$tp_number', gender = '$gender', address = '$address' WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
        $alert = "Record updated.";
    } else {
        $alert = "An error occurred while updating the record.";
    }
    ?>
    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "wordRegistration.php"
    </script>
    <?php
    $conn->close();
} else {
    // get the id of the record to be edited
    if (isset($_GET{'id'})) {
        $id = $_GET{'id'};
    } else {
        die();
    }

    // get the record to be edited
    $sql = "SELECT BHT_no, patient_name, DOB, age, tp_number, gender, address from word_registration WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $BHT_no = $row['BHT_no'];
        $patient_name = $row['patient_name'];
        $DOB = $row['DOB'];
        $age = $row['age'];
        $tp_number = $row['tp_number'];
        $gender = $row['gender'];
        $address = $row['address'];


    } else {
        $conn->close();
        die();
    }
}
?>
