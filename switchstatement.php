<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Switch statements</h1>
    <?php 
    
    $grade = 'A';
    echo $grade;
    switch($grade){
        case 'A':
            echo '<h2>Your grade is A</h2>';

        case 'B':
            echo '<h2>Your grade is B</h2>';
    }
    
    ?>
</body>
</html>