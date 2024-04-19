<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dimensions Input Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
  }
  
  h2 {
    margin-bottom: 20px;
    text-align: center;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
  }
  
  input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    font-size: 16px;
  }
  
  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
 
<div class="container">
  <h2>Volume Calculator</h2>
  <form action="submit/calculate_volume.php" method="get">
    <label for="length">Length:</label>
    <input type="number" id="length" name="length" min="0" step="any" required>
    
    <label for="width">Width:</label>
    <input type="number" id="width" name="width" min="0" step="any" required>
    
    <label for="depth">Depth:</label>
    <input type="number" id="depth" name="depth" min="0" step="any" required>
    
    <input type="submit" value="Calculate" name="submit">
  </form>
</div>

</body>
</html>
