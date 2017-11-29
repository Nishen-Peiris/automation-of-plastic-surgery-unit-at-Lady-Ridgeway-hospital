<?php
//To start the session
if (!isset($_SESSION)) {
    session_start();
}

//Session Handling
if ($_SESSION['psc_session_id'] == "") {
    $msg = "Please Login";
    header("Location:../login/index.php?msg=$msg");
}


//Session Handling
if (isset($_SESSION)) {
    if ($_SESSION['psc_session_id'] == "") {
        $msg = "Please Login";
        header("Location:../login/index.php?msg=$msg");
    }
}