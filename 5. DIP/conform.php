<?php
interface CacheInterface {
  // Some logic
}

class FileCache implements CacheInterface {
  // Some logic
}

class RedisCache implements CacheInterface {
  // Some logic
}

class Cache {
  protected $driver;

  public function __construct(CacheInterface $driver)
  {
    $this->driver = $driver;
  }
}
