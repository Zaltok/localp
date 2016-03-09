<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 09.03.2016
 * Time: 09:39
 */
class LocalPProject extends DataObject
{
    private static $db = array(
        "Title" => "Varchar",
        "Description" => "Text"
    );

    private static $has_one = array(
        "Parent" => "LocalPProject",
        "Admin" => "Member"
    );

    private static $has_many = array(
        "Children" => "LocalPProject",
        "LocalPs" => "LocalPs"

    );

    private static $many_many = array(
        "Groups" => "Group"
    );

    private static $belongs_many_many = array();




}