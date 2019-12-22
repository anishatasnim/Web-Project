
 <?php
	
	$myfile = fopen('Salary.txt', 'r');
	$data = fread($myfile, filesize('Salary.txt'));
	fclose($myfile);

	echo $data;

?>