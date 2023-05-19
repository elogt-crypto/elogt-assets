<!DOCTYPE html>
<html>
<head>
    <title>Valid License Page</title>
</head>
<body>
    <h1>Welcome to the Valid License Page!</h1>
    
    <?php
    // Check if the user has a valid license
    $isValidLicense = true; // You can replace this with your own license validation logic

    // Display "Valid license" if the license is valid
    if ($isValidLicense) {
        echo '<p>Valid license</p>';
    }
    ?>
</body>
</html>
