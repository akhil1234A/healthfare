<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
       header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $height = floatval($_POST['height']);
    $weight = floatval($_POST['weight']);

    // Check if height and weight are valid numbers
    if (!is_numeric($height) || !is_numeric($weight)) {
        die('Please enter valid height and weight values.');
    }

    // Convert height from cm to meters
    $heightInMeters = $height / 100;

    // Calculate BMI
    $bmi = $weight / ($heightInMeters * $heightInMeters);
    $bmi = round($bmi, 2); // Round to two decimal places

    // Interpret BMI
    $bmiCategory = interpretBMI($bmi);
    
    // Display the result
    
	 header("Location: bmi.php?bmi=" . $bmi . "&bmiCategory=" . $bmiCategory);

	 exit();
} else {
    // Redirect to the form if accessed directly
    header("Location: bmi.php");
    exit();
}

function interpretBMI($bmi) {
    if ($bmi < 18.5) {
        return "Underweight";
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        return "Normal weight";
    } elseif ($bmi >= 25 && $bmi < 30) {
        return "Overweight";
    } else {
        return "Obese";
    }
}
ob_end_flush();
?>
