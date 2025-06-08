<?php
include 'db.php';

if (isset($_FILES['photo']) && isset($_POST['comment'])) {
    $comment = $_POST['comment'];
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];

    move_uploaded_file($photo_tmp, "uploads/" . $photo_name);

    $stmt = $connection->prepare("INSERT INTO photos (photo_name, comment) VALUES (?, ?)");
    $stmt->bind_param("ss", $photo_name, $comment);
    $stmt->execute();
    $stmt->close();
}

mysqli_close($connection);

header("Location: index.php");
