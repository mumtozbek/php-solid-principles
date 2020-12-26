<?php

class RemoteFileSystem {
  public static function exists($filename)
  {
    return true;
  }

  public static function read($filename)
  {
    return [
      'directory' => 'REMOTE DIRECTORY',
      'size' => 'REMOTE FILE SIZE',
      'contents' => 'REMOTE FILE CONTENTS'
    ];
  }
}

class File {
  public function read($filename) {
    return file_get_contents($filename);
  }
}

class RemoteFile extends File {
  public function read($filename)
  {
    if (RemoteFileSystem::exists($filename) === false) {
      throw new Exception;
    }

    return RemoteFileSystem::read($filename);
  }
}
