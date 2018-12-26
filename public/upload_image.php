<?php

require '../app/lib/FroalaEditor.php';

try {
    $response = FroalaEditor_Image::upload('/uploads/');
    echo stripslashes(json_encode($response));
}
catch (Exception $e) {
    http_response_code(404);
}