<?php
/**
 * Valida os campos de um livro
 *
 * @param array $data
 * @return array Lista de mensagens de erro
 */
function validateBook(array $data): array
{
    $errors = [];

    // Title
    $titulo = trim($data['titulo'] ?? '');
    if (empty($titulo) || strlen($titulo) < 3) {
        $errors[] = "O título deve ter pelo menos 3 caracteres.";
    }

    // Author
    $autor = trim($data['autor'] ?? '');
    if (empty($autor) || strlen($autor) < 3) {
        $errors[] = "O autor deve ter pelo menos 3 caracteres.";
    }

    // Publication year
    $ano = intval($data['ano_publicacao'] ?? 0);
    if ($ano < 1500 || $ano > intval(date('Y'))) {
        $errors[] = "Ano de publicação inválido. Deve ser entre 1500 e " . date('Y') . ".";
    }

    // Genre
    $genero = trim($data['genero'] ?? '');
    if (empty($genero) || strlen($genero) < 3) {
        $errors[] = "O gênero deve ter pelo menos 3 caracteres.";
    }

    return $errors;
}
