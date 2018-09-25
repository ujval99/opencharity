<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates view-our-mission--row"
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]): ?> class="<?php print $classes_array[$id]; ?> view-<?php print str_replace("_", "-", $view->name);?>__row "<?php endif; ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>