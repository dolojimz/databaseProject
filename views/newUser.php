<!-- master -->
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fantasy");

if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$FirstName = $_REQUEST['FirstName'] ?? '';
$UserName = $_REQUEST['UserName'] ?? '';
$Email = $_REQUEST['Email'] ?? '';
$sql = "INSERT INTO `user` (username, name, Email) VALUES ('$UserName', '$FirstName', '$Email')";
if(mysqli_query($link, $sql)){
    session_start();
    $_SESSION['username'] = $UserName;
    $_SESSION['loggedIn'] = true;
    //this redirects to the member homepage

    header("location: http://localhost/databaseProject/views/index.php");
} else{
    //https://www.codeproject.com/Questions/343563/Before-redirecting-to-a-php-page-alert-is-not-show
    echo "<script type='text/javascript'>alert('That username is already used. Try a different one.');
    window.location='http://localhost/databaseProject/views/login.php';
    </script>";
}
?>
