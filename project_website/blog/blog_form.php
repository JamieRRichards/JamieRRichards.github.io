<!-- This php file is used to insert blog posts into the database.-->
<?php

  /*The following section requires the files below to be accessible in order
  for this PHP file to run. If these files are not available then the PHP file
  will produce a fatal error.*/

  require '../get_db_handle_path.php';
  require GET_DB_HANDLE_PATH."/get_db_handle.php";

  /*The following section creates a variable called $conn and it gets assigned
  to "get_db_handle.*/

  $conn = get_db_handle();

  /*The following section creates the variable '$blog_insert' and assigns it
  to a prepared SQL query.*/

  $blog_insert = $conn ->
       prepare("insert into posts (title, description, date) ".
               "values (:title, :description, :date)");

  /*The following section binds the php variable to the HTML forms input.*/

    $blog_insert -> bindParam(':title', $_POST['title_of_post']);
    $blog_insert -> bindParam(':description', $_POST['desc_of_post']);
    $blog_insert -> bindParam(':date', $_POST['date_of_post']);

  /*The following section simply executes the variable.*/

    $blog_insert -> execute();

  /*The following section sets each variable to equal null, this is done for
  security reasons.*/

    $blog_insert = null;
    $conn = null;

    /*The header below simply refreshes the page after the form has been
    submitted.*/
    header("Location: blog_insert.php");
?>
