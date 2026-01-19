<?php
namespace app\Http\middleware;

class AuthMiddleware {
    public function auth() {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }
    }
}
