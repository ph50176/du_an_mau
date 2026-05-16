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

    

    // XÓA SẢN PHẨM
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function getByCategory($categoryId)
    {
        $sql = "
            SELECT * FROM products
            WHERE category_id = ?
            ORDER BY id DESC
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$categoryId]);

        return $stmt->fetchAll();
    }

    public function searchByName($keyword)
    {
        $sql = "
            SELECT *
            FROM products
            WHERE LOWER(name) LIKE LOWER(:keyword)
        ";

        $stmt = $this->conn->prepare($sql);

        $search = "%" . trim($keyword) . "%";

        $stmt->bindParam(':keyword', $search);

        $stmt->execute();

        return $stmt->fetchAll();
    }


    public function getAll()
    {
        $sql = "SELECT * FROM products";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function find($id)
    {
        $sql = "
            SELECT * FROM products
            WHERE id = :id
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    }

    public function updateProduct(
        $id,
        $name,
        $price,
        $image,
        $description
    ){
        $sql = "
            UPDATE products
            SET
                name = :name,
                price = :price,
                image = :image,
                description = :description
            WHERE id = :id
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':description', $description);

        return $stmt->execute();
    }
}