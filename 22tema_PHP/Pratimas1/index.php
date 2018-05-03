<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $_GET['user'];
    echo '<br>' . 'password: ' . $_REQUEST['pass'];
    
    ?>
    <h1>
    
</body>
</html>

/*http://localhost/hello-0321/22tema_PHP/Pratimas1/index.php?user=Jonas-2&pass=123 */


if ($_GET['user'] == 'Jonas' && $_GET)