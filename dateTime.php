<?php

echo 'seconds since 1970/1/1: ' . time() . '<br>';

$currentTime = time();
echo 'plus 5 days: ' . $currentTime + 5 * 24 * 60 * 60  . '<br>';
echo 'minus 1 day: ' . $currentTime - 60 * 60 * 24 . '<br>';

echo '<br>';

echo 'current date and time: ' . date('m/d/Y g:ia')  . '<br>';
echo 'plus 5 days: ' . date('m/d/Y g:ia', $currentTime + 5 * 24 * 60 * 60)  . '<br>';
echo 'minus 1 day: ' . date('m/d/Y g:ia', $currentTime - 60 * 60 * 24)  . '<br>';

echo '<br>';

echo 'this is my current time zone(what php thinks): ' . date_default_timezone_get() . '<br>';

date_default_timezone_set('America/Vancouver'); // set it to Vancouver
echo '<br>';

echo 'current date and time(accurate): ' . date('m/d/Y g:ia')  . '<br>';


echo 'manually create one using mktime(): ' . date('m/d/Y g:ia', mktime(0, 0, 0, 4, 19, null))  . '<br>';
echo 'manually create one using strtotime(): ' . date('m/d/Y g:ia', strtotime('2021-01-18 07:00:00'))  . '<br>';
echo 'strtotime(\'tomorrow\'): ' . date('m/d/Y g:ia', strtotime('tomorrow'))  . '<br>';
echo 'strtotime(\'yesterday\'): ' . date('m/d/Y g:ia', strtotime('yesterday'))  . '<br>';
echo 'strtotime(\'first day of february\'): ' . date('m/d/Y g:ia', strtotime('first day of february'))  . '<br>';
echo 'strtotime(\'last day of february 2022\'): ' . date('m/d/Y g:ia', strtotime('last day of february 2022'))  . '<br>';
echo 'strtotime(\'second friday of december\'): ' . date('m/d/Y g:ia', strtotime('second friday of december'))  . '<br>';