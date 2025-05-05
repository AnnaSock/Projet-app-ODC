<?php
$filepath = __DIR__ ."/../data/data.json";

$models =[
    'json_to_array'=> function(): array{
        global $filepath;
        $json = file_get_contents($filepath);
        $tableau = json_decode($json, true);
        return $tableau;
    },
    'array_to_json'=> function(string $filepath, string $tableau){
        $json = json_encode($tableau, true);
        file_put_contents($filepath, $json);
    }

];