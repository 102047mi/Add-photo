<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея</title>
</head>

<body>
    <h1>Добавление фото</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" accept="image/*" required> <br>
        <textarea name="comment" placeholder="Ваш комментарий..." required></textarea> <br>
        <button type="submit">Загрузить</button>
    </form>

    <h2>Галерея</h2>
    <div id="photo-gallery"></div>
    <script src="script.js"></script>
</body>

</html>