<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 5/01/2016
 * Time: 15:03
 */
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav with-indicator">
                <li class="nav-item">
                    <a href="#" data-id="home" class="scroll-link"><i class="fa fa-home"></i> BEKO</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-id="schrijnwerkerij" class="scroll-link">Schrijnwerkerij & interieurbouw</a></li>
                <li class="nav-item">
                    <a href="#" data-id="industrie" class="scroll-link">Industrieprojecten</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-id="koeltorens" class="scroll-link">Koeltorens</a>
                </li>
                <li class="nav-item">
                    <a href="#" data-id="realisaties" class="scroll-link">Realisaties</a>
                </li>
                <li class="contact-mobile-display">
                    <a href="#" data-id="contact-mobile" class="scroll-link">Contact</a>
                </li>
            </ul>
            <?php include 'user-navbar-right.inc.php'; ?>
        </div>
    </div>
</nav>