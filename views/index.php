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
    <h1 align="center"><b>Hello  <?php echo $_SESSION['username']; ?></b></h1>
    <div class="container3">
  <div class="row" >
      <div class="column" style="background-color:rgba(0, 0, 0, 0.7);">
          <h2><b><?php echo $_SESSION['username']; ?>'s Team</b></h2>
          <table>
          <tr>
            <th>Player ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Team</th>
            <th>Average Points</th>
          </tr>
        <?php
        $UserName = $_SESSION['username'];
        $sql = "SELECT kicker FROM `fantasy_team` WHERE username = '".$UserName."'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $sql1 = "SELECT * FROM `player` WHERE player_ID = ".$row['kicker']."";
        if($result1 = mysqli_query($link, $sql1)){
            $row1 = mysqli_fetch_array($result1);
          echo'<tr>';
            echo'<td>'.$row1['player_ID'].'</td>';
            echo'<td>'.$row1['name'].'</td>';
            echo'<td>'.$row1['position'].'</td>';
            echo'<td>'.$row1['team'].'</td>';
            echo'<td>'.$row1['avg_points'].'</td>';
          echo'</tr>';
        }
              
        $sql = "SELECT QB FROM `fantasy_team` WHERE username = '".$UserName."'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $sql1 = "SELECT * FROM `player` WHERE player_ID = ".$row['QB']."";
        if($result1 = mysqli_query($link, $sql1)){
            $row1 = mysqli_fetch_array($result1);
          echo'<tr>';
            echo'<td>'.$row1['player_ID'].'</td>';
            echo'<td>'.$row1['name'].'</td>';
            echo'<td>'.$row1['position'].'</td>';
            echo'<td>'.$row1['team'].'</td>';
            echo'<td>'.$row1['avg_points'].'</td>';
          echo'</tr>';
        }
              
        $sql = "SELECT defense FROM `fantasy_team` WHERE username = '".$UserName."'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $sql1 = "SELECT * FROM `player` WHERE player_ID = ".$row['defense']."";
        if($result1 = mysqli_query($link, $sql1)){
            $row1 = mysqli_fetch_array($result1);
          echo'<tr>';
            echo'<td>'.$row1['player_ID'].'</td>';
            echo'<td>'.$row1['name'].'</td>';
            echo'<td>'.$row1['position'].'</td>';
            echo'<td>'.$row1['team'].'</td>';
            echo'<td>'.$row1['avg_points'].'</td>';
          echo'</tr>';
        }
              
        $sql = "SELECT WR FROM `fantasy_team` WHERE username = '".$UserName."'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $sql1 = "SELECT * FROM `player` WHERE player_ID = ".$row['WR']."";
        if($result1 = mysqli_query($link, $sql1)){
            $row1 = mysqli_fetch_array($result1);
          echo'<tr>';
            echo'<td>'.$row1['player_ID'].'</td>';
            echo'<td>'.$row1['name'].'</td>';
            echo'<td>'.$row1['position'].'</td>';
            echo'<td>'.$row1['team'].'</td>';
            echo'<td>'.$row1['avg_points'].'</td>';
          echo'</tr>';
        }
        $sql = "SELECT RB FROM `fantasy_team` WHERE username = '".$UserName."'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $sql1 = "SELECT * FROM `player` WHERE player_ID = ".$row['RB']."";
        if($result1 = mysqli_query($link, $sql1)){
            $row1 = mysqli_fetch_array($result1);
          echo'<tr>';
            echo'<td>'.$row1['player_ID'].'</td>';
            echo'<td>'.$row1['name'].'</td>';
            echo'<td>'.$row1['position'].'</td>';
            echo'<td>'.$row1['team'].'</td>';
            echo'<td>'.$row1['avg_points'].'</td>';
          echo'</tr>';
        }
              
        $sql = "SELECT bench FROM `fantasy_team` WHERE username = '".$UserName."'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $sql1 = "SELECT * FROM `player` WHERE player_ID = ".$row['bench']."";
        if($result1 = mysqli_query($link, $sql1)){
            $row1 = mysqli_fetch_array($result1);
          echo'<tr>';
            echo'<td>'.$row1['player_ID'].'</td>';
            echo'<td>'.$row1['name'].'</td>';
            echo'<td>'.$row1['position'].'</td>';
            echo'<td>'.$row1['team'].'</td>';
            echo'<td>'.$row1['avg_points'].'</td>';
          echo'</tr>';
        }
        ?>
        </table>
      </div>
      <div class="column" style="background-color:rgba(0, 0, 0, 0.7);">
          <h3><b>Search Players</b></h2>
              <form action="indexID.php">
                  <input type="text" placeholder="ID" name="ID" required><br>
                  <button type="submit">Search ID</button>
              </form>
              <form action="indexPos.php" id = "pos">
                    <select placeholder="Position" name="position" form="pos">
                      <option value="K">K</option>
                      <option value="WR">WR</option>
                      <option value="QB">QB</option>
                      <option value="defense">Defense</option>
                      <option value="RB">RB</option>
                    </select>
                  <button type="submit">Search Position</button>
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
