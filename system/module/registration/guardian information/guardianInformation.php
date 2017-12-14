<?php
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

$rec_limit = 10; // no. of records per page
if (isset($_GET{'page'})) {
    $page = $_GET{'page'};
    $offset = $rec_limit * ($page - 1);
} else {
    $page = 1;
    $offset = 0;
}

/* Get total number of records */
$sql_to_count_the_total_number_of_records = "SELECT id FROM guardian_information";
$result = $conn->query($sql_to_count_the_total_number_of_records);
$rec_count = $result->num_rows;

// load data from the pre_surgery relation
$sql = "SELECT id, clinic_no_type, clinic_no, BHT_no, guardian_name, address, gender, contact_no, occupation FROM guardian_information LIMIT $offset, $rec_limit";
$guardian_information = $conn->query($sql);
?>

    <html>
    <head>
        <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
        <link rel="icon" href="../../../images/title.png"/>
        <link rel="stylesheet" type="text/css"
              href="../../../bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css"
              href="../../../css/mainlayout.css"/>
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
                        <a href="../login/dashboard.php">
                            Dashboard </a></li>
                    <li><a href="../../registration/registration.php">Registration</a></li>
                    <li class="active"><font color="#096dac"> Guardian Information </font></li>
                </ol>
                <h3 align="center">Guardian Information</h3>
            </div>
            <HR/>
            <div class="row" style="padding-left: 20px">
                <!-------------------- Add and search -------------------->
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <a href="../../registration/guardian information/addGuardianInformation.php">
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
                <!-------------------- Table to show the list of post_surgeries -------------------->
                <?php
                if ($guardian_information->num_rows > 0) {
                    ?>
                    <!-- display field headings -->
                    <table border="1" class="table mytable">
                        <tr class="table-header">
                            <th>Clinic no.</th>
                            <th>BHT no.</th>
                            <th>Guardian name</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Contact no.</th>
                            <th>Occupation</th>
                            <th>Operation</th>
                        </tr>
                        <?php
                        // output data of each row
                        while ($row = $guardian_information->fetch_assoc()) {
                            $id = $row["id"];
                            ?>
                            <tr>
                                <td><?php echo $row["clinic_no_type"];
                                    echo " - ";
                                    echo $row["clinic_no"]; ?></td>
                                <td><?php echo $row["BHT_no"]; ?></td>
                                <td><?php echo $row["guardian_name"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                                <td><?php echo $row["gender"]; ?></td>
                                <td><?php echo $row["contact_no"]; ?></td>
                                <td><?php echo $row["occupation"]; ?></td>
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
        </div>
        <div id="footer">
            <?php include '../../../common/footer.php'; ?>
        </div>
    </div>
    </body>
    </html>

<?php
$conn->close();