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
                <li class="active"><a href="../../surgery/surgery information/surgeryInformation.php">Surgery</a></li>
                <li class="font1" class="active">Post Surgery Information</li>
            </ol>
            <h3 align="center">Add
               Post Surgery Information
            </h3>
        </div>
        <HR/>
        <div>
            <!-------------------- Pre-surgery information form -------------------->
            <form name="PostSurgeryInformation" method="post" action="postSurgeryInformationProcess.php"
                  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        BHT NO :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input id="BHT_no" name="BHT_no" placeholder="BHT NO" class="form-control" required="required"/>
                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
                </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Photograph after Surgery :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input id="photograph" name="photograph" type="file"
                       placeholder="Image" class="form-control"/>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Complications :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input id="complications" name="complications" placeholder="Comment" class="form-control"
                       required="required"/>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1"><b>(graft)</b></div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Post Surgery Investigations :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input id="post_surgery_investigations" name="post_surgery_investigations" placeholder="Comment"
                       class="form-control" required="required"/>
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Date of Discharge :
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <input id="date_of_discharge" name="date_of_discharge" type="date" placeholder="DOB"
                       class="form-control" required="required"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        </div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                Discharge Plan :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input id="discharge_plan" name="discharge_plan" placeholder="Comment" class="form-control"
                       required="required"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
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