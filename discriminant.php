<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Discriminant Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .result { margin-top: 20px; font-size: 24px; font-weight: bold; }
    </style>
</head>
<body>

    <h2>Discriminant of a quadtratic equation</h2>

    <?php
    $result = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $a = filter_input(INPUT_POST, 'a', FILTER_VALIDATE_FLOAT);
        $b = filter_input(INPUT_POST, 'b', FILTER_VALIDATE_FLOAT);
        $c = filter_input(INPUT_POST, 'c', FILTER_VALIDATE_FLOAT);

        
        if ($a !== false && $b !== false && $c !== false) {
           
            $discriminant = ($b * $b) - (4 * $a * $c);

           
            $result = $discriminant;
        } else {
            $result = "Error: Please enter valid numbers for A, B, and C.";
        }
    }
    ?>

    <form method="post" action="">
        <label for="a">A</label>
        <input type="text" id="a" name="a" value="<?php echo isset($_POST['a']) ? htmlspecialchars($_POST['a']) : '3'; ?>"><br><br>

        <label for="b">B</label>
        <input type="text" id="b" name="b" value="<?php echo isset($_POST['b']) ? htmlspecialchars($_POST['b']) : '2'; ?>"><br><br>

        <label for="c">C</label>
        <input type="text" id="c" name="c" value="<?php echo isset($_POST['c']) ? htmlspecialchars($_POST['c']) : '1'; ?>"><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    
    if ($result !== "") {
        echo "<div class='result'>" . htmlspecialchars($result) . "</div>";
    }
    ?>

</body>
</html>