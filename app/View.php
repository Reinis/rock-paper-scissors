<?php

namespace RPS;

class View
{
    public function header(): void
    {
        require_once __DIR__ . '/Views/header.php';
    }

    public function footer(): void
    {
        require_once __DIR__ . '/Views/footer.php';
    }

    public function home(Game $game): void
    {
        require_once __DIR__ . '/Views/home.php';
    }

    public function error(): void
    {
        require_once __DIR__ . '/Views/error.php';
    }

    public function result(Game $game, int $winner): void
    {
        require_once __DIR__ . '/Views/result.php';
    }
}
