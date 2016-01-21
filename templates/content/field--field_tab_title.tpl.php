<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 20/01/2016
 * Time: 21:45
 * de eerts li zou nog de class active moeten meer krijgen
 */

$total = count($items);
for ($i = 0; $i < $total; ++$i): ?>
    <li>
        <a href="#<?php print render($items[$i]); ?>" data-toggle="tab"><?php print render($items[$i]); ?></a>
    </li>
<?php endfor; ?>