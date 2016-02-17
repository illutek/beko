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
<section class="subdivision blue_background">
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
                    <!-- -->
                    <?php print render($page['subarticleswelcome']); ?>
                </div>
            </div>
        </div>
</section>
<div id="schrijnwerkerij"></div>
<section class="subdivision black_background">
    <div class="container">
        <div class="row">
            <div class="col-md-9 section-content wow fadeIn" data-wow-duration="3s">
                <?php print render($page['schrijnwerkerij']); ?>

                <div class="row">
                    <div class="col-md-6">
                        <h3>Binnenschrijnwerkerij</h3>
                        <ul>
                            <li>keukeninrichting</li>
                            <li>badkamermeubels</li>
                            <li>binnendeuren</li>
                            <li>plafonds</li>
                            <li>lambrisering</li>
                            <li>vloerbekleding</li>
                            <li>maatkasten</li>
                            <li>dressings</li>
                            <li>trappen</li>
                            <li>isolatie</li>
                            <li>systeemwanden</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3>Buitenschrijnwerkerij</h3>
                        <ul>
                            <li>ramen & deuren</li>
                            <li>daktimmerwerken</li>
                            <li>skeletbouw</li>
                            <li>gevelbekleding</li>
                            <li>veranda's</li>
                            <li>pergola's</li>
                            <li>tuinmeubliair</li>
                            <li>houten vloeren</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="industrie"></div>
<section class="subdivision blue_background">
    <div class="container">
        <div class="row">
            <div class="col-md-9 section-content wow fadeIn" data-wow-duration="3s">
                <?php print render($page['industrie']); ?>
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
                        <h4>Attraction vloeren</h4>

                        <p>
                            BEKO plaatst verschillende vloerafwerkingen voor zowel kantoorruimtes als winkels of
                            keukens.
                            Een van de producten waarmee we kunnen werken zijn bijvoorbeeld de Attraction-tegels. Dit
                            zijn
                            semi-flexibele vloertegels gemaakt uit pvc: een gerecycleerde onderlaag van 4 mm met een
                            gekleurde slijtlaag uit pure pvc van 1 mm dik. De tekening wordt verkregen door onder hoge
                            druk gekleurde granulaten in de gekalanderde meerkleurige slijtlaag te persen.Door de
                            oppervlaktebehandelng met polyurethaan (PUR) behoeft deze vloer weinig onderhoud. De tegels
                            koppelen we dankzij de zwaluwstaartverbindingen zonder hecht- of lasmiddelen aan elkaar. De
                            tegels zijn antistatisch en voldoen aan de eisen voor gebruik in o.a. computerruimtes.
                            De Attraction® tegels zijn bacteriostatisch en werden schimmelwerend behandeld.
                        </p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in" id="systeemwanden">
                        <h4>Systeemwanden</h4>

                        <p>
                            BEKO installeert verschillende systeemwanden, van Gyproc tot bijvoorbeeld Trespa.De
                            Trespa-plaatmaterialen zijn uitzonderlijk op het vlak van hygiëne, makkelijk te reinigen en
                            kunnen in verschillende designmogelijkheden toegepast worden. Ze zijn bovendien slag- en
                            stootvast en vochtbestendig. Dankzij deze eigenschappen zijn ze ideaal voor
                            interieurtoepassingen
                            in o.a. zorginstellingen, luchthavens, sportcentra, bedrijven, winkels of musea.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="koeltorens"></div>
<section class="subdivision black_background">
    <div class="container">
        <div class="row">
            <div class="col-md-9 section-content wow fadeIn" data-wow-duration="3s">
                <?php print render($page['koeltorens']); ?>
            </div>
        </div>
    </div>
</section>
<div id="realisaties"></div>
<section class="subdivision blue_background">
    <div class="container">
        <div class="row">
            <div class="col-md-9 section-content wow fadeIn" data-wow-duration="3s">
                <h2>Realisatie</h2>

                <p>Enkele van onze realisaties in onze verschillende deeldomeinen (schrijnwerkerij & interieurbouw,
                    koeltorens,
                    industrieprojecten...).<br>
                    Voor referenties mag u steeds telefonisch contact met ons opnemen.</p>

                <p><a href="<?php print base_path() ?>realisaties">
                        <i class="fa fa-picture-o fa-lg"></i> Overzicht realisaties</a>
                </p>
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