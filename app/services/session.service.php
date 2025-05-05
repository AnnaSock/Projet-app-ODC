<?php
 
 $session_service = [
    "requet_post" => function(string $key, $default = null): ?string {
        return $_POST[$key] ?? $default;
    },

    "start_session" => function(): void {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    },

    "set_session" => function(string $key, $value): void {
        $_SESSION[$key] = $value;
    },

    "get_session" => function(string $key, $default = null) {
        return $_SESSION[$key] ?? $default;
    },

    "unset_session" => function(string $key): void {
        unset($_SESSION[$key]);
    },

    "destroy_session" => function(): void {
        if (session_status() !== PHP_SESSION_NONE) {
            session_destroy();
            $_SESSION = [];
        }
    },
];




























// function startSession(): void {
//     if (session_status() === PHP_SESSION_NONE) {
//         session_start();
//     }
// }

// function setUserSession(array $user): void {
//     startSession();
//     $_SESSION['user'] = $user;
// }

// function getUserSession(): ?array {
//     startSession();
//     return $_SESSION['user'] ?? null;
// }

// function destroySession(): void {
//     startSession();
//     session_unset();
//     session_destroy();
// }

// function isUserConnected(): bool {
//     startSession();
//     return isset($_SESSION['user']);
// }


