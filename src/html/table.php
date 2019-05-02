<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/18/2019
 * Time: 10:51 AM
 */
namespace knowthyweakness\html;
class table
{
    public static function table(String $rows) {
        return '<table>' . $rows . '</table>';
    }
    public static function th(String $headings) {
        return '<th>' . $headings . '</th>';
    }
    public static function tr(String $columns) {
        return '<tr>' . $columns . '</tr>';
    }
    public static function td(String $data) {
        return '<td>' . $data . '</td>';
    }
}