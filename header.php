<?php        
// session_start();
include('connection.php');

echo '
<!DOCTYPE html>
<html>
<head>
<title>
BloodConnect
</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="icon" sizes="16x16" type="image/x-icon" href="faviconnn.ico" />
</head>
<body>
<a href="logout.php">
<button class="logout" role="button">
<span class="text">Logout</span></button>
</a>
<div class="b">
<img src="finallll.jpg" height="748" width="1533" >
</div>


<div class="container">
<center>
<ul class="tabsWraper">
<li class="tabs">';

if ($_SESSION["role"] == "user") {
    // Redirect "Home" to usermenu.php if the role is 'user'
    if ($_SESSION["tab"] == "Home") {
        echo '<a href="usermenu.php" class="active">Home</a>';
    } else {
        echo '<a href="usermenu.php">Home</a>';
    }
} elseif ($_SESSION["role"] == "admin") {
    // Redirect "Home" to newmenu.php if the role is 'admin'
    if ($_SESSION["tab"] == "Home") {
        echo '<a href="newmenu.php" class="active">Home</a>';
    } else {
        echo '<a href="newmenu.php">Home</a>';
    }
} else {
    // Fallback for users without a defined role (optional)
    echo '<a href="usermenu.php">Home</a>';
}
echo '</li><li class="tabs">';

if  ($_SESSION["tab"] == "Add Person")
	echo'<a href="Add Person.php" class = "active">Add Person</a>';
else
	echo'<a href="Add Person.php">Add Person</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Search Person")
	echo'<a href="Search Person.php" class = "active">Search Person</a>';
else
	echo'<a href="Search Person.php">Search Person</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "New Donation")
	echo'<a href="New Donation.php" class = "active">New Donation</a>';
else
	echo'<a href="New Donation.php">New Donation</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "New Receive")
	echo'<a href="New Receive.php" class = "active">New Receive</a>';
else
	echo'<a href="New Receive.php">New Receive</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Check Stock")
	echo'<a href="Check Stock.php" class = "active">Check Stock</a>';
else
	echo'<a href="Check Stock.php">Check Stock</a>';
echo '</li><li class="tabs">';


if  ($_SESSION["tab"] == "Donation History")
	echo'<a href="Donation History.php" class = "active">Donation History</a>';
else
	echo'<a href="Donation History.php">Donation History</a>';
echo '</li><li class="tabs">';

if  ($_SESSION["tab"] == "Receiving History")
	echo'<a href="Receiving History.php" class = "active">Receiving History</a>';
else
	echo'<a href="Receiving History.php">Receiving History</a>';
echo '</li><li class="tabs">';


// if  ($_SESSION["tab"] == "Add User")
// 	echo'<a href="Add User.php" class = "active">Add User</a>';
// else
// 	echo'<a href="Add User.php">Add User</a>';
// echo '</li><li class="tabs">';
?>
</ul>
</center>

<div class="contents">





