<?php 
include "./../database/database.php";

// foreach ($products as $key => $value) {
//     foreach ($value->{'items'} as $item) {
//         mkdir("./Detail/{$key}/{$item[0]}");
//     }
   
// }
foreach(glob('./Detail/brashwire/99575-B-B/*.*', GLOB_NOESCAPE) as $filename){
    echo $filename;
}
?>