<?php
// Include your database connection file (config.php)
require "config/database.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $post_id = $_POST['post_id'];
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $comment = mysqli_real_escape_string($connection, $_POST['comment']);

    // Insert comment into the database
    $insert_query = "INSERT INTO comments (post_id, name, email, comment) VALUES ('$post_id', '$name', '$email', '$comment')";
    if (mysqli_query($connection, $insert_query)) {
        // Redirect back to the blog details page after successful submission
        header("Location: blog-details.php?id=$post_id");
        exit();
    } else {
        // Handle database insertion error
        echo "Error: " . $insert_query . "<br>" . mysqli_error($connection);
    }
} else {
    // If the form is not submitted, redirect to the homepage or an error page
    header("Location: index.php");
    exit();
}
