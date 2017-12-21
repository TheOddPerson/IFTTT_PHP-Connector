<?php
/**
	IFTTT PHP Connector
	Version: 0.1
	Author: Nick Bolhuis
**/

require (config.php); //personal settings saved here. 

if (isset($_POST['verb']) and isset($_POST['action']) {
	switch ($_POST['action']) {
		case 'mpc': //Media player classic home cinema - web interface
			switch ($_POST['verb']) {
				case 'playpause':
					$data = array('wm_command' => '889')
					postRequest("http://" . $home_hostname . ":" . $mpc-hc_port . "/command.html", $data);				
					break;
				case 'skipback': 
					$data = array('wm_command' => '901')
					postRequest("http://" . $home_hostname . ":" . $mpc-hc_port . "/command.html", $data);
					break;
				case 'skipfwd': 
					$data = array('wm_command' => '902')
					postRequest("http://" . $home_hostname . ":" . $mpc-hc_port . "/command.html", $data);
					break;
				case 'next': 
					$data = array('wm_command' => '922')
					postRequest("http://" . $home_hostname . ":" . $mpc-hc_port . "/command.html", $data);
					break;
				case 'prev': 
					$data = array('wm_command' => '921')
					postRequest("http://" . $home_hostname . ":" . $mpc-hc_port . "/command.html", $data);
					break;
				case 'voldown': 
					$data = array('wm_command' => '908')
					postRequest("http://" . $home_hostname . ":" . $mpc-hc_port . "/command.html", $data);
					break;
				case 'volup': 
					$data = array('wm_command' => '907')
					postRequest("http://" . $home_hostname . ":" . $mpc-hc_port . "/command.html", $data);
					break;
				case 'subs': 
					$data = array('wm_command' => '959')
					postRequest("http://" . $home_hostname . ":" . $mpc-hc_port . "/command.html", $data);
					break;
				case 'audio': 
					$data = array('wm_command' => '957')
					postRequest("http://" . $home_hostname . ":" . $mpc-hc_port . "/command.html", $data);
					break;
			}
			break;
		
	}
}




function postRequest($url, $data) {
	// Thanks to dbau of Stack-Exchange
	//https://stackoverflow.com/questions/5647461/how-do-i-send-a-post-request-with-php
	//example:
	//  $url = 'http://server.com/path';
	//  $data = array('key1' => 'value1', 'key2' => 'value2');
	//use key 'http' even if you send the request to https://...
	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	if ($result === FALSE) { /* Handle error */ }

	var_dump($result);
}

?>