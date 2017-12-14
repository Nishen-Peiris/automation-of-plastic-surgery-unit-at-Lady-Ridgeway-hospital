<?php
include_once "../../../system/common/session_handling.php";
include_once "../../../system/common/dbconnection_inc.php";

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
$sql_to_count_the_total_number_of_records = "SELECT id FROM history";
$result = $conn->query($sql_to_count_the_total_number_of_records);
$rec_count = $result->num_rows;

// load data from the pre_surgery relation
$sql = "SELECT id, clinic_no_type, clinic_no, BHT_no, presenting_complain, past_medical_history, past_surgical_history, allergic_history, drug_history, diet_history, birth_history_birth_weight, birth_history_deliver, birth_history_mode_of_delivery, birth_history_mode_of_delivery_status, birth_history_post_natal_complication, other_history_family_history_consanguineous, other_history_family_history_consanguineous_status, other_history_family_history_family_diseases, other_history_family_history_family_diseases_status, immunization_history_BCG, immunization_history_BCG_2, immunization_history_penta_1, immunization_history_OPV_1, immunization_history_penta_2, immunization_history_OPV_2, immunization_history_IPV,  immunization_history_penta_3, immunization_history_OPV_3, immunization_history_MMR_1, immunization_history_JE, immunization_history_DPT, immunization_history_OPV_4, immunization_history_MMR_2, immunization_history_DT, immunization_history_OPV_5, immunization_history_adult_tetanus FROM history LIMIT $offset, $rec_limit";
$history_data = $conn->query($sql);
?>

    <html>
    <head>
        <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
        <link rel="icon" href="../../images/title.png"/>
        <link rel="stylesheet" type="text/css"
              href="../../bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css"
              href="../../css/mainlayout.css"/>
        <script type="text/javascript" src="../../js/jquery-1.8.3.min.js">
        </script>
    </head>
    <body>
    <div id="main">
        <div id="header">
            <?php include '../../common/header.php'; ?>
        </div>
        <div id="navi">
            <?php include '../../common/navi.php'; ?>
            &nbsp;
        </div>
        <div id="contents">
            <div>
                <ol class="breadcrumb">
                    <li>
                        <a href="../login/dashboard.php">
                            Dashboard </a></li>
                    <li><a href="../history/history.php">History</a></li>
                </ol>
                <h3 align="center">History</h3>
            </div>
            <HR/>
            <div class="table-sec" style="padding: 0 20px;">
                <!-------------------- Add and search -------------------->
                <div class="row" style="padding-left: 20px">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <a href="../history/addHistory.php">
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
                <!-------------------- Table to show the list of histories -------------------->
                <?php
                if ($history_data->num_rows > 0) {
                    ?>
                    <!-- display field headings -->
                    <table border="1" class="table mytable scrolling" >
                        <tr  class="table-header">
                            <th rowspan="2">Clinic type</th>
                            <th rowspan="2">Clinic no.</th>
                            <th rowspan="2">BHT no.</th>
                            <th rowspan="2">Presenting complain</th>
                            <th rowspan="2">Past medical history</th>
                            <th rowspan="2">Past surgical history</th>
                            <th rowspan="2">Allergic history</th>
                            <th rowspan="2">Drug history</th>
                            <th rowspan="2">Diet history</th>
                            <th colspan="4">Birth History</th>
                            <th colspan="4">Family History</th>
                            <th colspan="17">Immunization</th>
                            <th rowspan="2">Operation</th>
                        </tr>
                        <tr class="table-sub-header">
                            <th>Birth Weight</th>
                            <th>Delivery</th>
                            <th>Mode of Delivery</th>
                            <th>Post natal Complication</th>
                            <th>Family History Consanguineous</th>
                            <th>Consanguineous status</th>
                            <th>Familiar Diseases </th>
                            <th>Familiar Diseases Status</th>
                            <th>BCG</th>
                            <th>BCG 2nd dose</th>
                            <th>Pentavalent 1</th>
                            <th>OPV1,FIPV</th>
                            <th>Pentavalent 2</th>
                            <th>OPV 2</th>
                            <th>IPV</th>
                            <th>Pentavalent 3</th>
                            <th>OPV 3</th>
                            <th>Measles, Mumps, Rubella 1 (MMR 1)</th>
                            <th>Live JE</th>
                            <th>DPT</th>
                            <th>OPV 4</th>
                            <th>Measles & Rubella (MR)/ MMR 2</th>
                            <th>D.T</th>
                            <th>OPV 5</th>
                            <th>Adult Tetanus & diphthria (aTd)</th>

                        </tr>
                        <?php
                        // output data of each row
                        while ($row = $history_data->fetch_assoc()) {
                            $id = $row["id"];
                            ?>
                            <tr>
                                <td><?php echo $row["clinic_no_type"]; ?></td>
                                <td><?php echo $row["clinic_no"]; ?></td>
                                <td><?php echo $row["BHT_no"]; ?></td>
                                <td><?php echo $row["presenting_complain"]; ?></td>
                                <td><?php echo $row["past_medical_history"]; ?></td>
                                <td><?php echo $row["past_surgical_history"]; ?></td>
                                <td><?php echo $row["allergic_history"]; ?></td>
                                <td><?php echo $row["drug_history"]; ?></td>
                                <td><?php echo $row["diet_history"]; ?></td>
                                <td><?php echo $row["birth_history_birth_weight"]; ?></td>
                                <td><?php echo $row["birth_history_deliver"]; ?></td>
                                <td><?php echo $row["birth_history_mode_of_delivery"]; ?></td>
                                <td><?php echo $row["birth_history_post_natal_complication"]; ?></td>
                                <td><?php echo ($row["other_history_family_history_consanguineous"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo $row["other_history_family_history_consanguineous_status"]; ?></td>
                                <td><?php echo ($row["other_history_family_history_family_diseases"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo $row["other_history_family_history_family_diseases_status"]; ?></td>
                                <td><?php echo ($row["immunization_history_BCG"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_BCG_2"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_penta_1"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_OPV_1"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_penta_2"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_OPV_2"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_IPV"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_penta_3"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_OPV_3"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_MMR_1"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_JE"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_DPT"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_OPV_4"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_MMR_2"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_DT"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_OPV_5"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td><?php echo ($row["immunization_history_adult_tetanus"] == 1) ? $checked_checkbox : $checkbox; ?></td>
                                <td>
                                    <?php
                                    echo "<a class='btn btn-success btn-sm' style='margin-bottom: 5px;' href=\"editRecord.php?id=$id\">Edit </a><br> ";
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <?php
                    $_PHP_SELF = "history.php";
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
                <?php include '../../common/footer.php'; ?>
            </div>
        </div>
    </body>
    </html>

<?php
$conn->close();