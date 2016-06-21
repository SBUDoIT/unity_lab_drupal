<?php
function unity_lab_form_system_theme_settings_alter(&$form, $form_state)
{

	$form['unity_lab_default_hero_hd'] = array (
		'#type'=>'textfield',
		'#title'=>'URL to default Hero HD Image',
		'#default_value' => theme_get_setting('unity_lab_default_hero_hd'),
	);

	$form['unity_lab_default_hero_wide'] = array (
		'#type'=>'textfield',
		'#title'=>'URL to default Hero Wide Image',
		'#default_value' => theme_get_setting('unity_lab_default_hero_wide'),
	);

	$form['unity_lab_default_hero_square'] = array (
		'#type'=>'textfield',
		'#title'=>'Optional Body Classes',
		'#default_value' => theme_get_setting('unity_lab_default_hero_square'),
	);

  $form['unity_lab_version'] = array (
    '#type'=>'textfield',
    '#title'=>'What version of Unity Lab do you want to use? Special Options: latest, localvm',
    '#default_value' => theme_get_setting('unity_lab_version'),
  );
}

?>
