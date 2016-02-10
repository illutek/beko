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
include 'navigation-page.inc.php';
include 'header.inc.php';
?>

<div id="beko"></div>
<!-- main content -->
<section class="subdivision blue_background">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-content wow fadeIn" data-wow-duration="3s">
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1 class="title" id="page-title"><?php // print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?>
                    <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
            </div>
        </div>
    </div>
</section>

<div id="contact-mobile"></div>
<section class="subdivision black_background mobile contact-wrap">
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
            <div class="col-md-4 col-md-offset-2 custom-modal">
                <div class="close-button"><i class="fa fa-times"></i></div>
                <div class="content-modal">
                    <h3>Copyright</h3>

                    <p>De inhoud van deze website (teksten, ideeën, foto’s …(geen exhaustieve lijst))
                        is auteursrechtelijk beschermd. De auteursrechten berusten bij BEKO bvba, haar
                        klanten en haar partners. Alle rechten zijn voorbehouden. Informatie van de
                        website mag, tenzij anders is aangegeven, niet worden gekopieerd, overgeplaatst,
                        verspreid of opgeslagen zonder onze schriftelijke toestemming vooraf.
                        Wijzigingen op de inhoud van de site zijn verboden.
                    </p>

                    <h3>Algemene voorwaarden</h3>

                    <p>De ontvangst van de factuur geldt van rechtswege en volgens art. 1139 van het
                        burgerlijk Wetboek als ingebrekestelling zonder dat er enige akte nodig is en
                        alleen door verstrijken van de termijn.</p>

                    <p>Ingeval de betaling niet volgt binnen de acht dagen na het opzenden van een
                        aangetekend schrijven is de schuldenaar gehouden bij toepassing van art. 1147
                        van het burgerlijk wetboek tot betaling van een schadevergoeding wegens
                        wanbetaling. Conventioneel en onverminderbaar vastgesteld op 12% met een
                        minimum van 25 euro.
                    </p>

                    <p>Alle klachten dienen binnen de vijf dagen aangetekend te gebeuren.

                    <p>

                    <p>Voor alle betwistingen zijn enkel de Rechtbanken van Turnhout bevoegd.</p>
                </div>
            </div>
        </div>
    </div>
</div>