<?php
// Create the context
set_time_limit(0);
@ob_end_flush();
ob_implicit_flush(true);
       
$c = stream_context_create(array('dio' =>
array('data_rate' => 1200,
'data_bits' => 7,
'stop_bits' => 2,
'parity' => 0,
'flow_control' => 0,
'is_blocking' => 0,
'canonical' => 1)));
// You can change the properties above, matched with your device
     
$handle = fopen("dio.serial:///dev/ttyUSB0", "r+", false, $c); //format: dio.serial://[device-name]
if ($handle) {
	echo "Initiate port";
 
	while(!feof($handle)) {
 
		$data = fgets($handle, 1024); // try to make long, so it will detect the newline automatically
		echo $data;
	sleep(1);
	}
  
	fclose($handle);
}
?>
