<?php
/**
 * config.php
 *
 * Author: Patrick McGranaghan
 *
 * Config file for app
 *
 */

// Variables

$config = array(
    'name'              =>  'SMS Spoof',
    'version'           =>  '0.1a',
    'author'            =>  'Patrick McGranaghan',
    'robots'            =>  'noindex, nofollow',
    'title'             =>  'SMS Spoof - ',
    'description'       =>  'Spoof SMS\'',
    'AccountSid'        =>  'AC2b238522fda1dd2b7db0b694c40d7e07',
    'AuthToken'         =>  'fa239bebf2206f9c3ecab21f4fcfdc72'
    // 
    // 
    // **Account Information**
    // Currently this application only has support for Twilio (https://www.twilio.com/)
    // To be able to send an SMS you will have to add your Account SID and Auth Token.
    // You can get these from the console (https://www.twilio.com/console)
    // You do not have to buy a phone number, however you must have balance on your account.
);

?>
