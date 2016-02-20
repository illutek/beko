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
        <a href="#binnenschrijnwerkerij" aria-controls="binnenschrijnwerkerij" role="tab" data-toggle="tab">
            Binnenschrijnwerkerij
        </a>
    </li>
    <li role="buitenschrijnwerkerij">
        <a href="#buitenschrijnwerkerij" aria-controls="buitenschrijnwerkerij" role="tab" data-toggle="tab">
            Buitenschrijnwerkerij
        </a>
    </li>
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="binnenschrijnwerkerij">
        <?php print render($page['binnenschrijnwerkerij']); ?>
    </div>
    <div role="tabpanel" class="tab-pane fade in" id="buitenschrijnwerkerij">
        <?php print render($page['buitenschrijnwerkerij']); ?>
    </div>
</div>