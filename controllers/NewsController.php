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
        $page = (int)$_GET['page'] > 0 ? (int)$_GET['page'] : 1;

        $limit = 4;

        $total = $this -> model -> getTotalNews();
        $pages = ceil($total / $limit);

        if ($page > $pages) {
            $page = 1;
        }

        $offset = ($page - 1) * $limit;

        $news = $this -> model -> getNewsList($limit, $offset);

        $lastNews = $this -> model -> getOneLastNews();
        
        $pagination = new Pagination($page, $pages);
        [$startPaginationPage, $endPaginationPage, $hasPrev, $hasNext] = $pagination -> getPagination();

        require 'views/main.php';
    }

    public function news($id) {
        $total = $this -> model -> getTotalNews();

        if ($id < 1 || $id > $total) {
            $this -> main();
            return;
        } 

        $news = $this -> model -> getOneNews($id);

        require 'views/news.php';
    }
}

?>