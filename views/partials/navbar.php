<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/books">
            Minha Biblioteca
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a href="/books/create" class="btn btn-outline-primary btn-sm px-3">
                        <i class="bi bi-plus-circle me-1"></i> Adicionar Livro
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    }

    .navbar-brand {
        color: #212529;
        font-weight: 600;
        font-size: 1.2rem;
        text-decoration: none;
        pointer-events: none;
        cursor: default;
    }

    .btn-outline-primary {
        border-color: #0d6efd;
        color: #0d6efd;
        transition: all 0.2s ease-in-out;
    }

    .btn-outline-primary:hover {
        background-color: #0d6efd;
        color: #fff;
    }
</style>