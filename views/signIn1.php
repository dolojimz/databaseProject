<!-- master -->
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "fantasy");
 
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$UserName = $_REQUEST['UserName'] ?? '';

echo "<script type='text/javascript'>alert('$UserName');</script>";

$sql = "SELECT * FROM `user` WHERE username = '".$UserName."'";
$result = mysqli_query($link, $sql);

if(mysqli_query($link, $sql)){
    
    if(mysqli_num_rows($result)){
        session_start();

        $_SESSION['username'] = $UserName;
        $_SESSION['loggedIn'] = true;
    
        //this redirects to the member homepage
        
        header("location: http://localhost/databaseProject/views/index.php"); 
    }
    else{
        echo "Wrong Credentials";
    }
    
    } else{
        
    header("Location: sign-up.html?wrong=2"); // there was an error
    
}

?>
