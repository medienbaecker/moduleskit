<section id="<?= $module->slug() ?>" class="<?= $module->moduleId() ?>">
  <?php if ($cover = $module->cover()->toFile()): ?>
    <?= $cover->crop(1200, 600) ?>
  <?php endif ?>
  <?php if ($module->headline()->isNotEmpty()): ?>
    <h2><?= $module->headline() ?></h2>
  <?php endif ?>
  <?= $module->text()->kt() ?>
</section>
