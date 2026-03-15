<div id="<?= $module->slug() ?>" class="<?= $module->moduleId() ?>">
  <?= $module->textarea()->kt() ?>
  <?php foreach ($module->buttons()->toStructure() as $button): ?>
    <a href="<?= $button->link() ?>"><?= $button->text() ?></a>
  <?php endforeach ?>
</div>
