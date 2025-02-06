<?php
session_start();
$_SESSION["tab"] = "New Donation";

if ($_SESSION["login"] != 1) {
    echo '<h2 style="color:red">Authentication Error!!!</h2>';
} else {
    include_once('header.php');
    
    // Sanitize input values
    $pid = $_POST['pid'];
    $units = $_POST['units'];
    
    // Date and Time formatting
    date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d'); // Correct date format
    $time = date('H:i'); // Correct time format (24-hour)

    // Assuming $con is the database connection
    if ($con) {
        // Insert donation record
        $sql_1 = "INSERT INTO Donation (p_id, d_date, d_time, d_quantity) 
                  VALUES (?, ?, ?, ?)";

        // Update stock record based on blood group
        $sql_2 = "UPDATE Stock SET s_quantity = s_quantity + ? 
                  WHERE s_blood_group = (SELECT p_blood_group FROM Person WHERE p_id = ?)";

        // Use prepared statements to prevent SQL injection
        if ($stmt_1 = $con->prepare($sql_1)) {
            $stmt_1->bind_param("issi", $pid, $date, $time, $units); // Bind parameters
            if ($stmt_1->execute()) {
                
                if ($stmt_2 = $con->prepare($sql_2)) {
                    $stmt_2->bind_param("ii", $units, $pid); // Bind parameters
                    if ($stmt_2->execute()) {
                        echo 'Your donation is successful.';
                    } else {
                        echo "Error updating stock: " . $stmt_2->error;
                    }
                    $stmt_2->close();
                }
            } else {
                echo "Error inserting donation: " . $stmt_1->error;
            }
            $stmt_1->close();
        }
    } else {
        echo "Database connection failed.";
    }
    include_once('footer.php');
}
?>
