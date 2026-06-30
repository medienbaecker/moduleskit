<div id="<?= $module->slug() ?>" class="<?= $module->moduleId() ?>">
  <?php foreach ($module->gallery()->toFiles() as $image): ?>
    <?= $image->crop(400, 300) ?>
  <?php endforeach ?>
</div>
