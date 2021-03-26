<!--<h1>Result</h1>-->
<div class="game-symbols" style="font-size: 10vw;">
    <?= $game->getPlays()->getMove(0) . " x " . $game->getPlays()->getMove(1) ?>
</div>
<div class="result-text" style="font-size: 8vw;">
    <?php if ($winner === 0) : ?>
        Draw!
    <?php elseif ($winner === 1) : ?>
        You win!
    <?php else : ?>
        You loose!
    <?php endif; ?>
</div>
