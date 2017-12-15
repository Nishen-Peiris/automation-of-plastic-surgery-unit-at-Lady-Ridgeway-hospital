<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 12/15/17
 * Time: 6:25 AM
 */

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

// get the district
if (isset($_GET{'district'})) {
    $district = $_GET{'district'};
} else {
    die();
}

// get the total no. of records
$sql = "SELECT id FROM permanent_registration";
$result = $conn->query($sql);
$total = $result->num_rows;

// load data from the permanent_registration relation
$sql = "SELECT clinic_no_type, clinic_no, first_contact_date, patient_name, DoB, address, gender, referred_by_hospital, hospital_district, referred_by_person FROM permanent_registration WHERE hospital_district = '$district'";
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
            <th>First contact date</th>
            <th>Patient name</th>
            <th>DoB</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Hospital</th>
            <th>District</th>
            <th>Referred by</th>
        </tr>";
while ($row = $result->fetch_assoc()) {
    $id = $row["id"];
    ?>
    <tr>
        <td><?php echo $row["clinic_no_type"];
            echo " - ";
            echo $row["clinic_no"]; ?></td>
        <td><?php echo $row["first_contact_date"]; ?></td>
        <td><?php echo $row["patient_name"]; ?></td>
        <td><?php echo $row["DoB"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["referred_by_hospital"]; ?></td>
        <td><?php echo $row["hospital_district"]; ?></td>
        <td><?php echo $row["referred_by_person"]; ?></td>
    </tr>
    <?php
};
echo "</table>";

mysqli_close($conn);