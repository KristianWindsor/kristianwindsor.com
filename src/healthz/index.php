<?php
    header('HTTP/1.1 200 OK');
    echo json_encode(['status' => 'healthy', 'timestamp' => time()]);
?>