<div id="<?= $module->slug() ?>" class="<?= $module->moduleId() ?>">
  <?php foreach ($module->files()->sorted() as $image): ?>
    <?= $image->crop(400, 300) ?>
  <?php endforeach ?>
</div>
