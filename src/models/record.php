<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/18/2019
 * Time: 10:52 AM
 */
namespace knowthyweakness\models;
class record
{
    public function __construct(Array $data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
}