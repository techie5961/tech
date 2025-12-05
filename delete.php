<?php
$dir = '.git';

function deleteFolder($folder) {
    if (!is_dir($folder)) return;
    $files = array_diff(scandir($folder), ['.', '..']);
    foreach ($files as $file) {
        $path = "$folder/$file";
        is_dir($path) ? deleteFolder($path) : unlink($path);
    }
    rmdir($folder);
}

deleteFolder($dir);
echo "Deleted .git folder!";
