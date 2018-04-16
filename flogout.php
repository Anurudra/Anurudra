
<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['fname']);
unset($_SESSION['fid']);
unset($_SESSION['username']);
unset($_SESSION['password']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: faculty.html');

?>



