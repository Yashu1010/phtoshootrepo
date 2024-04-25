<?php
// Assuming you have a database connection established
$conn=mysqli_connect('localhost','root','','skstudiodb');

// Fetch images from the database
$sql = "SELECT `image` FROM gallary LIMIT 3"; // Assuming 'images' is the table name
$result = mysqli_query($conn, $sql);

// Check if there are any images
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Output the image as base64 data URI
        echo '<img src="$sql" alt="Image">';
    }
} else {
    echo "No images found.";
}

// Close the database connection
mysqli_close($conn);
?>