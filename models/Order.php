<?php

class Order extends BaseModel
{
    // TẠO ĐƠN HÀNG
    public function createOrder(
        $user_id,
        $customer_name,
        $phone,
        $address,
        $total_price
    ) {

        $sql = "
            INSERT INTO orders(
                user_id,
                customer_name,
                phone,
                address,
                total_price
            )
            VALUES(
                :user_id,
                :customer_name,
                :phone,
                :address,
                :total_price
            )
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':user_id', $user_id);

        $stmt->bindParam(':customer_name', $customer_name);

        $stmt->bindParam(':phone', $phone);

        $stmt->bindParam(':address', $address);

        $stmt->bindParam(':total_price', $total_price);

        $stmt->execute();

        return $this->conn->lastInsertId();
    }

    // THÊM CHI TIẾT ĐƠN HÀNG
    public function createOrderItem(
        $order_id,
        $product_id,
        $product_name,
        $product_price,
        $quantity
    ) {

        $sql = "
            INSERT INTO order_items(
                order_id,
                product_id,
                product_name,
                product_price,
                quantity
            )
            VALUES(
                :order_id,
                :product_id,
                :product_name,
                :product_price,
                :quantity
            )
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':order_id', $order_id);

        $stmt->bindParam(':product_id', $product_id);

        $stmt->bindParam(':product_name', $product_name);

        $stmt->bindParam(':product_price', $product_price);

        $stmt->bindParam(':quantity', $quantity);

        return $stmt->execute();
    }

    // LẤY TẤT CẢ ĐƠN HÀNG
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
}