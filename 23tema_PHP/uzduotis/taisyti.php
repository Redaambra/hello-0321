<?php 

// Prisijungimo duomenys
$servername = 'localhost';
$dbname = 'Auto';
$username = 'Auto';
$password = 'LabaiSlaptas123';


header('Content-Type: application/json');

// Prisijungiame prie duomenų bazės 
$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_REQUEST['id'];
$data = $_REQUEST['date'];
$numeris = $_REQUEST['number'];
$kelias = $_REQUEST['distance'];
$laikas = $_REQUEST['time'];

// Suformuojame UPDATE užklausą
$sql = "UPDATE radars SET number = ?, date = ?, distance = ?, time = ? WHERE id = ?";
$stmt = $conn->prepare($sql);

// Priskiriame parametrų reikšmes
$stmt->bind_param("ssdd", $data, $numeris, $kelias, $laikas);

// Vykdome UPDATE užklausą
$stmt->execute();

echo json_encode([success => true]);


