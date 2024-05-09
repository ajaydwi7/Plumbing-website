<?php
require "config/database.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define validation and sanitization filters
    $filters = array(
        'name' => FILTER_SANITIZE_STRING,
        'email' => FILTER_SANITIZE_EMAIL,
        'number' => array('filter' => FILTER_VALIDATE_REGEXP, 'options' => array('regexp' => '/^\d{10,}$/')),
        'service' => FILTER_SANITIZE_STRING,
        'address' => FILTER_SANITIZE_STRING,
        'message' => FILTER_SANITIZE_STRING
    );

    // Validate and sanitize form inputs
    $validated_data = filter_input_array(INPUT_POST, $filters);

    // Check if any validation failed
    if (in_array(false, $validated_data, true)) {
        $_SESSION['contact_form'] = "Invalid input data.";
        header("Location: contact.php");
        exit();
    }

    // Attempt to insert the data into the database
    $sql = "INSERT INTO contact_form_submissions (name, email, phone, service, address, message) VALUES (?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($connection, $sql)) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssssss", $validated_data['name'], $validated_data['email'], $validated_data['number'], $validated_data['service'], $validated_data['address'], $validated_data['message']);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['contact_form'] = "Your message has been successfully submitted.";
            mysqli_stmt_close($stmt);
            mysqli_close($connection);
            header("Location: contact.php");
            exit();
        } else {
            $_SESSION['contact_form'] = "Error: " . mysqli_error($connection);
            mysqli_stmt_close($stmt);
            mysqli_close($connection);
            header("Location: contact.php");
            exit();
        }
    } else {
        $_SESSION['contact_form'] = "Error: Unable to prepare statement.";
        header("Location: contact.php");
        exit();
    }
} else {
    // If the request method is not POST, redirect back to the form page
    header("Location: contact.php");
    exit();
}
?>
