<?php


/*
add hooks per bundle type
*/
function unity_lab_preprocess_paragraphs_item(&$vars, $hook) {


    $bundle = $vars['elements']['#bundle'];
    $bundleDashed = str_replace('_', '-', $bundle);


    _unity_lab_preprocess_common_fields($vars);


    $function = __FUNCTION__ . '_' . $bundle;
    if (function_exists($function)) {
        $function($vars, $hook);
    }


    if (arg(0) == 'node' && is_numeric(arg(1))) {

      $node = node_load(arg(1));

      $function = $function . '__' . $node->type;

      if (function_exists($function)) {
          $function($vars, $hook);
      }
    }
}


function unity_lab_preprocess_paragraphs_item_classic_hero_section(&$vars, $hook) {

     _unity_lab_preprocess_paragraphs_item_hero_section($vars);



}

function unity_lab_preprocess_paragraphs_item_modern_hero_section__space(&$vars, $hook) {
     _unity_lab_preprocess_paragraphs_item_hero_section($vars);
     _unity_lab_paragraphs_item_get_theme_hook_suggestion($vars, __FUNCTION__);
}


function unity_lab_preprocess_paragraphs_item_modern_hero_section(&$vars, $hook) {

     _unity_lab_preprocess_paragraphs_item_hero_section($vars);
}


function unity_lab_preprocess_paragraphs_item_list_section(&$vars, $hook)
{
_unity_lab_add_background_css($vars, false);

    $cards = $vars['field_cards'];


    $vars['content']['items'] = array();

    $view_mode = !empty($settings['view_mode']) ? $settings['view_mode'] : 'full';

      $card_pg_ids = array();

      foreach ($cards as $delta => $item) {
        $card_pg_ids[] = $item['value'];
      }

      $card_entities = entity_load('paragraphs_item', $card_pg_ids);

      foreach($card_entities as $card_entity)
      {
          if(empty($card_entity->field_grid_classes))
          {
            $card_entity->field_grid_classes['und'][]['value'] = $defGrid;
          }
      }


      $card_render = entity_view('paragraphs_item', $card_entities, 'full');


     $vars['content']['items'] = $card_render;


}


function unity_lab_preprocess_paragraphs_item_card_section(&$vars, $hook)
{


    $containerMode = empty($vars['field_container_mode'][0]['value']) ? 'fixed' : $vars['field_container_mode'][0]['value'];

    if($containerMode =='fluid')
      $vars['container_mode'] = "container-fluid";
    else
      $vars['container_mode'] = 'container';

    _unity_lab_add_background_css($vars, false);

    $cards = $vars['field_cards'];


    $defGrid = _unity_lab_paragraphs_item_default_grid_classes(count($cards), 4);

    $vars['content']['items'] = array();

    $view_mode = !empty($settings['view_mode']) ? $settings['view_mode'] : 'full';


      $card_pg_ids = array();

      foreach ($cards as $delta => $item) {
        $card_pg_ids[] = $item['value'];
      }


      $card_entities = entity_load('paragraphs_item', $card_pg_ids);


      foreach($card_entities as $card_entity)
      {
      //  dpm($card_entity

          if(empty($card_entity->field_grid_classes))
          {
            $card_entity->field_grid_classes['und'][]['value'] = $defGrid;
          }
      }


      $card_render = entity_view('paragraphs_item', $card_entities, 'full');


     $vars['content']['items'] = $card_render;



}

function unity_lab_preprocess_paragraphs_item_common_card(&$vars, $hook)
{

    $vars['content']['type'] = empty($vars['field_card_type'][0]['value']) ? '' : $vars['field_card_type'][0]['value'];
    _unity_lab_paragraphs_item_get_theme_hook_suggestion($vars, __FUNCTION__);
}

function unity_lab_preprocess_paragraphs_item_stat_card(&$vars, $hook)
{
     $vars['content']['prefix'] = empty($vars['field_prefix'][0]['value']) ? '' : $vars['field_prefix'][0]['value'];
     $vars['content']['postfix'] = empty($vars['field_postfix'][0]['value']) ? '' : $vars['field_postfix'][0]['value'];
     $vars['content']['count-from'] = empty($vars['field_count_from'][0]['value']) ? '' : $vars['field_count_from'][0]['value'];
     $vars['content']['count-to'] = empty($vars['field_count_to'][0]['value']) ? '' : $vars['field_count_to'][0]['value'];


}


function unity_lab_preprocess_paragraphs_item_image_button_card(&$vars, $hook)
{
  //  dpm("image button card processor");

    $vars['content']['type'] = empty($vars['field_image_button_type'][0]['value']) ? '' : $vars['field_image_button_type'][0]['value'];
    _unity_lab_paragraphs_item_get_theme_hook_suggestion($vars, __FUNCTION__);

}

function unity_lab_preprocess_paragraphs_item_image_button_card_promo_box(&$vars, $hook)
{

}


function unity_lab_preprocess_paragraphs_item_button_section(&$vars, $hook)
{

    $vars['content']['type'] = empty($vars['field_button_type'][0]['value']) ? '' : $vars['field_button_type'][0]['value'];
    $defGrid = _unity_lab_paragraphs_item_default_grid_classes(count($vars['content']['links']), 4);
    //_unity_lab_paragraphs_item_get_theme_hook_suggestion($vars, __FUNCTION__);
    $vars['content']['grid_classes'] = empty($vars['field_grid_classes'][0]['value']) ? $defGrid : $vars['field_grid_classes'][0]['value'];


    if($vars['content']['type'] == 'impact_button_block')
      $vars['content']['button_class'] = 'impact-button button-block';
    else if($vars['content']['type'] == 'hero_button_block')
      $vars['content']['button_class'] = 'hero-button button-block';
    else
      $vars['content']['button_class'] = 'default-button button-block';
}
