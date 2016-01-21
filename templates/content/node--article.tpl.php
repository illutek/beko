<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 7/01/2016
 * Time: 14:57
 */

/**
 * Het Edit icoontje
 * Komt van template.php
 */
global $user;
if ($user->uid != 0) {
    print $nodeEdit;
}
/**
 * Welkom tekst is een teaser gepubliseerd op de home page dus een h1
 * de andere artikelen zijn via view volledige node's dus h2 (SEO)
 */
if ($teaser): ?>
    <h1 class="article-title"><?php print $title; ?></h1>
<?php else: ?>
    <h2 class="article-title"><?php print $title; ?></h2>
<?php endif; ?>

<div class="content">
    <?php print render($content); ?>
</div>