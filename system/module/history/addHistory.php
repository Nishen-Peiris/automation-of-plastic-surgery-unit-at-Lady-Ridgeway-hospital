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
               History
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
                <input name="birth_history_birth_weight" id="birth_history_birth_weight" placeholder="Birth weight"
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
                       required="required" checked="checked"/> Term &nbsp;&nbsp;
                <input name="birth_history_deliver" id="birth_history_deliver" type="radio" value="Pre Term"/> Pre Term
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
                       placeholder="Post natel Complications" class="form-control"/>
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
                <input type="checkbox" id="other_history_family_history_consanguineous"
                       name="other_history_family_history_consanguineous"
                       value="1"/> Consanguineous <br/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">

                <input name="other_history_family_history_consanguineous_status"
                       id="other_history_family_history_consanguineous_status" type="radio" value="Yes"/> YES &nbsp;&nbsp;&nbsp;
                <input name="other_history_family_history_consanguineous_status"
                       id="other_history_family_history_consanguineous_status" type="radio" value="No"
                       checked="checked"/> NO &nbsp;&nbsp;&nbsp; <br/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="other_history_family_history_family_diseases"
                       name="other_history_family_history_family_diseases" value="1"/> Familiar
                Diseases <br/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input name="other_history_family_history_family_diseases_status"
                       id="other_history_family_history_family_diseases_status" type="radio" value="Yes"/> YES &nbsp;&nbsp;&nbsp;
                <input name="other_history_family_history_family_diseases_status"
                       id="other_history_family_history_family_diseases_status" type="radio" value="No"
                       checked="checked"/> NO &nbsp;&nbsp;&nbsp; <br/>
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
                            <input type="checkbox" value="1" name="immunization_history_BCG" id="immunization_history_BCG"/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>BCG 2nd dose<br>
                            (If no scar even at 6 months)
                            <input type="checkbox" value="1" name="immunization_history_BCG_2" id="immunization_history_BCG_2"/>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2">2 months Completed</td>
                        <td>Pentavalent 1
                            <input type="checkbox" value="1" name="immunization_history_penta_1" id="immunization_history_penta_1"/>
                        </td>

                    </tr>
                    <tr>
                        <td>OPV1,FIPV
                            <input type="checkbox" value="1" name="immunization_history_OPV_1" id="immunization_history_OPV_1"/>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="3">4 months Completed</td>
                        <td>Pentavalent 2
                            <input type="checkbox" value="1" name="immunization_history_penta_2" id="immunization_history_penta_2"/>
                        </td>
                    </tr>
                    <tr>
                        <td>OPV 2
                            <input type="checkbox" value="1" name="immunization_history_OPV_2" id="immunization_history_OPV_2"/>
                        </td>
                    </tr>
                    <tr>
                        <td>IPV
                            <input type="checkbox" value="1" name="immunization_history_IPV" id="immunization_history_IPV"/>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2">6 months Completed</td>
                        <td>Pentavalent 3
                            <input type="checkbox" value="1" name="immunization_history_penta_3" id="immunization_history_penta_3"/>
                        </td>

                    </tr>
                    <tr>
                        <td>OPV 3
                            <input type="checkbox" value="1" name="immunization_history_OPV_3" id="immunization_history_OPV_3"/>
                        </td>
                    </tr>
                    <tr>
                        <td>9 months Completed </td>
                        <td>Measles, Mumps, Rubella 1 (MMR 1)
                            <input type="checkbox" value="1" name="immunization_history_MMR_1" id="immunization_history_MMR_1"/>
                        </td>
                    </tr>
                    <tr>
                        <td>12 months Completed</td>
                        <td>Live JE
                            <input type="checkbox" value="1" name="immunization_history_JE" id="immunization_history_JE"/>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2">18 months Completed</td>
                        <td>DPT
                            <input type="checkbox" value="1" name="immunization_history_DPT" id="immunization_history_DPT"/>
                        </td>

                    </tr>
                    <tr>
                        <td>OPV 4
                            <input type="checkbox" value="1" name="immunization_history_OPV_4" id="immunization_history_OPV_4"/>
                        </td>
                    </tr>
                    <tr>
                        <td>3 Years Completed </td>
                        <td>Measles & Rubella (MR)/ MMR 2
                            <input type="checkbox" value="1" name="immunization_history_MMR_2" id="immunization_history_MMR_2"/>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2">5 Years Completed</td>
                        <td>D.T
                            <input type="checkbox" value="1" name="immunization_history_DT" id="immunization_history_DT"/>
                        </td>
                    </tr>
                    <tr>
                        <td>OPV 5
                            <input type="checkbox" value="1" name="immunization_history_OPV_5" id="immunization_history_OPV_5"/>
                        </td>
                    </tr>
                    <tr>
                        <td>11 Years Completed</td>
                        <td>Adult Tetanus & diphthria (aTd)
                            <input type="checkbox" value="1" name="immunization_history_adult_tetanus" id="immunization_history_adult_tetanus"/>
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