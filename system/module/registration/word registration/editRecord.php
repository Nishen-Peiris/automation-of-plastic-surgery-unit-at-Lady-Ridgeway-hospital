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
    $BHT_no = $_POST['BHT_no'];
    $patient_name = $_POST['patient_name'];
    $DOB = $_POST['DOB'];
    $age = $_POST['age'];
    $tp_number = $_POST['tp_number'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];


    $sql = "UPDATE word_registration set BHT_no = '$BHT_no', patient_name = '$patient_name', DOB = '$DOB', age = '$age', tp_number = '$tp_number', gender = '$gender', address = '$address' WHERE id = '$id'";
    if ($conn->query($sql) == TRUE) {
        $alert = "Record updated.";
    } else {
        $alert = "An error occurred while updating the record.";
    }
    ?>
    <script type="text/javascript">
        window.alert("<?php echo $alert; ?>");
        window.location.href = "wordRegistration.php"
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
    $sql = "SELECT BHT_no, patient_name, DOB, age, tp_number, gender, address from word_registration WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $BHT_no = $row['BHT_no'];
        $patient_name = $row['patient_name'];
        $DOB = $row['DOB'];
        $age = $row['age'];
        $tp_number = $row['tp_number'];
        $gender = $row['gender'];
        $address = $row['address'];


    } else {
        $conn->close();
        die();
    }
}
?>
<html>
<head>
    <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
    <link rel="icon" href="../../../images/title.png" />
    <link rel="stylesheet" type="text/css"
          href="../../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css"
          href="../../../css/mainlayout.css" />

    <script type="text/javascript" src="../../../js/jquery-1.8.3.min.js">

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
        <?php include '../../../common/header.php'; ?>

    </div>
    <div id="navi">
        <?php include '../../../common/navi.php'; ?>

        &nbsp;</div>
    <div id="contents">
        <div>
            <ol class="breadcrumb">
                <li>
                    <a href="../../login/dashboard.php">
                        Dashboard </a></li>
                <li> <a href="../../registration/registration.php">Registration</a></li>
                <li class="active"><a href="../../registration/word registration/wordRegistration.php">Word Registration</a></li>
                <li class="font1" class="active">Edit Word Patient</li>
            </ol>

            <h3 align="center">Edit Word Patient</h3>

        </div>
        <HR />
        <div>
            <!--Start Table-->
            <form name="wordRegistration" method="post" action="editRecord.php"
                  enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        BHT NO :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="BHT_no" id="BHT_no" placeholder="BHT NO" value="<?php echo $BHT_no; ?>" class="form-control"/>

                    </div>

                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Patient Name :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="patient_name" id="patient_name" value="<?php echo $patient_name; ?>" placeholder="Patient Name" class="form-control"/>

                    </div>

                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>




                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>

                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        DOB :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="DOB" id="DOB" type="date" value="<?php echo $DOB; ?>" placeholder="DOB" class="form-control"/>

                    </div>

                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Age :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="age" id="age" placeholder="Age" value="<?php echo $age; ?>" class="form-control"/>

                    </div>

                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>




                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Telephone No :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="tp_number" id="tp_number" value="<?php echo $tp_number; ?>" placeholder="Telephone No" class="form-control"/>

                    </div>

                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Gender :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="gender" id="gender" type="radio" <?php echo ($gender == "male") ? "checked=\"checked\"" : ""; ?> value="male"/> Male
                        <input name="gender" id="gender" type="radio" <?php echo ($gender == "female") ? "checked=\"checked\"" : ""; ?> value="female"/>Female

                    </div>

                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>




                </div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="row">
                    <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        Address :
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="address" id="address" value="<?php echo $address; ?>" placeholder="Address" class="form-control"/>

                    </div>

                    <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                    <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
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


</div>





<div id="footer">

    <?php include '../../../common/footer.php'; ?>
</div>


</body>

</html>