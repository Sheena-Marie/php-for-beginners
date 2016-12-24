<?php

$file = "example.txt";

if($handle = fopen($file, 'r')) {

  // This will only read 10 bytes of the file. Each byte is one character
  echo $content = fread($handle, 10);

  // This will read the entire file, no matter the size!
  echo $content = fread($handle, filesize($file));
  fclose($handle);

} else {
  echo "the application was not able to write on the file";
}




?>
