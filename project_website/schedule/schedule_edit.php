<!DOCTYPE html>
<html lang="en">
<head>
  <title>Purple Foundation | Schedule</title>
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
              <a class="nav-link font-weight-bold active" href="../schedule.php">Stream Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../blog.php">Blog</a>
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
        <h1>Edit Schedule</h1>
      </div>
    </div>
  </div>

  <br/>
<!--The hr tag is used to seperate different parts of the webpage. -->
  <hr style="background-color: black;">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadDesign">
      <li class="breadcrumb-item"><a href="../schedule.php">Stream Schedule</a></li>
      <li class="breadcrumb-item active">Edit Schedule</li>
    </ol>
  </nav>
<!--The hr tag is used to seperate different parts of the webpage. -->
  <hr style="background-color: black;">

  <br/>

  <br/>

  <!--The section below is a general description about what to enter into the form. -->
  <div class="container-fluid">
    <div class="row" style="margin-left: 1%;">
      <div class="col-md-7">
        <p>Enter a time or "No Stream" into the fields below to update the stream schedule</p>
      </div>
    </div>
  </div>

  <br/>

  <!--The section below is the form for this webpage. It takes the start_time and finish_time
      for each day. Each day has a unique start and end time name so it can be refered to later.
      For example, "monday_start" and "monday_finish" are two seperate inputs which will both be
      referenced later when updating the necessary columns -->

  <div class="container-fluid">
    <div class="row" style="margin-left: 1%;">
      <div class="col-md-10">
        <form action="schedule_form.php" method="post">
          <div class="row">
            <div class="col-lg-2">
              <h5>Monday:</h5>
            </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Start Time" name="monday_start" required>
              </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Finish Time" name="monday_finish" required>
              </div>
          </div>
          <br/>
          <div class="row">
            <div class="col-lg-2">
              <h5>Tuesday:</h5>
            </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Start Time" name="tuesday_start" required>
              </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Finish Time" name="tuesday_finish" required>
              </div>
          </div>
          <br/>
          <div class="row">
            <div class="col-lg-2">
              <h5>Wednesday:</h5>
            </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Start Time" name="wednesday_start" required>
              </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Finish Time" name="wednesday_finish" required>
              </div>
          </div>
          <br/>
          <div class="row">
            <div class="col-lg-2">
              <h5>Thursday:</h5>
            </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Start Time" name="thursday_start" required>
              </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Finish Time" name="thursday_finish" required>
              </div>
          </div>
          <br/>
          <div class="row">
            <div class="col-lg-2">
              <h5>Friday:</h5>
            </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Start Time" name="friday_start" required>
              </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Finish Time" name="friday_finish" required>
              </div>
          </div>
          <br/>
          <div class="row">
            <div class="col-lg-2">
              <h5>Saturday:</h5>
            </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Start Time" name="saturday_start" required>
              </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Finish Time" name="saturday_finish" required>
              </div>
          </div>
          <br/>
          <div class="row">
            <div class="col-lg-2">
              <h5>Sunday:</h5>
            </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Start Time" name="sunday_start" required>
              </div>
              <div class="col-lg-3">
                <input type="text" class="form-control timealign" placeholder="Finish Time" name="sunday_finish" required>
              </div>
          </div>
          <br/>
          <br/>
          <button type="submit" class="btn btn-primary">Update schedule</button>
        </form>
        <br/>
      </div>
    </div>
  </div>
</body>
</html>
