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
    require './DS/queue.php';

    use DS\Stack;
    $stack = new Stack();
    $stack->push('hi');
    $stack->push('hello');
    $stack->pop();
    $stack->listElements();

    echo "<br>";
    
    use DS\Queue;
    $queue = new Queue();
    $queue->enqueue('element1');
    $queue->dequeue();
    $queue->dequeue();

    echo "<hr>";

    require './DS/node.php';
    require './DS/linkedList.php';

    use DS\LinkedList;
    use DS\Node;

    $node1 = new Node(1, null);
    $node2 =  new Node(2, null);
    $node1->setNext($node1);
    var_dump($node1->getNext());
?>
</body>
</html>