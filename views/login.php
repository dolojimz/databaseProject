<!DOCTYPE html>
<html>
<!-- <title>W3.CSS Template</title> -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="../static/styles.css">
<!-- <style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('background.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style> -->

<div class="bgimg w3-display-container w3-animate-opacity">
  <div class="w3-display-topleft w3-padding-large w3-xlarge" style="color: black;">
    Fantasy Football
  </div>
  <div class="container" >
    <form action="signIn1.php">
        <label for="newUname" style="color: black;"><b>Returning User?</b></label>
        <input type="text" placeholder="User Name" name="UserName" required>
        <button type="submit">Login</button>
    </form>
    <form action="newUser.php">
        <label for="retUname" style="color: black;"><b>New User?</b></label>
        <input type="text" placeholder="Name" name="FirstName" required>
        <input type="text" placeholder="User Name" name="UserName" required>
        <input type="text" placeholder="Email" name="Email" required>
        <button type="submit">Create Profile and Login</button>
    </form>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</div>

  <!-- <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
  </div> -->
</div>
</html>
