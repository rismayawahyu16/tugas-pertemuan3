
<?php
$celcius = 30;

$fahrenheit = ($celcius * 9/5) + 32;
$reamur = $celcius * 4/5;
$kelvin = $celcius + 273.15;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Konversi Suhu</title>
</head>
<body>

<h2>Program Konversi Suhu</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Jenis Suhu</th>
        <th>Hasil</th>
    </tr>
    <tr>
        <td>Celcius</td>
        <td><?= number_format($celcius, 2) ?></td>
    </tr>
    <tr>
        <td>Fahrenheit</td>
        <td><?= number_format($fahrenheit, 2) ?></td>
    </tr>
    <tr>
        <td>Reamur</td>
        <td><?= number_format($reamur, 2) ?></td>
    </tr>
    <tr>
        <td>Kelvin</td>
        <td><?= number_format($kelvin, 2) ?></td>
    </tr>
</table>

</body>
</html>
