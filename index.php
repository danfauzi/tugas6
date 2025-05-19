<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            width: 30px;
            height: 30px;
        }
        th {
            background-color: #CCCCFF;
        }
        .genap {
            background-color: cyan;
        }
        .ganjil {
            background-color: yellow;
        }
        .header {
            background-color: lime;
        }
    </style>
</head>
<body>

<h3>1) Angka genap dari 1 sampai 10:</h3>
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>

<h3>2) Tabel Perkalian 1 - 10:</h3>
<table>
    <tr>
        <th class="header">bilangan</th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th class='header'>$i</th>";
        }
        ?>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th class='header'>$i</th>";
        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;
            $kelas = ($hasil % 2 == 0) ? 'genap' : 'ganjil';
            echo "<td class='$kelas'>$hasil</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
