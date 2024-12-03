<?php

require_once __DIR__ . '/../../../apiCore/config.php';
require_once __DIR__ . '/../../../apiCore/response.php';

$data = require_once __DIR__ . '/../../../apiCore/data.php';

echo Response::json(200, 'success', $data);
