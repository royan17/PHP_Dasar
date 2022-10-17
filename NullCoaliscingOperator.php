<?php 

$data = [
    "action" => "Create"
    // "action" => null

];

// isset untuk mengecek data ada atau tidak

// if(isset($data["action"])) {
//     $action = $data["action"];
// } else {
//     $action = "Nothing";
// }

// Null Coalescing Operator
$action = $data["action"] ?? "Nothing";

echo $action .PHP_EOL;

?>