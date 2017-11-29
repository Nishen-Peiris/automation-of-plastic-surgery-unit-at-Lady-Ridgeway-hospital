

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
        <link rel="icon" href="../../../images/title.png" />
        <link rel="stylesheet" type="text/css" 
              href="../../../bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../../../css/mainlayout.css" />
          
    <script type="text/javascript" src="../../../js/jquery-1.8.3.min.js">
     
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
     <a href="../login/dashboard.php">               
         Dashboard </a></li>
         <li> <a href="../../surgery/surgery.php">Surgery</a></li>
         <li class="active"><font color ="#096dac" >Surgery</font></li>
                    </ol> 
    <h3 align="center">Surgery</h3>
                    
                </div>
                <HR />
                
                <div>
                    <div class="row" style="padding-left: 20px">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                           
                            
                            
                            <a href="../../surgery/surgery information/addSurgeryInformation.php">
                                <button class="btn btn-primary" 
                                        type="button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    Add                                  
                                </button>                              
                                
                            </a>       
                            
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <form action="../controller/teachercontroller.php?action=search"
                                  method="post">
                            <h4>Search : 
                                <input type="text" name="search" id="search"
                                 class="input-sm"      placeholder="Keyword" />
                                <button type="submit" name="sub" 
                                        class="btn btn-primary input-sm">
                                    <i class="glyphicon glyphicon-search"></i>
                                       Search
                                                                      
                                </button>                          
                            </h4>
                            </form>
                        </div>
                    </div>
                    
                    
                    <!--End-->
                    <!--start table-->
                    
                    <div class="row">
                        <div class="col-lg-2 col-sm-2 col-md-2"> &nbsp;</div>   
                        <div class="col-lg-2 col-sm-2 col-md-2"> Name</div>  
                        <div class="col-lg-2 col-sm-2 col-md-2"> Email</div>
                        <div class="col-lg-2 col-sm-2 col-md-2"> Role</div>  
                        <div class="col-lg-2 col-sm-2 col-md-2"> NIC</div>  
                        <div class="col-lg-2 col-sm-2 col-md-2"> &nbsp;</div>                          
                    </div>  
                        <!-- start 2nd row-->
                                              
                        <div class="row">
                        <div class="col-lg-2 col-sm-2 col-md-2"> 
                           
                            <p align="center">
                                <img src="../../../images/user.png" height="60" width="auto"/></p>
                            
                        </div> 
                        
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">
                                                       
                        </div>  
                        <div class="col-lg-2 col-sm-2 col-md-2">
                            
                        </div>
                        <div class="col-lg-2 col-sm-2 col-md-2">
                            
                        </div>
                        <div class="col-lg-2 col-sm-2 col-md-2">
                            
                        </div> 
                          
                        <div class="col-lg-2 col-sm-2 col-md-2"> 
                            <a href="../controller/teachercontroller.php">
                                <button class="btn btn-success btn-sm">View</button></a>
                           
                            &nbsp;
                        <a href="../controller/teachercontroller.php">
                                <button class="btn btn-success btn-sm">Edit</button></a>
                        
                          &nbsp;
                          
                          
                          <a href="../controller/teachercontroller.php">
                                <button class="btn btn-danger btn-sm">Deactivate</button></a>
                          
                           else 
                          
                          <a href="../controller/teachercontroller.php">
                                <button class="btn btn-primary btn-sm">Activate</button></a>
                          
                          
                        
                        
                        
                        </div>                          
                                </div>  
                        
                                                                          
                         <!--END 2nd row-->   
                          
                              <!--End Table-->    
                              
                              
                              
                              
                              
                </div>
                
            </div>      
            <div id="footer">
                
               <?php include '../../../common/footer.php'; ?> 
            </div>            
        </div>
        
    </body>
    
</html>



