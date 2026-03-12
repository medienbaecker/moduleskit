<?php foreach($module->files() as $file): ?>
  <?= $file->crop(200, 200) ?>
<?php endforeach ?>