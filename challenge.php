<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Praktikum 10</title>
</head>
<body>
<form method="POST">
    <h1>Perhitungan Aritmatika Challenge 22.11.4624</h1>
    <table>
    <tr>
        <td>
            <label for>Masukkan nama anda</label>
        </td>
        <td>
        : <input type="text" name="nama"><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for>Masukkan angka pertama(1-10)</label>
        </td>
        <td>
        : <input type="number" name="angka1"><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for>Masukkan angka kedua(1-10)</label>
        </td>
        <td>
        : <input type="number" name="angka2"><br>
        </td>
    </tr> 
    </table>
    <input type="submit" name="send" value="Hitung"><br>

</form>
<?php
    if (isset($_POST ['send'])) {
    echo "Masukkan nama anda : $_POST[nama]<br>";
    echo "Masukkan angka pertama(1-10) : $_POST[angka1]<br>";
    echo "Masukkan angka kedua(1-10) : $_POST[angka2]<br>";
    }
?>
</body>
</html>