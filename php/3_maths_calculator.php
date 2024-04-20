<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculator</title>
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
    width: 50%;
  }
  
  h2 {
    margin-bottom: 20px;
    text-align: center;
  }
  
  table {
    width: 100%;
  }
  
  table td {
    padding: 10px;
  }
  
  input[type="number"] {
    width: calc(100% - 22px); /* Adjusted for padding and border */
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
  }
  
  input[type="radio"] {
    margin-right: 5px;
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
  <h2>Maths Calculator</h2>
  <form action="submit/maths_calculator.php" method="post">
    <label for="num1">Number 1:</label>
    <input type="number" id="num1" name="num1" required><br>
    
    <label for="num2">Number 2:</label>
    <input type="number" id="num2" name="num2" required><br>
    
    <table>
        <tr>
            <td><b>Select operation</b></td>
        </tr>
      <tr>
        <td width=50%>
          <label>
              <input type="radio" id="add" name="operation" value="1" required>
            Addition
          </label>
        </td>
        <td width=50%>
          <label>
              <input type="radio" id="subtract" name="operation" value="2">
            Subtraction
          </label>
        </td>
      </tr>
      <tr>
        <td>
          <label>
              <input type="radio" id="multiply" name="operation" value="3">
            Multiplication
          </label>
        </td>
        <td>
          <label>
              <input    type="radio" id="divide" name="operation" value="4">
            Division
          </label>
        </td>
      </tr>
    </table>
    
    <input type="submit" value="Calculate">
    <h5>
        <?php 
            if(isset($_REQUEST['msg'])==true)
                echo $_REQUEST['msg'];
        ?>
    </h5>
  </form>
</div>

</body>
</html>
