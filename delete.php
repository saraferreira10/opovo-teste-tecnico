<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'delete') {
    if (isset($_POST['id'])) {
        $id = intval($_POST['id']);
        $stmt = $pdo->prepare('DELETE FROM livros WHERE id = :id');
        $stmt->execute(['id' => $id]);
    }
}

header('Location: index.php');
exit;

?>