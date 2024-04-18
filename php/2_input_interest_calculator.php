<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interest Calculator</title>
<style>
    /* Basic styling for better presentation */
    body {
        font-family: Arial, sans-serif;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<h2>Interest Calculator</h2>

<form action="submit/calculate_interest.php" method="post">
    <h3 align='center'>Simple Interest calculator</h3>
    <label for="amount">Amount:</label>
    <input type="number" id="amount" name="amount" required>
    
    <label for="rate">Rate (%):</label>
    <input type="number" id="rate" name="rate" required>
    
    <label for="years">Years:</label>
    <input type="number" id="years" name="year" required>
    
    <input type="submit" value="Calculate Interest">
</form>

</body>
</html>
