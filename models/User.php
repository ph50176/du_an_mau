<?php

class User extends BaseModel
{
    public function register($name, $email, $password)
    {
        $sql = "
            INSERT INTO users(name, email, password)
            VALUES(:name, :email, :password)
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        return $stmt->execute();
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':email', $email);

        $stmt->execute();

        return $stmt->fetch();
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM users";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}