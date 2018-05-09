<?php
error_reporting(0);
@ini_set('display_errors', 0);

// Prisijungimo duomenys
$servername = 'localhost';
$dbname = 'Auto';
$username = 'Auto';
$password = 'LabaiSlaptas123';



// Prisijungiame prie duomenų bazės 
$conn = new mysqli($servername, $username, $password, $dbname);

header('Content-Type: application/json');

if ($conn->connect_error) {
    echo json_encode([
        success => false,
        error => $conn->connect_error
    ]);
    exit;
}

// Suformuojame SELECT užklausą
//$sql = 'SELECT id, number, distance/time*3.6 as speed, date FROM radars ORDER BY number, date DESC';
$sql = 'SELECT * FROM radars';


// Vykdome suformuotą užklausą duomenų bazėje
$result = $conn->query($sql);

$autos = [];

// Tikriname ar rezultate yra bent viena eilutė ir suformuotų lentelę
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $autos[] = $row;
    }
}
echo json_encode([
    'success' => true,
    'data' => $autos
]);
