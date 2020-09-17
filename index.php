<?
use FileHelper;
$file = __DIR__.'/file.txt';
$parser = FileHelper::getParser($file);
$result = $parser->run();