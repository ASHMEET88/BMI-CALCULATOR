<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calculate"])) {
    $feet = isset($_POST["feet"]) ? (int)$_POST["feet"] : 0;
    $inches = isset($_POST["inches"]) ? (int)$_POST["inches"] : 0;
    $weight = isset($_POST["weight"]) ? (float)$_POST["weight"] : 0;

    if ($feet > 0 || $inches > 0) {
        $total_inches = ($feet * 12) + $inches;
        $height_cm = $total_inches * 2.54;
        $height_m = $height_cm / 100;

        if ($height_m > 0) {
            $bmi = round($weight / ($height_m * $height_m), 2);
        } else {
            $bmi = "Invalid height";
        }

        $category = "";
        $bar = "";
        if ($bmi < 18.5) {
            $category = "Underweight";
            $bar = "█░░░░░░";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $category = "Normal weight";
            $bar = "███░░░░";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $category = "Overweight";
            $bar = "█████░░";
        } else {
            $category = "Obese";
            $bar = "███████";
        }

        $output = "<h3>Results:</h3>";
        $output .= "Height: <strong>$height_cm cm</strong><br>";
        $output .= "BMI: <strong>$bmi</strong> ($category) <br>";
        $output .= "BMI Chart: <br>";
        $output .= "[Underweight] ░░░░░░░░ <br>";
        $output .= "[Normal] ░░░░███░░░░ <br>";
        $output .= "[Overweight] ░░█████░░ <br>";
        $output .= "[Obese] ░███████ <br>";
        $output .= "Your BMI: <strong>$bar</strong>";
    } else {
        $output = "<p style='color:red;'>Please enter a valid height.</p>";
    }
}
?>
