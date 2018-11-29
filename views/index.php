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
    <h1 align="center"><b>Hello {Name}</b></h1>
    <div class="container3">
  <div class="row">
      <div class="column">
          <h2><b>{Your Team}</b></h2>
          <table>
          <tr>
            <th>Player ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Team</th>
            <th>Average Points</th>
          </tr>
          <tr>
            <td>{Info}</td>
            <td>{Info}</td>
            <td>{Info}</td>
            <td>{Info}</td>
            <td>{Info}</td>
          </tr>
        </table>
      </div>
      <div class="column">
          <h3><b>Search Players</b></h2>
              <form action="/action_page.php">
                  <input type="text" placeholder="ID" name="id"><br>
                  <input type="submit" value="Search ID">
              </form>
              <form action="/action_page.php">
                  <input type="text" placeholder="Position" name="position"><br>
                  <input type="submit" value="Search Position">
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
                <td>{Info}</td>
                <td>{Info}</td>
                <td>{Info}</td>
                <td>{Info}</td>
                <td>{Info}</td>
              </tr>
            </table>
            <form action="/action_page.php">
                <input type="submit" value="Sort Players">
            </form>
      </div>
    </div>
</div>


  <!-- <form action="action_page.php">
  <div class="container">
    <label for="newUname"><b>New User?</b></label>
    <input type="text" placeholder="Name" name="newUname" required>

    <label for="retUname"><b>Returning User?</b></label>
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
