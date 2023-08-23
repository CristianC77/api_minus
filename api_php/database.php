<?php
class Database{
    public function getConnection(){
        $localhost = 'localhost';
        $database = 'id20353581_p';
        $user = 'id20353581_p';
        $password = 'Cristian_1';
        $link = new PDO("mysql:host=$localhost;dbname=$database",$user,$password);
        return $link;
    }
}
?>
