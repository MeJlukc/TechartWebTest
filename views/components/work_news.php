<main class="work-news-main">
    <p class="work-news-path">Главная / <span class="grey-text-color"><?=$news['title']?></span></p>
    <h1 class="work-news-title"><?=$news['title']?></h1>
    <div class="work-news-container">
        <div class="work-news-info-container">
            <p class="news-date"><?=$news['fmt']?></p>
            <h2 class="work-news-announce"><?=$news['announce']?></h2>
            <span class="work-news-content"><?=$news['content']?></span>
            <a class="work-news-back-button" href="<?=BASE_URL?>index.php">
                <span class="arrow-left"></span>Назад к новостям
            </a>
        </div>
        <div class="work-news-image-container">
            <img src="<?=BASE_URL?>assets/images/<?=$news['image']?>" alt="Selected news image" class="work-news-image">
        </div>
    </div>
</main>