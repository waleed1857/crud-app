<?php
require_once("../includes/config.php");
require_once("../includes/connection.php");
ob_start();
session_start();



    // Initialize an empty array to store errors
    $errors = [];

    // Check if 'text' and 'key' fields are set in $_POST
    if (isset($_POST)) {
        $userText = $_POST['text'];
        $userKey = $_POST['key'];

        // Check if the note already exists
        $conn = connect_db();
        $sql = "SELECT * FROM `all-notes` WHERE Title='$userKey' OR Content='$userText'";
        $result = mysqli_query($conn, $sql);
        
        if ((mysqli_num_rows($result) > 0)) {
          // $errors[] = "<br>" . "Content already exists.";
          echo "<script>alert('Content already exist!!'); window.location.href='../action/note.php';</script>";
          // header('window.location:'.BASEURL.'../Final Project/note.php');
          exit();
        }

        // Insert the data into the database
        else {
          // Check if both fields are empty!
          if(($userText=="") && ($userKey=="")){
            $errors[] = "Both 'text' and 'key' fields are required.";
            echo "<script>alert('Both text and key fields are required.'); window.location.href='../action/note.php';</script>";
            // header('window.location:'.BASEURL.'../Final Project/note.php');
            exit();
          }

          // Inserting new note
          $conn = connect_db();
          $sql = "INSERT INTO `all-notes` (`Title`, `Content`) VALUES ('$userKey', '$userText')";
          $result = mysqli_query($conn, $sql);
          
          if ($result) {
            echo "<script>alert('Your record has been added successfully!'); window.location.href='../action/note.php';</script>";
            // header('window.location:'.BASEURL.'../Final Project/note.php');
            exit();
          } else {
            echo "<script>alert('Error in inserting record!! " . mysqli_error($conn) . "'); window.location.href='../action/note.php';</script>";
            // header('location:'.BASEURL.'../Final Project/note.php');
            exit();
            // $errors[] = "Error in inserting record: " . "<br>" . mysqli_error($conn);
          }
        }
      }

    // Display any errors
    foreach ($errors as $error) {
        echo $error . "<br>";
  }
?>