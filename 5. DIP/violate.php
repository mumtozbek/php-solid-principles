<?php
class FileCache {
  // Some logic
}

class Cache {
  protected $driver;

  public function __construct(FileCache $driver)
  {
    $this->driver = $driver;
  }
}