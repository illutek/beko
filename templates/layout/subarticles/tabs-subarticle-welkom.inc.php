<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 19/02/2016
 * Time: 14:38
 */
?>
<!-- oplossing op een niet geweldige manier-->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#beleidsverklaring" aria-controls="beleidsverklaring" role="tab" data-toggle="tab">
            Beleidsverklaring
        </a>
    </li>
    <li role="historiek">
        <a href="#historiek" aria-controls="historiek" role="tab" data-toggle="tab">
            Historiek
        </a>
    </li>
    <li role="kwaliteitslabels">
        <a href="#kwaliteitslabels" aria-controls="kwaliteitslabels" role="tab" data-toggle="tab">
            Kwaliteitslabels
        </a>
    </li>
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="beleidsverklaring">
        <?php print render($page['beleidsverklaring']); ?>
    </div>
    <div role="tabpanel" class="tab-pane fade in" id="historiek">
        <?php print render($page['historiek']); ?>
    </div>
    <div role="tabpanel" class="tab-pane fade in" id="kwaliteitslabels">
        <?php print render($page['kwaliteitslabels']); ?>
    </div>
</div>