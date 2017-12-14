<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 12/14/17
 * Time: 5:26 AM
 */

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data from post
    $id = $_POST{'id'};
    $clinic_no_type = $_POST['clinic_no_type'];
    $clinic_no = $_POST['clinic_no'];
    $first_contact_date = $_POST['first_contact_date'];
    $patient_name = $_POST['patient_name'];
    $DoB = $_POST['DoB'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $referred_by_hospital = $_POST['referred_by_hospital'];
    $hospital_district = $_POST['hospital_district'];
    $referred_by_person = $_POST['referred_by_person'];

    $sql = "UPDATE permanent_registration set clinic_no_type = '$clinic_no_type', clinic_no = '$clinic_no', first_contact_date = '$first_contact_date', patient_name = '$patient_name', DoB = '$DoB', address = '$address', gender = '$gender', referred_by_hospital = '$referred_by_hospital', hospital_district = '$hospital_district', referred_by_person = '$referred_by_person' WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
        $alert = "Record updated.";
    } else {
        $alert = "An error occurred while updating the record.";
    }
    ?>
    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "../../../module/registration/permanent registration/permanentRegistration.php";
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
    $sql = "SELECT clinic_no_type, clinic_no, first_contact_date, patient_name, DoB, address, gender, referred_by_hospital, hospital_district, referred_by_person from permanent_registration WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $clinic_no_type = $row['clinic_no_type'];
        $clinic_no = $row['clinic_no'];
        $first_contact_date = $row['first_contact_date'];
        $patient_name = $row['patient_name'];
        $DoB = $row['DoB'];
        $address = $row['address'];
        $gender = $row['gender'];
        $referred_by_hospital = $row['referred_by_hospital'];
        $hospital_district = $row['hospital_district'];
        $referred_by_person = $row['referred_by_person'];
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
                <li class="active"><a href="../../registration/permanent registration/permanentRegistration.php">Permanent
                        Registration</a></li>
                <li class="font1" class="active">Edit Clinic Patient</li>
            </ol>
            <h3 align="center">Edit Clinic Patient Permanently</h3>
        </div>
        <HR/>
        <div>
            <!-------------------- Permanent registration information form -------------------->
            <form name="PermanentRegistrationPatient" method="post" action="editRecord.php"
                  enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        Clinic NO:
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        <input name="clinic_no_type" id="clinic_no_type_mdcc" type="radio" value="MDCC"
                            <?php echo ($clinic_no_type == "MDCC") ? "checked=\"checked\"" : ""; ?>/> MDCC
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="">
                            <input name="clinic_no_type" id="clinic_no_type_psc" type="radio"
                                   value="PSC" <?php echo ($clinic_no_type == "PSC") ? "checked=\"checked\"" : ""; ?>/>
                            PSC
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="clinic_no" id="clinic_no" type="text" placeholder="Clinic NO" required="required" value="<?php echo $clinic_no; ?>" class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        First Contact Date :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="first_contact_date" id="first_contact_date" type="date"
                               placeholder="First Contact Date"
                               class="form-control" required="required" value="<?php echo $first_contact_date; ?>"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Patient Name :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="patient_name" id="patient_name" placeholder="Patient Name" required="required"
                               value="<?php echo $patient_name; ?>"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        DOB :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="DoB" id="DoB" type="date" placeholder="DOB" required="required"
                               value="<?php echo $DoB; ?>"
                               class="form-control" onchange="getAge(this.value)"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Age :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="age" id="age" placeholder="Age" readonly="readonly" class="form-control"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Address :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="address" id="address" placeholder="Address" value="<?php echo $address; ?>"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Gender :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="gender" id="gender_male" type="radio"
                               value="Male" <?php echo ($gender == "Male") ? "checked=\"checked\"" : ""; ?>/> Male
                        <input name="gender" id="gender_female" type="radio"
                               value="Female" <?php echo ($gender == "Female") ? "checked=\"checked\"" : ""; ?>/>Female
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Reffered By Hospital :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="referred_by_hospital" id="referred_by_hospital" type="text"
                               placeholder="Reffered By Hospital" value="<?php echo $referred_by_hospital; ?>"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Hospital District :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="hospital_district" id="hospital_district" placeholder="Hospital District"
                               value="<?php echo $hospital_district; ?>"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Reffered By Person :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="referred_by_person" id="referred_by_person" type="text"
                               value="<?php echo $referred_by_person; ?>"
                               placeholder="Reffered By Person"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                    <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        &nbsp;
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="glyphicon glyphicon-save"></i>
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
                    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
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