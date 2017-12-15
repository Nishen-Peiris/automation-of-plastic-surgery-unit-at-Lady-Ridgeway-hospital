<?php
/**
 * Created by PhpStorm.
 * User: ChaThUrikA
 * Date: 12/11/2017
 * Time: 7:56 PM
 */
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get data from post
    $id = $_POST{'id'};
    $clinic_no_type = $_POST['clinic_no_type'];
    $clinic_no = $_POST['clinic_no'];
    $BHT_no = $_POST['BHT_no'];
    $admission_date = $_POST['admission_date'];
    $blood_group = $_POST['blood_group'];
    $x_ray = $_POST['x_ray'];
    $echo = $_POST['echo'];
    $ultra_sound = $_POST['ultra_sound'];
    $CT = $_POST['CT'];
    $MRI = $_POST['MRI'];
    $fbc_report = $_POST['fbc_report'];
    $x_ray_report = $_POST['x_ray_report'];
    $echo_report = $_POST['echo_report'];
    $ultra_sound_report = $_POST['ultra_sound_report'];
    $CT_report = $_POST['CT_report'];
    $MRI_report = $_POST['MRI_report'];
    $ECG_report = $_POST['ECG_report'];

    //upload files
    $fbc_report = $_FILES['fbc_report']['name'];
    $file_loc = $_FILES['fbc_report']['tmp_name'];
    $folder="../uploads/";
    move_uploaded_file($file_loc,$folder.$fbc_report);

    $x_ray_report =$_FILES['x_ray_report']['name'];
    $file_loc = $_FILES['x_ray_report']['tmp_name'];
    $folder="../uploads/";
    move_uploaded_file($file_loc,$folder.$x_ray_report);

    $echo_report = $_FILES['echo_report']['name'];
    $file_loc = $_FILES['echo_report']['tmp_name'];
    $folder="../uploads/";
    move_uploaded_file($file_loc,$folder.$echo_report);

    $ultra_sound_report = $_FILES['ultra_sound_report']['name'];
    $file_loc = $_FILES['ultra_sound_report']['tmp_name'];
    $folder="../uploads/";
    move_uploaded_file($file_loc,$folder.$ultra_sound_report);

    $CT_report = $_FILES['CT_report']['name'];
    $file_loc = $_FILES['CT_report']['tmp_name'];
    $folder="../uploads/";
    move_uploaded_file($file_loc,$folder.$CT_report);

    $MRI_report = $_FILES['MRI_report']['name'];
    $file_loc = $_FILES['MRI_report']['tmp_name'];
    $folder="../uploads/";
    move_uploaded_file($file_loc,$folder.$MRI_report);

    $ECG_report = $_FILES['ECG_report']['name'];
    $file_loc = $_FILES['ECG_report']['tmp_name'];
    $folder="../uploads/";
    move_uploaded_file($file_loc,$folder.$ECG_report);

    $sql = "UPDATE investigation set clinic_no_type = '$clinic_no_type', clinic_no = '$clinic_no', BHT_no = '$BHT_no', admission_date = '$admission_date', blood_group = '$blood_group', x_ray = '$x_ray', echo = '$echo', ultra_sound = '$ultra_sound', CT = '$CT', MRI = '$MRI', fbc_report = '$fbc_report', x_ray_report = '$x_ray_report', echo_report = '$echo_report', ultra_sound_report = '$ultra_sound_report', CT_report = '$CT_report', MRI_report = '$MRI_report', ECG_report = '$ECG_report' WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
        $alert = "Record updated.";
    } else {
        $alert = "An error occurred while updating the record.";
    }
    ?>
    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "investigation.php"
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
    $sql = "SELECT clinic_no, clinic_no_type, BHT_no, admission_date, blood_group, x_ray, echo, ultra_sound, CT, MRI, fbc_report, x_ray_report, echo_report, ultra_sound_report, CT_report, MRI_report, ECG_report from investigation WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $clinic_no_type = $row['clinic_no_type'];
        $clinic_no =$row['clinic_no'];
        $BHT_no = $row['BHT_no'];
        $admission_date = $row['admission_date'];
        $blood_group = $row['blood_group'];
        $x_ray =$row['x_ray'];
        $echo = $row['echo'];
        $ultra_sound = $row['ultra_sound'];
        $CT = $row['CT'];
        $MRI = $row['MRI'];
        $fbc_report = $row['fbc_report'];
        $x_ray_report = $row['x_ray_report'];
        $echo_report = $row['echo_report'];
        $ultra_sound_report = $row['ultra_sound_report'];
        $CT_report = $row['CT_report'];
        $MRI_report = $row['MRI_report'];
        $ECG_report = $row['ECG_report'];

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
        <li> <a href="../Investigation/investigation.php">Investigation</a></li>

        <li class="font1" class="active">Edit Investigation</li>
    </ol>

    <h3 align="center">Edit Investigation</h3>

</div>
<HR />
<div>
    <!--Start Table-->
    <form name="editInvestigation" method="post" action="editRecord.php"
          enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="row">
            <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
            <div class="col-lg-1 col-sm-1 col-md-1">
                Clinic NO:
            </div>
            <div class="col-lg-1 col-sm-1 col-md-1">

                <input name="clinic_no_type" id="mdcc" type="radio" <?php echo ($clinic_no_type == "MDCC") ? "checked=\"checked\"" : ""; ?> value="MDCC"/> MDCC
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="">
                    <input name="clinic_no_type" id="psc" type="radio" <?php echo ($clinic_no_type == "PSC") ? "checked=\"checked\"" : ""; ?> value="PSC"/> PSC

                    <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                </div>

            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="clinic_no" id="clinic_no" value="<?php echo $clinic_no; ?>" placeholder="Clinic NO" class="form-control"/>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                BHT NO :
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3">
                <input name="BHT_no" id="BHT_no" placeholder="BHT NO" value="<?php echo $BHT_no; ?>" class="form-control"/>

            </div>
        </div>

        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>
        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>

</div>

<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>


<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>




    <div class="col-lg-2 col-sm-2 col-md-2">
        Clinic/Admission Date :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input name="admission_date" id="admission_date" value="<?php echo $admission_date; ?>" type="date" placeholder="DOB" class="form-control"/>

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
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-4 col-sm-4 col-md-4">
        <b> <u> Blood Investigations </u></b>:
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-4 col-sm-4 col-md-4">
        Blood Group :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-4 col-sm-4 col-md-4">
        <input name="blood_group" id="blood_group" type="radio"  <?php echo ($blood_group == "A+") ? "checked=\"checked\"" : ""; ?> value="A+"/>     A+ &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="blood_group" id="blood_group" type="radio"  <?php echo ($blood_group == "A-") ? "checked=\"checked\"" : ""; ?> value="A-"/>     A- &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="blood_group" id="blood_group" type="radio"  <?php echo ($blood_group == "B+") ? "checked=\"checked\"" : ""; ?> value="B+"/>     B+ &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="blood_group" id="blood_group" type="radio"  <?php echo ($blood_group == "B-") ? "checked=\"checked\"" : ""; ?> value="B-"/>     B- &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="blood_group" id="blood_group" type="radio"  <?php echo ($blood_group == "AB+") ? "checked=\"checked\"" : ""; ?> value="AB+"/>    AB+ &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="blood_group" id="blood_group" type="radio"  <?php echo ($blood_group == "AB-") ? "checked=\"checked\"" : ""; ?> value="AB-"/>    AB- &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="blood_group" id="blood_group" type="radio"  <?php echo ($blood_group == "O+") ? "checked=\"checked\"" : ""; ?> value="O+"/>     O+ &nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
        <input name="blood_group" id="blood_group" type="radio"  <?php echo ($blood_group == "O-") ? "checked=\"checked\"" : ""; ?> value="O-"/>     O- &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        FBC :
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input name="fbc_report" id="fbc_report" value="<?php echo $fbc_report; ?>" type="file"
               placeholder="Upload Pdf" class="form-control" />
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>

<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <b> <u> Imageing </u></b>:
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <b> <u> Report </u></b>:
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2col-sm-2 col-md-2">
        <input type="checkbox" name="x_ray" <?php echo ($x_ray == "1") ? "checked=\"checked\"" : ""; ?> value="1"/> X-Ray

    </div>
    <div class="col-lg-2col-sm-2 col-md-2">
        <input name="x_ray_report" id="x_ray_report" value="<?php echo $x_ray_report; ?>" type="file"
               placeholder="Image" class="form-control" />

    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>

<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input type="checkbox" name="echo" value="1" <?php echo ($echo == "1") ? "checked=\"checked\"" : ""; ?>/> Echo

    </div>
    <div class="col-lg-2col-sm-2 col-md-2">
        <input name="echo_report" id="echo_report" value="<?php echo $echo_report; ?>" type="file"
               placeholder="Image" class="form-control" />

    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>

<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input type="checkbox" name="ultra_sound" <?php echo ($ultra_sound == "1") ? "checked=\"checked\"" : ""; ?> value="1"/> Ultra Sound

    </div>
    <div class="col-lg-2col-sm-2 col-md-2">
        <input name="ultra_sound_report" id="ultra_sound_report" value="<?php echo $ultra_sound_report; ?>" type="file"
               placeholder="Image" class="form-control" />

    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>

<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input type="checkbox" name="CT" value="1" <?php echo ($CT == "1") ? "checked=\"checked\"" : ""; ?>/> CT

    </div>
    <div class="col-lg-2col-sm-2 col-md-2">
        <input name="CT_report" id="CT_report" value="<?php echo $CT_report; ?>" type="file"
               placeholder="Image" class="form-control" />

    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>

<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input type="checkbox" name="MRI" value="1" <?php echo ($MRI == "1") ? "checked=\"checked\"" : ""; ?>/> MRI

    </div>
    <div class="col-lg-2col-sm-2 col-md-2">
        <input name="MRI_report" id="MRI_report" value="<?php echo $MRI_report; ?>" type="file"
               placeholder="Image" class="form-control" />

    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
</div>

<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
<div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>

<div class="row">
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <b> <u> ECG </u></b>:
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">
        <input name="ECG_report" id="ECG_report" value="<?php echo $ECG_report; ?>" type="file"
               placeholder="Image" class="form-control" />
    </div>
    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
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

