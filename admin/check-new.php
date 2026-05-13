<?php

try {

    $db = new PDO(
        'mysql:host=sql204.infinityfree.com;dbname=if0_41899308_katalog;charset=utf8',
        'if0_41899308',
        'Saab20202020'
    );

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Картинка за замовчуванням
    $img = 'assets/no-image.jpg';

    // Якщо файл завантажений
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name'] != '') {

        $fileName = time() . '_' . basename($_FILES['image']['name']);

        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            "../assets/" . $fileName
        );

        $img = "assets/" . $fileName;
    }

    $sql = "INSERT INTO news (title, content, image, datetime, menu_id)
            VALUES (:title, :content, :image, :date, :menu_id)";

    $stmt = $db->prepare($sql);

    $stmt->bindValue(":title", $_POST['title']);
    $stmt->bindValue(":content", $_POST['content']);
    $stmt->bindValue(":image", $img);
    $stmt->bindValue(":date", $_POST['date']);
    $stmt->bindValue(":menu_id", $_POST['menu_id']);

    $stmt->execute();

    header('Location: index.php');
    exit;

} catch (PDOException $e) {

    echo "Помилка БД: " . $e->getMessage();

}