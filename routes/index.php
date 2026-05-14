<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'                 => (new HomeController)->index(),

    'products'          => (new ProductController)->index(),
    'product-detail'    => (new ProductController)->detail(),

    'cart'              => (new CartController)->index(),
    'add-to-cart'       => (new CartController)->add(),

    'checkout'          => (new OrderController)->checkout(),

    'order-checkout'    => (new OrderController)->checkout(),   

    'login'             => (new AuthController)->login(),
    'register'          => (new AuthController)->register(),
    'logout'            => (new AuthController)->logout(),


    'admin'             => (new AdminController)->dashboard(),

    'admin-products'
        => (new AdminProductController)->index(),

    'admin-product-create'
        => (new AdminProductController)->create(),

    'admin-product-delete'
        => (new AdminProductController)->delete(),

    'admin-users'
    => (new AdminUserController)->index(),

    'admin-user-delete'
        => (new AdminUserController)->delete(),

    'admin-categories'
    => (new AdminCategoryController)->index(),

    'admin-category-create'
        => (new AdminCategoryController)->create(),

    'admin-category-delete'
        => (new AdminCategoryController)->delete(),

        'admin-orders'
    => (new AdminOrderController)->index(),
};

