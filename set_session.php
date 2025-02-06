<?php
session_start();
$_SESSION["test"] = "Session works!";
echo "Session set. Go to get_session.php to test.";
?>
