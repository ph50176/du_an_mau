<?php

class Order extends BaseModel
{
    // Tạo đơn hàng
    public function createOrder(
        $customer_name,
        $phone,
        $address,
        $total_price
    ) {

        $sql = "
            INSERT INTO orders(
                customer_name,
                phone,
                address,
                total_price
            )
            VALUES(
                :customer_name,
                :phone,
                :address,
                :total_price
            )
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':customer_name' => $customer_name,
            ':phone' => $phone,
            ':address' => $address,
            ':total_price' => $total_price
        ]);

        return $this->conn->lastInsertId();
    }

    // Thêm sản phẩm vào order_items
    public function insertOrderItem(
        $order_id,
        $product_id,
        $product_name,
        $price,
        $quantity
    ) {

        $sql = "
            INSERT INTO order_items(
                order_id,
                product_id,
                product_name,
                price,
                quantity
            )
            VALUES(
                :order_id,
                :product_id,
                :product_name,
                :price,
                :quantity
            )
        ";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':order_id' => $order_id,
            ':product_id' => $product_id,
            ':product_name' => $product_name,
            ':price' => $price,
            ':quantity' => $quantity
        ]);
    }

    // Admin lấy đơn hàng
    public function getAllOrders()
    {
        $sql = "
            SELECT *
            FROM orders
            ORDER BY id DESC
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function findById($id)
{
    $sql = "
        SELECT *
        FROM orders
        WHERE id = :id
    ";

    $stmt = $this->conn->prepare($sql);

    $stmt->bindParam(':id', $id);

    $stmt->execute();

    return $stmt->fetch();
}

public function updateStatus($id, $status)
{
    $sql = "
        UPDATE orders
        SET status = :status
        WHERE id = :id
    ";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':id' => $id,
        ':status' => $status
    ]);
}

public function delete($id)
{
    // Xóa sản phẩm trong order_items trước
    $sqlItem = "
        DELETE FROM order_items
        WHERE order_id = :order_id
    ";

    $stmtItem = $this->conn->prepare($sqlItem);

    $stmtItem->execute([
        ':order_id' => $id
    ]);

    // Xóa đơn hàng
    $sql = "
        DELETE FROM orders
        WHERE id = :id
    ";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':id' => $id
    ]);
}
}