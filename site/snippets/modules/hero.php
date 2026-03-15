<div id="<?= $module->slug() ?>" class="<?= $module->moduleId() ?> hero--<?= $module->background()->or('light') ?>">
  <h2><?= $module->heading() ?></h2>
  <?= $module->text()->kt() ?>
</div>
