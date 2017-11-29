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
         <li> <a href="../history/history.php">History</a></li>
        
         <li class="font1" class="active">Add History</li>
                    </ol>
                   
                    <h3 align="center">Add <small class="font1">History</small></h3>
                    
                </div>
                <HR />
                <div>
                   <!--Start Table-->
                   <form name="addteacher" method="post" action="../controller/teachercontroller.php?action=add" 
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
                           <input name="p_clinic" id="psc" type="radio" value="PSC"/> PSC
                           
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
                           <input name="t_fname" id="t_fname" placeholder="BHT NO" class="form-control"/>
                           
                       </div>
                       </div>
                       
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div> 
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                   </div>
                
                       <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                    <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Presenting Complain :
                     
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                       <input name="pc_history" id="pc_history" placeholder="Comment" class="form-control"/>
                       </div>
                       
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                          Past Medical History :
                       </div>  
                         <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="pm_history" id="pm_history" placeholder="Comment" class="form-control"/>
                        </div>
                       
                        
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>  
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Past Surgical History :
                     
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                       <input name="ps_history" id="ps_history" placeholder="Comment" class="form-control"/>
                       </div>
                       
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                          Allergic History :
                       </div>  
                         <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="a_history" id="a_history" placeholder="Comment" class="form-control"/>
                        </div>
                       
                        
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div>
                           
                     <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="row">
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Drug History :
                     
                       </div>
                       <div class="col-lg-3 col-sm-3 col-md-3">
                       <input name="dr_history" id="dr_history" placeholder="Comment" class="form-control"/>
                       </div>
                       
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                          Diet History :
                       </div>  
                         <div class="col-lg-3 col-sm-3 col-md-3">
                        <input name="di_history" id="di_history" placeholder="Comment" class="form-control"/>
                        </div>
                       
                        
                        <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                           </div> 
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div> 
                   <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <b><u>Birth History :</u></b>    
                       </div> 
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                         
                       
                   
                       <div class="col-lg-1 col-sm-1 col-md-1"> 
                       
                       </div>
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <b><u>Immunization History :</u></b>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                   </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       
                         <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Birth Weight :
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <input name="b_weight" id="b_weight" placeholder="Birth weight" class="form-control"/>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                         <input type="checkbox" name="immunization" value="BCH"/> BCH <br/>
                         <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                         <input type="checkbox" name="immunization" value="Penta I"/> Penta I + OPV I
                       </div>
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                    
                      <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Delivery :
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                            <input name="delivery" id="term" type="radio" value="Term"/> Term &nbsp;&nbsp;
                            <input name="delivery" id="pre_term" type="radio" value="Pre Term"/> Pre Term
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                         <input type="checkbox" name="immunization" value="Penta II"/> Penta II + OPV II + IPV <br/>
                         <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                         <input type="checkbox" name="immunization" value="Penta III"/> Penta III + OPV III
                       </div>
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     
                     <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Mode of Delivery :
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                            <input name="m_delivery" id="vaginal" type="radio" value="Vaginal"/> Vaginal Delivery
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                            <div class="">    
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name ="v_delivary" id="normal" value="Normal"/> Normal <br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name ="v_delivary" id="normal" value="Instrumental"/> Instrumental
                            </div>
                            <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                            <input name="m_delivery" id="cesarean" type="radio" value="Cesarean"/>Cesarean Delivery
                            
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           
                         <input type="checkbox" name="immunization" value="MMR I"/> MMR I <br/>
                         <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                         <input type="checkbox" name="immunization" value="JE"/> JE <br/>
                         <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                         <input type="checkbox" name="immunization" value="DTP"/> DTP + OPV  IV <br/>
                         <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                          <input type="checkbox" name="immunization" value="MMR II"/> MMR II 
                       </div>
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
                     <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                 <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Post natal Complication :
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                         <input name="p_complication" id="b_weight" placeholder="Post natel Complications" class="form-control"/>   
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                         <input type="checkbox" name="immunization" value="DT "/> DT + OPV V <br/>
                         <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                         <input type="checkbox" name="immunization" value="Adult Tetanus Toxid "/> Adult Tetanus Toxid
                       </div>
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <b><u>Other History :</u></b>    
                       </div> 
                       <div class="col-lg-1 col-sm-1 col-md-1">&nbsp; </div>
                       
                         
                       
                   
                       <div class="col-lg-1 col-sm-1 col-md-1"> 
                       
                       </div>
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <b><u>Developmental History :</u></b>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                   </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                     <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                  <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Diet History :
                     
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       <input name="d_history" id="d_history" placeholder="Comment" class="form-control"/>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                          <input type="checkbox" name="developmental" value="Gross Motor "/> Gross Motor
                       </div>  
                         <div class="col-lg-2 col-sm-2 col-md-2">
                          <input name="grossmotor" id="g_normal" type="radio" value="g_normal"/> Normal  &nbsp;&nbsp;&nbsp;
                        <input name="grossmotor" id="g_abnormal" type="radio" value="g_abnormal"/> Abnormal  &nbsp;&nbsp;&nbsp;
                        </div>
                       
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Post Medical History :
                     
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       <input name="pm_history" id="pm_history" type="radio" value="YES"/> YES  &nbsp;&nbsp;&nbsp;
                        <input name="pm_history" id="pm_history" type="radio" value="NO"/> NO  &nbsp;&nbsp;&nbsp; <br/>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <input name="pm_history" id="pm_history" placeholder="Comment" class="form-control"/>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                          <input type="checkbox" name="developmental" value="Fine Motor "/> Fine Motor and Vision
                       </div>  
                         <div class="col-lg-2 col-sm-2 col-md-2">
                        <input name="finemotor" id="f_normal" type="radio" value="f_normal"/> Normal  &nbsp;&nbsp;&nbsp;
                        <input name="finemotor" id="f_abnormal" type="radio" value="f_abnormal"/> Abnormal  &nbsp;&nbsp;&nbsp;
                        </div>
                       
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Post Surgical History :
                     
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       <input name="ps_history" id="ps_history" type="radio" value="YES"/> YES  &nbsp;&nbsp;&nbsp;
                        <input name="ps_history" id="ps_history" type="radio" value="NO"/> NO  &nbsp;&nbsp;&nbsp; <br/>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <input name="ps_history" id="ps_history" placeholder="Comment" class="form-control"/>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                          <input type="checkbox" name="developmental" value="Language and Speech "/> Language and Speech
                       </div>  
                         <div class="col-lg-2 col-sm-2 col-md-2">
                        <input name="language" id="l_normal" type="radio" value="l_normal"/> Normal  &nbsp;&nbsp;&nbsp;
                        <input name="language" id="l_abnormal" type="radio" value="l_abnormal"/> Abnormal  &nbsp;&nbsp;&nbsp;
                        </div>
                       
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Allergy History :
                     
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       <input name="a_history" id="a_history" type="radio" value="YES"/> YES  &nbsp;&nbsp;&nbsp;
                        <input name="a_history" id="a_history" type="radio" value="NO"/> NO  &nbsp;&nbsp;&nbsp; <br/>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <input name="a_history" id="a_history" placeholder="Comment" class="form-control"/>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                          <input type="checkbox" name="developmental" value="Emotional and Behavior "/> Emotional and Behavior
                       </div>  
                         <div class="col-lg-2 col-sm-2 col-md-2">
                        <input name="emotional" id="e_normal" type="radio" value="e_normal"/> Normal  &nbsp;&nbsp;&nbsp;
                        <input name="emotional" id="e_abnormal" type="radio" value="e_abnormal"/> Abnormal  &nbsp;&nbsp;&nbsp;
                        </div>
                       
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Drug History :
                     
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       <input name="d_history" id="a_history" type="radio" value="YES"/> YES  &nbsp;&nbsp;&nbsp;
                        <input name="d_history" id="a_history" type="radio" value="NO"/> NO  &nbsp;&nbsp;&nbsp; <br/>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <input name="d_history" id="d_history" placeholder="Comment" class="form-control"/>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                          
                       </div>  
                         <div class="col-lg-2 col-sm-2 col-md-2">
                        
                        </div>
                       
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
                      <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                      <div class="row">
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                       Family History :
                     
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">
                           <input type="checkbox" name="family" value="Consanguineous "/> Consanguineous <br/>
                       <input name="f_history" id="f_history" type="radio" value="YES"/> YES  &nbsp;&nbsp;&nbsp;
                        <input name="f_history" id="f_history" type="radio" value="NO"/> NO  &nbsp;&nbsp;&nbsp; <br/>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                        <input type="checkbox" name="family" value="Familiar diseases "/> Familiar Diseases <br/>
                       <input name="f_history" id="f_history" type="radio" value="YES"/> YES  &nbsp;&nbsp;&nbsp;
                        <input name="f_history" id="f_history" type="radio" value="NO"/> NO  &nbsp;&nbsp;&nbsp; <br/>
                        <div class="col-lg-12 col-sm-12 col-md-12"> &nbsp;</div>
                       <input name="f_history" id="f_history" placeholder="Comment" class="form-control"/>
                       </div>
                       <div class="col-lg-2 col-sm-2 col-md-2">&nbsp;</div>
                          
                       
                       <div class="col-lg-2 col-sm-2 col-md-2">
                          
                       </div>  
                         <div class="col-lg-2 col-sm-2 col-md-2">
                        
                        </div>
                       
                        
                        <div class="col-lg-2 col-sm-2 col-md-2">&nbsp; </div>
                           </div>
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


