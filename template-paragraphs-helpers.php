<?php

/*
Defines Theme Hooks for each paragraph sub-type. If a paragraph section has different variants
create suggestions for each variant
i.e. Common Cards have Classic, Simple and Box variants, so we should add suggestions for each of these

*/
function _unity_lab_paragraphs_item_get_theme_hook_suggestion(&$vars, $function) {

    //if this section has a specific type, add it

//    $vars['theme_hook_suggestions'][] = $function;

    $suggestion = $function;

    $suggestion = str_replace('unity_lab_preprocess_', '', $suggestion);
    $suggestion = str_replace('paragraphs_item_', 'paragraphs_item__', $suggestion);
    $suggestion = str_replace('-', '_', $suggestion);

    $vars['theme_hook_suggestions'][] = $suggestion;



    if (isset($vars['content']['type'])) {
        $suggestion = $function . '_' . $vars['content']['type'];

        $suggestion = str_replace('unity_lab_preprocess_', '', $suggestion);
        $suggestion = str_replace('paragraphs_item_', 'paragraphs_item__', $suggestion);
        $suggestion = str_replace('-', '_', $suggestion);

        $vars['theme_hook_suggestions'][] = $suggestion;

    }




}

//converts a specific link array instance $link to a renderable linkItem, optionally adds classes
function _unity_lab_link_array($link, $classesArr = NULL) {
    if (isset($link) && is_array($link) && isset($link['url']))  {

        $linkItem = array();
        $query = '';
        $fragment = '';
        $absolute = false;

        if (array_key_exists('query', $link)) $query = $link['query'];

        if (array_key_exists('fragment', $link)) $fragment = $link['fragment'];

        if (array_key_exists('absolute', $link)) $absolute = $link['absolute'];

        $options = array('query' => $query, 'fragment' => $fragment, 'absolute' => $absolute);
        $linkItem['url'] = url($link['url'], $options);
        $linkItem['text'] = empty($link['title']) ? '' : decode_entities($link['title']);

        if (is_array($classesArr)) {
            $linkItem['options'] = array('attributes' => array('class' => $classesArr));
        }

        return $linkItem;
    }
    return null;
}



//returns an array with the common fields attached to entities like field collection and paragraphs
function _unity_lab_entity_get_common_fields($entityType, $entity) {
    $item = array();

    $image = field_get_items($entityType, $entity, 'field_image');

    if ($image) {
        $image_renderable = field_view_value($entityType, $entity, 'field_image', $image[0]);

        $item['image'] = $image_renderable;
    }

    $icon = field_get_items($entityType, $entity, 'field_icon_font_class');
    $icon = empty($icon[0]['value']) ? '' : $icon[0]['value'];

    $item['icon'] = $icon;

    $heading = field_get_items($entityType, $entity, 'field_heading');

    $heading = empty($heading[0]['value']) ? '' : $heading[0]['value'];

    $item['heading'] = $heading;

    $subheading = field_get_items($entityType, $entity, 'field_subheading');
    $subheading = empty($subheading[0]['value']) ? '' : $subheading[0]['value'];

    $item['subheading'] = $subheading;

    $text = field_get_items($entityType, $entity, 'field_text');
    $text = empty($text[0]['value']) ? '' : $text[0]['value'];

    $item['text'] = $text;

    $links = field_get_items($entityType, $entity, 'field_links');

    if (is_array($links)) {
        foreach ($links as $link) {
            $linkItem = _unity_lab_link_array($link);

            $item['links'][] = $linkItem;
        }
    }

    $links = field_get_items($entityType, $entity, 'field_link');

    if (is_array($links)) {
        foreach ($links as $link) {
            $linkItem = _unity_lab_link_array($link);

            $item['link'] = $linkItem;
        }
    }



    $itemClasses = field_get_items($entityType, $entity, 'field_classes');
    $itemClasses = empty($itemClasses[0]['value']) ? '' : decode_entities($itemClasses[0]['value']);

    $itemClasses = trim($itemClasses);
    $itemClasses = explode(' ', $itemClasses);

    $item['item_classes'] = $itemClasses;

    return $item;
}

function _unity_lab_preprocess_common_fields(&$vars) {


    $bundle = $vars['elements']['#bundle'];
    $bundleDashed = str_replace('_', '-', $bundle);

    $css_id = empty($vars['field_css_id'][0]['value']) ? '' : $vars['field_css_id'][0]['value'];
    $css_id = str_replace(' ', '-', $css_id);

    if(!$css_id)
    {
            $css_id = $bundleDashed . '-' . $vars['elements']['#entity']->item_id;
    }

    $css_classes = '';

    if(isset($vars['field_css_classes']))
    {
        if(!empty($vars['field_css_classes'][0]['value']))
        {
          $css_classes .= ' ' . $vars['field_css_classes'][0]['value'];
        }


    }





    $css_classes = trim($bundleDashed . ' ' . $css_id . ' ' . $css_classes);

    $vars['css_classes'] = $css_classes;
    $css_classes = explode(' ', $css_classes);
    $vars['css_classes_array'] = $css_classes;
    $vars['css_id'] = $css_id;

    $grid_classes = '';

    if(isset($vars['field_grid_classes']))
    {
        $grid_classes = empty($vars['field_grid_classes'][0]['value']) ? '' : $vars['field_grid_classes'][0]['value'];
    }

    $vars['grid_classes'] = $grid_classes;


    if(isset($vars['field_introduction']))
    {
        $vars['content']['introduction'] = empty($vars['field_introduction'][0]['value']) ? '' : $vars['field_introduction'][0]['value'];
    }
    else
    {
        $vars['content']['introduction'] = '';
    }

    if(isset($vars['field_closing']))
    {
        $vars['content']['closing'] = empty($vars['field_closing'][0]['value']) ? '' : $vars['field_closing'][0]['value'];
    }
    else
    {
        $vars['content']['closing'] = '';
    }

    if (isset($vars['field_icon_class'])) {
        $vars['content']['icon'] = empty($vars['field_icon_class'][0]['value']) ? '' : $vars['field_icon_class'][0]['value'];
    }
    else
    {
        $vars['content']['icon'] = '';
    }


    if (isset($vars['field_heading'])) {
        $vars['content']['heading'] = empty($vars['field_heading'][0]['value']) ? '' : $vars['field_heading'][0]['value'];
    }
    else
    {
        $vars['content']['heading'] = '';
    }

    if (isset($vars['field_subheading'])) {
        $vars['content']['subheading'] = empty($vars['field_subheading'][0]['value']) ? '' : $vars['field_subheading'][0]['value'];
    }
    else
    {
        $vars['content']['subheading'] = '';
    }

    if (isset($vars['field_text'])) {
        $vars['content']['text'] = empty($vars['field_text'][0]['value']) ? '' : $vars['field_text'][0]['value'];
    }
    else
    {
        $vars['content']['text'] = '';
    }

    if (isset($vars['field_image'])) {

        $image = empty($vars['field_image'][0]['uri']) ? '' : $vars['field_image'][0]['uri'];

        if ($image) {
            $vars['content']['image']['uri'] = file_create_url($image);
        }
    }

    $vars['content']['links'] = array();

    if (isset($vars['field_links'])) {

        $links = empty($vars['field_links']) ? '' : $vars['field_links'];

        if (is_array($links)) {
            foreach ($links as $link) {
                $linkItem = _unity_lab_link_array($link);

                $vars['content']['links'][] = $linkItem;
            }
        }
    }

    if (isset($vars['field_link'])) {

        $link = empty($vars['field_link']) ? '' : $vars['field_link'];


        $linkItem = _unity_lab_link_array($link[0]);


        $vars['content']['links'][] = $linkItem;

    }

}


/*
Adds CSS Classes for this $sectionID based on background image set using appropriate media queries
*/

function _unity_lab_add_background_css(&$vars, $useDefault=false) {

    $bannerImageHD = '';
    $bannerImageWide = '';
    $bannerImageSquare = '';

    if(isset($vars['field_background_image_hd']))
    {
        $bannerImageHD = $vars['field_background_image_hd'][0]['uri'];
    }
    else if($useDefault)
    {
        $bannerImageHD = theme_get_setting('unity_lab_default_hero_hd');
    }

    if(isset($vars['field_background_image_wide']))
    {
        $bannerImageWide = $vars['field_background_image_wide'][0]['uri'];
    }
    else if($useDefault)
    {
        $bannerImageWide = theme_get_setting('unity_lab_default_hero_wide');
    }

    if(isset($vars['field_background_image_square']))
    {
        $bannerImageSquare = $vars['field_background_image_square'][0]['uri'];
    }
    else if($useDefault)
    {
        $bannerImageSquare = theme_get_setting('unity_lab_default_hero_square');
    }

    //Trickle down, if we have a large but no medium, set medium to large.
    //If we have a medium but no small, set small to medium.
    if ($bannerImageHD && !$bannerImageWide) {
        $bannerImageWide = $bannerImageHD;
    }

    if ($bannerImageWide && !$bannerImageSquare) {
        $bannerImageSquare = $bannerImageWide;
    }



    if($bannerImageHD && $bannerImageWide && $bannerImageSquare)
    {


        $bannerImageHD = file_create_url($bannerImageHD);
        $bannerImageWide = file_create_url($bannerImageWide);
        $bannerImageSquare = file_create_url($bannerImageSquare);



        $vars['css_classes'] .= ' section-background-image overlay-black light-theme';


        drupal_add_css('#' . $vars['css_id'] . ' {background-image: url(' . $bannerImageHD . ');}', array('group' => CSS_THEME, 'type' => 'inline', 'media' => 'screen and (min-width: 1200px'));
        drupal_add_css('#' . $vars['css_id'] . ' {background-image: url(' . $bannerImageWide . ');}', array('group' => CSS_THEME, 'type' => 'inline', 'media' => 'screen and (min-width: 815px) and (max-width: 1200px)'));
        drupal_add_css('#' . $vars['css_id'] . ' {background-image: url(' . $bannerImageSquare . ');}', array('group' => CSS_THEME, 'type' => 'inline', 'media' => 'screen and (max-width: 815px)'));
    }
}



function _unity_lab_preprocess_paragraphs_item_hero_section(&$vars)
{

    $node = null;
    if (arg(0) == 'node' && is_numeric(arg(1))) {
      $node = node_load(arg(1));
    }

    //if no size, use medium as default
    $size = $vars['field_hero_size'];
    $size = empty($size[0]['value']) ? 'medium' : $size[0]['value'];
    $size = "hero__" . $size;
    $vars['hero_size'] = $size;


    $node_wrapper = entity_metadata_wrapper('node', $node);



    if (empty($vars['content']['heading'])) {
        $vars['content']['heading'] = $node_wrapper->title->value();

    }

    if (empty($vars['content']['introduction'])) {
        $vars['content']['introduction'] = $node_wrapper->field_introduction->value()['value'];


    }

    if (empty($vars['content']['subheading'])) {
        $vars['content']['subheading'] = '';
    }

    if (empty($vars['hero_size'])) {
        $vars['hero_size'] = 'hero__medium';
    }
    else {
      # code...
    }

    if (!isset($vars['content']['css_id'])) {
        //$vars['content']['css_id'] = "basic-hero";
    }

    if (!isset($vars['content']['links']) || !is_array($vars['links'])) {
        $vars['content']['links'] = array();
    }

    $vars['css_classes_array'][] = $vars['hero_size'];

    //load backgrounds
    _unity_lab_add_background_css($vars, true);







}




function _unity_lab_paragraphs_item_get_paragraphs(&$vars, $field) {

    if(isset($vars[$field]) && $vars[$field])
    {
        $pgs = $vars[$field];

        $pg_ids = array();

        if (is_array($pgs)) {
            foreach ($pgs as $pg) {
                $pg_ids[] = $pg['value'];
            }

            // Load up the field collection items
            $pgs = paragraphs_item_load_multiple($pg_ids);

            $pgs = entity_load('paragraphs_item', array($pg_ids));


            return $pgs;
        }
    }

    return null;
}


/*
determine default grid classes for a section if item doesn't override
*/
function _unity_lab_paragraphs_item_default_grid_classes($numItems, $maxItemsPerRow = 4) {


    //our grid only supports 1,2,3,4,6 items per row.
    //we prefer 3. 4 and 6 become tight.
    if (!is_int($maxItemsPerRow) || $maxItemsPerRow > 6 || $maxItemsPerRow == 5)
        $maxItemsPerRow = 3;



        $grid = 'col-sm-12 col-md-12 col-lg-12';

        if ($maxItemsPerRow == 1) {
            $grid = "col-sm-12 col-md-12 col-lg-12";
        }
        else if ($maxItemsPerRow == 2) {
            if ($numItems == 1) $grid = "col-sm-12 col-md-12 col-lg-12";
            else $grid = "col-sm-12 col-md-6 col-lg-6";
        }
        else if ($maxItemsPerRow == 3) {
            if ($numItems == 1) $grid = "col-sm-12 col-md-12 col-lg-12";
            else if ($numItems == 2) $grid = "col-sm-12 col-md-6 col-lg-6";
            else $grid = "col-sm-6 col-md-4 col-lg-4";
        }
        else {
            if ($numItems == 1) $grid = "col-sm-12 col-md-12 col-lg-12";
            else if ($numItems == 2) $grid = "col-sm-12 col-md-6 col-lg-6";
            else if ($numItems == 3) $grid = "col-sm-6 col-md-4 col-lg-4";
            else $grid = "col-sm-6 col-md-3 col-lg-3";
        }

        return $grid;

}
