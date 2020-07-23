<?php
function log_user(){
    echo "inside";
    exit();
}
function get_json_data(){
    $data=(array) json_decode(file_get_contents('php://input'), TRUE);
}
?>