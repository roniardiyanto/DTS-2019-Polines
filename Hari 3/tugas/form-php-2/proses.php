<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/proses.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <title>Kamu Tahu!</title>
</head>
<body>
    <center>
        <div class="jumbotron">
        <?php
            if($_GET["nama"] || $_GET["alamat"] || $_GET["motivasi"]){
                echo "Halo : " . $_GET["nama"] . "<br>";
                echo "Tinggal di : " . $_GET["alamat"] . "<br>";
                echo "Motivasi dari anda : " . $_GET["motivasi"];
            };
?>
        </div>
    </center>
</body>
</html>