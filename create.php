<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $titulo = htmlspecialchars($_POST["titulo"]);
    $autor = htmlspecialchars($_POST["autor"]);
    $ano = intval($_POST["ano_publicacao"]);
    $genero = htmlspecialchars($_POST["genero"]);

    $sql = "INSERT INTO livros (titulo, autor, ano_publicacao, genero) VALUES (:titulo, :autor, :ano, :genero)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'titulo' => $titulo,
        'autor' => $autor,
        'ano' => $ano,
        'genero' => $genero
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
    <title>Cadastrar Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php include 'partials/navbar.php'; ?>

    <div class="container mt-5">
        <h1 class="mb-4 text-center text-primary fw-bold">📚 Cadastrar Livro</h1>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Título</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Ex: Dom Casmurro" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Autor</label>
                                <input type="text" name="autor" class="form-control" placeholder="Ex: Machado de Assis" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Ano de Publicação</label>
                                <input type="number" name="ano_publicacao" class="form-control" placeholder="Ex: 1899" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Gênero</label>
                                <input type="text" name="genero" class="form-control" placeholder="Ex: Romance, Drama..." required>
                            </div>

                            <div class="d-flex justify-content-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-check-circle me-2"></i>Salvar
                                </button>
                                <a href="index.php" class="btn btn-outline-primary px-4">
                                    <i class="bi bi-arrow-left-circle me-2"></i>Voltar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
