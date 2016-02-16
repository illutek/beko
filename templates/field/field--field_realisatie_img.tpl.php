<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 16/02/2016
 * Time: 22:36
 */
$total = count($items);
for ($i = 0; $i < $total; ++$i): ?>
    <div class="imgRealisaties">
        <?php print render($items[$i]); ?>
    </div>
<?php endfor; ?>