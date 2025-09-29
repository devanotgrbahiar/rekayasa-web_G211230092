<?php
$jsonString = 
'{"nama":"Devano Tegar Bahtiar",
"umur":21,
"hobi":["Olahraga"]}';
$obj = json_decode($jsonString);
$arr = json_decode($jsonString, true);

echo "Akses dari Object: " . $obj->nama . " berumur " . $obj->umur . " tahun.<br>";
echo "Akses dari Array: " . $arr["nama"] . " berumur " . $arr["umur"] . " tahun.<br>";
?>