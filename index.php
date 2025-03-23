<?php include 'bmi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="top-message">
        <a href="https://wa.me/919653333366?text=Hi%20Ashmeet,%20I%20Need%20Your%20Help%20For%20Buy%20Health%20Insurance." target="_blank">
            For Any Query or Purchase A Health Policy Call or WhatsApp on 9653333366 ASHMEET SINGH
        </a>
    </div>

    <div class="container">
        <h2>BMI Calculator</h2>
        <form method="post" action="">
            <label for="feet">Height:</label>
            <input type="number" name="feet" id="feet" required placeholder="Feet"> ft 
            <input type="number" name="inches" id="inches" required placeholder="Inches"> in
            <br><br>
            <label for="weight">Weight (kg):</label>
            <input type="number" name="weight" id="weight" required step="0.1" placeholder="Weight in kg">
            <br><br>
            <input type="submit" name="calculate" value="Calculate BMI">
        </form>
        <div class="result">
            <?php if(isset($output)) echo $output; ?>
        </div>
    </div>
</body>
</html>
