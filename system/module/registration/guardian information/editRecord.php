<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 12/14/17
 * Time: 5:34 AM
 */
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data from post
    $id = $_POST{'id'};
    $clinic_no_type = $_POST['clinic_no_type'];
    $clinic_no = $_POST['clinic_no'];
    $BHT_no = $_POST['BHT_no'];
    $guardian_name = $_POST['guardian_name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $contact_no = $_POST['contact_no'];
    $occupation = $_POST['occupation'];
    $age = $_POST['age'];

    $sql = "UPDATE guardian_information set clinic_no_type = '$clinic_no_type', clinic_no = '$clinic_no', BHT_no = '$BHT_no', guardian_name = '$guardian_name', address = '$address', gender = '$gender', contact_no = '$contact_no', occupation = '$occupation', age = '$age' WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
        $alert = "Record updated.";
    } else {
        $alert = "An error occurred while updating the record.";
    }
    ?>
    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "guardianInformation.php"
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
    $sql = "SELECT clinic_no_type, clinic_no, BHT_no, guardian_name, address, gender, contact_no, occupation, age from guardian_information  WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $clinic_no_type = $row['clinic_no_type'];
        $clinic_no = $row['clinic_no'];
        $BHT_no = $row['BHT_no'];
        $guardian_name = $row['guardian_name'];
        $address = $row['address'];
        $gender = $row['gender'];
        $contact_no = $row['contact_no'];
        $occupation = $row['occupation'];
        $age = $row['age'];

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
                <li><a href="../../login/dashboard.php">Dashboard </a></li>
                <li><a href="../../registration/registration.php">Registration</a></li>
                <li class="active"><a href="../../registration/guardian information/guardianInformation.php">Guardian
                        Information</a></li>
                <li class="font1" class="active">Edit Guardian Information</li>
            </ol>

            <h3 align="center">Edit Guardian Information</h3>
        </div>
        <HR/>
        <div>
            <!-------------------- Guardian information form -------------------->
            <form name="EditGuardianInformation" method="post" action="editRecord.php"
                  enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        Clinic NO:
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        <input name="clinic_no_type" id="clinic_no_type_mdcc"  <?php echo ($clinic_no_type == "MDCC") ? "checked=\"checked\"" : ""; ?> type="radio" value="MDCC"
                               checked="checked"/> MDCC
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="">
                            <input name="clinic_no_type" id="clinic_no_type_psc"  <?php echo ($clinic_no_type == "PSC") ? "checked=\"checked\"" : ""; ?> type="radio" value="PSC"/> PSC
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="clinic_no" id="clinic_no" value="<?php echo $clinic_no; ?>" placeholder="Clinic NO" type="text" class="form-control"
                               required="required"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        BHT NO :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="BHT_no" id="BHT_no" placeholder="BHT NO" value="<?php echo $BHT_no; ?>" type="text" class="form-control"
                               required="required"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Guardian Name :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="guardian_name" id="guardian_name" value="<?php echo $guardian_name; ?>" type="text" placeholder="Guardian Name"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Address :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="address" id="address" type="text" value="<?php echo $address; ?>" placeholder="Address" class="form-control"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Gender :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="gender" id="gender_male" type="radio"  <?php echo ($gender == "Male") ? "checked=\"checked\"" : ""; ?> value="Male" checked="checked"/> Male

                        <input name="gender" id="gender_female" type="radio"  <?php echo ($gender == "Female") ? "checked=\"checked\"" : ""; ?> value="Female"/>Female
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Age :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="age" id="age" placeholder="Age" value="<?php echo $age; ?>"  class="form-control"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Contact No :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="contact_no" id="contact_no" type="text" value="<?php echo $contact_no; ?>" placeholder="Contact No"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Occupation :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="occupation" id="occupation" type="text" value="<?php echo $occupation; ?>" placeholder="Occupation"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        &nbsp;
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="glyphicon glyphicon-edit"></i>
                            Edit
                        </button>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        &nbsp;
                    </div>
                    <div class="col-lg-1col-sm-1 col-md-1">
                        &nbsp;
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <button type="reset" class="btn btn-primary">
                            <i class="glyphicon glyphicon-refresh"></i>
                            Reset
                        </button>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        &nbsp;
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="footer">
    <?php include '../../../common/footer.php'; ?>
</div>
</body>
</html>

<!--calculate age given the date of birth-->
<script type="text/javascript">
    function getAge(DoB) {
        var today = new Date();
        var birthDate = new Date(DoB);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        document.getElementById("age").value = age + " yrs";
    }
</script>