
<?php
 /*$myFile = "report.csv";
 $fh = fopen($myFile, 'w+') or die("can't open file");
 $stringData = "one, two, three, four\n";
 fwrite($fh, $stringData);
 fclose($fh);
 ?>
 <?php

$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);*/
$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd')
);

$fp = fopen('report.csv', 'a+');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);
?>
