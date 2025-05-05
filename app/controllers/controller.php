<?php
require_once __DIR__ . '/../services/session.service.php';
require_once __DIR__ . "/error.controller.php";
require_once __DIR__ . '/../services/validator.service.php';
require_once __DIR__ ."/../enums/fonction.php";

function redirectToRoute(string $url): void {
    header('Location: ' . $url);
    exit();
}

function render(string $viewPath, array $params = []): void {
    extract($params);

    $viewFullPath = __DIR__ . '/../views/' . $viewPath;

    if (file_exists($viewFullPath)) {
        require_once $viewFullPath;
    } else {
        require_once __DIR__ . '/error.controller.php';
        afficherPageErreur();
    }
}

function render_view_layout(string $viewPath, array $params = []): void {
    $params['interface'] = $viewPath; 
    extract($params);

    $layoutPath = __DIR__ . '/../views/base.layout.html.php';
    if (file_exists($layoutPath)) {
        include_once $layoutPath;
    } else {
        require_once __DIR__ . '/../controllers/error.controller.php';
        afficherPageErreur();
    }
}


function savePhoto(array $file, string $destinationFolder): ?string {
    if (!isset($file['tmp_name']) || $file['error'] !== UPLOAD_ERR_OK) {
        return null;
    }

    $filename = uniqid('img_', true) . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
    $destination = $destinationFolder . '/' . $filename;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        return $filename;
    }

    return null;
}
