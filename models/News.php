<?php
class News
{
    private $db;

    public function __construct($db) {
        $this -> db = $db;
    }

    public function getTotalNews() {
        $sql = "
            SELECT count(*) total
            FROM news
        ";
        
        $rs = $this -> db -> query($sql);
        $row = $rs -> fetch();
        
        return $row['total'];
    }

    public function getNewsList($limit, $offset) {
        $sql = "
            SELECT *,
            DATE_FORMAT(`date`, '%d.%m.%Y') fmt
            FROM news
            ORDER BY `date` DESC
            LIMIT :limit OFFSET :offset
        ";
        
        $rs = $this -> db -> prepare($sql);
        $rs -> bindValue(":limit", $limit, PDO::PARAM_INT);
        $rs -> bindValue(":offset", $offset, PDO::PARAM_INT);
        $rs -> execute();

        return $rs -> fetchAll();
    }

    public function getOneNews($id) {
        $sql = "
            SELECT *,
            DATE_FORMAT(`date`, '%d.%m.%Y') fmt
            FROM news
            WHERE id = :id
        ";

        $rs = $this -> db -> prepare($sql);
        $rs -> bindValue(':id', $id, PDO::PARAM_INT);
        $rs -> execute();

        return $rs -> fetch();
    }

    public function getOneLastNews() {
        $sql = "
            SELECT *,
            DATE_FORMAT(`date`, '%d.%m.%Y') fmt
            FROM news
            ORDER BY `date` DESC
            LIMIT 1
        ";

        $rs = $this -> db -> query($sql);
        
        return $rs -> fetch();
    }
}

?>