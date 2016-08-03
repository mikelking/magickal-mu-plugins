<?php

/*
Requiring individual files.
*/
require('great-great-grand-father3.php');
require('great-grand-mother.php');
require('great-great-uncle.php');
require('grand-father.php');
require('father.php');
require('son.php');

$mikel = Father::get_instance();
$mikel->print_stats();
print( '=====' . PHP_EOL );

$ml = Great_Grand_Mother::get_instance();
$ml->print_stats();
print( '=====' . PHP_EOL );

$jj = Great_Great_Uncle::get_instance();
$jj->print_stats();
print( '=====' . PHP_EOL );

$jk = Son::get_instance();
$jk->print_stats();
print( '=====' . PHP_EOL );


