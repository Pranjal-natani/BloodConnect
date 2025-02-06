<?php
session_start();
include'connection.php';

if (!isset($_SESSION['tab'])) {
    $_SESSION['tab'] = 'newmenu';  // Default tab, set according to your requirement
}
?>

  
<!-- <img src="res/images/pp.jpg" style="height:100% "> -->
<!-- <body style="background-image:url('pp.jpg'); height: 100vh; background-size: cover;"> -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" sizes="16x16" type="image/x-icon" href="faviconnn.ico" />
<link rel="stylesheet" type="text/css" href="css/menuuu.css">
</head>

<body>

<div="menu-container">
  
  <input type="checkbox" id="openmenu" class="hamburger-checkbox">
  
  <div class="hamburger-icon">
    <label for="openmenu" id="hamburger-label">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </label>    
  </div>

    <div class="menu-pane" style="background-image:url('res/images/neww.png');">
      <nav>
                        
 <main class="site-wrapper">

 <div class="hexagon-menu clear">
   <div class="hexagon-item">
       <a href="Add User.php" class="hex-content <?php echo ($_SESSION["tab"] == "newmenu") ? 'active' : ''; ?>">
           <span class="hex-content-inner ">
               <span class="icon">
                   <i class="fa fa-home"></i> 
               </span>
               <span class="title">Add Employee</span>
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
        
      </nav>
    </div>
</div>
<!-- </div><br> -->
<!-- <a href="logout.php">
<button class="btn logout" >
Logout
</button></a> -->
<a href="logout.php">
<button class="logout" role="button"><span class="text">Logout</span></button>
</a>
</div>

<div class="abc">
<img src="res/images/Blood__Connect.png" height="130" width="300" align="top">
</div>
 
  <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 ">
                                <div class="page-title home  ">
                                   <!-- <span class="heading-page" style="color: blue; text-align:left;"> Welcome to BloodConnect <br> -->
                                    <!-- <p class="mt20"style="color: black; "> -->
                                        <br>
                                        <center><h1 style="color:red;">Welcome to BloodConnect</h1></center><br>
                                        At BloodConnect, we are committed to managing blood donations and inventory efficiently. Our staff operates this platform to ensure blood is readily available when needed. We track donations, maintain blood stock levels, and keep detailed donor records to support life-saving efforts. Our dedicated team ensures that every donor is registered, every donation is accounted for, and every unit of blood is safely stored and ready for use. With real-time updates, we guarantee that the blood you need is always just a click away.
                                        <br>
                                        Your Lifeline, BloodConnect - where every drop counts in saving lives.
  </div>
 </div>
  

</body>
