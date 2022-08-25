<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Structures</title>
</head>
<body>
    

<?php 
    require './DS/stack.php';

    use DS\Stack;

    $stack = new Stack();
    $stack->push('hi');
    $stack->push('hello');
    $stack->pop();
    $stack->listElements();
?>
</body>
</html>