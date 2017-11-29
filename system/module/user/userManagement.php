<?php

//To start the session and if not login to the system, redirect to the index page 
include("../../common/session_handling.php");

$role_id=$_SESSION['psc_user_role_id'];

//data con
require_once("../../common/dbconnection_inc.php"); 
$sql="SELECT * FROM user u, user_role ur,login l, user_title ut WHERE u.user_role_id=ur.user_role_id AND l.user_id=u.user_id AND u.user_title_id=ut.user_title_id ORDER BY u.user_id DESC";
$result=mysqli_query($conn, $sql);
$sql1="SELECT * FROM user u, user_role ur WHERE u.user_role_id=ur.user_role_id "
          . "ORDER BY u.user_id DESC";
 $resultr=mysqli_query($conn, $sql1); 
 $nor=$resultr->num_rows;
 $nopage=ceil($nor/10);
?>
 
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
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<script type="text/javascript" src="../js/check.js">
</script>

<script type="text/javascript">
function searchUsers(str)
{
var xmlhttp;
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
    document.getElementById("show1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","searchUsers.php?id="+str,true);
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
         <li> <a href="../user/userManagement.php">User Management</a></li>
         
                    </ol> 
    <h3 align="center">User Management</h3>
                    
                </div>
                <HR />
                
                
                    <div class="row" style="padding-left: 20px">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                           
                            
                            
                            <a href="../user/addUser.php">
                                <button class="btn btn-primary" 
                                        type="button">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    Add                                  
                                </button>                              
                           
                            </a>       
                            
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <form action="searchUsers.php?action=search"
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
             
                    
                   
        

  
    <div><p style="color:#390; font-size:16px; font-style:italic; ">
    <?php if(isset($_REQUEST['msg'])){
			echo $_REQUEST['msg'];
		}
    ?>
            &nbsp;</p></div>
            <div class="row">        
            
                <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div>    
            
    <div class="col-lg-10 col-sm-10 col-md-6" id="show1">
      <table width="100%" border="1" cellspacing="5"class="table table-hover"  id="table_id">
      	<thead>
        <tr style="background:#269abc">
          <th width="7%" scope="col"><strong>User ID</strong></th>
          <th width="10%" scope="col"><strong>User Name</strong></th>
          <th width="5%" scope="col"><strong>Title</strong></th>
          <th width="14%" scope="col"><strong>Name</strong></th>
          <th width="6%" scope="col"><strong>Mobile No 1</strong></th>
          <th width="6%" scope="col"><strong>Mobile No 2</strong></th>
          <th width="6%" scope="col"><strong>Home</strong></th>
          <th width="14%" scope="col"><strong>Email</strong></th>
          <th width="12%" scope="col"><strong>User Role</strong></th>
          <th width="20%" scope="col"><strong>Action</strong></th>
        </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_array($result)){
			?>
        <tr>
          <td> <?php echo $row['user_id']; ?> &nbsp; </td>
          <td> <?php echo $row['username']; ?> &nbsp;</td>
          <td> <?php echo $row['user_title_name']; ?> &nbsp;</td>
          <td> <?php echo $row['flname']; ?> &nbsp;</td>
          <td> <?php echo $row['mobile_no_1']; ?> &nbsp;</td>
          <td> <?php echo $row['mobile_no_2']; ?> &nbsp;</td>
          <td> <?php echo $row['home']; ?> &nbsp;</td>
          <td> <?php echo $row['email']; ?> &nbsp;</td>
          <td> <?php echo $row['user_role_name']; ?> &nbsp;</td>
          <td> 
          <a href="editUser.php?user_id=<?php echo $row['user_id']; ?>">
          <button class="btn btn-primary" type="button"> <i class="glyphicon glyphicon-edit icon-write"></i> Edit </button></a> &nbsp;
          
          <a href="deleteUser.php?user_id=<?php echo $row['user_id']; ?>" onClick="return del('a User?')"> 
		  <?php if($row['user_id']!=$_SESSION['psc_user_id'] && $row['user_role_name']!="Super Admin"){ ?>
          <button class="btn btn-danger" type="button"> <i class="glyphicon glyphicon-trash icon-write"></i> Delete </button></a> &nbsp;
          <?php } ?></td>
        </tr>
        <?php } ?>
        </tbody>
      </table>
      </div>
      <p>&nbsp;</p>
      <div class="col-lg-1 col-sm-1 col-md-1">&nbsp;</div> 
            </div>
         
          
                   
                   <!-- End Table-->           
     <nav class="container">
           <ul class="pagination pagination-sm">  
               <?php for($i=1;$i<=$nopage;$i++){ ?>
               <li>
                   <a href="userManagement.php?page=<?php echo $i; ?>">
                   <?php echo $i; ?>
                   </a></li>
               <?php } ?>
           </ul>
     </nav>
                   </div>
                 
                    
                    
                
                                
                    
                
                
            
            <div id="footer">
                
               <?php include '../../common/footer.php'; ?> 
            </div>            
        </div>
        
    </body>
    
</html>