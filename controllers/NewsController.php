<?php
require ROOT . '/models/News.php';
require ROOT . '/controllers/utils/Pagination.php';

class NewsController
{
    private $model;

    public function __construct($db) {
        $this -> model = new News($db);
    }

    public function notFound() {
        require ROOT . '/views/404.php';
    }

    public function main() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $limit = 4;

        $total = $this -> model -> getTotalNews();
        $pages = ceil($total / $limit);

        if ($page < 1) {
            $page = 1;
        } else if ($page > $pages) {
            $this -> notFound();
            return;
        }

        $offset = ($page - 1) * $limit;

        $news = $this -> model -> getNewsList($limit, $offset);

        $lastNews = $this -> model -> getOneLastNews();
        
        $pagination = new Pagination($page, $pages);
        [$startPaginationPage, $endPaginationPage, $hasPrev, $hasNext] = $pagination -> getPagination();

        require ROOT . '/views/main.php';
    }

    public function news($id) {
        $total = $this -> model -> getTotalNews();

        if ($id < 1 || $id > $total) {
            $this -> notFound();
            return;
        } 

        $news = $this -> model -> getOneNews($id);

        require ROOT . '/views/news.php';
    }
}

?>