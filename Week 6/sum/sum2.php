<?php
// Check if the num1 and num2 parameters are set in the URL
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    // Retrieve the numbers from the URL parameters
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    
    // Calculate the sum of the numbers
    $sum = $num1 + $num2;
    
    // Display the sum within a valid HTML structure
    echo "<!DOCTYPE html>\n";
    echo "<html>\n<head>\n<title>Sum Calculation</title>\n</head>\n<body>\n";
    echo "<p>The sum of the numbers is: " . $sum . "</p>\n";
    echo "<a href='form2.html'>Go back to the form</a>\n";
    echo "</body>\n</html>";
} else {
    // If the parameters are not set, redirect to the form
    header('Location: form2.html');
    exit;
}
?>
