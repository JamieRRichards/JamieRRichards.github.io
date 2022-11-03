<!DOCTYPE html>
<html lang="en">
<head>
  <title>Purple Foundation</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <script src="../js/bootstrap.min.js"></script>
</head>

<body>

    <hr/>

  <!--The div class below is heading section for the website.-->

    <div class="jumbotron jumbotron-fluid text-center" style="background-color: #351c75;">
      <div class="container">
        <h1>Purple Foundation</h1>
      </div>
    </div>

<br/>

<div class="container-fluid">
  <div class="row" style="margin-left: 1%;">
    <div class="col">
      <h1>Register</h1>
    </div>
  </div>
</div>

<br/>

<hr style="background-color: black;">

<br/>

<div class="container-fluid">
  <div class="row" style="margin-left: 1%;">
    <div class="col-md-6">
      <form action="register_form.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter a username" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter a password" required>
        </div>
        <br />
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
      </form>
      <br/>
    </div>
  </div>
</div>


</body>
</html>
