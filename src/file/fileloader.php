<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/11/2019
 * Time: 12:02 PM
 */

namespace knowthyweakness\file;


class fileloader
{
    public static function returnArray(String $filePath) :array
    {
        $file = fopen($filePath,"r");
        $records = array();
        while(! feof($file))
        {
            $records[] = fgetcsv($file);
        }
        fclose($file);
        return $records;
    }}