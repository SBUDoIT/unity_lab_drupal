<?php

if($has_hero) {
    hide($content['field_hero_section']);
    hide($content['field_introduction']);
}
//dpm(get_defined_vars());
$renderedContent = render($content);


if($renderedContent) {
  print $renderedContent;
}
else {

  print ' ';
}


?>
