<?php
class Database{
    public function getConnection(){
        $localhost = 'localhost';
        $database = 'id20376034_seach';
        $user = 'id20376034_seach';
        $password = 'BestProyect_1';
        $link = new PDO("mysql:host=$localhost;dbname=$database",$user,$password);
        return $link;
    }
}
?>
