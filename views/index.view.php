<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Excercises</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <h1>Tasks Manager</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>

        <li>

            <?php if($task->completed) :?>

            <strike>
                <?= $task->description; ?>
            </strike>

            <?php else: ?>

            <?= $task->description; ?>

            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>