<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPS</title>
</head>
<body>
<h1>Result</h1>
<div><?= $game->getPlays()->getMove(0) . " x " . $game->getPlays()->getMove(1) ?></div>
<?php if ($winner === 0) : ?>
    <div>Draw!</div>
<?php elseif ($winner === 1) : ?>
    <div>You win!</div>
<?php else : ?>
    <div>You loose!</div>
<?php endif; ?>
</body>
</html>