# 📚 Minha Biblioteca - CRUD PHP

Uma aplicação simples de gerenciamento de livros feita com **PHP**, **MySQL** e **Bootstrap**.  
Permite cadastrar, listar, editar e excluir livros.

---

## 1. Features

- Cadastro de livros com título, autor, ano de publicação e gênero.
- Listagem de todos os livros cadastrados.
- Edição e exclusão de livros.
- Layout responsivo com **Bootstrap 5**.

---

## 2. Screenshots

### Lista de livros
<img width="1920" height="913" alt="pint" src="https://github.com/user-attachments/assets/285eead6-d5bd-4d9b-8f98-4caa1e2048b6" />

---

## 3. Vídeos de Demonstração

- [Demonstração de cadastro](screenshots/CREATE.mp4)
- [Demonstração da edição](screenshots/UPDATE.mp4)
- [Demonstração da listagem única](screenshots/READE_ONE.mp4)
- [Demonstração da exclusão](screenshots/DELETE.mp4)
- [Demonstração da validação de dados](screenshots/VALIDACAO.mp4)

---

## 4. Requisitos

- PHP
- MySQL 
- Servidor local (XAMPP, Laragon, MAMP etc)

---

## 5. Instalação

1. Clone o projeto:

```bash
git clone https://github.com/saraferreira10/opovo-teste-tecnico.git
```
2. Configure o XAMPP:

3.  Coloque a pasta do projeto dentro do diretório htdocs do XAMPP, por exemplo: C:\xampp\htdocs\opovo-teste-tecnico.

4. Configure o banco de dados usando o Workbench ou phpMyAdmin.

5. Crie um banco chamado biblioteca, seguindo o SQL abaixo:
```bash
CREATE DATABASE IF NOT EXISTS biblioteca;

USE biblioteca;

CREATE TABLE IF NOT EXISTS livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    ano_publicacao INT NOT NULL,
    genero VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO livros (titulo, autor, ano_publicacao, genero) VALUES
('Dom Casmurro', 'Machado de Assis', 1899, 'Romance'),
('O Cortiço', 'Aluísio Azevedo', 1890, 'Realismo'),
('A Hora da Estrela', 'Clarice Lispector', 1977, 'Drama'),
('Capitães da Areia', 'Jorge Amado', 1937, 'Ficção'),
('Grande Sertão: Veredas', 'João Guimarães Rosa', 1956, 'Literatura Brasileira'),
('Memórias Póstumas de Brás Cubas', 'Machado de Assis', 1881, 'Romance Filosófico'),
('O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 1943, 'Infantil'),
('1984', 'George Orwell', 1949, 'Distopia'),
('O Senhor dos Anéis: A Sociedade do Anel', 'J. R. R. Tolkien', 1954, 'Fantasia'),
('Harry Potter e a Pedra Filosofal', 'J. K. Rowling', 1997, 'Fantasia');

SELECT * FROM livros;

```
6. Configure as credenciais do banco no arquivo db/database.php:

```bash
$host = 'localhost';
$port = 3306;
$dbName = 'biblioteca';
$username = 'root';
$password = '';
```

7. Acesse o projeto no navegador:
```bash
http://localhost/opovo-teste-tecnico/
```
