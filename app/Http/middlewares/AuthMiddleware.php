<?php
namespace app\Http\middlewares;

class AuthMiddleware {
    public function auth() {
        if (isset($_SESSION['user'])) {
              return true ;
        }
    }
}
