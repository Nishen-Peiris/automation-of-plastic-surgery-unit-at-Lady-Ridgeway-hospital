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
         <li><a href="../../login/dashboard.php">Dashboard </a></li>
         <li> <a href="../../registration/registration.php">Registration</a></li>
         <li class="active"><a href="../../registration/guardian information/guardianInformation.php">Guardian Information</a></li>
         <li class="font1" class="active">Add Guardian Information</li>
                    </ol>
                   
                    <h3 align="center">Add <small class="font1">Guardian Information</small></h3>
                    
                </div>
                <HR />
                <div>
                   <!--Start Table-->
                   <form name="addfirsttimepatient" method="post" action="../controller/patientcontroller.php?action=add" 
                         enctype="multipart/form-data">
                   <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                       <div class="col-lg-1 col-sm-1 col-md-1"> 
                      Clinic NO:
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">
                           
                           <input name="p_clinic" id="mdcc" type="radio" value="MDCC"/> MDCC
                           <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                           <div class="">
                           <input name="c_clinic" id="psc" type="radio" value="PSC"/> PSC
                           
                          <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                           </div>
                           
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="p_clincno" id="p_clinicno" placeholder="Clinic NO" class="form-control"/>   
                       </div>
                       
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       BHT NO :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="p_bhtno" id="p_bhtno"  placeholder="BHT NO" class="form-control"/>
                           
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                   </div>
                       
                       
                   
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      
                      
                    <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       Guardian  Name :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="p_name" id="p_name"  placeholder="Guardian Name" class="form-control"/>
                           
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       Address :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="p_name" id="p_name"  placeholder="Address" class="form-control"/>
                           
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                    </div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       
                       <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                      Gender :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="g_gender" id="male" type="radio" value="male"/> Male
                           
                           <input name="g_gender" id="female" type="radio" value="female"/>Female
                       </div>
                         <div class="col-lg-2 col-sm-2 col-md-2"> 
                       Age :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="g_age" id="g_age"  placeholder="Age" class="form-control"/>
                           
                       </div>  
                       
                       
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       </div>
                           <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                            
                            <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       Contact No :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="p_name" id="p_name"  placeholder="Contact No" class="form-control"/>
                           
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       Occupation :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="p_name" id="p_name"  placeholder="Occupation" class="form-control"/>
                           
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                    </div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                         <div class="row">
                       
                       <div class="col-lg-3 col-sm-3 col-md-3"> 
                           &nbsp;
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <button type="submit" class="btn btn-primary">
                               <i class="glyphicon glyphicon-save"></i>
                               Save</button>
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1"> 
                           &nbsp;
                       </div>
                     <div class="col-lg-2 col-sm-2 col-md-2">
                         <button type="edit" class="btn btn-primary">
                               <i class="glyphicon glyphicon-edit"></i>
                               Edit</button>
                           
                       </div>
                       <div class="col-lg-1col-sm-1 col-md-1"> 
                           &nbsp;
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <button type="reset" class="btn btn-primary">
                               <i class="glyphicon glyphicon-refresh"></i>
                               Reset</button>
                           
                       </div>
                       
                       <div class="col-lg-1 col-sm-1 col-md-1">
                        &nbsp; 
                       </div>
                       
                       
                       
                       
                   </div>
                       
                   </form>  
                    
                    <!--End-->
                    
                    
                    
                </div>
                
                
                
                
                
             </div>
                   
                
            </div>     
                
                
                
                
                
                            <div id="footer">
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
               <?php include '../../../common/footer.php'; ?> 
            </div>            
       
        
    </body>
    
</html>

