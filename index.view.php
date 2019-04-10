
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>asgn10</title>
</head>
<body>

<ul>
    <?php foreach($people as $person) : ?>
        
        <li>
            <?= $person->firstName .' ' . $person->lastName ?>
        </li>

   <?php endforeach; ?> 

</ul>    
</body>
</html>