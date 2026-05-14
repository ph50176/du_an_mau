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

    // THÊM SẢN PHẨM
    public function insertProduct(
        $name,
        $price,
        $image,
        $description
    ) {

        $sql = "
            INSERT INTO products(
                name,
                price,
                image,
                description
            )
            VALUES(
                :name,
                :price,
                :image,
                :description
            )
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':description', $description);

        return $stmt->execute();
    }

    // UPDATE SẢN PHẨM
    public function updateProduct(
        $id,
        $name,
        $price,
        $description
    ) {

        $sql = "
            UPDATE products
            SET
                name = :name,
                price = :price,
                description = :description
            WHERE id = :id
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);

        return $stmt->execute();
    }

    // XÓA SẢN PHẨM
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}