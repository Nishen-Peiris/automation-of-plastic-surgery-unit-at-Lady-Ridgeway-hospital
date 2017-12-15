<?php
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

$userinfo = $_SESSION['userinfo'];
$role_id = $userinfo['role_id'];

$rec_limit = 10; // no. of records per page
if (isset($_GET{'page'})) {
    $page = $_GET{'page'};
    $offset = $rec_limit * ($page - 1);
} else {
    $page = 1;
    $offset = 0;
}

/* Get total number of records */
$sql_to_count_the_total_number_of_records = "SELECT id FROM first_time_clinic_registration";
$result = $conn->query($sql_to_count_the_total_number_of_records);
$rec_count = $result->num_rows;

// load data from the word registration relation
$sql = "SELECT id,clinic_no, clinic_no_type, patient_name, DOB, status  FROM first_time_clinic_registration LIMIT $offset, $rec_limit";
$first_time_reg_data = $conn->query($sql);
?>
<html>
    <head>
        <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
        <link rel="icon" href="../../../images/title.png" />
        <link rel="stylesheet" type="text/css" 
              href="../../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" 
          href="../../../css/mainlayout.css" />
     
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
                
                &nbsp;</div>
            <div id="contents">
                <div>
                    <ol class="breadcrumb">
                                <li>
     <a href="../../login/dashboard.php">
         Dashboard </a></li>
         <li> <a href="../../registration/registration.php">Registration</a></li>
         <li class="active"><font color ="#096dac" >First Time Clinic Registration </font></li>
                    </ol> 
    <h3 align="center">First Time Clinic Registration</h3>
                    
                </div>
                <HR />

                <div class="table-sec" style="padding: 0 20px;">
                    <!-------------------- Add and search -------------------->
                    <div class="row" style="padding-left: 20px">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <a href="addFirstTimePatient.php">
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
                    <!-------------------- Table to show the list of first time patient registration -------------------->
                    <?php
                    if ($first_time_reg_data->num_rows > 0) {
                        ?>
                        <!-- display field headings -->
                        <table border="1" class="table mytable">
                            <tr class="table-header">
                                <th>Clinic No.</th>
                                <th>Clinic Type</th>
                                <th>Patient Name</th>
                                <th>DOB</th>
                                <th>Operation</th>
                            </tr>
                            <?php
                            // output data of each row
                            while ($row = $first_time_reg_data->fetch_assoc()) {
                                $id = $row["id"];
                                ?>
                                <tr>
                                    <td><?php echo $row["clinic_no"]; ?></td>
                                    <td><?php echo $row["clinic_no_type"]; ?></td>
                                    <td><?php echo $row["patient_name"]; ?></td>
                                    <td><?php echo $row["DOB"]; ?></td>
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
                        $_PHP_SELF = "wordRegistration.php";
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

