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
         <li> <a href="../../registration/registration.php">Registration</a></li>
         <li class="active"><font color ="#096dac" > Guardian Information </font></li>
                    </ol> 
    <h3 align="center">Guardian Information</h3>
                    
                </div>
                <HR />
                
                <div>
                    <div class="row" style="padding-left: 20px">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                           
                            
                            
                            <a href="../../registration/guardian information/addGuardianInformation.php">
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
                              </div>
                    
                
            </div>     
            <div id="footer">
                
               <?php include '../../../common/footer.php'; ?> 
            </div>            
        </div>
        
    </body>
    
</html>