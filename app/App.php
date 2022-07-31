<?php 

declare(strict_types=1);

function getTransectionFile( string $full_files_path): array 
{
    $files = [];
    foreach(scandir( $full_files_path ) as $file) {

        if(is_dir($file)) {

            continue;
        }
        $files[] = $full_files_path .$file;
    }
    return $files;
}
function getTransection( string $file_name ): array
{
    if( ! file_exists( $file_name )){
        trigger_error('File'. $file_name . "doen not exit". E_USER_ERROR);
    }
    $file = fopen($file_name, 'r');
    fgetcsv($file);
    $transections = [];
    while(($transection = fgetcsv($file)) !== false ) {
        $transections [] = $transection;
    }
    return $transections;
}