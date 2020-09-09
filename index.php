<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <form action="classes/calculation.php" method="POST">
        <select name="operator">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="div">Division</option>
            <option value="mul">Multiplication</option>
        </select>
        <input name="firstNumber" type="number">
        <input name="secondNumber" type="number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>

</html>