<?php
function convertTemperature($value, $unit) {
    if ($unit === "C") {
        // Convert Celsius to Fahrenheit
        $converted = ($value * 9/5) + 32;
        $result = "{$value}°C is equal to {$converted}°F";
    } elseif ($unit === "F") {
        // Convert Fahrenheit to Celsius
        $converted = ($value - 32) * 5/9;
        $result = "{$value}°F is equal to {$converted}°C";
    } else {
        // Invalid unit
        $result = "Invalid unit. Please use 'C' for Celsius or 'F' for Fahrenheit.";
    }
    return $result;
}

// Example Usage:
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["value"]) && isset($_GET["unit"])) {
    $value = $_GET["value"];
    $unit = $_GET["unit"];
    echo convertTemperature($value, $unit);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="get" action="">
        <label for="value">Temperature Value:</label>
        <input type="number" id="value" name="value" required>
        <br><br>
        <label for="unit">Select Unit:</label>
        <select id="unit" name="unit" required>
            <option value="C">Celsius</option>
            <option value="F">Fahrenheit</option>
        </select>
        <br><br>
        <button type="submit">Convert</button>
    </form>
</body>
</html>
