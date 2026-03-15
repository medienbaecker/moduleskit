<div id="<?= $module->slug() ?>" class="<?= $module->moduleId() ?>">
  <?php foreach ($module->files()->sorted() as $file): ?>
    <?= $file->crop(200, 200) ?>
  <?php endforeach ?>
</div>
