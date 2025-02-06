<?php
session_start();
$_SESSION["tab"] = "Home";
// if (!isset($_SESSION["Home"]) || $_SESSION["Home"] != 1) {
//     echo '<h2 style="color:red;">Authentication Error!!!</h2>';
// }
// else{
{
	include_once('header.php');

		###########contents of div goes here###########
	echo "
	<h2>
	Abstract
	</h2>
	<br>
	<p>
	Despite the immense technological advancement, blood bank systems are either manual or valuable data Consequently, one of the major issues in blood bank systems, as talked about in many research papers and articles, is the lack of data security. People always doubt whether their personal information and medical records are safely stored and secured. Therefore, our project aims to develop an online blood donation system applying the concepts of database security and encryption. easily retrievable.
	</p>
	<p>
	The following is what our project aims to:<br>
	Admin/User has to login first.Any person who is willing to donate/receive blood will have to register by giving all his personal details. Admin/User has to register the given details . The admin/user will be able to view all the details and records of all earlier donation/receive as well as the stock of blood in the blood bank. All this is related to the blood bank system. Apart from this, we will be using concepts of database encryption to make sure that the users' information is kept secure and confidential. This will help us keep their donation records protected from any threats from individuals with potentially malicious intentions, or unforeseen hazards to the security of the data.
	</p>";
	

		##################################################
	include_once('footer.php');
}
?>






