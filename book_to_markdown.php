<?php

require 'vendor/autoload.php';
use League\HTMLToMarkdown\HtmlConverter;

$converter = new HtmlConverter();
$book_xml = simplexml_load_file('http://localhost:4200/book.xml');
$book_json = json_encode($book_xml);
$book_obj = json_decode($book_json);
$book_array = $book_obj->node;

// delete all current files
$dir = 'myscripts/markdown';
foreach (glob($dir."/*") as $filename) {
  if (is_file($filename)) {
    unlink($filename);
  }
}
rmdir($dir);
mkdir($dir);


foreach ($book_array as $book) {
  $_title = $book->title;
  $_title = strtolower($_title);
  $_title = preg_replace('@[^a-z0-9_]+@','_', $_title);
  // get the body
  $_body = ($book->body) ? $book->body : '';
  // make sure it's a string
  $_body = (is_string($_body)) ? $_body : '';
  // convert to markdown
  $_body = $converter->convert($_body);
  // remove eronious escaping
  $_body = str_replace('\\_', '_', $_body);
  $_body = str_replace('\\\\', '\\', $_body);
  $_body = str_replace('\\[', '[', $_body);
  $_body = str_replace('\\]', ']', $_body);
  $handle = fopen('myscripts/markdown/' . $_title . '.md', 'w') or die('Cannot open file:  '.$_title);
  fwrite($handle, $_body);
  fclose($handle);
}