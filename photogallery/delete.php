<?php
include 'db.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);


    $stmt = $connection->prepare("SELECT photo_name FROM photos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {

        unlink("uploads/" . $row['photo_name']);


        $stmt = $connection->prepare("DELETE FROM photos WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    $stmt->close();
}

mysqli_close($connection);
