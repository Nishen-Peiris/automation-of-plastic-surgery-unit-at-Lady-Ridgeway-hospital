<?php

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

if (isset($_GET{'id'})) {
    $id = $_GET{'id'};
} else {
    die();
}

$sql = "SELECT status FROM first_time_clinic_registration WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$status = $row['status'];

if ($status == "Active") {
    $new_status = "Deactive";
} else {
    $new_status = "Active";
}

$sql = "UPDATE first_time_clinic_registration SET status = '$new_status' WHERE id = '$id'";
if ($conn->query($sql) == TRUE) {
    $alert = "Record updated.";
} else {
    $alert = "An error occurred while updating the record.";
}

?>

    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "../../../module/registration/first time clinic registration/firstTimeClinicRegistration.php"
    </script>

<?php
$conn->close();
