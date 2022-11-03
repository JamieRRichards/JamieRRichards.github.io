<!-- This php file is used to delete blog posts from the database.-->
<?php

/*The line of code below was taken from a stackoverflow post and
has been adapted to my code. The link to the webpage is below*/
#https://stackoverflow.com/questions/43286387/adding-a-delete-button-in-php-on-each-row-of-a-mysql-table/43286487
  $id = $_GET['id'];
#End of stackoverflow code

  /*The following section requires the files below to be accessible in order for this PHP
  file to run. If these files are not available then the PHP file will produce a fatal error.*/
  require '../get_db_handle_path.php';
  require GET_DB_HANDLE_PATH."/get_db_handle.php";

  #The following section creates a variable called $conn and it gets assigned to "get_db_handle.
  $conn = get_db_handle();

  /*The following section creates a variable called $blog_delete and makes it equal to $conn.
  The prepared satement is also assigned to $conn here. The prepared statement uses the "where"
  clause to only delete a post of a specific id.  */
  $blog_delete = $conn ->
       prepare("DELETE FROM posts WHERE id = $id");

    #The following section simply executes the variable.
    $blog_delete -> execute();

    #The following section sets the variables to equal null, this is done for security reasons.
    $blog_delete = null;
    $conn = null;

    #The header below simply refreshes the page so that the post is no longer shown.
    header("Location: ../blog.php");
?>
