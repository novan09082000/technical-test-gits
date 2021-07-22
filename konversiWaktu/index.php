<?php

ini_set('date.timezone','Asia/Jakarta');

function KonversiWaktu($waktu)
{
    $split = preg_split('/[:\s]/', $waktu);
    if($split[3] === "PM"){
        $split[0] = (int)$split[0] + 12;
    }
    array_splice($split,2,2);
    return implode(":",$split);
}

$jamSekarang12 = date("h:i:s A"); 
$jamSekarang24 = KonversiWaktu($jamSekarang12);

echo "<h1>Konversi Waktu</h1><br><br>";
echo "Format 12 Jam => " . $jamSekarang12 . "<br>";
echo "Format 24 Jam => " . $jamSekarang24 . "<br>";
?>