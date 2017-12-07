<?php
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

$userinfo = $_SESSION['userinfo'];
$role_id = $userinfo['role_id'];

// checked and unchecked checkbox
$checkbox = "<input type=\"checkbox\" onclick=\"return false\"/>";
$checked_checkbox = "<input type=\"checkbox\" checked=\"checked\" onclick=\"return false\"/>";

// activate and deactivate buttons
$activate_button = "<button type=\"button\" onclick=\"activateRecord()\">Activate</button>";
$deactivate_button = "<button type=\"button\" onclick=\"deactivateRecord()\">Deactivate</button>";

$rec_limit = 10; // no. of records per page
if (isset($_GET{'page'})) {
    $page = $_GET{'page'};
    $offset = $rec_limit * ($page - 1);
} else {
    $page = 1;
    $offset = 0;
}

/* Get total number of records */
$sql_to_count_the_total_number_of_records = "SELECT id FROM pre_surgery";
$result = $conn->query($sql_to_count_the_total_number_of_records);
$rec_count = $result->num_rows;

// load data from the pre_surgery relation
$sql = "SELECT id, clinic_no_type, clinic_no, BHT_no, reason_for_surgery_type, reason_for_surgery, surgery_date, part_of_the_body_head, part_of_the_body_upper_limb, part_of_the_body_trunk, part_of_the_body_lower_limb, side_of_the_body_left, side_of_the_body_right, tissue_plane_skin, tissue_plane_muscle_tendons, tissue_plane_arteries, tissue_plane_veins, tissue_plane_nerves, head_eye, head_nose, head_ear, head_mouth, head_face,upper_limb_arm, upper_limb_forearm, upper_limb_hand, trunk_chest, trunk_abdomen, trunk_back, lower_limb_thigh, lower_limb_leg, lower_limb_foot, status FROM pre_surgery LIMIT $offset, $rec_limit";
$pre_surgery_data = $conn->query($sql);
?>

    <html>
    <head>
        <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
        <link rel="icon" href="../../../images/title.png"/>
        <link rel="stylesheet" type="text/css"
              href="../../../bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="../../../css/mainlayout.css"/>
        <script type="text/javascript" src="../../../js/jquery-1.8.3.min.js"></script>
    </head>
    <body>
    <section id="main">
        <div id="header">
            <?php include '../../../common/header.php'; ?>
        </div>
        <div id="navi">
            <?php include '../../../common/navi.php'; ?>
            &nbsp;
        </div>
    </section>
    <div id="contents">
        <div>
            <ol class="breadcrumb">
                <li>
                    <a href="../login/dashboard.php">
                        Dashboard </a></li>
                <li><a href="../../surgery/surgery.php">Surgery</a></li>
                <li class="active"><font color="#096dac">Pre Surgery</font></li>
            </ol>
            <h3 align="center">Pre Surgery</h3>
        </div>
        <HR/>
        <div class="table-sec" style="padding: 0 20px;">
            <!-------------------- Add and search -------------------->
            <div class="row" style="padding-left: 20px">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <a href="../../surgery/pre surgery/addPreSurgeryInformation.php">
                        <button class="btn btn-primary"
                                type="button">
                            <i class="glyphicon glyphicon-plus"></i>
                            Add
                        </button>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <form action="../controller/teachercontroller.php?action=search"
                          method="post">
                        <h4>Search :
                            <input type="text" name="search" id="search"
                                   class="input-sm" placeholder="Keyword"/>
                            <button type="submit" name="sub"
                                    class="btn btn-primary input-sm">
                                <i class="glyphicon glyphicon-search"></i>
                                Search
                            </button>
                        </h4>
                    </form>
                </div>
            </div>
            <!-------------------- Table to show the list of pre_surgeries -------------------->
            <?php
            if ($pre_surgery_data->num_rows > 0) {
                ?>
                <!-- display field headings -->
                <table border="1" class="table mytable scrolling">
                    <tr class="table-header">
                        <th colspan="2">Clinic</th>
                        <th>BHT no.</th>
                        <th>Reason</th>
                        <th>Date</th>
                        <th colspan="4">Part of the body</th>
                        <th colspan="2">Side of the body</th>
                        <th colspan="5">Tissue plane</th>
                        <th colspan="5">Head</th>
                        <th colspan="3">Upper Limb</th>
                        <th colspan="3">Trunk</th>
                        <th colspan="3">Lower Limb</th>
                        <th colspan="5">Operation</th>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>no.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Head</td>
                        <td>Upper limb</td>
                        <td>Trunk</td>
                        <td>Lower limb</td>
                        <td>Left</td>
                        <td>Right</td>
                        <td>Skin</td>
                        <td>Muscles / Tendons</td>
                        <td>Arteries</td>
                        <td>Veins</td>
                        <td>Nerves</td>
                        <td>Eye</td>
                        <td>Nose</td>
                        <td>Ear</td>
                        <td>Mouth</td>
                        <td>Face</td>
                        <td>Arm</td>
                        <td>Forearm</td>
                        <td>Hand</td>
                        <td>Chest</td>
                        <td>Abdomen</td>
                        <td>Back</td>
                        <td>Thigh</td>
                        <td>Leg</td>
                        <td>Foot</td>
                        <td></td>
                    </tr>
                    <?php
                    // output data of each row
                    while ($row = $pre_surgery_data->fetch_assoc()) {
                        $id = $row["id"];
                        ?>
                        <tr>
                            <td><?php echo $row["clinic_no_type"]; ?></td>
                            <td><?php echo $row["clinic_no"]; ?></td>
                            <td><?php echo $row["BHT_no"]; ?></td>
                            <td><?php
                                echo $row["reason_for_surgery_type"];
                                if ($row["reason_for_surgery_type"] == "Acquired") {
                                    echo " - " . $row["reason_for_surgery"];
                                } ?></td>
                            <td><?php echo $row["surgery_date"]; ?></td>
                            <td><?php echo ($row["part_of_the_body_head"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["part_of_the_body_upper_limb"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["part_of_the_body_trunk"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["part_of_the_body_lower_limb"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["side_of_the_body_left"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["side_of_the_body_right"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["tissue_plane_skin"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["tissue_plane_muscle_tendons"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["tissue_plane_arteries"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["tissue_plane_veins"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["tissue_plane_nerves"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["head_eye"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["head_nose"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["head_ear"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["head_mouth"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["head_face"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["upper_limb_arm"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["upper_limb_forearm"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["upper_limb_hand"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["trunk_chest"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["trunk_abdomen"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["trunk_back"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["lower_limb_thigh"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["lower_limb_leg"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td><?php echo ($row["lower_limb_foot"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                            <td>
                                <?php
                                echo "<a class='btn btn-success btn-sm' style='margin-bottom: 5px;' href=\"editRecord.php?id=$id\">Edit </a><br> ";
                                echo ($row["status"] == "Active") ? "<a class='btn btn-primary btn-sm' href=\"activateRecord.php?id=$id\">Activate</a>" : "<a class='btn btn-danger btn-sm' href=\"deactivateRecord.php?id=$id\">Deactivate</a>";
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
                $_PHP_SELF = "preSurgeryInformation.php";
                $total_pages = ceil($rec_count / $rec_limit);
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href = \"$_PHP_SELF?page=$i\">$i</a>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
        <div id="footer">
            <?php include '../../../common/footer.php'; ?>
        </div>
    </div>
    </body>
    </html>

<?php
$conn->close();