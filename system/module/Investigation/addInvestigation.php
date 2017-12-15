<html>
    <head> 
        <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
        <link rel="icon" href="../../images/title.png" />
        <link rel="stylesheet" type="text/css" 
              href="../../bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" 
          href="../../css/mainlayout.css" />
     
    <script type="text/javascript" src="../../js/jquery-1.8.3.min.js">
     
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
               <?php include '../../common/header.php'; ?>      
              
            </div>
            <div id="navi">
                <?php include '../../common/navi.php'; ?>
                
                &nbsp;</div>
            <div id="contents">
                <div>
                    <ol class="breadcrumb">
                                <li>
     <a href="../login/dashboard.php">
         Dashboard </a></li>
         <li> <a href="../Investigation/investigation.php">Investigation</a></li>
        
         <li class="font1" class="active">Add Investigation</li>
                    </ol>
                   
                    <h3 align="center">Add Investigation</h3>
                    
                </div>
                <HR />
                <div>
                   <!--Start Table-->
                   <form name="addInvestigation" method="post" action="investiationProcess.php"
                         enctype="multipart/form-data">
                    <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1"> 
                      Clinic NO:
                       </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">
                           
                           <input name="clinic_no_type" id="mdcc" type="radio" value="MDCC"/> MDCC
                           <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                           <div class="">
                           <input name="clinic_no_type" id="psc" type="radio" value="PSC"/> PSC
                           
                          <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                           </div>
                           
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="clinic_no" id="clinic_no" placeholder="Clinic NO" class="form-control"/>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                      BHT NO :
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <input name="BHT_no" id="BHT_no" placeholder="BHT NO" class="form-control"/>
                           
                       </div>
                       </div>
                       
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div> 
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                   </div>
                
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      
                       
                   <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div> 
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       
                         
                       
                   
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                       Clinic/Admission Date :
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <input name="admission_date" id="admission_date" type="date" placeholder="DOB" class="form-control"/>
                           
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                   </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       
                         <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                       <div class="col-lg-4 col-sm-4 col-md-4"> 
                           <b> <u> Blood Investigations </u></b>:
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                     <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                       <div class="col-lg-4 col-sm-4 col-md-4"> 
                           Blood Group :
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                     <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                     <div class="col-lg-4 col-sm-4 col-md-4"> 
                           <input name="blood_group" id="blood_group" type="radio" value="A+"/>     A+ &nbsp;&nbsp;&nbsp;&nbsp;
                           <input name="blood_group" id="blood_group" type="radio" value="A-"/>     A- &nbsp;&nbsp;&nbsp;&nbsp;
                           <input name="blood_group" id="blood_group" type="radio" value="B+"/>     B+ &nbsp;&nbsp;&nbsp;&nbsp;
                           <input name="blood_group" id="blood_group" type="radio" value="B-"/>     B- &nbsp;&nbsp;&nbsp;&nbsp;
                           <input name="blood_group" id="blood_group" type="radio" value="AB+"/>    AB+ &nbsp;&nbsp;&nbsp;&nbsp;
                           <input name="blood_group" id="blood_group" type="radio" value="AB-"/>    AB- &nbsp;&nbsp;&nbsp;&nbsp;
                           <input name="blood_group" id="blood_group" type="radio" value="O+"/>     O+ &nbsp;&nbsp;&nbsp;&nbsp;
                           <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                           <input name="blood_group" id="blood_group" type="radio" value="O-"/>     O- &nbsp;&nbsp;&nbsp;&nbsp;
                       </div>
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                           FBC :
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                           <input name="fbc_report" id="fbc_report" type="file"
                                  placeholder="Upload Pdf" class="form-control" />
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                     
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                           <b> <u> Imageing </u></b>:
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                           <b> <u> Report </u></b>:
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                   <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                     <div class="col-lg-2col-sm-2 col-md-2"> 
                            <input type="checkbox" name="x_ray" value="1"/> X-Ray
                            
                       </div>
                       <div class="col-lg-2col-sm-2 col-md-2"> 
                            <input name="x_ray_report" id="x_ray_report" type="file"
                                  placeholder="Image" class="form-control" />
                            
                       </div>
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                           
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                     <div class="col-lg-2 col-sm-2 col-md-2"> 
                            <input type="checkbox" name="echo" value="1"/> Echo
                            
                       </div>
                       <div class="col-lg-2col-sm-2 col-md-2"> 
                            <input name="echo_report" id="echo_report" type="file"
                                  placeholder="Image" class="form-control" />
                            
                       </div>
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                           
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                     <div class="col-lg-2 col-sm-2 col-md-2"> 
                            <input type="checkbox" name="ultra_sound" value="1"/> Ultra Sound
                            
                       </div>
                       <div class="col-lg-2col-sm-2 col-md-2"> 
                            <input name="ultra_sound_report" id="ultra_sound_report" type="file"
                                  placeholder="Image" class="form-control" />
                            
                       </div>
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                           
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                     <div class="col-lg-2 col-sm-2 col-md-2"> 
                            <input type="checkbox" name="CT" value="1"/> CT
                            
                       </div>
                       <div class="col-lg-2col-sm-2 col-md-2"> 
                            <input name="CT_report" id="CT_report" type="file"
                                  placeholder="Image" class="form-control" />
                            
                       </div>
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                           
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                     <div class="col-lg-2 col-sm-2 col-md-2"> 
                            <input type="checkbox" name="MRI" value="1"/> MRI
                            
                       </div>
                       <div class="col-lg-2col-sm-2 col-md-2"> 
                            <input name="MRI_report" id="MRI_report" type="file"
                                  placeholder="Image" class="form-control" />
                            
                       </div>
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                           
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                    
                      <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                           <b> <u> ECG </u></b>:
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                          <input name="ECG_report" id="ECG_report" type="file"
                                  placeholder="Image" class="form-control" />  
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                          <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>      
                         <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                           &nbsp;
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <button type="submit" class="btn btn-primary">
                               <i class="glyphicon glyphicon-save"></i>
                               Save</button>
                       </div>
                     
                       <div class="col-lg-2 col-sm-2 col-md-2"> 
                           &nbsp;
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                           <button type="reset" class="btn btn-primary">
                               <i class="glyphicon glyphicon-refresh"></i>
                               Reset</button>
                           
                       </div>
                       
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                       
                       
                       
                   </div>
                       
                   </form>  
                    
                    <!--End-->
                    
                    
                    
                </div>
                
                
                
                
                
             </div>
                   
                
                 
                
                
                
                
                
                            <div id="footer">
                
               <?php include '../../common/footer.php'; ?> 
            </div>            
       
        
    </body>
    
</html>

