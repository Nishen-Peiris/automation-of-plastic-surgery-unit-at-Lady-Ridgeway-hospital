<?php

//To start the session and if not login to the system, redirect to the index page 
include("../../common/session_handling.php");
//Session Destroy
session_destroy();
header("refresh:2, url=index.php");

?>
   <head> 
        <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
        <link rel="icon" href="../../images/title.png" />
        <link rel="stylesheet" type="text/css" 
              href="../../bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../../css/mainlayout.css" />
          
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
                
                &nbsp;</div>
            <div id="contents">
                <div>
                   
                    <h3 align="center">Logout</h3>
                    
     <p align="center">You have successfully logout from the System</p>
     <p align="center"><img src="../../images/del.jpg" />
     </p>
     <p align="center"><a href="../login/index.php">Login</a></p>
     
     
                    
                </div>
                
                
                
            </div>      
            <div id="footer">
                
               <?php include '../../common/footer.php'; ?> 
            </div>            
        </div>
        
    </body>
    
</html>
