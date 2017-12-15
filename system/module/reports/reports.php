<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 12/15/17
 * Time: 5:35 AM
 */
?>

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
                <li class="active"><font color="#096dac">Reports</font></li>
            </ol>
            <h3 align="center">Reports</h3>
        </div>
        <HR/>
        <div class="row" style="padding-left: 20px">
            <!-- Filter permanently registered patients by district -->
            <form name="form1">
                Permanently registered patients of
                <select id="district" name="district">
                    <option value="Ampara" selected="selected">Ampara</option>
                    <option value="Anuradhapura	">Anuradhapura</option>
                    <option value="Badulla">Badulla</option>
                    <option value="Batticaloa">Batticaloa</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Galle">Galle</option>
                    <option value="Gampaha">Gampaha</option>
                    <option value="Hambantota">Hambantota</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Kegalle">Kegalle</option>
                    <option value="Kilinochchi">Kilinochchi</option>
                    <option value="Kurunegala">Kurunegala</option>
                    <option value="Mannar">Mannar</option>
                    <option value="Matale">Matale</option>
                    <option value="Matara">Matara</option>
                    <option value="Monaragala">Monaragala</option>
                    <option value="Mullaitivu">Mullaitivu</option>
                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                    <option value="Polonnaruwa">Polonnaruwa</option>
                    <option value="Puttalam">Puttalam</option>
                    <option value="Ratnapura">Ratnapura</option>
                    <option value="Trincomalee">Trincomalee</option>
                    <option value="Vavuniya">Vavuniya</option>
                </select>
                district |
                <button type="button" onclick="executeQuery1()">Show</button>
            </form>

            <div id="results">

            </div>
        </div>
    </div>
    <div id="footer">
        <?php include '../../common/footer.php'; ?>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
    // Function: filter permanently registered patients by district
    function executeQuery1() {
        var district = document.form1.district.value;

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("results").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "queries/1.php?district=" + district, true);
        xmlhttp.send();
    }
</script>