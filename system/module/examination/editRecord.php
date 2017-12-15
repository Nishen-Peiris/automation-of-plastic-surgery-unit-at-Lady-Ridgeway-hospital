<?php

include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data from post
    $id = $_POST{'id'};
    $clinic_no_type = $_POST['clinic_no_type'];
    $clinic_no = $_POST['clinic_no'];
    $BHT_no = $_POST['BHT_no'];
    $general_examination = $_POST['general_examination'];
    $cardiovascular_system_examination = $_POST['cardiovascular_system_examination'];
    $respiratory_system_examination = $_POST['respiratory_system_examination'];
    $nervous_system_examination = $_POST['nervous_system_examination'];
    $abdominal_examination = $_POST['abdominal_examination'];
    $genito_urinary_examination = $_POST['genito_urinary_examination'];
    $limbs_examination = $_POST['limbs_examination'];

    $sql = "UPDATE examination set clinic_no_type = '$clinic_no_type', clinic_no = '$clinic_no', BHT_no = '$BHT_no', general_examination = '$general_examination', cardiovascular_system_examination = '$cardiovascular_system_examination', respiratory_system_examination = '$respiratory_system_examination', nervous_system_examination = '$nervous_system_examination', abdominal_examination = '$abdominal_examination', genito_urinary_examination = '$genito_urinary_examination', limbs_examination = '$limbs_examination' WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
        $alert = "Record updated.";
    } else {
        $alert = "An error occurred while updating the record.";
    }
    ?>
    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "examination.php"
    </script>
    <?php
    $conn->close();
} else {
    // get the id of the record to be edited
    if (isset($_GET{'id'})) {
        $id = $_GET{'id'};
    } else {
        die();
    }

    // get the record to be edited
    $sql = "SELECT clinic_no_type, clinic_no, BHT_no, general_examination, cardiovascular_system_examination, respiratory_system_examination, nervous_system_examination, abdominal_examination, genito_urinary_examination, limbs_examination from examination WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $BHT_no = $row['BHT_no'];
        $clinic_no_type = $row['clinic_no_type'];
        $clinic_no = $row['clinic_no'];
        $BHT_no = $row['BHT_no'];
        $general_examination = $row['general_examination'];
        $cardiovascular_system_examination = $row['cardiovascular_system_examination'];
        $respiratory_system_examination = $row['respiratory_system_examination'];
        $nervous_system_examination = $row['nervous_system_examination'];
        $abdominal_examination = $row['abdominal_examination'];
        $genito_urinary_examination = $row['genito_urinary_examination'];
        $limbs_examination = $row['limbs_examination'];

    } else {
        $conn->close();
        die();
    }
}
?>
<html>
<head>
    <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
    <link rel="icon" href="../../images/title.png" />
    <link rel="stylesheet" type="text/css"
          href="../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
          href="../../css/mainlayout.css" />

    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js">

    </script>
    <script type="text/javascript">
        //Ajax for role Rights
        function showRights(str)
        {
            var xmlhttp;
            if (str=="")
            {
                document.getElementById("showrights").innerHTML="";
                return;
            }
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("showrights").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","getRights.php?q="+str,true);
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

    &nbsp;</div>
<div id="contents">
<div>
    <ol class="breadcrumb">
        <li>
            <a href="../login/dashboard.php">
                Dashboard </a></li>
        <li> <a href="../examination/examination.php">Examination</a></li>

        <li class="font1" class="active">Edit Examination</li>
    </ol>

    <h3 align="center">Edit Examination</h3>

</div>
<HR />
<div>
    <!--Start Table-->
    <form name="editExamination" method="post" action="editRecord.php"
          enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
            <div class="col-lg-1 col-sm-1 col-md-1">
                Clinic NO:
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">

                <input name="clinic_no_type" id="mdcc" type="radio" value="MDCC" <?php echo ($clinic_no_type == "MDCC") ? "checked=\"checked\"" : ""; ?>/> MDCC
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="">
                    <input name="clinic_no_type" id="psc" type="radio" value="PSC" <?php echo ($clinic_no_type == "PSC") ? "checked=\"checked\"" : ""; ?>/> PSC

                    <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                </div>

            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="clinic_no" id="clinic_no" placeholder="Clinic NO"  value="<?php echo $clinic_no; ?>" class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                BHT NO :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="BHT_no" id="BHT_no"  value="<?php echo $BHT_no; ?>" placeholder="BHT NO" class="form-control"/>

            </div>
        </div>

        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>

</div>

<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        General Examination :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">

        <input name="general_examination" id="general_examination"  value="<?php echo $general_examination; ?>" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Cardiovascular System Examination :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">

        <input name="cardiovascular_system_examination"  value="<?php echo $cardiovascular_system_examination; ?>" id="cardiovascular_system_examination" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Respiratory System Examination :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">

        <input name="respiratory_system_examination"  value="<?php echo $respiratory_system_examination; ?>" id="respiratory_system_examination" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Nervous System Examination :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">

        <input name="nervous_system_examination"  value="<?php echo $nervous_system_examination; ?>" id="nervous_system_examination" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Abdominal Examination :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">

        <input name="abdominal_examination" id="abdominal_examination"  value="<?php echo $abdominal_examination; ?>" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Genito Urinary Examination :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">

        <input name="genito_urinary_examination" id="genito_urinary_examination"  value="<?php echo $genito_urinary_examination; ?>" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        Limbs Examination :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">

        <input name="limbs_examination" id="limbs_examination"  value="<?php echo $limbs_examination; ?>" placeholder="Comment" class="form-control"/>
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        &nbsp;
    </div>
    <div class="col-lg-3 col-sm-3 col-md-3">
        <button type="submit" class="btn btn-primary">
            <i class="glyphicon glyphicon-save"></i>
            Save</button>
    </div>

    <div class="col-lg-2 col-sm-2 col-md-2">
        &nbsp;
    </div>
    <div class="col-lg-3 col-sm-3 col-md-3">
        <button type="reset" class="btn btn-primary">
            <i class="glyphicon glyphicon-refresh"></i>
            Reset</button>

    </div>

    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>




</div>

</form>

<!--End-->



</div>





</div>








<div id="footer">

    <?php include '../../common/footer.php'; ?>
</div>


</body>

</html>

