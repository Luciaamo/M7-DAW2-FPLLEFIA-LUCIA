<?php

// Inicializa la sesión si no está iniciada
function startSessionIfNotStarted() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

// Inicializa la lista de libros con valores predeterminados si no está definida
function initializeBooks() {
    startSessionIfNotStarted();
    if (!isset($_SESSION['libros'])) {
        $_SESSION['libros'] = [
            [
                "titulo" => "1984",
                "autor" => "George Orwell",
                "imagen" => "https://via.placeholder.com/150",
                "descripcion" => "Una distopía sobre un régimen totalitario.",
            ],
            [
                "titulo" => "Cien años de soledad",
                "autor" => "Gabriel García Márquez",
                "imagen" => "https://via.placeholder.com/150",
                "descripcion" => "Una saga familiar en el pueblo ficticio de Macondo.",
            ],
            [
                "titulo" => "El principito",
                "autor" => "Antoine de Saint-Exupéry",
                "imagen" => "https://via.placeholder.com/150",
                "descripcion" => "Un cuento filosófico disfrazado de literatura infantil.",
            ]
        ];
    }
}

// Agrega un nuevo libro al array de libros
function agregarLibro($titulo, $autor, $imagen, $descripcion) {
    startSessionIfNotStarted();
    $nuevoLibro = [
        "titulo" => $titulo,
        "autor" => $autor,
        "imagen" => $imagen,
        "descripcion" => $descripcion,
    ];
    $_SESSION['libros'][] = $nuevoLibro; // Añade el nuevo libro al final de la lista
}

// Edita un libro existente en la lista de libros
function editarLibro($id, $titulo, $autor, $imagen, $descripcion) {
    startSessionIfNotStarted();
    if (isset($_SESSION['libros'][$id])) {
        $_SESSION['libros'][$id] = [
            "titulo" => $titulo,
            "autor" => $autor,
            "imagen" => $imagen,
            "descripcion" => $descripcion,
        ];
    }
}

// Elimina un libro de la lista por su ID
function eliminarLibro($id) {
    startSessionIfNotStarted();
    if (isset($_SESSION['libros'][$id])) {
        unset($_SESSION['libros'][$id]); // Elimina el libro
        $_SESSION['libros'] = array_values($_SESSION['libros']); // Reindexa el array
    }
}

// Obtiene la lista de libros desde la sesión
function getBooks() {
    startSessionIfNotStarted();
    return $_SESSION['libros'] ?? [];
}

// Obtiene un libro por su ID
function getBookById($id) {
    startSessionIfNotStarted();
    return $_SESSION['libros'][$id] ?? null;
}