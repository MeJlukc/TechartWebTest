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
        <img src="/assets/images/logo.svg" alt="Logo" class="header-logo">
        <p class="header-text">Галактический<br>
            вестник
        </p>
    </header>

    <main>
        <section class="last-news"
        style="--last-news-background: url('/assets/images/<?=$lastNews['image']?>')">
            <h1 class="last-news-title"><?=$lastNews['title']?></h1>
            <span class="last-news-text"><?=$lastNews['announce']?></span>
        </section>
        
        <section class="news">
            <h1 class="news-title">Новости</h1>
            <div class="news-container">
                <?php
                foreach ($news as $item):
                ?>
                    <div class="news-item">
                        <p class="news-date"><?=$item['fmt']?></p>
                        <h2 class="news-item-title"><?=$item['title']?></h2>
                        <!-- обернуто в span, а не в p, т.к. из БД приходит текст уже в теге p и верстка ломается -->
                        <span class="news-item-text"><?=$item['announce']?></span>
                        <a href="/?id=<?=$item['id']?>" class="news-item-button-link">Подробнее</a>
                    </div>
                <?php
                endforeach;
                ?>
            </div>

            <ul class="pagination-group-list">
                <?php
                if ($page > 1):
                ?>
                    <li class="pagination-item pagination-item-before">
                        <a href="/?page=<?=$page - 1?>" class="pagination-button-link-before">
                            <span class="pagination-before-arrow"></span>
                        </a>
                    </li>
                <?php
                endif;
                ?>

                <?php
                for ($i = $startPaginationPage; $i <= $endPaginationPage; $i++):
                ?>
                    <li class="pagination-item">
                        <a href="/?page=<?=$i?>" class="pagination-button-link"><?=$i?></a>
                    </li>
                <?php
                endfor;
                ?>

                <?php
                if (($pages > 3) && ($page + 2) < $pages):
                ?>
                    <li class="pagination-item pagination-item-next">
                        <a href="/?page=<?=$page + 1?>" class="pagination-button-link-next">
                            <span class="pagination-next-arrow"></span>
                        </a>
                    </li>
                <?php
                endif;
                ?>
            </ul>
        </section>
    </main>
    <footer>
        <p class="footer-text">© 2023 — 2412 «Галактический вестник»</p>
    </footer>
</body>
</html>