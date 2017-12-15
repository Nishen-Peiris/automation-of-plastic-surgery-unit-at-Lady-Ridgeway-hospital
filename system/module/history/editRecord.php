<?php
/**
 * Created by PhpStorm.
 * User: ChaThUrikA
 * Date: 12/12/2017
 * Time: 4:07 PM
 */
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data from post
    $id = $_POST{'id'};
    $clinic_no_type = $_POST['clinic_no_type'];
    $clinic_no = $_POST['clinic_no'];
    $BHT_no = $_POST['BHT_no'];
    $presenting_complain = $_POST['presenting_complain'];
    $past_medical_history = $_POST['past_medical_history'];
    $past_surgical_history = $_POST['past_surgical_history'];
    $allergic_history = $_POST['allergic_history'];
    $drug_history = $_POST['drug_history'];
    $diet_history = $_POST['diet_history'];

    $birth_history_birth_weight = $_POST['birth_history_birth_weight'];
    $birth_history_deliver = $_POST['birth_history_deliver'];
    $birth_history_mode_of_delivery = $_POST['birth_history_mode_of_delivery'];
    $birth_history_mode_of_delivery_status = $_POST['birth_history_mode_of_delivery_status'];
    $birth_history_post_natal_complication = $_POST['birth_history_post_natal_complication'];

    $other_history_family_history_consanguineous = $_POST['other_history_family_history_consanguineous'];
    $other_history_family_history_consanguineous_status = $_POST['other_history_family_history_consanguineous_status'];
    $other_history_family_history_family_diseases = $_POST['other_history_family_history_family_diseases'];
    $other_history_family_history_family_diseases_status = $_POST['other_history_family_history_family_diseases_status'];

    $immunization_history_BCG = $_POST['immunization_history_BCG'];
    $immunization_history_BCG_2 = $_POST['immunization_history_BCG_2'];
    $immunization_history_penta_1 = $_POST['immunization_history_penta_1'];
    $immunization_history_OPV_1  = $_POST['immunization_history_OPV_1 '];
    $immunization_history_penta_2 = $_POST['immunization_history_penta_2'];
    $immunization_history_OPV_2 = $_POST['immunization_history_OPV_2'];
    $immunization_history_IPV = $_POST['immunization_history_IPV'];
    $immunization_history_penta_3 = $_POST['immunization_history_penta_3'];
    $immunization_history_OPV_3 = $_POST['immunization_history_OPV_3'];
    $immunization_history_MMR_1 = $_POST['immunization_history_MMR_1'];
    $immunization_history_JE = $_POST['immunization_history_JE'];
    $immunization_history_DPT = $_POST['immunization_history_DPT'];
    $immunization_history_OPV_4 = $_POST['immunization_history_OPV_4'];
    $immunization_history_MMR_2 = $_POST['immunization_history_MMR_2'];
    $immunization_history_DT = $_POST['immunization_history_DT'];
    $immunization_history_OPV_5 = $_POST['immunization_history_OPV_5'];
    $immunization_history_adult_tetanus = $_POST['immunization_history_adult_tetanus'];

    $sql = "UPDATE history set clinic_no_type = '$clinic_no_type', clinic_no = '$clinic_no', BHT_no = '$BHT_no', presenting_complain = '$presenting_complain', past_medical_history = '$past_medical_history', past_surgical_history = '$past_surgical_history', allergic_history = '$allergic_history', drug_history = '$drug_history', diet_history = '$diet_history', birth_history_birth_weight = '$birth_history_birth_weight',
birth_history_deliver = '$birth_history_deliver', birth_history_mode_of_delivery = '$birth_history_mode_of_delivery', birth_history_mode_of_delivery_status = '$birth_history_mode_of_delivery_status', birth_history_post_natal_complication = '$birth_history_post_natal_complication', other_history_family_history_consanguineous = '$other_history_family_history_consanguineous', other_history_family_history_consanguineous_status = '$other_history_family_history_consanguineous_status', other_history_family_history_family_diseases = '$other_history_family_history_family_diseases',
 other_history_family_history_family_diseases_status = '$other_history_family_history_family_diseases_status',  immunization_history_BCG = '$immunization_history_BCG', immunization_history_BCG_2 = '$immunization_history_BCG_2',  immunization_history_penta_1 = '$immunization_history_penta_1', immunization_history_OPV_1 = '$immunization_history_OPV_1', immunization_history_penta_2= '$immunization_history_penta_2', immunization_history_OPV_2 = '$immunization_history_OPV_2', immunization_history_IPV = '$immunization_history_IPV', immunization_history_penta_3 = '$immunization_history_penta_3', immunization_history_OPV_3 = '$immunization_history_OPV_3', immunization_history_MMR_1 = '$immunization_history_MMR_1',immunization_history_JE = '$immunization_history_JE', immunization_history_DPT = '$immunization_history_DPT', immunization_history_OPV_4 = '$immunization_history_OPV_4', immunization_history_MMR_2 = '$immunization_history_MMR_2', immunization_history_DT = '$immunization_history_DT', immunization_history_OPV_5 = '$immunization_history_OPV_5', immunization_history_adult_tetanus = '$immunization_history_adult_tetanus'
    WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
        $alert = "Record updated.";
    } else {
        $alert = "An error occurred while updating the record.";
    }
    ?>
    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "history.php"
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
    $sql = "SELECT clinic_no_type, clinic_no, BHT_no, presenting_complain, past_medical_history, past_surgical_history, allergic_history, drug_history, diet_history, birth_history_birth_weight, birth_history_deliver, birth_history_mode_of_delivery, birth_history_mode_of_delivery_status, birth_history_post_natal_complication, other_history_family_history_consanguineous, other_history_family_history_consanguineous_status, other_history_family_history_family_diseases, other_history_family_history_family_diseases_status, immunization_history_BCG , immunization_history_BCG_2,  immunization_history_penta_1, immunization_history_OPV_1, immunization_history_penta_2, immunization_history_OPV_2, immunization_history_IPV, immunization_history_penta_3, immunization_history_OPV_3,immunization_history_MMR_1, immunization_history_JE, immunization_history_DPT, immunization_history_OPV_4, immunization_history_MMR_2, immunization_history_DT, immunization_history_OPV_5, immunization_history_adult_tetanus from history WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $BHT_no = $row['BHT_no'];
        $clinic_no_type = $row['clinic_no_type'];
        $clinic_no = $row['clinic_no'];
        $BHT_no = $row['BHT_no'];
        $presenting_complain = $row['presenting_complain'];
        $past_medical_history = $row['past_medical_history'];
        $past_surgical_history = $row['past_surgical_history'];
        $allergic_history = $row['allergic_history'];
        $drug_history = $row['drug_history'];
        $diet_history = $row['diet_history'];

        $birth_history_birth_weight = $row['birth_history_birth_weight'];
        $birth_history_deliver = $row['birth_history_deliver'];
        $birth_history_mode_of_delivery = $row['birth_history_mode_of_delivery'];
        $birth_history_mode_of_delivery_status = $row['birth_history_mode_of_delivery_status'];
        $birth_history_post_natal_complication = $row['birth_history_post_natal_complication'];

        $other_history_family_history_consanguineous = $row['other_history_family_history_consanguineous'];
        $other_history_family_history_consanguineous_status = $row['other_history_family_history_consanguineous_status'];
        $other_history_family_history_family_diseases = $row['other_history_family_history_family_diseases'];
        $other_history_family_history_family_diseases_status = $row['other_history_family_history_family_diseases_status'];

        $immunization_history_BCG = $row['immunization_history_BCG'];
        $immunization_history_BCG_2 = $row['immunization_history_BCG_2'];
        $immunization_history_penta_1 = $row['immunization_history_penta_1'];
        $immunization_history_OPV_1  = $row['immunization_history_OPV_1 '];
        $immunization_history_penta_2 = $row['immunization_history_penta_2'];
        $immunization_history_OPV_2 = $row['immunization_history_OPV_2'];
        $immunization_history_IPV = $row['immunization_history_IPV'];
        $immunization_history_penta_3 =$row['immunization_history_penta_3'];
        $immunization_history_OPV_3 = $row['immunization_history_OPV_3'];
        $immunization_history_MMR_1 = $row['immunization_history_MMR_1'];
        $immunization_history_JE = $row['immunization_history_JE'];
        $immunization_history_DPT = $row['immunization_history_DPT'];
        $immunization_history_OPV_4 = $row['immunization_history_OPV_4'];
        $immunization_history_MMR_2 = $row['immunization_history_MMR_2'];
        $immunization_history_DT = $row['immunization_history_DT'];
        $immunization_history_OPV_5 = $row['immunization_history_OPV_5'];
        $immunization_history_adult_tetanus = $row['immunization_history_adult_tetanus'];


    } else {
        $conn->close();
        die();
    }
}
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

        <li class="font1" class="active">Edit History</li>
    </ol>
    <h3 align="center">Edit
        History
    </h3>
</div>
<HR/>
<div>
    <!-------------------- History form -------------------->
    <form name="EditHistory" method="post" action="editRecord.php"
          enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">
                Clinic NO:
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">
                <input name="clinic_no_type" id="clinic_no_type" type="radio" value="MDCC" <?php echo ($clinic_no_type == "MDCC") ? "checked=\"checked\"" : ""; ?>/>
                MDCC
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="">
                    <input name="clinic_no_type" id="clinic_no_type" type="radio" value="PSC" <?php echo ($clinic_no_type == "PSC") ? "checked=\"checked\"" : ""; ?>/> PSC
                    <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="clinic_no" id="clinic_no" placeholder="Clinic NO" class="form-control"
                       value="<?php echo $clinic_no; ?>" required="required"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                BHT NO :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="BHT_no" id="BHT_no" value="<?php echo $BHT_no; ?>" placeholder="BHT NO" class="form-control" required="required"/>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Presenting Complain :
    </div>
    <div class="col-lg-3 col-sm-3 col-md-3">
        <input name="presenting_complain" id="presenting_complain" value="<?php echo $presenting_complain; ?>" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Past Medical History :
    </div>
    <div class="col-lg-3 col-sm-3 col-md-3">
        <input name="past_medical_history" id="past_medical_history" value="<?php echo $past_medical_history; ?>" placeholder="Comment"
               class="form-control"/>
    </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Past Surgical History :
    </div>
    <div class="col-lg-3 col-sm-3 col-md-3">
        <input name="past_surgical_history" id="past_surgical_history" value="<?php echo $past_surgical_history; ?>" placeholder="Comment"
               class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Allergic History :
    </div>
    <div class="col-lg-3 col-sm-3 col-md-3">
        <input name="allergic_history" id="allergic_history" value="<?php echo $allergic_history; ?>" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Drug History :
    </div>
    <div class="col-lg-3 col-sm-3 col-md-3">
        <input name="drug_history" id="drug_history" value="<?php echo $drug_history; ?>" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Diet History :
    </div>
    <div class="col-lg-3 col-sm-3 col-md-3">
        <input name="diet_history" id="diet_history" value="<?php echo $diet_history; ?>" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <b><u>Birth History :</u></b>
    </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">
    </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Birth Weight :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input name="birth_history_birth_weight" value="<?php echo $birth_history_birth_weight; ?>" id="birth_history_birth_weight" placeholder="Birth weight"
               class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Delivery :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input name="birth_history_deliver" id="birth_history_deliver" type="radio" value="Term"
               required="required" <?php echo ($birth_history_deliver == "Term") ? "checked=\"checked\"" : ""; ?>/> Term &nbsp;&nbsp;
        <input name="birth_history_deliver" id="birth_history_deliver" type="radio" value="Pre Term" <?php echo ($birth_history_deliver == "Pre Term") ? "checked=\"checked\"" : ""; ?>/> Pre Term
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">

    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Mode of Delivery :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input name="birth_history_mode_of_delivery" id="birth_history_mode_of_delivery" type="radio"
               value="Vaginal" required="required" <?php echo ($birth_history_mode_of_delivery == "Vaginal") ? "checked=\"checked\"" : ""; ?>/> Vaginal Delivery
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="">
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="birth_history_mode_of_delivery_status"
                                           id="birth_history_mode_of_delivery_status" value="Normal"
                                           required="required" <?php echo ($birth_history_mode_of_delivery_status == "Normal") ? "checked=\"checked\"" : ""; ?>"/> Normal
            <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="birth_history_mode_of_delivery_status"
                                           id="birth_history_mode_of_delivery_status" value="Instrumental" <?php echo ($birth_history_mode_of_delivery_status == "Instrumental") ? "checked=\"checked\"" : ""; ?>/>
            Instrumental
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <input name="birth_history_mode_of_delivery" id="birth_history_mode_of_delivery" type="radio"
               value="Cesarean" <?php echo ($birth_history_mode_of_delivery == "Cesarean") ? "checked=\"checked\"" : ""; ?>/>Cesarean Delivery
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>

    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Post natal Complication :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input name="birth_history_post_natal_complication" id="birth_history_post_natal_complication"
               placeholder="Post natel Complications" value="<?php echo $birth_history_post_natal_complication; ?>" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>

    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <b><u>Family History :</u></b>
    </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>

    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>

<div class="row">
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>

    <div class="col-lg-2 col-sm-2 col-md-2">
        <input type="checkbox" id="other_history_family_history_consanguineous"  <input type="checkbox" value="1"  <?php echo ($other_history_family_history_consanguineous == "1") ? "checked=\"checked\"" : ""; ?>
               name="other_history_family_history_consanguineous"
               value="1"/> Consanguineous <br/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">

        <input name="other_history_family_history_consanguineous_status"
               id="other_history_family_history_consanguineous_status" type="radio" value="Yes"  <?php echo ($other_history_family_history_consanguineous_status == "Yes") ? "checked=\"checked\"" : ""; ?>/> YES &nbsp;&nbsp;&nbsp;
        <input name="other_history_family_history_consanguineous_status"
               id="other_history_family_history_consanguineous_status" type="radio" value="No"
            <?php echo ($other_history_family_history_consanguineous_status == "No") ? "checked=\"checked\"" : ""; ?>/> NO &nbsp;&nbsp;&nbsp; <br/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input type="checkbox" id="other_history_family_history_family_diseases"  <input type="checkbox" value="1"  <?php echo ($other_history_family_history_family_diseases == "1") ? "checked=\"checked\"" : ""; ?>
               name="other_history_family_history_family_diseases" value="1"/> Familiar
        Diseases <br/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input name="other_history_family_history_family_diseases_status"
               id="other_history_family_history_family_diseases_status" type="radio" value="Yes" <?php echo ($other_history_family_history_family_diseases_status == "Yes") ? "checked=\"checked\"" : ""; ?>/> YES &nbsp;&nbsp;&nbsp;
        <input name="other_history_family_history_family_diseases_status"
               id="other_history_family_history_family_diseases_status" type="radio" value="No"
            <?php echo ($other_history_family_history_family_diseases_status == "No") ? "checked=\"checked\"" : ""; ?>/> NO &nbsp;&nbsp;&nbsp; <br/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
</div>
<div class="row">
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <b><u>Immunization :</u></b>
    </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12">&nbsp;</div>
<div class="row">
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-8 col-sm-8 col-md-8">
        <table class="table mytable immunization" border="1">
            <tr class="table-header">
                <th>Age</th>
                <th>Type of Vaccine</th>
            </tr>
            <tr>
                <td>At Birth</td>
                <td>BCG
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_BCG == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_BCG" id="immunization_history_BCG"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>BCG 2nd dose<br>
                    (If no scar even at 6 months)
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_BCG_2 == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_BCG_2" id="immunization_history_BCG_2"/>
                </td>
            </tr>
            <tr>
                <td rowspan="2">2 months Completed</td>
                <td>Pentavalent 1
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_penta_1 == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_penta_1" id="immunization_history_penta_1"/>
                </td>

            </tr>
            <tr>
                <td>OPV1,FIPV
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_OPV_1 == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_OPV_1" id="immunization_history_OPV_1"/>
                </td>
            </tr>
            <tr>
                <td rowspan="3">4 months Completed</td>
                <td>Pentavalent 2
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_penta_2 == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_penta_2" id="immunization_history_penta_2"/>
                </td>
            </tr>
            <tr>
                <td>OPV 2
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_OPV_2 == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_OPV_2" id="immunization_history_OPV_2"/>
                </td>
            </tr>
            <tr>
                <td>IPV
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_IPV == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_IPV" id="immunization_history_IPV"/>
                </td>
            </tr>
            <tr>
                <td rowspan="2">6 months Completed</td>
                <td>Pentavalent 3
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_penta_3 == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_penta_3" id="immunization_history_penta_3"/>
                </td>

            </tr>
            <tr>
                <td>OPV 3
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_OPV_3 == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_OPV_3" id="immunization_history_OPV_3"/>
                </td>
            </tr>
            <tr>
                <td>9 months Completed </td>
                <td>Measles, Mumps, Rubella 1 (MMR 1)
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_MMR_1 == "1") ? "checked=\"checked\"" : ""; ?>  name="immunization_history_MMR_1" id="immunization_history_MMR_1"/>
                </td>
            </tr>
            <tr>
                <td>12 months Completed</td>
                <td>Live JE
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_JE == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_JE" id="immunization_history_JE"/>
                </td>
            </tr>
            <tr>
                <td rowspan="2">18 months Completed</td>
                <td>DPT
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_DPT == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_DPT" id="immunization_history_DPT"/>
                </td>

            </tr>
            <tr>
                <td>OPV 4
                    <input type="checkbox" value="1"  <?php echo ($immunization_history_OPV_4 == "1") ? "checked=\"checked\"" : ""; ?> name="immunization_history_OPV_4" id="immunization_history_OPV_4"/>
                </td>
            </tr>
            <tr>
                <td>3 Years Completed </td>
                <td>Measles & Rubella (MR)/ MMR 2
                    <input type="checkbox" value="1" name="immunization_history_MMR_2"  <?php echo ($immunization_history_MMR_2 == "1") ? "checked=\"checked\"" : ""; ?> id="immunization_history_MMR_2"/>
                </td>
            </tr>
            <tr>
                <td rowspan="2">5 Years Completed</td>
                <td>D.T
                    <input type="checkbox" value="1" name="immunization_history_DT"  <?php echo ($immunization_history_DT == "1") ? "checked=\"checked\"" : ""; ?> id="immunization_history_DT"/>
                </td>
            </tr>
            <tr>
                <td>OPV 5
                    <input type="checkbox" value="1" name="immunization_history_OPV_5"  <?php echo ($immunization_history_OPV_5 == "1") ? "checked=\"checked\"" : ""; ?> id="immunization_history_OPV_5"/>
                </td>
            </tr>
            <tr>
                <td>11 Years Completed</td>
                <td>Adult Tetanus & diphthria (aTd)
                    <input type="checkbox" value="1" name="immunization_history_adult_tetanus"  <?php echo ($immunization_history_adult_tetanus == "1") ? "checked=\"checked\"" : ""; ?> id="immunization_history_adult_tetanus"/>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        &nbsp;
    </div>
    <div class="col-lg-3 col-sm-3 col-md-3">
        <button type="submit" class="btn btn-primary">
            <i class="glyphicon glyphicon-save"></i>
            Save
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
    <?php include '../../common/footer.php'; ?>
</div>
</body>
</html>