<?php 

$path = __DIR__;
$input_path = $path.'/input/';
$output_path = $path.'/output/';

$input_content = scandir($input_path);
print_r($input_content);
$ext = '.png';
$name = 0;
foreach($input_content as $file) {
	if($file != '.' || $file != '..'){ //убираем из вывода файлы , кот. нам не нужны
		if(stristr($file, $ext) !== false) { //выбираем расширение, чтобы случайно не удалить лишние файлы
			$name ++ ;
			rename($input_path.$file, $output_path.$name.$ext);
		}
	}
}

print_r($input_content);


 ?>