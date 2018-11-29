<!-- master -->
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fantasy");
 
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$UserName = $_REQUEST['username'] ?? '';


$sql = "SELECT * FROM `admin` WHERE username = '".$UserName."'";
$result = mysqli_query($link, $sql);

if(mysqli_query($link, $sql)){
    
    if(mysqli_num_rows($result)){
        session_start();

        $_SESSION['username'] = $UserName;
        $_SESSION['loggedIn'] = true;
    
        //this redirects to the member homepage
        
        header("location: http://localhost/databaseProject/views/console.php"); 
    }
    else{
        echo "Wrong Credentials";
    }
    
    } else{
        
    header("Location: sign-up.html?wrong=2"); // there was an error
    
}

?>

