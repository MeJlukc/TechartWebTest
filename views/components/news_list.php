<div class="news-container">
    <?php
    foreach ($news as $item):
    ?>
        <div class="news-item">
            <p class="news-item-date news-date"><?=$item['fmt']?></p>
            <h2 class="news-item-title"><?=$item['title']?></h2>
            <span class="news-item-text"><?=$item['announce']?></span>
            <a href="<?=BASE_URL?>?id=<?=$item['id']?>" class="button news-item-button-link">Подробнее</a>
        </div>
    <?php
    endforeach;
    ?>
</div>
