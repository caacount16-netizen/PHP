<?php
$siswa = [
  ["nama" => "icha", "nilai" => 100],
  ["nama" => "nada", "nilai" => 86],
  ["nama" => "rindu", "nilai" => 90],
  ["nama" => "monica", "nilai" => 89],
  ["nama" => "salwa", "nilai" => 95],
];

$nilai_saja = [100, 86, 90, 89, 95];
$rata = array_sum($nilai_saja) / count($nilai_saja);

echo "<table border='1'><tr><th>Nama</th><th>Nilai</th></tr>";
foreach ($siswa as $s) {
  echo "<tr><td>{$s['nama']}</td><td>{$s['nilai']}</td></tr>";
}
echo "</table>";
echo "Rata-rata: $rata<br>";
echo "Tertinggi: " . max($nilai_saja) . "<br>";
echo "Terendah: " . min($nilai_saja);
?> 