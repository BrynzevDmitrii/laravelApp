
<h1>Категории новостей</h1>
<?php
foreach($categorty as $cat):?>
<div>
    <h2>
        <button>
            <a href="<?= route('news.show',['id'=> $cat['id']])?>">
            <?= $cat['title'] ?>
            </a>
        </button>
    </h2>
</div>
<?php endforeach ?>
