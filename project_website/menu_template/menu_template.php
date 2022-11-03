<!DOCTYPE html>
<html lang="en">
<head>
  <title>Purple Foundation</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <!--The nav class below is the top navigation bar of the website.
      This includes the social media icons and login link-->

    <nav class="navbar navbar-dark" style="background-color: #351c75;">
      <a class="navbar-brand" href="https://discord.gg/pNDkwES" target="_blank">
        <img src="images/Discord/Discord-Logo-White.png" width="30" height="30" alt="discordlogo">
      </a>
      <a class="navbar-brand" href="https://twitter.com/ImBarnacleBoy" target="_blank">
        <img src="images/Twitter/Twitter_Social_Icon_Rounded_Square_White.png" width="30" height="30" alt="twitterlogo">
      </a>
      <a class="navbar-brand" href="https://twitch.com/Purple_foundation" target="_blank">
        <img src="images/Twitch/TwitchGlitchWhite.png" width="30" height="30" alt="twitchlogo">
      </a>
      <hr/>

      <li class="nav navbar-nav ml-auto">
        <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
      </li>
    </nav>

    <hr/>

  <!--The div class below is heading section for the website.-->

    <div class="jumbotron jumbotron-fluid text-center" style="background-color: #351c75;">
      <div class="container">
        <h1>Purple Foundation</h1>
      </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #351c75; font-size: 20px;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menuNav">
        <ul class="navbar-nav nav-fill w-100">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gamelist.php">Achievements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="schedule.php">Stream Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="social.php">Social Media</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report.php">Report</a>
          </li>
        </ul>
      </div>
    </nav>

</body>

</html>
