<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functions/add-video.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name">
        <input type="text" name="description">
        <input type="file" accept="video/*" name="video">
        <input type="submit" value="submit">
    </form>
</body>
</html>