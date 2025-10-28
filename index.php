<?php
require 'database.php';

$stmt = $pdo->prepare('SELECT * FROM livros');
$stmt->execute();
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/navbar.php'; ?>
    <div class="container">
        <h1>Minha Biblioteca</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ano de Publicação</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <th scope="row"><?= $book['id'] ?></th>
                        <td><?= $book['titulo'] ?></td>
                        <td><?= $book['autor'] ?></td>
                        <td><?= $book['ano_publicacao'] ?></td>
                        <td><?= $book['genero'] ?></td>
                        <td>
                            <a class="btn btn-primary" href="book.php?id=<?= $book['id'] ?>">
                                Ver livro
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</body>

</html>