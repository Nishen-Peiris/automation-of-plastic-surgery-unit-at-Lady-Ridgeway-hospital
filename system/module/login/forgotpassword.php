<html>
    <head> 
        <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital </title>
        <link rel="icon" href="../../images/title.png" />
        <link rel="stylesheet" type="text/css" 
              href="../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../css/layout.css" />
    <link rel="stylesheet" type="text/css" href="../../css/style.css" /> 
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js">
     
    </script>
    <script type="text/javascript" src="../../js/loginvalidate.js">
    </script>
    </head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="email-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="log" id="log" class="login-form" method="post" action="forgotpasswordprocess.php">

	<!--HEADER-->
    <div id="navi">&nbsp;</div>
            <div id="contents">
                <div class="login-card">
                    <div class="header">
                    <font color="#200">
                    <h1><b>Forgot Password</b></h1>
                    </font>
                    
                    <p align="center">
                       Enter your email address to reset system password, otherwise you can try again. 
                    </p>
                 
            
               <input type="text" name="email" id="email" class="input username"  placeholder="Email Address" required/>
                    </div>
                
               
                    <div class="footer" align='center'>   
                  
                <a href="index.php"><input type="submit" name="login" value="Login"
                                               class="btn btn-lg " /></a>
                <input type="submit" name="reset" value="Reset" class="btn btn-lg"/>
                    </div>
               
                                               
               
                       
               
                    
                </div>
                
                
                
            </div>
    <!--END CONTENT-->
    
    
    <!--FOOTER-->
    <div class="footer" align="center">
    <div id="showmsg">
		<?php 
        //If the user name or password invalid 
        if(isset($_REQUEST['msg'])){
            //Display the error message
            echo base64_decode($_REQUEST['msg']);
        } ?>
        
        &nbsp;</div>
   
    <!--END LOGIN BUTTON-->
    </div>
    <!--END FOOTER-->

</form>

<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->
            <div id="footer">
                
               <?php include '../../common/footer.php'; ?> 
            </div>  
</body>
</html>  