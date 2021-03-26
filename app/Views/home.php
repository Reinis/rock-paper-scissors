<h1>Rock Paper Scissors</h1>
<div class="btn-group">
    <?php foreach ($game->getPossibleMoves() as $move): ?>
        <form action="/" method="post">
            <input type="hidden" name="move" value="<?= $move->getName() ?>">
            <input class="button" type="submit" value="<?= $move->getSymbol() ?>">
        </form>
    <?php endforeach; ?>
</div>
<br>
