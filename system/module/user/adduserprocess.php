<?php
/******************** All the field names of the user relation **************************/
// user_id
// user_title_id
// name
// email
// user_role_id
// mobile_no_1
// mobile_no_2
// home

/******************** All the field names of the login relation **************************/
// username
// password
// user_id

include("../../common/session_handling.php"); // To start the session and if not login to the system, redirect to the index page
require_once("../../common/dbconnection_inc.php");

// initialize all the variables
$id = $user_title_id = $name = $email = $user_role_id = $mobile_no_1 = $mobile_no_2 = $home = "";
$username = $password = "";
$user_id = "";

$user_title_id = $_POST['user_title_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$user_role_id = $_POST['user_role_id'];
$mobile_no_1 = $_POST['mobile_no_1'];
$mobile_no_2 = $_POST['mobile_no_2'];
$home = $_POST['home'];

$username = $_POST['username'];
$password = $_POST['pass'];

$sql = "SELECT username FROM login WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count != 0) {
    $alert = "Username already in use.";
} else {
    $sql = "INSERT INTO user " .
        "(user_title_id, name, email, user_role_id, mobile_no_1, mobile_no_2, home) " .
        "VALUES ($user_title_id, '$name', '$email', $user_role_id, '$mobile_no_1', '$mobile_no_2', '$home');";
    if ($conn->query($sql) === TRUE) {
        mysqli_query($conn, $sql);
        $user_id = mysqli_insert_id($conn);

        // encoding the password
        $enc_pass = sha1($pass);
        $sql = "INSERT INTO login (username, password, user_id) VALUES('$username', '$enc_pass', '$user_id')";
        if ($conn->query($sql) === TRUE) {
            $alert = "New record created successfully";
        } else {
            $alert = "Error occurred while creating the new record.";
        }
    } else {
        $alert = "Error occurred while creating the new record.";
    }
}
$conn->close();
?>

<script>
    window.alert("<?php echo $alert; ?>");
    window.location.href = "userManagement.php"
</script>