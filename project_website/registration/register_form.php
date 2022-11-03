<?php
  require '../get_db_handle_path.php';
  require GET_DB_HANDLE_PATH."/get_db_handle.php";

  $conn = get_db_handle();

  $stmt = $conn ->
       prepare("insert into user_info (username, password) ".
               "values (:username, :password)");


    $stmt -> bindParam(':username', $_POST['username']);
    $stmt -> bindParam(':password', PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT));

    $stmt -> execute();

    $stmt = null;
    $conn = null;

    header("Location: register.php");
?>
