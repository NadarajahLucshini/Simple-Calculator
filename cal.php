<! DOCTYPE html>
<html lang = "en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Calculator</title>
</head>

<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter first number" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter second number" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
    if(isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero";
                }
                break;
            default:
                $result = "Invalid operator";
        }
        echo "<p>Result: $result</p>";
    }
    ?>
</body>

</html>
