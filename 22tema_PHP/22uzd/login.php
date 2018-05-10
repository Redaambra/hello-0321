<?php

sleep(5);

header("Content-Type: application/json; charset=UTF-8");

if ($_REQUEST['pass1'] == $_REQUEST['pass2']) {
    $response = [
        success => true,
        token => 'Robotas irgi turi jausmus. T.y. slaptažodis pakeistas'
    ];
} else {
    $response = [
        success => false,
        error => 'Slaptažodis nepakeistas :p'
    ];
}

echo json_encode($response);
