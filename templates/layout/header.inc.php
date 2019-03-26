<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 5/01/2016
 * Time: 15:01
 */
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 logo">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                    </a>
                </div>
                <div class="col-md-12 slogans">
                    <?php print render($page['slogan']); ?>
                </div>
            </div>

            <div class="col-md-4 certification">
                <img src="<?php print $imagepath; ?>/VCA-logo.jpg"
                     height="100" alt="petrochemie logo">
            </div>
        </div>
    </div>
    <!-- end row -->
    </div>
</header>