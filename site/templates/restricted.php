<?php snippet('header') ?>
<h1><?= $page->title() ?></h1>

<?php if ($page->hasModules()): ?>
  <h2>Text</h2>
  <?php $page->renderModules() ?>

  <h2>Media</h2>
  <?php $page->renderModules('media') ?>
<?php endif ?>
<?php snippet('footer') ?>
