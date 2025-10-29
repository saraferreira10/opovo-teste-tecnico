<?php
require 'database.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: index.php");
    exit;
}

// Buscar livro
$sql = 'SELECT * FROM livros WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$book = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$book) {
    header("Location: index.php");
    exit;
}

// Atualizar livro
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST["_method"]) && $_POST["_method"] === "put") {
    $titulo = htmlspecialchars($_POST["titulo"]);
    $autor = htmlspecialchars($_POST["autor"]);
    $ano = intval($_POST["ano_publicacao"]);
    $genero = htmlspecialchars($_POST["genero"]);

    $sql = "UPDATE livros SET titulo = :titulo, autor = :autor, ano_publicacao = :ano, genero = :genero WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'titulo' => $titulo,
        'autor' => $autor,
        'ano' => $ano,
        'genero' => $genero,
        'id' => $id
    ]);

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php include 'partials/navbar.php'; ?>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold display-5 text-primary">
                Editar Livro
            </h1>
            <p class="text-secondary fs-5">Altere os dados do livro e clique em salvar</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-lg rounded-4 p-4">
                    <form method="POST">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="id" value="<?= $book['id'] ?>">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Título</label>
                            <input type="text" name="titulo" class="form-control form-control-lg"
                                value="<?= htmlspecialchars($book['titulo']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Autor</label>
                            <input type="text" name="autor" class="form-control form-control-lg"
                                value="<?= htmlspecialchars($book['autor']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Ano de Publicação</label>
                            <input type="number" name="ano_publicacao" class="form-control form-control-lg"
                                value="<?= htmlspecialchars($book['ano_publicacao']) ?>" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Gênero</label>
                            <input type="text" name="genero" class="form-control form-control-lg"
                                value="<?= htmlspecialchars($book['genero']) ?>" required>
                        </div>

                        <div class="d-flex justify-content-center gap-3">
                            <button type="submit" class="btn btn-primary btn-lg px-4">
                                <i class="bi bi-check-circle me-2"></i>Salvar
                            </button>
                            <a href="index.php" class="btn btn-outline-primary btn-lg px-4">
                                <i class="bi bi-arrow-left-circle me-2"></i>Voltar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>