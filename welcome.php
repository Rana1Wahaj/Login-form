<?php
session_start();

echo 'Welcome '.$_SESSION['userName'];

echo  '<br><button type="logout"> <a href = "index.php?action=logout">Logout</a></button>';

?>