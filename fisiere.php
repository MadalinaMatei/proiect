<?php
$file = 'mada.txt';
//file_put_contents($file,'eu te iubesc mult de tot, stii nu?');
// echo file_get_contents($file);


//$config = parse_ini_file('config.ini', true);

//var_dump($config['second_section']['URL']);


$xml = simplexml_load_file("date.xml") or die("Error: Cannot create object");


//var_dump($xml);
$autori = array();
foreach($xml->book as $book){
	$autori[] = simplexml_load_string($book->author);
}


var_dump($autori);
?>