<?php

spl_autoload_register(function ($className) {
  // 1. get the path to the namespace
  $namespace = 'App\\';

  // 2. remove the preceeding xters, found in 9 from the $className by first checking if the correct namespace is being referenced
  if (strpos($className, $namespace) === 0) {
    /*var_dump($className);
    echo "<br/>-------<br/>";*/

    $noNameSpace = str_replace($namespace, "", $className);
    /*var_dump($noNameSpace);
    echo "<br/>-------<br/>";
    echo "<br/>";*/

    $normalizedClassName = str_replace('\\', DIRECTORY_SEPARATOR, $noNameSpace);
    /*var_dump($normalizedClassName);
    echo "<br/>-------<br/>";
    echo "<br/>";*/

    $fullPathFile = __DIR__ . '/classes/' . $normalizedClassName . '.php';

    /*var_dump($fullPathFile);
    echo "<br/>-------<br/>";
    echo "<br/>";*/

    $realpath = realpath($fullPathFile);
    /*echo "The realpath is: " . $realpath;
    echo "<br/>-------<br/>";
    echo "<br/>";*/

    if ($realpath !== false) {
      require_once($realpath);
    }
  }
});


echo "<br/>-------<br/>";
