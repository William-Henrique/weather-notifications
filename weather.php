#!/usr/bin/php
<?php

// find local xml feeds for your area
// http://w1.weather.gov/xml/current_obs/
// updates hourly
$url = 'http://w1.weather.gov/xml/current_obs/KGRB.xml';
$xml = simplexml_load_file($url);

$msg = $xml->observation_time . "\n";
$msg .= $xml->temperature_string . "\n";

// http://osxdaily.com/2012/08/03/send-an-alert-to-notification-center-from-the-command-line-in-os-x/
exec('/usr/bin/terminal-notifier -message "' . $msg . '"');