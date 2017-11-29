<html>
<head>
    <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital </title>
    <link rel="icon" href="../../images/title.png"/>
    <link rel="stylesheet" type="text/css"
          href="../../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/layout.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js">

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".username").focus(function () {
                $(".user-icon").css("left", "-48px");
            });
            $(".username").blur(function () {
                $(".user-icon").css("left", "0px");
            });

            $(".password").focus(function () {
                $(".pass-icon").css("left", "-48px");
            });
            $(".password").blur(function () {
                $(".pass-icon").css("left", "0px");
            });
        });
    </script>
    <script type="text/javascript">
        //JQuery Validation
        $(document).ready(function () {
            $("form").submit(function (event) {

                // Empty User Name and Password Validation
                if ($("#username").val() == "" && $("#pass").val() == "") {
                    $("#showmsg").text("Empty User Name and Password");
                    $("#username").focus();
                    event.preventDefault();
                    return false;
                }

                // Empty User Name and Password Validation
                if ($("#username").val() == "") {
                    $("#showmsg").text("Empty User Name");
                    $("#username").focus();
                    event.preventDefault();
                    return false;
                }

                // Empty User Name and Password Validation
                if ($("#pass").val() == "") {
                    $("#showmsg").text("Empty Password");
                    $("#pass").focus();
                    event.preventDefault();
                    return false;
                }
            });
        });

    </script>
</head>
<body>
<div id="main">

    <?php include '../../common/header.php'; ?>


    <div id="navi">&nbsp;</div>
    <div id="contents">
        <div class="login-card">
            <font color="#200">
                <h1><b>Log-in</b></h1>
            </font>
            <p class="alert-danger" id="msg">
                <?php
                //If the user name or password invalid
                if (isset($_REQUEST['msg'])) {
                    //Display the error message
                    echo $_REQUEST['msg'];
                } ?>

            </p>


            <form method="post" action="validate.php">
                <input type="text" name="username" id="username"
                       placeholder="User Name"/>
                <input type="text" name="pass" id="pass"
                       placeholder="Password"/>
                <font color="#f60909" align="center">
                    <h5><i> Please Login</i></h5>
                </font>
                <input type="submit" name="login" value="Login"
                       class="login login-submit"/>
                <font color="#2009f6" align="center">
                    <a href="forgotpassword.php"><h4><i>Forgot Password</i></h4></a>
                </font>

            </form>

        </div>


    </div>
    <div id="footer">

        <?php include '../../common/footer.php'; ?>
    </div>
</div>

</body>

</html>

