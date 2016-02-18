<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 5/01/2016
 * Time: 14:47
 */

/**
 * @param $variables
 */
function beko_preprocess_html(&$variables)
{
    // Add conditional stylesheets for IE
    drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
    drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));
    //Add external .js and .css
    drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', 'external', array('weight' => 1));


    drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('type' => 'external'));

    // Adding viewport to HTML Header.
    $viewport = array(
        '#type' => 'html_tag',
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'viewport',
            'content' => 'width=device-width, initial-scale=1, maximum-scale=1')
    );
    drupal_add_html_head($viewport, 'viewport');
}

/**
 * @param $variables
 */
function beko_preprocess_page(&$variables)
{
    $variables['imagepath'] = $variables['base_path'] . $variables['directory'] . '/images/';

    if (drupal_is_front_page()) {
        drupal_add_js(drupal_get_path('theme', 'beko') . '/js/sticky.js', array('weight' => 2));
    }
}

/**
 *
 */
function beko_form_alter(&$form, &$form_state, $form_id)
{
    if ($form_id == 'webform_client_form_4') {
        $form['actions']['button']['#prefix'] = '<button type="submit">';
        $form['actions']['button']['#suffix'] = '</button>';
        $form['actions']['button']['#markup'] = '<i class="fa fa-arrow-right"></i> Verzenden';
    }
}

/**
 * @param $variables
 * Het edit icoontje aanmaken
 */
function beko_preprocess_node(&$variables)
{
    if ($variables['type'] == 'article' || 'subarticlesquicktabs') {
        $node = $variables['node'];
        $variables['nodeEdit'] = '<div class="edit-icon">' . '<a href="' . url('node/' . $node->nid . '/edit') . '">' .
            '<i class="fa fa-pencil-square-o"></i>' . t(' Edit') . '</a>' . '</div>';
    }

    $variables['realisatieImageTeaser'] = drupal_render($variables['content']['field_realisatie_img'][0]);
}