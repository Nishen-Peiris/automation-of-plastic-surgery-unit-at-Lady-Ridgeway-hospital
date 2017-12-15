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
    $clinic_no_type = $_POST['clinic_no_type'];
    $clinic_no = $_POST['clinic_no'];

    $BHT_no = $_POST['BHT_no'];

    $reason_for_surgery_type = $_POST['reason_for_surgery_type'];
    $reason_for_surgery = $_POST['reason_for_surgery'];

    $surgery_date = $_POST['surgery_date'];

    if (isset($_POST['part_of_the_body_head'])) {
        $part_of_the_body_head = $_POST['part_of_the_body_head'];
    } else {
        $part_of_the_body_head = 0;
    }
    if (isset($_POST['part_of_the_body_upper_limb'])) {
        $part_of_the_body_upper_limb = $_POST['part_of_the_body_upper_limb'];
    } else {
        $part_of_the_body_upper_limb = 0;
    }
    if (isset($_POST['part_of_the_body_trunk'])) {
        $part_of_the_body_trunk = $_POST['part_of_the_body_trunk'];
    } else {
        $part_of_the_body_trunk = 0;
    }
    if (isset($_POST['part_of_the_body_lower_limb'])) {
        $part_of_the_body_lower_limb = $_POST['part_of_the_body_lower_limb'];
    } else {
        $part_of_the_body_lower_limb = 0;
    }

    if (isset($_POST['side_of_the_body_left'])) {
        $side_of_the_body_left = $_POST['side_of_the_body_left'];
    } else {
        $side_of_the_body_left = 0;
    }
    if (isset($_POST['side_of_the_body_right'])) {
        $side_of_the_body_right = $_POST['side_of_the_body_right'];
    } else {
        $side_of_the_body_right = 0;
    }

    if (isset($_POST['tissue_plane_skin'])) {
        $tissue_plane_skin = $_POST['tissue_plane_skin'];
    } else {
        $tissue_plane_skin = 0;
    }
    if (isset($_POST['tissue_plane_muscle_tendons'])) {
        $tissue_plane_muscle_tendons = $_POST['tissue_plane_muscle_tendons'];
    } else {
        $tissue_plane_muscle_tendons = 0;
    }
    if (isset($_POST['tissue_plane_arteries'])) {
        $tissue_plane_arteries = $_POST['tissue_plane_arteries'];
    } else {
        $tissue_plane_arteries = 0;
    }
    if (isset($_POST['tissue_plane_veins'])) {
        $tissue_plane_veins = $_POST['tissue_plane_veins'];
    } else {
        $tissue_plane_veins = 0;
    }
    if (isset($_POST['tissue_plane_nerves'])) {
        $tissue_plane_nerves = $_POST['tissue_plane_nerves'];
    } else {
        $tissue_plane_nerves = 0;
    }

    if (isset($_POST['head_eye'])) {
        $head_eye = $_POST['head_eye'];
    } else {
        $head_eye = 0;
    }
    if (isset($_POST['head_nose'])) {
        $head_nose = $_POST['head_nose'];
    } else {
        $head_nose = 0;
    }
    if (isset($_POST['head_ear'])) {
        $head_ear = $_POST['head_ear'];
    } else {
        $head_ear = 0;
    }
    if (isset($_POST['head_mouth'])) {
        $head_mouth = $_POST['head_mouth'];
    } else {
        $head_mouth = 0;
    }
    if (isset($_POST['head_face'])) {
        $head_face = $_POST['head_face'];
    } else {
        $head_face = 0;
    }

    if (isset($_POST['upper_limb_arm'])) {
        $upper_limb_arm = $_POST['upper_limb_arm'];
    } else {
        $upper_limb_arm = 0;
    }
    if (isset($_POST['upper_limb_forearm'])) {
        $upper_limb_forearm = $_POST['upper_limb_forearm'];
    } else {
        $upper_limb_forearm = 0;
    }
    if (isset($_POST['upper_limb_hand'])) {
        $upper_limb_hand = $_POST['upper_limb_hand'];
    } else {
        $upper_limb_hand = 0;
    }
    if (isset($_POST['upper_limb_axilla'])) {
        $upper_limb_axilla = $_POST['upper_limb_axilla'];
    } else {
        $upper_limb_axilla = 0;
    }
    if (isset($_POST['upper_limb_elbow'])) {
        $upper_limb_elbow = $_POST['upper_limb_elbow'];
    } else {
        $upper_limb_elbow = 0;
    }
    if (isset($_POST['upper_limb_wrist'])) {
        $upper_limb_wrist = $_POST['upper_limb_wrist'];
    } else {
        $upper_limb_wrist = 0;
    }
    if (isset($_POST['upper_limb_fingers'])) {
        $upper_limb_fingers = $_POST['upper_limb_fingers'];
    } else {
        $upper_limb_fingers = 0;
    }

    if (isset($_POST['trunk_chest'])) {
        $trunk_chest = $_POST['trunk_chest'];
    } else {
        $trunk_chest = 0;
    }
    if (isset($_POST['trunk_abdomen'])) {
        $trunk_abdomen = $_POST['trunk_abdomen'];
    } else {
        $trunk_abdomen = 0;
    }
    if (isset($_POST['trunk_back'])) {
        $trunk_back = $_POST['trunk_back'];
    } else {
        $trunk_back = 0;
    }

    if (isset($_POST['lower_limb_thigh'])) {
        $lower_limb_thigh = $_POST['lower_limb_thigh'];
    } else {
        $lower_limb_thigh = 0;
    }
    if (isset($_POST['lower_limb_leg'])) {
        $lower_limb_leg = $_POST['lower_limb_leg'];
    } else {
        $lower_limb_leg = 0;
    }
    if (isset($_POST['lower_limb_foot'])) {
        $lower_limb_foot = $_POST['lower_limb_foot'];
    } else {
        $lower_limb_foot = 0;
    }
    if (isset($_POST['lower_limb_genitalia'])) {
        $lower_limb_genitalia = $_POST['lower_limb_genitalia'];
    } else {
        $lower_limb_genitalia = 0;
    }
    if (isset($_POST['lower_limb_knee'])) {
        $lower_limb_knee = $_POST['lower_limb_knee'];
    } else {
        $lower_limb_knee = 0;
    }
    if (isset($_POST['lower_limb_ankle'])) {
        $lower_limb_ankle = $_POST['lower_limb_ankle'];
    } else {
        $lower_limb_ankle = 0;
    }
    if (isset($_POST['lower_limb_toes'])) {
        $lower_limb_toes = $_POST['lower_limb_toes'];
    } else {
        $lower_limb_toes = 0;
    }

    $sql = "UPDATE pre_surgery set clinic_no_type = '$clinic_no_type', clinic_no = '$clinic_no', BHT_no = '$BHT_no', reason_for_surgery_type = '$reason_for_surgery_type', reason_for_surgery = '$reason_for_surgery', surgery_date = '$surgery_date', part_of_the_body_head = $part_of_the_body_head, part_of_the_body_upper_limb = $part_of_the_body_upper_limb, part_of_the_body_trunk = $part_of_the_body_trunk, part_of_the_body_lower_limb = $part_of_the_body_lower_limb, side_of_the_body_left = $side_of_the_body_left, side_of_the_body_right = $side_of_the_body_right , tissue_plane_skin = $tissue_plane_skin , tissue_plane_muscle_tendons = $tissue_plane_muscle_tendons , tissue_plane_arteries = $tissue_plane_arteries, tissue_plane_veins = $tissue_plane_veins, tissue_plane_nerves= $tissue_plane_nerves, head_eye = $head_eye, head_nose = $head_nose, head_ear = $head_ear, head_mouth = $head_mouth, head_face = $head_face, upper_limb_arm = $upper_limb_arm, upper_limb_forearm = $upper_limb_forearm, upper_limb_hand = $upper_limb_hand, upper_limb_axilla = $upper_limb_axilla, upper_limb_elbow = $upper_limb_elbow, upper_limb_wrist = $upper_limb_wrist, upper_limb_fingers = $upper_limb_fingers, trunk_chest = $trunk_chest, trunk_abdomen = $trunk_abdomen, trunk_back = $trunk_back, lower_limb_thigh = $lower_limb_thigh , lower_limb_leg = $lower_limb_leg , lower_limb_foot = $lower_limb_foot, lower_limb_genitalia = $lower_limb_genitalia, lower_limb_knee = $lower_limb_knee, lower_limb_ankle = $lower_limb_ankle, lower_limb_toes = $lower_limb_toes WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
        $alert = "Record updated.";
    } else {
        $alert = "An error occurred while updating the record.";
    }
    ?>
    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "../../../module/surgery/pre surgery/preSurgeryInformation.php"
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
    $sql = "SELECT  clinic_no_type, clinic_no, BHT_no, reason_for_surgery_type, reason_for_surgery, surgery_date, part_of_the_body_head, part_of_the_body_upper_limb, part_of_the_body_trunk, part_of_the_body_lower_limb, side_of_the_body_left, side_of_the_body_right, tissue_plane_skin, tissue_plane_muscle_tendons, tissue_plane_arteries, tissue_plane_veins, tissue_plane_nerves, head_eye, head_nose, head_ear, head_mouth, head_face,upper_limb_arm, upper_limb_forearm, upper_limb_hand, upper_limb_axilla, upper_limb_elbow, upper_limb_wrist, upper_limb_fingers, trunk_chest, trunk_abdomen, trunk_back, lower_limb_thigh, lower_limb_leg, lower_limb_foot, lower_limb_genitalia, lower_limb_knee, lower_limb_ankle, lower_limb_toes, status
        from pre_surgery WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $clinic_no_type = $row['clinic_no_type'];
        $clinic_no = $row['clinic_no'];

        $BHT_no = $row['BHT_no'];

        $reason_for_surgery_type = $row['reason_for_surgery_type'];
        $reason_for_surgery = $row['reason_for_surgery'];

        $surgery_date = $row['surgery_date'];

        $part_of_the_body_head = $row['part_of_the_body_head'];
        $part_of_the_body_upper_limb = $row['part_of_the_body_upper_limb'];
        $part_of_the_body_trunk = $row['part_of_the_body_trunk'];
        $part_of_the_body_lower_limb = $row['part_of_the_body_lower_limb'];

        $side_of_the_body_left = $row['side_of_the_body_left'];
        $side_of_the_body_right = $row['side_of_the_body_right'];

        $tissue_plane_skin = $row['tissue_plane_skin'];
        $tissue_plane_muscle_tendons = $row['tissue_plane_muscle_tendons'];
        $tissue_plane_arteries = $row['tissue_plane_arteries'];
        $tissue_plane_veins = $row['tissue_plane_veins'];
        $tissue_plane_nerves = $row['tissue_plane_nerves'];

        $head_eye = $row['head_eye'];
        $head_nose = $row['head_nose'];
        $head_ear = $row['head_ear'];
        $head_mouth = $row['head_mouth'];
        $head_face = $row['head_face'];

        $upper_limb_arm = $row['upper_limb_arm'];
        $upper_limb_forearm = $row['upper_limb_forearm'];
        $upper_limb_hand = $row['upper_limb_hand'];
        $upper_limb_axilla = $row['upper_limb_axilla'];
        $upper_limb_elbow = $row['upper_limb_elbow'];
        $upper_limb_wrist = $row['upper_limb_wrist'];
        $upper_limb_fingers = $row['upper_limb_fingers'];

        $trunk_chest = $row['trunk_chest'];
        $trunk_abdomen = $row['trunk_abdomen'];
        $trunk_back = $row['trunk_back'];

        $lower_limb_thigh = $row['lower_limb_thigh'];
        $lower_limb_leg = $row['lower_limb_leg'];
        $lower_limb_foot = $row['lower_limb_foot'];
        $lower_limb_genitalia = $row['lower_limb_genitalia'];
        $lower_limb_knee = $row['lower_limb_knee'];
        $lower_limb_ankle = $row['lower_limb_ankle'];
        $lower_limb_toes = $row['lower_limb_toes'];
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
                <li class="font1" class="active">Pre Surgery Information</li>
            </ol>
            <h3 align="center">Edit
                Pre Surgery Information
            </h3>
        </div>
        <HR/>
        <div>
            <!-------------------- Pre Surgery information form -------------------->
            <form name="PreSurgeryInformationEdit" method="post" action="editRecord.php"
                  enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        Clinic NO:
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        <input id="mdcc" type="radio" name="clinic_no_type"
                               value="MDCC" <?php echo ($clinic_no_type == "MDCC") ? "checked=\"checked\"" : ""; ?>/>
                        MDCC
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="">
                            <input id="psc" type="radio" name="clinic_no_type"
                                   value="PSC" <?php echo ($clinic_no_type == "PSC") ? "checked=\"checked\"" : ""; ?>/>
                            PSC
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input id="clinic_no" name="clinic_no" placeholder="Clinic NO" class="form-control"
                               value="<?php echo $clinic_no; ?>" required="required"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        BHT NO :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input id="BHT_no" name="BHT_no" placeholder="BHT NO" class="form-control"
                               value="<?php echo $BHT_no; ?>" required="required"/>
                    </div>
                </div>
                <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">
                Reason For Surgery :
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">
                <input id="reason_for_surgery_type" type="radio" name="reason_for_surgery_type" value="Congenital"
                    <?php echo ($reason_for_surgery_type == "Congenital") ? "checked=\"checked\"" : ""; ?>/>Congenital
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="">
                    <input id="reason_for_surgery_type" type="radio" name="reason_for_surgery_type" value="Acquired"
                        <?php echo ($reason_for_surgery_type == "Acquired") ? "checked=\"checked\"" : ""; ?>/>Acquired
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <select id="reason_for_surgery" name="reason_for_surgery" class="btn dropdown-toggle">
                    <option value="Primary" <?php echo ($reason_for_surgery == "Primary") ? "selected=\"selected\"" : ""; ?>>
                        Primary
                    </option>
                    <option value="Secondary" <?php echo ($reason_for_surgery == "Secondary") ? "selected=\"selected\"" : ""; ?>>
                        Secondary
                    </option>
                </select>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Surgery Date :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input id="surgery_date" name="surgery_date" type="date" placeholder="Surgery date" class="form-control"
                       value="<?php echo $surgery_date; ?>" required="required"/>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Surgery Type :
            </div>
            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                <div class="col-lg-2 col-sm-2 col-md-2">
                    <b>Select Part of the body</b>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2">
                    <b>Select Side of the body</b>
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2">
                    <b>Select Tissue Plane</b>
                </div>
                <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="part_of_the_body_head" <?php echo ($part_of_the_body_head == "1") ? "checked=\"checked\"" : ""; ?>
                       name="part_of_the_body_head" value="1"/> Head
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="side_of_the_body_left" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                       name="side_of_the_body_left" value="1"/> Left
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="tissue_plane_skin" <?php echo ($tissue_plane_skin == "1") ? "checked=\"checked\"" : ""; ?>
                       name="tissue_plane_skin" value="1"/> Skin
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="part_of_the_body_upper_limb" name="part_of_the_body_upper_limb"
                    <?php echo ($part_of_the_body_upper_limb == "1") ? "checked=\"checked\"" : ""; ?> value="1"/> Upper
                Limb
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="side_of_the_body_right" <?php echo ($side_of_the_body_right == "1") ? "checked=\"checked\"" : ""; ?>
                       name="side_of_the_body_right" value="1"/> Right
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="tissue_plane_muscle_tendons" name="tissue_plane_muscle_tendons"
                    <?php echo ($tissue_plane_muscle_tendons == "1") ? "checked=\"checked\"" : ""; ?> value="1"/>
                Muscles/Tendons
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="part_of_the_body_trunk" name="part_of_the_body_trunk"
                    <?php echo ($part_of_the_body_trunk == "1") ? "checked=\"checked\"" : ""; ?> value="1"/> Trunk
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                &nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="tissue_plane_arteries" <?php echo ($tissue_plane_arteries == "1") ? "checked=\"checked\"" : ""; ?>
                       name="tissue_plane_arteries" value="1"/>
                Arteries
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="part_of_the_body_lower_limb" name="part_of_the_body_lower_limb"
                    <?php echo ($part_of_the_body_lower_limb == "1") ? "checked=\"checked\"" : ""; ?> value="1"/> Lower
                Limb
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                &nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="tissue_plane_veins" <?php echo ($tissue_plane_veins == "1") ? "checked=\"checked\"" : ""; ?>
                       name="tissue_plane_veins" value="1"/> Veins
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
            <div class="row">
                <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                <div class="col-lg-2 col-sm-2 col-md-2">
                    &nbsp;
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2">
                    &nbsp;
                </div>
                <div class="col-lg-2 col-sm-2 col-md-2">
                    <input type="checkbox"
                           id="tissue_plane_nerves" <?php echo ($tissue_plane_nerves == "1") ? "checked=\"checked\"" : ""; ?>
                           name="tissue_plane_nerves" value="1"/> Nerves
                </div>
                <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <b><u>Head</u> </b>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <b><u>Upper Limb</u> </b>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <b><u>Trunk</u> </b>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <b><u>Lower Limb</u> </b>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head_eye" <?php echo ($head_eye == "1") ? "checked=\"checked\"" : ""; ?>
                       name="head_eye" value="1"/> Eye
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="upper_limb_arm" <?php echo ($upper_limb_arm == "1") ? "checked=\"checked\"" : ""; ?>
                       name="upper_limb_arm" value="1"/> Arm
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="trunk_chest" <?php echo ($trunk_chest == "1") ? "checked=\"checked\"" : ""; ?>
                       name="trunk_chest" value="1"/> Chest
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="lower_limb_thigh" <?php echo ($lower_limb_thigh == "1") ? "checked=\"checked\"" : ""; ?>
                       name="lower_limb_thigh" value="1"/> Thigh
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head_nose"
                       name="head_nose" <?php echo ($head_nose == "1") ? "checked=\"checked\"" : ""; ?> value="1"/> Nose
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="upper_limb_forearm" <?php echo ($upper_limb_forearm == "1") ? "checked=\"checked\"" : ""; ?>
                       name="upper_limb_forearm" value="1"/> Forearm
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="trunk_abdomen" <?php echo ($trunk_abdomen == "1") ? "checked=\"checked\"" : ""; ?>
                       name="trunk_abdomen" value="1"/> Abdomen
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="lower_limb_leg" <?php echo ($lower_limb_leg == "1") ? "checked=\"checked\"" : ""; ?>
                       name="lower_limb_leg" value="1"/> Leg
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head_ear" <?php echo ($head_ear == "1") ? "checked=\"checked\"" : ""; ?>
                       name="head_ear" value="1"/> Ear
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="upper_limb_hand" <?php echo ($upper_limb_hand == "1") ? "checked=\"checked\"" : ""; ?>
                       name="upper_limb_hand" value="1"/> Hand
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="trunk_back" <?php echo ($trunk_back == "1") ? "checked=\"checked\"" : ""; ?>
                       name="trunk_back" value="1"/> Back

            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="lower_limb_foot" <?php echo ($lower_limb_foot == "1") ? "checked=\"checked\"" : ""; ?>
                       name="lower_limb_foot" value="1"/> Foot
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head_mouth" <?php echo ($head_mouth == "1") ? "checked=\"checked\"" : ""; ?>
                       name="head_mouth" value="1"/> Mouth
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="upper_limb_axilla" <?php echo ($upper_limb_axilla == "1") ? "checked=\"checked\"" : ""; ?>
                       name="upper_limb_axilla" value="1"/> Axilla
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2"></div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox"
                       id="lower_limb_genitalia" <?php echo ($lower_limb_genitalia == "1") ? "checked=\"checked\"" : ""; ?>
                       name="lower_limb_genitalia" value="1"/> Genitalia
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>

        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head_face" <?php echo ($head_face == "1") ? "checked=\"checked\"" : ""; ?>
                       name="head_face" value="1"/> Face
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="upper_limb_elbow"
                       name="upper_limb_elbow" <?php echo ($upper_limb_elbow == "1") ? "checked=\"checked\"" : ""; ?>
                       value="1"/> Elbow
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2"></div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="lower_limb_knee"
                       name="lower_limb_knee" <?php echo ($lower_limb_knee == "1") ? "checked=\"checked\"" : ""; ?>
                       value="1"/> Knee
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2"></div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="upper_limb_wrist"
                       name="upper_limb_wrist" <?php echo ($upper_limb_wrist == "1") ? "checked=\"checked\"" : ""; ?>
                       value="1"/> Wrist
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2"></div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="lower_limb_ankle"
                       name="lower_limb_ankle" <?php echo ($lower_limb_ankle == "1") ? "checked=\"checked\"" : ""; ?>
                       value="1"/> Ankle
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2"></div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="chk1"
                       name="upper_limb_fingers" <?php echo ($upper_limb_fingers == "1") ? "checked=\"checked\"" : ""; ?>
                       value="1"/> Fingers
                <ul id="list1">
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> Thumb
                    </li>
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> Index
                    </li>
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> Middle
                    </li>
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> Ring
                    </li>
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> Little
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2"></div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="chk2"
                       name="lower_limb_toes" <?php echo ($lower_limb_toes == "1") ? "checked=\"checked\"" : ""; ?>
                       value="1"/> Toes
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                <ul id="list2">
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> 1
                    </li>
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> 2
                    </li>
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> 3
                    </li>
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> 4
                    </li>
                    <li>
                        <input type="checkbox" <?php echo ($side_of_the_body_left == "1") ? "checked=\"checked\"" : ""; ?>
                               value="1"/> 5
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Image of Wound :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="w_image" id="w_image" type="file"
                       placeholder="Image" class="form-control"/>
            </div>
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
                    <i class="glyphicon glyphicon-edit"></i>
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

