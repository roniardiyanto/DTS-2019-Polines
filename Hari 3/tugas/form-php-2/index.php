<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Know Your Information</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    <center>
        <div class="head"><h1>Siapa Anda?</h1></div>
        <br>
        <div class="jumbotron">
        <form action="proses.php" method="get">
            Nama Anda?<br>
            <input type="text" name="nama"><br>
            <br>
            Alamat Tinggal? <br>
            <input type="text" name="alamat"><br>
            <br>
            Kata Motivasi? <br>
            <textarea name="motivasi" id="" cols="28" rows="6"></textarea><br>
            <br>
            <button type="submit" class="btn btn-primary">Kirimkan</button>
        </form>
        </div>
    </center>
</body>
</html>