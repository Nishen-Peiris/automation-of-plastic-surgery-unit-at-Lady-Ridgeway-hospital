<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 12/4/17
 * Time: 9:35 AM
 */

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

$psc_user_role_id = $_SESSION['psc_user_role_id']; // retrieve user role id from the session
// user need to be house officer or above to perform this action
if ($psc_user_role_id >= 6) {
    $msg = "You don't have enough permission to perform this action!";
    header("Location:../../login/index.php?msg=$msg");
}

if (isset($_GET{'id'})) {
    $id = $_GET{'id'};
} else {
    die();
}

$sql = "SELECT status FROM surgery WHERE id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$status = $row['status'];

if ($status == "Active") {
    $new_status = "Deactive";
} else {
    $new_status = "Active";
}

$sql = "UPDATE surgery SET status = '$new_status' WHERE id = '$id'";
if ($conn->query($sql) == TRUE) {
    $alert = "Record updated.";
} else {
    $alert = "An error occurred while updating the record.";
}

?>

    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "../../../module/surgery/surgery information/surgeryInformation.php"
    </script>

<?php
$conn->close();
