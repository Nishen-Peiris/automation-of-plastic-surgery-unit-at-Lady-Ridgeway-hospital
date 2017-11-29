
<?php
if(!isset($_SESSION)){
    session_start();
 }
 
 $userinfo=$_SESSION['userinfo'];
 $role_id=$userinfo['role_id'];



?>
<html>
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
                    <ol class="breadcrumb" >
                        <li class ="font1" class="active"  ><a href="../login/dashboard.php">Dashboard</a></li>
                    
                    <li class="active"><font color ="#096dac" >Surgery Information </font></li>
                    </ol> 
                    
                    
                    <h3 align="center">Surgery Information</h3>
                    
                </div>
                <HR /><br />
                <!-- Start User Rights -->
                <div>
                   
                    <div class="row">
                        
                   <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div> 
        <div class="col-lg-2 col-md-2 col-sm-2"> 
            <p class="ali">
                <a class="font" href="pre surgery/preSurgeryInformation.php">
                    <img src="../../images/pre surgery.png" 
                            width="75" height="75" />
                       <br />
                       Pre Surgery
                </a>
            </p>   
                       &nbsp;</div>
                   <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                   <div class="col-lg-2 col-md-2 col-sm-2">
                     
                   <p class="ali">
                       <a  class="font" href="surgery information/surgeryInformation.php">
                           <img src="../../images/surgery.png" 
                            width="75" height="75" />
                       <br />
                      Surgery
                </a>
            </p>   
            &nbsp;</div>
                   <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                   <div class="col-lg-2 col-md-2 col-sm-2">
                       <p class="ali">
                           <a class="font" href="../permanent registration/permanentRegistration.php">
                               <img src="../../images/post surgery.png" 
                            width="75" height="75" />
                       <br />
                       Post Surgery
                </a>
            </p>
                       &nbsp;</div>                  
                   <div class="col-lg-2 col-md-2 col-sm-2">&nbsp;</div> 
                    </div>
                    <div style="clear:both">&nbsp;</div>
                      
                   
                    <div style="clear:both">&nbsp;</div>
                    
                </div>
        </div>
                
                <div id="footer">
                
               <?php include '../../common/footer.php'; ?> 
            </div>
        </div>
    </body>
</html>