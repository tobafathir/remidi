<?php 
$nama = [
    ["Asia", "Tiongkok", 1405820000],
    ["Asia", "India", 1366360000],
    ["Amerika", "Amerika Serikat", 334256000],
    ["Asia", "Indoneia", 268074600],
    ["Asia",  "pakistan", 221212000],
    ["Amerika Selatan", "Brazil", 213777000],
    ["Afrika", "Nigeria", 193392517],
    ["Asia", "Banglades", 169430000],
    ["Eropa", "Rusia", 146877088],
    ["Amerika Utara", "Mexico", 126577691],
    ["Asia", "Jepang", 126420000]
];

$temp_arr=[];

foreach($nama as $key){
    $temp_arr[]=$key[0]. "\n";
}

$pilih=array_unique($temp_arr);

foreach($pilih as $key_x){
    echo $key_x;
}