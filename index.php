<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Click these links</h1>

    <ul>
        <li><a href="array.php">Simple array and printouts</a></li>
        <li><a href="forloop.php">Simple for loop</a></li>
        <li><a href="dowhileloop.php">Simple do while</a></li>
        <li><a href="whileloop.php">Simple while loop</a></li>
        <li><a href="ifstatement.php">Simple if statement</a></li>
        <li><a href="switchstatement.php">Simple awitch statement</a></li>
    </ul>

    <?php 
    
        echo 'Hello!';
        echo '<h2>Hello h2 created with php</h2>';

        $name = "Roman Butakov";
        $age = 28;
        echo $name;

        echo '<h1>My name is: '.$name .' and my age is '.$age.' </h1>';

    ?>
</body>
</html>