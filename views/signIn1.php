<!-- master -->
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fantasy");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 

$UserName = $_POST['UserName'] ?? '';


$sql = "SELECT * FROM user WHERE username = '".$UserName."'";

if(mysqli_query($link, $sql)){
    session_start();

    $_SESSION['username'] = $UserName;
    $_SESSION['loggedIn'] = true; 
    
    //this redirects to the member homepage
    header("location: http://localhost/databaseProject/index.php");    

    } else{
        
    header("Location: sign-up.html?wrong=2"); // there was an error
    
}

?>

