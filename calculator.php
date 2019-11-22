<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form>
      <input type="text" name="number1" placeholder="number1" />
      <input type="text" name="number2" placeholder="number2" />
      <select name="operator">
        <option>NONE</option>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
      </select>
      <br>
      <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
<?php
    if (isset($_GET['submit'])) {
      $result1 = $_GET['number1'];
      $result2 = $_GET['number2'];
      $operator = $_GET['operator'];
    switch ($operator) {
      case "None":
        echo "Error";
        break;
      case "+":
        echo $result1 + $result2;
        break;
      case "-":
        echo $result1 - $result2;
        break;
      case "*":
        echo $result1 * $result2;
        break;
      case "/":
        echo $result1 / $result2;
        break;
      }
    }

 ?>
<p>ja</p>

  </body>
</html>
