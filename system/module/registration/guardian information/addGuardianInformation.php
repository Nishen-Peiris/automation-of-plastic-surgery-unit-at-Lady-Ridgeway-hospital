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
                <li><a href="../../login/dashboard.php">Dashboard </a></li>
                <li><a href="../../registration/registration.php">Registration</a></li>
                <li class="active"><a href="../../registration/guardian information/guardianInformation.php">Guardian
                        Information</a></li>
                <li class="font1" class="active">Add Guardian Information</li>
            </ol>

            <h3 align="center">Add
                <small class="font1">Guardian Information</small>
            </h3>
        </div>
        <HR/>
        <div>
            <!-------------------- Guardian information form -------------------->
            <form name="GuardianInformation" method="post" action="guardianInformationProcess.php"
                  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        Clinic NO:
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        <input name="clinic_no_type" id="clinic_no_type_mdcc" type="radio" value="MDCC"
                               checked="checked"/> MDCC
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="">
                            <input name="clinic_no_type" id="clinic_no_type_psc" type="radio" value="PSC"/> PSC
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="clinic_no" id="clinic_no" placeholder="Clinic NO" type="text" class="form-control"
                               required="required"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        BHT NO :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="BHT_no" id="BHT_no" placeholder="BHT NO" type="text" class="form-control"
                               required="required"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Guardian Name :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="guardian_name" id="guardian_name" type="text" placeholder="Guardian Name"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Address :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="address" id="address" type="text" placeholder="Address" class="form-control"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Gender :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="gender" id="gender_male" type="radio" value="Male" checked="checked"/> Male

                        <input name="gender" id="gender_female" type="radio" value="Female"/>Female
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Age :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="age" id="age" placeholder="Age" readonly="readonly" class="form-control"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Contact No :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="contact_no" id="contact_no" type="text" placeholder="Contact No"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Occupation :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="occupation" id="occupation" type="text" placeholder="Occupation"
                               class="form-control"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        &nbsp;
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="glyphicon glyphicon-save"></i>
                            Save
                        </button>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        &nbsp;
                    </div>
                    <div class="col-lg-1col-sm-1 col-md-1">
                        &nbsp;
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <button type="reset" class="btn btn-primary">
                            <i class="glyphicon glyphicon-refresh"></i>
                            Reset
                        </button>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">
                        &nbsp;
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="footer">
    <?php include '../../../common/footer.php'; ?>
</div>
</body>
</html>