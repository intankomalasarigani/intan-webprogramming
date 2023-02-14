<?php
//$namavaribel

// $nama = "Midun";
// $mk = "Web 2";
// $nilai = 90.656;

$nama = $_POST['nama'];
$mk = $_POST['mk'];
$nilai = $_POST['nilai'];

echo "Nama : $nama <br> MK : $mk <br> Nilai : " . round($nilai);
echo '<br>';
echo 'Nama : ' . $nama . ' <br> MK : ' . $mk . ' <br> Nilai : ' . $nilai;
