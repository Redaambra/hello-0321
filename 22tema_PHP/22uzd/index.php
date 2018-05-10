<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slaptažodžio tikrinimas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/6603c9fd94.js"></script>
</head>
<body>
<h1> Slaptažodžio atnaujinimas </h1>
    <form id="container" action="login.php" method="post">
        <input type='password' name='pass1' placeholder="password">
        <input type='password' name='pass2' placeholder="repeat password">
        <button onclick="login()">Change pasword</button>
    </form>  

    <p></p>


<script>
            function login() {
            $('p').html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Connecting...</span>');

            $.post('login.php', {
                pass1: $('input[name="pass1"]').val(),
                pass2: $('input[name="pass2"]').val()
            }).done(function(resp) {
                if (resp.success) {
                    $('#container').empty();
                    $('p').html('Pakeista');
                    lentele();
                } else {
                    $('p').html(resp.error)
                }
            });
        }

        </script>
</body>
</html>