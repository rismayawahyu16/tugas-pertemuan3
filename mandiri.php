
<?php
$berat = 50;
$tinggi = 160;

$bmi = $berat / (($tinggi / 100) * ($tinggi / 100));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Program BMI</title>
</head>
<body>

<h2>Program Menghitung BMI</h2>

<?php
echo "Berat Badan: $berat kg<br>";
echo "Tinggi Badan: $tinggi cm<br>";
echo "Nilai BMI: " . number_format($bmi, 1);
?>

</body>
</html>
