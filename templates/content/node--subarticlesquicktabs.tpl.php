<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 18/02/2016
 * Time: 20:36
 */


    global $user;
    if ($user->uid != 0) {
    print $nodeEdit;
    }
?>
<h2 class="article-title"><?php print $title; ?></h2>

<div class="content">
    <?php print render($content); ?>
</div>