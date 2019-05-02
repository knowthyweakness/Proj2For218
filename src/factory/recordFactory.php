<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/18/2019
 * Time: 10:47 AM
 */
namespace knowthyweakness\factory;
use knowthyweakness\models\record;
class recordFactory
{
    public static function create(Array $data) {
        return new record($data);
    }
}