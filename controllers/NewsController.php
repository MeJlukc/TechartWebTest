<?php
require ROOT . '/models/News.php';
require ROOT . '/controllers/utils/Pagination.php';

class NewsController
{
    private $model;

    public function __construct($db) {
        $this -> model = new News($db);
    }

    public function main() {
        $page = $_GET['page'] ?? 1;

        $limit = 4;
        $offset = ($page - 1) * $limit;

        $total = $this -> model -> getTotalNews();
        $pages = ceil($total / $limit);

        $news = $this -> model -> getNewsList($limit, $offset);

        $lastNews = $this -> model -> getOneLastNews();
        
        $pagination = new Pagination($page, $pages);
        [$startPaginationPage, $endPaginationPage, $hasPrev, $hasNext] = $pagination -> getPagination();

        require 'views/main.php';
    }

    public function news($id) {
        $news = $this -> model -> getOneNews($id);

        require 'views/news.php';
    }
}

?>