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

<div class="bgimg w3-display-container w3-animate-opacity">
    <h1 align="center"><b>Admin Page</b></h1>
    <div class="container4">
  <div class="row">
      <div class="column">
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
        <?php
        $pid = $_REQUEST['playerId'] ?? '';
        $points = $_REQUEST['points'] ?? '';

        $sql = "UPDATE `player` SET avg_points = '".$points."' WHERE player_ID = '".$pid."'";

        if(mysqli_query($link, $sql)){
            //echo "<script type='text/javascript'>alert('".$points."');</script>";
            $sql1 = "SELECT * FROM `player` WHERE player_ID = ".$pid."";
            $result1 = mysqli_query($link, $sql1);
            $row1 = mysqli_fetch_array($result1);

            if(mysqli_query($link, $sql1)){
                echo'<tr>';
                    echo'<td>'.$row1['player_ID'].'</td>';
                    echo'<td>'.$row1['name'].'</td>';
                    echo'<td>'.$row1['position'].'</td>';
                    echo'<td>'.$row1['team'].'</td>';
                    echo'<td>'.$row1['avg_points'].'</td>';
                echo'</tr>';
            }
        }
        ?>
          </tr>
        </table>
      </div>
      <div class="column">
          <h3><b>Add Player</b></h2>
              <form action="consoleAdd.php">
                  <input type="text" placeholder="Player ID" name="playerId"><br>
                  <input type="text" placeholder="Player Name" name="playerName"><br>
                  <input type="text" placeholder="Player Position" name="playerPosition"><br>
                  <input type="text" placeholder="Player Team" name="playerTeam"><br>
                  <input type="text" placeholder="Player Avg Points" name="playerPoints"><br>
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
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
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
