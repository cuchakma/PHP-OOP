<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="../About.php">About Us</a></li>
            <li><a href="../Contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <ul>
        <h1>Tasks</h1>
        <?php foreach( $data as $object ): ?>
                <?php if( $object->completed ): ?>
                    <li>
                        <del>
                            <?php echo $object->description; ?>
                        </del>
                    </li>
                <?php else: ?>
                    <li>
                        <?php echo $object->description; ?>
                    </li>
                <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>