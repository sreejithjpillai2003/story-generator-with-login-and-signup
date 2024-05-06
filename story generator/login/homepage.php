<?php
session_start();
include("connect.php");

// Check if user is logged in
if(isset($_SESSION['email'])){
    // Redirect to the specified URL
    header("Location: http://localhost/MAIN%202/main.html");
    exit(); // Make sure to stop execution after the redirection
} else {
    // User is not logged in, display the homepage content
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
    </head>
    <body>
        <div style="text-align:center; padding:15%;">
            <p style="font-size:50px; font-weight:bold;">Hello :)</p>
            <a href="logout.php">Logout</a>
        </div>
    </body>
    </html>
    ';
}
?>
