<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página não encontrada - 404</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .error-container {
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .error-code {
            font-size: 6rem;
            font-weight: bold;
            color: #6c757d;
        }

        .error-message {
            font-size: 1.5rem;
            color: #495057;
        }

        .btn-home {
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <?php require basePath('views/partials/navbar.php'); ?>

    <div class="container error-container">
        <div class="error-code">404</div>
        <div class="error-message">Ops! A página que você procura não foi encontrada.</div>
        <a href="/" class="btn btn-outline-primary btn-home">
            <i class="bi bi-arrow-left-circle me-2"></i>Voltar à Biblioteca
        </a>
    </div>

    <?php require basePath('views/partials/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>