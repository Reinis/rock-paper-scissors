<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

use RPS\Game;
use RPS\Moves\Collections\Moves;
use RPS\Moves\Paper;
use RPS\Moves\Rock;
use RPS\Moves\Scissors;
use RPS\View;


$moves = new Moves(
    new Rock(),
    new Paper(),
    new Scissors(),
);
$game = new Game($moves);
$view = new View();

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

if ($uri === '/' && $httpMethod === 'POST') {
    $move = $_POST['move'] ?? 'none';

    if ($move === 'none') {
        $view->error();
        die();
    }

    $winner = $game->play($move);
    $view->result($game, $winner);
}

$view->home();
