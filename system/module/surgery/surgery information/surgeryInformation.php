<?php
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

$psc_user_role_id = $_SESSION['psc_user_role_id'];
$role_id = $userinfo['role_id'];

echo $psc_user_role_id;

$rec_limit = 10; // no. of records per page
if (isset($_GET{'page'})) {
    $page = $_GET{'page'};
    $offset = $rec_limit * ($page - 1);
} else {
    $page = 1;
    $offset = 0;
}

/* Get total number of records */
$sql_to_count_the_total_number_of_records = "SELECT id FROM surgery";
$result = $conn->query($sql_to_count_the_total_number_of_records);
$rec_count = $result->num_rows;

// load data from the pre_surgery relation
// search by keyword if specified
if (isset($_GET{'search'})) {
    $search = $_GET{'search'};
    $sql = "SELECT id, BHT_no, surgery_date, surgery_time, surgery_name, type_of_anesthesia, done_by, designation, assisted_by_1, assisted_by_2, assisted_by_3, status FROM surgery WHERE surgery_name LIKE '%" . $search . "%' LIMIT $offset, $rec_limit";
} else {
    $sql = "SELECT id, BHT_no, surgery_date, surgery_time, surgery_name, type_of_anesthesia, done_by, designation, assisted_by_1, assisted_by_2, assisted_by_3, status FROM surgery LIMIT $offset, $rec_limit";
}

$surgery_data = $conn->query($sql);
?>

<html>
<head>
    <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
    <link rel="icon" href="../../../images/title.png"/>
    <link rel="stylesheet" type="text/css"
          href="../../../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../../css/mainlayout.css"/>
    <script type="text/javascript" src="../../../js/jquery-1.8.3.min.js">
    </script>
</head>
<body>
<div id="main">
    <div id="header">
        <?php include '../../../common/header.php'; ?>
    </div>
    <div id="navi">
        <?php include '../../../common/navi.php'; ?>
        &nbsp;
    </div>
    <div id="contents">
        <div>
            <ol class="breadcrumb">
                <li>
                    <a href="../../login/dashboard.php">
                        Dashboard </a></li>
                <li><a href="../../surgery/surgery.php">Surgery</a></li>
                <li class="active"><font color="#096dac">Surgery</font></li>
            </ol>
            <h3 align="center">Surgery</h3>
            <!-------------------- surgery calendar -------------------->
            <a href="surgeryCalender.php" style="padding-left: 20px"><i class="glyphicon glyphicon-calendar"></i> Go
                to Surgery calendar</a>
        </div>
        <HR/>
        <div class="table-sec" style="padding: 0 20px;">
            <!-------------------- Add and search -------------------->
            <div class="row" style="padding-left: 20px">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <a href="../../surgery/surgery information/addSurgeryInformation.php">
                        <button class="btn btn-primary"
                                type="button">
                            <i class="glyphicon glyphicon-plus"></i>
                            Add
                        </button>
                    </a>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <h4>Search :
                        <input type="text" name="search" id="search"
                               class="input-sm" placeholder="Keyword"/>
                        <button type="button" id="search" name="search" onclick="search()"
                                class="btn btn-primary input-sm"><i
                                    class="glyphicon glyphicon-search"></i> Search
                        </button>
                    </h4>
                </div>
            </div>
            <!-------------------- Table to show the list of pre_surgeries -------------------->
            <?php
            if ($surgery_data->num_rows > 0) {
                ?>
                <!-- display field headings -->
                <table border="1" class="table mytable">
                    <tr class="table-header">
                        <th>BHT no.</th>
                        <th>Surgery date</th>
                        <th>Surgery time</th>
                        <th>Surgery name</th>
                        <th>Type of anesthesia</th>
                        <th>Done by</th>
                        <th>Destination</th>
                        <th>Assisted by</th>
                        <th>Assisted by</th>
                        <th>Assisted by</th>
                        <th>Operation</th>
                    </tr>
                    <?php
                    // output data of each row
                    while ($row = $surgery_data->fetch_assoc()) {
                        $id = $row["id"];
                        ?>
                        <tr>
                            <td><?php echo $row["BHT_no"]; ?></td>
                            <td><?php echo $row["surgery_date"]; ?></td>
                            <td><?php echo $row["surgery_time"]; ?></td>
                            <td><?php echo $row["surgery_name"]; ?></td>
                            <td><?php echo $row["type_of_anesthesia"]; ?></td>
                            <td><?php echo $row["done_by"]; ?></td>
                            <td><?php echo $row["designation"]; ?></td>
                            <td><?php echo $row["assisted_by_1"]; ?></td>
                            <td><?php echo $row["assisted_by_2"]; ?></td>
                            <td><?php echo $row["assisted_by_3"]; ?></td>
                            <td>
                                <?php
                                echo "<a class='btn btn-success btn-sm' style='margin-bottom: 5px;' href=\"editRecord.php?id=$id\">Edit </a><br> ";
                                echo ($row["status"] == "Deactive") ? "<a class='btn btn-primary btn-sm' href=\"activateRecord.php?id=$id\">Activate</a>" : "<a class='btn btn-danger btn-sm' href=\"activateRecord.php?id=$id\">Deactivate</a>";
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
                $_PHP_SELF = "surgeryInformation.php";
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
?>

<script type="text/javascript">
    // search by keyword
    function search() {
        var keyword = document.getElementById("search").value;
        window.location = "surgeryInformation.php?search=" + keyword;
    }
</script>
