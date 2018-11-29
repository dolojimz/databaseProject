<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    session_start();
    

    $link = mysqli_connect("localhost", "root", "", "fantasy");

    if($link == false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

?>


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

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
    <h1 align="center"><b>Admin Page</b></h1>
    <div class="container3">
  <div class="row">
      <div class="column" style="background-color:rgba(0, 0, 0, 0.7);">
          <h3><b>Update Player</b></h3>
          <form action="consoleUpdate.php">
              <input type="text" placeholder="Player ID" name="playerId"><br>
              <input type="text" placeholder="Points" name="points"><br>
              <button type="submit" >Update Points</button>
          </form>
          <table>
          <tr>
            <th>Player ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Team</th>
            <th>Average Points</th>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="column" style="background-color:rgba(0, 0, 0, 0.7);">
          <h3><b>Add Player</b></h2>
              <form action="consoleAdd.php" id = "info">
                  <input type="number" step = "1" placeholder="Player ID" name="playerId"><br>
                  <input type="text" placeholder="Player Name" name="playerName"><br>
                  
                    <select placeholder="Position" name="playerPosition" form="info">
                      <option value="K">K</option>
                      <option value="WR">WR</option>
                      <option value="QB">QB</option>
                      <option value="defense">Defense</option>
                      <option value="RB">RB</option>
                    </select>
                  
                    <select placeholder="Position" name="playerTeam" form="info">
                      <option value="Redskins">Redskins</option>
                      <option value="Cowgirls">Cowgirls</option>
                      <option value="Raiders">Raiders</option>
                      <option value="Jets">Jets</option>
                      <option value="Texans">Texans</option>
                    </select>
                                    
                  <input type="number" placeholder="Player Avg Points" name="playerPoints"><br>
                  <button type="submit">Add Player</button>
              </form>
              <table>
              <tr>
                <th>Player ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Team</th>
                <th>Average Points</th>
              </tr>
            <?php 
            $team = $_REQUEST['playerTeam'] ?? '';
            $points = $_REQUEST['playerPoints'] ?? '';
            $name = $_REQUEST['playerName'] ?? '';
            $position = $_REQUEST['playerPosition'] ?? '';
            $pid = $_REQUEST['playerId'] ?? '';
            $sql = "INSERT INTO `player` (team, avg_points, name, position, player_ID) VALUES ('$team', '$points', '$name', '$position', '$pid')";  
            if(mysqli_query($link, $sql)){
              echo'<tr>';
                echo'<td>'.$pid.'</td>';
                echo'<td>'.$name.'</td>';
                echo'<td>'.$position.'</td>';
                echo'<td>'.$team.'</td>';
                echo'<td>'.$points.'</td>';
              echo'</tr>';
            }else{
                echo "<script type='text/javascript'>alert('That Player ID is already used. Try a different one.');
                window.location='http://localhost/databaseProject/views/console.php';
                </script>";
            }
            ?>
            </table>
      </div>
    </div>
</div>


  <!-- <form action="action_page.php">
  <div class="container">
    <label for="newUname" style="color: black;"><b>New User?</b></label>
    <input type="text" placeholder="Name" name="newUname" required>

    <label for="retUname" style="color: black;"><b>Returning User?</b></label>
    <input type="password" placeholder="Name" name="retUname" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</div>

</form> -->
  <!-- <div class="w3-display-bottomleft w3-padding-large">
    Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a>
  </div> -->
</div>

</body>
</html>