<?php
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .chemins::FONCTION -> value;
$filepath = __DIR__ .Chemins::DATA_JSON -> value;


$models =[
    Fonction::json_to_array -> value => function(): array{
        global $filepath;
        $json = file_get_contents($filepath);
        $tableau = json_decode($json, true);
        return $tableau;
    },
    Fonction::array_to_json -> value => function(string $filepath, string $tableau){
        $json = json_encode($tableau, true);
        file_put_contents($filepath, $json);
    }

];