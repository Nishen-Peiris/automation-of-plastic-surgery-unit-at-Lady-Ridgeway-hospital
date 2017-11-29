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
                <small class="font1">Pre Surgery Information</small>
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
                        <input id="mdcc" type="radio" name="clinic-no-type" value="MDCC" checked="checked"/> MDCC
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="">
                            <input id="psc" type="radio" name="clinic-no-type" value="PSC"/> PSC
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="p_clincno" id="p_clinicno" placeholder="Clinic NO" class="form-control"
                               required="required"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        BHT NO :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="t_fname" id="t_fname" placeholder="BHT NO" class="form-control"
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
                <input id="congenital" type="radio" name="reason-for-surgery-type" value="Congenital"
                       checked="checked"/>Congenital
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="">
                    <input id="acquired" type="radio" name="reason-for-surgery-type" value="Acquired"/>Acquired
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <select id="reason-for-surgery" name="reason-for-surgery" class="btn dropdown-toggle">
                    <option value="primary" selected="selected"> Primary</option>
                    <option value="secondary"> Secondary</option>
                </select>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Surgery Date :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input id="surgery-date" name="surgery-date" type="date" placeholder="Surgery date" class="form-control"
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
                <input type="checkbox" id="part-of-the-body-head" name="part-of-the-body-head" value="Head"/> Head
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="side-of-the-body-left" name="side-of-the-body-left" value="Left"/> Left
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="tissue-plane-skin" name="tissue-plane-skin" value="Skin"/> Skin
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="part-of-the-body-upper-limb" name="part-of-the-body-upper-limb"
                       value="Upper Limb"/> Upper Limb
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="side-of-the-body-right" name="side-of-the-body-right" value="Right"/> Right
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="tissue-plane-muscle-tendons" name="tissue-plane-muscle-tendons"
                       value="Muscles/Tendons"/> Muscles/Tendons
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="part-of-the-body-upper-trunk" name="part-of-the-body-upper-trunk"
                       value="Trunk"/> Trunk
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                &nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="tissue-plane-arteries" name="tissue-plane-arteries" value="Arteries"/>
                Arteries
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="part-of-the-body-lower-limb" name="part-of-the-body-lower-limb"
                       value="Upper Limb"/> Lower Limb
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                &nbsp;
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="tissue-plane-veins" name="tissue-plane-veins" value="Veins"/> Veins
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
                    <input type="checkbox" id="tissue-plane-nerves" name="tissue-plane-nerves" value="Nerves"/> Nerves
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
                <input type="checkbox" id="head-eye" name="head-eye" value="1"/> Eye
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="upper-limb-arm" name="upper-limb-arm" value="1"/> Arm
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="trunk-chest" name="trunk-chest" value="1"/> Chest
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="lower-limb-thigh" name="lower-limb-thigh" value="1"/> Thigh
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head-nose" name="head-nose" value="1"/> Nose
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="upper-limb-forearm" name="upper-limb-forearm" value="1"/> Forearm
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="trunk-abdomen" name="trunk-abdomen" value="1"/> Abdomen
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="lower-limb-leg" name="lower-limb-leg" value="1"/> Leg
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head-ear" name="head-ear" value="1"/> Ear
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="upper-limb-hand" name="upper-limb-hand" value="1"/> Hand
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="trunk-back" name="trunk-back" value="1"/> Back

            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="lower-limb-foot" name="lower-limb-foot" value="1"/> Foot
                <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head-mouth" name="head-mouth" value="1"/> Mouth
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input type="checkbox" id="head-face" name="head-face" value="1"/> Face
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

