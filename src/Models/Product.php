<?php

namespace Crellan\PdoCrud\Models;

use Crellan\PdoCrud\Core\DB;
use PDO;

class Product extends DB
{
    private $table = "product";

    public function __Construct()
    {
        $this->connect();

    }

    public function getAllProducts(): array
    {
        $sql = "SELECT * FROM " . $this->table;
        $products = [];

        foreach ($this->db->query($sql) as $value) {
            array_push($products, $value);
        }
        return $products;
    }

    public function insertProduct($name, $price, $description, $quant): bool
    {
        try {
            $sql = "INSERT INTO product (name, price, description, quant) VALUES (?, ? ,? ,?)";
            $prepare = $this->db->prepare($sql);
            $prepare->bindParam(1, $name);
            $prepare->bindParam(2, $price);
            $prepare->bindParam(3, $description);
            $prepare->bindParam(4, $quant);
            $prepare->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
            die();
        }
        return true;
    }

    public function getRow($id): array
    {
        $sql = "SELECT * FROM product WHERE id = ?";
        $prepare = $this->db->prepare($sql);
        $prepare->bindParam(1, $id);
        $prepare->execute();
        $result = $prepare->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateProduct($name, $price, $description, $quant, $id): bool
    {
        try {
            $sql = "UPDATE product SET name= ?, price= ?, description= ?, quant= ? WHERE id = ? ";
            $prepare = $this->db->prepare($sql);
            $prepare->bindParam(1, $name);
            $prepare->bindParam(2, $price);
            $prepare->bindParam(3, $description);
            $prepare->bindParam(4, $quant);
            $prepare->bindParam(5, $id);
            $prepare->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            die();
        }
        return true;
    }

    public function deleteProduct($id): bool
    {
        try {
            $sql = "DELETE FROM product WHERE id = ?";

            $prepare = $this->db->prepare($sql);
            $prepare->bindParam(1, $id);
            $prepare->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
            die();
        }
        return true;
    }
}
