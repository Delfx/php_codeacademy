<?php 

require_once __DIR__.'/vendor/autoload.php';

use App\Services\Tag;

$tag = new Tag('a');
 
$tag->setText('title')->setAttr('href', 'index.html')->setAttr('style', 'color: black')->show(); 
// prints <a href="index.html">title</a>

echo "<br>";

echo $tag->setText('text')->setAttr('href', 'index.html')->get();
// return <a href="index.html">text</a>