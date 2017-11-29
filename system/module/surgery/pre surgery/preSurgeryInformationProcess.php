<?php
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

// initialize all the variables
$clinic_no_type = $clinic_no = $BHT_no = $reason_for_surgery_type = $reason_for_surgery = $surgery_date = $part_of_the_body_head = $part_of_the_body_upper_limb = $part_of_the_body_trunk = $side_of_the_body_left = $side_of_the_body_right = $tissue_plane_skin = $tissue_plane_muscle_tendons = $tissue_plane_veins = $head_eye = $head_nose = $head_ear = $head_mouth = $upper_limb_arm = $upper_limb_forearm = $upper_limb_hand = $trunk_chest = $trunk_abdomen = $trunk_back = $lower_limb_thigh = $lower_limb_leg = $lower_limb_foot = "";

// retrieve data from the post request


header("Location: preSurgeryInformation.php");
die();