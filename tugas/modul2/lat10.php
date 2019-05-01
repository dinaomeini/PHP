<?php
$arrNilai = array ("GD" => 80, "V" => 90, "RM" => 75, "L" => 85);

echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrNilai as $nama => $nilai) {
  echo "Nilai $nama = $nilai<br>";
}
reset ($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai) = each($arrNilai)) {
  echo "Nilai $nama = $nilai<br>";
}
 ?>
