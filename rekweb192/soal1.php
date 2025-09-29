<?php
$data = array(
    "nama" => "Devano",
    "umur" => 21,
    "hobi" => array("Futsal",)
);

$jsonData = json_encode($data);
echo "Hasil Encode JSON: " . $jsonData;
?>

