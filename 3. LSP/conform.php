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

interface FileRepositoryInterface {
  /**
   * Read a file from repository
   *
   * @param $filename
   * @return boolean|string
   */
  public function read($filename);
}

class LocalFileRepository implements FileRepositoryInterface {
  /**
   * Read a local file
   *
   * @param $filename
   * @return boolean|string
   */
  public function read($filename) {
    return file_get_contents($filename);
  }
}

class RemoteFileRepository implements FileRepositoryInterface {
  /**
   * Read a remote file
   *
   * @param $filename
   * @return boolean|string
   */
  public function read($filename)
  {
    if (RemoteFileSystem::exists($filename) === false) {
      return false;
    }

    $file = RemoteFileSystem::read($filename);

    return $file['contents'];
  }
}
