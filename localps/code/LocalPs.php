<?php

/**
 * Created by PhpStorm.
 * User: bbuessenschuett
 * Date: 09.03.2016
 * Time: 09:42
 */
class LocalPs extends DataObject
{

    private static $db = array(
        "AccountName" => "Varchar",
        "Password" => "Varchar"
    );

    private static $has_one = array(
        "Project" => "LocalPProject",
        "Type" => "localPType"
    );

    private static $has_many = array();


}