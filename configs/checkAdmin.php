<?php

if (
    !isset($_SESSION['user'])
    || $_SESSION['user']['role'] != 'admin'
) {
    die('Bạn không có quyền truy cập');
}