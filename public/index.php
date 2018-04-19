<?php

require("header.php");
?>
<h4>VOLUME_SZENARIO</h4>
<div id="example"></div>
<script>

$( document ).ready(function() {
    var container = document.getElementById('example');
var hot = new Handsontable(container, {
    startRows: 8,
    startCols: 6,
});
    $.get('ajaxget.php?table=VOLUME_SZENARIO', function(res) {
      var data = JSON.parse(res);
      hot.loadData(data.data);
    });
  });
</script>


<form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    <input type="submit" value="Upload" name="submit">
  </div>
</form>
<?php
require("footer.php");

/*
$inputFileName = 'hersteller.xls';
$spreadsheet = IOFactory::load($inputFileName);
$dataArray = $spreadsheet->getActiveSheet()
    ->toArray(
        'A1:B2',     // The worksheet range that we want to retrieve
        NULL,        // Value that should be returned for empty cells
        TRUE,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
        TRUE,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
        TRUE         // Should the array be indexed by cell row and cell column
    );
//print_r($dataArray);exit;
foreach($dataArray as $key => $data){
    $result = $mysqli->query("INSERT INTO hersteller SET id = '".$data['A']."', name = '".$data['B']."'");
}
$inputFileName = 'produkte.xls';
$spreadsheet = IOFactory::load($inputFileName);
$dataArray = $spreadsheet->getActiveSheet()
    ->toArray(
        'A1:B2',     // The worksheet range that we want to retrieve
        NULL,        // Value that should be returned for empty cells
        TRUE,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
        TRUE,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
        TRUE         // Should the array be indexed by cell row and cell column
    );
//print_r($dataArray);exit;
foreach($dataArray as $key => $data){
    $result = $mysqli->query("INSERT INTO produkte SET id = '".$data['A']."', name = '".$data['B']."', hersteller_id = '".$data['C']."'");
}*/



/*
$kernel = new Kernel($env, $debug);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
*/
