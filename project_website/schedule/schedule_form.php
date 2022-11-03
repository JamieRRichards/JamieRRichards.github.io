<!-- This php file is used to edit and update the stream schedule.-->
<?php

  /*The following section requires the files below to be accessible in order for this PHP
  file to run. If these files are not available then the PHP file will produce a fatal error.*/

  require '../get_db_handle_path.php';
  require GET_DB_HANDLE_PATH."/get_db_handle.php";

  /*The following section creates a variable called $conn and it gets assigned to "get_db_handle.*/

  $conn = get_db_handle();

  /*The following section creates variables for each day of the week e.g. "$monday" and makes it
  equal to $conn, and the prepared sql statement gets assigned to $conn.
  Originally, I tried to have one query which updates each row, however I could not figure out how
  to do this. So instead I opted to create multiple variables instead. While I'm sure there is a
  much easier and more efficient method to do this, I could not figure it out and opted for this
  method instead. */

  $monday = $conn ->
       prepare("update stream_schedule set start_time = :monday_start, finish_time = :monday_finish WHERE
       day_of_week = 'Monday'");

  $tuesday = $conn ->
        prepare("update stream_schedule set start_time = :tuesday_start, finish_time = :tuesday_finish WHERE
        day_of_week = 'Tuesday'");

  $wednesday = $conn ->
        prepare("update stream_schedule set start_time = :wednesday_start, finish_time = :wednesday_finish WHERE
        day_of_week = 'Wednesday'");

  $thursday = $conn ->
        prepare("update stream_schedule set start_time = :thursday_start, finish_time = :thursday_finish WHERE
        day_of_week = 'Thursday'");

  $friday = $conn ->
        prepare("update stream_schedule set start_time = :friday_start, finish_time = :friday_finish WHERE
        day_of_week = 'Friday'");

  $saturday = $conn ->
        prepare("update stream_schedule set start_time = :saturday_start, finish_time = :saturday_finish WHERE
        day_of_week = 'Saturday'");

  $sunday = $conn ->
        prepare("update stream_schedule set start_time = :sunday_start, finish_time = :sunday_finish WHERE
        day_of_week = 'Sunday'");

  /*The following section binds a PHP variable to the HTML forms input.*/

    $monday -> bindParam(':monday_start', $_POST['monday_start']);
    $monday -> bindParam(':monday_finish', $_POST['monday_finish']);
    $tuesday -> bindParam(':tuesday_start', $_POST['tuesday_start']);
    $tuesday -> bindParam(':tuesday_finish', $_POST['tuesday_finish']);
    $wednesday -> bindParam(':wednesday_start', $_POST['wednesday_start']);
    $wednesday -> bindParam(':wednesday_finish', $_POST['wednesday_finish']);
    $thursday -> bindParam(':thursday_start', $_POST['thursday_start']);
    $thursday -> bindParam(':thursday_finish', $_POST['thursday_finish']);
    $friday -> bindParam(':friday_start', $_POST['friday_start']);
    $friday -> bindParam(':friday_finish', $_POST['friday_finish']);
    $saturday -> bindParam(':saturday_start', $_POST['saturday_start']);
    $saturday -> bindParam(':saturday_finish', $_POST['saturday_finish']);
    $sunday -> bindParam(':sunday_start', $_POST['sunday_start']);
    $sunday -> bindParam(':sunday_finish', $_POST['sunday_finish']);

  /*The following section simply executes each variable.*/

    $monday -> execute();
    $tuesday-> execute();
    $wednesday-> execute();
    $thursday-> execute();
    $friday-> execute();
    $saturday-> execute();
    $sunday-> execute();

  /*The following section sets each variable to equal null, this is done for
    security reasons.*/

    $monday = null;
    $tuesday = null;
    $wednesday = null;
    $thursday = null;
    $friday = null;
    $saturday = null;
    $sunday = null;
    $conn = null;

    /*The header below simply refreshes the page after the form has been
    submitted.*/

    header("Location: schedule_edit.php");
?>
