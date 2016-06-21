<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">





           <link rel="apple-touch-icon" href="/sites/all/libraries/unity/assets/images/favicons/apple-touch-icon-144x144-precomposed.png">
          <link rel="icon" href="/sites/all/libraries/unity/assets/images/favicons/icon.png">


    <?php print $styles; ?>
  <?php print $scripts; ?>


  <title><?php print $head_title; ?></title>

  <script src="<?php print unity_lab_directory() ?>/js/header/header.dev.js"></script>



</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <div id="skip-link">
  </div>



    <?php print $page_top; ?>
  <?php print $page; ?>

    <?php print $page_bottom; ?>



<script src="<?php print unity_lab_directory() ?>/js/footer/footer.dev.js"></script>

    </body>
</html>
