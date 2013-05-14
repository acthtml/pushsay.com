<div id="page">
  <div id="header">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if ($site_name || $site_slogan): ?>
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="logo"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="logo">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>
      <?php endif; ?>
      <div class="nav-collapse collapse">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('nav')))); ?>
      </div><!--/.nav-collapse -->

      <?php print render($page['header']); ?>

      <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>
  </div>
  <div id="main">
    <div class="container">
      <div id="content">
        <?php print $messages; ?>
        <a id="main-content"></a>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div>
      <?php if ($page['sidebar']): ?>
        <div id="sidebar" class="column sidebar">
          <?php print render($page['sidebar']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <div id="footer">
    <div class="container">
      <?php print render($page['footer']); ?>
    </div>
  </div>
</div>
