<?php
// Replace with your actual database credentials
include "./db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and process the form data
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $profession = $_POST["profession"]; // Assuming the checkbox values are in an array named "profession"
    $shopOnline = $_POST["shopOnline"];

    // Insert the data into the database
    $sql = "INSERT INTO users (gender, age, profession, shop_online) VALUES ('$gender', '$age', '$profession', '$shopOnline')";

    if (mysqli_query($conn, $sql)) {
        // Data inserted successfully
        echo "Data has been saved successfully.";

        // Send email
        $to = "chandrakantbudhalakoti189@gmail.com";
        $subject = "New Form Submission";
        $message = "Gender: $gender\nAge: $age\nProfession: $profession\nShop Online: $shopOnline";
        $headers = "From: chandrakantbudhalakoti189@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            echo "Form data has been sent to your email.";
        } else {
            echo "Failed to send the email. Please check your email settings.";
        }

        header("Location: index.php");
    } else {
        // Error occurred during insertion
        echo "Error: " . mysqli_error($conn);
    }
}
$conn->close();
?>
