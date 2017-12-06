<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 12/4/17
 * Time: 9:34 AM
 */
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data from post
    $id = $_POST{'id'};
    $BHT_no = $_POST['BHT_no'];
    $surgery_date = $_POST['surgery_date'];
    $surgery_time = $_POST['surgery_time'];
    $surgery_name = $_POST['surgery_name'];
    $type_of_anesthesia = $_POST['type_of_anesthesia'];
    $done_by = $_POST['done_by'];
    $designation = $_POST['designation'];
    $assisted_by_1 = $_POST['assisted_by_1'];
    $assisted_by_2 = $_POST['assisted_by_2'];
    $assisted_by_3 = $_POST['assisted_by_3'];

    $sql = "UPDATE surgery set BHT_no = '$BHT_no', surgery_date = '$surgery_date', surgery_time = '$surgery_time', surgery_name = '$surgery_name', type_of_anesthesia = '$type_of_anesthesia', done_by = '$done_by', designation = '$designation', assisted_by_1 = '$assisted_by_1', assisted_by_2 = '$assisted_by_2', assisted_by_3 = '$assisted_by_3' WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
        $alert = "Record updated.";
    } else {
        $alert = "An error occurred while updating the record.";
    }
    ?>
    <script type="text/javascript">
                window.alert("<?php echo $alert; ?>");
                window.location.href = "../../../module/login/dashboard.php"
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
    $sql = "SELECT BHT_no, surgery_date, surgery_time, surgery_name, type_of_anesthesia, done_by, designation, assisted_by_1, assisted_by_2, assisted_by_3 from surgery WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $BHT_no = $row['BHT_no'];
        $surgery_date = $row['surgery_date'];
        $surgery_time = $row['surgery_time'];
        $surgery_name = $row['surgery_name'];
        $type_of_anesthesia = $row['type_of_anesthesia'];
        $done_by = $row['done_by'];
        $designation = $row['designation'];
        $assisted_by_1 = $row['assisted_by_1'];
        $assisted_by_2 = $row['assisted_by_2'];
        $assisted_by_3 = $row['assisted_by_3'];
        echo $BHT_no;
        echo "<br/>";
        echo $type_of_anesthesia;
    } else {
        $conn->close();
        die();
    }
}
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
    <script type="text/javascript">
        //Ajax for role Rights
        function showRights(str) {
            var xmlhttp;
            if (str == "") {
                document.getElementById("showrights").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("showrights").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "getRights.php?q=" + str, true);
            xmlhttp.send();
        }
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
                <li class="active"><a href="../../surgery/surgery information/surgeryInformation.php">Surgery</a></li>
                <li class="font1" class="active">Pre Surgery Information</li>
            </ol>
            <h3 align="center">Add
                Surgery Information
            </h3>
        </div>
        <HR/>
        <div>
            <!-------------------- Surgery information form -------------------->
            <form name="SurgeryInformationEdit" method="post" action="editRecord.php"
                  enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        BHT NO :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input id="BHT_no" name="BHT_no" placeholder="BHT NO" class="form-control" required="required"
                               value="<?php echo $BHT_no; ?>"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Surgery Date :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input id="surgery_date" name="surgery_date" type="date" placeholder="Surgery date" class="form-control"
                       required="required" value="<?php echo $surgery_date; ?>"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <a href="">Surgery calender</a>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Surgery Time :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input id="surgery_time" name="surgery_time" type="time" placeholder="Surgery time" class="form-control"
                       required="required" value="<?php echo $surgery_time; ?>"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Name of Surgery :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input id="surgery_name" name="surgery_name" placeholder="Surgery name" class="form-control"
                       required="required" value="<?php echo $surgery_name; ?>"/>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1"><b>(graft)</b></div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Type of Anesthesia :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input id="type_of_anesthesia" name="type_of_anesthesia" type="radio"
                       value="General" <?php echo ($type_of_anesthesia == "General") ? "checked=\"checked\"" : ""; ?>/>
                General
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="">
                    <input id="type_of_anesthesia" name="type_of_anesthesia" type="radio"
                           value="Local" <?php echo ($type_of_anesthesia == "Local") ? "checked=\"checked\"" : ""; ?>/>
                    Local
                    <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                </div>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Done By :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input id="done_by" name="done_by" placeholder="Doctor's Name" class="form-control"
                       required="required" value="<?php echo $done_by; ?>"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Designation:
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input id="designation" name="designation" placeholder="Type Designation" class="form-control"
                       required="required" value="<?php echo $designation; ?>"/>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Assisted by :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input id="assistedBy1" class="form-control" name="assisted_by_1" type="text" required="required"
                       value="<?php echo $assisted_by_1; ?>">
                <input id="assistedBy2" class="form-control" name="assisted_by_2" type="text"
                       value="<?php echo $assisted_by_2; ?>">
                <input id="assistedBy3" class="form-control" name="assisted_by_3" type="text"
                       value="<?php echo $assisted_by_3; ?>">
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                &nbsp;
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <button type="submit" class="btn btn-primary">
                    <i class="glyphicon glyphicon-save"></i>
                    Edit
                </button>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                &nbsp;
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <button type="reset" class="btn btn-primary">
                    <i class="glyphicon glyphicon-refresh"></i>
                    Reset
                </button>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        </form>
    </div>
</div>
<div id="footer">
    <?php include '../../../common/footer.php'; ?>
</div>
</body>
</html>
