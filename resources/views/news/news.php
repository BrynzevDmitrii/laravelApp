<h1>Список новостей </h1>
<?php
foreach($news as $n):?>
<div>
    <h5>
         <?= $n['title'] ?>
    </h5>
</div>
<?php endforeach ?>
