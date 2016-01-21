<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 7/01/2016
 * Time: 22:14
 */

global $user;
if ($user->uid != 0) {
    print '<div class="edit-icon">'. '<a href="' . url('node/' .$node->nid . '/edit') . '">' .
        '<i class="fa fa-pencil-square-o"></i>' .'</a>' . '</div>';
}
