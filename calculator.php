<!DOCTYPE html>
<html>
<head>
    <title>CIT17 
        Calculator</title>
    <style>
        body {
            text-align: center;
            margin-top: 100px;
        }

        form {
            display: inline-block;
        }

        input[type="text"], select, input[type="submit"] {
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>CIT17 Calculator</h1>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Enter number 1">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter number 2">
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        // Check for division by zero
        if ($operator === '/' && $num2 == 0) {
            echo "Division by zero is not allowed.";
        } else {
            // Perform the calculation based on the selected operator
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
                    $result = $num1 / $num2;
                    break;
                default:
                    echo "Invalid operator";
            }

            echo "Result: $num1 $operator $num2 = $result";
        }
    }
    ?>
</body>
</html>
