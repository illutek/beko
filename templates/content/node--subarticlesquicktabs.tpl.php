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
    <div class="img-right">
        <?php print render($content['field_img_subarticle']); ?>
    </div>
    <?php print render($content['body']); ?>
    <?php print render($content['field_bijlage']); ?>
</div>