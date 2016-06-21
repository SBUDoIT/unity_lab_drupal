<?php


require "template-preprocess.php";
require "template-paragraphs-helpers.php";
require "template-paragraphs.php";






function unity_lab_links__system_main_menu($variables) {
    //$link = $variables['links'];

    $menu_name = variable_get('menu_main_links_source', 'main-menu');
    $tree = menu_tree($menu_name);




    $html = "<div class='main-site-nav'>\n";

    //$html .= "<ul>\n";

    /*  foreach ($variables['links'] as $link) {

      $html .= '<li><a href="'.url( $link['href'], array('alias' => false )).'">' .    $link['title']. '</a></li>';
    }*/
    
    $html.= drupal_render($tree);

    //$html .= "  </ul>\n";
    $html.= "</div>\n";

    return $html;
}







function unity_lab_link($variables) {

    return '<a href="' . check_plain(url($variables['path'], $variables['options'])) . '"' . drupal_attributes($variables['options']['attributes']) . '>' . ($variables['options']['html'] ? $variables['text'] : check_plain($variables['text'])) . '</a>';
}

function unity_lab_menu_tree($variables) {

    return '<ul>' . $variables['tree'] . '</ul>';
}

/**
 * Returns HTML for a menu link and submenu.
 *
 * @param $variables
 *   An associative array containing:
 *   - element: Structured array data for a menu link.
 *
 * @ingroup themeable
 */
function unity_lab_menu_link(array $variables) {
    $element = $variables['element'];
    $sub_menu = '';

    if (($key = array_search('leaf', $element['#attributes']['class'])) !== false) {
        unset($element['#attributes']['class'][$key]);
    }

    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function unity_lab_form_alter(&$form, &$form_state, $form_id) {

    if ($form_id == 'search_block_form') {
        $form['search_block_form']['#title'] = t('Search');

        // Change the text on the label element
        $form['search_block_form']['#title_display'] = 'invisible';

        // Toggle label visibilty
        $form['search_block_form']['#size'] = 40;

        // define size of the textfield
        $form['search_block_form']['#attributes']['class'][] = 'sb-search-input';

        //$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
        $form['actions']['submit']['#attributes']['class'][] = 'sb-search-submit';
        $form['actions']['submit']['#value'] = '';

        $form['search_block_form']['#attributes']['placeholder'] = t('Search');
    }







}









?>
