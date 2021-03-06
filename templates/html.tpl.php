<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <?php print $styles; ?>
  <?php print $scripts; ?>
<!--  [if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--  <script >/* html5shiv */ (function(){var t='abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video'.split(' ');for(var i=t.length;i--;)document.createElement(t[i])})();</script>-->

<?php
global $base_url;
$jsPath = DRUPAL_ROOT . "/local/javascript.js";
$jsURL = $base_url . "/local/javascript.js";
if (file_exists($jsPath)) {
  print "<script type=\"text/javascript\" src=\"" . $jsURL . "\"></script>\n";
}

$cssPath = DRUPAL_ROOT . "/local/styles.css";
$cssURL = $base_url . "/local/styles.css";
if (file_exists($cssPath)) {
  print "<link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"" . $cssURL . "\" />\n";
}

$printPath = DRUPAL_ROOT . "/local/print.css";
$printURL = $base_url . "/local/print.css";
if (file_exists($printPath)) {
  print "<link type=\"text/css\" rel=\"stylesheet\" media=\"print\" href=\"" . $printURL . "\" />\n";
}
?>

<script type=text/javascript>
// Function to add the word menu to the hamberger menu charactor
(function($) {
  $(document).ready(function() {
    $origHtml = $("ul#main-menu >li.first > a").html();
    if ($origHtml == "≡") {
      $("ul#main-menu >li:first > a").html($origHtml + " <span class=\"hamburger-menu-text\">menu</span>");
    }
  });
})(jQuery);
</script>

</head>
<body<?php print $attributes;?>>
  <div class="outer-wrapper">
	<!--[if lt IE 9]><div class="iecomp"><![endif]-->
  		<?php print $page_top; ?>
  		<?php print $page; ?>
  		<?php print $page_bottom; ?>
	<!--[if lt IE 9]></div><![endif]-->
  </div>
</body>
</html>
