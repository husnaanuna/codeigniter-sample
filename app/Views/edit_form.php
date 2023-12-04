<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <form method="POST" action="/update/<?= $data->id ?>">
    <label for="name">Name:</label>
      <input type="text" name="name" value="<?= $data->name ?>" required >

      <br>

      <label for="email">Email:</label>
      <input type="email" name="email" value="<?= $data->email ?>" required>

      <br>

      <input type="submit" value="Submit">
    </form>
</body>
</html>