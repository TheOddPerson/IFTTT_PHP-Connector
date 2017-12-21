<?php
/**
	IFTTT PHP Connector
	Version: 0.1
	Author: Nick Bolhuis
**/

require ('config.php'); //personal settings saved here. 

echo 'Script Begin';

if (isset($_POST['verb']) and isset($_POST['action'])) {
	switch ($_POST['action']) {
		case 'mpc': //Media player classic home cinema - web interface
			$mpc_url = "http://" . $home_hostname . ":" . $mpc_port . "/command.html";			
			switch ($_POST['verb']) {
				case 'playpause':									
					$data = 'wm_command=889';
					break;
				case 'skipback': 
					$data = 'wm_command=901';
					break;
				case 'skipfwd': 
					$data = 'wm_command=902';
					break;
				case 'next': 
					$data = 'wm_command=922';
					break;
				case 'prev': 
					$data = 'wm_command=921';
					break;
				case 'voldown': 
					$data = 'wm_command=908';
					break;
				case 'volup': 
					$data = 'wm_command=907';
					break;
				case 'subs': 
					$data = 'wm_command=959';
					break;
				case 'audio': 
					$data = 'wm_command=957';
					break;
			}
			postRequest($mpc_url, $data);
			break; //end action case 'mpc'
		
	}
} else {
	echo 'no options set';
}

function postRequest($URL, $fieldString){ //Initiate Curl request and send back the result
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fieldString);
        $resulta = curl_exec ($ch);
        if (curl_errno($ch)) {
                print curl_error($ch);
        } else {
        curl_close($ch);
        }
        return $resulta;
}

?>