<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h2>If statements</h2>';

    $grade = 50;
    echo $grade;

    if($grade >= 50) {
        echo '<h3>You have passed</h3>';
    } else {
        echo '<h3>No you dont</h3>';
    };
    ?>
</body>
</html>