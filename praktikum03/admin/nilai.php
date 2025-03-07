<?php

    $ns1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
    $ns2 = ["id" => 2, "nim" => "01102", "uts" => 82, "uas" => 82, "tugas" => 72];
    $ns3 = ["id" => 3, "nim" => "01103", "uts" => 83, "uas" => 83, "tugas" => 73];
    $ns4 = ["id" => 4, "nim" => "01104", "uts" => 84, "uas" => 84, "tugas" => 74];
    
    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h3 class="text-center mt-5">Daftar Nilai Siswa</h3>
<br>
<table class="table table-striped-colums table-primary">
<thead>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Nilai Akhir</th>
    </tr>
 </thead>
 <tbody>
    <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
        echo '<tr><td>', $nomor, '</td>';
        echo '<td>'.$ns['nim'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tugas'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
        }
    ?>
 </tbody>
 </table>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
</body>
</html>
