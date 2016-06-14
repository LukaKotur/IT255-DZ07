<?php
$a = $_POST['a'];

function factorial($a) {
    $fac=1;
    for($i=1; $i <= $a; $i++){
        $fac *= $i;
    }
    return $fac;
}

header("Content-type: application/json");
$test_array = array ('factorial: ' => factorial($a),);
echo json_encode($test_array);
?>