<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Know Your Information</title>
</head>
<body>
    <center>
        <h1>Siapa Anda?</h1>
        <br>
        <form action="#" method="get">
            Nama Anda?<br>
            <input type="text" name="nama" placeholder="Nama Lengkap"><br>
            <br>
            Alamat Tinggal? <br>
            <input type="text" name="alamat" placeholder="Alamat Rumah"><br>
            <br>
            Kata Motivasi? <br>
            <textarea name="motivasi" id="" cols="30" rows="10"></textarea><br>
            <br>
            <input type="submit" value="Kirimkan" name="submit">
        </form>
        <?php 
            if($_GET["nama"] || $_GET["alamat"] || $_GET["motivasi"]){
                echo "Halo : " . $_GET["nama"] . "<br>";
                echo "Tinggal di : " . $_GET["alamat"] . "<br>";
                echo "Motivasi dari anda :" . $_GET["motivasi"];
            };
        ?>
    </center>
</body>
</html>