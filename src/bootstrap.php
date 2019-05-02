<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/11/2019
 * Time: 11:07 AM
 */

namespace knowthyweakness;


class bootstrap
{
    public function _construct(string $filePath)
    {
        $records =  csvLoad::returnArray($filePath);
        $record = array('year' => '1975', 'title' => 'hero', 'win' => 'yes');
        $object = factory\recordFactory::create($record);
        print_r($object);
        echo table::table('stuff');
    }

}