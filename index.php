<?php 

// Constants
const IPADRESSE = "CAMERA IP ADRESS"; 
const SECUREID = "NETATMO SECUREID";
const DIRTOSAVE = "DIRECTORY WHERE PICS WILL BE SAVED";

// Timestamp
$stamp = strftime("%d.%B.%Y-%X");

// Camera Picture URL
$cameraURL = "http://" . IPADRESSE . "/" . SECUREID . "/live/snapshot_720.jpg";
 
// Curl Function
function file_get_contents_per_curl($url) { 
    $chandler = curl_init(); 
  
    curl_setopt($chandler, CURLOPT_HEADER, 0); 
    curl_setopt($chandler, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($chandler, CURLOPT_URL, $url); 
  
    $data = curl_exec($chandler); 
    curl_close($chandler); 
  
    return $data; 
} 

// Check if directory for saving files exists - if not, create it
if (!is_dir(DIRTOSAVE)) {
  mkdir(DIRTOSAVE);
}

$data = file_get_contents_per_curl($cameraURL); 

// Picture Filename (includes date and time) 
$fp = DIRTOSAVE . '/camerapic-' . $stamp . '.png';  
 
// Download Picture
file_put_contents( $fp, $data ); 
echo "Picture downloaded!"

?> 
