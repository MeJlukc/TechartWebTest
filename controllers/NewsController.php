<?php
require 'models/News.php';

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

        // pagination
        
        if ($pages <= 3) {
            $startPaginationPage = 1;
            $endPaginationPage = $pages;
        } else {
            if ($page == 1) {
                $startPaginationPage = 1;
                $endPaginationPage = 3;
            } else if ($page == $pages || $page + 1 == $pages) {
                $startPaginationPage = $pages - 2;
                $endPaginationPage = $pages;
            } else {
                $startPaginationPage = $page;
                $endPaginationPage = $page + 2;
            }
        }

        require 'views/main.php';
    }

    public function news($id) {
        $news = $this -> model -> getOneNews($id);

        require 'views/news.php';
    }
}

?>