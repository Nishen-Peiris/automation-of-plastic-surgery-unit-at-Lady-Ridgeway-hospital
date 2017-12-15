<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 12/15/17
 * Time: 4:21 PM
 */

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

if (isset($_GET{'reason_for_surgery_type'}) && isset($_GET{'reason_for_surgery'})) {
    $reason_for_surgery_type = $_GET{'reason_for_surgery_type'};
    $reason_for_surgery = $_GET{'reason_for_surgery'};
} else {
    die();
}

// get the total no. of records
$sql = "SELECT id FROM pre_surgery";
$result = $conn->query($sql);
$total = $result->num_rows;

// load data from the pre_surgery relation
if ($reason_for_surgery_type == "Congenital") {
    $sql = "SELECT clinic_no_type, clinic_no, BHT_no, reason_for_surgery_type, reason_for_surgery, surgery_date FROM pre_surgery WHERE reason_for_surgery_type = '$reason_for_surgery_type'";
} else {
    $sql = "SELECT clinic_no_type, clinic_no, BHT_no, reason_for_surgery_type, reason_for_surgery, surgery_date FROM pre_surgery WHERE reason_for_surgery_type = '$reason_for_surgery_type' AND reason_for_surgery = '$reason_for_surgery'";
}

$result = $conn->query($sql);
$rec_count = $result->num_rows;

if ($rec_count == 0) {
    echo "0 results";
    die();
}

echo $rec_count . " match(es) out of " . $total;

// Table to show the list of permanent_registration
echo "<table border=\"1\" class=\"table mytable\">
        <tr class=\"table-header\">
            <th>Clinic no.</th>
            <th>BHT no.</th>
            <th>Reason</th>
            <th>Date</th>
        </tr>";
while ($row = $result->fetch_assoc()) {
    $id = $row["id"];
    ?>
    <tr>
        <td><?php echo $row["clinic_no_type"];
            echo " - ";
            echo $row["clinic_no"]; ?></td>
        <td><?php echo $row["BHT_no"]; ?></td>
        <td>
            <?php echo $row["reason_for_surgery_type"]; ?>
            <?php echo " - "; ?>
            <?php echo $row["reason_for_surgery"]; ?>
        </td>
        <td><?php echo $row["surgery_date"]; ?></td>
    </tr>
    <?php
};
echo "</table>";

mysqli_close($conn);