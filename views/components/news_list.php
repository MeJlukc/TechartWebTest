<div class="news-container">
    <?php
    foreach ($news as $item):
    ?>
        <div class="news-item">
            <p class="news-date"><?=$item['fmt']?></p>
            <h2 class="news-item-title"><?=$item['title']?></h2>
            <!-- обернуто в span, а не в p, т.к. из БД приходит текст уже в теге p и верстка ломается -->
            <span class="news-item-text"><?=$item['announce']?></span>
            <a href="<?=BASE_URL?>?id=<?=$item['id']?>" class="news-item-button-link">Подробнее</a>
        </div>
    <?php
    endforeach;
    ?>
</div>
