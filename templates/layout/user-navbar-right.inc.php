<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 21/02/2016
 * Time: 11:07
 */
?>
<ul class="nav navbar-nav navbar-right">
    <!-- de inlog button en user print -->
    <?php
    if ($user->uid != 0) {
        print '<li class="first">' . t('') .
            '<a href="' . url('user/' . $user->uid) . '">' . $user->name . '</a>
                        </li>';
        print '<li>
                        <a href="' . url('user/logout') . '">' . t('Logout') . '</a>
                        </li>';
    } ?>

</ul>