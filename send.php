<?php
include "include/smsGateway.php";
header('Content-type: application/json');

$pnum = $_POST['pnum']; // TO DO ---- 'pnum' can be a list of phone numbers with a separator
$msg = $_POST['msg'];
// TO DO: REQUIRES Pasword
$pwd = $_POST['pwd'];

$alert = array('alert' => '');
$smsGateway = new SmsGateway('orgen_c@yahoo.com', $pwd);

//TO DO --- Select a specific device ID according to the number to be texted to
$deviceID = 7526;
$number = $pnum;
$message = $msg;


//TO DO ---- Enambe sending to many numbers at the same time
$result = $smsGateway->sendMessageToNumber($number, $message, $deviceID);

$alert['alert'] = 'Message Sent!';

echo json_encode($alert);
?>
