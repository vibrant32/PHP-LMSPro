<?php
session_start();
if(session_destroy()){
$_SESSION["finaluser"];
echo "<script> window.location.href = 'login.php'; </script> ";
}
?>