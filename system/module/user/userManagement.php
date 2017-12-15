<?php
include_once "../../../../system/common/session_handling.php";
include_once "../../../../system/common/dbconnection_inc.php";

$userinfo = $_SESSION['userinfo'];
$role_id = $userinfo['role_id'];

$rec_limit = 10; // no. of records per page
if (isset($_GET{'page'})) {
    $page = $_GET{'page'};
    $offset = $rec_limit * ($page - 1);
} else {
    $page = 1;
    $offset = 0;
}

/* Get total number of records */
$sql_to_count_the_total_number_of_records = "SELECT id FROM user";
$result = $conn->query($sql_to_count_the_total_number_of_records);
$rec_count = $result->num_rows;

// load data from the examination relation
$sql = "SELECT user_id, user_title_id, name, email, user_role_id, mobile_no_1, mobile_no_2, home FROM user LIMIT $offset, $rec_limit";
$user_data = $conn->query($sql);
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

                <div class="table-sec" style="padding: 0 20px;">
                    <!-------------------- Add and search -------------------->
                    <div class="row" style="padding-left: 20px">
                        <div class="col-lg-6 col-sm-6 col-md-6">
                            <a href="addUser.php">
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
                                           class="input-sm" placeholder="Keyword"/>
                                    <button type="submit" name="sub"
                                            class="btn btn-primary input-sm">
                                        <i class="glyphicon glyphicon-search"></i>
                                        Search
                                    </button>
                                </h4>
                            </form>
                        </div>
                    </div>
                    <!-------------------- Table to show the list of examinations -------------------->
                    <?php
                    if ($user_data->num_rows > 0) {
                        ?>
                        <!-- display field headings -->
                        <table border="1" class="table mytable">
                            <tr class="table-header">
                                <th>User Title</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Role</th>
                                <th>Mobile No1</th>
                                <th>Mobile No2</th>
                                <th>Home</th>
                                <th>Operation</th>
                            </tr>
                            <?php
                            // output data of each row
                            while ($row = $user_data->fetch_assoc()) {
                                $user_id = $row["user_id"];
                                ?>
                                <tr>
                                    <td><?php echo $row["user_title_id"]; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["user_role_id"]; ?></td>
                                    <td><?php echo $row["mobile_no_1"]; ?></td>
                                    <td><?php echo $row["mobile_no_2"]; ?></td>
                                    <td><?php echo $row["home"]; ?></td>

                                    <td>
                                        <?php
                                        echo "<a class='btn btn-success btn-sm' style='margin-bottom: 5px;' href=\"editRecord.php?id=$user_id\">Edit </a><br> ";
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                        <?php
                        $_PHP_SELF = "userManagement.php";
                        $total_pages = ceil($rec_count / $rec_limit);
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo "<a href = \"$_PHP_SELF?page=$i\">$i</a>";
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>



            </div>
            <div id="footer">

                <?php include '../../common/footer.php'; ?>
            </div>
        </div>

    </body>

</html>



