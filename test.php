<?php

require_once './configs/env.php';
require_once './configs/database.php';

$conn = ConnectDB::connect();

echo "Kết nối database thành công";