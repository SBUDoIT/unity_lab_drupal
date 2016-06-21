<?php

function unity_lab_directory($prefix = true)
{
    $ver = theme_get_setting('unity_lab_version');

    if (!$ver) {

      if (!isset($_ENV['AH_SITE_ENVIRONMENT'])) {
            return 'http://unity-lab.localhost.stonybrook.edu';
      }

      $ver = 'latest';
    }




    if (!file_exists(libraries_get_path('unity-lab').'/'.$ver)) {
        $ver = 'latest';
    }

    if ($prefix) {
        return '/'.libraries_get_path('unity-lab').'/'.$ver;
    } else {
        return libraries_get_path('unity-lab').'/'.$ver;
    }
}

/**
 * Implements hook_preprocess_html()
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
*/

function unity_lab_preprocess_html(&$vars) {



    drupal_add_css("https://fast.fonts.net/cssapi/8b09d344-baa0-42a8-bbac-175ff46c86d5.css", array('type' => 'external'));

    drupal_add_css(path_to_theme('unity-lab') . '/css/theme.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));

    if (isset($_ENV['AH_SITE_ENVIRONMENT'])) // && ($_ENV['AH_SITE_ENVIRONMENT'] == 'test' || $_ENV['AH_SITE_ENVIRONMENT'] == 'prod')) {
    {

         drupal_add_css(unity_lab_directory(false) . '/css/style.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));

        //drupal_add_css(drupal_get_path('library', 'unity3') . '/stylesheets/print.min.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'media' => 'print',));
        //drupal_add_css(drupal_get_path('theme', 'unity3') . '/stylesheets/no-mq.min.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE, 'media' => 'print', 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE)));


    }
    else
    {
        drupal_add_css(unity_lab_directory(true) . "/css/style.css", array('type' => 'external'));
        //drupal_add_css(libraries_get_path('unity-lab') . '/css/style.css', array('group' => CSS_DEFAULT, 'every_page' => TRUE));
    }
    /*else {

    }*/

 //   drupal_add_css(libraries_get_path('unity') . '/css/style.min.blessed.ie89.css', array('browsers' => array('IE' => 'lte IE 9', '!IE' => FALSE), 'every_page' => TRUE));

 //   drupal_add_css(libraries_get_path('unity') . '/css/style.min.blessed.ie7.css', array('browsers' => array('IE' => 'lt IE 8', '!IE' => FALSE), 'every_page' => TRUE));



    $vars['classes_array'][3] = '';

    //removes less than helpful no-sidebars class that is hard coded into drupal
    //adding theme-specific sidebar indicator class
    if (!empty($vars['page']['main_prefix']) && !empty($vars['page']['main_suffix'])) {
        $vars['classes_array'][] = 'unity-sidebar-both';
    }
    else if (!empty($vars['page']['main_prefix'])) {
        $vars['classes_array'][] = 'unity-sidebar-prefix';
    }
    else if (!empty($vars['page']['main_suffix'])) {
        $vars['classes_array'][] = 'unity-sidebar-suffix';
    }
    else {
        $vars['classes_array'][] = 'unity-no-sidebars';
    }

    if ($panel_page = panels_get_current_page_display()) {
        // Set body class for the name of the panel page layout.
        $vars['classes_array'][] = 'panel-layout-' . str_replace('_', '-', $panel_page->layout);
    }
}

/**
 * Override or insert variables into the page template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */

function unity_lab_preprocess_page(&$vars) {

  //  unset($vars['title']);

  //  $vars['fluidness'] = 'restricted';

    //  - See more at: http://www.digett.com/blog/01/11/2012/overriding-page-templates-content-type-drupal-7#sthash.Swqzuejc.dpuf

    //dpm($vars);

    if (isset($vars['node']->type)) {
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;

         if ($vars['node']->type == 'page' || $vars['node']->type == 'article') {

            $vars['theme_hook_suggestions'][] = 'page__sections';



            $hero = field_get_items('node', $vars['node'], 'field_hero_section');


            if ($hero) {
                $heroRender = field_view_value('node', $vars['node'], 'field_hero_section', $hero[0]);

                $vars['page']['banner'] = $heroRender;
            }


        }


    }



}



/**
 * Override or insert variables into the node template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */

function unity_lab_preprocess_node(&$vars, $hook) {
    $node = $vars['node'];
    if(isset($node->field_hero_section)){
      $vars['has_hero'] = true;
    }
    else {
      $vars['has_hero'] = false;
    }


    if (isset($node->type)) {
        if ($vars['node']->type == 'page')
        {
            $vars['theme_hook_suggestions'][] = 'node__sections_based';

             hide($vars['content']['field_hero_section']);


        }


        $function = __FUNCTION__.'_'.$node->type;

        if (function_exists($function)) {
            $function($vars, $hook);
        }



    }
}

function unity_lab_preprocess_node_article(&$vars, $hook) {
  $vars['content']['author'] = empty($vars['field_author'][0]['value']) ? '' : $vars['field_author'][0]['value'];


}


/**
 * Override or insert variables into the entity template.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("entity" in this case.)
 */

function unity_lab_preprocess_entity(&$vars, $hook) {

    if ($vars['entity_type'] == 'paragraphs_item') {
        unity_lab_preprocess_paragraphs_item($vars, $hook);
    }
}


function unity_lab_preprocess_field(&$vars, $hook)
{
  ///dpm($vars);

  $function = __FUNCTION__.'_'.$node->type;

  if (function_exists($function)) {
      $function($vars, $hook);
  }

}

function unity3_preprocess_field__field_contact(&$vars, $hook) {
    $image = 'https://farm4.staticflickr.com/3941/15487768325_4407b8140c_k_d.jpg';

    if (arg(0) == 'node' && is_numeric(arg(1))) {

        // creating the node variable
        $node = node_load(arg(1), NULL, TRUE);
    }

    $reportProbURL = '';

    if ($node->type == 'service_page') {
        $dispServiceIns = field_get_items('node', $node, 'field_display_service_in');

        foreach ($dispServiceIns as $dispService) {

            if ($dispService['tid'] == 1190) {
                $reportProbURL = field_get_items('node', $node, 'field_report_a_problem_url');
                $reportProbURL = empty($reportProbURL[0]['url']) ? '' : $reportProbURL[0]['url'];
            }
        }
    }
    else if ($node->type == "workshop_event") {
        $workshop = field_get_items('node', $node, 'field_workshop');
        $workshop = empty($workshop[0]['target_id']) ? '' : $workshop[0]['target_id'];

        if ($workshop) {

            $workshop = entity_load_single('node', $workshop);
            $node = $workshop;
        }
    }

    $contacts = field_get_items('node', $node, 'field_contact');
    $contactArr = array();

    foreach ($contacts as $con) {

        $contactNode = empty($con['target_id']) ? '' : $con['target_id'];

        if ($contactNode) {
            $contactNode = entity_load_single('node', $contactNode);
            $contact = array();

            $contact['title'] = $contactNode->title;

            $conIntro = field_get_items('node', $contactNode, 'field_introduction');
            $conIntro = empty($conIntro[0]['value']) ? '' : $conIntro[0]['value'];
            $contact['intro'] = $conIntro;

            $email = field_get_items('node', $contactNode, 'field_e_mail');
            $email = empty($email[0]['email']) ? '' : $email[0]['email'];
            $contact['email'] = $email;

            $jobtitle = field_get_items('node', $contactNode, 'field_job_title');
            $jobtitle = empty($jobtitle[0]['value']) ? '' : $jobtitle[0]['value'];
            $contact['jobtitle'] = $jobtitle;

            $image = field_get_items('node', $contactNode, 'field_image');
            $image = empty($image[0]['uri']) ? '' : $image[0]['uri'];

            if ($image) {
                $image = file_create_url($image);
            }
            else $image = 'https://farm4.staticflickr.com/3941/15487768325_4407b8140c_k_d.jpg';

            $contact['image'] = $image;

            $phone = field_get_items('node', $contactNode, 'field_phone_number');
            $phone = empty($phone[0]['value']) ? '' : $phone[0]['value'];

            $contact['phone'] = $phone;

            $link = field_get_items('node', $contactNode, 'field_related_links');
            if ($link) {
                $link = $link[0];

                $linkText = empty($link[0]['title']) ? '' : $link[0]['title'];

                $query = '';
                $fragment = '';
                $absolute = false;

                if (array_key_exists('query', $link)) $query = $link['query'];

                if (array_key_exists('fragment', $link)) $fragment = $link['fragment'];

                if (array_key_exists('absolute', $link)) $absolute = $link['absolute'];

                $options = array('query' => $query, 'fragment' => $fragment, 'absolute' => $absolute);

                $linkURL = url($link['url'], $options);
                $contact['linkURL'] = $linkURL;
                $contact['linkText'] = $linkText;
            }

            $yammer = field_get_items('node', $contactNode, 'field_yammer_profile');
            $yammerURL = empty($yammer[0]['url']) ? '' : $yammer[0]['url'];

            $contact['yammerURL'] = $yammerURL;

            $twitter = field_get_items('node', $contactNode, 'field_twitter_account');
            $twitterText = empty($twitter[0]['value']) ? '' : $twitter[0]['value'];
            $twitterURL = '';
            if ($twitterText) $twitterURL = str_replace('@', '', 'http://twitter.com/' . $twitterText);

            $contact['twitterText'] = $twitterText;
            $contact['twitterURL'] = $twitterURL;

            $vars['content']['items'][] = $contact;
        }
    }

    if ($vars['content']['items'][0])
        $vars['content']['image'] = $vars['content']['items'][0]['image'];
    else
        $vars['content']['image'] = 'https://farm4.staticflickr.com/3941/15487768325_4407b8140c_k_d.jpg';
}
