<!DOCTYPE html>
<html lang="en">
<head>
  <title>Purple Foundation | Blog</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <script src="../js/bootstrap.min.js"></script>
</head>

<body>

  <!--The nav class below is the top navigation bar of the website.
      This includes the social media icons and login link
      The following webpage was used to help me set it up.
      Link: https://getbootstrap.com/docs/4.0/components/navbar/-->

      <nav class="navbar navbar-dark" style="background-color: #351c75;">
        <a class="navbar-brand" href="https://discord.gg/pNDkwES" target="_blank">
          <img src="../images/Discord/Discord-Logo-White.png" width="30" height="30" alt="discordlogo">
        </a>
        <a class="navbar-brand" href="https://twitter.com/ImBarnacleBoy" target="_blank">
          <img src="../images/Twitter/Twitter_Social_Icon_Rounded_Square_White.png" width="30" height="30" alt="twitterlogo">
        </a>
        <a class="navbar-brand" href="https://twitch.com/Purple_foundation" target="_blank">
          <img src="../images/Twitch/TwitchGlitchWhite.png" width="30" height="30" alt="twitchlogo">
        </a>
        <hr/>

        <li class="nav navbar-nav ml-auto">
          <a class="nav-link" href="../login.php"><span class="fas fa-sign-in-alt"></span> Login</a>
        </li>
      </nav>

      <hr/>

      <!--The div class below is the heading section for the website.
          The Bootstrap Jumbotron documentation page can be found below.
          Link: https://getbootstrap.com/docs/4.0/components/jumbotron/ -->

      <div class="jumbotron jumbotron-fluid text-center" style="background-color: #351c75;">
        <div class="container">
          <h1>Purple Foundation</h1>
        </div>
      </div>

      <!--The nav bar below collapses when the menu width can no longer fit on the screen.
          Bootstraps documentation was very helpful in setting this up.
          The following webpage was used to help me set it up.
          Link: https://getbootstrap.com/docs/4.0/components/navbar/-->

      <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #351c75; font-size: 20px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNav">
          <ul class="navbar-nav nav-fill w-100">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../gamelist.php">Achievements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../schedule.php">Stream Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-bold active" href="../blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../social.php">Social Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../report.php">Report</a>
            </li>
          </ul>
        </div>
      </nav>

  <br/>

<!--The section below is the main heading section of this webpage. -->

  <div class="container-fluid">
    <div class="row" style="margin-left: 1%;">
      <div class="col">
        <h1>Add Post</h1>
      </div>
    </div>
  </div>

  <br/>

<!--The hr tag is used to seperate different parts of the webpage. -->
  <hr style="background-color: black;">

  <!--The section below is a navbar which is used for the breadcrumb layout.
      Bootstraps documentation was very helpful in setting this up.
      The following webpage was used to help me set it up.
      Link: https://getbootstrap.com/docs/4.0/components/breadcrumb/ -->

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadDesign">
      <li class="breadcrumb-item"><a href="../blog.php">Blog</a></li>
      <li class="breadcrumb-item active">Add Post</li>
    </ol>
  </nav>

<!--The hr tag is used to seperate different parts of the webpage. -->
  <hr style="background-color: black;">

  <br/>

<!--The section below is the form which is used to add blog posts to the database.
    Each field has its own name so it can be referred to in the seperate PHP file.-->

  <div class="container-fluid">
    <div class="row" style="margin-left: 1%;">
      <div class="col-8">
        <form action="blog_form.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-10">
              <label>Title</label>
              <input type="text" name="title_of_post" class="form-control form-control-lg" placeholder="Enter Blog Title" required>
            </div>
            <div class="form-group col-md-2">
              <label>Date</label>
              <input type="date" name="date_of_post" class="form-control" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-10">
              <label>Description</label>
              <textarea class="form-control" name="desc_of_post" rows="10" placeholder="Blog Description" required ></textarea>
            </div>
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Add post</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
