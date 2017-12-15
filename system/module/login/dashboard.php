<?php

//To start the session and if not login to the system, redirect to the index page 
include("../../common/session_handling.php");

$role_id = $_SESSION['psc_user_role_id']
?>
<html>
<head>
    <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
    <link rel="icon" href="../../images/title.png"/>
    <link rel="stylesheet" type="text/css"
          href="../../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/mainlayout.css"/>

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
                <li class="font1" class="active">Dashboard</li>
            </ol>
            <h3 align="center" style="color: #181865;"><?php echo $_SESSION['psc_user_role_name']; ?> Dashboard</h3>
        </div>
        <HR/>
        <br/>
        <!-- Start User Rights -->
        <div>
            <?php
            //Start Admin
            $role_id = 1; // all roles can access this page
            if ($role_id == 1) { ?>
            <div class="row">

                <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <p class="ali">
                        <a class="font" href="../registration/registration.php">
                            <img src="../../images/registration.png"
                                 width="75" height="75"/>
                            <br/>
                            Registration
                        </a>
                    </p>
                    &nbsp;
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <p class="ali">
                        <a class="font" href="../surgery/surgery.php">
                            <img src="../../images/surgery.png"
                                 width="75" height="75"/>
                            <br/>
                            Surgery Management
                        </a>
                    </p>

                    &nbsp;
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-lg-2 col-md-2 col-sm-2">

                    <p class="ali">
                        <a class="font" href="../Investigation/investigation.php">
                            <img src="../../images/investigation.png"
                                 width="75" height="75"/>
                            <br/>
                            Investigation
                        </a>
                    </p>
                    &nbsp;
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>

                <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>
            </div>
            <div style="clear:both">&nbsp;</div>
            <div style="clear:both">&nbsp;</div>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>

                <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>

                <div class="col-lg-2 col-md-2 col-sm-2">
                    <p class="ali">
                        <a class="font" href="../history/history.php">
                            <img src="../../images/history.png"
                                 width="75" height="75"/>
                            <br/>
                            History
                        </a>
                    </p>

                    &nbsp;
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <p class="ali">
                        <a class="font" href="../reports/reports.php">
                            <img src="../../images/title.png"
                                 width="75" height="75"/>
                            <br/>
                            Reports
                        </a>
                    </p>

                    &nbsp;
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2">
                    <p class="ali">
                        <a class="font" href="../examination/examination.php">
                            <img src="../../images/examination.png"
                                 width="75" height="75"/>
                            <br/>
                            Examination
                        </a>
                    </p>

                    &nbsp;
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>
            </div>
            <div style="clear:both">&nbsp;</div>
            <div style="clear:both">&nbsp;</div>
            <div class="row">

                <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>
                <div class="col-lg-2 col-md-2 col-sm-2">

                    &nbsp;
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <p class="ali">
                        <a class="font" href="../user/userManagement.php">
                            <img src="../../images/userManagement.png"
                                 width="75" height="75"/>
                            <br/>
                            User Management
                        </a>
                    </p>

                    &nbsp;
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                <div class="col-lg-2 col-md-2 col-sm-2">


                    &nbsp;
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>

                <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div>
            <div class="col-lg-2 col-md-2 col-sm-2">

                &nbsp;
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>


            <div style="clear:both">&nbsp;</div>

            <div style="clear:both">&nbsp;</div>


        </div>
        <?php

        } ?>
        <!-- End User Rights -->

    </div>
    <div id="footer">

        <?php include '../../common/footer.php'; ?>
    </div>
</div>

</body>

</html>

