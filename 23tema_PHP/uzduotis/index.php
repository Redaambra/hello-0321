<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP 23 darbas RB</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/6603c9fd94.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        table {
            border: 1px solid black;
        }

        .modal {
            visibility: hidden;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;

        }

        .modal .content {
            background-color: white;
            padding: 10px;
            border: 4px solid white;
            border-radius: 4px;
            box-shadow: 1px 1px 4px black;
            height: 100px;
            width: 200px;
            position: absolute;
            top: 300px;
        }

        .modal .content1 {
            background-color: white;
            padding: 10px;
            border: 4px solid white;
            border-radius: 4px;
            box-shadow: 1px 1px 4px black;
            position: absolute;
            top: 100px;
            width: 400px;
        }
    </style>
</head>

<body>
<div id="error"></div>
    <div id="container">
        <div></div>
        <br>
        <br>
        <br>
        <button onclick ="naujasAuto()" class="btn btn-info btn-lg">Naujas įrašas</button>
        <br>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr class="info">
                    <th>Id</th>
                    <th>Data</th>
                    <th>Numeris</th>
                    <th>Atstumas</th>
                    <th>Laikas</th>
                    <th>Veiksmai</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

    </div>
    <!-- modalinis ar trinti -->
    <div class="modal" id="confirm" onclick="closeConfirm()">
        <div class="content">
            <p>Ar tikrai norite istrinti?</p>
            <div>
                <button>Ne</button>
                <button id="confirm-ok">Taip</button>
            </div>
        </div>
    </div>

    <!-- modalinis ivesti nauja eilute -->
    <div class="modal" id="newLine">
        <div class="content1">
            <h4>Suveskite naujus duomenis</h4>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="data">Data</label>
                    <input name="date" type="date" class="form-control" id="data">
                </div>
                <div class="form-group">
                    <label for="text">numeris:</label>
                    <input name="number" type="text" class="form-control" id="numeris" placeholder="ABC123">
                </div>
                <div class="form-group">
                    <label for="atstumas">Atstumas:</label>
                    <input name="distance" type="number" class="form-control" id="atstumas" placeholder="metrai">
                </div>
                <div class="form-group">
                    <label for="laikas">Laikas:</label>
                    <input name="time" type="number" class="form-control" id="laikas" placeholder="sekundės">
                </div>
                <label>
                        <input name="id" type="hidden" value="<?= $row['id'] ?>"required><br>
                </label>    
                <input type="submit" class="btn btn-default" name="save" value="Issaugoti">
                <button class="btn btn-default">Atšaukti</button>
            </form>
        </div>
    </div>



    <!-- modalinis taisyti eilute -->
    <div class="modal" id="secondLine">
        <div class="content1">
            <h4>Pataisykite duomenis</h4>
            <form action="taisyti.php" method="GET">
                <div class="form-group">
                    <label for="data">Data</label>
                    <input name="date" type="date" class="form-control" id="data1">
                </div>
                <div class="form-group">
                    <label for="text">numeris:</label>
                    <input name="number" type="text" class="form-control" id="numeris1" placeholder="ABC123">
                </div>
                <div class="form-group">
                    <label for="atstumas">Atstumas:</label>
                    <input name="distance" type="number" class="form-control" id="atstumas1" placeholder="metrai">
                </div>
                <div class="form-group">
                    <label for="laikas">Laikas:</label>
                    <input name="time" type="number" class="form-control" id="laikas1" placeholder="sekundės">
                </div>
                <label>
                        <input name="id" type="hidden" value="<?= $row['id'] ?>"required><br>
                </label>    
                <input type="submit" class="btn btn-default" name="edit" value="Išsaugoti">
                <button class="btn btn-default">Atšaukti</button>
            </form>
        </div>
    </div>

<?php
        $servername = 'localhost';
        $dbname = 'Auto';
        $username = 'Auto';
        $password = 'LabaiSlaptas123';
        
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die('Nepavyko prisijungti: ' . $conn->connect_error);
        }
        
        $row = [];
        
        if (isset($_GET['edit'])){
            $sql = "SELECT * FROM radars WHERE id =".$_GET['edit'];
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
        }
        
        if (isset($_POST['save'])) {
            if ($_POST['id'] > 0) {
                $sql = "UPDATE radars SET `number` = ?, `date` = ?, `distance` = ?, `time` = ? WHERE id = ?"; 
                $stmts = $conn->prepare($sql);
                $stmts->bind_param("ssddi", $_POST['number'], $_POST['date'], $_POST['distance'], $_POST['time'], $_POST['id']);
                $stmts->execute(); 
            } else {
                $insert = "INSERT INTO radars(`number`, `date`, `distance`, `time`) VALUES(?, ?, ?, ?)"; 
                $stmt = $conn->prepare($insert);
                $stmt->bind_param("ssdd", $_POST['number'], $_POST['date'], $_POST['distance'], $_POST['time']);
                $stmt->execute();
            }
        }
        ?> 


    <script>
        $(function () {
            gautiLentele();
        });


        function gautiLentele() {
            $.get('lentele.php', function (resp) {
                if (resp.success) {
                    rodytilentele(resp.data);
                } else {
                    $('#error').text('kazkokia gauti lentele klaida');
                }
            });
            fail(function () {
                $('#error').text('kazkokia rimta klaida');
            });
        }



        function rodytilentele(data) {
            var e = document.querySelector('tbody');
            var txt = '';
            data.forEach(x => {
                txt += '<tr>' +
                    '<td>' + x.id + '</td>' +
                    '<td>' + x.date + '</td>' +
                    '<td>' + x.number + '</td>' +
                    '<td>' + x.distance + '</td>' +
                    '<td>' + x.time + '</td>' +
                    '<td>' +
                    '<button class="btn btn-info btn-sm" onclick="trinti(' + x.id + ')">Trintukas</button>' +
                    '<button class="btn btn-info btn-sm" onclick="taisyti(' + x.id + ')">Pieštukas</button>' +
                    '</td>' +
                    '</tr>';

            });
            e.innerHTML = txt;
        }

        function trinti(autoId) {
            document.getElementById("confirm").style.visibility = 'visible';
            document.getElementById('container').style.filter = 'blur(2px)';

            document.getElementById('confirm-ok').onclick = function () {
                $.get('trinti.php', { id: autoId }, function (resp) {
                    if (resp.success) {
                        gautiLentele();
                    } else {
                        $('div').text('klaida trynimo metu');
                    }
                });
            }
        }

        function closeConfirm() {
            document.getElementById("confirm").style.visibility = 'hidden';
            document.getElementById('container').style.filter = 'blur(0)';
        }

        function taisyti(autoId) {
            document.getElementById("secondLine").style.visibility = 'visible';
            document.getElementById('container').style.filter = 'blur(2px)';

            function taisyti(autoId) {
    editRow = index;
    var a = m[index];
    document.getElementById("data2").value = a.data,
    document.getElementById("numeris2").value = a.numeris,
    document.getElementById("atstumas2").value = a.atstumas,
    document.getElementById("laikas2").value = a.laikas;

      /*      document.getElementById('confirm-ok').onclick = function () {
                $.get('taisyti.php', { id: autoId }, function (resp) {
                    if (resp.success) {
                        gautiLentele();
                    } else {
                        $('div').text('klaida trynimo metu');
                    }
                });
            } */ 

        }

        
    </script>

    
    <footer>
            Kaunas, &copy; <?php echo date("Y-M-D");?>
            
    </footer>
</body>

</html>