<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="<?=BASE_URL?>assets/style.css">
</head>
<body>

    <?php
    require ROOT . '/views/components/header.php';
    ?>

    <main>
        <?php
        require ROOT . '/views/components/last_news.php';
        ?>
        
        <section class="news">
            <h1 class="news-title">Новости</h1>

            <?php
            require ROOT . '/views/components/news_list.php';
            ?>

            <?php
            require ROOT . '/views/components/pagination.php';
            ?>

        </section>
    </main>
    
    <?php
    require ROOT . '/views/components/footer.php';
    ?>
    
</body>
</html>