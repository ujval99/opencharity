<?php
/**
 * @file
 * Opencharity theme implementation to display a single Drupal page.
 *
 * Regions:
 * - $page['help']: Dynamic help text.
 * - $page['header']: Items for Header Regions.
 * - $page['content']: The main content of the current page.
 */
?>

<header class="header" id="header">
  <div class="container">
    <div id="logo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    </div>
    <a class="toggle-menu" href="javascript:void(0);"></a>
    <?php print render($page['header']); ?>
  </div>
</header>

<div class="section content">
  <?php if ($breadcrumb): ?>
    <div class="section__breadcrumbs" id="breadcrumbs">
      <div class="section__container">
        <?php print $breadcrumb; ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="section__container">
    <?php print $messages; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  </div>

  <?php print render($page['content']); ?>
</div>

<footer class="footer" id="footer">
  <div class="footer__container">
    <ul class="footer__container--social" id="socialbar">
      <?php $options['attributes'] = array('target' => 'blank'); ?>
      <?php if ($facebook): ?><li class="fb"><?php print l(t('facebook'), $facebook, $options); ?></li> <?php endif; ?>
      <?php if ($twitter): ?><li class="tw"><?php print l(t('twitter'), $twitter, $options); ?></li> <?php endif; ?>
      <?php if ($googleplus): ?><li class="gp"><?php print l(t('googleplus'), $googleplus, $options); ?></li> <?php endif; ?>
    </ul>
    <?php if ($footer_copyright || $footer_developed): ?>
        <div id="copyright" class="footer__container--copyright">
        <?php if ($footer_developed): ?>
          <span class="developed">
              <?php print ($footer_developedby); ?>
          </span>
        <?php endif; ?>
        </div>
      <?php endif; ?>
  </div>
</footer>