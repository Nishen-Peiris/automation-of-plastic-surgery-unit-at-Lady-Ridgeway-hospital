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
                <li class="active"><a href="../../surgery/pre surgery/preSurgeryInformation.php">Pre Surgery</a></li>
                <li class="font1" class="active">Add Pre Surgery Information</li>
            </ol>
            <h3 align="center">Add
                Pre Surgery Information
            </h3>
        </div>
        <HR/>
        <div>
            <!-------------------- Pre-surgery information form -------------------->
            <form name="PreSurgeryInformation" method="post" action="preSurgeryInformationProcess.php"
                  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        Clinic NO:
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        <input id="mdcc" type="radio" name="clinic_no_type" value="MDCC" checked="checked"/> MDCC
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="">
                            <input id="psc" type="radio" name="clinic_no_type" value="PSC"/> PSC
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input id="clinic_no" name="clinic_no" placeholder="Clinic NO" class="form-control"
                               required="required"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        BHT NO :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input id="BHT_no" name="BHT_no" placeholder="BHT NO" class="form-control"
                               required="required"/>
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
                       checked="checked"/>Congenital
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="">
                    <input id="reason_for_surgery_type" type="radio" name="reason_for_surgery_type" value="Acquired"/>Acquired
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <select id="reason_for_surgery" name="reason_for_surgery" class="btn dropdown-toggle">
                    <option value="Primary" selected="selected"> Primary</option>
                    <option value="Secondary"> Secondary</option>
                </select>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Surgery Date :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input id="surgery_date" name="surgery_date" type="date" placeholder="Surgery date" class="form-control"
                       required="required"/>
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
                <input type="checkbox" id="part_of_the_body_head" name="part_of_the_body_head" value="1"/> Head
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="side_of_the_body_left" name="side_of_the_body_left" value="1"/> Left
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="tissue_plane_skin" name="tissue_plane_skin" value="1"/> Skin
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="part_of_the_body_upper_limb" name="part_of_the_body_upper_limb"
                       value="1"/> Upper Limb
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="side_of_the_body_right" name="side_of_the_body_right" value="1"/> Right
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="tissue_plane_muscle_tendons" name="tissue_plane_muscle_tendons"
                       value="1"/> Muscles/Tendons
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="part_of_the_body_trunk" name="part_of_the_body_trunk"
                       value="1"/> Trunk
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                &nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="tissue_plane_arteries" name="tissue_plane_arteries" value="1"/>
                Arteries
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="part_of_the_body_lower_limb" name="part_of_the_body_lower_limb"
                       value="1"/> Lower Limb
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                &nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="tissue_plane_veins" name="tissue_plane_veins" value="1"/> Veins
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
                    <input type="checkbox" id="tissue_plane_nerves" name="tissue_plane_nerves" value="1"/> Nerves
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
                <input type="checkbox" id="head_eye" name="head_eye" value="1"/> Eye
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="upper_limb_arm" name="upper_limb_arm" value="1"/> Arm
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="trunk_chest" name="trunk_chest" value="1"/> Chest
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="lower_limb_thigh" name="lower_limb_thigh" value="1"/> Thigh
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head_nose" name="head_nose" value="1"/> Nose
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="upper_limb_forearm" name="upper_limb_forearm" value="1"/> Forearm
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="trunk_abdomen" name="trunk_abdomen" value="1"/> Abdomen
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="lower_limb_leg" name="lower_limb_leg" value="1"/> Leg
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head_ear" name="head_ear" value="1"/> Ear
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="upper_limb_hand" name="upper_limb_hand" value="1"/> Hand
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="trunk_back" name="trunk_back" value="1"/> Back

            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="lower_limb_foot" name="lower_limb_foot" value="1"/> Foot
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head_mouth" name="head_mouth" value="1"/> Mouth
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head_face" name="head_face" value="1"/> Face
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
    <?php include '../../../common/footer.php'; ?>
</div>
</body>
</html>

