<?php
	if (isset($_GET['filetxt'])) {
		$y = date('Y');
		$m = date('m');
		$d = date('d');
		$h = date('h');
		$m = date('i');
		$s = date('s');
		$rand = mt_rand(0,50);
		$file = $h.$m.$s.$d.$m.$y.$rand;
		$nm = strval($file).'.html';
		$fopen = fopen('Files/'.$nm,'w');
		$fwrite = fwrite($fopen,$_GET['filetxt']);
		error_log($_GET['filetxt']);
		fclose($fopen);
		echo 'Files/'.$nm;
	}
?>