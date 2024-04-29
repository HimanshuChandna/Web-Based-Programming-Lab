<?php
// Delete cookie
setcookie("username", "", time() - 3600, "/");

// Redirect to login page
header('Location: login.php');
exit;
?>