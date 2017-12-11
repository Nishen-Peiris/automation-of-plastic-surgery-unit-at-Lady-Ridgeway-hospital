<?php
/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 12/3/17
 * Time: 1:47 PM
 */
/******************** All the field names of the history relation **************************/
//id
//clinic_no_type
//clinic_no
//BHT_no
//presenting_complain
//past_medical_history
//past_surgical_history
//allergic_history
//drug_history
//diet_history

//birth_history_birth_weight
//birth_history_deliver
//birth_history_mode_of_delivery
//birth_history_mode_of_delivery_status
//birth_history_post_natal_complication

//other_history_family_history_consanguineous
//other_history_family_history_consanguineous_status
//other_history_family_history_family_diseases
//other_history_family_history_family_diseases_status



include_once "../../../system/common/session_handling.php";
include_once "../../../system/common/dbconnection_inc.php";

// initialize all the variables
$id = $clinic_no_type = $clinic_no = $BHT_no = $presenting_complain = $past_medical_history = $past_surgical_history = $allergic_history = $drug_history = $diet_history = $birth_history_birth_weight = $birth_history_deliver = $birth_history_mode_of_delivery = $birth_history_mode_of_delivery_status = $birth_history_post_natal_complication = $other_history_family_history_consanguineous = $other_history_family_history_consanguineous_status = $other_history_family_history_family_diseases = $other_history_family_history_family_diseases_status = $immunization_history_BCG = $immunization_history_BCG_2 = $immunization_history_penta_1 = $immunization_history_OPV_1 = $immunization_history_penta_2 = $immunization_history_OPV_2 = $immunization_history_IPV = $immunization_history_penta_3 = $immunization_history_OPV_3 = $immunization_history_MMR_1 = $immunization_history_JE = $immunization_history_DPT = $immunization_history_OPV_4 = $immunization_history_MMR_2 = $immunization_history_DT = $immunization_history_OPV_5 = $immunization_history_adult_tetanus = "";

// retrieve data from the post request
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


if (isset($_POST['other_history_family_history_consanguineous'])) {
    $other_history_family_history_consanguineous = $_POST['other_history_family_history_consanguineous'];
} else {
    $other_history_family_history_consanguineous = 0;
}
if (isset($_POST['other_history_family_history_consanguineous_status'])) {
    $other_history_family_history_consanguineous_status = $_POST['other_history_family_history_consanguineous_status'];
} else {
    $other_history_family_history_consanguineous_status = 0;
}
if (isset($_POST['other_history_family_history_family_diseases'])) {
    $other_history_family_history_family_diseases = $_POST['other_history_family_history_family_diseases'];
} else {
    $other_history_family_history_family_diseases = 0;
}
if (isset($_POST['other_history_family_history_family_diseases_status'])) {
    $other_history_family_history_family_diseases_status = $_POST['other_history_family_history_family_diseases_status'];
} else {
    $other_history_family_history_family_diseases_status = 0;
}


if (isset($_POST['immunization_history_BCG'])) {
    $immunization_history_BCG = $_POST['immunization_history_BCG'];
} else {
    $immunization_history_BCG = 0;
}
if (isset($_POST['immunization_history_BCG_2'])) {
    $immunization_history_BCG_2 = $_POST['immunization_history_BCG_2'];
} else {
    $immunization_history_BCG_2 = 0;
}
if (isset($_POST['immunization_history_penta_1'])) {
    $immunization_history_penta_1 = $_POST['immunization_history_penta_1'];
} else {
    $immunization_history_penta_1 = 0;
}
if (isset($_POST['immunization_history_OPV_1'])) {
    $immunization_history_OPV_1 = $_POST['immunization_history_OPV_1'];
} else {
    $immunization_history_OPV_1 = 0;
}
if (isset($_POST['immunization_history_penta_2'])) {
    $immunization_history_penta_2 = $_POST['immunization_history_penta_2'];
} else {
    $immunization_history_penta_2 = 0;
}
if (isset($_POST['immunization_history_OPV_2'])) {
    $immunization_history_OPV_2 = $_POST['immunization_history_OPV_2'];
} else {
    $immunization_history_OPV_2 = 0;
}
if (isset($_POST['immunization_history_IPV'])) {
    $immunization_history_IPV = $_POST['immunization_history_IPV'];
} else {
    $immunization_history_IPV = 0;
}
if (isset($_POST['immunization_history_penta_3'])) {
    $immunization_history_penta_3 = $_POST['immunization_history_penta_3'];
} else {
    $immunization_history_penta_3 = 0;
}
if (isset($_POST['immunization_history_OPV_3'])) {
    $immunization_history_OPV_3 = $_POST['immunization_history_OPV_3'];
} else {
    $immunization_history_OPV_3 = 0;
}
if (isset($_POST['immunization_history_MMR_1'])) {
    $immunization_history_MMR_1 = $_POST['immunization_history_MMR_1'];
} else {
    $immunization_history_MMR_1 = 0;
}
if (isset($_POST['immunization_history_JE'])) {
    $immunization_history_JE = $_POST['immunization_history_JE'];
} else {
    $immunization_history_JE = 0;
}
if (isset($_POST['immunization_history_DPT'])) {
    $immunization_history_DPT = $_POST['immunization_history_DPT'];
} else {
    $immunization_history_DPT = 0;
}
if (isset($_POST['immunization_history_OPV_4'])) {
    $immunization_history_OPV_4 = $_POST['immunization_history_OPV_4'];
} else {
    $immunization_history_OPV_4 = 0;
}
if (isset($_POST['immunization_history_MMR_2'])) {
    $immunization_history_MMR_2 = $_POST['immunization_history_MMR_2'];
} else {
    $immunization_history_MMR_2 = 0;
}
if (isset($_POST['immunization_history_DT'])) {
    $immunization_history_DT = $_POST['immunization_history_DT'];
} else {
    $immunization_history_DT = 0;
}
if (isset($_POST['immunization_history_OPV_5'])) {
    $immunization_history_OPV_5 = $_POST['immunization_history_OPV_5'];
} else {
    $immunization_history_OPV_5 = 0;
}
if (isset($_POST['immunization_history_adult_tetanus'])) {
    $immunization_history_adult_tetanus = $_POST['immunization_history_adult_tetanus'];
} else {
    $immunization_history_adult_tetanus = 0;
}



$sql = "INSERT INTO history " .
    "(clinic_no_type, clinic_no, BHT_no, presenting_complain, past_medical_history, past_surgical_history, allergic_history, drug_history, diet_history, birth_history_birth_weight, birth_history_deliver, birth_history_mode_of_delivery, birth_history_mode_of_delivery_status, birth_history_post_natal_complication, other_history_family_history_consanguineous, other_history_family_history_consanguineous_status, other_history_family_history_family_diseases, other_history_family_history_family_diseases_status, immunization_history_BCG, immunization_history_BCG_2, immunization_history_penta_1, immunization_history_OPV_1, immunization_history_penta_2, immunization_history_OPV_2, immunization_history_IPV, immunization_history_penta_3, immunization_history_OPV_3, immunization_history_MMR_1, immunization_history_JE, immunization_history_DPT,immunization_history_OPV_4, immunization_history_MMR_2, immunization_history_DT, immunization_history_OPV_5, immunization_history_adult_tetanus ) " .
    "VALUES ('$clinic_no_type', '$clinic_no', '$BHT_no', '$presenting_complain', '$past_medical_history', '$past_surgical_history', '$allergic_history', '$drug_history', '$diet_history', '$birth_history_birth_weight', '$birth_history_deliver', '$birth_history_mode_of_delivery', '$birth_history_mode_of_delivery_status', '$birth_history_post_natal_complication','$other_history_family_history_consanguineous', $other_history_family_history_consanguineous_status, '$other_history_family_history_family_diseases', $other_history_family_history_family_diseases_status, $immunization_history_BCG, $immunization_history_BCG_2, $immunization_history_penta_1, $immunization_history_OPV_1, $immunization_history_penta_2, $immunization_history_OPV_2, $immunization_history_IPV, immunization_history_penta_3, $immunization_history_OPV_3, $immunization_history_MMR_1, $immunization_history_JE, $immunization_history_DPT, $immunization_history_OPV_4, $immunization_history_MMR_2, $immunization_history_DT, $immunization_history_OPV_5, $immunization_history_adult_tetanus );";
if ($conn->query($sql) === TRUE) {
    $alert = "New record created successfully";
} else {
    $alert = "Error: " . $conn->error . $sql;
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "history.php"
</script>