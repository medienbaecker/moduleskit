<?php
/*
  In every module snippet, $module is the module page
  and $page is the parent page.
*/
?>
<div id="<?= $module->slug() ?>" class="<?= $module->moduleId() ?>">
  <?= $module->textarea()->kt() ?>
</div>
