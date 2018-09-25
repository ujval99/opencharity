<?php
/**
 * @file
 * Opencharity theme implementation to display a single Drupal page.
 *
 * Regions:
 * - $page['header']: Items for Header Regions.
 * - $page['featured']: Items for Featured Regions.
 * - $page['highlight']: Items for Highlight Regions.
 * - $page['content']: The main content of the current page.
 * - $page['blogs']: Items for the Blogs Region.
 */
?>

<header class="header" id="header" >
  <div class="container">
    <div id="logo">
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
    </div>
    <a class="toggle-menu" href="javascript:void(0);"></a>
    <?php print render($page['header']); ?>
  </div>
</header>

<div class="section featured">
   <?php print render($page['featured']); ?>
</div>

<div class="clear"></div>

<div class="section highlighter">
  <div class="section__container">
    <?php print render($page['highlight']); ?>
  </div>
</div>

<div class="clear"></div>

<div class="section content">
  <?php print render($page['content']); ?>
</div>

<div class="section blogs">
  <div class="section__container">
    <?php print render($page['blogs']); ?>
  </div>
</div>

<div class="clear"></div>

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