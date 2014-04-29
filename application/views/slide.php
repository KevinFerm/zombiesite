<?php foreach($tabel as $key){
	$slide = $key['slidenum'] + 1;
	$max = count($tabel);
	if($key['slidenum'] == $num){
		echo "<h2>Part {$slide} of {$max}: {$key['title']}</h2>";
		echo $key['text'];
	}
} ?>