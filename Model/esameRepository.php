<?php
namespace Model;

use Util\Connection;
use PDO;

class EsameRepository{

    private function __construct()
    {
    }

    public static function getEsami():array{
        $connection = Connection::getInstance();
        $sql = 'SELECT * FROM esame';
        $stmt = $connection->prepare($sql);
        $stmt->execute([
        ]);
        $data = $stmt->fetchAll();
        return $data;
    }

}