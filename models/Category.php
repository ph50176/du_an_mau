<?php

class Category extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT * FROM categories";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function insert($name)
    {
        $sql = "
            INSERT INTO categories(name)
            VALUES(:name)
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':name', $name);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "
            DELETE FROM categories
            WHERE id = :id
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}