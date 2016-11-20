<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 5/01/2016
 * Time: 15:00
 */
?>
<div id="home"></div>

<?php
/**
 * include van navigatie en header
 */
include 'navigation.inc.php';
include 'header.inc.php';
?>

<div id="sticky-anchor"></div>
<!-- Het sticky contactform -->
<div class="container nonmobile contact-wrap">
    <div class="col-md-offset-8">
        <div class="sticky">
            <?php print render($page['contact']); ?>
            <div class="contactgegevens">
                <p><i class="fa fa-map-marker"></i>
                    Jagersweg 15 - 2450 Meerhout
                </p>

                <p><i class="fa fa-phone"></i>
                    Tel. +32 14308738
                </p>
            </div>
        </div>
    </div>
</div>

<div id="beko"></div>
<!-- main content -->
<section class="subdivision background_oneven">
    <div class="container">
        <div class="row">
            <div class="col-md-9 section-content wow fadeIn" data-wow-duration="3s">
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?>
                    <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>

                <div class="col-md-12">
                    <?php
                    /**
                     * Het bootstrap tabs systeem alle uitleg om deze oplossing
                     * op het readme.md file
                     * sub-articles betrekking op de welkom tekst
                     */
                    include 'subarticles/tabs-subarticle-welkom.inc.php';
                    ?>
                </div>
            </div>
        </div>
</section>

<div id="schrijnwerkerij"></div>
<section class="subdivision background_even">
    <div class="container">
        <div class="row">
            <div class="col-md-9 section-content wow fadeIn" data-wow-duration="3s">
                <?php
                print render($page['schrijnwerkerij']);

                /**
                 * Sub articles schrijnwerkerij
                 */
                include 'subarticles/tabs-subarticle-schrijnwerkerij.inc.php';
                ?>
            </div>
        </div>
    </div>
</section>

<div id="industrie"></div>
<section class="subdivision background_oneven">
    <div class="container">
        <div class="row">
            <div class="col-md-9 section-content wow fadeIn" data-wow-duration="3s">
                <?php
                print render($page['industrie']);
                /**
                 * Het bootstrap tabs systeem alle uitleg om deze oplossing
                 * op het readme.md file
                 * sub-articles betrekking op de industrie tekst
                 */
                include 'subarticles/tabs-subarticle-industrie.inc.php';
                ?>
            </div>
        </div>
    </div>
</section>
<div id="koeltorens"></div>
<section class="subdivision background_even">
    <div class="container">
        <div class="row">
            <div class="col-md-9 section-content wow fadeIn" data-wow-duration="3s">
                <?php print render($page['koeltorens']); ?>
            </div>
        </div>
    </div>
</section>
<div id="realisaties"></div>
<section class="subdivision background_oneven">
    <div class="container">
        <div class="row">
            <div class="col-md-9 section-content wow fadeIn" data-wow-duration="3s">
                <?php print render($page['realisatie']); ?>

                <div class="overzicht-link"><a href="<?php print base_path() ?>realisaties">
                        <i class="fa fa-picture-o fa-lg"></i> Overzicht realisaties</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="contact-mobile"></div>
<section class="subdivision background_even mobile contact-wrap">
    <div class="container">
        <?php print render($page['contactbis']); ?>
    </div>
</section>

<?php
/**
 * include van footer
 */
include 'footer.inc.php';
?>

</div>
<!-- modal om de copyright en Algemene voorwaarden te tonen, deze optie gekozen
om niet een pagina hieraan te moeten koppelen (weinig tekst)
bij Drupal 1 inhoudstype aanmaken (teksten-footer) met een view deze alle printen -->
<div class="modal-container">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-1 custom-modal">
                <div class="close-button"><i class="fa fa-times"></i></div>
                <div class="content-modal">
                    <?php print render($page['copyconditions']); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#0" class="cd-top">Top</a>
<script>new WOW().init();</script>