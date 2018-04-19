<?php

require("database.php");
$result_array = ['data' => []];
$table = $_GET['table'];
if($table == 'VOLUME_SZENARIO'){
    $cols = ['id', 'name', 'access'];
}
$result_array['data'][] = $cols;
$query = "SELECT * FROM ".$table." WHERE 1";
if ($result = mysqli_query($mysqli, $query)) 
{
    while ($row = mysqli_fetch_array($result)) 
    {
        $a = [];
        foreach($cols as $c){
            $a[] = $row[$c];
        }
        $result_array['data'][] = $a;
    }
}

echo json_encode($result_array);