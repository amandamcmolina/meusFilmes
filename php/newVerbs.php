<?php

    global $_DELETE;
    global $_PUT;

    if (!strcasecmp($_SERVER['REQUEST_METHOD'], 'DELETE')) {
        parse_str(file_get_contents('php://input'), $_DELETE);
    }
    if (!strcasecmp($_SERVER['REQUEST_METHOD'], 'PUT')) {
        parse_str(file_get_contents('php://input'), $_PUT);
    }

?>