<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
</head>
<body>
    <p>Profile</p>
    <?php foreach ($data as $user) { ?>
        <p><?= $user->name ?></p>
    <?php } ?>
    <b><?= $data[0]->name ?></b>
</body>
</html>