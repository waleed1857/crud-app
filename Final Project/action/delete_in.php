<?php
require_once("../includes/config.php");
require_once("../includes/connection.php");

$delText = $_POST['title'];
$conn = connect_db();

// Check if the record exists
$checkSql = "SELECT * FROM `all-notes` WHERE Title = '$delText'";
$checkResult = mysqli_query($conn, $checkSql);

if (mysqli_num_rows($checkResult) > 0) {
    // Record exists, proceed to delete
    $deleteSql = "DELETE FROM `all-notes` WHERE Title = '$delText'";
    $deleteResult = mysqli_query($conn, $deleteSql);

    if ($deleteResult) {
      echo "<script>alert('Your record has been deleted successfully!'); window.location.href='../action/delete.php';</script>";
    } else {
      echo "<script>alert('Error in deleting record!! " . mysqli_error($conn) . "'); window.location.href='../action/delete.php';</script>";
    }
} else {
    // Record does not exist
    echo "<script>alert('No record with title $delText existed!'); window.location.href='../action/delete.php';</script>";
}

mysqli_close($conn);
?>