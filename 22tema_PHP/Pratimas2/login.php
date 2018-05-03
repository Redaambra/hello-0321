<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if($_POST['user'] == 'Jonas' && $_POST['pass'] == '123') {
    //echo "YES";
    include "info.php";
    } else {
        //echo "NO";
        include "index.php";
    }


?>
    
</body>
</html>