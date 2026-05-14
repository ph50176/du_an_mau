<?php

class Product extends BaseModel
{
    public function getAllProducts()
    {
        $sql = "SELECT * FROM products ORDER BY id DESC";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    }
}