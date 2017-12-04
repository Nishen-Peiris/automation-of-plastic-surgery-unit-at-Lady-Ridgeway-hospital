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

//immunization_history_BCH
//immunization_history_panta_1_OPV_1
//immunization_history_panta_2_OPV_2_IPV
//immunization_history_panta_3_OPV_3
//immunization_history_MMR_1
//immunization_history_JE
//immunization_history_DTP_OPV_4
//immunization_history_MMR_2
//immunization_history_DT_OPV_5
//immunization_history_adult_tetanus_toxid

//other_history_diet_history
//other_history_post_medical_history_status
//other_history_post_medical_history
//other_history_post_surgical_history_status
//other_history_post_surgical_history
//other_history_allergy_history_status
//other_history_allergy_history
//other_history_drug_history_status
//other_history_drug_history
//other_history_family_history_consanguineous
//other_history_family_history_consanguineous_status
//other_history_family_history_family_diseases
//other_history_family_history_family_diseases_status

//developmental_history_gross_motor_status
//developmental_history_gross_motor
//developmental_history_fine_motor_and_vision_status
//developmental_history_fine_motor_and_vision
//developmental_history_language_and_speech_status
//developmental_history_language_and_speech
//developmental_history_emotional_and_behavioural_status
//developmental_history_emotional_and_behavioural

include_once "../../../system/common/session_handling.php";
include_once "../../../system/common/dbconnection_inc.php";

// initialize all the variables
$id = $clinic_no_type = $clinic_no = $BHT_no = $presenting_complain = $past_medical_history = $past_surgical_history = $allergic_history = $drug_history = $diet_history = $birth_history_birth_weight = $birth_history_deliver = $birth_history_mode_of_delivery = $birth_history_mode_of_delivery_status = $birth_history_post_natal_complication = $immunization_history_BCH = $immunization_history_panta_1_OPV_1 = $immunization_history_panta_2_OPV_2_IPV = $immunization_history_panta_3_OPV_3 = $immunization_history_MMR_1 = $immunization_history_JE = $immunization_history_DTP_OPV_4 = $immunization_history_MMR_2 = $immunization_history_DT_OPV_5 = $immunization_history_adult_tetanus_toxid = $other_history_diet_history = $other_history_post_medical_history_status = $other_history_post_medical_history = $other_history_post_surgical_history_status = $other_history_post_surgical_history = $other_history_allergy_history_status = $other_history_allergy_history = $other_history_drug_history_status = $other_history_drug_history = $other_history_family_history_consanguineous = $other_history_family_history_consanguineous_status = $other_history_family_history_family_diseases = $other_history_family_history_family_diseases_status = $developmental_history_gross_motor_status = $developmental_history_gross_motor = $developmental_history_fine_motor_and_vision_status = $developmental_history_fine_motor_and_vision = $developmental_history_language_and_speech_status = $developmental_history_language_and_speech = $developmental_history_emotional_and_behavioural_status = $developmental_history_emotional_and_behavioural = "";

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

if (isset($_POST['immunization_history_BCH'])) {
    $immunization_history_BCH = $_POST['immunization_history_BCH'];
} else {
    $immunization_history_BCH = 0;
}
if (isset($_POST['immunization_history_panta_1_OPV_1'])) {
    $immunization_history_panta_1_OPV_1 = $_POST['immunization_history_panta_1_OPV_1'];
} else {
    $immunization_history_panta_1_OPV_1 = 0;
}
if (isset($_POST['immunization_history_panta_2_OPV_2_IPV'])) {
    $immunization_history_panta_2_OPV_2_IPV = $_POST['immunization_history_panta_2_OPV_2_IPV'];
} else {
    $immunization_history_panta_2_OPV_2_IPV = 0;
}
if (isset($_POST['immunization_history_panta_3_OPV_3'])) {
    $immunization_history_panta_3_OPV_3 = $_POST['immunization_history_panta_3_OPV_3'];
} else {
    $immunization_history_panta_3_OPV_3 = 0;
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
if (isset($_POST['immunization_history_DTP_OPV_4'])) {
    $immunization_history_DTP_OPV_4 = $_POST['immunization_history_DTP_OPV_4'];
} else {
    $immunization_history_DTP_OPV_4 = 0;
}
if (isset($_POST['immunization_history_MMR_2'])) {
    $immunization_history_MMR_2 = $_POST['immunization_history_MMR_2'];
} else {
    $immunization_history_MMR_2 = 0;
}
if (isset($_POST['immunization_history_DT_OPV_5'])) {
    $immunization_history_DT_OPV_5 = $_POST['immunization_history_DT_OPV_5'];
} else {
    $immunization_history_DT_OPV_5 = 0;
}
if (isset($_POST['immunization_history_adult_tetanus_toxid'])) {
    $immunization_history_adult_tetanus_toxid = $_POST['immunization_history_adult_tetanus_toxid'];
} else {
    $immunization_history_adult_tetanus_toxid = 0;
}

$other_history_diet_history = $_POST['other_history_diet_history'];
if (isset($_POST['other_history_post_medical_history_status'])) {
    $other_history_post_medical_history_status = $_POST['other_history_post_medical_history_status'];
} else {
    $other_history_post_medical_history_status = 0;
}
$other_history_post_medical_history = $_POST['other_history_post_medical_history'];
if (isset($_POST['other_history_post_surgical_history_status'])) {
    $other_history_post_surgical_history_status = $_POST['other_history_post_surgical_history_status'];
} else {
    $other_history_post_surgical_history_status = 0;
}
$other_history_post_surgical_history = $_POST['other_history_post_surgical_history'];
if (isset($_POST['other_history_allergy_history_status'])) {
    $other_history_allergy_history_status = $_POST['other_history_allergy_history_status'];
} else {
    $other_history_allergy_history_status = 0;
}
$other_history_allergy_history = $_POST['other_history_allergy_history'];
if (isset($_POST['other_history_drug_history_status'])) {
    $other_history_drug_history_status = $_POST['other_history_drug_history_status'];
} else {
    $other_history_drug_history_status = 0;
}
$other_history_drug_history = $_POST['other_history_drug_history'];
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
$other_history_family_history = $_POST['other_history_family_history'];

if (isset($_POST['developmental_history_gross_motor_status'])) {
    $developmental_history_gross_motor_status = $_POST['developmental_history_gross_motor_status'];
} else {
    $developmental_history_gross_motor_status = 0;
}
$developmental_history_gross_motor = $_POST['developmental_history_gross_motor'];
if (isset($_POST['developmental_history_fine_motor_and_vision_status'])) {
    $developmental_history_fine_motor_and_vision_status = $_POST['developmental_history_fine_motor_and_vision_status'];
} else {
    $developmental_history_fine_motor_and_vision_status = 0;
}
$developmental_history_fine_motor_and_vision = $_POST['developmental_history_fine_motor_and_vision'];
if (isset($_POST['developmental_history_language_and_speech_status'])) {
    $developmental_history_language_and_speech_status = $_POST['developmental_history_language_and_speech_status'];
} else {
    $developmental_history_language_and_speech_status = 0;
}
$developmental_history_language_and_speech = $_POST['developmental_history_language_and_speech'];
if (isset($_POST['developmental_history_emotional_and_behavioural_status'])) {
    $developmental_history_emotional_and_behavioural_status = $_POST['developmental_history_emotional_and_behavioural_status'];
} else {
    $developmental_history_emotional_and_behavioural_status = 0;
}
$developmental_history_emotional_and_behavioural = $_POST['developmental_history_emotional_and_behavioural'];

$sql = "INSERT INTO history " .
    "(clinic_no_type, clinic_no, BHT_no, presenting_complain, past_medical_history, past_surgical_history, allergic_history, drug_history, diet_history, birth_history_birth_weight, birth_history_deliver, birth_history_mode_of_delivery, birth_history_mode_of_delivery_status, birth_history_post_natal_complication, immunization_history_BCH, immunization_history_panta_1_OPV_1, immunization_history_panta_2_OPV_2_IPV, immunization_history_panta_3_OPV_3, immunization_history_MMR_1, immunization_history_JE, immunization_history_DTP_OPV_4, immunization_history_MMR_2, immunization_history_DT_OPV_5, immunization_history_adult_tetanus_toxid, other_history_diet_history, other_history_post_medical_history_status, other_history_post_medical_history, other_history_post_surgical_history_status, other_history_post_surgical_history, other_history_allergy_history_status, other_history_allergy_history, other_history_drug_history_status, other_history_drug_history, other_history_family_history_consanguineous, other_history_family_history_consanguineous_status, other_history_family_history_family_diseases, other_history_family_history_family_diseases_status, developmental_history_gross_motor_status, developmental_history_gross_motor, developmental_history_fine_motor_and_vision_status, developmental_history_fine_motor_and_vision, developmental_history_language_and_speech_status, developmental_history_language_and_speech, developmental_history_emotional_and_behavioural_status, developmental_history_emotional_and_behavioural) " .
    "VALUES ('$clinic_no_type', '$clinic_no', '$BHT_no', '$presenting_complain', '$past_medical_history', '$past_surgical_history', '$allergic_history', '$drug_history', '$diet_history', '$birth_history_birth_weight', '$birth_history_deliver', '$birth_history_mode_of_delivery', '$birth_history_mode_of_delivery_status', '$birth_history_post_natal_complication', $immunization_history_BCH, $immunization_history_panta_1_OPV_1, $immunization_history_panta_2_OPV_2_IPV, $immunization_history_panta_3_OPV_3,$immunization_history_MMR_1, $immunization_history_JE, $immunization_history_DTP_OPV_4, $immunization_history_MMR_2, $immunization_history_DT_OPV_5, $immunization_history_adult_tetanus_toxid, '$other_history_diet_history', $other_history_post_medical_history_status, '$other_history_post_medical_history', $other_history_post_surgical_history_status, '$other_history_post_surgical_history', $other_history_allergy_history_status, '$other_history_allergy_history', $other_history_drug_history_status, '$other_history_drug_history', '$other_history_family_history_consanguineous', $other_history_family_history_consanguineous_status, '$other_history_family_history_family_diseases', $other_history_family_history_family_diseases_status, $developmental_history_gross_motor_status, '$developmental_history_gross_motor', $developmental_history_fine_motor_and_vision_status, '$developmental_history_fine_motor_and_vision', $developmental_history_language_and_speech_status, '$developmental_history_language_and_speech', $developmental_history_emotional_and_behavioural_status, '$developmental_history_emotional_and_behavioural');";
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