<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css_for_calculator/calculator.css">
    <title>Simple Calculator</title>
</head>
<body>
    
    <div class="calculator">
        <h3>Enjoy BAI'S Calculator</h3>
        <form action="calculator.php" method="post">
            <input type="text" name="num1" placeholder="Enter number 1" required>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="num2" placeholder="Enter number 2" required>
            <button type="submit" name="calculate">Calculate</button>
        </form>
        <div class="result">
            <?php
                if (isset($_POST['calculate'])) {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operator = $_POST['operator'];

                    switch ($operator) {
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
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                            } else {
                                echo "Cannot divide by zero.";
                            }
                            break;
                        default:
                            echo "Invalid operator.";
                            break;
                    }

                    if (isset($result)) {
                        echo "Result: $result";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
