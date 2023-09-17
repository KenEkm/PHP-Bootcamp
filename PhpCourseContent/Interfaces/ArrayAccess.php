<?php

//ArrayAccess Interface ermöglich zugriff auf Klassenattribute wie arrays also mit [] Schreibweise.
class Entry implements ArrayAccess
{
 
  public $title = "test";
 
  public function offsetExists(mixed $offset): bool
  {
    if ($offset == "content") {
      return true;
    }
  }
 
  public function offsetGet(mixed $offset): mixed
  {
    if ($offset == "content") {
      return $this->title;
    }
  }
 
  public function offsetSet(mixed $offset, mixed $value): void
  {
    if ($offset == "content") {
      $this->title = $value;
    }
  }
 
  public function offsetUnset(mixed $offset): void
  {
    var_dump("offsetUnset: {$offset}");
  }
}

$entry = new Entry();
$entry['content'] = "test test";
var_dump($entry["content"]);

?>