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

if (!$book) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php include 'partials/navbar.php'; ?>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg rounded-4 p-4">

                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-primary">
                            <i class="bi bi-journal-bookmark-fill me-2"></i><?= htmlspecialchars($book['titulo']) ?>
                        </h2>
                    </div>

                    <div class="card-body">
                        <p><strong>Autor:</strong> <?= htmlspecialchars($book['autor']) ?></p>
                        <p><strong>Ano de Publicação:</strong> <?= $book['ano_publicacao'] ?></p>
                        <p><strong>Gênero:</strong> <?= htmlspecialchars($book['genero']) ?></p>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="index.php" class="btn btn-outline-primary">
                            <i class="bi bi-arrow-left-circle me-2"></i>Voltar
                        </a>
                        <a href="update.php?id=<?= $book['id'] ?>" class="btn btn-primary">
                            <i class="bi bi-pencil-square me-2"></i>Editar
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>