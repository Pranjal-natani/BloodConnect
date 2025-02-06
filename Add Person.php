<?php
session_start();
// var_dump($_SESSION);
$_SESSION["tab"] = "Add Person";
if($_SESSION["login"] != 1)
	echo '<h2>Access denied!!!</h2>';
else{
	include_once('header.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Person</title>
</head>
<body>

  <link rel="stylesheet" href="main.css">
  <div class="c">
    <!-- Title section -->
    <div class="title">Registration</div>
    <div class="content">
      <!-- Registration form -->
      <form name="addPerson" action = "addPerson.php"  method = "POST">
	  <?php
	if(isset($_SESSION["entry_error"])){
		echo "<p class='error'>" .$_SESSION["entry_error"]. "</p>";
		unset($_SESSION["entry_error"]);
	}
	?>
        <div class="user-details">
          <!-- Input for Full Name -->
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name  = "name" placeholder="Enter your name" class="input"required>
          </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type = "text" name  = "phone" placeholder="Enter your number" maxlength=10 class="input" required />  
          </div>
          <!-- Input for Email -->
          <div class="input-box">
            <span class="details">Date of Birth</span>
			<input type = "date" name  = "dob" class="input" required/>
          </div>
		  <div class="input-box">
		  <span class="details">Blood Group</span>
		  <select name="blood_group" class="input" required>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="O+">O+</option>
	<option value="O-">O-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>

	</select>
          </div>
          <!-- Input for Phone Number -->
          <div class="input-box">
            <span class="details">Address</span>
			<textarea rows="5" cols="30" name="address" class="input area" required></textarea>
          </div>
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Medical Issues (if any)</span>
			<textarea rows="15" cols="30" name="med_issues" class="input area"></textarea>
          </div>
		  <div class="gender-details">
  <!-- Radio buttons for gender selection -->
  <input type="radio" name="gender" id="dot-1" value="m">
  <input type="radio" name="gender" id="dot-2" value="f">
  
  <span class="gender-title">Gender</span>
  <div class="category">
    <!-- Label for Male -->
    <label for="dot-1">
      <span class="dot one"></span>
      <span class="gender">Male</span>
    </label>
    <!-- Label for Female -->
    <label for="dot-2">
      <span class="dot two"></span>
      <span class="gender">Female</span>
    </label>
  </div>
</div>

        </div>
        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php
	include_once('footer.php');
}
?>

