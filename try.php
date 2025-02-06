<?php
session_start();

// Initialize the session variable if it's not set
if (!isset($_SESSION['tab'])) {
    $_SESSION['tab'] = 'try';  // Default tab, set according to your requirement
}
?>

<!-- <img src="res/images/P1.png" style="height:100% "> -->
<link rel="stylesheet" type="text/css" href="css/menuuu.css">
<!-- <div class="image">
<img src="res/images/—Pngtree—creative simple background design of_1645341.png" style="height:100% ">
</div> -->

    <!-- </div><div class="hexagon-item">
        <a href="Add User.php" class="hex-content ">
            <span class="hex-content-inner">
                <span class="icon">
                    <i class="fa fa-home"></i> 
                </span>
                <span class="title">Add User</span>
            </span>
            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
            </svg>
        </a> -->
    <!-- </div> -->
    <div class="pt-table desktop-768">
        
    <div class="pt-tablecell page-home relative" style="background-image:url('res/images/mbg.png');">
    
                    <div class="overlay"></div>
                    

                   
<main class="site-wrapper">

 <div class="hexagon-menu clear">
    <div class="hexagon-item">
        <a href="try.php" class="hex-content <?php echo ($_SESSION["tab"] == "try") ? 'active' : ''; ?>">
            <span class="hex-content-inner ">
                <span class="icon">
                    <i class="fa fa-home"></i> 
                </span>
                <span class="title">Home</span>
            </span>
            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
            </svg>
        </a>
    </div>
	<div class="hexagon-item">
        <a href="Add Person.php" class="hex-content <?php echo ($_SESSION["tab"] == "Add Person") ? 'active' : ''; ?>">
            <span class="hex-content-inner">
                <span class="icon">
                    <i class="fa fa-home"></i> 
                </span>
                <span class="title">Add Person</span>
            </span>
            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
            </svg>
        </a>
    </div><div class="hexagon-item">
        <a href="Search Person.php" class="hex-content <?php echo ($_SESSION["tab"] == "Search Person") ? 'active' : ''; ?>">
            <span class="hex-content-inner">
                <span class="icon">
                    <i class="fa fa-home"></i> 
                </span>
                <span class="title">Search Person</span>
            </span>
            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
            </svg>
        </a>
    </div><div class="hexagon-item">
        <a href="New Donation.php" class="hex-content <?php echo ($_SESSION["tab"] == "New Donation") ? 'active' : ''; ?>">
            <span class="hex-content-inner">
                <span class="icon">
                    <i class="fa fa-home"></i> 
                </span>
                <span class="title">New Donation</span>
            </span>
            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
            </svg>
        </a>
    </div><div class="hexagon-item">
        <a href="New Receive.php" class="hex-content <?php echo ($_SESSION["tab"] == "New Receive") ? 'active' : ''; ?>">
            <span class="hex-content-inner">
                <span class="icon">
                    <i class="fa fa-home"></i> 
                </span>
                <span class="title">New Receive</span>
            </span>
            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
            </svg>
        </a>
    </div>
    <div class="hexagon-item">
        <a href="Check Stock.php" class="hex-content <?php echo ($_SESSION["tab"] == "Check Stock") ? 'active' : ''; ?>">
            <span class="hex-content-inner">
                <span class="icon">
                    <i class="fa fa-home"></i> 
                </span>
                <span class="title">Check Stock</span>
            </span>
            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
            </svg>
        </a>
    </div><div class="hexagon-item">
        <a href="Donation History.php" class="hex-content <?php echo ($_SESSION["tab"] == "Donation History") ? 'active' : ''; ?>">
            <span class="hex-content-inner">
                <span class="icon">
                    <i class="fa fa-home"></i> 
                </span>
                <span class="title">Donation History</span>
            </span>
            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
            </svg>
        </a>
    </div><div class="hexagon-item">
        <a href="Receiving History.php" class="hex-content <?php echo ($_SESSION["tab"] == "Receiving History") ? 'active' : ''; ?>">
            <span class="hex-content-inner">
                <span class="icon">
                    <i class="fa fa-home"></i> 
                </span>
                <span class="title">Receiving History</span>
            </span>
            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path>
            </svg>
        </a>
        
                                </div>
                                
</div> 
<div class="container">
                        <div class="row">
                            <div class="filter">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 ">
                                <div class="page-title home  ">
                                  <!-- <span class="heading-page" style="color: blue; text-align:left;"> Welcome to BloodConnect <br>
                                    <p class="mt20"style="color: black; "> -->
                                        
                                        <center><h1 style="color:blue;">Welcome to BloodConnect</h1></center>
	Admin/User has to login first.Any person who is willing to donate/receive blood will have to register by giving all his personal details. Admin/User has to register the given details . The admin/user will be able to view all the details and records of all earlier donation/receive as well as the stock of blood in the blood bank. All this is related to the blood bank system. Apart from this, we will be using concepts of database encryption to make sure that the users' information is kept secure and confidential. This will help us keep their donation records protected from any threats from individuals with potentially malicious intentions, or unforeseen hazards to the security of the data.
</p>

                                        </div>
                                        



