<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <?php require 'partials/navbar.php'; ?>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold display-5 text-primary">
                Minha Biblioteca
            </h1>
            <p class="text-secondary fs-5">Gerencie facilmente os livros cadastrados no sistema 📚</p>
        </div>

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
                <div class="mb-3">
                    <h4 class="fw-semibold text-dark mb-0">Lista de Livros</h4>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-primary text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Título</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Gênero</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php require 'partials/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>