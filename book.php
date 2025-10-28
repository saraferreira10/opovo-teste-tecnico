<?php
require 'database.php';
$id = $_GET["id"] ?? null;

if (empty($id)) {
    header("Location: index.php");
    exit;
}

$sql = 'SELECT * FROM livros WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

$book = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <h1>Livro #<?= $id ?></h1>
    <p><?= $book['titulo'] ?></p>
</body>

</html>