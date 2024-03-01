<?php
if(!empty($_GET["file"])) {

    $filename = basename($_GET['file']);
    $filepath = 'uploads/'.$filename;
    if(!empty($filename) && file_exists($filepath)) {
        //Define Headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        readfile($filename);
        exit();
    }
}
else {
    echo "This file does not exists";
}
?>