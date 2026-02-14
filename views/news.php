<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <header>
        <img src="./assets/images/logo.svg" alt="Logo" class="header-logo">
        <p class="header-text">Галактический<br>
            вестник
        </p>
    </header>
    <main class="work-news-main">
        <p class="work-news-path">Главная / <span class="grey-text-color"><?=$news['title']?></span></p>
        <h1 class="work-news-title"><?=$news['title']?></h1>
        <div class="work-news-container">
            <div class="work-news-info-container">
                <p class="news-date"><?=$news['fmt']?></p>
                <h2 class="work-news-announce"><?=$news['announce']?></h2>
                <span class="work-news-content"><?=$news['content']?></span>
                <a class="work-news-back-button" href="/index.php">
                    <span class="arrow-left"></span>Назад к новостям
                </a>
            </div>
            <div class="work-news-image-container">
                <img src="./assets/images/<?=$news['image']?>" alt="Selected news image" class="work-news-image">
            </div>
        </div>
    </main>
    <footer>
        <p class="footer-text">© 2023 — 2412 «Галактический вестник»</p>
    </footer>
</body>
</html>