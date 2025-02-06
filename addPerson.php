<?php
session_start();
$_SESSION["tab"] = "Add Person";

// Validate session login
if (!isset($_SESSION["login"]) || $_SESSION["login"] != 1) {
    echo '<h2 style="color:red;">Authentication Error!!!</h2>';
    exit; // Prevent further execution
} else {
    include_once('header.php');

    // Include database connection
    include_once('connection.php'); // Replace with your DB connection file if different

    // Validate and retrieve form data
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    $dob = isset($_POST['dob']) ? $_POST['dob'] : null;
    $blood_group = isset($_POST['blood_group']) ? $_POST['blood_group'] : null;
    $address = isset($_POST['address']) ? $_POST['address'] : null;
    $med_issues = isset($_POST['med_issues']) ? $_POST['med_issues'] : null;

    // Check if required fields are filled
    if (!$name || !$phone || !$gender || !$dob || !$blood_group || !$address) {
        echo '<h2 style="color:red;">Error: All fields are required!</h2>';
        exit;
    }

    // Insert data into the Person table
    $sql = "INSERT INTO Person (p_name, p_phone, p_dob, p_address, p_gender, p_blood_group, p_med_issues) 
            VALUES ('$name', '$phone', '$dob', '$address', '$gender', '$blood_group', '$med_issues')";

    if ($con->query($sql) === TRUE) {
        // Fetch the newly inserted record's ID
        $sql = "SELECT p_id FROM Person 
                WHERE p_name = '$name' AND p_phone = '$phone' AND p_gender = '$gender' 
                  AND p_dob = '$dob' AND p_blood_group = '$blood_group' 
                  AND p_address = '$address' AND p_med_issues = '$med_issues'";
        
        $result = mysqli_query($con, $sql);

        if ($result) {
            $row = mysqli_fetch_array($result);
            $count = mysqli_num_rows($result);
            $pid = isset($row['p_id']) ? $row['p_id'] : null;
        } else {
            echo '<h2 style="color:red;">Error fetching registration details.</h2>';
            exit;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
        exit;
    }

    // Display the registration details
    if (isset($count) && $count == 1) {  
        echo '<h2>' . htmlspecialchars($name) . '</h2><br><br>';
        echo 'Your registration is successful..<br><br>';
        echo 'Personal ID: ' . htmlspecialchars($pid) . '<br><br>';
        echo 'Name: ' . htmlspecialchars($name) . '<br><br>';
        echo 'Phone Number: ' . htmlspecialchars($phone) . '<br><br>';
        echo 'DOB: ' . htmlspecialchars($dob) . '<br><br>';
        echo 'Blood Group: ' . htmlspecialchars($blood_group) . '<br><br>';

        echo 'Gender: ';
        if ($gender === 'm') echo 'Male<br><br>';
        if ($gender === 'f') echo 'Female<br><br>';
        if ($gender === 'o') echo 'Others<br><br>';

        echo 'Address: ' . htmlspecialchars($address) . '<br><br>';
        echo 'Medical Issues: ' . ($med_issues ? htmlspecialchars($med_issues) : 'None') . '<br><br>';
        echo '<div style="color:white;">NB: Please keep your Personal ID for future reference!</div>';
    }

    include_once('footer.php');
}
?>