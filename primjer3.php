<?php

$dir = new DirectoryIterator(".");

foreach($dir as $file){
    if(!$file->isDot()){
        echo "<br>Datoteka: ".$file->getFilename();
    }
}

?>