<!-- This php file is used to add achievements to the database.-->
<?php

  /*The following section requires the files below to be accessible in order
  for this PHP file to run. If these files are not available then the PHP file
  will produce a fatal error.*/
  require '../get_db_handle_path.html';
  require GET_DB_HANDLE_PATH."/get_db_handle.html";

  /*The following section creates a variable called $conn and it gets assigned
  to "get_db_handle.*/

  $conn = get_db_handle();

  /*The following section creates a variable called '$achievement_insert' and
  the prepared statement gets assigned to it.*/

  $achievement_insert = $conn ->
       prepare("insert into achievements (game_name, category_name, platform,
                time_accomplished, ranking, date_achieved) ".
               "values (:game_name, :category_name, :platform,
                        :time_accomplished, :ranking, :date_achieved)");

  /*The following section binds a PHP variable to the HTML forms input.*/

    $achievement_insert -> bindParam(':game_name', $_POST['gamename']);
    $achievement_insert -> bindParam(':category_name', $_POST['categoryname']);
    $achievement_insert -> bindParam(':platform', $_POST['platform']);
    $achievement_insert -> bindParam(':time_accomplished', $_POST['time']);
    $achievement_insert -> bindParam(':ranking', $_POST['rank']);
    $achievement_insert -> bindParam(':date_achieved', $_POST['dateachieved']);

  /*The following section simply executes the variable.*/

    $achievement_insert -> execute();

    /*The following section sets each variable to equal null, this is done for
      security reasons.*/

    $achievement_insert = null;
    $conn = null;

    /*The header below simply refreshes the page after the form has been
    submitted.*/

    header("Location: achievement_insert.html");
?>
