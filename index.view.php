<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
    }
    </style>
</head>

<body>
    <ul>
    
    <?php foreach($animals as $animal) :?>
            <li><?= $animal?></li>
    <?php endforeach ?>


    <!-- <?php
    foreach($names as $name) {
        echo "<li>$name</li>";
    }
    ?> -->
    </ul>

    
</body>

</html>