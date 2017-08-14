<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$config['url_sandbox'] = 'http://sandbox.namesilo.com/api/';
$config['key_sandbox'] = '----sandbox key here-----';
$config['url'] = 'https://www.namesilo.com/api/';
$config['key'] = '--production key----';
/** FALSE for live production / TRUE for sandbox **/
$config['development'] = FALSE;
//displaying messages and process when set to TRUE
$config['debug'] = FALSE;

