<?php
// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check credentials (replace with your authentication logic)
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Example authentication (replace with your actual authentication logic)
    if ($username === "patient_username" && $password === "patient_password") {
        // Authentication successful
        // Redirect to village details page
        header("Location: village_details.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details Form</title>
</head>
<body>
    <h2>Patient Details</h2>
    <form action="submit_patient_details.php" method="post">
        <label for="patient_name">Name:</label><br>
        <input type="text" id="patient_name" name="patient_name" required><br>
        <label for="patient_location">Location:</label><br>
        <input type="text" id="patient_location" name="patient_location" required><br>
        <label for="symptoms">Symptoms:</label><br>
        <textarea id="symptoms" name="symptoms" rows="4" cols="50" required></textarea><br>
        <label for="problem_facing">Problem Facing:</label><br>
        <textarea id="problem_facing" name="problem_facing" rows="4" cols="50" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
