<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Task for the day!</h1>
    <!-- <ul>
        <?php foreach($task as $heading => $value) :?>
        <li><strong><?= ucwords($heading) ?>: </strong><?= $value ?></li>
        <?php endforeach; ?>
    </ul> -->

    <ul>
        <li>
            <strong>Name: </strong> <?= $task['title'] ?>
        </li>
        <li>
            <strong>Due date: </strong> <?= $task['due'] ?>
        </li>
        <li>
            <strong>Person Responsible: </strong> <?= $task['assigned_to'] ?>
        </li>
        <li>
            <!-- <strong>Status: </strong> <?= $task['completed']? 'Complete': 'Incomplete' ?> -->
            <!-- Tenary expression $task['completed']? 'Complete': 'Incomplete' -->

            <strong>Status: </strong> 

            <!-- <?php if($task['completed']) {
                echo '&#9989;';
            } else {
                echo '&#x2718;';
            }
            ?> -->

            <?php if($task['completed']) :?>
                <span>&#9989;</span>
            <?php else :?>
                <span>&#x2718;</span>
            <?php endif; ?>


        </li>

    </ul>
</body>

</html>