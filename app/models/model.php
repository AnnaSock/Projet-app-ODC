<?php
<<<<<<< HEAD
$filepath = __DIR__ ."/../data/data.json";

$models =[
    'json_to_array'=> function(): array{
=======
require_once __DIR__ ."/../enums/chemins.php";
require_once __DIR__ .chemins::FONCTION -> value;
$filepath = __DIR__ .Chemins::DATA_JSON -> value;


$models =[
    Fonction::json_to_array -> value => function(): array{
>>>>>>> b89b887b3f92b24d80b73a84ca27ebb08e03a3e7
        global $filepath;
        $json = file_get_contents($filepath);
        $tableau = json_decode($json, true);
        return $tableau;
    },
<<<<<<< HEAD
    'array_to_json'=> function(string $filepath, string $tableau){
=======
    Fonction::array_to_json -> value => function(string $filepath, string $tableau){
>>>>>>> b89b887b3f92b24d80b73a84ca27ebb08e03a3e7
        $json = json_encode($tableau, true);
        file_put_contents($filepath, $json);
    }

];