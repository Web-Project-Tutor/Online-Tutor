<?php
session_start();

// if(!isset($_SESSION['semailid'])){
//     $_SESSION['msg'] = "You have to log in first"; 
//     header('location: login.php');
// }
unset($_SESSION['id']);
session_destroy();
header("Location:index.html");
exit;

// if (isset($_GET['logout'])) { 
//     session_destroy(); 
//     unset($_SESSION['semailid']) || unset($_SESSION['tmail']); 
//     header("location: login.php"); 
// }

?>
