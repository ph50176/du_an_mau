<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'                 => (new HomeController)->index(),

    'products'          => (new ProductController)->index(),
    'product-detail'    => (new ProductController)->detail(),

    'cart'              => (new CartController)->index(),
    'add-to-cart'       => (new CartController)->add(),

    'checkout'          => (new OrderController)->checkout(),

    'login'             => (new AuthController)->login(),
    'register'          => (new AuthController)->register(),

    'admin'             => (new AdminController)->dashboard(),
};

