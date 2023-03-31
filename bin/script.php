<?php

// change this path with your GitHub repository name
$repos = "/2023-03-remote-fr-php-projet-iron-man";

//list the php files from root directory that must be converted.
//important: do not write the extension .php
$files = [
    "formBC",
    "formUltron",
    "index",
    "page_experience",
    "page_formation",
    "portfolio"
];

foreach ($files as $file) {
    $fileInputPath = $file . '.php';
    $fileOutputPath = 'docs/' . $file . '.html';
    shell_exec('php ' . $fileInputPath . ' > ' . $fileOutputPath);
    $handle = fopen($fileOutputPath, "r");
    $contents = fread($handle, filesize($fileOutputPath));
    fclose($handle);
    
    $contents = str_replace('href="', 'href="' . $repos, $contents);
    $contents = str_replace('src="', 'src="' . $repos, $contents);
    $contents = str_replace('.php', '.html', $contents);
    
    $handle = fopen($fileOutputPath, "w");
    fwrite($handle, $contents);
    fclose($handle);
}
