<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 09.03.2016
 * Time: 09:45
 */
class LocalPType extends DataObject
{
    private static $db = array(
        "Title" => "Varchar",
        "Description" => "Text"
    );

    private static $has_many = array(
        "LocalPs" => "LocalPs"
    );


}