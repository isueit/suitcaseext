<div<?php print $attributes; ?>>
<div<?php print $content_attributes; ?>>
  <?php if ($linked_logo_img || $site_name || $site_slogan): ?>
    <div class="branding-data clearfix">
<<<<<<< HEAD

      <div id="isu_wordmark">
        <a accesskey="1" class="nameplate" href="http://www.extension.iastate.edu" title="Iowa State University Extension and Outreach Homepage"><img src="<?php print base_path(); ?>sites/all/themes/suitcaseext/images/sprite.png" alt="Iowa State University"></a></div>
=======
      <?php if ($suitcase_config_logo): ?>
        <div class="logo-img">
          <?php print $suitcase_config_logo; ?>
        </div>
      <?php endif; ?>

      <?php if($show_isu_nameplate): ?>
        <div id="isu_wordmark">
          <a accesskey="1" class="nameplate" href="http://www.iastate.edu" title="Iowa State University Homepage"><img src="<?php print base_path(); ?>sites/all/themes/suitcase/images/sprite.png" alt="Iowa State University"></a>
        </div>
      <?php endif; ?>
>>>>>>> upstream/master
      <?php if ($site_name || $site_slogan): ?>
        <?php $class = $site_name_hidden && $site_slogan_hidden ? ' element-invisible' : ''; ?>
        <hgroup class="site-name-slogan<?php print $class; ?>">

          <?php if ($site_name): ?>
            <?php $class = $site_name_hidden ? ' element-invisible' : ''; ?>
            <?php if ($is_front): ?>
              <h1 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h1>
            <?php else: ?>
              <h2 class="site-name<?php print $class; ?>"><?php print $linked_site_name; ?></h2>
            <?php endif; ?>
          <?php endif; ?>
        </hgroup>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <?php print $content; ?>
</div>
</div>
