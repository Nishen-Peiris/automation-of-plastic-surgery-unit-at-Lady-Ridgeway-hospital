<?php
/******************** All the field names of the pre_surgery relation **************************/
//clinic_no_type
//clinic_no

//BHT_no

//reason_for_surgery_type
//reason_for_surgery

//surgery_date

//part_of_the_body_head
//part_of_the_body_upper_limb
//part_of_the_body_trunk
//part_of_the_body_lower_limb

//side_of_the_body_left
//side_of_the_body_right

//tissue_plane_skin
//tissue_plane_muscle_tendons
//tissue_plane_veins

//head_eye
//head_nose
//head_ear
//head_mouth
//head_face

//upper_limb_arm
//upper_limb_forearm
//upper_limb_hand
//upper_limb_axilla
//upper_limb_elbow
//upper_limb_wrist
//upper_limb_fingers

//trunk_chest
//trunk_abdomen
//trunk_back

//lower_limb_thigh
//lower_limb_leg
//lower_limb_foot
//lower_limb_genitalia
//lower_limb_knee
//lower_limb_ankle
//lower_limb_toes

//tissue_plane_arteries
//tissue_plane_nerves

//status

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

// initialize all the variables
$clinic_no_type = $clinic_no = $BHT_no = $reason_for_surgery_type = $reason_for_surgery = $surgery_date = $part_of_the_body_head = $part_of_the_body_upper_limb = $part_of_the_body_trunk = $side_of_the_body_left = $side_of_the_body_right = $tissue_plane_skin = $tissue_plane_muscle_tendons = $tissue_plane_veins = $head_eye = $head_nose = $head_ear = $head_mouth = $head_face = $upper_limb_arm = $upper_limb_forearm = $upper_limb_hand = $upper_limb_axilla = $upper_limb_elbow = $upper_limb_wrist = $upper_limb_fingers = $trunk_chest = $trunk_abdomen = $trunk_back = $lower_limb_thigh = $lower_limb_leg = $lower_limb_foot = $lower_limb_genitalia = $lower_limb_knee = $lower_limb_ankle = $lower_limb_toes = $status = "";

// retrieve data from the post request
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

$status = "Active";

$sql = "INSERT INTO pre_surgery " .
    "(clinic_no_type, clinic_no, BHT_no, reason_for_surgery_type, reason_for_surgery, surgery_date, part_of_the_body_head, part_of_the_body_upper_limb, part_of_the_body_trunk, part_of_the_body_lower_limb, side_of_the_body_left, side_of_the_body_right, tissue_plane_skin, tissue_plane_muscle_tendons, tissue_plane_arteries, tissue_plane_veins, tissue_plane_nerves, head_eye, head_nose, head_ear, head_mouth, head_face,upper_limb_arm, upper_limb_forearm, upper_limb_hand, upper_limb_axilla, upper_limb_elbow, upper_limb_wrist, upper_limb_fingers, trunk_chest, trunk_abdomen, trunk_back, lower_limb_thigh, lower_limb_leg, lower_limb_foot, lower_limb_genitalia, lower_limb_knee, lower_limb_ankle, lower_limb_toes, status) " .
    "VALUES ('$clinic_no_type', '$clinic_no', '$BHT_no', '$reason_for_surgery_type', '$reason_for_surgery', '$surgery_date', $part_of_the_body_head, $part_of_the_body_upper_limb, $part_of_the_body_trunk, $part_of_the_body_lower_limb, $side_of_the_body_left, $side_of_the_body_right, $tissue_plane_skin, $tissue_plane_muscle_tendons, $tissue_plane_arteries, $tissue_plane_veins, $tissue_plane_nerves, $head_eye, $head_nose, $head_ear, $head_mouth, $head_face, $upper_limb_arm, $upper_limb_forearm, $upper_limb_hand, $upper_limb_axilla, $upper_limb_elbow, $upper_limb_wrist, $upper_limb_fingers, $trunk_chest, $trunk_abdomen, $trunk_back, $lower_limb_thigh, $lower_limb_leg, $lower_limb_foot, $lower_limb_genitalia, $lower_limb_knee, $lower_limb_ankle, $lower_limb_toes, '$status');";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "preSurgeryInformation.php"
</script>