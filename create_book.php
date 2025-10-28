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
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h2 class="mb-4 text-center">Cadastrar Livro</h2>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Título</label>
                    <input type="text" name="titulo" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Autor</label>
                    <input type="text" name="autor" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ano de Publicação</label>
                    <input type="number" name="ano_publicacao" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gênero</label>
                    <input type="text" name="genero" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <a href="index.php" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>