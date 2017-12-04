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

                <li class="font1" class="active">Add History</li>
            </ol>
            <h3 align="center">Add
                <small class="font1">History</small>
            </h3>
        </div>
        <HR/>
        <div>
            <!-------------------- History form -------------------->
            <form name="History" method="post" action="historyProcess.php"
                  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        Clinic NO:
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        <input name="clinic_no_type" id="clinic_no_type" type="radio" value="MDCC" checked="checked"/>
                        MDCC
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="">
                            <input name="clinic_no_type" id="clinic_no_type" type="radio" value="PSC"/> PSC
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="clinic_no" id="clinic_no" placeholder="Clinic NO" class="form-control"
                               required="required"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        BHT NO :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="BHT_no" id="BHT_no" placeholder="BHT NO" class="form-control" required="required"/>
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
                <input name="presenting_complain" id="presenting_complain" placeholder="Comment" class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Past Medical History :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="past_medical_history" id="past_medical_history" placeholder="Comment"
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
                <input name="past_surgical_history" id="past_surgical_history" placeholder="Comment"
                       class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Allergic History :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="allergic_history" id="allergic_history" placeholder="Comment" class="form-control"/>
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
                <input name="drug_history" id="drug_history" placeholder="Comment" class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Diet History :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="diet_history" id="diet_history" placeholder="Comment" class="form-control"/>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <b><u>Birth History :</u></b>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <b><u>Immunization History :</u></b>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Birth Weight :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="birth_history_birth_weight" id="birth_history_birth_weight" placeholder="Birth weight"
                       class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="immunization_history_BCH" name="immunization_history_BCH" value="1"/> BCH
                <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input type="checkbox" id="immunization_history_panta_1_OPV_1" name="immunization_history_panta_1_OPV_1"
                       value="1"/> Penta I + OPV I
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Delivery :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="birth_history_deliver" id="birth_history_deliver" type="radio" value="Term"
                       required="required" checked="checked"/> Term &nbsp;&nbsp;
                <input name="birth_history_deliver" id="birth_history_deliver" type="radio" value="Pre Term"/> Pre Term
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="immunization_history_panta_2_OPV_2_IPV"
                       name="immunization_history_panta_2_OPV_2_IPV" value="1"/> Penta II + OPV II + IPV <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input type="checkbox" id="immunization_history_panta_3_OPV_3" name="immunization_history_panta_3_OPV_3"
                       value="1"/> Penta III + OPV III
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Mode of Delivery :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="birth_history_mode_of_delivery" id="birth_history_mode_of_delivery" type="radio"
                       value="Vaginal" required="required" checked="checked"/> Vaginal Delivery
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="">
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="birth_history_mode_of_delivery_status"
                                                   id="birth_history_mode_of_delivery_status" value="Normal"
                                                   required="required" checked="checked"/> Normal
                    <br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="birth_history_mode_of_delivery_status"
                                                   id="birth_history_mode_of_delivery_status" value="Instrumental"/>
                    Instrumental
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input name="birth_history_mode_of_delivery" id="birth_history_mode_of_delivery" type="radio"
                       value="Cesarean"/>Cesarean Delivery
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="immunization_history_MMR_1" name="immunization_history_MMR_1" value="1"/>
                MMR I <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input type="checkbox" id="immunization_history_JE" name="immunization_history_JE" value="1"/> JE <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input type="checkbox" id="immunization_history_DTP_OPV_4" name="immunization_history_DTP_OPV_4"
                       value="1"/> DTP + OPV IV <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input type="checkbox" id="immunization_history_MMR_2" name="immunization_history_MMR_2"
                       value="1"/> MMR II
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Post natal Complication :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="birth_history_post_natal_complication" id="birth_history_post_natal_complication"
                       placeholder="Post natel Complications" class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="immunization_history_DT_OPV_5" name="immunization_history_DT_OPV_5"
                       value="1"/> DT + OPV V <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input type="checkbox" id="immunization_history_adult_tetanus_toxid"
                       name="immunization_history_adult_tetanus_toxid"
                       value="1"/> Adult Tetanus Toxid
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <b><u>Other History :</u></b>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <b><u>Developmental History :</u></b>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Diet History :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="other_history_diet_history" id="other_history_diet_history" placeholder="Comment"
                       class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="developmental_history_gross_motor_status"
                       name="developmental_history_gross_motor_status" value="1"/> Gross Motor
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="developmental_history_gross_motor" id="developmental_history_gross_motor" type="radio"
                       value="Normal" checked="checked"/> Normal &nbsp;&nbsp;&nbsp;
                <input name="developmental_history_gross_motor" id="developmental_history_gross_motor" type="radio"
                       value="Abnormal"/> Abnormal &nbsp;&nbsp;&nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Post Medical History :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="other_history_post_medical_history_status" id="other_history_post_medical_history_status"
                       type="radio" value="1"/> YES &nbsp;&nbsp;&nbsp;
                <input name="other_history_post_medical_history_status" id="other_history_post_medical_history_status"
                       type="radio" value="0" checked="checked"/> NO &nbsp;&nbsp;&nbsp; <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input name="other_history_post_medical_history" id="other_history_post_medical_history"
                       placeholder="Comment" class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="developmental_history_fine_motor_and_vision_status"
                       name="developmental_history_fine_motor_and_vision_status" value="1"/> Fine Motor and
                Vision
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="developmental_history_fine_motor_and_vision"
                       id="developmental_history_fine_motor_and_vision" type="radio" value="Normal"
                       checked="checked"/> Normal &nbsp;&nbsp;&nbsp;
                <input name="developmental_history_fine_motor_and_vision"
                       id="developmental_history_fine_motor_and_vision" type="radio" value="Abnormal"/> Abnormal
                &nbsp;&nbsp;&nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Post Surgical History :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="other_history_post_surgical_history_status" id="other_history_post_surgical_history_status"
                       type="radio" value="1"/> YES &nbsp;&nbsp;&nbsp;
                <input name="other_history_post_surgical_history" id="other_history_post_surgical_history"
                       type="radio" value="0" checked="checked"/> NO &nbsp;&nbsp;&nbsp; <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input name="other_history_post_surgical_history" id="other_history_post_surgical_history"
                       placeholder="Comment" class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="developmental_history_language_and_speech_status"
                       name="developmental_history_language_and_speech_status" value="1"/> Language
                and Speech
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="developmental_history_language_and_speech" id="developmental_history_language_and_speech"
                       type="radio" value="Normal" checked="checked"/> Normal &nbsp;&nbsp;&nbsp;
                <input name="developmental_history_language_and_speech" id="developmental_history_language_and_speech"
                       type="radio" value="Abnormal"/> Abnormal &nbsp;&nbsp;&nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Allergy History :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="other_history_allergy_history_status" id="other_history_allergy_history_status"
                       type="radio" value="1"/> YES &nbsp;&nbsp;&nbsp;
                <input name="other_history_allergy_history_status" id="other_history_allergy_history_status"
                       type="radio" value="0" checked="checked"/> NO &nbsp;&nbsp;&nbsp; <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input name="other_history_allergy_history" id="other_history_allergy_history" placeholder="Comment"
                       class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="developmental_history_emotional_and_behavioural_status"
                       name="developmental_history_emotional_and_behavioural_status" value="1"/>
                Emotional and Behavior
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="developmental_history_emotional_and_behavioural"
                       id="developmental_history_emotional_and_behavioural" type="radio" value="Normal"
                       checked="checked"/> Normal
                &nbsp;&nbsp;&nbsp;
                <input name="developmental_history_emotional_and_behavioural"
                       id="developmental_history_emotional_and_behavioural" type="radio" value="Abnormal"/> Abnormal
                &nbsp;&nbsp;&nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Drug History :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="other_history_drug_history_status" id="other_history_drug_history_status" type="radio"
                       value="1"/> YES &nbsp;&nbsp;&nbsp;
                <input name="other_history_drug_history_status" id="other_history_drug_history_status" type="radio"
                       value="0" checked="checked"/> NO &nbsp;&nbsp;&nbsp; <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input name="other_history_drug_history" id="other_history_drug_history" placeholder="Comment"
                       class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Family History :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="other_history_family_history_consanguineous"
                       name="other_history_family_history_consanguineous"
                       value="1"/> Consanguineous <br/>
                <input name="other_history_family_history_consanguineous_status"
                       id="other_history_family_history_consanguineous_status" type="radio" value="1"/> YES &nbsp;&nbsp;&nbsp;
                <input name="other_history_family_history_consanguineous_status"
                       id="other_history_family_history_consanguineous_status" type="radio" value="0"
                       checked="checked"/> NO &nbsp;&nbsp;&nbsp; <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input type="checkbox" id="other_history_family_history_family_diseases"
                       name="other_history_family_history_family_diseases" value="1"/> Familiar
                Diseases <br/>
                <input name="other_history_family_history_family_diseases_status"
                       id="other_history_family_history_family_diseases_status" type="radio" value="1"/> YES &nbsp;&nbsp;&nbsp;
                <input name="other_history_family_history_family_diseases_status"
                       id="other_history_family_history_family_diseases_status" type="radio" value="0"
                       checked="checked"/> NO &nbsp;&nbsp;&nbsp; <br/>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <input name="other_history_family_history" id="other_history_family_history" placeholder="Comment"
                       class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
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