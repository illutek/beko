<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 19/02/2016
 * Time: 14:43
 */
?>
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a href="#attractionvloeren" aria-controls="attractionvloeren" role="tab" data-toggle="tab">
            Attraction vloeren
        </a>
    </li>
    <li role="historiek">
        <a href="#systeemwanden" aria-controls="systeemwanden" role="tab" data-toggle="tab">
            Systeemwanden
        </a>
    </li>
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="attractionvloeren">
        <?php print render($page['attractionvloeren']); ?>
    </div>
    <div role="tabpanel" class="tab-pane fade in" id="systeemwanden">
        <?php print render($page['systeemwanden']); ?>
    </div>
</div>