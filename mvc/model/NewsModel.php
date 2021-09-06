<?php
class NewsModel extends Database
{
    //INSERT INTO `news` (`idnews`, `idgroup`, `title`, `urlimage`, `content`, `timepost`)
    // VALUES (NULL, '1', 'Bản tin số 1', 'No', 'ABCXYZ', '2021-09-01 04:31:13.000000');
    public function getAllNews()
    {
        $sql = "SELECT * FROM news";
        return mysqli_query($this->connect, $sql);
    }

    public function getNewsByID($id)
    {
        $sql = "SELECT * FROM `news` WHERE `idnews` = $id";
        $result = mysqli_query($this->connect, $sql);
        return $result;
    }

    public function insertNews($idgroup, $title, $urlimage, $content, $timepost)
    {
        $sql = "INSERT INTO `news` (`idnews`, `idgroup`, `title`, `urlimage`, `content`, `timepost`) 
                VALUES (NULL, '$idgroup', '$title', '$urlimage', '$content', '$timepost');";
        if (mysqli_query($this->connect, $sql)) {
            return true;
        } else {
            echo "<script type='text/javascript'>alert('Error:'. $sql .$this->connect->error);</script>";
            return false;
        }
    }
}
?>