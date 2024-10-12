<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE CALCULATOR</title>
    <style>
        body {
            background-color: palevioletred;
        }
        form {
            padding: 10px;
            border-color: antiquewhite;
            border-style: solid;
            border-radius: 20px;
            background-color: skyblue;
        }
        .h1 {
            font-style: italic;
            font-weight: bold;
        }
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }
    </style>
</head>
<body>

        <div class="form-container">
            <div>
    <form action="" method="POST">
        <label for="number">NUM1</label>
        <input type="number" name="number" id="number">
        <br>
        <label for="number1">NUM2</label>
        <input type="number" name="number1" id="number1">
        <br>
        <label for="operator">OPERATOR</label>
        <select name="operator" id="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="multi">*</option>
            <option value="div">/</option>
            <option value="mod">%</option>
        </select>
        <input type="submit" name="submit" id="submit">
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $num1 = htmlspecialchars($_POST['number']);
            $num2 = htmlspecialchars($_POST['number1']);
            $OPERATOR = htmlspecialchars($_POST['operator']);
  
            switch($OPERATOR) {
                case 'add':
                    $add = $num1 + $num2;
                    echo "<h1 style='margin-left: 50px; font-style: italic;
                    font-weight: bold;'>RESULT:$add </h1>";
                    break;
                    
                case 'sub':
                    $sub = $num1 - $num2;
                    echo "<h1 style='margin-left: 50px; font-style: italic;
                    font-weight: bold;'>RESULT:$sub </h1>";
                    break;
                    
                case 'multi':
                    $mul = $num1 * $num2;
                    echo "<h1 style='margin-left: 50px; font-style: italic;
                    font-weight: bold;'>RESULT:$mul </h1>";
                    break;
                    
                case 'div':
                    $div = $num2 / $num1;
                    echo "<h1 style='margin-left: 50px; font-style: italic;
                    font-weight: bold;'>RESULT:$div </h1>";
                    break;
                    
                case 'mod':
                    $mod = $num2 % $num1;
                    echo "<h1 style='margin-left: 50px; font-style: italic;
                    font-weight: bold;'>RESULT:$mod </h1>";
                    break;
                default: 
                    echo "noice";
                    break;
            }
        }
    ?>
    </div>
        </div>
</body>
</html>